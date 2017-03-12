<?php
    try{
        adduser("sss");
        updateuser("xxx");
    }
    //catch捕获  Exception是异常类（是PHP中定义好的一个类)
    catch(Exception $e){
        echo "失败信息=".$e->getMessage();
    }

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
?>