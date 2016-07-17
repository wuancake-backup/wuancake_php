<?php
/**
 * @ User      flitrue
 * @ Date      2016/7/9
 * @ Describes This is a weixin's kanjia system.
 * @ Link
 */
if (!date_default_timezone_get()) {
    date_default_timezone_set("PRC");
}
$document_root = $_SERVER['DOCUMENT_ROOT'];
define("DOCUMENTROOT",$document_root);                                                       //网站根目录
define("WEBNAME","http://www.flitrue.com/wxkanjia/");                                               //网站域名，不要加http(s)协议头
define('ROOTPATH', dirname(__FILE__));                                                       //网站根目录
define("TOKEN", "flitrue");                                                                  //微信token
define("APPID","wxaf1519c557acbae3");                                                        //Appid
define("SECRET","45d48e9893e1e49a98b23eecec53c123");                                         //secret
define("REDIRECTURL","http://www.flitrue.com/wxkanjia/default.php");                         //跳转地址
define("TITLE","点炮竹");                                                                     //活动标题
define("HEADERIMG","http://placehold.it/380x210/8B7355/textcolor[&text=hello+world");        //活动头图
define("COPYIMGURL",WEBNAME."kelin.png");                                                    //版权图片

