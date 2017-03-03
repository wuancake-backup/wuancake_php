<?php
	$arr['logo']='北京';
	$arr['hsp']=123;
					//这里的两个值可以由程序员自定义
	foreach($arr as $key=>$val){	//将数组每组的下标赋值给$key,将元素值赋给$val,遍历完数组后结束循环
		echo $key."=".$val."<br/>";
	}
?>

