<?php
    //定义顶层异常处理器
    function my_exception($e){
        echo "我是顶级异常处理器".$e->getMessage;
    }
    //修改默认的顶层异常处理函数
    set_exception_handler("my_exception");

    function adduser($username){
        if ($username == "xiaoming") {
            //成功
        } else {
            //失败
            throw new Exception("添加失败");
        }
    }
    function updateuser($username){
        if($username=="xiaohong"){

        }else{
            throw new Exception("修改失败");
        }

    }

    try{
        adduser("xiaoming");
        updateuser("xxx");
    }
    //catch捕获  Exception是异常类（是PHP中定义好的一个类)
    catch(Exception $e){
        echo "失败信息=".$e->getMessage().$e->getLine();
        throw $e;       //将问题抛出，抛给顶层异常处理器
    }
?>