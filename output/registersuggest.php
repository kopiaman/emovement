<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("include/user_variables.php");
require_once(getabspath("classes/cipherer.php"));
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

$result = array(); 
$cipherer = new RunnerCipherer("user");
$t_captcha="";
$email="";
$password="";
$userName="";
$field = postvalue('field');
$val = postvalue('val');
if($field == "icno")
	$userName = $val;
else if($field == "pass")
	$password = $val;
else if($field == "umail")
	$email = $val;
else if($field == 'captcha')
	$t_captcha = $val;


if($cipherer->isFieldEncrypted("icno"))
	$sUsername = $cipherer->MakeDBValue("icno",$userName);	
else 
	$sUsername = add_db_quotes("icno",$userName);

if($cipherer->isFieldEncrypted("umail"))
	$sEmail = $cipherer->MakeDBValue("umail",$email);	
else 
	$sEmail = add_db_quotes("umail",$email);	
	

//	check if entered username already exists
if(strlen($userName))
{
	$strSQL="select count(*) from `user` where ".GetFullFieldName("`icno`",$strTableName,false)."=".$sUsername;
   	$rs=db_query($strSQL,$conn);
	$data=db_fetch_numarray($rs);
	if($data[0]>0)
		$result[] = "Username"." <i>".$userName."</i> "."already exists. Choose another username.";
}

//	check if entered email already exists
if(strlen($email))
{
	$strSQL="select count(*) from `user` where ".GetFullFieldName("`umail`",$strTableName,false)."=".$sEmail;
   	$rs=db_query($strSQL,$conn);
	$data=db_fetch_numarray($rs);
	if($data[0]>0)
		$result[] = "Email"." <i>".$email."</i> "."already registered. If you forgot your username or password use the password reminder form.";
}


echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => count($result) > 0 ? false : true
	, 'errors' => implode('. ', $result))))."</textarea>";
?>