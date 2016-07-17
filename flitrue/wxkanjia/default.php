<?php
/**
 * User: flitrue
 * Date: 2016/7/10
 * Link:
 */

include 'includes/conf.php';
include 'includes/common.php';
include 'includes/controller/defaultController.php';

require 'libraries/smarty/Smarty.class.php';
require_once "jssdk.php";

$smarty = new Smarty;

//$smarty->force_compile = true;//强制编译
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->left_delimiter="{";
$smarty->right_delimiter="}";

@$code = $_GET['code'];
session_start();
$_SESSION['code'] = $code;
@$adminid = $_GET['adminid'];

$default = new defaultController(APPID,SECRET,$code);
$arr = $default->getShopinfoAll();

$jssdk = new JSSDK(APPID, SECRET);

$signPackage = $jssdk->getSignPackage();
$smarty->assign("signPackage_appid",$signPackage['appId']);
$smarty->assign("signPackage_timestamp",$signPackage['timestamp']);
$smarty->assign("signPackage_noncestr",$signPackage['nonceStr']);
$smarty->assign("signPackage_signature",$signPackage['signature']);
$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
$smarty->assign("link",$link);
$smarty->assign("arr",$arr);
$smarty->assign("xiangqing","点炮竹的详情"); // TODO
$smarty->assign("guize","点炮竹的规则");
$smarty->assign("joinnum",count($arr)); //参加人数

$smarty->display('default.html');