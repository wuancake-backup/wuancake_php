<?php

/**
 * User: flitrue
 * Date: 2016/7/17
 * Link:
 */
include 'includes/model/saveController.php';
class saveController
{
    public function updateVoice($openid,$voice)
    {
        $save = new saveController();
        $res = $save->updateVoice($openid,$voice);
        if($res == 1){
            return 1;
        } else {
            return 0;
        }
    }
}