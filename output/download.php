<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");

$table = postvalue("table");
$strTableName = GetTableByShort($table);

if (!checkTableName($table))
{
	exit(0);
}

include("include/".$table."_variables.php");


if(!isLogged() || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	header("Location: login.php"); 
	return;
}

$field = postvalue("field");

//	check permissions
if(!$gSettings->checkFieldPermissions($field))
	return;
	
$fieldsArr = $gSettings->getFieldsList();	

foreach ($fieldsArr as $f)
{
	$fViewFormat = $gSettings->getViewFormat($f);
	if ($field == $f && ($fViewFormat != FORMAT_FILE && $fViewFormat != FORMAT_AUDIO && $fViewFormat != FORMAT_VIDEO))
	{
		exit(0);
	}
}

//	construct sql
$keysArr = $gSettings->getTableKeys();
$keys = array();
foreach ($keysArr as $ind=>$k)
{	
	$keys[$k]=postvalue("key".($ind+1));
}
$where=KeyWhere($keys);


if ($gSettings->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN)
{
	$where=whereAdd($where,SecuritySQL("Search"));	
}

$sql = $gQuery->gSQLWhere($where);


$rs = db_query($sql,$conn);
if(!$rs)
  return;

$data=db_fetch_array($rs);


if(!$data)
	return;

$filename=$data[$field];
$ext=substr($filename,strlen($filename)-4);


$ctype = getContentTypeByExtension($ext);


if($gSettings->isAbsolute($field))
	$absFileName = $gSettings->getUploadFolder($field).$filename;
else
	$absFileName = getabspath($gSettings->getUploadFolder($field).$filename);
	
		
// if no file exists return 404 err
if (!file_exists($absFileName))
{
	returnError404();
	exit();
}
// get file size
$strfilesize = filesize($absFileName);
if($strfilesize===FALSE)
{
	returnError404();
	exit();
}

header("Content-Type: ".$ctype);
header("Content-Disposition: attachment;Filename=\"".$filename."\"");
header("Cache-Control: private");
SendContentLength($strfilesize);
printfile($absFileName);
?>
