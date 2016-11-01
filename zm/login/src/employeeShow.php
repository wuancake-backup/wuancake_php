<?php
require_once("SqlTool.class.php");
$sqlTool=new SqlTool("test");

if(!isset($_COOKIE["islogin"])){
	echo "您还未登录，请先登录，系统将于3秒后自动跳转到登录页面。<br/>";
	echo "如3秒后没有自动跳转，请点击<a href='login.php'>重新登录</a>";
	header("refresh:3;url=login.php");
	exit();
}

$username=$_COOKIE["username"];
echo "<center>";
echo "<h1>用户信息页面</h1>";
echo "<a href='safe.php' >安全退出</a>";
echo "<hr/>";
$sql="select * from employee where emp_username='$username'";
$result=$sqlTool->dql($sql);
	if(mysql_affected_rows()>0){
		echo "<table border='1'>";
			echo "<tr>";
				echo "<td>用户名ID</td>";
				echo "<td>账号</td>";
				echo "<td>密码</td>";
			echo "</tr>";
		while($arr=mysql_fetch_assoc($result)){
			echo "<tr>";
			foreach($arr as $key=>$value){
				echo "<td>";
				echo $value;
				echo "</td>";
			}
			
			echo "</tr>";
		}
		echo "</table>";
		echo "</center>";
		mysql_free_result($result);			
	}else{
		die(" 对不起，没找到相关记录。");
	}
	
$sqlTool->close();
?>