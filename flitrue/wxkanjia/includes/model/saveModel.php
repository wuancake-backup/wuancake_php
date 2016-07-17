<?php

/**
 * User: flitrue
 * Date: 2016/7/13
 * Link:
 */
include 'includes/SqlHelper.class.php';
include 'includes/conn.php';
class saveModel
{
    public function saveVoteInfo($openid,$vote_name,$vote_weixin,$vote_ip)
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql = "INSERT INTO wx_vote (vote_name,vote_weixin,vote_firsttime,vote_ip,vote_openid) VALUES ($vote_name,$vote_weixin,time(),$vote_ip,$openid)";
        $res = $conn->execute_dml($sql);
        $conn->close_connect();
        return $res;

    }

    public function updateVoteinfoLastTime($userid,$voteinfo_time)
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql = "UPDATE wx_voteinfo SET voteinfo_time=$voteinfo_time WHERE user_id=$userid";
        $res = $conn->execute_dml($sql);
        $conn->close_connect();
        return $res;
    }

    public function updateShopInfoPrice($userid,$shopinfotime){
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql = "UPDATE wx_shopinfo SET shopinfotime=$shopinfotime WHERE user_id=$userid";
        $res = $conn->execute_dml($sql);
        $conn->close_connect();
        return $res;
    }

    public function updateVoice($openid,$voice)
    {
        $conn = new SqlHelper(DBDATA,DBHOST,DBUSER,DBPWD);
        $sql = "UPDATE wx_vote SET vote_voice=$voice WHERE $openid=$openid";
        $res = $conn->execute_dml($sql);
        $conn->close_connect();
        return $res;
    }

    public function update()
    {

    }
}