<?php
header('Content-type:text/html;charset=utf-8');
if(@$_GET['id'] == ''){
	echo "<script>alert('非法访问！'); history.go(-1);</script>";
}else{
	$id = $_GET['id'];
	include '../php/conn.php';
	$sql = mysql_query("DELETE FROM zxly WHERE id = $id");
	if($sql) {
		echo "删除成功！";
	}else{
		echo "删除失败！";
	}	
	$url = "VisbookQuery.php"; 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url'"; 
	echo "</script>"; 
}
?>