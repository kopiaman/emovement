<?php
$dalTabletimetable = array();
$dalTabletimetable["id"] = array("type"=>3,"varname"=>"id");
$dalTabletimetable["fid"] = array("type"=>3,"varname"=>"fid");
$dalTabletimetable["start_time"] = array("type"=>134,"varname"=>"start_time");
$dalTabletimetable["end_time"] = array("type"=>134,"varname"=>"end_time");
$dalTabletimetable["staffID"] = array("type"=>3,"varname"=>"staffID");
$dalTabletimetable["date"] = array("type"=>7,"varname"=>"date");
$dalTabletimetable["endate"] = array("type"=>7,"varname"=>"endate");
$dalTabletimetable["category"] = array("type"=>200,"varname"=>"category");
$dalTabletimetable["title"] = array("type"=>200,"varname"=>"title");
$dalTabletimetable["level"] = array("type"=>200,"varname"=>"level");
$dalTabletimetable["location"] = array("type"=>200,"varname"=>"location");
$dalTabletimetable["organizer"] = array("type"=>200,"varname"=>"organizer");
$dalTabletimetable["department"] = array("type"=>3,"varname"=>"department");
$dalTabletimetable["subdepartment"] = array("type"=>3,"varname"=>"subdepartment");
$dalTabletimetable["pos"] = array("type"=>3,"varname"=>"pos");
$dalTabletimetable["sstatus"] = array("type"=>200,"varname"=>"sstatus");
$dalTabletimetable["date_status"] = array("type"=>200,"varname"=>"date_status");
$dalTabletimetable["summary"] = array("type"=>201,"varname"=>"summary");
$dalTabletimetable["attachment"] = array("type"=>201,"varname"=>"attachment");
$dalTabletimetable["note"] = array("type"=>200,"varname"=>"note");
	$dalTabletimetable["id"]["key"]=true;
$dal_info["timetable"]=&$dalTabletimetable;

?>