<?php
    //例1
    function foo1(){
        $num = 1;
        $func = function() use (&$num) {
            echo $num;
            $num++;
        };
        return $func;
    }
    $test = foo1();
    $test();   //1
    $test();   //2
    $test();   //3

    //例2
    function foo2($x){
        $num = 0;
        return function ($y)use(&$num,$x){
            echo $x+$y+(++$num);
        };
    }

    $a = foo2(1);
    $a(2);     //4
    $a(2);     //5
    $a(2);     //6
    /******* x的值和num的值不会被垃圾回收，且都可以通过匿名函数访问 ********/