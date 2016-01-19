<?php
class VIEW{
    public static $view;
    public static function init($viewtype,$config){
        self::$view=new $viewtype;
        foreach($config as $key=>$value){
            self::$view->$key=$value;
        }
    }


    public static function assign($data){
        foreach($data as $key=>$value){
            self::$view->assign($key,$value);
        }
    }


    public static function display($template){
            self::$view->display($template);
    }
}
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/1
 * Time: 14:45
 */