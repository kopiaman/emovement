<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$username='kopiaman';
$password='gengmalay86';
$database='emovement';
$table='timetable'; 
$path="C:/wamp/www/emov/output/dump11.sql";  
$result = exec("mysqldump -u$username -p$password $database $table > $path");
echo $result;
?>
test cuba
</body>
</html>