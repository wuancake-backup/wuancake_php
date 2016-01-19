<?php
session_start();
unset($_SESSION['userNickname']);

if(isset($_SESSION['userurl'])){
    $url=$_SESSION['userurl'];
}else{
    $url="index.php";
}
echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/17
 * Time: 20:23
 */