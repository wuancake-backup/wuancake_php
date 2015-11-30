<?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vt", $con);

mysql_query("INSERT INTO user (username, password) 
VALUES ('сгик', '888888')");


mysql_close($con);
?>
