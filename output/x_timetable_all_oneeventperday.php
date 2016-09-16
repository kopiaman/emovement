<?php session_start(); ;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>EMOVEMENT</title>
 <style>
body {
	font-size:10px;
	font-family:Verdana, Geneva, sans-serif;
	margin-top:10px;
	margin-left:10px;
}
.navi {
	font-size:12px;
	font-weight:bold;
	color:#090;
}
</style>
 </head>
 <?php require_once('x_config.php'); ?>
 <?php 
if(!$_GET['month']){$month=date("m"); 
}else{$month=$_GET['month'];};
if(!$_GET['year']){$year=date("Y"); 
}else{	$year=$_GET['year'];};


$sqlwhere='';
$userid=$_SESSION['userid'];
$department=$_SESSION['department'];


if($_SESSION['pos']==30){
$sqlwhere="AND department=$department ";
}else if($_SESSION['pos']==20){
$sqlwhere="AND department=$department AND pos=10 ";		
}else if($_SESSION['pos']==40){
$sqlwhere='';	
}else if($_SESSION['pos']==10){
$sqlwhere="AND `user`.id=$userid";	
}else{};
	
//select campus  setting
/*
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);
*/
?>
 <body>
<table width="1200px" border="0" class="tablehead">
   <tr>
    <td width="16%" ><img src="images/<?php echo $row_q01['logo'];  ?>"/></td>
    <td width="67%"><h2><strong> Staff Calendar <?php echo 'userid'.$userid ?><br />
        MONTH:</strong> <?php echo $month?> <strong>YEAR:</strong> <?php echo $year?><br />
      </h2>
       <strong>Legend:</strong><br />
       <table width="295" border="0" cellpadding="5">
        <tr>
           <td width="17" bgcolor="#33FF66">&nbsp;</td>
           <td width="87">Meeting</td>
           <td width="17" bgcolor="#FF9999">&nbsp;</td>
           <td width="124">Others</td>
         </tr>
        <tr>
           <td width="17" bgcolor="#00CCFF">&nbsp;</td>
           <td>Seminar</td>
           <td width="17"bgcolor="#FF9900">&nbsp;</td>
           <td width="124">Training</td>
         </tr>
      </table>
       <br /></td>
    <td width="17%"><span class="navi"><a href="x_timetable_all.php?month=<?php echo $month-1?>&&year=<?php echo $year?>">PREV MONTH</a><br />
      <a href="x_timetable_all.php?month=<?php echo $month+1?>&&year=<?php echo $year?>">NEXT MONTH</a></span></td>
  </tr>
 </table>
<table width="100%" cellpadding="5" cellspacing="0">
   <tr>
    <td scope="col"><strong>#</strong></td>
    <td scope="col" width="100px"><strong>Staff</strong></td>
    <td scope="col" width="100px"><strong>Department</strong></td>
    <?php

//td of day of the month
$row=1;
$day=0;
while($day<31)
{
	$day++;
	echo '<td  scope="col" style="border:1px solid black; border-collapse:collapse;">'.$day.'</td>';

}; 
?>
  </tr>
   <tr>
    <?php
$sql_staff= "SELECT `user`.id AS staffID,`user`.fullname,`user`.department,`user`.pos, setting.Field_Name AS depname
FROM `user` INNER JOIN setting ON `user`.department = setting.`Value` WHERE setting.`Class`=20 $sqlwhere  ORDER BY `user`.`department` ASC ";
$query_staff=mysql_query($sql_staff,$conn);
$row_staff=mysql_fetch_assoc($query_staff);

$i=0;
$staffprogram=NULL;
do{
	$i++;	
	$color_staff='';
	$staffID=$row_staff['staffID'];

	
	echo '<td>'.$i.'</td>'; //no
	//show staff -instuctor list  // rowspan adalah sub row  //td left side
	echo  '<td bgcolor="'.$color_staff.'"  rowspan="1" style="border:1px solid black; border-collapse:collapse">'.$row_staff['fullname'].'</td>';
	echo  '<td bgcolor="'.$color_staff.'"  rowspan="1" style="border:1px solid black; border-collapse:collapse">'.$row_staff['depname'].'</td>';
	
//--------------------CONTENT STAFF 1-----------------------//	
	//td of content
	$sql_content="	
		SELECT
		timetable.category,	timetable.location,timetable.organizer,timetable.title,
		timetable.department,timetable.level,
		timetable.start_time AS stime,
		timetable.end_time AS etime,
		DAY(timetable.date) AS sday,
		WEEK(timetable.date) AS week,
		DAY(timetable.endate) AS eday,
		DATEDIFF(timetable.endate,timetable.date) AS daydiff ,
		MONTH(timetable.date) AS `month`,
		YEAR(timetable.date) AS `year`,
		setting.Value AS color,
		`user`.fullname AS staff
		FROM timetable
		LEFT OUTER JOIN `user` ON timetable.staffID = `user`.ID
		LEFT OUTER JOIN setting ON timetable.category = setting.Field_Name
		WHERE MONTH(timetable.date)=$month	 AND YEAR(timetable.date)=$year AND timetable.staffID=$staffID AND timetable.sstatus='Approved'
		ORDER BY DAY(timetable.date) ASC		
		";
		$query_content=mysql_query($sql_content,$conn);
		$row_content=mysql_fetch_assoc($query_content);
		
	 $eday=0; //default value for endate	
	//show content
	do{
		$sday=$row_content['sday']; //start date
     $endate=$row_content['eday'];
		$staff=$row_content['staff']; 	$title=$row_content['title'];
		$organizer=$row_content['organizer'];
		$category=$row_content['category'];
		$color=$row_content['color'];
		$location=$row_content['location'];
		$stime=$row_content['stime'];
		$etime=$row_content['etime'];
		
		
	
	    if($sday) //if have content please show..
		{
		 
		   //only show spacer if colspan is not 0
		   $colspan_blank=$sday-$eday-1;
		   if($colspan_blank!=0){ 
		  	$col=1;	
			do{	//spacer area
				echo '<td style="border:dashed 1px silver;border-top:none; border-left:none"></td>';   $col++;
			   }while($col<=$colspan_blank);
			
		   }else{};
		   
		   $stime=date("H:i", strtotime($stime)); 
		  $etime=date("H:i", strtotime($etime)); 
		 								
		  $colspan=$row_content['daydiff']+1; //interval of event
		  $content=$title.'<br><strong>'.$organizer.'</strong><br>'
		  .'<strong>'.$location.' </strong><br>('.$sday.'~'.$endate.'hb) '.$stime.' - '.$etime;
		  

		  echo '<td style="text-align:center;border:solid 1px black" colspan = "'.$colspan.'" bgcolor="'.$color.'" >'.$content.' ',$url.'<p></td>'; //content area  */
		
		  $eday=$row_content['eday'];
		  
		}else {
			//spacer area if no content 
			$col2=1;	do{  echo '<td style="border:dashed 1px silver;border-top:none; border-left:none;"></td>';   $col2++; }while($col2<=31);
			};
			
			
	}while($row_content=mysql_fetch_assoc($query_content));
//--------------------END OF CONTENT STAFF -----------------------//		


				 
	//new row 
	echo '</tr><tr>';
}while($row_staff=mysql_fetch_assoc($query_staff))
?>
  </tr>
 </table>
</body>
</html>