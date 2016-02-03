<META http-equiv="content-type" content="text/html; charset=utf-8">

<?php 
include 'conn.php'; 
?> 
<?php 
echo "<div align='center'><a href='add.php'>继续添加</a></div>"; 
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
                    	//var_dump($row);
                         error_reporting(0);
?> 

<script language="javascript">
    function submit<?php echo $row[ID]?>()
    {
        var preEditForm = "submitform"+<?php echo $row[ID]?>;
        document.getElementById(preEditForm).action="preedit.php";
        document.getElementById(preEditForm).submit();
    }
    
    function submi<?php echo $row[ID]?>()
    {    
	     var deleteform = "submitform"+<?php echo $row[ID]?>;
    document.getElementById(deleteform).action="delete.php";
    document.getElementById(deleteform).submit();
    }
	function reply()
	{
	window.location.href='reply.php?id=<?php echo $row[ID]?>';
	}
</script>

<tr bgcolor="#eff3ff"> 
       <td>标题：<font color="red"><?php echo $row[title]?></font> 
       用户：<font color="red"><?php echo $row[name] ?></font>
       <div align="right">
                        

			 <form name="submitform<?php echo $row[ID]?>" id="submitform<?php echo $row[ID]?>" method="post" action="">
			 
			  <input type="hidden" name="id" id="id" value="<?php echo $row[ID]?>"> 
			  <?php session_start(); if($row[name]===$_SESSION['username'])
			  {
			  echo "<INPUT TYPE='button' name='preEdit' id='preEdit' value='编辑' onclick='submit<?php echo $row[ID]?>()'/>";
			  echo " | "; 
			  echo "<INPUT TYPE='button' name='delete' id='delete' value='删除' onclick='submi<?php echo $row[ID]?>()'/>";
			  echo " | ";
			  echo "<input type='button' name='reply' id='reply' value='回复' onclick='window.location.href=\"reply.php?id=$row[ID]\"'/> ";
			  }else{
			  echo "编辑 | 删除 | <a href='reply.php?id=$row[ID]'>回复</a>";}
			  ?>
			 </form>
			   
       </div>
       </td> 
</tr> 
<tr bgColor="#ffffff"> 
<td>内容：<?php echo $row[text]?></td> 
</tr> 
<tr bgColor="#ffffff"> 
<td><div align="right">发表日期：<?php echo substr($row[createTime],0,16)?></div></td> 
</tr> 

<?php }?>
</table>
