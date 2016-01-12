<?php
$low=$_GET['low'];
//echo "第".$low."行留言";
$fh=fopen('./msg.txt','r');



$i=1;
while(($msg=fgetcsv($fh)) != false ){
    if($i==$low){
        echo '<h1>'.$msg[0].'</h1>';
        echo '<p>'.$msg[1].'</p>';
    }

    $i=$i+1;
}

echo '<h3><a href="test04.php"> 留言主页</a></h3>';
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/11
 * Time: 16:10
 */