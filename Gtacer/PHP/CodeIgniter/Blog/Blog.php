<?php
    class Blog extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('blog_model');
        }

        public function index()
        {

            //调用数据库函数，获取最新的十五个文章列表，获取文章标题，内容，时间，并传给视图
            $result = $this->blog_model->get_article();       //获取最近的十五个文章列表
            FOR ($i = 0; $i <= 14; $i++) {
                if ($i + 1 > $result->num_rows())
                    break;
                $row = $result->row($i);
                $data["title"]["$i"] = "$row->title";
                $data["content"]["$i"] = "$row->content";
                $data['date']["$i"] = "$row->date";
                $data['id']["$i"] = "$row->id";
            }
            $this->load->view('blog/header.php');
            $this->load->view('blog/homepage', $data);
            $this->load->view('blog/foot.php');
        }

        //调用数据库函数，获取所有的文章标题列表，并将标题字符串传给视图
        public function show_article()
        {
            $result = $this->blog_model->get_title();         //获取所有的标题列表
            for ($i = 0; $i <= $result->num_rows() - 1; $i++) {
                $row = $result->row($i);
                $data['title']["$i"] = "$row->title";
                $data['date']["$i"] = "$row->date";
                $data['id']["$i"] = "$row->id";
            }
            $this->load->view('blog/header.php');
            $this->load->view('blog/show_catalog.php', $data);
            $this->load->view('blog/foot.php');
        }

        //接受视图传来的参数(文章id号)，调用数据库函数，获取指定文章的内容
        public function show_content($id)
        {
            $result = $this->blog_model->get_article($id);
            $row = $result->row();
            $data['title'] = $row->title;
            $data['content'] = $row->content;
            $data['date'] = $row->date;

            $this->load->view('blog/header.php');
            $this->load->view('blog/show_content.php', $data);
            $this->load->view('blog/foot.php');

        }

        //调用数据库函数，获取所有的留言，并将留言ID，留言内容，留言日期传给视图
        public function show_board()
        {
            $result = $this->blog_model->get_board();
            for ($i = 0; $i <= $result->num_rows() - 1; $i++) {
                $row = $result->row($i);
                $data['message'][$i] = $row->word;
                $data['date'][$i] = $row->date;
                $data['name'][$i] = $row->name;
                $data['id'][$i]=$row->id;
            }

            $this->load->view('blog/header.php');
            $this->load->view('blog/board.php', $data);
            $this->load->view('blog/foot.php');
        }

        //加载登录界面
        public function login_view(){
            $this->load->view('blog/header.php');
            $this->load->view('blog/login.php');
            $this->load->view('blog/foot.php');
        }

        //加载编写博客的界面
        public function write_blog(){
            $this->load->view('blog/header.php');
            $this->load->view('blog/write_blog.php');
            $this->load->view('blog/foot.php');
        }

        //接受传来的用户名和留言，添加到数据库中
        public function give_message()
        {
            $message = $_POST['message'];
            $name = $_POST['username'];
            if ($message == '' || $name == '') {
                echo '<script language="javascript">alert("输入的用户名或信息不能为空！");history.back();</script>';
            } else {
                $res = $this->blog_model->give_message($name, $message);
                if ($res) {
                    echo '<script language="javascript">alert("留言成功");history.back();</script>';
                } else {
                    echo '<script language="javascript">alert("留言失败");history.back();</script>';
                }
            }
        }

        //接受传来的用户名和密码，进行登录验证
        public function login()
        {
            $name = $_POST['name'];
            $password = $_POST['password'];
            if($name==''||$password==''){
                echo '<script language="javascript">alert("输入的用户名或密码不能为空！");history.back();</script>';
            }else {
                $res = $this->blog_model->login($name, $password);
                if ($res == 1) {    //验证成功
                    session_start();
                    $a = md5(time());
                    $_SESSION['credentials'] = $a;
                    echo '<script language="javascript">alert("登录成功");window.location.href="http://localhost/codeigniter/index.php/blog/";</script>';
                } else {
                    echo '<script language="javascript">alert("登录失败");history.back();</script>';
                }
            }
        }

        //接受传来的文章标题与内容，写入到数据库中
        public function submit_blog(){
            $title=$_GET['title'];
            $content=$_GET['content'];
            if ($title=='' || $content==''){
                echo '<script language="javascript">alert("标题或内容不能为空！");history.back();</script>';
            }else{
                $res=$this->blog_model->new_blog($title,$content);
                if($res){
                    echo '<script language="javascript">alert("发表成功");window.location.href="http://localhost/codeigniter/index.php/blog/show_article";</script>';
                }
            }
        }

        //接受传来的type值，判断是删除留言还是删除文章。并通过接受id号，删除指定的留言或文章
        public function delete_message($type,$id){
            $res=$this->blog_model->delete($type,$id);
            if($res){
                echo '<script language="javascript">alert("删除成功！");history.back();</script>';
            }else{
                echo '<script language="javascript">alert("删除失败！");history.back();</script>';
            }
        }

    }