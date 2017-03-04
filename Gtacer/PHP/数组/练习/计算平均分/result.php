<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>结果</title>
</head>
<body>
    <?php
        /*接收数据*/
        $grade[1]=$_REQUEST["first"];
        $grade[2]=$_REQUEST["second"];
        $grade[3]=$_REQUEST["third"];
        $grade[4]=$_REQUEST["forth"];
        $grade[5]=$_REQUEST["fifth"];
        $grade[6]=$_REQUEST["sixth"];
        $grade[7]=$_REQUEST["seventh"];
        $grade[8]=$_REQUEST["eighth"];
        /*定义变量储存相应的值*/
        $max=$grade[1];$max_judge="1";
        $min=$grade[1];$min_judge="1";
        $sum=0;
        $ave=0;
        /*找出评委中的最高分和最低分*/
        FOR ($i=2;$i<=8;$i++){
            if($grade[$i]>$max){
                $max=$grade[$i];
                $max_judge="$i";
            }
            else if($grade[$i]<$min){
                $min=$grade[$i];
                $min_judge="$i";
            }
        }
        /*去掉最高分和最低分，并求和、求平均值*/
        FOR ($i=1;$i<=8;$i++){
            /*if($grade[$i]==$max||$grade[$i]==$min) continue;
                                                                遇到重复的最高分时计算结果将会出错*/
            $sum=$sum+$grade[$i];
        }
        $sum=$sum-($max+$min);
        $ave=$sum/6;
        /*打印结果*/
        echo "第".$max_judge."位评委打出最高分：".$max."分<br/>";
        echo "第".$min_judge."位评委打出最低分：".$min."分<br/>";
        echo "最终得分：".$ave."分";
    ?>
</body>
</html>