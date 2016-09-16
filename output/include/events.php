<?php 
class eventsBase
{
	var $events = array();
	var $captchas = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
		
	function existsCAPTCHA($page)
	{
		return (array_key_exists($page,$this->captchas)!==FALSE);
	}
	
	function callCAPTCHA(&$pageObject)
	{
		if($pageObject->pageType == "add")
			$this->displayCaptchaOnAdd();
		elseif($pageObject->pageType == "edit")
			$this->displayCaptchaOnEdit();
		elseif($pageObject->pageType == "register")
			$this->displayCaptchaOnRegister();
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["ModifyMenuItem"]=true;


//	onscreen events


	
		$this->events["IsRecordEditable"]["timetable"] = true;
	
		}
// Captchas functions	
//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username,$password,&$data)
{

		header("Location: x_dashboard.php");
$_SESSION['department']=$data['department'];
$_SESSION['subdepartment']=$data['subdepartment'];
$_SESSION['pos']=$data['pos'];
$_SESSION['userid']=$data['id'];
exit();

;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		
if ($_SESSION["pos"]==10) //pegawai
{
  if ($menuItem->getTitle()=="All"||$menuItem->getTitle()=="KPP"||$menuItem->getTitle()=="Timbalan Pengarah"||$menuItem->getTitle()=="User"||$menuItem->getTitle()=="My Subordinate Application")
   return false;

}else if($_SESSION["pos"]==20){ //KPP

  if ($menuItem->getTitle()=="KPP"||$menuItem->getTitle()=="Timbalan Pengarah"||$menuItem->getTitle()=="User")
   return false;

}else if($_SESSION["pos"]==30){  //timbalan

   if ($menuItem->getTitle()=="Timbalan Pengarah"||$menuItem->getTitle()=="User")
   return false;
}else if($_SESSION["pos"]==40){  //timbalan

   if ($menuItem->getTitle()=="User")
   return false;
}
return true;

    
;		
} // function ModifyMenuItem

		

//	onscreen events

	function IsRecordEditable(&$values, $isEditable, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "timetable")
		{	
			

// Place event code here.
// Use "Add Action" button to add code snippets.

if($values['staffID']!=$_SESSION['userid']){

return true;
}else{
return false;
};;		
		}
		return $isEditable;
	}
} 
?>
