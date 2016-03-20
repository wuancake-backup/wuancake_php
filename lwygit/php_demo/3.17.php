<?php
/**
 * Created by PhpStorm.
 * User: lwy
 * Date: 16-3-12
 * Time: 上午12:19
 */

/*
$a = '123';
$b = '456';
$con = compact('a','b');
var_dump($con);
*/
//compact();组成一个数组

/*

$count =10;
while($count--)
{
    $arr[]=$count;
}
$ret = array_chunk($arr,3);
print_r($arr);
 */
//array_chunk(数组,一组几个) 把一个一维数组分成二维数组 后面参数是一个数组的大小

$a = date('y-m-d  h-i-s',time());

echo $a . "\n";
echo date('y-m-d  h-i-s',time()+(7*24*60*60));
//当前 年月日时分秒
//一周后的

echo  "liang梁文元\n";
$q=null;
echo var_dump(empty($q));
$json_data = array('status' => 1, 'msg' => '账号错误');
$str = json_encode($json_data);
echo $str;












