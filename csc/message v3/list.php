<META http-equiv="content-type" content="text/html; charset=utf-8"><title>留言首页</title>

<?php 
include 'conn.php'; error_reporting(0);
?> 
<?php 
echo "<div align='center'><a href='add.php'>继续添加</a>"; echo " <a href='login.php?action=logout'>登录/登出</a></div>";
?> 
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef"> 
<?php 
$sql="SELECT pb.title,pd.ID,pd.text,MAX(pd.createTime) AS createTime,ub.name
                          FROM post_detail pd,post_base pb ,user_base ub
                          WHERE pb.ID=pd.ID AND pb.userID=ub.ID 
                          GROUP BY ID
                          ORDER BY MAX(pd.createTime) DESC";
                         // LIMIT $limit_st,$page_num";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result))
                    {
                         error_reporting(0);
?> 

<tr bgcolor="#eff3ff"> 
       <td>标题：<font color="red"><?=$row[title]?></font> 
       用户：<font color="red"><?=$row[name] ?></font>
       <div align="right">
                        

			     
			  <?php session_start(); if($row[name]===$_SESSION['username']){
			  echo "<a href='preedit.php?id=$row[ID]'>编辑</a>"; 
			  echo "|";echo "<a href='delete.php?id=$row[ID]'>删除</a>";}else{
			  echo "编辑|删除";
			  
			  }?>|<a href="reply.php?id=<?=$row[ID]?>">回复</a>
       </div>
       </td> 
</tr> 
<tr bgColor="#ffffff"> 
<td>内容：<?=$row[text]?></td> 
</tr> 
<tr bgColor="#ffffff"> 
<td><div align="right">发表日期：<?php echo substr($row[createTime],0,16)?></div></td> 
</tr> 

<?php }?>
</table>