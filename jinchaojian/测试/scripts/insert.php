<?php
$con = mysql_connect("localhost","login","login");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $admin=$_POST["admin"];
  $password=$_POST["password1"];

mysql_select_db("test",$con);
if ($_POST["password1"]==$_POST["password2"]) {
	$sql="INSERT INTO login(admin,password) 
VALUES ('$admin', '$password')";
}
else
{
	echo "Two input passwords are not consistent";
}

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
	login
</title>
</head>
<body>
	<h1>login</h1>
	<form action="show.php" method="post">
	<p>
		用户名：<input name ="admin" type="text" size="20">
	</p>
    <p>
		密码&nbsp;：<input name ="password" type="text" size="20">
	</p>
	<input type="submit" name="submit" value="登陆">
	<input type="reset" name="submit" value="取消">
	</form>	
	<p>
		<a href="../register.html ">没有账户点击注册</a>
	</p>
</body>
</html>