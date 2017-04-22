<?php
    class MyClass
    {
        protected $name;
        protected $age;

        public function __construct($name,$age){
            $this->name=$name;
            $this->age=$age;
        }

        //在工厂模式下需要一个用来创建你需要的对象的类
        public static function createMyClass($name,$age){
            return new MyClass($name,$age);
        }

        public function getDate(){
            return "姓名：$this->name<br/>年龄：$this->age";
        }
    }

    $a=MyClass::createMyClass('小红','21');
    echo $a->getDate();