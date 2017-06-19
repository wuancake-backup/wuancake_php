<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>每日签到</title>
    <style>
        body{
            width:700px;
            height:500px;
            border:solid #05121a 1px;
            margin: 10% auto;
        }
        form div{
            font-size:50px;
            text-align: center;
            margin: 80px   auto;
        }
        input{
            font-size:30px;
        }
    </style>
</head>
<body>
<form action="index.php" method="post">
    <div>用户名：<input type="text" name="username"/></div>
    <div>密码：<input type="password" name="password"/></div>
    <div><input type="submit" value="登录"/></div>
</form>
</body>
</html>