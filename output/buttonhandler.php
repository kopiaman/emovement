<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/button.php");
	
$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];

// proccess table events
if($buttId=='Back_to_My_Application')
{
	include("include/timetable_variables.php");
	buttonHandler_Back_to_My_Application($params);
}
if($buttId=='Reset_Default_Password_For_Selected_User')
{
	include("include/User_Access_Level_variables.php");
	buttonHandler_Reset_Default_Password_For_Selected_User($params);
}

// proccess non table events


// create table and non table handlers
function buttonHandler_Back_to_My_Application($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	echo my_json_encode($result);
}
function buttonHandler_Reset_Default_Password_For_Selected_User($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;
while($data = $button->getNextSelectedRecord()){
$resetpass=md5(1);
$id=$data['id'];
$sql_up= "UPDATE user SET pass ='$resetpass' WHERE id='$id'";
$query_up=db_exec($sql_up,$conn);
};


;
	echo my_json_encode($result);
}
?>
