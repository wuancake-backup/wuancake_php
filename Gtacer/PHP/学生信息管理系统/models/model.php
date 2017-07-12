<?php
    class MysqliConnect
    {
        private $connect;
        public function __construct(){
            $this->connect=new mysqli('localhost','root','root','student_info');
            if($this->connect->connect_error)
                die('连接数据库失败'.$this->connect->connect_error);
            $this->connect->query('SET NAMES UTF8');
        }

        public function login($username,$password){
            $username=addslashes($username);
            $password=addslashes($password);
            $sql="SELECT name,password FROM administrator WHERE name='$username' AND password='$password'";
            $res=$this->connect->query($sql);
            if($res->num_rows)
                return 1;
            else
                return -1;
        }

        public function get_total(){
            return $this->connect->query('SELECT COUNT(*) AS sum FROM student');
        }

        public function print_info($page){
            $offset=($page-1)*5;
            $sql="SELECT s.*,class,room FROM student as s LEFT JOIN class as c ON s.class_id = c.id LIMIT $offset,5;";
            return $this->connect->query($sql);
        }

        public function delete($id){
            $sql="DELETE FROM student WHERE id=$id";
            return $this->connect->query($sql);
        }

    }
?>