<?php
require_once("SqlTool.class.php");
$sqlTool=new SqlTool("test");

$username=$_POST["emp_username"];
$password=$_POST["emp_password"];
$confirmpassword=$_POST["confirmpassword"];
if(!preg_match("#^[a-zA-Z][a-zA-Z0-9_]{4,15}$#",$username)){
	echo "此用户名非法，请重新填写，系统将于3秒后自动跳转到注册页面。<br/>";
	echo "如3秒后没有自动跳转，请点击<a href='register.php'>重新注册</a>";
	header("refresh:3;url=register.php");
	exit();
}

if($username=="localhost"){
	echo "此用户名不可用，请重新填写，系统将于3秒后自动跳转到注册页面。<br/>";
	echo "如3秒后没有自动跳转，请点击<a href='register.php'>重新注册</a>";
	header("refresh:3;url=register.php");
	exit();
}
if($username=="" || $password=="" ){
	echo "登录信息填写不全，请重新填写，系统将于3秒后自动跳转到注册页面。<br/>";
	echo "如3秒后没有自动跳转，请点击<a href='register.php'>重新注册</a>";
	header("refresh:3;url=register.php");
	exit();
}
if($password!=$confirmpassword){
	echo "密码不一致，请重新填写，系统将于3秒后自动跳转到注册页面。<br/>";
	echo "如3秒后没有自动跳转，请点击<a href='register.php'>重新注册</a>";
	header("refresh:3;url=register.php");
	exit();
}

$sql="insert into employee values(null,'$username','$password')";
$res=$sqlTool->dml($sql);
if($res){
	if(mysql_affected_rows()>0){
		echo "恭喜，注册成功，系统将于3秒后自动跳转到登录页面。<br/>";
		echo "如3秒后没有自动跳转，请点击<a href='login.php'>登录</a>";
		header("refresh:3;url=login.php");
		exit();
	}else{
		echo "注册失败，请重新注册，系统将于3秒后自动跳转到注册页面。<br/>";
		echo "如3秒后没有自动跳转，请点击<a href='register.php'>重新注册</a>";
		header("refresh:3;url=register.php");
		exit();
	}
}else{
	echo "用户名已存在，请重新注册，系统将于3秒后自动跳转到注册页面。<br/>";
	echo "如3秒后没有自动跳转，请点击<a href='register.php'>重新注册</a>";
	header("refresh:3;url=register.php");
	exit();
}

$sqlTool->close;
?>