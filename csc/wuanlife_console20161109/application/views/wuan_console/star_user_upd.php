<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>星球主人修改</title>
</head>
<body> 
	<center>
		<form action="<?php echo site_url('wuan/star_user_upding/'.$starinfo['gid']); ?>" method="post">
			<p>星球名:<?php echo $starinfo['gname'];?></p>
			<p>星球原主人:<?php echo $starinfo['uname'];?></p>
			<br />
			<label for="userid">星球主人：</label>
			<select name="userid">
				<?php foreach ($userlist as $user_item): ?>
				<option value="<?php echo $user_item['id'];?>"<?php echo $starinfo['uid']==$user_item['id']?' selected':''?>><?php echo $user_item['nickname']; ?></option>
				<?php endforeach; ?>
			</select>
			<br /><br /><br />
			<input type="submit" name="submit" value="修改" />
		</form>
	</center>
</body>
</html>