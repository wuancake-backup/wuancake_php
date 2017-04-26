<?php
    class Blog_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database('default');
        }

        //从数据库读取文章
        public function get_article($id=-1){
            if($id==-1)     //如果没有参数到形参，那么返回最新的十五条数据
                return $this->db->query('select * from _article ORDER BY date DESC LIMIT 15;');
            else        //如果有传了参数值到形参，那么返回该ID号所在的行
                return $this->db->query("SELECT * FROM _article WHERE id=$id;");
        }

        //从数据库获取标题
        public function get_title(){
            return $this->db->query('SELECT title,date,id from _article ORDER BY date DESC;');
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
            $title=addslashes($title);
            $content=addslashes($content);
            return $this->db->query("INSERT INTO _article(title,content) VALUE('$title','$content');");
        }

        //接受传来的type值，判断是删除留言还是删除文章。并通过接受id号，删除指定的留言或文章
        public function delete($type,$id)
        {
            if ($type == 1) {                //值为1时，执行删除留言操作
                return $this->db->query("DELETE FROM _message_board WHERE id='$id';");
            } else{                         //值为2时，执行删除博文操作
                return $this->db->query("DELETE FROM _article WHERE id='$id';");
            }
        }
    }


