<?php
/**
 * User: flitrue
 * Date: 2016/7/10
 * Link:
 */
   //和getUrlMethod.php中的url_get_contents()方法有所区别
   function httpGet($url) {
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

   function show_bug($msg){
      echo "<pre style='color:red'>";
      var_dump($msg);
      echo "</pre>";
   }