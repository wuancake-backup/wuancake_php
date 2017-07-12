<?php
	//使用count函数统计数组条数，count($arr);
	count($arr);	//返回数组长度

	//使用is_array函数判断数组，is_array($arr);
	count($arr);	//是数组返回1，否则返回空值

	//print_r()和var_dump()可以显示数组的关键字和值
	print_r($arr);
	var_dump($arr);	//显示关键字，值和数据类型

	//拆分字符串:explode explode("按照什么拆分",字符串);
	$str="北京 天津 上海";
	$str="北京&天津&上海";
	$arr=explode(" ",$str);		//arr[0]=北京 arr[1]=天津 arr[2]=上海
	$arr=explode("&",$str2);	//arr[0]=北京 arr[1]=天津 arr[2]=上海
?>