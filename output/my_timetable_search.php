<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include("include/my_timetable_variables.php");
include("classes/searchcontrol.php");
include("classes/advancedsearchcontrol.php");
include("classes/panelsearchcontrol.php");
include("classes/searchclause.php");

$sessionPrefix = $strTableName;

//Basic includes js files
$includes="";
// predefined fields num
$predefFieldNum = 0;

$chrt_array=array();
$rpt_array=array();

//	check if logged in
if( (!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && !@$chrt_array['status'] && !@$rpt_array['status'])
|| (@$rpt_array['status'] == "private" && @$rpt_array['owner'] != @$_SESSION["UserID"])
|| (@$chrt_array['status'] == "private" && @$chrt_array['owner'] != @$_SESSION["UserID"]) )
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("search2","ExtravaganzaOrange1","MobileOrange1");
$layout->blocks["top"] = array();
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"srchheader","block"=>"","substyle"=>2);


$layout->containers["search"][] = array("name"=>"srchconditions","block"=>"conditions_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"srchfields","block"=>"","substyle"=>1);


$layout->skins["fields"] = "fields";

$layout->containers["search"][] = array("name"=>"srchbuttons","block"=>"","substyle"=>2);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";$page_layouts["my_timetable_search"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();

// id that used to add to controls names
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;
	
// for usual page show proccess
$mode = SEARCH_SIMPLE;
$templatefile = "my_timetable_search.htm";

// for ajax query, used when page buffers new control
if(postvalue("mode")=="inlineLoadCtrl"){
	$mode = SEARCH_LOAD_CONTROL;
}	

$timepicker = false;
$timepicker = true;

$params = array();
$params["id"] = $id;
$params["mode"] = $mode;
$params["timepicker"] = $timepicker;
$params['xt'] = &$xt;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = 'my_timetable';
$params['origTName'] = $strOriginalTableName;
$params['sessionPrefix'] = $sessionPrefix;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['pageType'] = PAGE_SEARCH;

$pageObject = new RunnerPage($params);

// create reusable searchControl builder instance
$searchControllerId = (postvalue('searchControllerId') ? postvalue('searchControllerId') : $pageObject->id);

//	Before Process event
if($eventObj->exists("BeforeProcessSearch"))
	$eventObj->BeforeProcessSearch($conn, $pageObject);

// add constants and files for simple view
if ($mode==SEARCH_SIMPLE)
{
	$searchControlBuilder = new AdvancedSearchControl($searchControllerId, $strTableName, $pageObject->searchClauseObj, $pageObject);

	// add button events if exist
	$pageObject->addButtonHandlers();

	$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
	//$includes.="<script language=\"JavaScript\" src=\"include/customlabels.js\"></script>\r\n";
		$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";	

	// if not simple, this div already exist on page
	if (!isMobile())
		$includes.="<div id=\"search_suggest\" class=\"search_suggest\"></div>";

	// search panel radio button assign
	$searchRadio = $searchControlBuilder->getSearchRadio();
	$xt->assign_section("all_checkbox_label", $searchRadio['all_checkbox_label'][0], $searchRadio['all_checkbox_label'][1]);
	$xt->assign_section("any_checkbox_label", $searchRadio['any_checkbox_label'][0], $searchRadio['any_checkbox_label'][1]);
	$xt->assignbyref("all_checkbox",$searchRadio['all_checkbox']);
	$xt->assignbyref("any_checkbox",$searchRadio['any_checkbox']);
	
	// search fields data
	
	if($pageObject->pSet->getLookupTable("week"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("week")] = GetTableURL($pageObject->pSet->getLookupTable("week"));
	
	$pageObject->fillFieldToolTips("week");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("week");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "week";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("week_label","<label for=\"".GetInputElementId("week", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("week_label", true);
	
	$xt->assign("week_fieldblock", true);
	$xt->assignbyref("week_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("week_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("week_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_week", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("week");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"week", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"week", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("month"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("month")] = GetTableURL($pageObject->pSet->getLookupTable("month"));
	
	$pageObject->fillFieldToolTips("month");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("month");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "month";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("month_label","<label for=\"".GetInputElementId("month", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("month_label", true);
	
	$xt->assign("month_fieldblock", true);
	$xt->assignbyref("month_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("month_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("month_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_month", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("month");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("year"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("year")] = GetTableURL($pageObject->pSet->getLookupTable("year"));
	
	$pageObject->fillFieldToolTips("year");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("year");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "year";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("year_label","<label for=\"".GetInputElementId("year", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("year_label", true);
	
	$xt->assign("year_fieldblock", true);
	$xt->assignbyref("year_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("year_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("year_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_year", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("year");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"year", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"year", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("category"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("category")] = GetTableURL($pageObject->pSet->getLookupTable("category"));
	
	$pageObject->fillFieldToolTips("category");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("category");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "category";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("category_label","<label for=\"".GetInputElementId("category", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("category_label", true);
	
	$xt->assign("category_fieldblock", true);
	$xt->assignbyref("category_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("category_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("category_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_category", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("category");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"category", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"category", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("level"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("level")] = GetTableURL($pageObject->pSet->getLookupTable("level"));
	
	$pageObject->fillFieldToolTips("level");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("level");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "level";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("level_label","<label for=\"".GetInputElementId("level", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("level_label", true);
	
	$xt->assign("level_fieldblock", true);
	$xt->assignbyref("level_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("level_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("level_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_level", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("level");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"level", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"level", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("title"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("title")] = GetTableURL($pageObject->pSet->getLookupTable("title"));
	
	$pageObject->fillFieldToolTips("title");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("title");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "title";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("title_label","<label for=\"".GetInputElementId("title", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("title_label", true);
	
	$xt->assign("title_fieldblock", true);
	$xt->assignbyref("title_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("title_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("title_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_title", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("title");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"title", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"title", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("location"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("location")] = GetTableURL($pageObject->pSet->getLookupTable("location"));
	
	$pageObject->fillFieldToolTips("location");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("location");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "location";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("location_label","<label for=\"".GetInputElementId("location", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("location_label", true);
	
	$xt->assign("location_fieldblock", true);
	$xt->assignbyref("location_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("location_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("location_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_location", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("location");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"location", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"location", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("organizer"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("organizer")] = GetTableURL($pageObject->pSet->getLookupTable("organizer"));
	
	$pageObject->fillFieldToolTips("organizer");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("organizer");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "organizer";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("organizer_label","<label for=\"".GetInputElementId("organizer", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("organizer_label", true);
	
	$xt->assign("organizer_fieldblock", true);
	$xt->assignbyref("organizer_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("organizer_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("organizer_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_organizer", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("organizer");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"organizer", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"organizer", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sstatus"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sstatus")] = GetTableURL($pageObject->pSet->getLookupTable("sstatus"));
	
	$pageObject->fillFieldToolTips("sstatus");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sstatus");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sstatus";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sstatus_label","<label for=\"".GetInputElementId("sstatus", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sstatus_label", true);
	
	$xt->assign("sstatus_fieldblock", true);
	$xt->assignbyref("sstatus_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sstatus_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sstatus_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sstatus", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sstatus");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sstatus", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sstatus", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("start_time"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("start_time")] = GetTableURL($pageObject->pSet->getLookupTable("start_time"));
	
	$pageObject->fillFieldToolTips("start_time");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("start_time");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "start_time";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("start_time_label","<label for=\"".GetInputElementId("start_time", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("start_time_label", true);
	
	$xt->assign("start_time_fieldblock", true);
	$xt->assignbyref("start_time_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("start_time_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("start_time_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_start_time", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("start_time");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"start_time", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"start_time", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("end_time"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("end_time")] = GetTableURL($pageObject->pSet->getLookupTable("end_time"));
	
	$pageObject->fillFieldToolTips("end_time");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("end_time");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "end_time";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("end_time_label","<label for=\"".GetInputElementId("end_time", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("end_time_label", true);
	
	$xt->assign("end_time_fieldblock", true);
	$xt->assignbyref("end_time_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("end_time_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("end_time_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_end_time", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("end_time");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"end_time", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"end_time", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("date"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("date")] = GetTableURL($pageObject->pSet->getLookupTable("date"));
	
	$pageObject->fillFieldToolTips("date");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("date");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "date";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("date_label","<label for=\"".GetInputElementId("date", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("date_label", true);
	
	$xt->assign("date_fieldblock", true);
	$xt->assignbyref("date_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("date_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("date_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_date", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("date");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"date", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"date", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("endate"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("endate")] = GetTableURL($pageObject->pSet->getLookupTable("endate"));
	
	$pageObject->fillFieldToolTips("endate");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("endate");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "endate";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("endate_label","<label for=\"".GetInputElementId("endate", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("endate_label", true);
	
	$xt->assign("endate_fieldblock", true);
	$xt->assignbyref("endate_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("endate_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("endate_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_endate", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("endate");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"endate", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"endate", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	
	//--------------------------------------------------------
	
	$pageObject->body["begin"] .= $includes;
	
	$pageObject->addCommonJs();
	
	$xt->assignbyref("body",$pageObject->body);
	
	$xt->assign("contents_block", true);
	
	$xt->assign("conditions_block",true);
	$xt->assign("search_button",true);
	$xt->assign("reset_button",true);
	$xt->assign("back_button",true);
	
	
	$xt->assign("searchbutton_attrs","id=\"searchButton".$id."\"");
	$xt->assign("resetbutton_attrs","id=\"resetButton".$id."\"");
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	

	// for crosse report 
	
	if (postvalue('axis_x')!=''){
		$xtCrosseElem = "<input type=\"hidden\" id=\"select_group_x\" value=\"".postvalue('axis_x')."\">
						<input type=\"hidden\" id=\"select_group_y\" value=\"".postvalue('axis_y')."\">
						<input type=\"hidden\" id=\"select_data\" value=\"".postvalue('field')."\">
						<input type=\"hidden\" id=\"group_func_hidden\" value=\"".postvalue('group_func')."\">
						";
		$xt->assign("CrossElem",$xtCrosseElem);
	}
	// for crosse report
	if($eventObj->exists("BeforeShowSearch"))
		$eventObj->BeforeShowSearch($xt,$templatefile, $pageObject);
	// load controls for first page loading	
	
	
	$pageObject->fillSetCntrlMaps();
	
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJs()."</script>";
	
	$xt->assignbyref("body",$pageObject->body);
	$xt->display($templatefile);
	exit();	
}
else if($mode==SEARCH_LOAD_CONTROL)
{

	$searchControlBuilder = new PanelSearchControl($searchControllerId, $strTableName, $pageObject->searchClauseObj, $pageObject);
	$ctrlField = postvalue('ctrlField');
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $ctrlField, 0, '', false, true, '', '');	
	
	// build array for encode
	$resArr = array();
	$resArr['control1'] = trim($xt->call_func($ctrlBlockArr['searchcontrol']));
	$resArr['control2'] = trim($xt->call_func($ctrlBlockArr['searchcontrol1']));
	$resArr['comboHtml'] = trim($ctrlBlockArr['searchtype']);
	$resArr['delButt'] = trim($ctrlBlockArr['delCtrlButt']);
	$resArr['delButtId'] =  trim($searchControlBuilder->getDelButtonId($ctrlField, $id));
	$resArr['divInd'] = trim($id);	
	$resArr['fLabel'] = GetFieldLabel(GoodFieldName($strTableName),GoodFieldName($ctrlField));
	$resArr['ctrlMap'] = $pageObject->controlsMap['controls'];
	
	if (postvalue('isNeedSettings') == 'true')
	{
		$pageObject->fillSettings();
		$resArr['settings'] = $pageObject->jsSettings;
	}
	
	// return JSON
	echo my_json_encode($resArr);
	exit();
}

?>
