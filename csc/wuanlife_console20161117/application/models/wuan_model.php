<?php 

class wuan_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	//在表 user_detail 中依据 权限 找对应的 id
	public function get_superadmin_id($auth02,$auth03)
	{
		//$q = "select user_base_id from user_detail where authorization = $auth";
		//$query = $this->db->query($q);
		//return $query->result_array();
		
		$data = $this->db->select('user_base_id')->from('user_detail')->where("authorization = $auth02 or authorization = $auth03")->get()->result_array();
		
		return $data;
	}


	//--------------------------------------------------
	public function get_login_admin_nickname($id)
	{
		// $query = "select `nickname` from user_base where id = $id";
		// $query = $this->db->query($query);
		// return $query->row_array();
		$data = $this->db->select('nickname')->from('user_base')->where("id = $id")->get()->row_array();
		return $data;
	}

	public function search_pswmd5($id)
	{
		// $query = "select password from user_base where id = $id";
		// $query = $this->db->query($query);
		// return $query->row_array();

		$data = $this->db->select('password')->from('user_base')->where("id = $id")->get()->row_array();
		return $data;
	}
	
	public function get_login_info($id)
	{	//$data = $this->db->get_where('user_base',"id = $id")->row_array();
		$q ="select ub.id id,ub.nickname nickname,ub.password password,ud.authorization uauth from user_base ub,user_detail ud where ub.id=ud.user_base_id and ub.id=$id";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	//-----------------------------------------------------


	public function search_id($value)
	{
		$q = "select id from user_base where nickname = '" . $value . " '";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	public function search_auth($value)
	{
		$q = "select authorization from user_detail where user_base_id = $value";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	public function change_auth($value)
	{
		$q = "update user_detail set authorization = '02' where user_base_id = $value";
		$query = $this->db->query($q);
	}

	public function insertdata()
	{
		//显示成员管理

		//获取普通管理员的id

		// $data['admin_id'] = $this->db->select('user_base_id')->from('user_detail')->where('authorization = 02')->get()->result_array();

		// $n = count($data['admin_id']);

		// for($i=0; $i<$n; $i++)
		// {
		// 	$data['admin'][$i]['id'] = $data['admin_id'][$i]['user_base_id'];

		// 	$data['admin'][$i]['nickname'] = $this->wuan_model->get_login_admin_nickname($data['admin_id'][$i]['user_base_id'])['nickname'];
		// }
		///////////////////////////////////////////////

		//获取权限为02（普通管理员）的id和nickname
		$q ="select ub.id id,ub.nickname nickname,ud.authorization uauth from user_base ub,user_detail ud where ub.id=ud.user_base_id and ud.authorization = 02 ";
		$data['admin'] = $this->db->query($q)->result_array();
		return $data['admin'];
	}

	public function change_auth_user($value)
	{
		$q = "update user_detail set authorization = '01' where user_base_id = $value";
		$query = $this->db->query($q);
	}

	public function get_starinfo()
	{
		$q = "select id,name,g_introduction from group_base";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	public function get_starinfo_20()
	{
		$data = $this->db->select('id,name,g_introduction')->from('group_base')->order_by('id','asc')->get()->result_array();
		return $data;
	}
	public function get_starinfo1($id)
	{
		$q = "select id,name,`delete`,g_introduction from group_base where id = $id";
		$query = $this->db->query($q);
		return $query->row_array();
	}
	
	public function groupid_to_userid($id)
	{
		$data = $this->db->query("select user_base_id from group_detail where group_base_id = $id and authorization=01");
		return $data->row_array();
	}

	public function distinct()
	{
		$q = "select distinct group_base_id from group_detail";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	public function get_starid()
	{
		//获取星球id
		$q = "select id from group_base";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	//修改星球名称函数 @author 阿萌
	public function upd_star_name($id,$name){
		$q="update group_base set name='{$name}' where id={$id}";
		$query=$this->db->query($q);
	}
	//星球名称重复检测 @author 阿萌
	public function check_star_name_equal($name){
		$query=$this->db->query("select * from group_base where name='{$name}'");
		return $query->num_rows();
	}
	//获得全部星球主人姓名信息 @author 阿萌
	public function get_user_all_id(){
		$data = $this->db->query("select id,nickname from user_base order by id asc");
		return $data->result_array();
	}
	//获得星球主人信息for id @author 阿萌
	public function get_star_user_id($starid){
		$data = $this->db->query("select gb.id gid,gb.name gname,ub.id uid,ub.nickname uname from group_base gb,group_detail gd,user_base ub where gb.id=gd.group_base_id and gd.user_base_id=ub.id and gb.id={$starid} and gd.authorization=01");
		return $data->row_array();
	}
	//修改星球主人函数 @author 阿萌
	public function upd_star_user($gid,$uid){
		$q="update group_detail set user_base_id={$uid} where group_base_id={$gid} and authorization=01";
		$query=$this->db->query($q);
	}
}

?>