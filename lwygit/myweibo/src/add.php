<?php
/**
 * Created by PhpStorm.
 * User: liangwenyuan
 * Date: 2016/6/25 0025
 * Time: 13:51
 */
include("conn.php");
if(!empty($_POST["sub"]))
{
    $title=$_POST['title'];
    $con=$_POST['con'];
    $sql="insert into `table_1` (`id`,`title`,`contents`,`datetime1`)VALUES (null,'$title','$con',now())";
    mysqli_query($conn,$sql);

}




?>
<form action="add.php" method="POST">
    标题<input type=text name = "title"><br>
    内容<textarea rows="5" cols ="50" name="con"></textarea><br>
    <input type="submit" name = "sub" value="发表" >
</form>