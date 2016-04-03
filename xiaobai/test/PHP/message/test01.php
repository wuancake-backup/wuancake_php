<?php
$i=1;
while($i<=100){
    if($i%3==0 && $i%5==0){
        echo 'abcd<br/>';
    }elseif($i%3==0){
        echo 'Fizz<br/>';
    }elseif($i%5==0){
        echo 'Buzz<br/>';
    }else{
        echo $i.'<br/>';
    }
    $i=$i+1;
}
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/11
 * Time: 14:33
 */