<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model
{


function check_module_duplicate($data=array(),$id=false){
 	if ($id) {
   return 	$this->db->select('*')->from('syllabus_module')->where(array('paper_id'=>$data['paper_id'],'name'=>$data['name'],'id <>'=>$id))->get()->num_rows();
    
	}else{
	   $this->db->select('*')->from('syllabus_module');
	   $this->db->where(array('paper_id'=>$data['paper_id'],'name'=>$data['name']));
	   return $this->db->get()->num_rows();

	}

}

function  all_lession()
{
	$this->db->select('*')->from('syllabus_lession');
	$this->db->group_by('chapter_id');
	$this->db->order_by('module_id');
	return $this->db->get()->result();
}

function  allcontent()
{
	$this->db->select('*')->from('lession_audio');
	// $this->db->group_by('chapter_id');
	$this->db->order_by('module_id','ASC');
	return $this->db->get()->result();
}



function check_lession_exit($data=array(),$id=false){
 	if ($id) {
   return 	$this->db->select('*')->from('syllabus_lession')->where(array('paper_id'=>$data['paper_id'],'type_id'=>$data['type_id'],'module_id'=>$data['module_id'],'chapter_id <>'=>$data['chapter_id']))->get()->num_rows();
    
	}else{

	 return   $this->db->select('*')->from('syllabus_lession')->where(array('paper_id'=>$data['paper_id'],'type_id'=>$data['type_id'],'module_id'=>$data['module_id'],'chapter_id'=>$data['chapter_id']))->get()->num_rows();

	}

}



function save_lession($data=array())
{
	if ($data) {
	$paper_id = $data['paper_id'];		
	$type_id = $data['type_id'];
	$module_id = $data['module_id'];
	$chapter_id = $data['chapter_id'];

	$num= count($data['name'])	;
	for ($i=0; $i <$num ; $i++) { 
		$array = array(
			'paper_id'=>$paper_id,
			'type_id'=>$type_id,
			'module_id'=>$module_id,
			'chapter_id'=>$chapter_id,
			'name'=>$data['name'][$i],
			'sort'=>$data['sort'][$i]
		);

		if ($data['less_id'][$i] && !empty($data['less_id'][$i])) {
		$this->db->where('id',$data['less_id'][$i])->update('syllabus_lession',$array);
		}else{
		$this->db->insert('syllabus_lession',$array);	
		}


		
	 }
	}
	return true;

}


function save_step($data=array()){
	if ($data['id']) {
		$id=$data['id'];
		unset($data['id']);
		$this->db->where('id',$id)->update('step',$data);
		return $id;
	}else{
		$this->db->insert('step',$data);
		return $this->db->insert_id();
	}

}

function save_step_detail($data=array())
{
	 $step_id = $data['step_id'];

	if ($step_id) {
	$this->db->where('step_id',$step_id)->delete('step_detail');
	}

	$num = count($data['c_title']);
	for ($i=0; $i < $num; $i++) { 

		$array=array(
			'step_id'=>$data['step_id'],
			'c_title'=>$data['c_title'][$i],
			'c_des'=>$data['c_des'][$i]

		);
		$this->db->insert('step_detail',$array);
	}
	return true;
}


function Check_answer($question,$answer)
{
	$this->db->select('*')->from('mocktest');
	$this->db->where('id',$question);
	$this->db->where('answer',$answer);
	return $this->db->get()->num_rows();

}

function get_test_result()
{
	return $this->db->select('*')->from('syllabus_mocktest_result')->order_by('id','DESC')->LIMIT(1)->get()->row_array();
}


function get_all_lession_by_users($user_id)
{
		$this->db->select('*')->from('bookmark_audio')->where('user_id',$user_id);
		$this->db->join('syllabus_lession','bookmark_audio.lession_id=syllabus_lession.id','left');
	return	$this->db->group_by('bookmark_audio.lession_id')->get()->result();

}

function get_all_audio_bookmark($less_id=false,$user_id=false){

$this->db->select('*')->from('bookmark_audio ba');
$this->db->where(array('ba.user_id'=>$user_id,'ba.lession_id'=>$less_id));
$this->db->join('lession_audio la','ba.audio_id=la.id','left');
return $this->db->get()->result();

}

function get_mocktest_bookmars($less_id=false,$user_id=false){

$this->db->select('*')->from('mocktest_error_report mer');
$this->db->where(array('mer.user_id'=>$user_id,'mer.lession_id'=>$less_id));
$this->db->join('mocktest mt','mer.question_id=mt.id','left');
return $this->db->get()->result();

}

function get_next_lession($id)
{
	$this->db->select('*')->from('syllabus_lession');
	$this->db->where('id >',$id);
	$this->db->order_by('id','asc');
	$this->db->limit(1);
return 	$this->db->get()->row_array();

}
function get_previous_lession($id)
{
	$this->db->select('*')->from('syllabus_lession');
	$this->db->where('id <',$id);
	$this->db->order_by('id','asc');
	$this->db->limit(1);
return 	$this->db->get()->row_array();

}

function get_couse_detail($id)
{
	if ($id) {
	return $this->db->select('*')->from('online_course')->where('id',$id)->get()->row_array();
	}

}



function save_course($data=array()){
	if ($data['id']) {
		$id=$data['id'];
		unset($data['id']);
		$this->db->where('id',$id)->update('online_course',$data);
		return $id;
	}else{
		$this->db->insert('online_course',$data);
		return $this->db->insert_id();
	}

}

function save_course_detail($data=array())
{
	 $course_id = $data['course_id'];

	if ($course_id) {
	$this->db->where('course_id',$course_id)->delete('online_course_detail');
	}

	$num = count($data['title']);
	for ($i=0; $i < $num; $i++) { 

		if ($data['image'][$i]) {
			$image= $data['image'][$i];
			}else{
			$image= $data['old_img'][$i];
			}	


		$array=array(
			'course_id'=>$data['course_id'],
			'title'=>$data['title'][$i],
			'des'=>$data['des'][$i],
			'image'=>$image
		);
		$this->db->insert('online_course_detail',$array);
	}
	return true;
}


function delete_course($id)
{
	if ($id) {
		$this->db->where('id',$id)->delete('online_course');
		$this->db->where('course_id',$id)->delete('online_course_detail');
		
	}

}

function get_demo_mocktest($paper_id)
{
	$this->db->select('*')->from('mocktest')->where(array('mocktest.paper_id'=>$paper_id,'demo'=>1));
	$this->db->join('syllabus_chapter','mocktest.chapter_id=syllabus_chapter.id','left');
	return $this->db->group_by('mocktest.chapter_id')->get()->result();

}


}

?>