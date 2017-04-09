<?php
    $mysqli=new mysqli('localhost','root','root','test');
    if($mysqli->connect_error)
    die('连接数据库失败'.$mysqli->connect_error);

    $mysqli->autocommit(false);

    $sql1="UPDATE money SET money=money+2 WHERE id=1;";
    $sql2="UPDATE money SET money_error=money-2 WHERE id=2;";

    $res1=$mysqli->query($sql1);
    $res2=$mysqli->query($sql2);

    if(!$res1 || !$res2) {
        echo '操作失败';
        $mysqli->rollback();    //如果其中一条语句执行不成功，回滚操作
    } else{
            echo '操作成功';
            $mysqli->commit();
    }

    $mysqli->close();
