<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 午安后台主控制器
*/
class Wuan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('wuan_model');
    }


    //登陆
    public function login()
    {
        $this->load->view('wuan_console/login');
    }

    public function logining()
    {
        //登陆过程
        //载入表单验证类
        $this->load->library('form_validation');

        //设置验证规则
        $this->form_validation->set_rules('adminname'.'用户名','required');
        $this->form_validation->set_rules('adminpwd','密码','required');

        $dat['superadmin_id'] = $this->wuan_model->get_superadmin_id('02','03');

        //开始验证
        $status = $this->form_validation->run();
        $n = count($dat['superadmin_id']);
        if ($status)
        {

            $adminname = $this->input->post('adminname');
            $adminpwd  = $this->input->post('adminpwd');

            //在表user_detail中查找03权限的id
            for($i=0;$i<$n;$i++)
            {
                //通过循环将每一项的id、nickname、password写入数组$data中
                $data[$i]['id'] = $dat['superadmin_id'][$i]['user_base_id'];

                $num = $this->wuan_model->get_login_info($data[$i]['id']);
                $data[$i]['nickname'] = $num['nickname'];

                //$pwd = $this->wuan_model->search_pswmd5($data[$i]["id"]);
                $data[$i]['password'] = $num['password'];

                if($data[$i]['nickname'] == $adminname)
                {
                    //echo ($data[$i]['nickname']);
                    //echo $adminlogin_id = $i;
                    break;
                    //获取$i
                }
            }
            //保存$i和对应的id到session
            if(!isset($_SESSION))
            {
                session_start();
            }

            $_SESSION['i'] = $i;
            //$_SESSION['i_id'] = $data[$i]['id'];

            if(empty($data[$i]['id'])){
                $this->load->helper('form');
                echo '您不是管理员！';
                $this->load->view('wuan_console/login');
            }else{
                $login_id = $data[$i]['id'];

                $superadmin_md5 = $data[$i]['password'];

                $md5_pwd = md5($adminpwd);

                if($md5_pwd == $superadmin_md5)
                {
                        //验证成功

                        $data['admin'] = $this->wuan_model->insertdata();

                        //获取$i 登陆的用户
                        $data['ua'] = $this->wuan_model->get_login_info($data[$_SESSION['i']]['id']);

                        $data['adminname'] = $data['ua']['nickname'];

                        if(!isset($_SESSION))
                        {
                            session_start();
                        }

                        $_SESSION['data'] =$data;

                        ///
                        $data['status']='';
                        $this->load->view('wuan_console/head',$data);
                        $this->load->view('wuan_console/left');
                        //$this->load->view('wuan_console/star_management');

                }
                else
                {
                    $this->load->helper('form');
                    echo '用户名或密码错误！';
                    $this->load->view('wuan_console/login');
                }
            }
        }
        else
        {
            $this->load->helper('form');
            $this->load->view('wuan_console/login');
        }

            //echo "123";

            //print_r($data['admin']);
    }

    public function add()
    {

        $this->load->view('wuan_console/add');
    }

    public function adding()
    {
        if(!isset($_SESSION))
                {
                    session_start();
                }
        $nickname = $this->input->post('nickname');

        if(!empty($nickname))
        {
            //获取nickname对应的id

            $id = $this->wuan_model->search_id($nickname);
            if(empty($id)){
                echo '该用户尚未注册，请检查！';
            }else{
                $auth = $this->wuan_model->search_auth($id['id']);
                if($auth['authorization'] == 1)
                {
                    $this->wuan_model->change_auth($id['id']);
                    echo '添加成功！';
                }else{
                    echo '该用户已是管理员，操作无效！';
                }
            }
                $_SESSION['data']['admin']= $this->wuan_model->insertdata();
        }else{
            echo '用户名不能为空，请重试！';

            //$this->load->view('wuan_console/add');
        }
            $this->load->view('wuan_console/head',$_SESSION['data']);
            $this->load->view('wuan_console/left');
            $this->load->view('wuan_console/team_management',$_SESSION['data']);
    }

    public function delete($item)
    {
        $this->wuan_model->change_auth_user($item);

        if(!isset($_SESSION))
            {
                session_start();
            }

            $_SESSION['data']['admin']= $this->wuan_model->insertdata();

        $this->load->view('wuan_console/head',$_SESSION['data']);
        $this->load->view('wuan_console/left');
        $this->load->view('wuan_console/team_management');

    }

    public function star_management()
    {
        if(!isset($_SESSION))
            {
                session_start();
            }



        //-------------------------------------------------------------------

        //把表group_detail的group_base_id保存在一个数组里 不要重复数据

        //print_r($data);

        //载入分页类
        // $this->load->library('pagination');
        // $perPage = 20;
        //配置项设置
        // $config['base_url'] = site_url('wuan/star_mangement');
        // $config['total_rows'] = $this->db->count_all_results('group_base');
        // $config['per_page'] = $perPage;
        // $config['uri_segment'] = 3;
        // $config['prev_link'] = '上一页';
        // $config['next_link'] = '下一页';
        // $config['first_link'] = '第一页';
        // $config['last_link'] = '最后一页';

        // $this->pagination->initialize($config);

        // $data['links'] = $this->pagination->create_links();

        // $offset = $this->uri->segment(3);
        // $this->db->limit($perPage,$offset);


        //$data['starinfo'] = $this->wuan_model->get_starinfo_20();
        //print_r($data['starinfo']);

        //$d = $this->wuan_model->distinct();

        //获取delete= 0 的星球id
        $starid = $this->wuan_model->get_starid();
        //print_r($starid);
        //for ($i=0; $i<count($starid); $i++) {
        foreach ($starid as $key) {


            //获取星球id name 和介绍
            $info= $this->wuan_model->get_starinfo1($key['id']);

            //根据星球id获取管理员id
            $userid = $this->wuan_model->groupid_to_userid($key['id']);


            $owner = $this->wuan_model->get_login_admin_nickname($userid['user_base_id']);
            $data['starinfo'][$key['id']]['id'] = $info['id'];
            $data['starinfo'][$key['id']]['name'] = $info['name'];
            if ($info['delete'] == 0) {
                $data['starinfo'][$key['id']]['status'] = "正常";
            }else{
                $data['starinfo'][$key['id']]['status'] = "已隐藏";
            }
            if ($info['private'] == 0) {
                $data['starinfo'][$key['id']]['private'] = "";
            }else{
                $data['starinfo'][$key['id']]['private'] = "私密";
            }
            //$data['starinfo'][$key['id']]['status'] = $info['delete'];
            $data['starinfo'][$key['id']]['g_introduction'] = $info['g_introduction'];

            $data['starinfo'][$key['id']]['owner'] = $owner['nickname'];
            $data['starinfo'][$key['id']]['owner_id'] = $userid['user_base_id'];
        }
        if(!empty($data['starinfo'])){
            sort($data['starinfo']);
        }else{
            $data['starinfo']=array();
        }
        $_SESSION['data']['status']='星球管理';
        $this->load->view('wuan_console/head',$_SESSION['data']);
        $this->load->view('wuan_console/left');
        $this->load->view('wuan_console/star_management',$data);

    }

    public function team_management()
    {
        if(!isset($_SESSION))
            {
                session_start();
            }
        $_SESSION['data']['status']='成员管理';
        $this->load->view('wuan_console/head',$_SESSION['data']);
        $this->load->view('wuan_console/left');
        $this->load->view('wuan_console/team_management');
    }


    //星球名修改 @author 阿萌
    public function star_name_upd($id){
        $data['starinfo']= $this->wuan_model->get_starinfo1($id);
        $this->load->view('wuan_console/star_name_upd',$data);
    }

    public function star_name_upding($id){

        //加载表单验证类
        $this->load->library('form_validation');
        $this->form_validation->set_rules('starname','星球名称','required');

        //表单验证开始运行，没有这句是不执行的
        $status = $this->form_validation->run();

        if($status)
        {
            //符合条件
            $starname = $this->input->post('starname');
            if($this->wuan_model->check_star_name_equal($starname)>0){
                $this->error_msg('星球名重复了，请重新输入！');
            }
            else{
            $this->wuan_model->upd_star_name($id,$starname);
            redirect('wuan/star_management');
            }
        }
        else
        {
            //不符合条件 在页面上输出错误
            $this->load->helper('form');
            $data['starinfo']= $this->wuan_model->get_starinfo1($id);
            $this->load->view('wuan_console/star_name_upd',$data);
        }
    }

    //星球主人修改 @author 阿萌
    public function star_user_upd($id){
        $data['userlist']= $this->wuan_model->get_user_all_id($id);
        $data['starinfo']= $this->wuan_model->get_star_user_id($id);
        $this->load->view('wuan_console/star_user_upd',$data);
    }
    public function star_user_upding($gid){
        $this->load->library('form_validation');
        $uid= $this->input->post('userid');
        $this->wuan_model->upd_star_user($gid,$uid);
        redirect('wuan/star_management');
    }
    //错误提示页
    public function error_msg($message){
        $data['msg']=$message;
        $this->load->view('wuan_console/error_msg',$data);
    }

    //星球关闭功能 @author 陈超 2016-10-25
    public function star_management_close(){

        //读取传递ID
        $star_id = $this->uri->segment(3);

        //更新数据组
        $data = array(
                'delete'=>1
            );

        //执行更新
        $res = $this->db->update('group_base',$data,array('id'=>$star_id));
        //判断是否成功，并返回
        if($res){
            echo "成功关闭星球";
            echo "<br><a href='".$_SERVER['HTTP_REFERER']."'>确定</a>";
        }else{
            echo "关闭星球失败";
            echo "<br><a href='".$_SERVER['HTTP_REFERER']."'>返回</a>";
        }


        $this->load->view('wuan_console/star_management_close');

    }
    public function star_management_open(){


        //读取传递ID
        $star_id = $this->uri->segment(3);
        //更新数据组
        $data = array(
                'delete'=>0
            );
        //执行更新
        $res = $this->db->update('group_base',$data,array('id'=>$star_id));
        //判断是否成功，并返回
        if($res){
            echo "成功打开星球";
            echo "<br><a href='".$_SERVER['HTTP_REFERER']."'>确定</a>";
        }else{
            echo "打开星球失败";
            echo "<br><a href='".$_SERVER['HTTP_REFERER']."'>返回</a>";
        }


        $this->load->view('wuan_console/star_management_close');

    }
    public function star_private_set(){
        //读取传递ID
        $star_id = $this->uri->segment(3);
        //更新数据组
        $data = array(
                'private'=>1
            );
        //执行更新
        $res = $this->db->update('group_base',$data,array('id'=>$star_id));
        //判断是否成功，并返回
        if($res){
            echo "<script>alert('成功设置为私密星球！'); history.go(-1);</script>";
        }else{
            echo "设置为私密星球失败";
            echo "<br><a href='".$_SERVER['HTTP_REFERER']."'>返回</a>";
        }


        //$this->load->view('wuan_console/star_private_unset');

    }
    public function star_private_unset(){
        //读取传递ID
        $star_id = $this->uri->segment(3);
        //更新数据组
        $data = array(
                'private'=>0
            );
        //执行更新
        $res = $this->db->update('group_base',$data,array('id'=>$star_id));
        //判断是否成功，并返回
        if($res){
            //echo "成功取消星球私密性";
            //echo "<script>alert('成功！点击确定返回！'); window.location.href='team_management';</script>";
            echo "<script>alert('成功取消星球私密性！'); history.go(-1);</script>";
            //echo "<br><a href='".$_SERVER['HTTP_REFERER']."'>确定</a>";
        }else{
            echo "取消星球私密性失败";
            echo "<br><a href='".$_SERVER['HTTP_REFERER']."'>返回</a>";
        }


       // $this->load->view('wuan_console/star_private_set');

    }

}

 ?>