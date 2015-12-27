<?php
	header("Content-Type: text/html; charset=utf8");
	 
	
	$uname = $_POST["username"];
	$upwd =$_POST["password"];
	$upwd2 =$_POST["password2"];


	echo $uname;
	echo '<br />';
	echo $upwd;
		/*
	$n=strlen($uname);
	$p=strlen($upwd);
	echo $n ;
	echo $p;
	*/
	if($uname==""||$upwd==""){
		echo "用户名密码不能为空";
	}else if($upwd != $upwd2){
		echo "两次输入的密码不一致";
	}else {
		$conn = mysqli_connect("localhost:3306","root","111111","test");
	//	mysqli_select_db($conn,"test");
		mysqli_set_charset($conn ,"set name utf8");
		$sql = "select * from tb_user where userName_ = '{$uname}' and password_ = '{$upwd}'";  

		$result = mysqli_query($conn ,$sql);
		$num = mysqli_num_rows($result);
		 if($num){
			 echo "该用户已存在";
		 }else{
			 $sql2 = "insert into tb_user (userName_,password_) values ('{$uname}','{$upwd}')";
			// echo $sql2;
			 $result2 = mysqli_query($conn,$sql2);  
			 if($result2){
				 echo "注册成功";
			 }
		 }
	
		
	}
 
?>
	 
	 
	 
	 
	 