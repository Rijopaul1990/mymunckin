<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class Login_model extends CI_Model
{
	

function login($username,$password)
{
	$this->db->select('*');
	$this->db->where('username',$username);
	$this->db->where('password',$password);
	if ($this->db->get('admin')->num_rows()==1) {
		$row = $this->db->get('admin')->row_array();
		$admin=array();
		$admin['id']=$row['id'];
		$admin['username']=$row['username'];
		$admin['name']=$row['name'];
		$admin['email']=$row['email'];
		$admin['mobile']=$row['mobile'];
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
		$this->db->where('is_verify',1);
		$this->db->where('status',1);
		$query = $this->db->get('user');

	if ($query->num_rows()==1) {
		$row = $query->row_array();
		$user =array();
		$user['id'] = $row['id'];
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

function login_user_with_number($mobile,$otp)
{
		$this->db->select('*');
		$this->db->where('number',$mobile);
		$this->db->where('otp',$otp);
		$this->db->where('is_verify',1);
		$this->db->where('status',1);
		$query = $this->db->get('user');

	if ($query->num_rows()==1) {
		$row = $query->row_array();
		$user =array();
		$user['id'] = $row['id'];
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

function logout()
{
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


function check_email($email)
{
if ($email) {

return $this->db->select('email')->from('user')->where(array('email'=>$email,'is_verify'=>1,'status'=>1))->get()->num_rows();

 }

}

function check_password($email,$password)
{
	if ($email && $password) {
		$this->db->select('*')->from('user');
		$this->db->where('email',$email);
		$this->db->where('is_verify',1);
		$this->db->where('status',1);
		$this->db->where('password',$password);
	return $this->db->get()->num_rows();
		
	}
}




}
?>