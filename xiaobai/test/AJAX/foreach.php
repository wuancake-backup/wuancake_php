<?php
$arr=array(1,2,3,4,5);
foreach($arr as &$b){
    echo $b;
    echo"<br/>";
}
echo"<br/>";
echo $b;
echo"<br/>";
print_r($arr);
echo"<br/>";
echo"<br/>";
foreach($arr as $a => $b){
    echo $b;
    echo"<br/>";
    echo $a."=>".$b."<br/>";
}
echo $arr[4];
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/25
 * Time: 20:16
 */