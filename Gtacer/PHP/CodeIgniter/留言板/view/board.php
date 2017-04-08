<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>留言板</title>
    <style type="text/css">
        fieldset{
            width:650px;
            height:350px;
            margin:0 auto;
        }
        .css1{
            width: 600px;
            height: 270px;
            padding-top: 15px;
            margin:0 auto;
        }

        .css2{
            width:600px;
            height: 50px;
            margin:0 auto;
        }
    </style>
</head>
<body>
<fieldset>
    <legend><h1>留言板</h1></legend>
    <form action="http://localhost/CodeIgniter/index.php/board/add" method="post">
        <div class="css1">
            <div>留言内容：</div>
            <div><textarea rows="15" cols="75" name="contents"></textarea></div>
        </div>

        <div class="css2">
            <span>用户名：</span><input type="text" name="username"/>
            <input type="submit" value="提交"/>
            <a href="http://localhost/CodeIgniter/index.php/board/check" style="padding-left:50px; ">查看留言</a>
        </div>

    </form>
</fieldset>
</body>
</html>