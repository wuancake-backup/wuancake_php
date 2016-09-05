<?php
header('Content-type:text/html;charset=utf-8');
if(@$_GET['id'] == ''){
    echo "<script>alert('非法访问！'); history.go(-1);</script>";
}else{
    $id = $_GET['id'];
    include'../php/conn.php';
    $sql = "select * from cpzs where id = $id";
    $result = mysql_query($sql);
	$rs=mysql_fetch_array($result);
}
?>
<FORM METHOD="POST" ACTION="posteditproduct.php">
产品id:<INPUT TYPE="hidden" NAME="id" value="<?=$rs['id']?>"/><?=$rs['id']?><br />
产品名称：<INPUT TYPE="text" NAME="name" value="<?=$rs['name']?>"/><br />
产品简介：<TEXTAREA NAME="briIntro" ROWS="8" COLS="30"><?=$rs['briIntro']?></TEXTAREA><br />
产品图片路径：<INPUT TYPE="text" NAME="image" value="<?=$rs['image']?>"/><br />
 <INPUT TYPE="submit" name="submit" value="提交"/>
</FORM>
