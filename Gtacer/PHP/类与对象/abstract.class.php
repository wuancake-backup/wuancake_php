<?php header('content-type:text/html;charset=utf-8');
    abstract class A{       //抽象类 是其他类的父类，本身并不需要实例化
        public $name;
        abstract public function cry();     //如果类中包含抽象方法，那么此类也必须是抽象类
        public function getname($iname){
            //抽象类里可以有实现了的方法
        }
    }
    class B extends A{
     //子类必须实现父类的抽象方法，或者子类也声明为抽象类
        public function cry(){

        }
    }
    abstract class C extends A{

    }
?>