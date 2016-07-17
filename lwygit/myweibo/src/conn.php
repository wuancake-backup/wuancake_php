<?php
/**
 * Created by PhpStorm.
 * User: liangwenyuan
 * Date: 2016/6/25 0025
 * Time: 13:47
 */


$conn=@mysqli_connect("localhost:3306","root","123321")or die("数据库连接错误！");

@mysqli_select_db($conn,"myweibo")or die("db connect error!");

mysqli_query($conn,"set names 'utf-8'");

?>