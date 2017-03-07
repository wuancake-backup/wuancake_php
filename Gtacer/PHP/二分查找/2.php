<?php
    header('Content-Type:text/plain;charset=utf-8');
    //要使用二分查找，首先需要保证数列为有序数列
    function binarySearch(&$arr,$findval,$leftindex,$rightindex){   //数组，要找的数，右边的下标，左边的下标
        if ($rightindex<$leftindex){
            echo "找不到该数";
            return;
        }
        $middleindex=round(($rightindex+$leftindex)/2);
        if($findval>$arr[$middleindex]){
            binarySearch($arr,$findval,$middleindex+1,$rightindex);
        }elseif ($findval<$arr[$middleindex]){
            binarySearch($arr,$findval,$leftindex,$middleindex-1);
        }else echo '这个数的下标为'.$middleindex;
    }
    $arr1=array(1=>59,68,74,85,94,125,324);
    binarySearch($arr1,68,1,count($arr1));
?>