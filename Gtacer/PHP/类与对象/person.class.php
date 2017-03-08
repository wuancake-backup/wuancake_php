<?php
    class person{       //定义类
        public $name;
        public $age;
    }
    $a=new person();       //定义一个新的对象
    $a->name="小明";
    $a->age=20;

    $b=$a;      //$b将指向$a所指向的堆区地址

    echo $a->name."<br/>";
    echo $b->name."<br/>";

    function test($p){      //对象按地址传递到函数中
        $p->name="小红";
    }
    test($a);
    echo $a->name;
?>