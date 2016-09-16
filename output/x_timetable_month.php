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
	font-size:12px;font-weight:bold;color:#090;
}
</style>
<style>
li {
	color: red;
}
li b {
	color: black;font_weight: normal;
}

th{ border:1px solid black; border-collapse:collapse;}
</style>
<link type='text/css' href='libs/simplemodal/simplemodal.css' rel='stylesheet' media='screen' />
<?php require_once('x_config.php'); ?>
<?php 
if(!$_GET['month']){$month=date("m"); 
}else{$month=$_GET['month'];};
if(!$_GET['year']){$year=date("Y"); 
}else{	$year=$_GET['year'];};

$userid=$_SESSION['userid'];
$department=$_SESSION['department'];
$sub=$_SESSION['subdepartment'];


if($_SESSION['pos']==40){  //pengarah blh tgk semua department
$sqlwhere='`user`.department IS NOT NULL';	
}else if($_SESSION['pos']==30){
$sqlwhere="`user`.department=$department";  //timbalan boleh tgk sector bawahan dia semua dlm department yang sama
}else if($_SESSION['pos']==20){
$sqlwhere="`user`.subdepartment=$sub";	  //KPP blh tgk semua pegawai dalam sub sector yg sama	
}else if($_SESSION['pos']==10){   //pegawai blh tgk yang dia saja
$sqlwhere="user.id=$userid";	
}else{ $sqlwhere='`user`.department IS NOT NULL';	};

//tgk jenis calendar sahaja
$sqlwho='';
if($_GET['who']=='timbalan'){   
$sqlwho="AND pos=30";
}else if($_GET['who']=='KPP'){   
$sqlwho="AND pos=20 ";
}else if($_GET['who']=='Pegawai'){
$sqlwho="AND pos=10 ";
}else{ $sqlwho='';};

//tgk calendar view weekly
$week=$_GET['week'];
if($_GET['week']=='week1'){   
  $startdate=1; $enddate=7;
}else if($_GET['week']=='week2'){   
   $startdate=8; $enddate=14;
}else if($_GET['week']=='week3'){
$startdate=15; $enddate=21;
}else if($_GET['week']=='week4'){
   $startdate=22; $enddate=31;
}else{ $week='allweek';$startdate=1; $enddate=31;};

//list of staff
$sql_staff= "
SELECT
`user`.id AS StaffID,
`user`.fullname AS staffname,
`user`.department,
`user`.subdepartment ,
`user`.pos,
department_sub.subcode AS subname,
department.dcode AS depname
FROM `user`
INNER JOIN department ON `user`.department = department.dip
LEFT OUTER JOIN department_sub ON `user`.subdepartment = department_sub.subid
WHERE $sqlwhere $sqlwho ORDER BY `user`.`department`,`user`.pos DESC ";
$query_staff=mysql_query($sql_staff,$conn);
$row_staff=mysql_fetch_assoc($query_staff);

//list of category
$sql_cat= "SELECT Field_Name AS category,Value AS color FROM setting WHERE Class=30";
$query_cat=mysql_query($sql_cat,$conn);
$row_cat=mysql_fetch_array($query_cat);
?>
<body>

<table  width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td width="36%" rowspan="2" ><img src="images/logo.png"/></td>
    <td width="53%"><h2><strong><br />
    </strong> <?php echo monthcal($month) ;?><strong>-</strong><?php echo $year?><br />
    </h2>
      <strong>Legend:</strong><br />
      <table width="295" border="0" cellpadding="5">
        <tr>
        <?php do{ ?>
          <td width="17" bgcolor="<?php echo $row_cat['color'] ?>">&nbsp;</td>
          <td width="87"><?php echo $row_cat['category'] ?></td>
         
        <?php }while($row_cat=mysql_fetch_array($query_cat)) ?>
        </tr>
      </table>
    <br /></td>
    <td width="11%" rowspan="2"><span class="navi"><a href="x_timetable_month.php?month=<?php echo $month-1?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>">PREV MONTH</a><br />
      <a href="x_timetable_month.php?month=<?php echo $month+1?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>">NEXT MONTH</a></span></td>
  </tr>
  <tr>
    <td><p><strong>Calendar View:</strong> <a href="x_timetable_month.php?month=<?php echo $month?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>&amp;week=week1">WEEK 1</a>
     | <a href="x_timetable_month.php?month=<?php echo $month?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>&amp;week=week2">WEEK 2</a>
     | <a href="x_timetable_month.php?month=<?php echo $month?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>&amp;week=week3">WEEK 3</a> | <a href="x_timetable_month.php?month=<?php echo $month?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>&amp;week=week4">WEEK 4</a>
  | <a href="x_timetable_month.php?month=<?php echo $month?>&amp;&amp;year=<?php echo $year?>&amp;who=<?php echo $_GET['who'] ?>&amp;week=allweek">ALL WEEK</a>    
     </p></td>
  </tr>
</table>
<table width="100%" cellpadding="5" cellspacing="0">
<tr>
<th colspan="3"></th>
<th colspan="<?php echo $enddate-$startdate+1; ?>">DAY</th>
</tr>
  <tr>
    <th>Name</th>
     <th>Function</th>
     <th> Sector</th>
    <?php 
	$col=$startdate;
	do{ ?>
    <td style="border:1px solid black; border-collapse:collapse;"><?php echo $col ?></td>
    <?php 
	    $col++;
		}while($col<=$enddate); ?>
  </tr>
  <tr>
    <?php do{ ?>
      <th  style="border:1px solid black; border-collapse:collapse"><?php echo $row_staff['staffname']; ?> </th>
      <th ><?php echo $row_staff['depname']; ?></th>
      <th><?php echo $row_staff['subname']; ?></th>
      <?php $coltd=$startdate;do{ ?>
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
			  $tid=$row_content['tid'];
			  $color_event=$row_content['color']; $title=$row_content['title'];
			  if($color_event){ ?>

            <span style="background-color: <?php echo $color_event; ?>"><a href='#' class='basic' onclick="window.open('x_timetable_detail.php?tid=<?php echo $tid ?>','<?php echo $title ?>','titlebar=0,toolbar=0,menubar=0,width=500,height=500')">...</a></span><?php echo $stime=date("H:i", strtotime($row_content['stime'])); ?> - <?php echo $title; ?> <br /><br /></div>

          <?php 
			  };
			  }while($row_content=mysql_fetch_assoc($query_content)); ?>
        </td>
        		
          
      <?php 
	    $coltd++;
		}while($coltd<=$enddate); ?>
      <?php echo '</tr><tr>';     ?>
      <?php }while($row_staff=mysql_fetch_assoc($query_staff)); ?>
  <tr>
</table>

<!-- Load jQuery, SimpleModal and Basic JS files --> 
<script type='text/javascript' src='libs/simplemodal/jquery.js'></script> 
<script type='text/javascript' src='libs/simplemodal/jquery.simplemodal.js'></script> 
<script type='text/javascript' src='libs/simplemodal/simplemodal.js'></script>
</body>
</html>