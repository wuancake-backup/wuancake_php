<?php
    //1,获取连接        服务器地址，用户名，密码
    $conn=mysql_connect("127.0.0.1","root","root");     //连接符
    if(!$conn){
        die("连接失败".mysql_error());
    }
    //2，获取数据库
    mysql_select_db("test");    //连接test数据库
    //3，设置操作编码
	mysql_query(set names utf-8);		//保证php按utf8码操作
    //4，发送指令sql
    $sql="select * from user1";             //发送一条MySQL的语句
    $res=mysql_query($sql,$conn);           //取出一个结果集（一张表）

    //5，接受返回结果，并处理
    while($row=mysql_fetch_row($res)){
        echo "<br/>$row[0]--$row[1]--$row[2]--$row[3]--$row[4]";
    }

    /*foreach($row as $key =>$val){
        echo "$val";
    }*/
    //6，释放资源，关闭连接
    mysql_free_result($res);    //释放资源
    mysql_close($conn);         //关闭与数据库之间的连接
?>