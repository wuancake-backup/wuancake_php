<?php
    class Blog_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database('default');
        }

        //从数据库读取文章
        public function get_article($id=-1){      //从数据库读取文章
            if($id==-1)
                return $this->db->query('select * from _article;');
            else
                return $this->db->query("SELECT * FROM _article WHERE id=$id;");
        }

        //从数据库获取标题
        public function get_title(){
            return $this->db->query('SELECT title,date,id from _article;');
        }

        //从数据库获取留言
        public function get_board(){
            return $this->db->query('SELECT * FROM _message_board;');
        }

        //插入留言
        public function give_message($name,$message){
            return $this->db->query("INSERT INTO _message_board(name,word) VALUE('$name','$message');");
        }

        public function get_content(){  //从数据库获取评论

        }

        //验证登录
        public function login($name,$password){
            $true_psw=$this->db->query("SELECT password FROM _administrator WHERE name='$name';");
            $res=$true_psw->row();
            if(isset($res)){
                if($res->password==$password){
                    return 1;
                }else{
                    return -1;
                }
            }else{
                return -1;
            }
        }

        //插入新的博客内容
        public function new_blog($title,$content){
            return $this->db->query("INSERT INTO _article(title,content) VALUE('$title','$content');");
        }
    }


