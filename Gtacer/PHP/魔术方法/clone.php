<?php
    class MyClass
    {
    public $name;
    public $age;

    public function hello(){
    echo 'hello';
    }

    //当复制完成时，
    //如果定义了 __clone() 方法，则新创建的对象（复制生成的对象）中的 __clone() 方法会被调用，
    //可用于修改属性的值（如果有必要的话）。
    public function __clone(){
    echo 'hello';
    $this->name='小红';
    $this->age=80;
    }
    }

    $a=new MyClass;
    $a->name='Jone';
    $a->age=16;

    $b=clone $a;        //克隆完成后$b中会执行__clone方法

    echo $b->name;