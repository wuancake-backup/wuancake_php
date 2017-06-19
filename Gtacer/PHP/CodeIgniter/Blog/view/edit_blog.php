<script type="text/javascript" src="../../ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="../../ueditor/ueditor.all.js"></script>
<link rel="stylesheet" type="text/css" href="../../udeditor/themes/default/css" />

<div class="write">
    <?php if(!empty($_SESSION['credentials'])){?>
        <form action="http://localhost/codeigniter/index.php/blog/submit_edit_blog/<?php echo $id?>" method="get">
            <div class="write_1">
                <input type="text" placeholder="请输入文章标题" value="<?php echo $title?>" class="write_2" name="title" autocomplete="off" >
            </div>

            <div class="write_3">
                <textarea id="newsEditor" name="content" style="height: 80%"><?php echo $content?></textarea>
            </div>

            <div class="write_5">
                <input type="submit" value="发 表" class="write_6">
                <input type="reset" value="取消" class="write_7">
            </div>
        </form>
        <script type="text/javascript">
            UE.getEditor('newsEditor');
            // var content = UE.getPlainTxt();//content就是编辑器的带格式的内容
        </script>
    <?php }else{?>
        <div class="write_8">非法访问！请先登录！</div>
    <?php } ?>
</div>