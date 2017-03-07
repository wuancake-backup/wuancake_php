<?php
    $arr=array(1=>12,48,67,-15,392,17,-84);
    $temp=0;
    for($i=1;$i<count($arr)-1;$i++){        //最外层的for(i)每循环一次，就确定一位数的位置
        for($j=1;$j<count($arr)-$i;$j++){   //数组的最小的下标影响了循环控制条件
            if($arr[$j]<$arr[$j+1]){        //将数组从大到小排序
                $temp=$arr[$j+1];
                $arr[$j+1]=$arr[$j];
                $arr[$j]=$temp;
            }
        }
    }
    echo print_r($arr);
?>