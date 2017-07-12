<?php
    if(!empty($_COOKIE['lastVisit'])){
    echo '欢迎回来，你上次登录的时间为'.$_COOKIE['lastVisit'];
    setcookie('lastVisit',date('Y-m-d H:i:s'));
    }else{
    echo '你是第一次登陆本网站！';
    setcookie('lastVisit',date('Y-m-d H:i:s'));
    }