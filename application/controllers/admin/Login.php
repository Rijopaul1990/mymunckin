<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller {

	var $data = array();
	
	public function __construct()
	{		 
	
	    
		parent::__construct();
  
    	$this->load->helper(array('form','url'));
		$this->load->model('AdminLogin_model');
		$this->load->library(array('form_validation','session'));
		$this->load->database();
		
		
	} 

	public function index()
	{
	
	    if($this->session->userdata('admindetail'))
        {
          redirect('admin');
        }
		$data['page_title'] = 'Admin Login';
		$data['form_action'] ='admin/Login';
		
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>'); 
		$this->form_validation->set_rules('luns', 'Username', 'required|trim');
		$this->form_validation->set_rules('lup', 'Password', 'required|trim');
		if ($this->form_validation->run()==false)
		{
			$this->partial('login', $data);
			
		}
					else{
						
					$username = $this->input->post('luns');
					// $password = md5($this->input->post('lup'));
					$password = $this->input->post('lup');
					$check = $this->AdminLogin_model->login($username,$password);
					
					if ($check) 
						{
						echo 1;
						
						}
						else{
						echo 0;
						}
			


		}
			
		
	}

	public function checkusername()
	{
			// print_r($this->input->post());
			// exit();
	    if($this->session->userdata('admindetail'))
        {
          redirect('admin');
        }
		$data['page_title'] = 'Admin Login';
		$data['form_action'] ='admin/Login';

		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>'); 
		$this->form_validation->set_rules('flun', 'Username', 'required|trim');
			
		if ($this->form_validation->run()==false) {
			$this->partial('login', $data);
			
		}
		else{
			$flun = $this->input->post('flun');
			$count = $this->AdminLogin_model->AllCount("admin",array('admin_email'=>$flun));
			if($count >= 1){
				echo 1;

			}else{
					echo 2;
			}
			


		}
			
		
	}


	function logout()
	{
		$this->AdminLogin_model->logout();
		redirect('admin');
	}
}
