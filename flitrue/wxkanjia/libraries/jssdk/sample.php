<?php
require_once "jssdk.php";
//$jssdk = new JSSDK("wxb5ae1af6a0264224", "d2434db2ad7453ed520145f7b1b178ce");
$jssdk = new JSSDK("wxafa6d6b6289cbbc7", "271c8d479931f6433be846c5f89ffdf9");

$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta charset="UTF-8">
  <title>微信砍价</title>
</head>
<body>
  <img src="http://placehold.it/300x150"/>
  <botton id="btn">sure</botton>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
      "onMenuShareTimeline",
      "onMenuShareAppMessage",
      "onMenuShareQQ ",
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
      "openLocation",
      "getLocation"
    ]
  });
  wx.ready(function () {
    // 在这里调用 API
    wx.openLocation({
    latitude: 25, // 纬度，浮点数，范围为90 ~ -90
    longitude: 110, // 经度，浮点数，范围为180 ~ -180。
    name: '运城学院', // 位置名
    address: '山西省运城市盐湖区运城学院', // 地址详情说明
    scale: 15, // 地图缩放级别,整形值,范围从1~28。默认为最大
    infoUrl: 'www.flitrue.com' // 在查看位置界面底部显示的超链接,可点击跳转
    });
  });
</script>
</html>
