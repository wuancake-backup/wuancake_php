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
    <title>鬼扯天地 - 午安网 - 过你想过的生活</title>
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

                                echo "<a href='exit.php'>退出</a></li>";

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
            <li class="active"><a href="index.php">发现</a></li>
            <li><a href="myGroup.php">我的星球</a></li>
            <li><a href="groups.php">全部星球</a></li>
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
                            <?php
                            include_once "conn.php";
                            $groupID=empty($_GET['groupID'])?1:$_GET['groupID'];
                            $userID=$_COOKIE['userID'];
                            //输出小组名
                            $sql="SELECT name FROM group_base WHERE ID='$groupID'";
                            $query=mysql_query($sql,$conn);
                            $arr=mysql_fetch_array($query);
                            $groupName=$arr['name'];
                            echo '<h2 class="pull-left">'.$groupName.'</h2>';
                            //判断用户以是否加入小组

                            $sql2="SELECT userID FROM group_detail WHERE ID='$groupID' AND userID='$userID'";
                            $query2=mysql_query($sql2,$conn);
                            $arr2=mysql_fetch_array($query2);
                            if(isset($_COOKIE['nickName'])) {
                                if(!empty($arr2)){
                                        echo '<a href="createPosts.php" class="pull-right btn btn-primary">发帖</a>';
                                    }else{
                                        echo "<a href=\"enterGroup.php?groupID=".$groupID."\" class=\"pull-right btn btn-primary\">加入</a>";
                                    }
                            }else{
                                echo '<a href="login.php" class="pull-right btn btn-primary">加入</a>';
                            }
                            ?>
                    </div>

                    <!-- 请判断帖子是否存在图片需要展示，判断后决定输出的模板 第一个是有图 第二个是无图-->
                    <?php
                    $sql="SELECT pb.title,pd.text,pd.createTime,pb.ID,pb.userID,ub.nickName \n"
                    . "FROM post_base pb,post_detail pd,user_base ub \n"
                    . "WHERE pb.groupID=$groupID \n"
                    . "AND pb.ID = pd.ID \n"
                    . "AND pb.userID = ub.ID \n"
                    . "AND pd.floor = '1' \n"
                    . " ORDER BY createTime DESC";
                    $result = mysql_query($sql);

            while ($row = mysql_fetch_array($result)) {
            ?>
            <article>
                <?php
                echo "<h3><a href=\"posts.php?P_ID=" . $row['ID'] . "\">" . $row['title'] . "</a></h3>";
                ?>
                <div class="delete-float">
                    <div class="pull-left container-content">
                        <?php
                        echo "<p>" . $row['title'] . "</p>";
                        ?>
                    </div>
                    <div class="pull-right container-img">
                        <img src="image/logo-1x.png">
                    </div>
                </div>
                <footer class="footer">
                    <?php
                    echo "<span class=\"pull-left\"><a href=\"\">" . $row['nickName'] . "</a> 发表于 <a href=\"\">" . $groupName . "</a></span>";
                    echo "<span class=\"pull-right\">" . $row['createTime'] . "</span>";
                    ?>
                </footer>
            </article>
            <?php
            }
            ?>

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