<?php 
class eventclass_set_setting_category  extends eventsBase
{ 
	function eventclass_set_setting_category()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data,&$row,&$record,&$pageObject)
{

		if ($data["id"]=="50")
{
   $record["edit_link"] = false;
};


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
