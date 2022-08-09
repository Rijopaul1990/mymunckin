<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class AdminModel extends CI_Model
{
	

public function Insert($table,$col_val=array(),$condition=array())
	{
			
				return $this->db->insert($table,$col_val);
		
		
	}
	public function update($table,$col_val =array(),$condition= array())
	{
		return $this->db->update($table,$col_val,$condition);
	}
	public function delete($table,$col_val =array())
	{
		return $this->db->delete($table,$col_val);  
	}
	
	public function all_fetch($table,$condition= array(),$short_order=NULL,$limit = NULL,$offset = NULL)
	{
		return $query = $this->db->order_by($short_order,'ASC')->get_where($table,$condition,$limit,$offset)->result();
		
		
	}
		// SINGLE FETCH
	public function fs($table,$condition= array(),$short_order=NULL,$limit = NULL,$offset = NULL)
	{
		$query = $this->db->order_by($short_order,'ASC')->get_where($table,$condition,$limit,$offset);
		
		return  @$query->result_object()[0];
	}
	     public function fs_desc($table,$condition= array(),$short_order=NULL,$limit = NULL,$offset = NULL)
	{
		$query = $this->db->order_by($short_order,'DESC')->get_where($table,$condition,$limit,$offset);
		
		return  @$query->result_object()[0];
	}


	public function AllCount($table,$condtion = array())
	{
		 $query = $this->db->get_where($table,$condtion);	
		 return $query->num_rows();
	}
	public function all_fetch_desc($table,$condition= array(),$short_order=NULL,$limit = NULL,$offset = NULL)
	{
		return $query = $this->db->order_by($short_order,'DESC')->get_where($table,$condition,$limit,$offset)->result();
		
		
	}

	
}
?>