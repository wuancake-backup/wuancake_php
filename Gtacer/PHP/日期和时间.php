<?php
    //DataTime类

    //输出当前时间
    namespace test;
    $date=new \DateTime();
    echo $date->format('Y-m-d  H:i:s')."<br/>";

    //输出指定日期的时间；
    $foo='1996.12.12 23:15:58';
    $date_1=\DateTime::createFromFormat('Y.m.d H:i:s',$foo);
    echo $date_1->format('Y-m-d H:i:s');

    //DateTime对象之间可以直接比较
    if ($date>$date_1){
        echo 'OK';
    }

    //使用DateInterval增加时间间隔
    $end=clone $date_1;
    $end->add(new \DateInterval('P3Y2M30D'));
    echo "<br/>".$end->format('Y-m-d H:i:s');

    //使用DateInterval类的diff方法读取时间间隔
    $diff=$end->diff($date_1);
    echo $diff->format('%m month, %d days (total: %a days)');
