<?php

$fh=fopen('./msg.txt','r');



$i=1;
while(($msg=fgetcsv($fh)) != false ){

    echo '<li><a href="readmsg.php?low='.$i.'"> '.$msg[0].'</a></li>';
    $i=$i+1;
}
echo '<h3><a href="test03.html"> 留言</a></h3>';

/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/11
 * Time: 15:34
 */