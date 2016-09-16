<?php 
class eventclass_User_Access_Level  extends eventsBase
{ 
	function eventclass_User_Access_Level()
	{
	// fill list of events
		$this->events["AfterDelete"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		
global $conn;

$staffid=$deleted_values['id'];

$sql_del= "DELETE FROM timetable WHERE staffID=$staffid";
$query_del=db_exec($sql_del,$conn);

//delete access level
$UserName=$deleted_values['icno'];
$sql_del2= "DELETE FROM emov_ugmembers WHERE UserName='$UserName'";
$query_del2=db_exec($sql_del2,$conn);

;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
global $conn;

$id=$keys['id'];
//add temporary password
$pass=md5(1);
$sql_up= "UPDATE user SET pass ='$pass' WHERE id='$id'";
$query_up=db_exec($sql_up,$conn);


	//check the GroupID
	$pos=$values['pos'];
	switch ($pos)
	{
	case 10:   //pegawai
	$GroupID=1; break;
	case 20:  //KPP
	$GroupID=4;break;
	case 30:   //timbalan
	$GroupID=2; break;
	case 40:   //pengarah
	$GroupID=3;break;
	default:
	};

$username=$values['icno'];
//set system right 
$sql_1= "INSERT INTO emov_ugmembers (UserName,GroupID) VALUES('$username','$GroupID')";
db_exec($sql_1,$conn);

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
//check the GroupID

$username=$values['icno'];
//only add new user level if the new position is not same
if($values['pos']!=$oldvalues['pos']){


	$pos=$values['pos'];
	switch ($pos)
	{
	case 10:   //pegawai
	$GroupID=1; break;
	case 20:  //KPP
	$GroupID=4;break;
	case 30:   //timbalan
	$GroupID=2; break;
	case 40:   //pengarah
	$GroupID=3;break;
	default:
	};


$sql_1= "INSERT INTO emov_ugmembers (UserName,GroupID) VALUES('$username','$GroupID')";
db_exec($sql_1,$conn);

};


;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
