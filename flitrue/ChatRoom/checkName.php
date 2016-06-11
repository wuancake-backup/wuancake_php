<?php

	header("Content-Type: text/html;charset=utf-8");
	//告诉浏览器不要缓存数据
	header("Cache-Control: no-cache");
	include 'db.class.php';

	//接收数据(这里要和请求方式对应是get或者是post)
	$username=$_POST['username'];

	$db=DB::getInstance();
	$conn=$db->connect();
	$sql="SELECT * from user WHERE username='{$username}'";

	$res=$conn->query($sql);

	if ($res->num_rows>0){
		echo "用户名{$username}已存在";//注意，这里数据是返回给请求的页面.
	}else{
		echo "用户名{$username}可以用";
	}
	$res=null;
	$conn->close();

