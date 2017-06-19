<?php
    class Login extends CI_Controller{

        public $arr=array('user_exists'=>'用户名已存在',
                            'info_not_right'=>'用户名或密码不正确',
                            'login_success'=>'登陆成功',
                            'sign_success'=>'注册成功');

        /*public function index(){
            $this->load->view('login/login.php');
        }*/

        public function option_login(){
            $json = file_get_contents('php://input');
            $json = json_decode($json);
            $username=$json->username;
            $password=$json->password;
            $this->load->model('login_model');
            $result=$this->login_model->inquire_username($username);
            if (!$result) {
                //用户名不存在，登录失败
                header('Content-type:text/json');
                echo json_encode($this->arr['info_not_right']);
            }
            else{
                //用户名存在，判断密码是否正确
                $result=$this->login_model->match_password($username,$password);
                if(!$result){
                    //密码不正确，登录失败
                    header('Content-type:text/json');
                    echo json_encode($this->arr['info_not_right']);
                }
                else{
                    //密码正确，登陆成功
                    header('Content-type:text/json');
                    echo json_encode($this->arr['login_success']);
                }
            }
        }

        public function option_sigin(){
            $json = file_get_contents('php://input');
            $json = json_decode($json);
            $username=$json->username;
            $password=$json->password;
            $this->load->model('login_model');
            $result=$this->login_model->inquire_username($username);
            if(!$result){
                $this->login_model->register($username,$password);
                //用户名不存在，注册成功
                header('Content-type:text/json');
                echo json_encode($this->arr['sign_success']);
            }else{
                //用户名存在
                header('Content-type:text/json');
                echo json_encode($this->arr['user_exists']);
            }

        }
}