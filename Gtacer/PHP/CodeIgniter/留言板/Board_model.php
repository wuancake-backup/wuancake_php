<?php
    class Board_model extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database('default');
        }

        public function addContents($username,$contents){       //添加留言
            $data=array(
                'username'=>"$username",
                'text'=>"$contents"
            );
            $this->db->insert('board',$data);
        }

        public function checkContents(){
            $query=$this->db->query('SELECT * FROM board');
            return $query;
        }
    }