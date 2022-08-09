<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_model extends CI_Model
{
	
// function get_all_list_product_by_category($cat_id)
// {
//   return  $this->db->select('*')->from('listing')->where('cat_id',$cat_id)->order_by('list_id','ASC')->get()->result();
    
// }

// function get_category_detail($cat_id)
// {
//     return $this->db->select('*')->from('category')->where('id',$cat_id)->get()->row_array();
    
// }

function get_certificate(){

	$this->db->select('*')->from('certificate');
	$this->db->join('year','certificate.year=year.id','left');
	//$this->db->group_by('certificate.year');
	return  $this->db->get()->result();
}




}?>