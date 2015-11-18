<?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE vt",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table in vt database
mysql_select_db("vt", $con);
$sql = "CREATE TABLE users 
(
username varchar(15),
password varchar(15)

)";
mysql_query($sql,$con);

mysql_close($con);
?>
