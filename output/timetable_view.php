<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/timetable_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","ExtravaganzaOrange1","MobileOrange1");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["timetable_view"] = $layout;


$layout = new TLayout("viewtab","ExtravaganzaOrange1","MobileOrange1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["timetable_view_Date_Time1"] = $layout;



//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: timetable_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "subdepartment";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("subdepartment");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "category";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("category");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "level";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("level");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "title";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("title");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "location";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("location");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "organizer";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("organizer");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "summary";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("summary");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "attachment";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("attachment");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sstatus";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("sstatus");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "note";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("note");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "start_time";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("start_time");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "end_time";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("end_time");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "date";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("date");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "endate";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("endate");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("id", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));

////////////////////////////////////////////
//subdepartment - 
	
	$value = $pageObject->showDBValue("subdepartment", $data, $keylink);
	if($mainTableOwnerID=="subdepartment")
		$ownerIdValue=$value;
	$xt->assign("subdepartment_value",$value);
	if(!$pageObject->isAppearOnTabs("subdepartment"))
		$xt->assign("subdepartment_fieldblock",true);
	else
		$xt->assign("subdepartment_tabfieldblock",true);
////////////////////////////////////////////
//category - 
	
	$value = $pageObject->showDBValue("category", $data, $keylink);
	if($mainTableOwnerID=="category")
		$ownerIdValue=$value;
	$xt->assign("category_value",$value);
	if(!$pageObject->isAppearOnTabs("category"))
		$xt->assign("category_fieldblock",true);
	else
		$xt->assign("category_tabfieldblock",true);
////////////////////////////////////////////
//level - 
	
	$value = $pageObject->showDBValue("level", $data, $keylink);
	if($mainTableOwnerID=="level")
		$ownerIdValue=$value;
	$xt->assign("level_value",$value);
	if(!$pageObject->isAppearOnTabs("level"))
		$xt->assign("level_fieldblock",true);
	else
		$xt->assign("level_tabfieldblock",true);
////////////////////////////////////////////
//title - 
	
	$value = $pageObject->showDBValue("title", $data, $keylink);
	if($mainTableOwnerID=="title")
		$ownerIdValue=$value;
	$xt->assign("title_value",$value);
	if(!$pageObject->isAppearOnTabs("title"))
		$xt->assign("title_fieldblock",true);
	else
		$xt->assign("title_tabfieldblock",true);
////////////////////////////////////////////
//location - 
	
	$value = $pageObject->showDBValue("location", $data, $keylink);
	if($mainTableOwnerID=="location")
		$ownerIdValue=$value;
	$xt->assign("location_value",$value);
	if(!$pageObject->isAppearOnTabs("location"))
		$xt->assign("location_fieldblock",true);
	else
		$xt->assign("location_tabfieldblock",true);
////////////////////////////////////////////
//organizer - 
	
	$value = $pageObject->showDBValue("organizer", $data, $keylink);
	if($mainTableOwnerID=="organizer")
		$ownerIdValue=$value;
	$xt->assign("organizer_value",$value);
	if(!$pageObject->isAppearOnTabs("organizer"))
		$xt->assign("organizer_fieldblock",true);
	else
		$xt->assign("organizer_tabfieldblock",true);
////////////////////////////////////////////
//summary - 
	
	$value = $pageObject->showDBValue("summary", $data, $keylink);
	if($mainTableOwnerID=="summary")
		$ownerIdValue=$value;
	$xt->assign("summary_value",$value);
	if(!$pageObject->isAppearOnTabs("summary"))
		$xt->assign("summary_fieldblock",true);
	else
		$xt->assign("summary_tabfieldblock",true);
////////////////////////////////////////////
//attachment - Document Download
	
	$value = $pageObject->showDBValue("attachment", $data, $keylink);
	if($mainTableOwnerID=="attachment")
		$ownerIdValue=$value;
	$xt->assign("attachment_value",$value);
	if(!$pageObject->isAppearOnTabs("attachment"))
		$xt->assign("attachment_fieldblock",true);
	else
		$xt->assign("attachment_tabfieldblock",true);
////////////////////////////////////////////
//sstatus - Custom
	
	$value = $pageObject->showDBValue("sstatus", $data, $keylink);
	if($mainTableOwnerID=="sstatus")
		$ownerIdValue=$value;
	$xt->assign("sstatus_value",$value);
	if(!$pageObject->isAppearOnTabs("sstatus"))
		$xt->assign("sstatus_fieldblock",true);
	else
		$xt->assign("sstatus_tabfieldblock",true);
////////////////////////////////////////////
//note - 
	
	$value = $pageObject->showDBValue("note", $data, $keylink);
	if($mainTableOwnerID=="note")
		$ownerIdValue=$value;
	$xt->assign("note_value",$value);
	if(!$pageObject->isAppearOnTabs("note"))
		$xt->assign("note_fieldblock",true);
	else
		$xt->assign("note_tabfieldblock",true);
////////////////////////////////////////////
//start_time - Time
	
	$value = $pageObject->showDBValue("start_time", $data, $keylink);
	if($mainTableOwnerID=="start_time")
		$ownerIdValue=$value;
	$xt->assign("start_time_value",$value);
	if(!$pageObject->isAppearOnTabs("start_time"))
		$xt->assign("start_time_fieldblock",true);
	else
		$xt->assign("start_time_tabfieldblock",true);
////////////////////////////////////////////
//end_time - Time
	
	$value = $pageObject->showDBValue("end_time", $data, $keylink);
	if($mainTableOwnerID=="end_time")
		$ownerIdValue=$value;
	$xt->assign("end_time_value",$value);
	if(!$pageObject->isAppearOnTabs("end_time"))
		$xt->assign("end_time_fieldblock",true);
	else
		$xt->assign("end_time_tabfieldblock",true);
////////////////////////////////////////////
//date - Short Date
	
	$value = $pageObject->showDBValue("date", $data, $keylink);
	if($mainTableOwnerID=="date")
		$ownerIdValue=$value;
	$xt->assign("date_value",$value);
	if(!$pageObject->isAppearOnTabs("date"))
		$xt->assign("date_fieldblock",true);
	else
		$xt->assign("date_tabfieldblock",true);
////////////////////////////////////////////
//endate - Short Date
	
	$value = $pageObject->showDBValue("endate", $data, $keylink);
	if($mainTableOwnerID=="endate")
		$ownerIdValue=$value;
	$xt->assign("endate_value",$value);
	if(!$pageObject->isAppearOnTabs("endate"))
		$xt->assign("endate_fieldblock",true);
	else
		$xt->assign("endate_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "timetable";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "timetable";
			continue;
		}
		
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
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
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
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "timetable";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='timetable_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
