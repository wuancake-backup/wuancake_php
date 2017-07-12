<?php
    header('Content-Type:text/html;charset=utf-8');
    //引入文件
    require_once 'person.class.php';
    //创建对象
    $p=new person();
    //调用方法
    $p->name="xiaoss";
    $p->speak();
?>