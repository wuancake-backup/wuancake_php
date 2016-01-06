<?php
$name=$_POST["username"];
$passone=$_POST["passone"];
$passtwo=$_POST["passtwo"];
header("Content-Type: text/html; charset=utf-8");
$db=mysql_connect("localhost","root","");
mysql_select_db("log",$db) or die ("数据库选择失败");
mysql_query("SET NAMES UTF8");
if ($passone==$passtwo){
$a=mysql_query("insert into logup values ('$name',$passone,$passone);");
if ($a) {
	echo "欢迎来到绅士的世界";
}else{
	echo "fales";
	echo mysql_error();
}}else{
	echo "两次密码不一致";
}
?>