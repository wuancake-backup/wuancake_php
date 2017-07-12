<?php

    class Test{
        public $a;

        //当调用 var_export() 导出类时，此静态 方法会被调用。
        static function __set_state($array) {   //必须是静态方法,参数是一个数组.数组内储存了该对象的 属性=>值
            $tmp = new Test();
            $tmp->a = 'abc';    //直接赋值
            return $tmp;    //必须返回一个对象，可以是其他类的对象
        }

    }
    $test = new Test();

    $c=var_export($test,true);      //字符串内容为:Test::__set_state(array( 'a' => NULL, ))

    eval('$b = '.$c.';');
    var_dump($b);
