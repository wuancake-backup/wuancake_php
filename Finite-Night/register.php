<!DOCTYPE HTML>
<html>
<head>
<style>
.error{color:#FF0000;}
</style>
</head>

<?php
$usernameEr = $passwordEr= $passwordconfirmEr = "";
$username = $password = $passwordconfirm = "";
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
	
	if (empty($_POST["passwordconfirm"])) {
		$passwordconfirmEr = "请再次输入密码！";
		$flag = 1;
	} else {
		$passwordconfirm = test_input($_POST["passwordconfirm"]);
		if ($password!=$passwordconfirm) {
			$passwordconfirmEr = "两次输入的密码不一致";
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

if ($flag==0 && $username) {
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
			WHERE username='$username'");
	if (mysql_num_rows($result)) {
		$flag = 2;
	}
	if ($flag==0) {
		mysql_query("INSERT INTO login (username, password)
			VALUES ('$username', '$password')");
		$flag = 3;
	}
	mysql_close($con);
}
?>

<body>
<h2>注册</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
用户名：<input type="text" name="username" />
<span class="error"> <?php echo $usernameEr;?></span>
<br/><br/>
请设置密码：<input type="text" name="password" />
<span class="error"> <?php echo $passwordEr;?></span>
<br/><br/>
请确认密码：<input type="text" name="passwordconfirm" />
<span class="error"> <?php echo $passwordconfirmEr;?></span>
<br/><br/>
<input type="submit" value="注册" />
<input type="button" value="取消" onClick="window.close()" /><br/>
<br/>
</form>
<?php
if ($flag!=0) {
	if ($flag==1) {
		echo "注册失败.";
	}
	else if ($flag==2) {
		echo "注册失败:用户名已存在！";
	}
	else if ($flag==3) {
		//echo "注册成功";
		header("location: login.php");		
	}
}
?>
</body>
</html>