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
if($username=="" or $password=="" )
	{
		echo "账号或密码不能为空</br>";
		echo "<a href='login.php'>返回登陆界面</a>";
	}else
	{
		$sql="select password from id where username='$username'";
		$query=mysql_query($sql);
		$arr=mysql_fetch_array($query);
		if($arr=="")
			{
				echo "用户名不存在";
			}elseif($arr['password']==$password)
			{
				echo "登陆成功";
				echo "<a href='welcome.html'>进入我的网站</a>";
			}else
			{
				echo "账号或密码错误";
			}
	}
?>