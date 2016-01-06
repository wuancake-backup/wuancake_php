<?php
$con = mysql_connect("localhost","root","root");

mysql_select_db("test", $con);

$result = mysql_query("SELECT * FROM user");

while($row = mysql_fetch_array($result))
  {
  echo $row['username'] . " " . $row['password'];
  echo "<br />";
}

mysql_close($con);
?>