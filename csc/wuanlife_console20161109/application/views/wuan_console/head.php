<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>wuan_console</title>
</head>
<body>
<style>
	#head{
		height:50px;
		background-color:red;
		line-height:50px;
	}
	#wuan_1{
		float: left;
		width: 400px;
		margin-left: 20px;
	}
	#wuan_2{
		float: left;
		
	}
	#wuan_3{
		float: right;
	}
</style>
<div id="head">
	<div id="wuan_1">
		午安网管理中心
	</div>
	
	<div id="wuan_2">
		<?php echo $status;?>
	</div>
	
	<div id="wuan_3">
		<span><?php echo $adminname; ?>
		<a href="<?php echo site_url('Wuan/login');?>">退出</a></span>
	</div>
</div>