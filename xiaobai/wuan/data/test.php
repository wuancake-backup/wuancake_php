<?php
$conn=mysql_connect("localhost","root","root");
mysql_select_db("wuan");
$sql="select * from users";
$as=mysql_query($sql,$conn);
while($row=mysql_fetch_array($as,MYSQL_ASSOC)){
    print_r($row);
}

/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/17
 * Time: 13:28
 */