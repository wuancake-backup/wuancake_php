<?php
    class MyClass
    {
        private static $instance;

        public static function getInstance(){
            if (self::$instance === null){
                self::$instance = new static();
            }
            return self::$instance;
        }

        protected function __construct(){
            //将构造函数声明为protected，防止使用操作符new在这个类外创建新的实例
        }

        private function __clone(){
            //把 clone 方法声明为 private，防止克隆单例
        }

        private function __wakeup(){
            //把反序列化方法声明为 private，防止反序列化单例
        }
    }

    class Children extends MyClass
    {
        //something
    }

    $a=MyClass::getInstance();
    var_dump($a===MyClass::getInstance());


    //此时会报错，无法通过父类的方法去访问父类的private属性
    $b=Children::getInstance();
    var_dump($b===MyClass::getInstance());
    var_dump($b === Children::getInstance());