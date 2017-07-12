<?php
header('Content-Type:text/plain;charset=utf-8');
    $arr=array(1=>45,87,69,84,12,69,85,47,12,53);
    $doing=$_REQUEST['control'];
    switch ($doing){
        case 'a':
            $numb=$_REQUEST['number'];
            echo "该学号学生的成绩是".$arr[$numb];
            break;
        case 'b':
            $grade=$_REQUEST['grade'];
            for($i=1;$i<=10;$i++){
                if($arr[$i]==$grade){
                    echo "该成绩学生的学号是:".$i;
                }
            }
            break;
        case 'c':
            $arrgrade=array(1=>0,0,0,0,0);
            /*echo $arrgrade[1];
            $arrgrade[1]+=1;
            echo $arrgrade[1];*/
            for($i=1;$i<=10;$i++){
                if ($arr[$i]>=0 && $arr[$i]<=59){
                    $arrgrade[1]+=1;
                }else if ($arr[$i]>=60 && $arr[$i]<=69) {
                    $arrgrade[2] += 1;
                }else if ($arr[$i]>=70 && $arr[$i]<=79){
                    $arrgrade[3]+=1;
                }else if ($arr[$i]>=80 && $arr[$i]<=89){
                    $arrgrade[4]+=1;
                }else if ($arr[$i]>=90 && $arr[$i]<=100){
                    $arrgrade[5]+=1;
                }
            }
            echo "不及格的有".$arrgrade[1]."人\n";
            echo "差的有".$arrgrade[2]."人\n";
            echo "中的有".$arrgrade[3]."人\n";
            echo "良的有".$arrgrade[4]."人\n";
            echo "优的有".$arrgrade[5]."人\n";
            break;
        case 'd':
            $unsetgrade=$_REQUEST['unset'];
            unset($arr[$unsetgrade]);
            echo "学号为".$unsetgrade."的成绩已经删除";
            break;
        default:
            break;
    }
?>