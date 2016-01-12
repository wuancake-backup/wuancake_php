<?php
class indexController{
    function show(){
        global $view;
        //$testModel = new testModel();
//        $testModel = M('test');
//        $data = $testModel->get();
//        $testView = V('test');
//        $testView -> display($data);
//			$view ->assign('str', 'sdf');
			$view ->display('login.html');
    }
}
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/31
 * Time: 22:38
 */