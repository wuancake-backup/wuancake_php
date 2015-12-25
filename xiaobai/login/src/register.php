<?php
header("content-type:text/html;charset=utf-8");
$mysql_arr="localhost";
$mysql_name="root";
$mysql_pass="root";
if(mysql_connect("localhost","root","root"))
{
    //echo "连接成功";
}else
{
    echo "连接失败";
}
if(mysql_select_db("test"))
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
        $sql="insert into id (username,password)
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
?>
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/21
 * Time: 14:16
 */