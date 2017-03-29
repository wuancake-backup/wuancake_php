<?php
    header('Content-type:text/json');
    class Login extends CI_Controller{

        public $arr=array(1=>'用户名已存在','用户名或密码不正确','登陆成功','注册成功');

        /*public function index(){
            $this->load->view('login/login.php');
        }*/

        public function option_login(){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $this->load->model('login_model');
            $result=$this->login_model->inquire_username($username);
            if (!$result) {
                //用户名不存在，登录失败
                echo json_encode($this->arr[2]);
            }
            else{
                //用户名存在，判断密码是否正确
                $result=$this->login_model->match_password($username,$password);
                if(!$result){
                    //密码不正确，登录失败
                    echo json_encode($this->arr[2]);
                }
                else{
                    //密码正确，登陆成功
                    echo json_encode($this->arr[3]);
                }
            }
        }

        public function option_sigin(){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $this->load->model('login_model');
            $result=$this->login_model->inquire_username($username);
            if(!$result){
                $this->login_model->register($username,$password);
                //用户名不存在，注册成功
                echo json_encode($this->arr[4]);
            }else{
                //用户名存在
                echo json_encode($this->arr[1]);
            }

        }
}