<META http-equiv="content-type" content="text/html; charset=utf-8">
<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    header("Location:login.html");
    exit();
}

//包含数据库连接文件
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user_base where ID=$userid limit 1");
$row = mysql_fetch_array($user_query);
echo '用户信息：<br />';
echo '用户ID：',$userid,'<br />';
echo '用户名：',$username,'<br />';
echo '注册日期：',$row['regdate'],'<br />';
echo '<a href="login.php?action=logout">注销</a>&#160;'."<a href='../add.php'>留言板</a>";
?>