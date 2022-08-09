<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends Front_Controller {

var $data = array();
function __construct(){
parent::__construct();
$this->load->model(array('AdminModel','Front_model','Category_model'));
$this->load->library(array('Banner','pagination'));
$this->load->helper('date');
$this->load->helper(array('form', 'url','general'));
$this->load->library('form_validation');
}



		 

		public function FetchSubCategory()
					{		
		// print_r($this->input->post());			
		// exit();
		$this->form_validation->set_rules('cat_id', 'Product ID', 'required');
		if ($this->form_validation->run() == TRUE) {
			$fetch_submenu = $this->AdminModel->all_fetch("subcategory",array('cat_id'=>$this->input->post('cat_id'),'status'=>1));
			echo "<option value=''>Select Sub Category</option>";
			foreach ($fetch_submenu as $submenu) {
				echo "<option value='".$submenu->id."'>".$submenu->name."</option>";
				}	
		} 
			}

			

			public function FetchSubSubCategory()
					{		

		$this->form_validation->set_rules('cat_id', 'Category ID', 'required');
		$this->form_validation->set_rules('sub_id', 'SubCategory ID', 'required');

		if ($this->form_validation->run() == TRUE) {
			$cat_id = $this->input->post('cat_id');
			$sub_id = $this->input->post('sub_id');
			$fetch_sub_sub_category = $this->AdminModel->all_fetch("subsubcategory",array('cat_id'=>$cat_id,'sub_id'=>$sub_id,'status'=>1));
			echo "<option value=''>Select Sub Sub Category</option>";
			foreach ($fetch_sub_sub_category as $f_s_s_c) {
				echo "<option value='".$f_s_s_c->id."'>".$f_s_s_c->name."</option>";
				}	
		} 
			}
	
	
  
	
		
}

 ?>