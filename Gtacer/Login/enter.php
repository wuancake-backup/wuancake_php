<?php
    require_once "sql.class.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $login=new connectMysql("localhost","root","root");
    $login->enter($username,$password);
    ?>