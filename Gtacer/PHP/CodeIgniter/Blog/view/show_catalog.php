<div class="catalog_box">
    <div class="cs3">全部博文</div>
    <?php foreach ($title as $key=>$value){?>
    <div class="catalog">
        <span><a href="http://localhost/codeigniter/index.php/blog/show_content/<?php echo $id[$key] ?>"><?php echo htmlentities($value); ?></a></span>
        <span class="article_date">(<?php echo $date[$key]; ?>)</span>
        <?php if(!empty($_SESSION['credentials'])){?>
            <span style="float: right;font-size: 15px;"><a href="http://localhost/codeigniter/index.php/blog/delete_message/2/<?php echo $id[$key];?>">删除</a></span>
        <?php }?>
        <hr/>
    </div>
    <?php } ?>

</div>
<div style="height: 50px;"></div>