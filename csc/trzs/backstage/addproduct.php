<?php
header('Content-type:text/html;charset=utf-8');
    $name = $_POST['name'];
    include'../php/conn.php';
    $sql = "select max(id) from cpzs";
    $result = mysql_query($sql);
	$rs=mysql_fetch_array($result);
?>

<FORM METHOD="POST" ACTION="addproduct.php">
产品id:<INPUT TYPE="hidden" NAME="id" value="<?echo $rs[0]+1;?>"/><?echo $rs[0]+1;?><br />
产品名称：<INPUT TYPE="text" NAME="name" value="<?=$name?>"/><br />
产品简介：<TEXTAREA NAME="briIntro" ROWS="8" COLS="30"></TEXTAREA><br />
产品图片路径：<INPUT TYPE="text" NAME="image" value=""/><br />
 <INPUT TYPE="submit" name="submit" value="提交"/>
</FORM>
<?php
if(@$_POST['id'] == ''){
	exit;
}else{
	$time = time();
	$sql = "INSERT INTO cpzs (id, name, briIntro, image, time) 
VALUES ('".$_POST['id']."', '".$_POST['name']."', '".$_POST['briIntro']."', '".$_POST['image']."','".$time."')";
	if(mysql_query($sql)){
		echo "新增成功";
	}else{
		echo "新增失败";
	}
		$url = "productQuery.php"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url'"; 
		echo "</script>"; 
}
?>