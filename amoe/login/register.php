<html>
	<head>
		<meta charset="UTF-8"/>
		<title>阿萌的注册页</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
	<body>
		<div class="main">
			<form action="action.php" onsubmit="return formCheck(this)" method="post">
				<h1>用户注册</h1>
				<label>用户名：</label><input type="text" name="username" value="" required="required" oninvalid="alert('密码不能为空！')"/><br />
				<label>请输入密码：</label><input type="password" name="password1" value="" required="required" oninvalid="alert('密码不能为空！')"/><br />
				<label>请确认密码：</label><input type="password" name="password2" value="" required="required" oninvalid="alert('密码不能为空！')"/><br />
				<div class="btn"><input type="submit" name="submit" value="注册"/><input type="reset" value="取消"/></div>
				<div class="register"><a href="login.php">已有账户返回登陆</a></div>
			</form>
		</div>
		<script type="text/javascript">
			function formCheck(thisform){
				if(thisform.password1.value!=thisform.password2.value){
					alert("两次密码输入不一致");
					return false;
				}
				return true;
			}
		</script>
	</body>
</html>