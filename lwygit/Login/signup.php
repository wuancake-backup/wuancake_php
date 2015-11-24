<html>
<head>
</head>
<body>
<table width="300" border="1" align="center">
    <form action="<?php $_PHP_SELF ?> " method="post">
    <tr>
        <td colspan="2" height="90" align="center">注册</td>
    </tr>
    <tr>
        <td width="40%" align="right">用 户 名：</td>
        <td width="60%" align="left"><input type="text" name="signup_username" size="25"></td>
    </tr>
    <tr>
        <td width="40%" align="right">请设置密码：</td>
        <td width="60%" align="left"><input type="password" name="signup_password1" size="25"></td>
    </tr>
    <tr>
        <td width="40%" align="right">请确认密码：</td>
        <td width="60%" align="left"><input type="password" name="signup_password2" size="25"></td>
    </tr>
    <tr>
        <td colspan="2" height="50" width="100%">
            <table width="300">
                <tr>
                    <td width="40%" align="right"><input type="submit" value="注册" name="submit" ></td>
                    <td>&nbsp;&nbsp;</td>
                    <td width="40%" align="left"><input type="button" value="取消" name="cancel"></td>
                </tr>
                </table>
        </td>
    </tr>
        </form>
</body>

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
    $username=$_POST["signup_username"];
    $password1=$_POST["signup_password1"];
    $password2=$_POST["signup_password2"];
    if($username=="" || $password1=="" && $password2=="")
    {
        echo "用户名、密码和确认密码不能为空！";
    }
    elseif($password1!=$password2)
    {
        echo "两次输入的密码不一致！";
    }
    else
    {
        $sql= "insert into test (name1,pw) VALUE ('$username','$password1')";
        $result=mysqli_query($conn,$sql);
        if(!$result)
        {
            echo"注册不成功！";
            echo"<a href='signup.php'>返回</a>";
        }
        else
        {
            echo"注册成功!";
            echo"<a href='Login.php'>返回</a>";
        }
    }
}




/**
 * Created by PhpStorm.
 * User: liangwenyuan
 * Date: 2015/11/10 0010
 * Time: 23:25
 */

?>

</html>




















