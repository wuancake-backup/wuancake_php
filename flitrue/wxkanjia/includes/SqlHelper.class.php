<?php
/**
 * User: flitrue
 * Date: 2016/7/9
 * Link:
 */
class SqlHelper{
	private $conn;
	private $host;
	private $user;
	private $pwd;
	private $db;
	function __construct($db,$dbhost='localhost',$dbuser='root',$dbpwd='root'){
        $this->host=$dbhost;
        $this->user=$dbuser;
        $this->pwd=$dbpwd;
        $this->db=$db;

        $this->conn = new mysqli($this->host,$this->user,$this->pwd,$this->db);
        if ($this->conn->connect_errno){
            die("数据库连接错误！");
        }
        $this->conn->query("set names utf8");
	}

	function execute_dql($sql){
		$res=mysqli_query($this->conn,$sql) or die($this->conn->error);
		return $res;
	}
	//执行dql语句，但是返回的是数组，并且立即释放资源
	function execute_dql_resfree($sql){
		$arr=array();
		$i=0;
		$res=mysqli_query($this->conn,$sql) or die($this->conn->error);
		while ($row=mysqli_fetch_assoc($res)){
			$arr[$i++]=$row;
		}
		mysqli_free_result($res);
		return $arr;
	}
	function execute_dml($sql){
		$res=mysqli_query($this->conn,$sql) or die($this->conn->error);
		if(!$res){
			return 0;
		}else {
			if (mysqli_affected_rows($this->conn)>0) {
				return 1;
			}else {
				return 2;
			}
		}
		
	}
	//一个通用的关于分页的方法
	function execute_dql_fenye($sql1,$sql2,&$fenyePage){
		$res=mysqli_query($this->conn,$sql1) or die($this->conn->error);
		$arr=array();
		//把$res中的结果集转移到$arr数组中
		while ($row=mysqli_fetch_assoc($res)){
			$arr[]=$row;
		}
		mysqli_free_result($res);
		$res2=mysqli_query($this->conn,$sql2) or die($this->conn->error);
		$rowCount=mysqli_num_rows($res2);
		mysqli_free_result($res2);
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
			mysqli_close($this->conn);
		}
	}
}
?>
