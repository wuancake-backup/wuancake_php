<?php
class mysql{
    function err($error){
        die ("对不起，你的操作有误，错误原因为：".$error);
    }



    function connect($config){
        extract($config);
        if (!($con=mysql_connect($dbhost,$dbuser,$dbpsw))){
            $this->err(mysql_error());
        }
        if (!mysql_select_db($dbname,$con)){
            $this->err(mysql_error());
        }
        mysql_query("set names".$dbcharset);
    }


    function query($sql){
        if(!($query=mysql_query($sql))){
            $this->err($sql."<br/>".mysql_error());
        }else{
            return $query;
        }
    }


    function findAll($query){
        while($rs=mysql_fetch_array($query,MYSQL_ASSOC)){
            $list[]=$rs;
        }
        return isset($list)?$list:"";
    }


    function findOne($query){
        $rs=mysql_fetch_array($query,MYSQL_ASSOC);
        return $rs;
    }

    function findResult($query,$row=0,$field=0){
        $rs=mysql_result($query,$row,$field);
        return $rs;
    }


    //添加
    function insert($table,$arr){
        foreach($arr as $key => $value){
            $value=mysql_real_escape_string($value);
            $keyArr[]="`".$key."`";
            $valueArr[]="`".$value."`";
        }
        $keys=implode(",",$keyArr);
        $values=implode(",",$valueArr);
        $sql="insert into ".$table."(".$keys.") values(".$values.")";
        $this->query($sql);
        return mysql_insert_id();
    }

    //修改
    function update($table,$arr,$where){
        foreach($arr as $key => $value){
            $value=mysql_real_escape_string($value);
            $keyAndvalueArr[]="`".$key."`='".$value."'";
        }
        $keyAndvalues=implode(",",$keyAndvalueArr);
        $sql="update".$table."set".$keyAndvalues."where".$where;
        $this->query($sql);
    }


    function del($table,$where){
        $sql="delete from".$table."where".$where;
        $this->query($sql);
    }
}
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/1
 * Time: 13:13
 */