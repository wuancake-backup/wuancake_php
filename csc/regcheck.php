<?php
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")
	{
		$user = $_POST["username"];
		$psw = $_POST["password"];
		$psw_confirm = $_POST["confirm"];
		if($user == "" || $psw == "" || $psw_confirm == "")
		{
			echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
		}
		else
		{
			if($psw == $psw_confirm)
			{
				mysql_connect("localhost","root","root");	//连接数据库
				mysql_select_db("vt");	//选择数据库
				mysql_query("set names 'gdk'");	//设定字符集
				$sql = "select username from user where username = '$_POST[username]'";	//SQL语句
				$result = mysql_query($sql);	//执行SQL语句
				$num = mysql_num_rows($result);	//统计执行结果影响的行数
				if($num)	//如果已经存在该用户
				{
					echo "<script>alert('用户名已存在'); history.go(-1);</script>";
				}
				else	//不存在当前注册用户名称
				{
					//$sql_insert = "insert into user (username,password,phone,address) values('$_POST[username]','$_POST[password]','','')";
					
					
					$sql1="INSERT INTO users (user, password)VALUES('$_POST[username]','$_POST[password]')";
					
					$res_insert = mysql_query($sql1);
					//$num_insert = mysql_num_rows($res_insert);
					if($res_insert)
					{
						echo "<script>alert('注册成功！'); history.go(-1);</script>";
					}
					else
					{
						echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
					}
				}
			}
			else
			{
				echo "<script>alert('密码不一致！'); history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}
?>