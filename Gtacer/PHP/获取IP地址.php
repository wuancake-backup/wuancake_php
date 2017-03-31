<?php
    echo getenv('REMOTE_ADDR')."<br/>";         //返回访问客户端IP地址
    echo $_SERVER["REMOTE_ADDR"]."<br/>";       //返回访问客户端IP地址
    echo gethostbyaddr('127.0.0.1')."<br/>";    //返回对应于给定地址的主机信息
    echo getenv('SERVER_ADDR')."<br/>";         //返回服务器IP地址