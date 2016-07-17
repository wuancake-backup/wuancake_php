<?php
/**
 * User: flitrue
 * Date: 2016/7/10
 * Link:
 */
include 'includes/model/defaultModel.php';
class defaultController
{

    //获得所有参赛用户信息
    public  function getShopinfoAll()
    {
        $default = new defaultModel();
        $arr = $default->getShopInfo();
        if ($arr != null && $arr != "")
        {
            return $arr;
        }else{
            return false;
        }
    }

    //获得单个参赛用户信息
    public  function getUserShopInfo($username)
    {
        $default = new defaultModel();
        $arr = $default->getUserShopInfo($username);
        if ($arr != null || $arr != "")
        {
            return $arr;
        }else{
            return false;
        }
    }

    //模糊查询个人信息的记录
    public function getUserShopInfo_M($username)
    {
        $default = new defaultModel();
        $arr = $default->getUserShopInfo_M($username);
        if ($arr != null || $arr != "")
        {
            return $arr;
        }else{
            return false;
        }
    }

}
?>