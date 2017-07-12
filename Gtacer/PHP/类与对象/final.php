<?php
    final class A{
        public $a;      //final不能修饰变量
        //A类无法被继承
    }
    class B extends A{
        //出错，因为A类被final修饰，不能被继承
    }

    class C{
        final public function D(){

        }
    }

    class E extends C{
        public function D(){
            //出错，无法覆盖父类的final方法
        }
    }
?>