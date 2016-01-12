<?php
    function smarty_block_test1($params,$content){
        $replace=$params['replace'];
        $maxnum=$params['maxnum'];
        if($replace == "true"){
            $content=str_replace('，',',',$content);
            $content=str_replace('。','.',$content);
        }
        $content=substr($content,0,$maxnum);
        return $content;
    }

/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2015/12/27
 * Time: 19:37
 */