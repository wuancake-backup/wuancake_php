<html>
	<head>
		<meta charset="UTF-8"/>
		<title>阿萌的登录页</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
	</head>
	<body>
		<div class="main">
			<form action="action.php" method="post">
				<h1>用户登陆</h1>
				<label>用户名：</label><input type="text" name="username" value="" required="required"/><br />
				<label>密码：</label><input type="password" name="password" value="" required="required"/><br />
				<div class="btn"><input type="submit" name="submit" value="登陆"/><input type="reset" value="取消"/></div>
				<div class="register"><a href="register.php">没有账户点击注册</a></div>
			</form>
		</div>
	</body>
</html>