<html>
<head>
<title>计算器</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<style>
body{
	width:250px;
	height:180px;
	margin:150px auto;
	border:1px solid red;
}
h1{
	text-align:center;
}

</style>
</head>
<body>
<div>
<h1>我的计算器</h1>
<form action="result.php" method="post">
<table>
<tr><td>第一个数&nbsp;</td><td><input type="text" name="num1"></td></tr>
<tr><td>第二个数&nbsp;</td><td><input type="text" name="num2"></td></tr>
<tr>
<td>运算符</td>
<td>
<select name="oper">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
</td></tr>

<tr>
<td colspan="2" style="text-align:center"><input type="submit" value="计算结果"></td>
</tr>

</table>
<div>
</body>
</html>