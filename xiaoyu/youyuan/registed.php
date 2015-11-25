
<?php
    $conn=mysql_connect("localhost","root","root");  
    
    if (!$conn){
        die('Could not connect: ' . mysql_error());
    }            
            //选择数据库  
    mysql_select_db('youyuan',$conn);
    if (!$conn){
        die('Could not connect: ' . mysql_error());
    }  

    //设置客户端和连接字符集  
    mysql_query("set names utf8");  

    //通过php进行insert操作  
    $sqlinsert="insert into youyuan_usr(name,sex,ID_number,mobile_number,qq,address,department,height,yearly_income,birthday) values('$_POST[name]','$_POST[sex]','$_POST[ID_number]','$_POST[mobile_number]','$_POST[qq]','$_POST[address]','$_POST[department]','$_POST[height]','$_POST[yearly_income]','$_POST[birthday]')";  

    //通过php进行select操作  
    $sqlselect="select * from youyuan_usr order by id";  

    //添加用户信息到数据库  
    mysql_query($sqlinsert);  
      
    //返回用户信息字符集  
    $result=mysql_query($sqlselect);  
      
    if(!$result){

        echo "<script>alert('报名失败!')</script>";
    }

    //释放连接资源  
    mysql_close($conn);                         
?>

<!DOCTYPE html>
<title>报名成功</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/regist.css" rel="stylesheet" type="text/css" />

</head>
<body>
<h1 style="margin-top:15%;">报名成功,请耐心等待审核：）<sup>11.11在线相亲hot!</sup></h1>
<a href="regist.php" style="margin-left:70%;">ヽ(✿ﾟ▽ﾟ)ノ 返回主页：）</a>
</body>
</html>
