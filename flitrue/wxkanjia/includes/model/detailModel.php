<?php

/**
 * User: flitrue
 * Date: 2016/7/12
 * Link:
 */

require_once 'includes/SqlHelper.class.php';
include 'includes/conn.php';

class detailModel
{
    // 从数据库中获取商品展示的信息
    public function getShopInfo($userid,$shopinfo_id)
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql="SELECT * FROM wx_user u, wx_shopinfo i, wx_shop s WHERE i.shopinfo_id = $shopinfo_id AND s.shop_id=i.shop_id AND u.user_id = $userid AND i.user_id = u.user_id";
        $arr = $conn->execute_dql_resfree($sql);
        $conn->close_connect();
        return $arr;
    }

    // 从数据库中获取微信用户是否在一个月内砍价
    public function getUserInfo($openid)
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql = "SELECT * FROM wx_voteinfo o ,wx_vote v WHERE o.openid=v.openid AND o.openid = $openid";
        $arr = $conn->execute_dql_resfree($sql);
        $conn->close_connect();
        return $arr;
    }
    // 从数据库中检索 所有给这个车主砍价的用户信息  用户id 用户昵称 用户砍价时间 用户砍掉的价格
    public function getVoteInfo($shopinfo_id)
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql="SELECT * FROM wx_vote v ,wx_voteinfo o , wx_shopinfo i WHERE v.openid=o.openid AND v.vote_id =i.vote_id AND i.shopinfo_id=$shopinfo_id";
        $arr = $conn->execute_dql_resfree($sql);
        $conn->close_connect();
        return $arr;
    }
}