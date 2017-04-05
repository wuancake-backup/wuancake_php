<?php
    class board extends CI_Controller{

        public function index(){        //留言界面
            $this->load->view('board/board.php');
        }

        public function check(){        //查看留言界面
//            $this->load->view('board/check.php');
            $this->load->model('board_model');
            $result=$this->board_model->checkContents();
//            echo "<table border=\"1\" >";
            echo "<table border=\"1\" style=\"word-break:break-all; word-wrap:break-all;\">";
            foreach ($result->result() as $row)
            {
                echo "<tr>";
                echo "<td>";echo "用户名：".$row->username."<br/>";echo "</td>";
                echo "<td>";echo "留言：".$row->text."<br/><br/><br/>";echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        public function add(){          //添加留言
            $contents=$_POST['contents'];
            $username=$_POST['username'];

            if(empty($contents) || empty($username) || ctype_space($contents) || ctype_space($username))
                die("用户名和内容不能为空！");

            $this->load->model('board_model');
            $result=$this->board_model->addContents($username,$contents);

            if(!isset($result))
                echo "留言成功！<a href='http://localhost/CodeIgniter/index.php/board/check/'>点击查看</a>";
            else
                echo "留言失败！";
        }
    }