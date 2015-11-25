<html>
<body>
<?php
header("content-type:text/html;charset=utf-8");
//连接数据库	
if($a=mysql_connect('localhost','root','')){
	echo "连接成功";
}else{
	echo "连接失败";
}
//选择数据库
if(mysql_select_db('test')){
	echo "选择数据库成功";
}else{
	echo "选择数据库失败";
}
//插入数据
mysql_query("set names 'utf8'");
mysql_query("insert into id(username,password) 
value('$username','$password')");
$udi=mysql_insert_id();
echo $uid;
?>
</body>
</html>