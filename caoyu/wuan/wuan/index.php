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
    <title>主页 - 午安网 - 过你想过的生活</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/wuan.css">
</head>
<body>
    <!-- file="head.html"-->
    <!-- head start-->
    <div class="nav navbar navbar-fixed-top navbar-head-color navbar-head">
        <div class="container">
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
    <!-- file="nav.html"-->
    <!-- mobile nav-->
    <div class="hidden-md hidden-lg mobile-nav navbar-fixed-top">
        <div class="container">
            <ul class="list-inline">
                <li class="active"><a href="index.html">发现</a></li>
                <li><a href="myGroup.html">我的星球</a></li>
                <li><a href="groups.html">全部星球</a></li>
            </ul>
        </div>
    </div>
    <!-- framework-->
    <!-- content-->
    <div class="framework-content">
        <div class="container">
            <div class="row">
                <!-- main framework-->
                <div class="col-md-12">
                    <section>
                        <div class="delete-float">
                            <h2 class="pull-left">发现</h2>
                        </div>
                        <!-- 请判断帖子是否存在图片需要展示，判断后决定输出的模板 第一个是有图 第二个是无图-->
                        <?php
                        include "conn.php";
                        $sql="SELECT pb.title,pd.text,pd.createTime,ub.nickName,gb.name,pb.ID\n"
                        . "FROM post_base pb,post_detail pd,group_base gb,user_base ub \n"
                        . "WHERE ub.ID = pb.userID \n"
                        . "AND pb.groupID = gb.ID\n"
                        . "AND pb.ID = pd.ID\n"
                        . "AND pd.floor = '1'\n"
                        . " LIMIT 0, 30 ";
                        $result = mysql_query($sql);
                        while($row = mysql_fetch_array($result))
                        {
                         ?>

                        <article>
                            <?php
                            echo "<h3><a href=\"posts.php?P_ID=". $row['ID'] ."\">". $row['title'] ."</a></h3>";
                            ?>
                            <div class="delete-float">
                                <div>
                                    <?php
                                    echo "<p>". $row['title'] ."</p>";
                                    ?>
                                </div>

                            </div>
                            <footer class="footer">
                                <?php
                                echo "<span class=\"pull-left\"><a href=\"\">". $row['nickName'] ."</a> 发表于 <a href=\"\">". $row['name'] ."</a></span>";
                                echo "<span class=\"pull-right\">". $row['createTime'] . "</span>";
                                ?>
                            </footer>
                        </article>
                        <?php
                        }
                        ?>

                        <article>
                            <h3><a href="">卧槽！谁来告诉我我这是眼袋还是卧蚕！我才知道我笑起来那么吓人</a></h3>
                            <div class="delete-float">
                                <div class="pull-left container-content" >
                                    <p>昨天拍了个照片也没太注意。。发给朋友看他们说你最近眼袋怎么那么重！
                                        然而露珠平时好像是没有眼袋的啊！
                                        百度了一下说卧蚕什么紧贴下睫毛啊细细一条啊但是露珠的好像并不细。。。哭 大...
                                    </p>
                                </div>
                                <div class="pull-right container-img">
                                    <img  src="image/logo-1x.png">
                                </div>
                            </div>
                            <footer class="footer">
                                <span class="pull-left"><a href="">陶陶</a> 发表于 <a href="">鬼扯天地</a></span>
                                <span class="pull-right">2015-12-26 22:00</span>
                            </footer>
                        </article>

                        <article>
                            <h3><a href="">卧槽！谁来告诉我我这是眼袋还是卧蚕！我才知道我笑起来那么吓人</a></h3>
                            <div class="delete-float">
                                <div>
                                    <p>昨天拍了个照片也没太注意。。发给朋友看他们说你最近眼袋怎么那么重！
                                        然而露珠平时好像是没有眼袋的啊！
                                        百度了一下说卧蚕什么紧贴下睫毛啊细细一条啊但是露珠的好像并不细。。。哭 大...
                                    </p>
                                </div>

                            </div>
                            <footer class="footer">
                                <span class="pull-left"><a href="">陶陶</a> 发表于 <a href="">鬼扯天地</a></span>
                                <span class="pull-right">2015-12-26 22:00</span>
                            </footer>
                        </article>


                    </section>
                </div>

            </div>
        </div>
    </div>
    <!-- file="page.html"-->
    <!-- page-->
    <div class="container page-nav ">
        <div class="row">
            <div class="col-md-12 hidden-lg hidden-md">
                <ul class="list-unstyled list-inline ">
                    <li><a href="">上一页</a></li>
                    <li> 29 / 210</li>
                    <li><a href="">下一页</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container hidden-sm hidden-xs delete-float">
        <nav class="text-center">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
</body>
</html>