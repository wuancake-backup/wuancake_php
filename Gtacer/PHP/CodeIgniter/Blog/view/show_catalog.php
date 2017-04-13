<div class="catalog_box">
    <div class="cs3">全部博文</div>
    <?php foreach ($title as $key=>$value){?>
    <div class="catalog">
        <span><a href="http://localhost/codeigniter/index.php/blog/show_content/<?php echo $id[$key] ?>"><?php echo $value; ?></a></span>
        <span class="article_date">(<?php echo $date[$key]; ?>)</span>
        <hr/>
    </div>
    <?php } ?>

</div>
<div style="height: 50px;"></div>