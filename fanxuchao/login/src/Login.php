<?php
	header("Content-Type: text/html; charset=utf8");
	 
//	echo "测试中文";
	$uname = $_POST["username"];
	$upwd =$_POST["password"];

	/*
		echo $uname;
	echo $upwd;
	$n=strlen($uname);
	$p=strlen($upwd);
	echo $n ;
	echo $p;
	*/
	if($uname==""||$upwd==""){
		echo "用户名密码不能为空";
	}else {
		$conn = mysqli_connect("localhost:3306","root","111111","test");
	//	mysqli_select_db($conn,"test");
		mysqli_set_charset($conn ,"set name utf8");
		$sql = "select * from tb_user where userName_ = '{$uname}' and password_ = '{$upwd}'";  
	//	echo $sql;
	$result = mysqli_query($conn ,$sql);
		if($result){
			 echo "登录成功";
		 }	else{
			 echo "用户名或密码错误";
		 }
	}
 
	 ?>
	 
	 
	 
	 
	 
	 
	