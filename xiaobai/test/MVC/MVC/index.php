<?php
    require_once('function.php');
    require_once('config.php');
    $view = ORG('Smarty/', 'Smarty', $viewconfig);


    $controllerAllow = array('test','index');
    $methodAllow = array('index','show');
    if(!empty($_GET['controller'])) {
    $controller = in_array($_GET['controller'], $controllerAllow) ? addslashes($_GET['controller']) : 'index';
}else{
        $_GET['controller']='index';
    }
    if(!empty($_GET['method'])) {
        $method = in_array($_GET['method'], $methodAllow) ? addslashes($_GET['method']) : 'show';
    }else{
        $_GET['method']='show';
    }
    $controller=$_GET['controller'];
    $method=$_GET['method'];
    C($controller,$method);











/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/26
 * Time: 22:22
 */