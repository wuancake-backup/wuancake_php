<?php
header('Content-type:text/html;charset=utf-8');
if(@$_POST['id'] == ''){
	echo "<script>alert('非法访问！'); history.go(-1);</script>";
}else{
	$sql = "UPDATE `xwzx` SET `title` = '".$_POST['title']."', `content` = '".$_POST['content']."', `image` = '".$_POST['image']."' WHERE id = ".$_POST['id'];
	//var_dump($sql);
	include'../php/conn.php';
	if(mysql_query($sql)){
		echo "修改成功";
		$url = "newsQuery.php"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url'"; 
		echo "</script>"; 
	}else{
		echo "修改失败";
	}
	
}
?>