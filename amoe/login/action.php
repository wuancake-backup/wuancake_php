<?php
	session_start();
	header('Content-type: text/html; charset=utf-8');
	if(isset($_POST['submit'])&&$_POST['submit']){
		$action=$_POST['submit'];
		$conn=new mysqli('localhost','root','root','amoe_login');
		if($conn->connect_error){
			die("连接数据库失败");
		}
		if($action=='登陆'){
			$username=inputCheck($_POST['username']);
			$password=inputCheck($_POST['password']);
			$result=$conn->query("select * from user where uname='{$username}'");
			if($result->num_rows>0){
				$row=$result->fetch_assoc();
				$password=do_hash($password,$row['salt']);
				if($row['upass']==$password){
					$_SESSION['id']=$row['id'];
					$_SESSION['uname']=$row['uname'];
					echo '<script>alert("登录成功");location="index.php";</script>'; 
				}
			}
		}else if($action=='注册'){
			$username=inputCheck($_POST['username']);
			$result=$conn->query("select uname from user where uname='{$username}'");
			if($result->num_rows>0){
				echo '<script type="text/javascript">alert("用户名已存在！");history.go(-1);</script>';
			}
			$password1=inputCheck($_POST['possword1']);
			$salt=getRandChar(16);
			$password1=do_hash($password1,$salt);
			$result=$conn->query("insert into user (uname,upass,salt) value('{$username}','{$password1}','{$salt}')");
			if(!$result){
				die("未知原因，注册失败");
			}
		}
		$conn->close();
	}
	if(isset($_GET['action'])&&$_GET['action']=='logout'){
		session_destroy();
		echo '<script type="text/javascript">history.go(-1);</script>';
	}
	function inputCheck($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function getRandChar($length) {
		$str = null;
		$strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
		$max = strlen($strPol) - 1;
		for ($i = 0; $i < $length; $i++) {
			$str .= $strPol[rand(0, $max)];
		}
		return $str;
	}
	function do_hash($str,$salt){
		return sha1($str.$salt);
	}
	