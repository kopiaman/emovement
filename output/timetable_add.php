<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/timetable_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

//	check if logged in
if(@$_SESSION["UserID"] && IsAdmin() && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{
	echo "<p>"."You don't have permissions to access this table"."<br>Proceed to <a href=\"admin.php\">Admin Area</a> to set up user permissions</p>";
	return;
}
if(!isLogged() || CheckPermissionsEvent($strTableName, 'A') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("add2","ExtravaganzaOrange1","MobileOrange1");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["timetable_add"] = $layout;

$layout = new TLayout("tab","ExtravaganzaOrange1","MobileOrange1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["timetable_add_Date_Time1"] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "timetable_inline_add.htm";
else
	$templatefile = "timetable_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);

$params["timepicker"] = true;

$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: timetable_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing category - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_category = $pageObject->getControl("category", $id);
		$control_category->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing category - end
//	processing level - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_level = $pageObject->getControl("level", $id);
		$control_level->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing level - end
//	processing title - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_title = $pageObject->getControl("title", $id);
		$control_title->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing title - end
//	processing location - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_location = $pageObject->getControl("location", $id);
		$control_location->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing location - end
//	processing organizer - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_organizer = $pageObject->getControl("organizer", $id);
		$control_organizer->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing organizer - end
//	processing summary - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_summary = $pageObject->getControl("summary", $id);
		$control_summary->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing summary - end
//	processing attachment - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_attachment = $pageObject->getControl("attachment", $id);
		$control_attachment->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing attachment - end
//	processing sstatus - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_sstatus = $pageObject->getControl("sstatus", $id);
		$control_sstatus->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing sstatus - end
//	processing start_time - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_start_time = $pageObject->getControl("start_time", $id);
		$control_start_time->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing start_time - end
//	processing end_time - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_end_time = $pageObject->getControl("end_time", $id);
		$control_end_time->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing end_time - end
//	processing date - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_date = $pageObject->getControl("date", $id);
		$control_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing date - end
//	processing endate - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_endate = $pageObject->getControl("endate", $id);
		$control_endate->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing endate - end




	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing category - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_category->afterSuccessfulSave();
			}
//	processing category - end
//	processing level - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_level->afterSuccessfulSave();
			}
//	processing level - end
//	processing title - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_title->afterSuccessfulSave();
			}
//	processing title - end
//	processing location - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_location->afterSuccessfulSave();
			}
//	processing location - end
//	processing organizer - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_organizer->afterSuccessfulSave();
			}
//	processing organizer - end
//	processing summary - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_summary->afterSuccessfulSave();
			}
//	processing summary - end
//	processing attachment - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_attachment->afterSuccessfulSave();
			}
//	processing attachment - end
//	processing sstatus - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_sstatus->afterSuccessfulSave();
			}
//	processing sstatus - end
//	processing start_time - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_start_time->afterSuccessfulSave();
			}
//	processing start_time - end
//	processing end_time - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_end_time->afterSuccessfulSave();
			}
//	processing end_time - end
//	processing date - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_date->afterSuccessfulSave();
			}
//	processing date - end
//	processing endate - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_endate->afterSuccessfulSave();
			}
//	processing endate - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'timetable_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'timetable_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: timetable_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["id"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["id"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["id"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
	$defvalues["sstatus"] = "Pending";
}



