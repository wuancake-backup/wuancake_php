<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$oper=$_REQUEST['oper'];

$s=0;
if($oper=='+'){
	$s=$num1+$num2;
	echo '���Ϊ:'.$s;
}
else if($oper=='-'){
	$s=$num1-$num2;
	echo '���Ϊ:'.$s;
}
else if($oper=="*"){
	$s=$num1*$num2;
	echo '���Ϊ:'.$s;
}
else if($oper=='/'){
	$s=$num1/$num2;
	echo '���Ϊ:'.$s;
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
		echo '����';
		break;
}
	echo '������Ϊ��'.$s;
	*/
?>
<br/>
<a href="mycal.php">���ؼ�����</a>