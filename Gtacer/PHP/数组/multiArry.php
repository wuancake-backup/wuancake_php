<?php
    //定义多维数组
    $arr=array(
        1=> array(1=>0,0,0,0,0),
        array(1=>0,0,1,0,0),
        array(1=>0,2,0,3,0),
        array(1=>0,0,0,0,2));
    //便利二维数组
    for($i=1;$i<=count($arr);$i++){
        for($j=1;$j<=5;$j++){
            echo $arr[$i][$j]."&nbsp";
        }echo "<br/>";
    }
?>