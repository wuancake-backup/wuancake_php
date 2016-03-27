<?php 
 
	//连接数据库
	$conn = mysql_connect("localhost" ,"root","root");
	if(!$conn){
		die("can not connect to mysql ,the fault is:". mysql_error());
	} 

	$user = $_POST['user'];
	$pwd  = $_POST['password1'] ;
	if($user == ""|$pwd == "")
		  {die("用户名或密码不能为空");}
	//选择数据库
	 mysql_select_db("test",$conn);
	 $ist = mysql_query("INSERT INTO user (username ,password) VALUES ('$user','$pwd')");
	 if(!$ist){
	 	die("注册失败");
	 } 
	 mysql_close($conn);
	 //注册成功后弹出界面
	 echo '<script language = "javascript" >';
	 //注意alert后面的分号，若没有则不会弹出提示
	 echo 'alert("注册成功");';
	 echo "location.href = 'login.html'";
	 echo '</script>';
 




















	