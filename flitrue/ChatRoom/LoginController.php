<?php
	header("Content-Type: text/html;charset=UTF-8");
	header("Cache-Control: no-cache");
	include 'db.class.php';

	$username=$_POST['username'];
	$passwd=$_POST['passwd'];
	$username=trim($username);
	$passwd=trim($passwd);


	$db=DB::getInstance();
	$conn=$db->connect();

	$sql="select * from user where username=? and password=?";

	$stmt=$conn->prepare($sql);
	$stmt->bind_param("ss",$username,$passwd);
	$stmt->execute();
	$stmt->store_result();

	if($stmt->num_rows>0){
		//跳转到好友列表页面
		session_start();
		$_SESSION['username']=$username;
		header("Location:friendList.php");
	}else{
		header("Location:login.php");
	}
	$stmt->free_result();
	$conn->close();