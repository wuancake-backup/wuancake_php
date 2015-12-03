<html>
<head>
<title>Login</title>
<style type="text/css">
div{
    width:350px;
    height:300px;
	border:1px solid #000;
	margin:0 auto;	
	text-align:center;
}
h1{
   font-family:"黑体";
   font-size:35px;
}
</style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div>
<h1>Login</h1></br></br>
用户名:<input type="text" name="username"></br>
密码:&nbsp&nbsp<input type="password" name="password"></br></br>
<input type="submit" value="登陆">&nbsp&nbsp
<input type="button" value="取消"></br></br>
<a href="register.php">没有账户点击注册</a>
</div> 
</form>
</body>
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
if(!empty($_POST))
{
$username=$_POST["username"];
$password=$_POST["password"];
if($username=="" or $password=="" )
	{
		echo '<script>alert ("账号或密码不能为空!");</script>';
	}else
	{
		$sql="select password from id where username='$username'";
		$query=mysql_query($sql);
		$arr=mysql_fetch_array($query);
		if($arr=="")
			{
				echo '<script>alert ("用户名不存在!");</script>';
			}elseif($arr['password']==$password)
			{
				echo "<script>alert ('登陆成功!');</script>";
			    echo "<script>window.location.href='welcome.html'</script>";
			}else
			{
				echo '<script>alert ("账号或密码错误!");</script>';
			}
	}
}
?>
</html>