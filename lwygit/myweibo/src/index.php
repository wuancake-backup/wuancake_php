<a href="add.php">添加内容</a><hr><hr>
<form action ="index.php" method = get>
    <input type="text" name ="keys">
    <input type="submit" name="subs" value="search">
<?php
/**
 * Created by PhpStorm.
 * User: liangwenyuan
 * Date: 2016/6/25 0025
 * Time: 22:10
 */
include("conn.php");

if(!empty($_GET['keys']))
{
    $w ="`title` like '%".$_GET['keys']."%'" ;
}
else
{
    $w=1;
}

$sql= "select * from table_1 where $w ORDER BY id DESC limit 10";
$q=mysqli_query($conn,$sql);
while($rs=mysqli_fetch_array($q))
{

?>
<h2><a href="view.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['title'] ?></a>|

    <a href="edit.php?id=<?php echo $rs['id'] ?>">编辑</a>|<a href="del.php?del=<?php echo $rs['id']?>>">删除</a>
</h2>
    <li><?php echo $rs['datetime1'] ?></li>
<p><?php echo iconv_substr($rs['contents'],0,10,'utf-8') ?><a href="view.php?id=<?php echo $rs['id'] ?>">...</a></p>
    <hr>

<?php
}
?>

