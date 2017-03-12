<?php
    class A{
        const PI=3.14;
        public function AQ(){
            return self::PI;        //可以使用self访问常量
        }
    }
    interface B{
        const QW=1256;
    }
    echo A::PI."<br/>";
    echo B::QW."<br/>";
?>