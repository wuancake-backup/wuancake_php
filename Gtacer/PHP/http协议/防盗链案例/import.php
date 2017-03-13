<?php header('content-type:text/html;charset=utf-8');
    //获取REFERER
    if(isset($_SERVER['HTTP_REFERER'])){
        //判断$_SERVER['HTTP_REFERER']是不是http://localhost/http (是否是从此网站过来的)
        if(strpos($_SERVER['HTTP_REFERER'],"http://localhost/http")==0){
            echo "查看到了信息";
        }else {
            header("Location:warning.php");
        }
    }else{
        header("Location:warning.php");
    }
    ?>