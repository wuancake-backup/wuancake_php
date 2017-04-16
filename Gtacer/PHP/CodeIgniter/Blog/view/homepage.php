<!--        网页主内容：左侧，右侧内容栏-->
<div class="hp">
    <div class="all_left">
        <div class="cs2">个人资料</div>
        <div class="left">
            <img src="http://localhost/codeigniter/picture/me.png" style="padding:30px 0 0 68px;">
            <div class="left_1">Gtacer</div>
            <!--        判断是否为管理员登录，如果是的话显示发表博客按钮-->
            <?php if(!empty($_SESSION['credentials'])){?>
                <div class="left_2"><a href="http://localhost/codeigniter/index.php/blog/write_blog">发表博客</a></div>
            <?php }else{?>

            <?php }?>
        </div>
    </div>



    <!--            文章信息展示-->
    <div class="all_right">
        <div class="cs1">博文</div>
        <?php foreach ($title as $key=>$value){?>
            <div class="right">
                <div class="title">
                    <a href="http://localhost/codeigniter/index.php/blog/show_content/<?php echo $id[$key];?>" class="article_title"><?php echo htmlentities($value); ?></a>  <!--标题-->
                    <span class="article_date">(<?php echo $date[$key]; ?>)</span>       <!--日期-->
                </div>

                <div class="comment">
                    <table style="word-break:break-all;">
                        <tr VALIGN="TOP"><td style="width: 800px;">
                                <span class="article_content"><?php echo htmlentities($content[$key]); ?></span>  <!--内容-->
                            </td></tr>
                    </table>
                </div>

                <div>
                    <div class="read_all"><a href="http://localhost/codeigniter/index.php/blog/show_content/<?php echo $id[$key];?>">阅读本文</a></div>
                    <hr />
                </div>
            </div>
        <?php } ?>
        <div style="height: 30px;width:700px;background: #1a1a1a;float: left"></div>
    </div>
</div>

