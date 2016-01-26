
<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
// Create table in my_db database
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE users
(
user varchar(15),
password varchar(15),
cpassword varchar(15)



)";
mysql_query($sql,$con);

mysql_close($con);
?>
