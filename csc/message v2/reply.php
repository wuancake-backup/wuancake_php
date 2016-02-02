<META http-equiv="content-type" content="text/html; charset=utf-8"><title>回复留言</title>
<?php error_reporting(0);

//页面跳转，实现方式为javascript 
if($_POST['submit']){
	include 'conn.php'; 
session_start();$username = $_SESSION['username'];
$id=$_POST[id];

		//取得楼层
        $sql1 = "SELECT count(*) as floor \n"
        . "FROM `post_detail` \n"
        . "where ID=$id";
        $result1 = mysql_query($sql1);
        $row1 = mysql_fetch_array($result1);
        $p_floor = $row1['floor']+1;
    
	$sql="INSERT INTO post_detail(ID,postID,text,floor,createTime) VALUES ('$id','$_SESSION[userid]','$_POST[content]','$p_floor',now())"; 
mysql_query($sql); 

$url = "reply.php?id=$id"; 
echo "<script language='javascript' type='text/javascript'>"; 
echo "window.location.href='$url'"; 
echo "</script>"; }

?> 
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?php error_reporting(0);
include 'conn.php'; 
$id=$_GET[id]; 
$sql="SELECT pb.title,pd.ID,pd.text,MAX(pd.createTime) AS createTime,ub.name
                          FROM post_detail pd,post_base pb ,user_base ub
                          WHERE pb.ID='$id' AND pd.ID='$id' AND pb.userID=ub.ID ";
$result=mysql_query($sql); 
if ($rs=mysql_fetch_array($result)){ 
?> 
<FORM METHOD="POST" ACTION="reply.php"> 
<input type="hidden" name="id" value="<?=$rs[ID]?>"> 

<tr bgcolor="#eff3ff"> 
       <td>标题：<font color="red"><?=$rs[title]?></font> 
       用户：<font color="red"><?=$rs[name] ?></font>
	   </td>
	   <td align="right"><a href="list.php">返回首页</a></td>
	   </tr>
	<tr>   <td>内容：<?=$rs[text]?><br /> 
</td></tr>
      <tr><td><TEXTAREA align="center" NAME="content" ROWS="8" COLS="76"><?=$rs[content]?></TEXTAREA></td></tr>
	  <tr><td><INPUT align="right" TYPE="submit" name="submit" value="回复"/></td></tr>
	<? $sqla="SELECT pb.ID,pd.ID,pd.text,ub.name,ub.ID,pd.floor,pd.createTime
                          FROM post_detail pd,post_base pb ,user_base ub
                          WHERE pd.ID='$id' AND pd.postID=ub.ID AND pb.ID=pd.ID AND floor not in (1) ";
						  $resulta=mysql_query($sqla); 
while ($rsa=mysql_fetch_array($resulta))
{?>
                        <tr bgcolor="#eff3ff">  
                          <td><font color="red"><?=$rsa[name]?></font>说：<font color="red"><?=$rsa[text]?></font></td>
						  <td align="right">
						 <font align="right" color="blue"><?=$rsa[floor]?>楼</font>
						  </td></tr>
						  <tr bgcolor="#B22222"><td align="right">回复时间：<?php echo substr($rsa[createTime],0,16)?></td></tr>
	
	
<?}
	
?>	
	  
	  
	  </table>
	  <input type="hidden" name="id" value="<?=$rs[ID]?>"> 
</FORM> 
<?php }?>


