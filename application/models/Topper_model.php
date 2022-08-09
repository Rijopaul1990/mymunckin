<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Topper_model extends CI_Model
{

function get_all_course()
{
	return $this->db->select('*')->from('paper')->where('status',1)->get()->result();
}

function get_all_state()
{
	return $this->db->select('*')->from('states')->where('status',1)->get()->result();
}

function get_all_topper($id=false){
if ($id) {
return $this->db->select('*')->from('topper')->where('id',$id)->get()->row_array();
}else{
return $this->db->select('*')->from('topper')->get()->result();	
}
}

function get_all_year(){
	return $this->db->select('*')->from('year')->where('status',1)->get()->result();

}

function save_topper($data=array()){
if ($data['id']) {
$id = $data['id'];
unset($data['id']);
return $this->db->where('id',$id)->update('topper',$data);
}else{
	return $this->db->insert('topper',$data);
}

}

function save_widget($data=array()){
if ($data['id']) {
$id = $data['id'];
unset($data['id']);
return $this->db->where('id',$id)->update('topper_widget',$data);
}else{
	return $this->db->insert('topper_widget',$data);
}
}

function delete_row($id){
if ($id) {
	return $this->db->where('id',$id)->delete('topper');
 }
}

function get_active($col,$id,$table){
	return $this->db->set('status','1')->where($col,$id)->update($table);
}

function get_deactive($col,$id,$table){
	return $this->db->set('status','0')->where($col,$id)->update($table);
}

function get_topper_widget($id=false)
{
	if ($id) {
		return $this->db->select('*')->from('topper_widget')->where('id',$id)->get()->row_array();
	}else{
		return $this->db->select('*')->from('topper_widget')->get()->result();
	}

}

function save_onlineclasses($data=array()){
if ($data['id']) {
$id = $data['id'];
unset($data['id']);
return $this->db->where('id',$id)->update('why_online_classes',$data);
}else{
	return $this->db->insert('why_online_classes',$data);
}
}



}
?>