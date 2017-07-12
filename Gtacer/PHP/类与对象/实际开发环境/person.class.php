<?php
    header('Content-Type:text/html;charset=utf-8');
    //单独定义一个类
    class person{
        public $name;
        public $age;

        public function speak(){
            echo "我是一个函数<br/>";
        }

        public function jisuan($n){
            $sum=0;
            for($i=1;$i<=$n;$i++){
                $sum+=$i;
            }
            return $sum;
        }
    }
?>