<?php
    class OperService{
        public function GetResult($num1,$num2,$oper){
            switch($oper){
                case "+":
                    return $num1+$num2;
                    break;
                case "-":
                    return $num1-$num2;
                    break;
                case "*":
                    return $num1*$num2;
                    break;
                case "/":
                    return $num1/$num2;
                    break;
                default:
                    echo "发生错误";
            }
        }
    }

?>