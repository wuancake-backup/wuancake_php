<?php
header('Content-type:text/html;charset=utf-8');
include'conn.php';
$sql = "select * from xwzx order by id";
$result = mysql_query($sql);
?>