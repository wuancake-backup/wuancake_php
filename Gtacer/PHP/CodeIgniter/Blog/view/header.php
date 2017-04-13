<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/css/blog.css"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>个人博客</title>
</head>
    <body>
    <div class="overall">
<!--        网页头：博客标题，导航栏-->
        <div class="header">
            <div class="blog_title">Something</div>
            <div class="blog_location">http://localhost/codeigniter/index.php/blog</div><br/>
            <div>
                <nav>
                    <a href="http://localhost/codeigniter/index.php/blog">首页</a> |
                    <a href="http://localhost/codeigniter/index.php/blog/show_article">博文目录</a> |
                    <a href="http://localhost/codeigniter/index.php/blog/show_board">留言板</a> |
                    <a href="#">关于</a>
                </nav>
            </div>
            <span class="statistics">
                <?php
                session_start();
                if(!empty($_SESSION['credentials'])) {
                    if (!empty($_COOKIE['lastVisit'])) {
                        echo '欢迎回来，你上次登录的时间为' . $_COOKIE['lastVisit'];
                        setcookie('lastVisit', date('Y-m-d H:i:s'),time()+36000);
                    } else {
                        echo '你是第一次登陆本网站！';
                        setcookie('lastVisit', date('Y-m-d H:i:s'),time()+36000);
                    }
                }else
                    echo "<a href='http://localhost/codeigniter/index.php/blog/login_view'>管理员登录<a>";
                ?>
            </span>
        </div>