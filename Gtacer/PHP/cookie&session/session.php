<?php
    //初始化session，在使用session前都必须进行初始化
    session_start();

    //保存数据
    $_SESSION['name']='gtacer';
    $_SESSION['age']=21;
    $_SESSION['isboy']=true;

    //可以保存数组类型的数据
    $array=array('北京','天津','上海');
    $_SESSION['array']=$array;

    //可以保存对象类型的数据
    class dog{
    public $name='a';
    public $age=5;
    public $asd='adsa';
    }
    $obj=new dog;
    $_SESSION['obj']=$obj;

    //输出session中的信息
    echo $_SESSION['name']."<br/>".$_SESSION['age']."<br/>".$_SESSION['isboy']."<br/>";

    foreach($_SESSION['array'] as $value){
    echo $value."<br/>";
    }

    echo $_SESSION['obj']->name;


    //删除session数据
    //删除某一个key=>val
    session_start();
    unset($_SESSION['name']);

    //删除所有的session信息
    session_destroy();      //删除跟当前浏览器关联的session文件

