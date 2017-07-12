<?php
    //定义多维数组
    $arr=array(
        1=> array(1=>0,0,0,0,0),
        array(1=>0,0,1,0,0),
        array(1=>0,2,0,3,0),
        array(1=>0,0,0,0,2));
    //遍历二维数组
    for($i=1;$i<=count($arr);$i++){
        for($j=1;$j<=5;$j++){
            echo $arr[$i][$j]."&nbsp";
        }echo "<br/>";
    }

    //定义多维数组，$a与$b必须先定义，再引用，否则将会出错
    $a=array(12,123,233);
    $b=array(23,123,222);
    $arr2=array($a,$b);
?>