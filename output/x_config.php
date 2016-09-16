<?php

require_once("include/dbcommon.php");

$conn= mysql_connect($host, $user, $pwd) or trigger_error(mysql_error); 
mysql_select_db($sys_dbname) or die(mysql_error());

 function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {$input = strip_tags($input);}
	//no need to trim, already shorter than trim length
    if (strlen($input) <= $length) { return $input; }
	 //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
	 //add ellipses (...)
    if ($ellipses) {$trimmed_text .= '..';}
    return $trimmed_text;};
	
	
	function monthcal($monthcal){
		
		switch ($monthcal)
		{
		case '01':$month="January";break;case '02':$month="Febuary";break;
		case '03':$month="March";break;case '04':$month="April";break;
		case '05':$month="May";break;case '06':$month="June";break;
		case '07':$month="July";break;case '08':$month="August";break;
		case '09':$month="September";break;case 10:$month="October";break;
		case '11':$month="November";break;case 12:$month="December";break;
		default:$month="";
		}
return $month;
	}
?>
