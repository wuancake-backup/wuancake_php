<?php
/**
 * Copyright (c) 2016. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

header("content-type:text/html; charset=utf-8");
    function show_bug($msg){
        echo "<pre style='color:red'>";
        var_dump($msg);
        echo "</pre>";
    }

    echo __DIR__;
    echo "<br/>";
    echo dirname(__FILE__);
    echo "<br/>";
    echo dirname(dirname(__FILE__));
    echo "<br/>";
    echo dirname(dirname(dirname(__FILE__)));
     /*include 'includes/SqlHelper.class.php';
    $conn = new SqlHelper("kanjia");
    $sql="select * from wx_admin";
    $res=$conn->execute_dql_resfree($sql);
    show_bug($res);
    echo "sucess";*/

include 'includes/conf.php';

include 'includes/controller/defaultController.php';
//$default = new defaultController(APPID,SECRET,"123456789");

//show_bug($default->getSubscribe());

$subject = '<?php exit();?>{"jsaggpi_ticket":"","expire_time":0}';
preg_match_all("/{\"jsapi_ticket\":\"\",\"expire_time\":0}/",$subject,$arr);
if(count($arr) == 1){
    echo "hh";
    show_bug($arr);
}

show_bug($_SERVER);

echo sha1("w13");

echo get_include_path();

$arr = "SHaa9KIHhh99";
 echo strtoupper($arr);

$path = strtolower("sources/voices/A45");
if (!file_exists($path)){
    mkdir($path,0700);
}else{
    echo "文件存在";
}



