<?php header('Content-Type:text/html;charset=utf-8');
    class Cat{
        public function arithmetic($num1,$num2,$sig){
            switch ($sig){
                case '+':
                    $result=$num1+$num2;
                    break;
                case '-':
                    $result=$num1-$num2;
                    break;
                case '/':
                    $result=$num1/$num2;
                    break;
                case '*':
                    $result=$num1*$num2;
                    break;
            }
            return $result;
        }
        public function area($radius){
            $area=3.14*$radius*$radius;
            return $area;
        }
        public function rec_area($recnum1,$recnum2){
            $area=$recnum1*$recnum2;
            return $area;
        }
    }
?>