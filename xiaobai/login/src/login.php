<?php
header("content-type:text/html;charset=utf-8");
$mysql_servername="localhost";
$mysql_username="root";
$mysql_password="root";
$mysql_db="test";
if(mysql_connect($mysql_servername,$mysql_username,$mysql_password))
{
    echo "连接成功";
}else
{
    echo "连接失败";
}
if(mysql_select_db($mysql_db))
{
    echo "选择数据库成功";
}else
{
    echo "选择数据库失败";
}
if(!empty($_POST))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    if($username=="" or $password=="" )
    {
        echo '<script>alert ("账号或密码不能为空!");</script>';
    }else
    {
        $sql="select password from id where username='$username'";
        $query=mysql_query($sql);
        $arr=mysql_fetch_array($query);
        if($arr=="")
        {
            echo '<script>alert ("用户名不存在!");</script>';
        }elseif($arr['password']==$password)
        {
            echo "<script>alert ('登录成功!');</script>";
            echo "<script>window.location.href='welcome.html'</script>";
        }else
        {
            echo '<script>alert ("账号或密码错误!");</script>';
        }
    }
}
?>
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/21
 * Time: 13:57
 */