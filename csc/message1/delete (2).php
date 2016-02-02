<?php 
include 'conn.php'; 
$id = $_POST['id']; 
$query="delete from post_base where ID=".$id; 
$querya="delete from post_detail where ID=".$id;
mysql_query($query);mysql_query($querya);
?> 
<?php 
//页面跳转，实现方式为javascript 
$url = "list.php"; 
echo "<script language='javascript' type='text/javascript'>"; 
echo "window.location.href='$url'"; 
echo "</script>"; 
?>