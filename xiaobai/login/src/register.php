<html>
<head>
	<title>注册</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
	<div>
		<h1>注册</h1></br></br>
		&nbsp&nbsp&nbsp&nbsp用户名:<input type="text" name="username"></br>
		请设置密码:<input type="password" name="password"></br>
		请确认密码:<input type="password" name="password2"></br></br>
		<input type="submit" value="注册">&nbsp&nbsp
		<input type="button" value="取消"></br></br>
		<a href="login.php">注册成功返回登陆界面</a>
	</div>
</body>
</html>
<?php
header("content-type:text/html;charset=utf-8");
$db_host="localhost";
$db_user="root";
$db_pass="root";
$db_data="fyhqqfyh";
if(mysql_connect($db_host,$db_user,$db_pass))
{
    //echo "连接成功";
}else
{
    echo "连接失败";
}
if(mysql_select_db($db_data))
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
        $sql="insert into admin (username,password)
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

/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/21
 * Time: 14:16
 */
 ?>