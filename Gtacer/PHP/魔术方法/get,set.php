<?php
    class MyClass
    {
        //在给不可访问的属性赋值时(属性不存在或者为private)，__set()方法会被调用，其中的两个参数分别储存试图更改的属性名和要赋的值
        public function __set($name, $value){
            echo "试图将变量{$name}赋值为{$value}";
        }
        //读取不可访问属性的值时(属性不存在或者为private)，__get() 会被调用，其中的一个参数为试图读取的属性名。
        public function __get($name){
            echo "试图读取变量{$name}的值";
        }
    }

    $a=new MyClass;
    echo $a->x."<br/>";
    $a->y=69;