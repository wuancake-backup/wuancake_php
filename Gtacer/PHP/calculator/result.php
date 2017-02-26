<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$oper=$_REQUEST['oper'];

$s=0;
if($oper=='+'){
	$s=$num1+$num2;
	echo '结果为:'.$s;
}
else if($oper=='-'){
	$s=$num1-$num2;
	echo '结果为:'.$s;
}
else if($oper=="*"){
	$s=$num1*$num2;
	echo '结果为:'.$s;
}
else if($oper=='/'){
	$s=$num1/$num2;
	echo '结果为:'.$s;
}
/*
switch($oper){
	case "+":
		$s=$num1+$num2;
		break;
	case"-";
		$s=$num1-$num2;
		break;
	case"*";
		$s=$num1*$num2;
		break;
	case"/";
		$s=$num1/$num2;
		break;
	default;
		echo '错误。';
		break;
}
	echo '运算结果为：'.$s;
	*/
?>
<br/>
<a href="mycal.php">返回计算器</a>