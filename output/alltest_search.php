<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include("include/alltest_variables.php");
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
$layout->blocks["top"][] = "search";$page_layouts["alltest_search"] = $layout;


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
$templatefile = "alltest_search.htm";

// for ajax query, used when page buffers new control
if(postvalue("mode")=="inlineLoadCtrl"){
	$mode = SEARCH_LOAD_CONTROL;
}	

$timepicker = false;

$params = array();
$params["id"] = $id;
$params["mode"] = $mode;
$params["timepicker"] = $timepicker;
$params['xt'] = &$xt;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = 'alltest';
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
	
	if($pageObject->pSet->getLookupTable("department"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("department")] = GetTableURL($pageObject->pSet->getLookupTable("department"));
	
	$pageObject->fillFieldToolTips("department");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("department");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "department";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("department_label","<label for=\"".GetInputElementId("department", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("department_label", true);
	
	$xt->assign("department_fieldblock", true);
	$xt->assignbyref("department_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("department_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("department_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_department", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("department");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"department", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"department", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
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
	
	if($pageObject->pSet->getLookupTable("stime"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("stime")] = GetTableURL($pageObject->pSet->getLookupTable("stime"));
	
	$pageObject->fillFieldToolTips("stime");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("stime");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "stime";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("stime_label","<label for=\"".GetInputElementId("stime", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("stime_label", true);
	
	$xt->assign("stime_fieldblock", true);
	$xt->assignbyref("stime_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("stime_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("stime_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_stime", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("stime");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"stime", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"stime", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("etime"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("etime")] = GetTableURL($pageObject->pSet->getLookupTable("etime"));
	
	$pageObject->fillFieldToolTips("etime");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("etime");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "etime";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("etime_label","<label for=\"".GetInputElementId("etime", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("etime_label", true);
	
	$xt->assign("etime_fieldblock", true);
	$xt->assignbyref("etime_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("etime_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("etime_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_etime", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("etime");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"etime", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"etime", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("staffname"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("staffname")] = GetTableURL($pageObject->pSet->getLookupTable("staffname"));
	
	$pageObject->fillFieldToolTips("staffname");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("staffname");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "staffname";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("staffname_label","<label for=\"".GetInputElementId("staffname", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("staffname_label", true);
	
	$xt->assign("staffname_fieldblock", true);
	$xt->assignbyref("staffname_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("staffname_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("staffname_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_staffname", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("staffname");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"staffname", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"staffname", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("pos"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("pos")] = GetTableURL($pageObject->pSet->getLookupTable("pos"));
	
	$pageObject->fillFieldToolTips("pos");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("pos");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "pos";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("pos_label","<label for=\"".GetInputElementId("pos", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("pos_label", true);
	
	$xt->assign("pos_fieldblock", true);
	$xt->assignbyref("pos_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("pos_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("pos_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_pos", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("pos");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"pos", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"pos", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("dcode"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("dcode")] = GetTableURL($pageObject->pSet->getLookupTable("dcode"));
	
	$pageObject->fillFieldToolTips("dcode");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("dcode");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "dcode";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("dcode_label","<label for=\"".GetInputElementId("dcode", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("dcode_label", true);
	
	$xt->assign("dcode_fieldblock", true);
	$xt->assignbyref("dcode_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("dcode_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("dcode_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_dcode", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("dcode");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"dcode", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"dcode", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("subcode"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("subcode")] = GetTableURL($pageObject->pSet->getLookupTable("subcode"));
	
	$pageObject->fillFieldToolTips("subcode");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("subcode");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "subcode";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("subcode_label","<label for=\"".GetInputElementId("subcode", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("subcode_label", true);
	
	$xt->assign("subcode_fieldblock", true);
	$xt->assignbyref("subcode_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("subcode_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("subcode_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_subcode", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("subcode");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"subcode", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"subcode", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("subname"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("subname")] = GetTableURL($pageObject->pSet->getLookupTable("subname"));
	
	$pageObject->fillFieldToolTips("subname");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("subname");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "subname";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("subname_label","<label for=\"".GetInputElementId("subname", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("subname_label", true);
	
	$xt->assign("subname_fieldblock", true);
	$xt->assignbyref("subname_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("subname_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("subname_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_subname", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("subname");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"subname", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"subname", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
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
