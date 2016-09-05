<?php
header('Content-type:text/html;charset=utf-8');
if(@$_POST['id'] == ''){
	echo "<script>alert('非法访问！'); history.go(-1);</script>";
}else{
	$sql = "UPDATE `cpzs` SET `name` = '".$_POST['name']."', `briIntro` = '".$_POST['briIntro']."', `image` = '".$_POST['image']."' WHERE id = ".$_POST['id'];
	//var_dump($sql);
	include'../php/conn.php';
	if(mysql_query($sql)){
		echo "新增成功";
	}else{
		echo "新增失败";
	}
		$url = "productQuery.php"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url'"; 
		echo "</script>"; 
}
?>