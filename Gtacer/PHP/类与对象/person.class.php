<?php
    class person{
        public $name;
        public $age;
    }
    $a=new person();
    $a->name="小明";
    $a->age=20;

    $b=$a;      //$b将指向$a所指向的堆区地址

    echo $a->name."<br/>";
    echo $b->name."<br/>";
?>