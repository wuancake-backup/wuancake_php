<div class="login">
    <?php
        if(empty($_SESSION['credentials'])){
    ?>
    <form action="http://localhost/codeigniter/index.php/blog/login/" method="post">
        <div class="login_1">
            <div class="login_2">用户名：<input type="text" name="name"></div><br/>
            <div class="login_3">密码：<input type="password" name="password"></div><br/>
            <div class="login_4"><input type="submit" value="登录">&nbsp;&nbsp;&nbsp;<input type="reset" value="重新输入"></div>
        </div>
    </form>
    <?php }else{ ?>
            <div class="login_1">
                <div style="color: dodgerblue;font-size: 50px; ">你已登录！</div><br/>
                <a href="http://localhost/codeigniter/index.php/blog" style="font-size: 48px;margin: ">点击返回首页</a>
            </div>
        <?php } ?>
</div>