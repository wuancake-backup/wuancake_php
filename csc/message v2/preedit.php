<META http-equiv="content-type" content="text/html; charset=utf-8">
<?php error_reporting(0);
include 'conn.php'; 
$id=$_POST[id]; 
$sql="SELECT pb.title,pd.ID,pd.text,MAX(pd.createTime) AS createTime,ub.name
                          FROM post_detail pd,post_base pb ,user_base ub
                          WHERE pb.ID='$id' AND pd.ID='$id' AND pb.userID=ub.ID ";
                          /*GROUP BY ID
                          ORDER BY MAX(pd.createTime) DESC
                          LIMIT $limit_st,$page_num;*/
                    $result = mysql_query($sql);
while ($rs=mysql_fetch_array($result)){ 
?> 
<FORM METHOD="POST" ACTION="postEdit.php"> 
<input type="hidden" name="id" value="<?=$rs[ID]?>"> 
用户：<INPUT TYPE="text" NAME="user" value="<?=$rs[name]?>"/><br /> 
标题：<INPUT TYPE="text" NAME="title" value="<?=$rs[title]?>"/><br /> 
内容：<TEXTAREA NAME="content" ROWS="8" COLS="30"><?=$rs[text]?></TEXTAREA><br /> 
<INPUT TYPE="submit" name="submit" value="编辑"/> 
</FORM> 
<?php }?>