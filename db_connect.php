<!DOCTYPE html>
<html>
<body>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "curd_test";
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname) or die ('Unable to select database!');

?>


</body>
</html>