<?php
header('Content-type:text/html;charset=utf-8');
    $title = $_POST['title'];
    include'../php/conn.php';
    $sql = "select max(id) from xwzx";
    $result = mysql_query($sql);
	$rs=mysql_fetch_array($result);
?>

<FORM METHOD="POST" ACTION="addnews.php">
新闻id:<INPUT TYPE="hidden" NAME="id" value="<?echo $rs[0]+1;?>"/><?echo $rs[0]+1;?><br />
新闻标题：<INPUT TYPE="text" NAME="title" value="<?=$title?>"/><br />
新闻内容：<TEXTAREA NAME="content" ROWS="8" COLS="30"></TEXTAREA><br />
新闻图片路径：<INPUT TYPE="text" NAME="image" value=""/><br />
 <INPUT TYPE="submit" name="submit" value="提交"/>
</FORM>
<?php
if(@$_POST['id'] == ''){
	exit;
}else{
	$time = time();
	$sql = "INSERT INTO xwzx (id, title, content, image, time) 
VALUES ('".$_POST['id']."', '".$_POST['title']."', '".$_POST['content']."', '".$_POST['image']."','".$time."')";
	if(mysql_query($sql)){
		echo "新增成功";
	}else{
		echo "新增失败";
	}
		$url = "newsQuery.php"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url'"; 
		echo "</script>"; 
}
?>