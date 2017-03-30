<?php
    //创建mysqli对象
    $mysqli=new mysqli('localhost','root','root','test');
    //验证
    if($mysqli->connect_error)
        die("连接失败".$mysqli->connect_error);
    else
        echo "连接成功";
    //操作数据库
    $sql='SELECT * FROM test';
    $res=$mysqli->query($sql);
    while($row=$res->fetch_row()){
        foreach($row as $key=>$val){
            echo $key."--".$val;
        }
        echo "<br/>";
    }
    //关闭资源
    $res->free();   //释放内存
    $mysqli->close();   //关闭连接