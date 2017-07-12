<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>star_mangement</title>
<style>
#main{
	margin-left: 240px;
	padding-top: 30px;
	padding-left: 30px;

}

table{
	border: solid 1px black;
	border-collapse: collapse;
	}

td{
	border: 1px solid black;
	padding: 3px;
	}
#button{
	margin-top: 20px;
	margin-left: 260px;
	font-size: 25px;
	text-indent: 50px;
	letter-spacing: 0px;

}
#tr{
	font-weight: bold;
}
</style>
</head>
<body>
<div id="main">
<table>
	<tr id="tr">
		<td>id</td>
		<td>星球名称</td>
		<td>星球介绍</td>
		<td>星球主人</td>
		<td>转让</td>
		<td>删除</td>
	</tr>
<?php foreach ($starinfo as $key): ?>
	<tr>
		<td><?php echo $key['id'] ?></td>
		<td><?php echo $key['name'] ?></td>
		<td><?php echo $key['g_introduction'] ?></td>
		<td><?php echo $key['owner'] ?></td>
		<td>转让</td>
		<td>删除</td>
	</tr>
<?php endforeach; ?>
</table>
	</div>
	<div id="button">
	<!-- 	<?php echo $links; ?> -->
	</div>
</body>
</html>