<?php

class DB{
	private static $_conn=null;
	private static $_instance;
	private $Config=array(
		'host'=>'127.0.0.1',
		'user'=>'root',
		'password'=>'root',
		'port'=>80,
		'database'=>'chat'
	);

	private function __construct(){
		
	}

	public static function getInstance(){
		if(!(self::$_instance instanceof self)){
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function connect() {
		if(!self::$_conn) {
			self::$_conn=new mysqli($this->Config['host'], $this->Config['user'], $this->Config['password'],$this->Config['database']);	

			if(!self::$_conn) {
				throw new Exception('mysql connect error ' . self::$_conn->connect_error());
				//die('mysql connect error' . mysqli_connect_error());
			}
			
			self::$_conn->select_db($this->Config['database']);
			self::$_conn->set_charset('utf8');
		}
		return self::$_conn;
	}

	//禁止克隆
	private function __clone(){

	}

	public function execute_dml($sql){

		$res=self::$_conn->query($sql);
		
		if(!$res){
			return 0;//失败
		}else{
			if (self::$_conn->affected_rows>0){
				return 1;//执行成功
			}else{
				return 2;//没有影响行数
			}
		}
	}

	public function execute_dql ($sql){
		$res=self::$_conn->query($sql);
		while($row=self::$_conn->fetch_assoc($res)){
			$arr[]=$row;
		}
		return $arr;
		self::$_conn->free_result($res);
	}

	public function closeDB(){
		self::$_conn->close();
	}


}