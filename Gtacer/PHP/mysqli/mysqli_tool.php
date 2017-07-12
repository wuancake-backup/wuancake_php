<?php
    class db_tool
    {
        private $mysqli;
        private static $host = "localhost";
        private static $username = "root";
        private static $password = "root";
        private static $db = "test";

        public function __construct()
        {
            $this->mysqli = new mysqli(self::$host, self::$username, self::$password, self::$db);    //创建链接
            if ($this->mysqli->connect_error)
                die("连接失败" . $this->mysqli->connect_error);
            $this->mysqli->query("SET NAMES utf8");
        }

        public function execute_dql($sql){      //操作dql语句
            $res=$this->mysqli->query($sql) or die('操作dql语句失败！'.$this->mysqli->error);
            return $res;
        }

        public function execute_dml($sql){      //操作dml语句
            $res=$this->mysqli->query($sql) or die('操作dml语句失败！'.$this->mysqli->error);
            if(!$res)
                return 0;
            else if($this->mysqli->affected_rows>0)
                return 1;   //操作成功，且有行数受到影响
            else
                return 2;   //操作成功，但是没有行收到影响
        }

        public function execute_dmls($sql){     //操作多条dml语句
            $res=$this->mysqli->multi_query($sql) or die('操作失败'.$this->mysqli->error);
            $res=$this->mysqli->affected_rows;
            return $res;        //返回收到影响的行数
        }

        public function execute_dqls($sql){     //操作多条dql语句
            $res=$this->mysqli->multi_query($sql) or die ('操作失败'.$this->mysqli->error);
            do{
                $results=$this->mysqli->store_result();

                while($row=$results->fetch_row()){
                    foreach($row as $key=>$rel){
                        echo "-----$rel<br/>";
                    }
                }

                $results->free();
                if($this->mysqli->more_results())
                    break;
                echo "*********************<br/>";

            }while($this->mysqli->next_result());
        }
    }