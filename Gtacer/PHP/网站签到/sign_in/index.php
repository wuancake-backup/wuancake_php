<?php
    session_start();
    if (!isset($_SESSION['token'])) {
        include_once './view/login.php';
        if (isset($_POST['username'],$_POST['password'])){
            if ($_POST['username'] == '' || $_POST['password'] == '')
                echo "<p style='color: red; text-align: center;'>请输入用户名和密码<p>";
            else{
                include_once './sig_in_model.php';
                $username = $_POST['username'];
                $password = $_POST['password'];
                $mysql = new Sign_in();
                $res = $mysql->login($username,$password);
                //判断是否登陆成功
                if ($res == 1) {
                    $_SESSION['token'] ="$username";
                    header("Location: index.php/");
                }
                else {
                    echo "<p style='color: red; text-align: center;'>用户名或密码错误<p>";
                }
            }
        }
    }else{
        $username = $_SESSION['token'];
        //计算当前时间
        $time = time();
        $now_year = date("Y",$time);
        $now_month = date("n",$time);
        $now_day = date("j",$time);
        $now = date("Y-m-d",$time);
        include_once './sig_in_model.php';
        $setMonth = isset($_GET['month']) ? $_GET['month'] : $now_month;
        $set_year = $now_year;
        $set_month = $setMonth;
        if ($set_month <= 0){
            while ( $set_month <= 0){
                $set_month+=12;
                $set_year--;
            }
        }
        elseif ($set_month > 12 && $set_month < 123456789){
            while ($set_month > 12){
                $set_month-=12;
                $set_year++;
            }
        }
        else{
            $set_year = $now_year;
        }
        $today = new Date($set_year);
        $date_info = $today->getDateInfo($set_month);
        $date_array = $today->getDateArray($set_month);

        //判断是否签到
        $sign_info = new Sign_info();
        if (isset($_GET['sign'])) {
            $res=$sign_info->sign($username);
            if ($res)
                echo "<p style='color: red;'>签到成功！</p>";
            else
                echo "<p style='color: red;'>签到失败！</p>";
        }
        //显示日历
        include_once './view/signin.php';

    }
?>