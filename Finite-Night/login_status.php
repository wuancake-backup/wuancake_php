<!DOCTYPE HTML> 
<html>
<body>

<?php
$usernameEr = $passwordEr= "";
$username = $password = "";
$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["username"])) {
		$usernameEr = "用户名不能为空！";
		$flag = 1;
	} else {
		$username = test_input($_POST["username"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
			$usernameEr = "用户名只允许字母和空格";
			$flag = 1;
		}
	}
		
	if (empty($_POST["password"])) {
		$passwordEr = "密码不能为空！";
		$flag = 1;
	} else {
		$password = test_input($_POST["password"]);
		if (!preg_match("/^[0-9a-zA-Z]*$/",$password)) {
			$passwordEr = "密码只允许数字和字母";
			$flag = 1;
		}
	}		
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($flag==0) {
	$con = mysql_connect("localhost:3306","root","password");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db("test", $con);
	if (!$db_selected)
	{
		die ("Can\'t use test : " . mysql_error());
	}
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER_SET_CLIENT=utf8");
	mysql_query("SET CHARACTER_SET_RESULTS=utf8");
	$result = mysql_query("SELECT * FROM login
		WHERE username='$username' AND password='$password'");
	if (mysql_num_rows($result)) {
		echo "登陆成功！";
	}
	else $flag = 2;
	mysql_close($con);
}
		 
if ($flag!=0) {
	if ($flag==1) {
		echo "登陆失败:<br/><br/>";
		echo $usernameEr;
		echo "<br/>";
		echo $passwordEr;
	}
	else if ($flag==2) {
		echo "登陆失败:用户名或密码不正确！";
	}
}
?>
</body>
</html>