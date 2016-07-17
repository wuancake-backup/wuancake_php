<?php
/* Smarty version 3.1.29, created on 2016-07-16 14:47:16
  from "D:\php_envir\nginx\html\weixintest\wxkanjia\templates\detail.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a48f4bded19_62914179',
  'file_dependency' => 
  array (
    'fcee249599254fc01ee985c79423f7c77220890d' => 
    array (
      0 => 'D:\\php_envir\\nginx\\html\\weixintest\\wxkanjia\\templates\\detail.html',
      1 => 1468680042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578a48f4bded19_62914179 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
正在参加<?php echo @constant('TITLE');?>
</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="flitrue">
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
    <div class="container">
        <p>录音成功以后，可以砍价</p>
        <div>
            <label>编号:<?php echo $_smarty_tpl->tpl_vars['user_mark']->value;?>
</label>&nbsp;&nbsp;<label>姓名:<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</label>
            <label class="pull-right">砍价人数:<?php echo $_smarty_tpl->tpl_vars['shopinfo_num']->value;?>
</label>
            <label>宣言:<?php echo $_smarty_tpl->tpl_vars['user_mes']->value;?>
</label>
        </div>
        <div  id="detail-img">
            <img src="http://placehold.it/340x450/">
        </div>

        <div class="bd spacing">
            <a href="javascript:;" class="weui_btn weui_btn_primary" id="startrecord">开始录音</a>
            <a href="javascript:;" class="weui_btn weui_btn_primary" id="stoprecord">停止录音</a>
            <a href="javascript:;" class="weui_btn weui_btn_primary" id="playvoice">播放声音</a>
            <a href="javascript:;" class="weui_btn weui_btn_primary" id="pausevoice">暂停声音</a>
            <a href="javascript:;" class="weui_btn weui_btn_primary" id="stopvoice">停止声音</a>
            <a href="javascript:;" class="weui_btn weui_btn_primary" id="uploadvoice">上传声音</a>
            <a href="javascript:;" class="weui_btn weui_btn_primary" id="toupiao">砍一刀</a>
        </div>
        <div>
            <h2>商品详情<span class="caret"></span></h2>
            <p class="text-success"><?php echo $_smarty_tpl->tpl_vars['shop_mes']->value;?>
</p>
        </div>
        <div>
            <h2>砍价规则<span class="caret"></span></h2>
            <p class="text-success bg-danger">一个微信号30天之内只能砍一次。</p>
        </div>
        <h2>亲友团<span class="caret"></span></h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>昵称</th>
                    <th>砍掉价格</th>
                    <th>砍价时间</th>
                </tr>
                </thead>
                <tbody>
                <tr class="danger">
                    <th class="text-nowrap" scope="row">flitrue</th>
                    <td>1元</td>
                    <td>7月16日</td>
                </tr>
                <tr class="success">
                    <th class="text-nowrap" scope="row">郭朝</th>
                    <td>2元</td>
                    <td>7月18日</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="weui_dialog_confirm" id="dialog1" style="display: none;">
            <div class="weui_mask"></div>
            <div class="weui_dialog">
                <div class="weui_dialog_hd" ><strong class="weui_dialog_title">请录音</strong></div>
                <div class="weui_dialog_bd">点击确定，录入你的投票声音；点击取消，使用默认的投票声音</div>
                <div class="weui_dialog_ft">
                    <a href="javascript:;" id="luyincancal" class="weui_btn_dialog default">取消</a>
                    <a href="javascript:;" id="luyinsure" class="weui_btn_dialog primary">确定</a>
                </div>
            </div>
        </div>
        <!--BEGIN toast-->
        <div id="toast" style="display: none;">
            <div class="weui_mask_transparent"></div>
            <div class="weui_toast">
                <i class="weui_icon_toast"></i>
                <p class="weui_toast_content">已完成</p>
            </div>
        </div>
        <!--end toast-->
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
            "onMenuShareQQ",
            "startRecord",
            "stopRecord",
            "onVoiceRecordEnd",
            "playVoice",
            "pauseVoice",
            "stopVoice",
            "onVoicePlayEnd ",
            "uploadVoice",
            "downloadVoice",
            "downloadImage",
            "translateVoice",
            "closeWindow"
        ]
    });
    wx.ready(function () {

        wx.onMenuShareTimeline({
            title: '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
正在参加<?php echo @constant('TITLE');?>
', // 分享标题
            link: '<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
', // 分享链接
            imgUrl: '<?php echo @constant('COPYIMGURL');?>
', // 分享图标
            success: function () {

            },
            cancel: function () {

            }
        });
        wx.onMenuShareAppMessage({
            title: '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
正在参加<?php echo @constant('TITLE');?>
', // 分享标题
            desc: '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
正在参加<?php echo @constant('TITLE');?>
，快来给我点炮吧！', // 分享描述
            link: '<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
', // 分享链接
            imgUrl: '<?php echo @constant('COPYIMGURL');?>
', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },

            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        var voice = {
            localId: '',
            serverId: ''
        };
        $("#startrecord").on("click",function () {
            wx.startRecord({
                fail: function () {
                    wx.closeWindow();
                },
                cancel: function () {
                    alert('您已拒绝授权录音');
                }
            });

        });

        $("#stoprecord").on("click",function () {
            wx.stopRecord({
                success: function (res) {
                    voice.localId = res.localId;
                }
            });
        });
        //监听是否录制完成
        wx.onVoiceRecordEnd({
            complete: function (res) {
                voice.localId = res.localId;
                alert('录音时间已超过一分钟');
            }
        });
        $("#playvoice").on("click",function (){
            if (voice.localId == '') {
                alert('请先点击“开始录音” 按钮录制一段声音');
                return;
            }
            wx.playVoice({
                localId: voice.localId
            });
        });

        $("#stopvoice").on("click",function () {
            wx.pauseVoice({
                localId: voice.localId
            });
        });
        $("#pausevoice").on("click",function () {
            wx.pauseVoice({
                localId: voice.localId
            });
        });
        //监听是否播放停止
        wx.onVoicePlayEnd({
            complete: function (res) {
                alert('录音（' + res.localId + '）播放结束');
            }
        });
        var http_request;
        $("#uploadvoice").on("click",function () {
            if (voice.localId == '') {
                alert('请先点击“开始录音” 按钮录制一段声音');
                return;
            }
            wx.uploadVoice({
                localId: voice.localId,
                success: function (res){
                    voice.serverId = res.serverId;
                    http_request=new XMLHttpRequest();
                    if(http_request){
                        var url="save.php?user_mark="+voice.serverId;
                        http_request.open("GET",url,true);
                        http_request.onreadystatechange=chuli;
                        http_request.send();
                    }
                }
            });
        })
    });
    $("#toupiao").on("click",function () {
        alert("投票成功")
    });
    function chuli(){
        if(http_request.readyState==4){
            if(http_request.status==200){
                alert("上传成功")
            }
        }
    }
<?php echo '</script'; ?>
>
</html>
<?php }
}
