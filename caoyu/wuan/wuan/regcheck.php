<?php
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")
	
	 	$userName = $_POST["userName"];
		$userNickname = $_POST["userNickname"];
	 	$password = $_POST["userPassword"];
	 	$userEmail = $_POST["userEmail"];
		
		
			include('conn.php');
			$sql_insert = "insert into users (userName,userNickname,userPassword,userEmail) values('$userName','$userNickname','$password','$userEmail')";
				
				echo"注册成功";
				?>