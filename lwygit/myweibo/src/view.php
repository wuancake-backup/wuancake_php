<?php
/**
 * Created by PhpStorm.
 * User: liangwenyuan
 * Date: 2016/6/26 0026
 * Time: 1:00
 */
include("conn.php");
if(!empty($_GET['id']))
{
    $sql="select * from table_1 where `id` = '".$_GET['id']."'";
    $q=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_array($q);

   $sqlup ="update table_1 set hits = hits+1 where id = '".$_GET['id']."'";
    mysqli_query($conn,$sqlup);

}
?>
<h1><?php echo $rs['title'] ?></h1>
<h2><?php echo $rs['datetime1'] ?></h2>
<h3>点击量：<?php echo $rs['hits'] ?></h3>
<p><?php echo $rs['contents'] ?></p>
<p><></p>
