<?php
    class Login_model extends CI_Model{

        public function __construct(){
            parent::__construct();
            $this->load->database('default');
        }

        public function inquire_username($username)    //查询是否存在用户名
        {
            $query = $this->db->query("SELECT * FROM test WHERE name like '$username'");
            $row=$query->row();
            if(isset($row)) return 1;
            else return 0;
        }

        public function match_password($username,$password){      //查询密码是否正确
            $query = $this->db->query("SELECT * FROM test WHERE name like '$username'");
            $result=$query->result_array();
            $password=md5($password);
            if($password==$result[0]['password'])    return 1;
            else return 0;
        }

        public function register($username,$password){
            $password=md5($password);
            $data=array(
                'name'=>"$username",
                'password'=>"$password"
            );
            $this->db->insert('test',$data);
        }
    }