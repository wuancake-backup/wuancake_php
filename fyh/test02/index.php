<!DOCTYPE HTML>
<html> 
<head>
<style type="text/css">
h3 {text-align:center}
</style>
</head>
<body>
<?php
//使输出不出现乱码
header("content-type:text/html;charset=utf-8");
//定义变量并设置为空值
$name=$password="";
?>
<form action="insert.php" method="post">
<h1 align="center">登陆</h1>
<h3>用户名：<input type="text" name="username"><br><br></h3>
<h3>密码 ：<input type="password" name="password"><br><br></h3>
<h3><input type="submit" name="submit" value="登陆">
<input type="reset" name="reset" value="取消"><br><br></h3>
<h3><a href="register.php">没有账户点击注册</a></h3>
</form>
</body>
</html>
