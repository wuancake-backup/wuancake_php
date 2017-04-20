<?php
    class MyClass
    {
    public $name='qwe';
    public function __construct(){
    echo "这是构造方法<br/>";
    }

    public function __destruct(){
    echo "这是析构方法<br/>";
    }
    }

    $a=new MyClass;
    echo $a->name;