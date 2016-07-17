<?php
/* Smarty version 3.1.29, created on 2016-07-16 14:32:17
  from "D:\php_envir\nginx\html\weixintest\wxkanjia\templates\default.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a4571bc5bd6_31971479',
  'file_dependency' => 
  array (
    '7b1a11ff64879b2f169b5dd00040abd292d4494f' => 
    array (
      0 => 'D:\\php_envir\\nginx\\html\\weixintest\\wxkanjia\\templates\\default.html',
      1 => 1468679202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578a4571bc5bd6_31971479 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo @constant('TITLE');?>
</title>
    <meta charset="UTF-8"/>
    <meta name="keywords" content="<?php echo @constant('TITLE');?>
"/>
    <meta name="description" content="<?php echo @constant('TITLE');?>
"/>
    <meta name="author" content="flitrue"/>
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta name="viewport" content="height=device-height,width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="libraries/weui/weui.min.css"/>
    <link rel="stylesheet" href="sources/css/main.css">

</head>
<body ontouchstart onload="startTime();">
    <div>
        <section class="header-img">
            <img class="img-responsive" style="width:380px;height:210px;" src="<?php echo @constant('HEADERIMG');?>
" onerror="javascript:this.src='http://placehold.it/380x210/'">
            <span class="daojishi"><label id="txt"></label></span>
        </section>
        <section>
            <h2>点炮竹  <small>点炮竹</small></h2>
        </section>
        <section> 参加人数：<?php echo $_smarty_tpl->tpl_vars['joinnum']->value;?>
</section>
    </div>

    <div id="box-img">
    <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
        <div class="div-box">
            <div class="list-detail">
                <label style="position:absolute;z-index: 20;"><?php echo $_smarty_tpl->tpl_vars['value']->value['user_mark'];?>
</label>
                <a href="detail.php?userid=<?php echo $_smarty_tpl->tpl_vars['value']->value['user_id'];?>
&shopinfo_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['shopinfo_id'];?>
" >
                    <img style="width:150px; height:200px;" class="img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['shop_imgpath'];?>
" onerror="javascript:this.src='http://placehold.it/150x200/'" alt="">
                </a>
            </div>
            <div class="list-toupiao">
                <div class="list-detail-info">
                    <label><?php echo $_smarty_tpl->tpl_vars['value']->value['user_name'];?>
</label><br>
                    <label><?php echo $_smarty_tpl->tpl_vars['value']->value['shopinfo_num'];?>
票</label>
                </div>
                <div class="list-detail-toupiao" onclick="window.location.href='detail.php?userid=<?php echo $_smarty_tpl->tpl_vars['value']->value['user_id'];?>
&shopinfo_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['shopinfo_id'];?>
'">
                    砍
                </div>
            </div>
        </div>
    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
    </div>

    <div>
        <h2><?php echo $_smarty_tpl->tpl_vars['xiangqing']->value;?>
</h2>
        <div id="xiangqing"><?php echo $_smarty_tpl->tpl_vars['xiangqing']->value;?>
</div>
        <h2><?php echo $_smarty_tpl->tpl_vars['guize']->value;?>
</h2>
        <div id="guize"><?php echo $_smarty_tpl->tpl_vars['guize']->value;?>
</div>
    </div>
</body>
<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="sources/js/daojishi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    wx.config({
        debug: true,  //开启调试
        appId: '<?php echo $_smarty_tpl->tpl_vars['signPackage_appid']->value;?>
',
        timestamp: <?php echo $_smarty_tpl->tpl_vars['signPackage_timestamp']->value;?>
,
        nonceStr: '<?php echo $_smarty_tpl->tpl_vars['signPackage_noncestr']->value;?>
',
        signature: '<?php echo $_smarty_tpl->tpl_vars['signPackage_signature']->value;?>
',
        jsApiList: [
        // 所有要调用的 API 都要加到这个列表中
            "onMenuShareTimeline",
            "onMenuShareAppMessage",
            "onMenuShareQQ ",
            "downloadImage",
            "openLocation",
            "getLocation",
            "showMenuItems"
    ]
    });
    wx.ready(function () {
        // 在这里调用 API

        wx.onMenuShareTimeline({
            title: '<?php echo @constant('TITLE');?>
正在进行中', // 分享标题
            link: 'http://<?php echo @constant('WEBNAME');?>
default.php', // 分享链接
            imgUrl: '<?php echo @constant('COPYIMGURL');?>
', // 分享图标
            success: function () {

            },
            cancel: function () {

            }
        });
        wx.onMenuShareAppMessage({
            title: '<?php echo @constant('TITLE');?>
', // 分享标题
            desc: '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
正在参加<?php echo @constant('TITLE');?>
，快来给我点炮吧！', // 分享描述
            link: '', // 分享链接
            imgUrl: '<?php echo @constant('COPYIMGURL');?>
', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },

            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });

    });

<?php echo '</script'; ?>
>
</html><?php }
}
