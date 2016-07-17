<?php
/**
 * @ User      flitrue
 * @ Date      2016/7/9
 * @ Describes This is a weixin's kanjia system
 * @ Link      
 */
include 'includes/conf.php';

$appid=APPID;
$redirect_url=urlencode(REDIRECTURL);
$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_url&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
header('Location:'.$url);
// TODO 网页授权是否过期  判断每个页面是否授权，授权并且关注公众号才可投票


