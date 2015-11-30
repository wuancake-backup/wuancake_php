<?php
    session_start();
    header("Content-type: text/html; charset=utf-8");
    $conn = mysql_connect('localhost','root','root');
    if (!$conn){
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('youyuan',$conn);
    if (!$conn){
        die('Could not connect: ' . mysql_error());
    }
    mysql_query('set names utf8');

    if(empty($_POST[admin_name])){

		echo "<script>alert('请输入管理员帐号!');
        location='admin.php';</script>";
    }
    else if(empty($_POST[password])){
    
        echo "<script>alert('请输入管理员密码!');
        location='admin.php';</script>";
    }
	else{
        
        $sql = "select * from youyuan_admin where name = '".$_POST['admin_name']."' and password = '".$_POST['password']."'";
		$re = mysql_query($sql);
		$num = mysql_affected_rows();
		$arr = mysql_fetch_assoc($re);
		if($num== 1){
			$_SESSION['isLogin'] = 1;
			echo "<script>alert('登录成功!');location='checked.php';</script>";
        } 
        else{

            echo "<script>alert('登录失败!');
            location='admin.php';</script>";                }
        }
?>

