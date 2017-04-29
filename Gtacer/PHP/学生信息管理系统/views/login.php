<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>登陆学生信息管理系统</title>
    <style type="text/css">
        .login{
            margin: 200px auto;
            text-align: center;
            font-size: 50px;
        }
        .login input{
            height: 50px;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div class="login">
        <h3>学生信息管理系统登陆</h3>
        <form action="index.php" method="post">
            <div>用户名：<input type="text" name="username"/></div><br/>
            <div>密码：<input type="password" name="password"/></div><br/>
            <div><input type="submit" value="登陆"/></div>
        </form>

    </div>
</body>
</html>