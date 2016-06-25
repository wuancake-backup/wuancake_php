<?php
/**
 * Created by PhpStorm.
 * User: liangwenyuan
 * Date: 2016/6/25 0025
 * Time: 22:58
 */
include("conn.php");

if(!empty($_GET["del"]))
{
    $d = $_GET["del"];
    $sql="delete from table_1 where id = '$d'";
    mysqli_query($conn,$sql);
    echo "删除成功！";
}

