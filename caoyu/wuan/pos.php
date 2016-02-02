
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!-- <meta charset="UTF-8"> -->
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
                        <a class="" href="index.html">午安网</a>
                    </div>
                    <div class="pull-left hidden-sm hidden-xs">
                        <ul class="list-inline">
                            <li><a href="index.html">发现</a></li>
                            <li><a href="myGroup.html">我的星球</a></li>
                            <li><a href="groups.html">全部星球</a></li>
                        </ul>
                    </div>
                    <div class=" pull-right">
                        <ul class="list-inline">
                            <li><a href="login.html">登录</a></li>
                            <li><a href="reg.html">注册</a></li>
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

                <?php
                $page= substr($_SERVER['QUERY_STRING'],3,9);
                $con = mysql_connect("localhost","root","root");
                if (!$con)
                {
                  die('Could not connect: ' . mysql_error());
              }

              mysql_select_db("wuan", $con);

              $result = mysql_query("SELECT pb.title,pd.text,pd.createTime,ub.nickName,gb.name\n"
                . " FROM post_base pb,post_detail pd,group_base gb,user_base ub\n"
                . " WHERE ub.ID = pd.postID\n"
                . " AND pb.groupID = gb.ID\n"
                . " AND pb.ID = pd.ID\n"
                . " AND pd.ID = $page\n"
                . " ORDER BY pd.floor");
              $row = mysql_fetch_array($result);
              mysql_close($con);
              ?>
              <div class="col-md-12">
                <section>
                    <article>
                        <?php
                        echo "<h3>". $row['title'] ."</h3>";
                        ?>
                        <footer class="footer">
                            <?php
                            echo "<span class=\"pull-left\"><a href=\"\">". $row['nickName'] ."</a> 发表于 <a href=\"\">". $row['name'] ."</a></span>";
                            echo "<span class=\"pull-right\">". $row['createTime'] ."</span>";
                            ?>
                        </footer>
                        <div>
                            <?php
                            echo "<p>". $row['text'] ."</p>";
                            ?>
                        </div>


                        <!-- reply list-->
                        <!--  -->
                        <?php
                        while($row = mysql_fetch_array($result))
                        {
                        ?>
                            <section class="reply-list">
                                <div>

                                    <footer class="footer">
                                        <?php
                                        echo "<span class=\"pull-left\"><a href=\"\">". $row['nickName'] ."</a></span>";
                                        echo "<span class=\"pull-right\">". $row['createTime'] ."</span>";
                                        ?>
                                    </footer>
                                    <div>
                                        <?php
                                        echo "<p>". $row['text'] ."</p>";
                                        ?>
                                    </div>
                                </div>

                            </section>
                            <?php
                        }
                        ?>

                        <form action="" method="get" class="form-group form-max-none">
                            <textarea class="form-control" placeholder="输入回复内容" rows="4"></textarea>
                            <button type="submit" class="pull-right btn btn-primary">回复</button>
                        </form>

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