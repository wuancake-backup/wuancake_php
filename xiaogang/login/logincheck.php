<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")
	{
		$name = $_POST["s_name"];
		$pass = $_POST["s_pass"];
		if($name == "" || $pass == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
			mysql_connect("localhost","root","123456");
			mysql_select_db("test");
			mysql_query("set names 'utf8'");
			$sql = "select s_name,s_pass from student where s_name = '$_POST[s_name]' and s_pass = '$_POST[s_pass]'";
			$result = mysql_query($sql);
			$num = mysql_num_rows($result);
			if($num)
			{
				$row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
				echo $row[0];
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