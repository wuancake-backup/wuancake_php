<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>星球名修改</title>
</head>
<body> 
	<center>
		<form action="<?php echo site_url('wuan/star_name_upding/'.$starinfo['id']); ?>" method="post">
			<p>星球名修改:（原名称："<?php echo $starinfo['name']?>"）</p>
			<br />
			<label for="nickname">呢称：</label>
			<input type="text" name="starname" value="<?php echo $starinfo['name']?>"/><?php echo form_error('starname','<span>','</span>');?>
			<br /><br /><br />
			<input type="submit" name="submit" value="修改" />
		</form>
	</center>
</body>
</html>