<?php
    //连接数据库
    $mysqli=new mysqli('localhost','root','root','test');
    if($mysqli->connect_error)
        die('连接数据库失败!'.$mysqli->connect_error);

    $sqls="INSERT INTO test(name,password) VALUE ('xi22aolv',md5(123456));" ;
    $sqls.="INSERT INTO test(name,password) VALUE ('xiao123',md5(123456));" ;
    $sqls.="INSERT INTO test(name,password) VALUE ('xiao333',md5(123456));" ;
    $res=$mysqli->multi_query($sqls) or die('添加失败'.$mysqli->error);
    echo '添加成功';
    $mysqli->close();