if($readavalues)
{
	$defvalues["category"]=@$avalues["category"];
	$defvalues["level"]=@$avalues["level"];
	$defvalues["title"]=@$avalues["title"];
	$defvalues["location"]=@$avalues["location"];
	$defvalues["organizer"]=@$avalues["organizer"];
	$defvalues["summary"]=@$avalues["summary"];
	$defvalues["start_time"]=@$avalues["start_time"];
	$defvalues["end_time"]=@$avalues["end_time"];
	$defvalues["date"]=@$avalues["date"];
	$defvalues["endate"]=@$avalues["endate"];
	$defvalues["sstatus"]=@$avalues["sstatus"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("category"))
		$xt->assign("category_fieldblock",true);
	else
		$xt->assign("category_tabfieldblock",true);
	$xt->assign("category_label",true);
	if(isEnableSection508())
		$xt->assign_section("category_label","<label for=\"".GetInputElementId("category", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("level"))
		$xt->assign("level_fieldblock",true);
	else
		$xt->assign("level_tabfieldblock",true);
	$xt->assign("level_label",true);
	if(isEnableSection508())
		$xt->assign_section("level_label","<label for=\"".GetInputElementId("level", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("title"))
		$xt->assign("title_fieldblock",true);
	else
		$xt->assign("title_tabfieldblock",true);
	$xt->assign("title_label",true);
	if(isEnableSection508())
		$xt->assign_section("title_label","<label for=\"".GetInputElementId("title", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("location"))
		$xt->assign("location_fieldblock",true);
	else
		$xt->assign("location_tabfieldblock",true);
	$xt->assign("location_label",true);
	if(isEnableSection508())
		$xt->assign_section("location_label","<label for=\"".GetInputElementId("location", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("organizer"))
		$xt->assign("organizer_fieldblock",true);
	else
		$xt->assign("organizer_tabfieldblock",true);
	$xt->assign("organizer_label",true);
	if(isEnableSection508())
		$xt->assign_section("organizer_label","<label for=\"".GetInputElementId("organizer", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("summary"))
		$xt->assign("summary_fieldblock",true);
	else
		$xt->assign("summary_tabfieldblock",true);
	$xt->assign("summary_label",true);
	if(isEnableSection508())
		$xt->assign_section("summary_label","<label for=\"".GetInputElementId("summary", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("attachment"))
		$xt->assign("attachment_fieldblock",true);
	else
		$xt->assign("attachment_tabfieldblock",true);
	$xt->assign("attachment_label",true);
	if(isEnableSection508())
		$xt->assign_section("attachment_label","<label for=\"".GetInputElementId("attachment", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("start_time"))
		$xt->assign("start_time_fieldblock",true);
	else
		$xt->assign("start_time_tabfieldblock",true);
	$xt->assign("start_time_label",true);
	if(isEnableSection508())
		$xt->assign_section("start_time_label","<label for=\"".GetInputElementId("start_time", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("end_time"))
		$xt->assign("end_time_fieldblock",true);
	else
		$xt->assign("end_time_tabfieldblock",true);
	$xt->assign("end_time_label",true);
	if(isEnableSection508())
		$xt->assign_section("end_time_label","<label for=\"".GetInputElementId("end_time", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("date"))
		$xt->assign("date_fieldblock",true);
	else
		$xt->assign("date_tabfieldblock",true);
	$xt->assign("date_label",true);
	if(isEnableSection508())
		$xt->assign_section("date_label","<label for=\"".GetInputElementId("date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("endate"))
		$xt->assign("endate_fieldblock",true);
	else
		$xt->assign("endate_tabfieldblock",true);
	$xt->assign("endate_label",true);
	if(isEnableSection508())
		$xt->assign_section("endate_label","<label for=\"".GetInputElementId("endate", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sstatus"))
		$xt->assign("sstatus_fieldblock",true);
	else
		$xt->assign("sstatus_tabfieldblock",true);
	$xt->assign("sstatus_label",true);
	if(isEnableSection508())
		$xt->assign_section("sstatus_label","<label for=\"".GetInputElementId("sstatus", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
	$pageObject->readOnlyFields["sstatus"] = $pageObject->showDBValue("sstatus", $defvalues);
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	
////////////////////////////////////////////
//	category
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("category", $data, $keylink);
		$showValues["category"] = $value;
		$showFields[] = "category";
	}	
//	level
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("level", $data, $keylink);
		$showValues["level"] = $value;
		$showFields[] = "level";
	}	
//	title
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("title", $data, $keylink);
		$showValues["title"] = $value;
		$showFields[] = "title";
	}	
//	location
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("location", $data, $keylink);
		$showValues["location"] = $value;
		$showFields[] = "location";
	}	
//	organizer
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("organizer", $data, $keylink);
		$showValues["organizer"] = $value;
		$showFields[] = "organizer";
	}	
//	summary
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("summary", $data, $keylink);
		$showValues["summary"] = $value;
		$showFields[] = "summary";
	}	
//	attachment
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("attachment", $data, $keylink);
		$showValues["attachment"] = $value;
		$showFields[] = "attachment";
	}	
//	department
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("department", $data, $keylink);
		$showValues["department"] = $value;
		$showFields[] = "department";
	}	
//	start_time
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("start_time", $data, $keylink);
		$showValues["start_time"] = $value;
		$showFields[] = "start_time";
	}	
//	end_time
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("end_time", $data, $keylink);
		$showValues["end_time"] = $value;
		$showFields[] = "end_time";
	}	
//	staffID
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("staffID", $data, $keylink);
		$showValues["staffID"] = $value;
		$showFields[] = "staffID";
	}	
//	date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("date", $data, $keylink);
		$showValues["date"] = $value;
		$showFields[] = "date";
	}	
//	week
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("week", $data, $keylink);
		$showValues["week"] = $value;
		$showFields[] = "week";
	}	
//	endate
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("endate", $data, $keylink);
		$showValues["endate"] = $value;
		$showFields[] = "endate";
	}	
//	sstatus
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sstatus", $data, $keylink);
		$showValues["sstatus"] = $value;
		$showFields[] = "sstatus";
	}	
//	note
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("note", $data, $keylink);
		$showValues["note"] = $value;
		$showFields[] = "note";
	}	
//	subdepartment
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("subdepartment", $data, $keylink);
		$showValues["subdepartment"] = $value;
		$showFields[] = "subdepartment";
	}	
		$showRawValues["id"] = substr($data["id"],0,100);
		$showRawValues["fid"] = substr($data["fid"],0,100);
		$showRawValues["category"] = substr($data["category"],0,100);
		$showRawValues["level"] = substr($data["level"],0,100);
		$showRawValues["title"] = substr($data["title"],0,100);
		$showRawValues["location"] = substr($data["location"],0,100);
		$showRawValues["organizer"] = substr($data["organizer"],0,100);
		$showRawValues["summary"] = substr($data["summary"],0,100);
		$showRawValues["attachment"] = substr($data["attachment"],0,100);
		$showRawValues["department"] = substr($data["department"],0,100);
		$showRawValues["start_time"] = substr($data["start_time"],0,100);
		$showRawValues["end_time"] = substr($data["end_time"],0,100);
		$showRawValues["staffID"] = substr($data["staffID"],0,100);
		$showRawValues["date"] = substr($data["date"],0,100);
		$showRawValues["day"] = substr($data["day"],0,100);
		$showRawValues["week"] = substr($data["week"],0,100);
		$showRawValues["month"] = substr($data["month"],0,100);
		$showRawValues["year"] = substr($data["year"],0,100);
		$showRawValues["endate"] = substr($data["endate"],0,100);
		$showRawValues["sstatus"] = substr($data["sstatus"],0,100);
		$showRawValues["pos"] = substr($data["pos"],0,100);
		$showRawValues["period"] = substr($data["period"],0,100);
		$showRawValues["note"] = substr($data["note"],0,100);
		$showRawValues["subdepartment"] = substr($data["subdepartment"],0,100);
		$showRawValues["date_status"] = substr($data["date_status"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "timetable";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}	
			
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "timetable";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);
$pageObject->xt->assign("legend", true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>
