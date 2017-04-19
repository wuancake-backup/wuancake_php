<?php
    class Myclass
    {

        public function foo(){
            echo "运行了foo方法<br/>";
        }
        public function __toString()
        {
            return '调用了__toString方法';       //必须返回一个字符串
        }
    }

    $new_class=new Myclass();
    $new_class->foo();

    echo $new_class;      //当一个类被当成字符串时，会调用这个类内的__toString方法