<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="Css/style.css" />
    <script type="text/javascript" src="Js/jquery2.js"></script>
    <script type="text/javascript" src="Js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="Js/bootstrap.js"></script>
    <script type="text/javascript" src="Js/ckform.js"></script>
    <script type="text/javascript" src="Js/common.js"></script>

    <style type="text/css">
        body {font-size: 20px;
		font-size: 20px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body >
<form class="form-inline definewidth m20" action="addproduct.php" method="post">
    <font color="#777777"><strong>产品名称：</strong></font>
    <input type="text" name="name" id="name"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">新增</button>&nbsp;&nbsp; 
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>产品id</th>
		<th>产品名称</th>
		<th>产品图片路径</th>
		<th>产品简介</th>
        <th>上传日期</th>
        <th>管理菜单</th>
    </tr>
    </thead>
	<?php 
		include '../php/cpzs.php';
		while($row = mysql_fetch_array($result)){
	?>
        <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['image']?></td>
				<td><?=$row['briIntro']?></td>
                <td><?$time = date('Y-m-d H:i:s',$row['time']);echo $time;?></td>
                <td><a href="deleteproduct.php?id=<?=$row['id']?>">删除</a>|<a href="editproduct.php?id=<?=$row['id']?>">编辑</a></td>
        </tr>
	<?}?>
</table>

</body>
</html>
