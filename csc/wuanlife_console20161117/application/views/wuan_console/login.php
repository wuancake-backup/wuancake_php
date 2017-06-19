<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>login</title>
	<style>
		#main{
			position: absolute;
			top: 50%;
			left: 50%;
			width: 	300px;
			height: 300px;
			margin: -150px -150px;
			padding: 0 0;
			background-color: #eee;
		}
		#title {
			text-align:center;
			height:50px;
		}
		.username_password{
			line-height: 2;
		}
		#submit{
			text-align: center;
			margin: 20px 0;
		}
	</style>
</head>
<body>
<form action="<?php echo site_url('Wuan/logining'); ?>" method="post">
	<div id="main">
		<div id="title">
			午安网管理中心1.1.3
		</div>
		<div class="username_password">
		<span>用户名：</span>
		<span><input type="input" name= "adminname" value="<?php echo set_value('adminname'); ?>" /><?php echo form_error('adminname','<span>','</span>');?></span>	
		</div>
		<div class="username_password">
		<span>密　码：</span>
		<span><input type="password" name= "adminpwd" value="<?php echo set_value('adminpwd'); ?>" ><?php echo form_error('adminpwd','<span>','</span>');?></span>	
		</div>
		<div id="submit">
			<input type ="submit" name= "submit" value="登陆" />
		</div>
	</div>
	</div>
	</form>
</body>
</html>