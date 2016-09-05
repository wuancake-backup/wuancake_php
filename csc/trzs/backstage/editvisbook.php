<?php
header('Content-type:text/html;charset=utf-8');
if(@$_GET['id'] == ''){
    echo "<script>alert('非法访问！'); history.go(-1);</script>";
}else{
    $id = $_GET['id'];
    include'../php/conn.php';
    $sql = "select * from zxly where id = $id";
    $result = mysql_query($sql);
	$rs=mysql_fetch_array($result);
}
?>
<FORM METHOD="POST" ACTION="posteditvisbook.php">
留言id:<INPUT TYPE="hidden" NAME="id" value="<?=$rs['id']?>"/><?=$rs['id']?><br />
留言标题：<INPUT TYPE="text" NAME="title" value="<?=$rs['title']?>"/><br />
留言内容：<TEXTAREA NAME="saytext" ROWS="8" COLS="30"><?=$rs['saytext']?></TEXTAREA><br />
联系电话：<INPUT TYPE="text" NAME="mycall" value="<?=$rs['mycall']?>"/><br />
联系地址：<INPUT TYPE="text" NAME="address" value="<?=$rs['address']?>"/><br />
 <INPUT TYPE="submit" name="submit" value="提交"/>
</FORM>
