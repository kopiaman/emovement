<?php 
class eventclass_my_timetable  extends eventsBase
{ 
	function eventclass_my_timetable()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
global $conn;
$id=$keys['id'];
$start_time=$values['start_time'];
$end_time=$values['end_time'];
$staffID=$values['staffID'];
$sdate=$values['date'];
$edate=$values['endate'];
$category=$values['category'];


$sql_up= "UPDATE timetable SET staffID='$_SESSION[userid]',department='$_SESSION[department]',pos='$_SESSION[pos]' WHERE id='$id'";
$query_up=db_exec($sql_up,$conn);

while(strtotime($sdate)<strtotime($edate)) {
$sdate=date("Y-m-d", strtotime("+1 day", strtotime($sdate)));
$sql_1= "INSERT INTO timetable (fid,start_time,end_time,staffID,date,category,title,level,location,organizer,department,pos,sstatus,summary,attachment) 
values ('$id','$start_time','$end_time','$_SESSION[userid]','$sdate','$category','$values[title]','$values[level]','$values[location]','$values[organizer]','$_SESSION[department]','$_SESSION[pos]','$values[sstatus]','$values[summary]','$values[attachment]')";
db_exec($sql_1,$conn);
};


//send to leader/boss


/*
$client_email=$values['Email'];
$to2 =$client_email;

$subject2 ="New Online Application From MATA- RECEIVED!";
$headers2 = "From: " . $leaderemail . "\r\n";
$headers2 .= "BCC: " . $leaderemail . "\r\n";
$headers2 .= "Content-type: text/html" ."\r\n";

$message2 ="<html><body>";

$message2 .="<p style='text-decoration:underline'><strong> Application Status for $programname  </strong> </p><br ><br> ";
$message2 .="<p> Hi $studentname, </p> <br>";
$message2 .="<p> Thank you for your application to enroll in our college. </p><br > ";
$message2 .="<p> We will review your application accordingly. <br>
You will get notification automatically via email for any update on your application status .</p> <br ><br>";
$message2 .="<p style='font-size:10px'> **Note: This is automatic notification generated by our system***</p> ";
$message2 .= "</body></html>";
	
$mailto=mail($to2, $subject2, $message2, $headers2);
*/




;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		
global $conn;
$status=$values['sstatus'];
$fid=$keys['id'];

if($status=='Approved' ){
	$sql_up= "UPDATE timetable SET sstatus ='$status' WHERE fid='$fid'";
	$query_up=db_exec($sql_up,$conn);
}else if($status=='Rejected'){
	$sql_up= "UPDATE timetable SET sstatus ='$status' WHERE fid='$fid'";
	$query_up=db_exec($sql_up,$conn);
}else{};

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
