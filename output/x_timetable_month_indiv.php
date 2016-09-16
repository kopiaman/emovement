<?php 

//user staff
$sql_indiv= "SELECT `user`.id AS StaffID,`user`.fullname AS staffname,`user`.department,`user`.pos, setting.Field_Name AS depname
FROM `user` INNER JOIN setting ON `user`.department = setting.`Value` WHERE setting.`Class`='20' AND `user`.id=$userid ";
$query_indiv=mysql_query($sql_indiv,$conn);
$row_indiv=mysql_fetch_assoc($query_indiv);

?>
    <td style="border:1px solid black; border-collapse:collapse;">1</td>
  </tr>
  <tr>

      <th  style="border:1px solid black; border-collapse:collapse"><?php echo $row_indiv['staffname']; ?> </th>
      <th><?php echo $row_indiv['depname']; ?></th>
      <?php $coltd=1;do{ ?>
        <?php

  $StaffID2=$row_indiv['StaffID'];
  
  $sql_content2="	
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
		WHERE MONTH(timetable.date)=$month	 AND YEAR(timetable.date)=$year AND timetable.staffID=$StaffID2 AND timetable.sstatus='Approved' AND DAY(timetable.date)=$coltd
		ORDER BY DAY(timetable.date) ASC		
		";
		$query_content2=mysql_query($sql_content2,$conn);
		$row_content2=mysql_fetch_assoc($query_content2);
  ?>
        <td  style="border:dashed 1px silver;border-top:none; border-left:none;">
         

        
		<?php do{
			  $tid=$row_content2['tid'];
			  $color_event=$row_content2['color']; $title=$row_content2['title'];
			  if($color_event){ ?>

            <span style="background-color: <?php echo $color_event; ?>"><a href='#' class='basic' onclick="window.open('x_timetable_detail.php?tid=<?php echo $tid ?>','<?php echo $title ?>','titlebar=0,toolbar=0,menubar=0,width=500,height=500')">...</a></span><?php echo $stime=date("H:i", strtotime($row_content2['stime'])); ?> - <?php echo $title; ?> </div>

          <?php 
			  };
			  }while($row_content2=mysql_fetch_assoc($query_content2)); ?>
        </td>
        		
          
      <?php 
	    $coltd++;
		}while($coltd<32); ?>
      <?php echo '</tr><tr>';     ?>
  <tr>

