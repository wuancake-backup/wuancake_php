<?php
header('Content-type:text/html;charset=utf-8');
include'conn.php';
if($_POST != "") {
	$title = $_POST['title'];
	$mycall = $_POST['mycall'];
	$address = $_POST['address'];
	$saytext = $_POST['saytext'];
	
	//$sql_insert = "insert into user (username,password) values('$user','$psw')";
				//if(mysql_query($sql_insert))
	
	$result = mysql_query("INSERT INTO zxly (title, saytext, mycall, address) 
	VALUES ('$title', '$saytext', '$mycall', '$address')");
	if($result){
		echo "<script>alert('留言成功！'); history.go(-1);</script>";
	}else{
		echo "<script>alert('留言失败！'); history.go(-1);</script>";
	}
	
}else{
	echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}


?>