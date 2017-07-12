<?php
    //自定义错误函数
    function my_error3($errno,$errmes){
        $err_info="错误号是：".$errno."--".$errmes;
        //保存错误信息
        error_log($err_info."\r\n",3,"myerr.txt");
    }
    //指定E_USER_WARNING 错误级别的函数
    set_error_handler("my_error3",E_USER_WARNING);

    $age=700;
    if($age>120){
        //调用触发器,设置为E_USER_WARNING级别的警告       调用关系从下至上
        trigger_error("输入年龄过大",E_USER_WARNING);
    }
?>