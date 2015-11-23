<html>
<head>
</head>
<body>
<table border="1" width="300" align="center" valign="middle">
    <tr>
        <td>
            <table width="300" align="center" valign="middle">
                <form  action="welcome.PHP" method="post">
                <tr >
                    <td  colspan="2" height="90"  align="center">Login</td>
                </tr>
                <tr>
                    <td width="40%" align="right">用户名：</td>
                    <td width="60%" align="left"><input type="text" name="username" size="25"></td>
                <tr>
                    <td align="right">密 码：</td>
                    <td align="left"><input type="password" name="password" size="25"></td>
                </tr>
                <tr>
                    <td height="50" colspan="2">
                        <table width="200">
                            <tr>
                                <td width="70%" align="right"><input type="submit" value="登录" ></td>
                                <td>&nbsp;&nbsp;&nbsp;</td>
                                <td align="left"><input type="button" value="取消" ></td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="middle"><a href="Signup.php" >没有账户点击注册</a></td>
                </tr>
                </form>
            </table>

        </td>
    </tr>
</table>
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

if(!empty($_POST))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    if($username==""||$password=="")
    {
        echo "用户名和密码不能为空！";
    }
    $sql_search= "select pw from test where name1 = '$username' ";
    $result = mysqli_query($conn,$sql_search);
    if(!$result)
    {
        echo"查询失败";
    }
    $arr = mysqli_fetch_array($result);
    if($password==$arr['pw'])
    {
        echo "登陆成功";
        echo "欢迎"."$username";
    }
    else
    {
        echo "帐号或密码错误！";
    }


    // echo "$arr[pw]";
    //  var_dump($arr);



}


?>
</body>
</html>















<?php
/**
 * Created by PhpStorm.
 * User: liangwenyuan
 * Date: 2015/11/10 0010
 * Time: 21:52
 */