<?php
$fh=fopen("./msg.txt","a");//打开文件
$str=$_POST['title'].",".$_POST['content'] ."\n";
fwrite($fh,$str);
fclose($fh);
echo "OK";


/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/11
 * Time: 15:12
 */