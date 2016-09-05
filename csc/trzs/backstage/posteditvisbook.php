<?php
header('Content-type:text/html;charset=utf-8');
if(@$_POST['id'] == ''){
	echo "<script>alert('非法访问！'); history.go(-1);</script>";
}else{
	$sql = "UPDATE `zxly` SET `title` = '".$_POST['title']."', `mycall` = '".$_POST['mycall']."', `address` = '".$_POST['address']."', `saytext` = '".$_POST['saytext']."' WHERE id = ".$_POST['id'];
	//var_dump($sql);
	include'../php/conn.php';
	if(mysql_query($sql)){
		echo "修改成功";
		$url = "VisbookQuery.php"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url'"; 
		echo "</script>"; 
	}else{
		echo "修改失败";
	}
	
}
?>