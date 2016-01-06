<?php

//数据库注册

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$usr=$_POST["user"];
$pw=$_POST["password1"];

mysql_select_db("test", $con);

mysql_query("INSERT INTO user (username, password) 
VALUES ('$usr', '$pw')");

mysql_close($con);

//注册成功，弹出提示框，转到登陆界面
echo '<script language="javascript">';
echo 'alert("注册成功!");';
echo "location.href='main.html'";
echo '</script>';

?>