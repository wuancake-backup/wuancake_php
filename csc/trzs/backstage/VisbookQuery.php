<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
<link rel="stylesheet" type="text/css"
	href="Css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="Css/style.css" />
<script type="text/javascript" src="Js/jquery2.js"></script>
<script type="text/javascript" src="Js/jquery2.sorted.js"></script>
<script type="text/javascript" src="Js/bootstrap.js"></script>
<script type="text/javascript" src="Js/ckform.js"></script>
<script type="text/javascript" src="Js/common.js"></script>

<style type="text/css">
body {font-size: 20px;
	padding-bottom: 40px;
	background-color: #e9e7ef;
}

.sidebar-nav {
	padding: 9px 0;
}

@media ( max-width : 980px) {
	/* Enable use of floated navbar text */
	.navbar-text.pull-right {
		float: none;
		padding-left: 5px;
		padding-right: 5px;
	}
}
</style>
</head>
<body>
	<!--
	<form class="form-inline definewidth m20" action="#" method="get">
		 <font color="#777777"><strong>大类信息：</strong></font> 
		
	</form>
	-->
	<table class="table table-bordered table-hover definewidth m10">
		<thead>
			<tr>
				<th>留言id</th>
			    <th>留言标题</th>
				<th>留言内容</th>
				<th>联系电话</th>
				<th>联系地址</th>
				<th>管理菜单</th>
			</tr>
		</thead>
		<?php 
		include '../php/seezxly.php';
		while($row = mysql_fetch_array($result)){
		?>
		<tr>
				<td><?=$row['id']?></td>
			    <td><?=$row['title']?></td>
				<td><?=$row['saytext']?></td>
				<td><?=$row['mycall']?></td>
				<td><?=$row['address']?></td>
				<td><a href="deletevisbook.php?id=<?=$row['id']?>">删除</a>|<a href="editvisbook.php?id=<?=$row['id']?>">编辑</a></td>
		</tr>
		<?}?>
	</table>
	</body>
</html>