<?php
    $mysqli=new mysqli('localhost','root','root','test');
    if($mysqli->connect_error){
    die('连接失败'.$mysqli->connect_error);
    }
/**************使用预编译添加*****************************
    //1,创建预编译对象
    $sql="INSERT INTO test(id,name,password) VALUE (?,?,?);";
    $mysqli_stmt=$mysqli->prepare($sql);

    //2,绑定参数
    $id=5;
    $name='老大';
    $password='4r5';

    //3,赋值
    $mysqli_stmt->bind_param('iss',$id,$name,$password) ;

    //4,执行
    $mysqli_stmt->execute() or die ('操作失败'.$mysqli_stmt->error);
    echo '操作成功';

    //5,重复 2，3，4

    //关闭预编译
    $mysqli_stmt->close();
    //关闭连接
    $mysqli->close();
****************************************************************/

    /***************使用预编译查询******************/
    $sql="select id,name,password from test where id>?;";
    $mysqli_stmt=$mysqli->prepare($sql);
    $id=5;
    //绑定参数
    $mysqli_stmt->bind_param('i',$id);
    //绑定结果集
    $mysqli_stmt->bind_result($id,$name,$password);
    //执行
    $mysqli_stmt->execute() or die($mysqli_stmt->error);
    //取出绑定的值
    while($mysqli_stmt->fetch()){
        echo "<br/>$id-----$name----$password";
    }

    //关闭资源
    //释放结果
    $mysqli_stmt->free_result();
    //关闭编译语句
    $mysqli_stmt->close();
    //关闭连接
    $mysqli->close();