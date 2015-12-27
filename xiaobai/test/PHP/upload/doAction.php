<?php

print_r($_FILES);
$filename=$_FILES['myFile']['name'];
$type=$_FILES['myFile']['type'];
$tmp_name=$_FILES['myFile']['tmp_name'];
$size=$_FILES['myFile']['size'];
$error=$_FILES['myFile']['error'];

//move_uploaded_file($tmp_name,"file/".$filename);

copy($tmp_name,"file/".$filename);


/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/23
 * Time: 21:18
 */