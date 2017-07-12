<?php
    namespace blog\a;       //命名空间
    use blog\a as another;  //为命名空间使用别名

    class myclass{
        public function a(){
            echo "110<br/>";
        }
    }

    $c=new \blog\a\myclass;     //通过命名空间调用类
    $c->a();

    $a=new another\myclass;     //通过命名空间的别名调用类
    $a->a();

    $b=new namespace\myclass;   //通过namespace调用类
    $b->a();