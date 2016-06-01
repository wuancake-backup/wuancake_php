<?php
class SqlHelper{
	private $conn;
	private $host="localhost";
	private $user="root";
	private $password="root";
	private $db="chat";
	function __construct(){
		$this->conn=mysql_connect($this->host,$this->user,$this->password) or die(mysql_error());
		mysql_query("set names utf8") or die(mysql_error());
		mysql_select_db($this->db,$this->conn) or die(mysql_error());
	}
	function execute_dql($sql){
		$res=mysql_query($sql,$this->conn) or die(mysql_error());
		return $res;
	}
	//执行dql语句，但是返回的是数组，并且立即释放资源
	function execute_dql_resfree($sql){
		$arr=array();
		$i=0;
		$res=mysql_query($sql,$this->conn) or die(mysql_error());
		while ($row=mysql_fetch_assoc($res)){
			$arr[$i++]=$row;
		}
		mysql_free_result($res);
		return $arr;
	}
	function execute_dml($sql){
		$res=mysql_query($sql,$this->conn) or die(mysql_error());
		if(!$res){
			return 0;//失败
		}else {
			if (mysql_affected_rows($this->conn)>0) {
				return 1;//执行成功
			}else {
				return 2;//没有行数影响
			}
		}
		
	}
	//一个通用的关于分页的方法
	function execute_dql_fenye($sql1,$sql2,&$fenyePage){
		$res=mysql_query($sql1,$this->conn) or die(mysql_error());
		$arr=array();
		//把$res中的结果集转移到$arr数组中
		while ($row=mysql_fetch_assoc($res)){
			$arr[]=$row;
		}
		mysql_free_result($res);
		$res2=mysql_query($sql2,$this->conn) or die(mysql_error());
		$rowCount=mysql_num_rows($res2);		
		mysql_free_result($res2);
		$fenyePage->setPageCount(ceil($rowCount/$fenyePage->getPageSize()));
		$fenyePage->setRowCount($rowCount);
		$fenyePage->setRes_array($arr);
		
		$navigate="<a href='{$fenyePage->getGotoUrl()}?pageNow=1'>首页</a>&nbsp;&nbsp;&nbsp;";
		if($fenyePage->getPageNow()>1){
			$prePage=$fenyePage->getPageNow()-1;
			$navigate.="<a href='{$fenyePage->getGotoUrl()}?pageNow=$prePage'>上一页</a>&nbsp;&nbsp;&nbsp;";
		}
		$page_whole=10;
		if ($page_whole>$fenyePage->getPageCount()) {
			$page_whole=$fenyePage->getPageCount();
		}
		
		$start=floor(($fenyePage->getPageNow()-1)/$page_whole)*$page_whole+1;
		$index=$start;
		if($fenyePage->getPageNow()>$page_whole){
			$navigate.="<a href='{$fenyePage->getGotoUrl()}?pageNow=".($start-1)."'><<</a>&nbsp;";
		}
		
		for ($start=$index;$start<$index+$page_whole;$start++){
			$navigate.="<a href='{$fenyePage->getGotoUrl()}?pageNow=$start'>$start</a>&nbsp;&nbsp;&nbsp;";
		}
		if($fenyePage->getPageNow()<=$fenyePage->getPageCount()-$page_whole){
			$navigate.="<a href='{$fenyePage->getGotoUrl()}?pageNow=$start'>>></a>&nbsp;";
		}
		
		
		if($fenyePage->getPageNow()<$fenyePage->getPageCount()){
			$nextPage=$fenyePage->getPageNow()+1;
			$navigate.="<a href='{$fenyePage->getGotoUrl()}?pageNow=$nextPage'>下一页</a>&nbsp;&nbsp;&nbsp;";
		}
		$navigate.="<a href='{$fenyePage->getGotoUrl()}?pageNow={$fenyePage->getPageCount()}'>末页</a>&nbsp;&nbsp;&nbsp;";
		$navigate.="当前页{$fenyePage->getPageNow()}/共{$fenyePage->getPageCount()}页";
		$fenyePage->setNavigate($navigate);
	}
	function close_connect(){
		if(!empty($this->conn)){
			mysql_close($this->conn);
		}
	}
}
?>
