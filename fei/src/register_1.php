<?php  
require_once 'oracle_con.php';  
$name=$_POST['name'];  
$password=$_POST['password'];  
$pwd_again=$_POST['pwd_again'];  
if($name==""|| $password=="")  
{  
    echo"用户名或者密码不能为空";  
}  
else   
{  
    if($password!=$pwd_again)  
    {  
        echo"两次输入的密码不一致,请重新输入！";  
        echo"<a href='reg.php'>重新输入</a>";  
          
    }  
    else  
    {  
        $sql="insert into test.user_db values('$name','$password')";  
        $abc=mysql_query($sql);  
        if(!$abc)  
        {  
            echo"注册不成功！";  
            echo"<a href='reg.php'>返回</a>";  
        }  
        else   
        {  
            echo"注册成功!";  
             echo"<a href='login.php'>返回登录</a>";
        }  
    }  
}  
?> 