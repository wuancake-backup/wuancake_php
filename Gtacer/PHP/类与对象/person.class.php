<?php
    class person{
        public $name;
        public $age;
    }
    $a=new person();
    $a->name="小明";
    $a->age=20;

    $b=$a;

    echo $a->name."<br/>";
    echo $b->name."<br/>";
?>