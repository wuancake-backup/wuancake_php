<?php
    //连接数据库
    $mysqli=new mysqli('localhost','root','root','test');
    if($mysqli->connect_error)
        die('连接数据库失败!'.$mysqli->connect_error);

    //执行多条DML语句
//    $sqls="INSERT INTO test(name,password) VALUE ('xi22aolv',md5(123456));" ;
//    $sqls.="INSERT INTO test(name,password) VALUE ('xiao123',md5(123456));" ;
//    $sqls.="INSERT INTO test(name,password) VALUE ('xiao333',md5(123456));" ;
//    $res=$mysqli->multi_query($sqls) or die('添加失败'.$mysqli->error);
//    echo '添加成功';

    //执行多条DQL语句
    $sqls="SELECT id FROM test;";
    $sqls.="SELECT name FROM test;";
    $sqls.="SELECT password FROM test;";
    $res=$mysqli->multi_query($sqls) or die('查询失败'.$mysqli->error);
    do{
        $result=$mysqli->store_result();
        while($row=$result->fetch_row()){
            foreach($row as $key=>$val) {
                echo "--------$val<br/>";
            }
        }
        $result->free();
        if(!$mysqli->more_resultes())
            break;
        echo "**********新的结果集*************<br/>";
    }while($mysqli->next_result());

    $mysqli->close();