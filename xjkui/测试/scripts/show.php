<?php
header("Content-Type: text/html;charset=utf-8"); 
$con = mysql_connect("localhost","login","login");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $admin=$_POST["admin"];
  $password=$_POST["password"];
  mysql_select_db("test",$con);

$result=mysql_query("SELECT admin,password FROM login");
$num=0;
while($row = mysql_fetch_array($result)){
	if($admin==$row[0]&&$password==$row[1]){
    echo "用户名：".$row[0]."<br />";
    echo "密码：".$row[1]."<br />";
    $num=1;break;}

}
    if($num==0)
    {
    	echo "用户名密码错误";
    }
?>
