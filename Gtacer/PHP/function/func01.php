<?php
	function jisuan($num1,$num2,$oper){
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
				echo 'ÄדµÄÊהÈכÓÐÎף';
				break;
		}
	return $res;
	}
?>