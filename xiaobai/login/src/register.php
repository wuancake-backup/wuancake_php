<html>
<head>
	<title>注册</title>
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<div>
		<h1>注册</h1></br></br>
		&nbsp&nbsp&nbsp&nbsp用户名:<input type="text" name="username"></br>
		请设置密码:<input type="password" name="password"></br>
		请确认密码:<input type="password" name="password2"></br></br>
		<input type="submit" value="注册">&nbsp&nbsp
		<input type="button" value="取消"></br></br>
		<a href="login.php">注册成功返回登陆界面</a>
	</div>
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
		$username=$_POST['username'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		if($username=="" or $password=="" or $password2=="")
		{
			echo "<script>alert('账号或密码不能为空！');</script>";
		}elseif ($password!=$password2)
		{
			echo "<script>alert('两次输入密码不相同！');</script>";
		}else
		{
			$sql="insert into id (username,password)
		values('$_POST[username]','$_POST[password]')";
			if (mysql_query($sql))
			{
				echo "<script>alert('注册成功！');</script>";
				echo "<script>window.location.href='login.php'</script>";

			}else
			{
				echo "<script>alert('用户名已占用！');</script>";
			}
		}
	}
	?>
</body>
</html>