<?php
    if (isset($_POST['name']) && isset($_POST['psd'])) {
        $name = $_POST['name'];
        $psd = $_POST['psd'];
        $connect = new mysqli('localhost', 'root', 'root', 'test');
        $res = $connect->query("SELECT password FROM user WHERE name = $name");
        if ($psd == $res->fetch_object()->password) {
            //存session
            session_start();
            $_SESSION['token'] = 'user';
            //存cookie
            $str = $name.'.'.hash_hmac('md5',$name,'key');
            setcookie('token',$str,time()+6000);
            header('location:home.php');
        }
        else
            echo '登录失败';
    }