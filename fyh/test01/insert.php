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
//创建表
//$sql ="create table namepassword
//(
//name varchar(16),
//password varchar(16),
//)";
//if($sql){
//	echo "创建表成功";
//}else{
//	echo "创建表失败";
//}
//插入数据
mysql_query('set names utf8');
if(mysql_query("insert into namepassword(name) 
	values('$_POST[name]'")){
	echo "插入成功";
}else{
	echo "插入失败";
}
?>
</body>
</html>