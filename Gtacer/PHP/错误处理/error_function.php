<?php
    function my_error($errno,$errmes){
        echo "错误信息是：$errmes";
        exit();
    }
    //改写错误处理器，调用my_error函数，在发生E_WARNING级别的错误时调用此函数
    set_error_handler("my_error",E_WARNING);
?>