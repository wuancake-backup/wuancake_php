<?php

/**
 * User: flitrue
 * Date: 2016/7/12
 * Link:
 */
include 'includes/model/detailModel.php';
class detailController
{
    // 从数据库中获取商品展示的信息
    public function getShopInfo($userid,$shopinfo_id)
    {
        $detail = new detailModel();
        $arr = $detail->getShopInfo($userid,$shopinfo_id);
        if ($arr != null && $arr != "")
        {
            return $arr;
        }else{
            return false;
        }
    }
    // 从数据库中获取微信砍价用户的openid
    public function getOpenId_db($openid)
    {
        $detail = new detailModel();
        $arr = $detail->getOpenId_db($openid);
        if ($arr != null && $arr != "")
        {
            return $arr;
        }else{
            return false;
        }
    }
    // 从数据库中检索 所有给这个车主砍价的用户信息  用户id 用户昵称 用户砍价时间 用户砍掉的价格
    public function getVoteInfo($shopinfo_id)
    {
        $detail = new detailModel();
        $arr = $detail->getVoteInfo($shopinfo_id);
        if ($arr != null && $arr != "")
        {
            return $arr;
        }else{
            return false;
        }
    }

}