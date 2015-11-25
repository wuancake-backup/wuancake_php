<!DOCTYPE HTML>
<html> 
<body>
<?php
//使输出不出现乱码
header("content-type:text/html;charset=utf-8");
//定义变量并设置为空值
$name=$password="";
?>
<form action="index.php" method="post">
<h1>登陆<h1>
<h3>用户名：<input type="text" name="name"><br><br><h3>
<h3>密码 ：<input type="text" name="password"><br><br><h3>
<input type="submit" name="submit" value="登陆">
<input type="submit" name="submit" value="取消"><br><br>
<a href="test03.com/register.php">没有账户点击注册</a>
<?php
echo "现在是 " . date("Y/m/d")."  ".date("h:i:sa");
?><br>
<?php
echo readfile("abc.txt");
?>
</form>
</body>
</html>
