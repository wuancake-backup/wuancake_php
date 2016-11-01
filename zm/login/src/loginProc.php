<?php
require_once("SqlTool.class.php");
$sqlTool=new SqlTool("test");
$username=addslashes($_POST["username"]);
$password=addslashes($_POST["password"]);
if($username=="" || $password==""){
	echo "登录信息填写不全，请重新填写，系统将于3秒后自动跳转到登录页面。<br/>";
	echo "如3秒后没有自动跳转，请点击<a href='login.php'>重新登录</a>";
	header("refresh:3;url=login.php");
	exit();
}
$sql="select emp_username,emp_password from employee where emp_username='$username'";
$result=$sqlTool->dql($sql);
if($arr=mysql_fetch_assoc($result)){
	if(mysql_affected_rows()>0){
		if($password==$arr["emp_password"]){
			echo "登录成功<br/>";
			setcookie("username","$username",time()+60*60);
			setcookie("islogin",1,time()+60*60);
			header("location:employeeShow.php");
			exit();
		}else{
			echo "密码错误，请重新填写，系统将于3秒后自动跳转到登录页面。<br/>";
			echo "如3秒后没有自动跳转，请点击<a href='login.php'>重新登录</a>";
			header("refresh:3;url=login.php");
			exit();
		}
	}else{
		echo "没有查询到相关记录，请重新填写，系统将于3秒后自动跳转到登录页面。<br/>";
		echo "如3秒后没有自动跳转，请点击<a href='login.php'>重新登录</a>";
		header("refresh:3;url=login.php");
		exit();
	}	
mysql_free_result($result);	
}else{
	$sql="select ad_username,ad_password from admin where ad_username='$username'";
	$result=$sqlTool->dql($sql);
	if($arr=mysql_fetch_assoc($result)){
		if(mysql_affected_rows()>0){
			if($password==$arr["ad_password"]){
				echo "登录成功<br/>";
				setcookie("username","$username",time()+60*60);
				setcookie("islogin",2,time()+60*60);
				header("location:adminShow.php");
				exit();	
			}else{
				echo "密码错误，请重新填写，系统将于3秒后自动跳转到登录页面。<br/>";
				echo "如3秒后没有自动跳转，请点击<a href='login.php'>重新登录</a>";
				header("refresh:3;url=login.php");
				exit();
			}
		}else{
			echo "没有查询到相关记录，请重新填写，系统将于3秒后自动跳转到登录页面。<br/>";
			echo "如3秒后没有自动跳转，请点击<a href='login.php'>重新登录</a>";
			header("refresh:3;url=login.php");
			exit();
		}	
	mysql_free_result($result);
	}else{
		echo "用户名错误，请重新填写，系统将于3秒后自动跳转到登录页面。<br/>";
		echo "如3秒后没有自动跳转，请点击<a href='login.php'>重新登录</a>";
		header("refresh:3;url=login.php");
		exit();
	}
}

$sqlTool->close();	
	
?>