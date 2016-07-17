<?php
/**
 * User: flitrue
 * Date: 2016/7/12
 * Link:
 */
include 'includes/conf.php';
include 'includes/common.php';
include 'includes/controller/detailController.php';

require_once "jssdk.php";
require 'libraries/smarty/Smarty.class.php';

/*$appid = APPID;
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
$redirect_url=urlencode($url);
$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_url&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
header('Location:'.$url);*/

$smarty = new Smarty;

//$smarty->force_compile = true;//强制编译
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->left_delimiter="{";
$smarty->right_delimiter="}";

@$userid = $_GET['userid'];
@$shopinfo_id = $_GET['shopinfo_id'];


$jssdk = new JSSDK(APPID, SECRET);
$signPackage = $jssdk->getSignPackage();
$smarty->assign("signPackage_appid",$signPackage['appId']);
$smarty->assign("signPackage_timestamp",$signPackage['timestamp']);
$smarty->assign("signPackage_noncestr",$signPackage['nonceStr']);
$smarty->assign("signPackage_signature",$signPackage['signature']);
$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
$smarty->assign("link",$link);
// 从数据库中检索 所有给这个车主砍价的用户信息  用户id 用户昵称 用户砍价时间 用户砍掉的价格
$detail = new detailController();
$voteinfo = $detail->getVoteInfo($shopinfo_id);
$smarty->assign("voteinfo",$voteinfo);
$arr = $detail->getShopInfo($userid,$shopinfo_id);
$username = $arr[0]['user_name'];
$user_mes = $arr[0]['user_mes'];
$shop_mes = $arr[0]['shop_mes'];
$user_mark = $arr[0]['user_mark'];
$shopinfo_num = $arr[0]['shopinfo_num'];
$username = $arr[0]['user_name'];
$smarty->assign("userid",$userid);
$smarty->assign("username",$username);
$smarty->assign("user_mes",$user_mes);
$smarty->assign("shop_mes",$shop_mes);
$smarty->assign("user_mark",$user_mark);
$smarty->assign("shopinfo_num",$shopinfo_num);
$smarty->display('detail.html');