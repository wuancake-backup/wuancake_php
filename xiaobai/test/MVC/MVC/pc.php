<?php
$currentdir=dirname(__FILE__);
include_once($currentdir.'/include.list.php');
foreach($paths as $path){
    include_once($currentdir.'/'.$path);
}

class PC{
    public static  $controller;
    public static  $method;
    public static  $config;
    private static function init_db(){
        DB::init('mysql',self::$config['dbconfig']);
    }
    private static function init_view(){
        VIEW::init('Smarty',self::$config['viewconfig']);
    }
    private  static function init_controller(){
        self::$controller=isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
    }
    private  static function init_method(){
        self::$method=isset($_GET['method'])?daddslashes($_GET['method']):'index';
    }
    public static function run($config){
        self::$config=$config;
        self::init_db();
        self::init_view();
        self::init_controller();
        self::init_method();
        C(self::$controller,self::$method);
    }

}
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/1
 * Time: 14:33
 */