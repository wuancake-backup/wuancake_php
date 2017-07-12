<?php
    //类
    class cat{
        public $name;
        public $age;
        public $color;
}
    //对象
    $cat1=new cat();
    $cat1->name="小白";
    $cat1->age=4;
    $cat1->color="白色";

    $cat2=new cat();
    $cat2->name="小花";
    $cat2->age=45;
    $cat2->color="花色";

    //如果我们找到一只猫，那么该变量所有相关的属性都统统找到
    if($cat1->name="小白")
        echo $cat1->name.$cat1->age.$cat1->color;
?>