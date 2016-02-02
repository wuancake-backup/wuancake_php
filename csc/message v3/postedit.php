<META http-equiv="content-type" content="text/html; charset=utf-8"><title>编辑留言</title>
<?php error_reporting(0);
include 'conn.php'; session_start();
//echo $_POST[id],$_SESSION[userid],$_POST[content];
$query="UPDATE `post_detail` SET `text`='$_POST[content]' WHERE ID='$_POST[id]' AND floor='1'";
$querya="UPDATE `post_base` SET `title`='$_POST[title]' WHERE ID='$_POST[id]'";								
mysql_query($query);mysql_query($querya);

?> 
<?php 
//页面跳转，实现方式为javascript 
$url = "list.php"; 
echo "<script language='javascript' type='text/javascript'>"; 
echo "window.location.href='$url'"; 
echo "</script>"; 
?>