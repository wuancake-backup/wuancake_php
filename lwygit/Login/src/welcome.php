<html>
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
</head>
<body>

<?php
$mysql_server_name='localhost';
$mysql_username='root';
$mysql_password='123321';
$mysql_database='test';
$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database);

if(mysqli_connect_errno($conn) == 0)
{
    echo "connect mysql success!";
}

if(!empty($_POST)) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "" || $password == "") {
        echo "用户名和密码不能为空！";
    }
    $sql_search = "select pw from test where name1 = '$username' ";
    $result = mysqli_query($conn, $sql_search);
    if (!$result) {
        echo "查询失败";
    }
    $arr = mysqli_fetch_array($result);
    if ($password == $arr['pw']) {
        echo "登陆成功";
        echo "<a href='welcome.html'>OK</a> ";
    }
    else
    {
        echo "帐号或密码错误！";
        echo "<a href='signup.php'>返回</a>";
    }
}

    // echo "$arr[pw]";
    //  var_dump($arr);
?>
</body>
</html>