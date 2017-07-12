<?php
    class MyClass
    {
        public function __invoke($a)
        {
            echo $a.'调用了__invoke方法';
        }
    }

    $obj=new MyClass();

    $obj(23);       //当一个类被当成函数使用时，会调用这个类内的__invoke方法