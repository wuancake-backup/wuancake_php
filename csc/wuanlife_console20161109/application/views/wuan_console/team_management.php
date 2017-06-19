<style>
	#teammanagement{
			float: left;
		}
		#newadmin{
			width: 100px;
			height: 20px;
			border: 1px solid black;
			text-align: center;
			margin: 29px;
			padding: 10px;

		}
		#adminlist{
			padding-top: 10px;
			padding-left: 50px;
			height: 490px;
			background-color: white;
		}
		table{
			border: solid 1px black;
			border-collapse: collapse;


		}
		td{
			border: 1px solid black;
			padding: 5px;


		}
</style>

<div id="teammanagement">
	
	<div id="newadmin">
		<a href="<?php echo site_url('Wuan/add'); ?>">新增管理员</a>
	</div>
	
	<div id="adminlist">
		
		<table class="thinsolid" >
		    <tr>
		    <td>用户id</td>
			<td>呢称</td>
			<td>操作</td>
			</tr>
				<?php foreach ($admin as $user_item): ?>
					<tr>
					    <td><?php echo $user_item['id']; ?></td>
						<td><?php echo $user_item['nickname']; ?></td>
						<td><a href="<?php echo site_url('wuan/delete/'.$user_item['id']) ?>">删除</a></td>
							<!-- <td><?php echo "delete"; ?></td> -->
					</tr>
				<?php endforeach; ?>
		</table>
	</div>
</div>