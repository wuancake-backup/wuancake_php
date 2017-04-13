<div class="write">
    <?php if(!empty($_SESSION['credentials'])){?>
    <form action="http://localhost/codeigniter/index.php/blog/" method="get"></form>
    <div class="write_1">
        <input type="text" placeholder="请输入文章标题" class="write_2">
    </div>

    <div class="write_3">
        <textarea class="write_4"></textarea>
    </div>

    <div class="write_5">
        <input type="submit" value="发 表" class="write_6">
        <input type="reset" value="取消" class="write_7">
    </div>
    </form>
    <?php }else{?>
        <div class="write_8">非法访问！请先登录！</div>
    <?php } ?>
</div>