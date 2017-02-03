<?php
include_once("connect.php");
$token = stripslashes(trim($_GET['token']));
$email = stripslashes(trim($_GET['email']));
$sql = "select * from `t_user` where email='$email'";

$query = mysql_query($sql);
$row = mysql_fetch_array($query);
if($row){
	$mt = md5($row['id'].$row['username'].$row['password']);
	if($mt==$token){
		if(time()-$row['getpasstime']>24*60*60){
			$msg = '该链接已过期！';
		}else{
			//重置密码...
			$msg = '请重新设置密码，显示重置密码表单，<br/>这里只是演示，略过。';
		}
	}else{
		$msg =  '无效的链接<br/>'.$mt.'<br/>'.$token;
	}
}else{
	$msg =  '错误的链接！';	
}
echo $msg;
?>