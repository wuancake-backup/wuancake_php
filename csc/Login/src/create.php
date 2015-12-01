<html><title>创建数据库</title></html><?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE vt",$con))
  {
  echo "成功创建登陆 注册数据库！";
  }
else
  {
  echo "创建失败！ " . mysql_error();
  }

// Create table in vt database
mysql_select_db("vt", $con);
$sql = "CREATE TABLE user 
(
username varchar(15),
password varchar(15)
)";
mysql_query($sql,$con);

mysql_close($con);
?>
