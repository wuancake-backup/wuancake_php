<html>
<?php 
if(mysql_connect("localhost","root","root"))
	{
		//echo "连接成功";
	}else 
	{
		echo "连接失败";
	}
if(mysql_select_db("test"))
	{
		//echo "选择数据库成功";
	}else
	{
		echo "选择数据库失败";
	}
$username=$_POST["username"];
$password=$_POST["password"];
$password2=$_POST["password2"];
if($username=="" or $password=="" or $password2=="")
	{
		echo "账号或密码不能为空</br>";
		echo "<a href='register.php'>返回注册界面</a>";
	}elseif ($password!=$password2)
	{
		echo "两次输入密码不相同</br>";
		echo "<a href='register.php'>返回注册界面</a>";
	}else
	{
		$sql="insert into id (username,password)
		values('$_POST[username]','$_POST[password]')";
		if (mysql_query($sql))
		{
			echo "注册成功</br>";
			echo "<a href='login.php'>返回登陆界面</a>";

		}else
		{
			echo "用户名已占用";
		}
	}
?>