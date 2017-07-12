<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
    <!--四则运算-->
<form action="catwork.php">
    <input type="hidden" name="doing" value="oper"/>
    <h1>四则运算</h1>
    第一个数：<input type="text" name="num1"/><br/><br/>
    第二个数：<input type="text" name="num2"/><br/><br/>
    运算符号：
    <select name="sign">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
    </select>
    <input type="submit" value="开始计算" style="margin-left: 50px;"/>
</form>
    <!--计算圆的面积-->
<form action="catwork.php">
    <input type="hidden" name="doing" value="area"/>
    <h1>计算圆形面积</h1>
    请输入圆的半径：<input type="text" name="radius"/><br/><br/>
    <input type="submit" value="计算面积" style="margin-left: 50px;"/>
</form>
    <!--计算矩形面积-->
<form action="catwork.php">
    <input type="hidden" name="doing" value="rec_area"/>
    <h1>计算矩形面积</h1>
    第一个数：<input type="text" name="recnum1"/><br/><br/>
    第二个数：<input type="text" name="recnum2"/><br/><br/>
    <input type="submit" value="计算矩形面积" style="margin-left: 50px;"/>
</form>

</body>
</html>