<?php
	setcookie("username",0,time()-60);
	setcookie("islogin",0,time()-60);
	header("location:login.php");
	exit();
?>