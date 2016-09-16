<?php

require_once("x_config.php");

$id=$_GET['id'];

?>
<body>
<?php
if(isset($_POST['form1'])){
	$note=$_POST['note'];$status=$_POST['status'];
	$sql_up= "UPDATE timetable SET sstatus ='$status',note='$note' WHERE id='$id' OR fid='$id'";
$query_up=mysql_query($sql_up,$conn);
?>

<h3>This item have been <?php echo $status ;?></h3>
<h3><a href="#" onclick="window.close()">Click here to close</a></h3>

<?php
};
?>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <p>
    <strong>Action:</strong><br />
    <input type="radio" name="status" id="status" value="Approved" />
    Approved 
    <input type="radio" name="status" id="status" value="Reject" />
Reject </p>
  <p>
    <label for="note"><strong>Note: 
      </strong><br />
    </label>
    <input name="note" type="text" id="note" size="50" maxlength="100" />
    <br />
  <input type="submit" name="button2" id="button2" value="Submit" />
  </p>
</form>
<p>&nbsp;</p>
</body>


	