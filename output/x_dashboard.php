<?php include('menu.php') ;
$conn2= mysql_connect($host, $user, $pwd) or trigger_error(mysql_error); 
mysql_select_db($sys_dbname) or die(mysql_error());

$department=$_SESSION['department'];
$sub=$_SESSION['subdepartment'];
$pos=$_SESSION['pos'];
$userid=$_SESSION['userid'];

$sql_my= "SELECT COUNT(id) AS no FROM timetable WHERE `staffID`=$userid AND `sstatus` LIKE 'Pending' AND fid IS  NULL";
$query_my=mysql_query($sql_my,$conn2);
$row_my=mysql_fetch_assoc($query_my);

if($pos==20){
	//KPP check bilangan pending pada subdepartment yang sama
	$sqlwhere="WHERE subdepartment=$sub AND `pos`=10 AND `sstatus` LIKE 'Pending' AND fid IS  NULL";
	$sql_ot="SELECT COUNT(`id`) AS no FROM timetable $sqlwhere";
	$query_ot=mysql_query($sql_ot,$conn2);
	$row_ot=mysql_fetch_assoc($query_ot);

}else if($pos==30){
	//timbalan check bilangan pending pada department yang sama
$sqlwhere="WHERE department=$department AND `staffID`!=$userid AND `pos`=20 AND `sstatus` LIKE 'Pending' AND fid IS  NULL";	
	$sql_ot="SELECT COUNT(`id`) AS no FROM timetable $sqlwhere";
$query_ot=mysql_query($sql_ot,$conn2);
$row_ot=mysql_fetch_assoc($query_ot);

}else if($pos==40){
	//pengarah check bilanan pending pada setiap timbalan
	$sqlwhere="WHERE `pos`=30 AND `sstatus` LIKE 'Pending' AND fid IS  NULL";
		$sql_ot="SELECT COUNT(`id`) AS no FROM timetable $sqlwhere";
$query_ot=mysql_query($sql_ot,$conn2);
$row_ot=mysql_fetch_assoc($query_ot);

}else{};
?>
<style>
p{ font-family: Arial, sans-serif; font-size:14px; }
#dash { padding:20px;background-color:#CCC;border:0px solid;border-radius:15px;}
</style>
<p></p>

<p>&nbsp;</p>
<table width="400"  id="dash" style="font-size:14px; padding:20px;">
  <tr>
    <th align="center" scope="row">QUICK NOTICE</th>
  </tr>
   <?php if($pos!=10){ ?> 
  <tr>
    <th align="center" scope="row">Subordinate  Application -Pending :<?php echo $row_ot['no'];?></th>
  </tr>
   <?php }; ?> 
 <?php if($pos!=40){ ?> 
  <tr>
    <th align="center" scope="row"> My application -Pending :<?php echo $row_my['no']; ?></th>
  </tr>
  <?php }; ?>
</table>

