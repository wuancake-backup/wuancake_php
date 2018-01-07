<?php
    function __autoload($name){
        //$name为尝试调用的类名（MyClass,MyClass2）
        include_once $name.'.php';
    }

    //类名与文件名必须保持一直，否则无法正确自动加载
    $a = new MyClass();
    $b = new MyClass2();

    //注册自动加载队列
spl_autoload_register(function (){
    //
});