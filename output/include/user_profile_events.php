<?php 
class eventclass_user_profile  extends eventsBase
{ 
	function eventclass_user_profile()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		
global $conn;

$oldusername=$oldvalues['icno'];
$newusername=$values['icno'];

$sql_up= "UPDATE  emov_ugmembers  SET UserName ='$newusername' WHERE UserName='$oldusername'";
$query_up=db_exec($sql_up,$conn);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
