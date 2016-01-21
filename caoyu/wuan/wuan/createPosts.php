<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="format-detection" content="adress=no">
    <title>发表帖子 - -午安网 - 过你想过的生活</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/wuan.css">
</head>
<body>
    <!-- file="head.html"-->
    <!-- head start-->
    <div class="nav navbar navbar-fixed-top navbar-head-color navbar-head">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-brand navbar-header">
                        <a class="" href="index.php">午安网</a>
                    </div>
                    <div class="pull-left hidden-sm hidden-xs">
                        <ul class="list-inline">
                            <li><a href="index.php">发现</a></li>
                            <li><a href="myGroup.php">我的星球</a></li>
                            <li><a href="groups.php">全部星球</a></li>
                        </ul>
                    </div>
                    <div class=" pull-right">
                        <ul class="list-inline">
                            <li><?php
/*                            //session方法
                            session_start();
                            $_SESSION['userurl']=$_SERVER['REQUEST_URI'];
                            if(isset($_SESSION['userNickname'])){
                                echo '<a href="user.html">';
                                echo $_SESSION['userNickname'].'</a></li>';
                            }else{
                                echo '<a href="login.php">登录</a></li>';
                            }*/
                            //cookie方法

                            $userurl=$_SERVER['REQUEST_URI'];
                            setcookie('userurl',$userurl);

                            if(isset($_COOKIE['nickName'])){
                                $nickName=urldecode($_COOKIE['nickName']);
                                echo '<a href="myGroup.php">';
                                echo $nickName.'</a></li>';
                            }else{
                                echo '<a href="login.php">登录</a></li>';
                            }
                            ?>
                            <li><?php
                            if(isset($_COOKIE['nickName'])){
                                echo '<a href="exit.php">退出</a></li>';
                            }else{
                                echo '<a href="reg.php">注册</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- head end-->

    <!-- framework-->
    <!-- content-->
    <div class="framework-content">
        <div class="container text-center">
            <h2 >发表帖子</h2>
            <form class="form-signin">
                <label for="postsName" class="sr-only">postsName</label>
                <input type="text" id="postsName" class="form-control" placeholder="标题：" required="" autofocus="">
                <textarea rows="6" class="form-control" placeholder="内容："></textarea>
                <button class="btn pull-right btn-primary" type="submit">发 表</button>
            </form>
        </div>
    </div>


    <script src="js/jquery-1.11.3.min.js"></script>
</body>
</html>