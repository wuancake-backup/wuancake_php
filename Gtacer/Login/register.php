<?php
    require_once "sql.class.php";
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $rpassword=$_REQUEST['rpassword'];
    if($password!=$rpassword) {
        echo "<a href='sigin.html'>两次输入的密码不一样,点击返回</a>";
    }else if($username=="" || $password=="" || $rpassword==""){
        echo "<a href='sigin.html'>您的输入有误，点击重新输入</a>";
    }else {
        $sigin = new connectMysql("localhost", "root", "root");
        $sigin->register($username, $password);
    }
?>