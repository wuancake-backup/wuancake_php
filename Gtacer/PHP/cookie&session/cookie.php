<?php
    //设置cookie信息
    setcookie('name','gtacer',time()+3600);     //3600的单位为秒
    setcookie('pas','123',time()+36);
    //获取cookies信息
    echo $_COOKIE["name"];
    echo $_COOKIE['pas'];

    //更新cookie（重新设置）
    setcookie('name','xiaohong',time()+3600);

    //删除cookie
    //如果要删除某个key,只需把time()减去一个数
    setcookie('name','',time()-10);

    //删除所有cookie
    foreach($_COOKIE as $key=>$val){
        setcookie($key,'',time()-1);
    }