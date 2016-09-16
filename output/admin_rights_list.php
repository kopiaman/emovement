<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_rights_variables.php");


$gsqlHead="select `icno` ";
$gsqlFrom="from `user`";
$gsqlWhereExpr="";
$gsqlTail="";
// $gstrSQL = "SELECT TableName,   GroupID,   AccessMask  FROM emov_ugrights ";
$gstrSQL = $gQuery->gSQLWhere("");


if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!IsAdmin())
{
	echo "<p>"."You don't have permissions to access this table"." <a href=\"login.php\">"."Back to login page"."</a></p>";
	return;
}



$layout = new TLayout("ug_rights2","ExtravaganzaOrange1","MobileOrange1");
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();

$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons","block"=>"savebuttons_block","substyle"=>1);


$layout->skins["ugcontrols"] = "1";
$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "1";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"ugrightsblock","block"=>"rights_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();


$layout->containers["left"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();

$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup","block"=>"","substyle"=>1);


$layout->skins["uggroup"] = "1";
$layout->blocks["left"][] = "uggroup";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "2";
$layout->blocks["top"][] = "search";$page_layouts["admin_rights_list"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$nonAdminTablesRightsArr=array();
$nonAdminTablesArr=array();
$pageRights=array();
$nonAdminTablesArr[] = array("campus_setting","Organisation Setting");
$nonAdminTablesRightsArr["campus_setting"]=array();
$pageRights["campus_setting"]["add"]=false;
$pageRights["campus_setting"]["edit"]=true;
$pageRights["campus_setting"]["delete"]=false;
$pageRights["campus_setting"]["list"]=true;
$pageRights["campus_setting"]["export"]=false;
$pageRights["campus_setting"]["import"]=false;

$nonAdminTablesArr[] = array("set_setting_category","Set Setting Category");
$nonAdminTablesRightsArr["set_setting_category"]=array();
$pageRights["set_setting_category"]["add"]=true;
$pageRights["set_setting_category"]["edit"]=true;
$pageRights["set_setting_category"]["delete"]=true;
$pageRights["set_setting_category"]["list"]=true;
$pageRights["set_setting_category"]["export"]=false;
$pageRights["set_setting_category"]["import"]=false;

$nonAdminTablesArr[] = array("timetable","Timetable");
$nonAdminTablesRightsArr["timetable"]=array();
$pageRights["timetable"]["add"]=true;
$pageRights["timetable"]["edit"]=true;
$pageRights["timetable"]["delete"]=true;
$pageRights["timetable"]["list"]=true;
$pageRights["timetable"]["export"]=false;
$pageRights["timetable"]["import"]=false;

$nonAdminTablesArr[] = array("setting","Setting");
$nonAdminTablesRightsArr["setting"]=array();
$pageRights["setting"]["add"]=true;
$pageRights["setting"]["edit"]=true;
$pageRights["setting"]["delete"]=true;
$pageRights["setting"]["list"]=true;
$pageRights["setting"]["export"]=false;
$pageRights["setting"]["import"]=false;

$nonAdminTablesArr[] = array("user","User");
$nonAdminTablesRightsArr["user"]=array();
$pageRights["user"]["add"]=false;
$pageRights["user"]["edit"]=false;
$pageRights["user"]["delete"]=false;
$pageRights["user"]["list"]=true;
$pageRights["user"]["export"]=false;
$pageRights["user"]["import"]=false;

$nonAdminTablesArr[] = array("user_profile","User Profile");
$nonAdminTablesRightsArr["user_profile"]=array();
$pageRights["user_profile"]["add"]=false;
$pageRights["user_profile"]["edit"]=true;
$pageRights["user_profile"]["delete"]=false;
$pageRights["user_profile"]["list"]=true;
$pageRights["user_profile"]["export"]=false;
$pageRights["user_profile"]["import"]=false;

$nonAdminTablesArr[] = array("alltest","Alltest");
$nonAdminTablesRightsArr["alltest"]=array();
$pageRights["alltest"]["add"]=false;
$pageRights["alltest"]["edit"]=false;
$pageRights["alltest"]["delete"]=false;
$pageRights["alltest"]["list"]=true;
$pageRights["alltest"]["export"]=false;
$pageRights["alltest"]["import"]=false;

$nonAdminTablesArr[] = array("my_timetable","My Timetable");
$nonAdminTablesRightsArr["my_timetable"]=array();
$pageRights["my_timetable"]["add"]=false;
$pageRights["my_timetable"]["edit"]=false;
$pageRights["my_timetable"]["delete"]=true;
$pageRights["my_timetable"]["list"]=true;
$pageRights["my_timetable"]["export"]=false;
$pageRights["my_timetable"]["import"]=false;

$nonAdminTablesArr[] = array("department","Function");
$nonAdminTablesRightsArr["department"]=array();
$pageRights["department"]["add"]=true;
$pageRights["department"]["edit"]=true;
$pageRights["department"]["delete"]=true;
$pageRights["department"]["list"]=true;
$pageRights["department"]["export"]=false;
$pageRights["department"]["import"]=false;

$nonAdminTablesArr[] = array("department_sub","Sector");
$nonAdminTablesRightsArr["department_sub"]=array();
$pageRights["department_sub"]["add"]=true;
$pageRights["department_sub"]["edit"]=true;
$pageRights["department_sub"]["delete"]=true;
$pageRights["department_sub"]["list"]=true;
$pageRights["department_sub"]["export"]=false;
$pageRights["department_sub"]["import"]=false;

$nonAdminTablesArr[] = array("User Access Level","User Access Level");
$nonAdminTablesRightsArr["User Access Level"]=array();
$pageRights["User Access Level"]["add"]=true;
$pageRights["User Access Level"]["edit"]=true;
$pageRights["User Access Level"]["delete"]=true;
$pageRights["User Access Level"]["list"]=true;
$pageRights["User Access Level"]["export"]=false;
$pageRights["User Access Level"]["import"]=false;

$nonAdminTablesArr[] = array("User_Level","User Level");
$nonAdminTablesRightsArr["User_Level"]=array();
$pageRights["User_Level"]["add"]=true;
$pageRights["User_Level"]["edit"]=true;
$pageRights["User_Level"]["delete"]=true;
$pageRights["User_Level"]["list"]=true;
$pageRights["User_Level"]["export"]=false;
$pageRights["User_Level"]["import"]=false;

$nonAdminTablesArr[] = array("training","Training");
$nonAdminTablesRightsArr["training"]=array();
$pageRights["training"]["add"]=true;
$pageRights["training"]["edit"]=true;
$pageRights["training"]["delete"]=true;
$pageRights["training"]["list"]=true;
$pageRights["training"]["export"]=false;
$pageRights["training"]["import"]=false;

$nonAdminTablesArr[] = array("feedback","Feedback");
$nonAdminTablesRightsArr["feedback"]=array();
$pageRights["feedback"]["add"]=true;
$pageRights["feedback"]["edit"]=true;
$pageRights["feedback"]["delete"]=true;
$pageRights["feedback"]["list"]=true;
$pageRights["feedback"]["export"]=false;
$pageRights["feedback"]["import"]=false;


$options["nonAdminTablesArr"] = $nonAdminTablesArr;
$options["nonAdminTablesRightsArr"] = $nonAdminTablesRightsArr;


$pageObject = ListPage::createListPage($strTableName, $options);
 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	//$xt->assign_loopsection("grid_row",$rowinfo);
	


?>
