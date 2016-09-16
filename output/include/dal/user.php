<?php
$dalTableuser = array();
$dalTableuser["id"] = array("type"=>3,"varname"=>"id");
$dalTableuser["pass"] = array("type"=>200,"varname"=>"pass");
$dalTableuser["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTableuser["department"] = array("type"=>3,"varname"=>"department");
$dalTableuser["subdepartment"] = array("type"=>3,"varname"=>"subdepartment");
$dalTableuser["umail"] = array("type"=>200,"varname"=>"umail");
$dalTableuser["icno"] = array("type"=>200,"varname"=>"icno");
$dalTableuser["pos"] = array("type"=>3,"varname"=>"pos");
$dalTableuser["sstatus"] = array("type"=>200,"varname"=>"sstatus");
	$dalTableuser["id"]["key"]=true;
$dal_info["user"]=&$dalTableuser;

?>