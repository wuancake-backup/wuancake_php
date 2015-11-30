
<?php

 header("Content-type: text/html; charset=utf-8");
    $conn = mysql_connect('localhost','root','root');
    if (!$conn){
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('youyuan',$conn);
    if (!$conn){
        die('Could not connect: ' . mysql_error());
    }
    mysql_query('set names utf8');

    $array=explode(",",$_POST['total']);
    
    if($_POST['statu']==1){
    
    
        for($i=0;$i<count($array);$i++){

            mysql_query("UPDATE youyuan_usr SET status = '1' WHERE id = '$array[$i]'");
        } 
    }
    else if($_POST['statu']==-1){

        for($i=0;$i<count($array);$i++){

            mysql_query("UPDATE youyuan_usr SET status = '-1' WHERE id = '$array[$i]'");
        } 
    }
    mysql_close($conn);
     
    echo "<script>alert('操作成功!');
    location='checked.php';</script>"; 
?>
<html>
<head>
<title>11youyuan</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css"  />
</head>
<body>
</body>
</html>
