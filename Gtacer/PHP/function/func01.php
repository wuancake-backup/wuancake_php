<?php
	function jisuan($num1,$num2,$oper){   //函数名不区分大小写
		$res=0;
		switch($oper){
			case "+":
				$res=$num1+$num2;
				break;
			case "-":
				$res=$num1-$num2;
				break;
			case "*":
				$res=$num1*$num2;
				break;
			case "/":
				$res=$num1/$num2;
				break;
			default:
				echo '你的输入有误';
				break;
		}
	return $res;
	}
?>