<?php
	include 'db.class.php';

	class MessageService{

		function addMessage($sender,$getter,$content){
			
			$sql="INSERT into messages (sender,getter,content,sendTime) values ('$sender','$getter','$content',now())";
			
			$conn=DB::getInstance();
			$conn->connect();
			$res=$conn->execute_dml($sql);
			return $res;
			unset($res);
			$conn->closeDB();
		}

		function getMessage($sender,$getter){

			/*$sql=<<<EOF
			select * from messages where getter='$getter' and sender='$sender' and isGet=0;
EOF;*/
			$sql="select * from messages where getter='$getter' and sender='$sender' and isGet=0";
			$conn=DB::getInstance();
			$conn->connect();
			try {
				$res=$conn->execute_dql($sql);	
			} catch (Exception $e) {
				file_put_contents("d:/mylog.txt",$sql.$e,FILE_APPEND);
			}
			return $res;
			$conn->free_result($res);
			$conn->closeDB();
		}
	}