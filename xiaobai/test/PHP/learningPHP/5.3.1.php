<?php
$var='';
if(empty($var)){
    echo '$var is either 0 or not set at all';
}

if(!isset($var)){
    echo '$var is not set at all';
}

unset($var);                    //销毁变量
if(isset($var)){
    print "This var is set set so I will print";
}
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/12
 * Time: 22:04
 */