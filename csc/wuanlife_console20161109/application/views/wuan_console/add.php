<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>add</title>
</head>
<body> 
	<center>
		<form action="<?php echo site_url('wuan/adding'); ?>" method="post">
			<p>新增管理员</p>
			<br />
			<label for="nickname">呢称：</label>
			<input type="text" name = "nickname" />
			<br /><br /><br />
			<input type ="submit" name= "submit" value="添加" />
		</form>
	</center>
</body>
</html>