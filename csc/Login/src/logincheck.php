<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "登录")
	{
		$user = $_POST["username"];
		$psw = $_POST["password"];
		if($user == "" || $psw == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
			include'conn.php';
			$sql = "select username,password from user where username = '$user' and password = '$psw'";
			$result = mysql_query($sql);
			$num = mysql_num_rows($result);
			if($num)
			{
				$row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
				echo "<script>alert('登录成功！');</script>";echo"<center>";echo $row[0];echo",欢迎回来！";
				echo"</center>";
			}
			else
			{
				echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

?>