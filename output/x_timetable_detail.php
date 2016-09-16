<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMOVEMENT EVENT</title>
</head>
<style>
body {
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;
	margin:30px;
}

table{ border-collapse:collapse; }
</style>
<?php require_once('x_config.php'); ?>
<?php
 $tid=$_GET['tid'];
  
  $sql_content="	
		
		SELECT
timetable.category,
timetable.location,
timetable.organizer,
timetable.title,
timetable.department,
timetable.`level`,
timetable.start_time AS stime,
timetable.end_time AS etime,
timetable.date AS sdate,
timetable.endate AS edate,
`user`.fullname AS staffname,
`user`.pos,
department.dcode AS func,
department_sub.subname AS sect
FROM timetable
LEFT OUTER JOIN `user` ON timetable.staffID = `user`.id
LEFT JOIN department ON `user`.department = department.dip
LEFT JOIN department_sub ON `user`.subdepartment = department_sub.subid
WHERE timetable.id =$tid	";
		$query_content=mysql_query($sql_content,$conn);
		$row=mysql_fetch_assoc($query_content);
?>
<body>
<p><img src="images/logo.png" width="415" height="80" /></p>
<p>STAFF NAME: <?php echo $row['staffname'] ?></p>
<p>FUNCTION: <?php echo $row['func'] ?>-  <?php echo $row['sect'] ?></p>
<table width="100%" border="1" cellpadding="5">
  <tbody>
    <tr>
      <td width="154"><div><strong>Category</strong></div></td>
      <td width="424"><div><?php echo $row['category'] ?></div></td>
    </tr>
    <tr>
      <td><div><strong>Participation Level</strong></div></td>
      <td><div><?php echo $row['level'] ?> </div></td>
    </tr>
    <tr>
      <td><div><strong>Title</strong></div></td>
      <td><div><?php echo $row['title'] ?> </div></td>
    </tr>
    <tr>
      <td><div><strong>Location</strong></div></td>
      <td><div><?php echo $row['location'] ?> </div></td>
    </tr>
    <tr>
      <td><div><strong>Organizer</strong></div></td>
      <td><div><?php echo $row['organizer'] ?> </div></td>
    </tr>
    <tr>
      <td><div><strong>Status</strong></div></td>
      <td><div>Approved </div></td>
    </tr>
    <tr>
      <th colspan="2"> Date Time<br />        <table width="394" cellpadding="0">
          <tbody>
            <tr>
              <th><div>Time</div></th>
              <td><div><?php $stime=$row['stime']; echo date("H:i", strtotime($stime));  ?> ~
			  <?php $etime=$row['etime']; if($etime!=NULL){echo date("H:i", strtotime($etime));}; ?></div></td>
            </tr>
            <tr>
              <th><div>Date</div></th>
              <td><div><?php $sdate=$row['sdate']; echo date("d-m-Y", strtotime($sdate)); ?> ~ 
				 <?php $edate=$row['edate']; if($edate!=NULL){echo date("d-m-Y", strtotime($edate));};  ?></div></td>
            </tr> 
          </tbody>
      </table></th>
    </tr>
    <tr>
      <th colspan="2">Summary</th>
    </tr>
    <tr>
      <td colspan="2"><?php echo $row['summary'] ?></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
</body>
</html>