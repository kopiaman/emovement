<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMOVEMENT</title>
</head>
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
<style>
li { color: red; }
li b { color: black; font_weight: normal; }

</style>
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

$sqlwho='';
if($_GET['who']=='timbalan'){
$sqlwho="AND pos=30";
}else if($_GET['who']=='KPP'){
$sqlwho="AND pos=20";
}else if($_GET['who']=='Pegawai'){
$sqlwho="AND pos=10";
}else{};

//list of staff
$sql_staff= "SELECT `user`.id AS StaffID,`user`.fullname AS staffname,`user`.department,`user`.pos, setting.Field_Name AS depname
FROM `user` INNER JOIN setting ON `user`.department = setting.`Value` WHERE setting.`Class`=20 $sqlwhere $sqlwho ORDER BY `user`.`department` ASC ";
$query_staff=mysql_query($sql_staff,$conn);
$row_staff=mysql_fetch_assoc($query_staff);


?>
<body>
<p>&nbsp;</p>
<table  width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td width="16%" ><img src="images/logo.png"/></td>
    <td width="67%"><h2><strong> Staff Calendar <br />
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
    <td width="17%"><span class="navi"><a href="x_timetable_month.php?month=<?php echo $month-1?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>">PREV MONTH</a><br />
      <a href="x_timetable_month.php?month=<?php echo $month+1?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>">NEXT MONTH</a></span></td>
  </tr>
</table>
<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <th>Name</th>
    <?php 
	$col=1;
	do{ ?>
    <td style="border:1px solid black; border-collapse:collapse;"><?php echo $col ?></td>
    <?php 
	    $col++;
		}while($col<32); ?>
  </tr>
  <tr>
    <?php do{ ?>
      <th  style="border:1px solid black; border-collapse:collapse"><?php echo $row_staff['staffname']; ?> </th>
      <?php $coltd=1;do{ ?>
        <?php

  $StaffID=$row_staff['StaffID'];
  
  $sql_content="	
		SELECT timetable.id AS tid,	
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
		WHERE MONTH(timetable.date)=$month	 AND YEAR(timetable.date)=$year AND timetable.staffID=$StaffID AND timetable.sstatus='Approved' AND DAY(timetable.date)=$coltd
		ORDER BY DAY(timetable.date) ASC		
		";
		$query_content=mysql_query($sql_content,$conn);
		$row_content=mysql_fetch_assoc($query_content);
  ?>
        <td  style="border:dashed 1px silver;border-top:none; border-left:none;">
       
		<?php do{
			  $color_event=$row_content['color'];
           if($color_event){ ?>   
    
	<span style="background-color: <?php echo $color_event; ?>"> <a href="x_timetable_detail.php?tid=<?php echo $row_content['tid']; ?>" target="_new">...</a></span>
	<?php echo $stime=date("H:i", strtotime($row_content['stime'])); ?> - <?php echo $row_content['title']; ?>
<?php }; ?>
	<br />
  <?php }while($row_content=mysql_fetch_assoc($query_content)); ?>
        </td>
      <?php 
	    $coltd++;
		}while($coltd<32); ?>
      <?php echo '</tr><tr>';     ?>
      <?php }while($row_staff=mysql_fetch_assoc($query_staff)); ?>
  <tr>
</table>
</body>
</html>