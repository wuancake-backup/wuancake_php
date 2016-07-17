<?php
/**
 * Created by PhpStorm.
 * User: liangwenyuan
 * Date: 2016/6/26 0026
 * Time: 0:04
 */
include("conn.php");
if(!empty($_POST["sub"]))
{
    $title=$_POST['title'];
    $con=$_POST['con'];
    $hid=$_POST['hid'];
    $sql="update `table_1` set `title`= '$title',`contents`= '$con'where `id` = '$hid' limit 1";
    mysqli_query($conn,$sql);
    echo "<script>alert('更新成功！'),location.href='index.php'</script>";

}
if(!empty($_GET['id']))
{
   echo $sql="select * from table_1 where `id` = '".$_GET['id']."'";
    $q=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_array($q);

}

?>
<form action="edit.php" method="POST">
    <input type=hidden name = "hid" value="<?php echo $rs['id'] ?>">
    标题<input type=text name = "title" value="<?php echo $rs['title'] ?>"><br>
    内容<textarea rows="5" cols ="50" name="con"><?php echo $rs['contents'] ?></textarea><br>
    <input type="submit" name = "sub" value="发表" >
</form>