<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class AdminLogin_model extends CI_Model
{
	

function login($username,$password)
{
	$this->db->select('*');
	$this->db->where('admin_email',$username);
	$this->db->where('admin_password',$password);
	$this->db->where('status',1);
	if ($this->db->get('admin')->num_rows()==1)
		{
		$row = $this->db->get_where('admin',array('admin_email'=>$username,'admin_password'=>$password))->row_array();
		$admin=array();
		$admin['username']	=	$row['admin_email'];
		//$admin['user_type'] =	$row['type'];
		$admin['admin_id'] =	$row['id'];
		$this->session->set_userdata('admindetail',$admin);
		return true;
		}
	else{
		return false;
	}
}


function login_user($email,$password)
{
		$this->db->select('*');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('user');

	if ($query->num_rows()==1) {
		$row = $query->row_array();
		$user =array();
		$user['id'] = $row['id'];
		$user['profile_id'] = $row['profile_id'];
		$user['first_name'] = $row['first_name'];
		$user['last_name'] = $row['last_name'];
		$user['email'] = $row['email'];
		$this->session->set_userdata('userdetail',$user);
		return true;
	}
	else{
		return false;
	}
}


 function AllCount($table,$condtion = array())
	{
		 $query = $this->db->get_where($table,$condtion);	
		 return $query->num_rows();
	}

function logout()
{	// session_destroy();
	return $this->session->unset_userdata('admindetail');
}

function logout_user(){
	return  $this->session->unset_userdata('userdetail');
	 // return $this->session->sess_destroy();
}

function save_user($data =array()){
if ($data) {
$this->db->insert('user',$data);
$last_id = $this->db->insert_id();
return $this->update_profile_id($last_id);
  }
}
 
function update_profile_id($id){
$pre='AK';
$m=date('m');
$y =date('y');
$profile_id =$pre.$m.$y.$id;
$this->db->set('profile_id',$profile_id)->where('id',$id)->update('user');
$row = $this->db->select('*')->from('user')->where('id',$id)->get()->row_array();
$user =array();
$user['id'] = $row['id'];
$user['profile_id'] = $row['profile_id'];
$user['first_name'] = $row['first_name'];
$user['last_name'] = $row['last_name'];
$user['email'] = $row['email'];
$this->session->set_userdata('userdetail',$user);
return true;
}



}
?>