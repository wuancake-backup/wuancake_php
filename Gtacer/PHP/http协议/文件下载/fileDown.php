<?php
    header('content-type:text/html;charset=utf-8');
    function down($file_name,$file_sub_dir){       //文件名，下载文件的子路径
        $file_name=iconv("utf-8","gb2312",$file_name);      //如果文件是中文，则需要使用此函数进行转码
        $file_path=$_SERVER['DOCUMENT_ROOT'].$file_sub_dir.$file_name;  //绝对路径（文件在根目录）
        if(!file_exists($file_path)){
            echo "文件不存在";
            return;
        }
        $fp=fopen($file_path,"r");              //文件的指针
        $file_size=filesize($file_path);        //获取下载文件的大小

        header("content-type:application/octet-stream");    //以二进制方式返回（返回文件）
        header("Accept-Ranges:bytes");                      //按照字节大小返回
        header("Accept-Length:$file_size");                 //返回文件的大小
        header("Content-Disposition:attachment;filename=".$file_name);//下载时弹出框对应的文件名

        //向客户端回送数据
        $buffer=1024;       //字节为单位
        while(!feof($fp)) {     //这句话用于判断文件是否结束
            $file_data = fread($fp, $buffer);
            echo $file_data;        //把部分数据回送给浏览器
        }
        fclose($fp);
    }        //关闭文件
    down("tim.jpg","/DOWN/");
?>