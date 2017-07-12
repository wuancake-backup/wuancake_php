<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>猜拳游戏</title>
</head>

<body>
<div style="font-size:45px;float:left;">你出：</div>
<form action="result.php" method="post">
	<select name="result" style="width:100px;height:50px;font-size:30px;">
		<option value="st">石头</option>
		<option value="jd">剪刀</option>
		<option value="b">布</option>
	</select>
	<input type="submit" value="猜拳" style="width:100px;height:50px;font-size:30px;margin-left:10px;"/>
</form>
</body>
</html>