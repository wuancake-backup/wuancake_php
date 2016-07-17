<?php
/**
 * User: flitrue
 * Date: 2016/7/16
 * Link:
 */
include 'includes/controller/conf.php';
include 'includes/controller/saveController.php';
include 'includes/controller/getController.php';
session_start();
if (isset($_SESSION['code'])){
    $code = $_SESSION['code'];
} else {
    header("location:index.php");
    exit();
}

$data = json_decode(get_php_file("access_token.php"));
$accessToken = $data->access_token;
$media_id = $_GET['media_id'];
$user_mark =$_GET['user_mark'];

// 要存在你服务器哪个位置？

$path = strtolower("sources/voices/$user_mark/");
if (!file_exists($path)){
    mkdir($path,0700);
}
$targetName = $path.date('YmdHis').'.amr';
file_put_contents($user_mark,$targetName);

$ch = curl_init("http://file.api.weixin.qq.com/cgi-bin/media/get?access_token={$accessToken}&media_id={$media_id}");
$fp = fopen($targetName, 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);

$default = new getController(APPID,SECRET,$code);  

$save = new saveController();
$res = $save->updateVoice($openid,$targetName);
if($res){
    echo "保存成功";
}else {
    echo "保存失败";
}

$result = array(
    "access_token"=>$accessToken,
    "media_id"=>$media_id,
    "user_mark"=>$user_mark,
    "code"=>200
);
echo json_encode($result);
function get_php_file($filename) {
    $arr = array();
    if(file_exists($filename))
    {
        $subject = file_get_contents($filename);
        preg_match_all("/{\"jsapi_ticket\":\"\",\"expire_time\":0}/",$subject,$arr);
        if (count($arr) == 1)
        {
            return trim(substr(file_get_contents($filename), 15));
        }else{
            return trim(substr(file_get_contents($filename), 15));
        }
    }
}
