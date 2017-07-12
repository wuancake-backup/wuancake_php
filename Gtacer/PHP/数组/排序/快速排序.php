<?php
    function quickSort($array){
        if (count($array) > 1) {
            $key = $array[0];
            $left = array();
            $right = array();
            //用来存放数组长度
            $size = count($array);
            for ($i = 1; $i < $size; $i++) {
                //将比key值小的放到left数组中
                if ($array[$i] <= $key)
                    $left[] = $array[$i];
                //将比key值大的放到right数组中
                elseif ($array[$i] > $key)
                    $right[] = $array[$i];
            }
            $left = quickSort($left);
            $right = quickSort($right);
            //将数组拼接
            return  array_merge($left,array($key),$right);
        }
        else{
            return $array;
        }
    }

    $array = array(8,1,5,2,85,1,234,45,34,4,5645,6,45);
    $array = quickSort($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
