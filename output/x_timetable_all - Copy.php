<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMOVEMENT</title>
	<style>
body { font-size:10px; font-family:Verdana, Geneva, sans-serif; margin-top:10px; margin-left:10px;}

.navi{
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

//select campus  setting
/*$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);*/
?>
<body>

<table width="1200px" border="0" class="tablehead">
  <tr>
    <td width="16%" ><img src="images/<?php //echo $row_q01['logo']?>"/></td>
    <td width="67%"><h2><strong> Staff Calendar<br />
      MONTH:</strong> <?php echo $month?> <strong>YEAR:</strong> <?php echo $year?><br /></h2>
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
      <br />
    </td>
    <td width="17%"><span class="navi"><a href="x_timetable_all.php?month=<?php echo $month-1?>&&year=<?php echo $year?>">PREV MONTH</a><br />
    <a href="x_timetable_all.php?month=<?php echo $month+1?>&&year=<?php echo $year?>">NEXT MONTH</a></span></td>
  </tr>
</table>

<table width="1200px" cellpadding="5">
 <tr> 
<td scope="col"><strong>#</strong></td>
<td scope="col"><strong>Staff</strong></td>
<td scope="col"><strong>Department</strong></td>

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
</tr><tr>
<?php
$sql_staff= "SELECT `user`.id AS staffID,`user`.fullname,`user`.department,`user`.pos, setting.Field_Name AS depname
FROM `user` INNER JOIN setting ON `user`.department = setting.`Value` WHERE setting.`Class`=20 ORDER BY `user`.`department` ASC ";
$query_staff=mysql_query($sql_staff,$conn);
$row_staff=mysql_fetch_assoc($query_staff);

$i=0;
$staffprogram=NULL;
do{
	$i++;	
	$color_staff='#FFFF99';
	$staffID=$row_staff['staffID'];

	
	echo '<td>'.$i.'</td>'; //no
	//show staff -instuctor list  // rowspan adalah sub row  //td left side
	echo  '<td bgcolor="'.$color_staff.'"  rowspan="1" style="border:0px solid black; border-collapse:collapse">'.$row_staff['fullname'].'</td>';
	echo  '<td bgcolor="'.$color_staff.'"  rowspan="1" style="border:0px solid black; border-collapse:collapse">'.$row_staff['depname'].'</td>';
	
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
		WHERE MONTH(timetable.date)=$month	 AND YEAR(timetable.date)=$year AND timetable.staffID=$staffID 
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
		  	echo '<td style="border:solid 1px silver" colspan = "'.$colspan_blank.'"><p></td>'; 	 //spacer area
		   }else{};
		   
		   $stime=date("H:i", strtotime($stime)); 
		  $etime=date("H:i", strtotime($etime)); 
		 								
		  $colspan=$row_content['daydiff']+1; //interval of event
		  $content=$title.' ('.$category.')<br><strong>'.$organizer.'</strong><br>'
		  .'<strong>'.$location.' </strong><br>('.$sday.'-'.$endate.') '.$stime.' - '.$etime;
		  
		 /* $url="<a href='x_timetable_class.php?week=$week&&year=$year&&batch=$batch&&class=$class&&programid=$programid' target='_blank'><img src='images/time.png' border='0' /></a>";*/
		  echo '<td style="text-align:center;border:solid 1px black" colspan = "'.$colspan.'" bgcolor="'.$color.'" >'.$content.' ',$url.'<p></td>'; //content area  */
		  
		   //echo '<td style="text-align:center;border:solid 1px black" colspan = "'.$colspan.'" bgcolor="'.$color.'" >'.$content.' ',$url.'<p></td>'; //content area
		  $eday=$row_content['eday'];
		}else {}
	}while($row_content=mysql_fetch_assoc($query_content));
//--------------------END OF CONTENT STAFF 1-----------------------//		


				 
	//new row 
	echo '</tr><tr>';
}while($row_staff=mysql_fetch_assoc($query_staff))
?>	
</tr>	
</table>

</body>
</html>