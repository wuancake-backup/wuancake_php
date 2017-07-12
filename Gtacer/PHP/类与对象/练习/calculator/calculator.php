<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>我的计算器</title>
</head>
<body>
<form action="result.php" method="post">
    num1:<input type="text" name="num1"/><br/>
    num2:<input type="text" name="num2"/><br/>
    oper:
    <select name="oper">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="计算"/>
</form>
</body>
</html>
<?php
    
?>