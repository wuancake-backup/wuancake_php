<?php
error_reporting(0);
$mysql_servername = "localhost"; //涓绘満鍦板潃
$mysql_username = "root"; //鏁版嵁搴撶敤鎴峰悕
$mysql_password ="root"; //鏁版嵁搴撳瘑鐮�
$mysql_database ="test"; //鏁版嵁搴�
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
$username=$_POST["username"];
$password=$_POST["password"];
$password1=$_POST["password1"];
if ($username && $password){
if ($password == $password1){	
 $sql = "SELECT * FROM login WHERE username = '$username'";
 $res = mysql_query($sql);
 $rows=mysql_num_rows($res);
  if(!$rows){
   $sql1="insert into login values('$username','$password')";
   mysql_query($sql1);
   echo "<script language=javascript>alert('注册成功,即将转到登录页面');</script>";
   header("refresh:0;url=login.html");//璺宠浆椤甸潰锛屾敞鎰忚矾寰�
   exit;
 }
 echo "<script language=javascript>alert('用户名已被使用');history.back();</script>";
}else 
 echo "<script language=javascript>alert('两次密码输入不一致');history.back();</script>";
}
else 
echo "<script language=javascript>alert('用户名密码不能为空');history.back();</script>"; 

?>


