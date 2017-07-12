<?php
    header('Content-type:text/html;charset=utf-8');
    session_start();

    if (isset($_SESSION['token'])){
        include_once '..\views\student_info.php';
    }else{
        include_once '..\views\login.php';

        if(isset($_POST['username'],$_POST['password'])){
            include_once '..\models\model.php';
            $mysqli=new  MysqliConnect;
            $res=$mysqli->login($_POST['username'],$_POST['password']);
            if($res == 1){
                $_SESSION['token']='true';
                header("Location: index.php");
            }else{
                echo "<p style='color: red;text-align:center;'>登录失败,请检测用户名或密码</p>";
            }
        }
    }
?>