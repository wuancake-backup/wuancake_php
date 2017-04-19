<?php
    function a($a){
        echo "$a";
    }

    class Test_1
    {
        public function test1($a,$b){
            echo $a.$b;
        }
    }

    call_user_func_array('a',array('123'));     //动态调用自定义函数

    $foo=new Test_1();
    call_user_func_array(array($foo,'test1'),array('abc','def'));       //动态调用类方法