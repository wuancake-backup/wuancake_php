<?php
$conn=mysql_connect("localhost", "root", "root");
$result=mysql_query("Database", "SELECT * FROM `info`", $conn);
// 获取查询结果
$row=mysql_fetch_row($result);

echo '<font face="verdana">';
echo '<table border="1" cellpadding="1" cellspacing="2">';

// 显示字段名称
echo "</b><tr></b>";
for ($i=0; $i<mysql_num_fields($result); $i++)
 {
 echo '<td bgcolor="#000F00"><b>'.
 mysql_field_name($result, $i);
echo "</b></td></b>";
}
echo "</tr></b>";
 // 定位到第一条记录
 mysql_data_seek($result, 0);
 // 循环取出记录
 while ($row=mysql_fetch_row($result))
{
echo "<tr></b>";
 for ($i=0; $i<mysql_num_fields($result); $i++ )
{
echo '<td bgcolor="#00FF00">';
echo $row[$i];
 echo '</td>';
 }
echo "</tr></b>";
 }

echo "</table></b>";
 echo "</font>";
// 释放资源
mysql_free_result($result);
 // 关闭连接
mysql_close($conn); 