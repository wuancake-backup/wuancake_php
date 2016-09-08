<?php
	session_start();
	if(!isset($_SESSION['id'])){
		echo '<script type="text/javascript">alert("请登录以后访问！");location="login.php";</script>';
	}
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>网站首页</title>
	</head>
	<body>
		<h1>恭喜用户-<?php echo $_SESSION['uname'];?>-登陆成功</h1>
		<a href="action.php?action=logout">注销</a>
	</body>
</html>