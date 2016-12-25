<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "注册")
	{
		$name = $_POST["s_name"];
		$pass = $_POST["s_pass"];
		$pass_confirm = $_POST["confirm"];
		if($name == "" || $pass == "" || $pass_confirm == "")
		{
			echo "<script>alert('请完整填写信息！'); history.go(-1);</script>";
		}
		else
		{
			if($pass == $pass_confirm)
			{
				mysql_connect("localhost","root","123456");	//连接数据库
				mysql_select_db("test");	//选择数据库
				mysql_query("set names 'utf8'");	//设定字符集
				$sql = "select s_name from student where s_name = '$_POST[s_name]'";	//SQL语句
				$result = mysql_query($sql);	//执行SQL语句
				$num = mysql_num_rows($result);	//统计执行结果影响的行数
				if($num)	//如果已经存在该用户
				{
					echo "<script>alert('用户名已存在!'); history.go(-1);</script>";
				}
				else	//不存在当前注册用户名称
				{
					$sql_insert = "insert into student (s_name,s_pass) values('$_POST[s_name]','$_POST[s_pass]')";
					$res_insert = mysql_query($sql_insert);
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
?>