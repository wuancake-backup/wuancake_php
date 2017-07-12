<?php
    header('content-type:text/html;charset=utf-8');
    require_once 'fileDown01.php';
    $file_name=$_REQUEST['filenname'];
    $file_sub_dir="/file/picture/";
    down($file_name,$file_sub_dir);
?>