<?php

//验证登陆

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$usr=$_POST["user"];
$pw=$_POST["password"];

mysql_select_db("test", $con);

$pw_sql=mysql_query("SELECT password FROM user WHERE username = '$usr'");
mysql_close($con);

if($pw_sql=$pw)
{
//验证成功，转到欢迎界面
echo '<script language="javascript">';
echo "location.href='welcome.html'";
echo '</script>';
}
else{
//验证失败，弹出提示框，返回登陆界面
echo '<script language="javascript">';
echo 'alert("用户名或密码错误!");';
echo "location.href='main.html'";
echo '</script>';
}
?>