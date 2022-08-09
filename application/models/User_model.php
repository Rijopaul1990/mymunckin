<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model
{

public function get_user_detail($id =false)
{
	if ($id) {
	return  $this->db->select('*')->from('user')->where('id',$id)->get()->row_array();
	}
}

function update_user($data =array())
{
	if ($data) {
	$id =$data['id'];
	unset($data['id']);
	return 	$this->db->where('id',$id)->update('user',$data);
	}
}







}
?>