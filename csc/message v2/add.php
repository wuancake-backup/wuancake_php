<META http-equiv="content-type" content="text/html; charset=utf-8">
 <script type="text/javascript"> 
function checkPost(){ 

if(addForm.user.value==""){ 
alert("请输入用户名"); 
addForm.user.focus(); 
return false; 
} 
if(addForm.title.value.length<5){ 
alert("标题不能少于5个字符"); 
addForm.title.focus(); 
return false; 
} 
} 
</script> 
<? session_start();?>
<FORM name="addForm" METHOD="POST" ACTION="add.php" onsubmit="return checkPost();"> 
用户：<input type="hidden" name="user" value="<?=$_SESSION['username']?>">
<?php echo $_SESSION['username']?><br/>
标题：<INPUT TYPE="text" NAME="title" /><br /> 
内容：<TEXTAREA NAME="content" ROWS="8" COLS="30"></TEXTAREA><br /> 
<INPUT TYPE="submit" name="submit" value="添加" /><a href="list.php">返回首页</a></FORM>




<?php if(!empty($_POST)){ 
include 'conn.php'; 
//取得postID
        $sql_getPID = "SELECT ID as postID\n"
            . "FROM post_base\n"
            . "ORDER by ID DESC\n"
            . "LIMIT 0 , 1";
        $result1 = mysql_query($sql_getPID);
        $row1 = mysql_fetch_array($result1);
        $p = $row1['postID']+1;

$sql="INSERT INTO post_base(ID,userID,title) VALUES ('$p', '$_SESSION[userid]', '$_POST[title]')"; 
$sqla="INSERT INTO post_detail(ID,postID,text,floor,createTime) VALUES ('$p','$_SESSION[userid]','$_POST[content]','1',now())";
mysql_query($sql); mysql_query($sqla);

//页面跳转，实现方式为javascript 
$url = "list.php"; 
echo "<script language='javascript' type='text/javascript'>"; 
echo "window.location.href='$url'"; 
echo "</script>"; 
} 
?>