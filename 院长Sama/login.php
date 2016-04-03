<html>
<head><style>.error{color: #FF0000}</style>
<body>
	<h1>午安煎饼计划</h1>
</body>
</head>
</html>
<?php

$conn = mysql_connect('localhost','root','');
$id = $paswd = '';
$iderr = $paswderr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['id'])) {
		$iderr = '*请输入用户名*';
	} else {
		$name = test_input($_POST['id']);
	}
	
	if (empty($_POST['paswd'])) {
		$paswderr = '*请输入密码*';
	} else {
		$paswd = test_input($_POST['paswd']);
	}
	
}

function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<form method = 'post' action = "

<?php
echo htmlspecialchars($_SERVER['PHP_SELF'])
?>">

用户名:<input type = 'text' name = 'id' placeholder = '请输入用户名'>
<span class = 'error'><?php echo $iderr;?></span>
<br><br>
密码:&nbsp;<input type = 'text' name = 'paswd' placeholder = '请输入密码'>
<span class = 'error'><?php echo $paswderr?></span>
<br><br>
		<input type = 'submit' name = 'submit' value = '确认'>	
		<input type = 'button' name = 'regist' value = '注册'  onclick="location.href='welcome.php';">

</form>