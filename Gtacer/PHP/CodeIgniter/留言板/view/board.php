<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>留言板</title>
    <h1>留言板</h1>
</head>
    <body>
    <form action="http://localhost/CodeIgniter/index.php/board/add" method="post">
        留言内容：<textarea rows="5" cols="35" name="contents"></textarea><br/><br/>
        用户名：<input type="text" name="username"/>
        <input type="submit" value="提交"/>
    </form>
    <a href="http://localhost/CodeIgniter/index.php/board/check">查看留言</a>
    </body>
</html>