<?php

/**
 * User: flitrue
 * Date: 2016/7/12
 * Link:
 */
class getController
{
    public $appid;
    public $secret;
    public $code;
    public $access_token; // TODO 测试是否能出来accesstoken的值
    public $openid;

    public function __construct($appid,$secret,$code)
    {
        $this->appid=$appid;
        $this->secret=$secret;
        $this->code=$code;
    }


    public function getOpenId()
    {
        $data = $this->getAllInfo();
        $this->openid = $data->openid;
        return $this->openid;
    }

    // 获取网页授权access_token
    public function getAccessToken()
    {
        $data = json_decode($this->get_php_file("access_token.php"));
        if ($data->expire_time < time()) {
            //$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$this->appid&secret=$this->secret&code=$this->code&grant_type=authorization_code";
            //$json = $this->httpGet($url); // TODO 另一种方法获得accesstoken
            // 双重验证，一 验证过期时间 二 验证accesstoken是否有效
            $openid = $this->getOpenId();
            $this->access_token = $data->access_token;
            $errcode = $this->checkAccessToken($this->access_token,$openid);
            if ($errcode == 0) {
                $data->expire_time = time() + 7000;
                $this->set_php_file("access_token.php", json_encode($data));
            } else {
                // 否则从网络获取accesstoken
                $data = $this->getAllInfo();
                $this->access_token = $data->access_token;
            }
        } else {
            $this->access_token = $data->access_token;
        }
        return $this->access_token;
    }


    public function checkAccessToken($access_token,$openid)
    {
        $url = "https://api.weixin.qq.com/sns/auth?access_token=$access_token&openid=$openid";
        $json = json_decode($this->httpGet($url));
        if($json->errcode == 0)
        {
            return 1;//有效的access_token
        }else{
            return 0;//无效的access_token
        }
    }

    //获取网页授权access_token,openid等信息(通过code获取)
    public function getAllInfo()
    {
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$this->appid."&secret=".$this->secret."&code=".$this->code."&grant_type=authorization_code";
        $data = json_decode($this->httpGet($url)); //网络获取access_token,openid
        return $data;
    }


    //获取砍价用户信息
    public function getUserInfo(){
        $access_token = $this->getAccessToken();
        $openid = $this->getOpenId();
        $url="https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";
        $userinfo=file_get_contents($url);
        $userinfo=json_decode($userinfo);
        return $userinfo;
    }

    //和getUrlMethod.php中的url_get_contents()方法有所区别
    //TODO 优化
    private function httpGet($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);

        return $res;
    }

    private function get_php_file($filename) {
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

        }else{
            if ($arr == "jsapi_ticket")
            {
                $content = '<?php exit();?>'.json_encode($arr);
                self::set_php_file($filename,$content);
            }else{
                $token = "{\"access_token\":\"\",\"expire_time\":0}";
                $content = $token;
                self::set_php_file($filename,$content);
            }

        }

    }
    private function set_php_file($filename, $content) {
        $fp = fopen($filename, "w");
        fwrite($fp, "<?php exit();?>" . $content);
        fclose($fp);
    }

    // 获取砍价用户是否关注公众号
    public function getSubscribe()
    {
        $userinfo = $this->getUserInfo();
        $subscribe = json_decode($userinfo);
        if ($subscribe) {
            return 1;   // 已关注
        } else {
            return 0;   // 未关注
        }
    }
}