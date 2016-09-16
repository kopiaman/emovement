<?php
$dalTablefeedback = array();
$dalTablefeedback["fid"] = array("type"=>3,"varname"=>"fid");
$dalTablefeedback["title"] = array("type"=>200,"varname"=>"title");
$dalTablefeedback["userid"] = array("type"=>3,"varname"=>"userid");
$dalTablefeedback["dates"] = array("type"=>200,"varname"=>"dates");
$dalTablefeedback["categories"] = array("type"=>200,"varname"=>"categories");
$dalTablefeedback["feedback"] = array("type"=>201,"varname"=>"feedback");
$dalTablefeedback["reply"] = array("type"=>201,"varname"=>"reply");
$dalTablefeedback["fstatus"] = array("type"=>200,"varname"=>"fstatus");
$dalTablefeedback["fdate"] = array("type"=>135,"varname"=>"fdate");
$dalTablefeedback["attachment"] = array("type"=>201,"varname"=>"attachment");
	$dalTablefeedback["fid"]["key"]=true;
$dal_info["feedback"]=&$dalTablefeedback;

?>