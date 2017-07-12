<?php
    //获取访问IP
    $ip=$_SERVER['REMOTE_ADDR'];    //获取访问IP
    //写入文件
    file_put_contents('record.txt',$ip."\r\n",FILE_APPEND);
    //读取文件
    $info=file('record.txt');
    //求出网站总访问量
    $visits=count($info);
    //求出当前是第几次访问
    $ip_visit=0;
    $unique_ips=array();
    foreach ($info as $value){
    if (trim($value) == $ip)
    $ip_visit++;
    //求出网站一共有多少个用户访问过
    if (!in_array($value,$unique_ips)) {
    $unique_ips[] = $value;
    //判断当前用户是第几个用户
    if ($ip == trim($value))
    $user_visits=count($unique_ips);
    }
    //求出当前用户IP在数组中出现的位置
    }
    //数组$unique_ips的长度就是网站的总用户数
    $users=count($unique_ips);
    //输出
    echo    "欢迎访问本网站，你是第{$user_visits}个用户，
    当前网站一共有{$users}个用户，
    当前网页一共被访问了{$visits}次，
    你当前是第{$ip_visit}次访问";
