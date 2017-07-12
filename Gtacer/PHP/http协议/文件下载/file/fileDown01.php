<?php
    header('content-type:text/html;charset=utf-8');
    function down($file_name,$file_sub_dir){
        $file_name=iconv("utf-8","gb2312",$file_name);
        $file_path=$_SERVER['DOCUMENT_ROOT'].$file_sub_dir.$file_name;
        //echo "<br/>".$file_name."<br/>".$file_path;
        if(!file_exists($file_path)){
            echo "文件不存在";
            return;
        }
        $fp=fopen($file_path,"r");
        $file_size=filesize($file_path);
        header("content-type:application/octet-stream");                                                                    //以二进制方式返回（返回文件）
        header("Accept-Ranges:bytes");                                                                                      //按照字节大小返回
        header("Accept-Length:$file_size");                                                                                 //返回文件的大小
        header("Content-Disposition:attachment;filename=".$file_name);                                                      //下载时弹出框对应的文件名
        $buffer=1024;
        while(!feof($fp)){
            $file_date=fread($fp,$buffer);
            echo $file_date;
        }fclose($fp);
    }