<META http-equiv="content-type" content="text/html; charset=utf-8">
<?php error_reporting(0);

//页面跳转，实现方式为javascript 
if($_POST['submit']){
	include 'conn.php'; 
session_start();$username = $_SESSION['username'];
$id=$_POST[id];
$query="SELECT * FROM message WHERE m_id =".$id; 
$result=mysql_query($query); 
$rs=mysql_fetch_array($result);
    
	$sql="INSERT INTO reply(m_id,username,content,lasttime) VALUES ('$_POST[id]', '$username', '$_POST[content]', now())"; 
mysql_query($sql); 

$url = "list.php"; 
echo "<script language='javascript' type='text/javascript'>"; 
echo "window.location.href='$url'"; 
echo "</script>"; }

?> 