<style>
	#left{
		width: 200px;
		height: 600px;
		text-align: center;
		background-color: grey;
		float: left;
		padding: 20px;
	}

</style>

<div id = "left">
<?php if($ua['uauth'] == 03) 
{
	echo ("<li><a href=".site_url('wuan/team_management').">成员管理</a></li>");}?>
		
		<li><a href="<?php echo site_url('wuan/star_management') ?>">星球管理</a></li>
</div>