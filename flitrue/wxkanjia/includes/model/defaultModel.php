<?php

/**
 * User: flitrue
 * Date: 2016/7/12
 * Link:
 */
include 'includes/SqlHelper.class.php';
include 'includes/conn.php';

class defaultModel
{
    //查询投票信息的所有记录
    public function getShopInfo()
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql="SELECT shopinfo_id, u.user_id, user_name, user_mark,shopinfo_num, shop_imgpath, shopinfo_title FROM wx_user u, wx_shopinfo i, wx_shop p WHERE shopinfo_sign=1 AND u.user_id=i.user_id AND i.shop_id=p.shop_id";
        $arr = $conn->execute_dql_resfree($sql);
        $conn->close_connect();
        return $arr;
    }

    //通过用户名查询个人信息的记录
    /**
     * @param $username
     * @return array|bool
     */
    public function getUserShopInfo($username)
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql="SELECT shopinfo_id, user_id, user_name, shopinfo_num, shop_imgpath, shopinfo_title FROM wx_user u, wx_shopinfo i, wx_shop p WHERE shopinfo_sign=1 AND u.user_id=i.user_id AND i.shop_id=p.shop_id AND user_name=$username";
        $arr = $conn->execute_dql_resfree($sql);
        $conn->close_connect();
        return $arr;

    }

    //模糊查询个人信息的记录
    public function getUserShopInfo_M($username)
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql="SELECT shopinfo_id, user_name, shopinfo_num, shop_imgpath, shopinfo_title FROM wx_user u, wx_shopinfo i, wx_shop p WHERE shopinfo_sign=1 AND u.user_id=i.user_id AND i.shop_id=p.shop_id AND user_name like "."'%$username%'";
        $arr = $conn->execute_dql_resfree($sql);
        $conn->close_connect();
        return $arr;
    }
}