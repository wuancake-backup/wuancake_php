<?php
    require_once('function.php');
    $controllerAllow = array('test','index');
    $methodAllow = array('test','index','show');
    $controller= in_array ($_GET['controller'],$controllerAllow)?addslashes($_GET['controller']):'index';
    $method= in_array ($_GET['method'],$methodAllow)?addslashes($_GET['method']):'index';

    C($controller,$method);











/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/26
 * Time: 22:22
 */