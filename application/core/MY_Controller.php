<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//kill any references to the following methods
		$mthd = $this->router->method;
		if($mthd == 'view' || $mthd == 'partial')
		{
			show_404();
		}
        // error_reporting(0);
		$this->load->database();
    
		//if SSL is enabled in config force it here.
    if (config_item('ssl_support') && (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == 'off'))
		{
			$CI =& get_instance();
			$CI->config->config['base_url'] = str_replace('http://', 'https://', $CI->config->config['base_url']);
			redirect($CI->uri->uri_string());
		}
	}
}

class Front_Controller extends Base_Controller {

	

	function __construct(){
		
		parent::__construct();
		$this->load->add_package_path(APPPATH.'themes/default/');
		$this->load->model('Category_model');

	}

	function view($view, $vars = array(), $string=false)
	{
		if($string)
		{
			$result	 = $this->load->view('header', $vars, true);
			$result	.= $this->load->view($view, $vars, true);
			$result	.= $this->load->view('footer', $vars, true);
			
			return $result;
		}
		else
		{	
			$this->load->view('header', $vars);
			$this->load->view($view, $vars);
			$this->load->view('footer', $vars);
		}
	}
	
	function partial($view, $vars = array(), $string=false)
	{
		if($string)
		{
			return $this->load->view($view, $vars, true);
		}
		else
		{
			$this->load->view($view, $vars);
		}
	}

	function json($json)
	{
		header('Content-Type: application/json', true);
		die(json_encode($json));
	}
}



// start student controller.




class Admin_Controller extends Base_Controller 
{

		
	function __construct()
	{
		parent::__construct();
		// $this->load->library('controllerlist');
		
	}

	function view($view, $vars = array(), $string=false)
	{
		if($string)
		{
			$result	 = $this->load->view('admin/header', $vars, true);
			$result	.= $this->load->view('admin/'.$view, $vars, true);
			$result	.= $this->load->view('admin/footer', $vars, true);
			
			return $result;
		}
		else
		{
			$this->load->view('admin/header', $vars);
			$this->load->view('admin/'.$view, $vars);
			$this->load->view('admin/footer', $vars);
		}
	}
	
	function partial($view, $vars = array(), $string=false)
	{
		if($string)
		{
			return $this->load->view('admin/'.$view, $vars, true);
		}
		else
		{
			$this->load->view('admin/'.$view, $vars);
		}
	}

	function json($json)
	{
		header('Content-Type: application/json', true);
		die(json_encode($json));
	}
		//Image Uploading 
	 function uploadImage($file,$img_name,$allowed_types,$dir)
        {

        	$this->load->library('image_lib');
             if($img_name){
                $config['encrypt_name']         = TRUE;   
                $config['upload_path']          = './upload/'.$dir.'/';
                $config['allowed_types']        = $allowed_types;
                $config['max_size']             = 10000;
                $config['file_name']            = time().$img_name;
                $this->load->library('upload', $config);
                if ( !$this->upload->do_upload($file))
                {                        
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                    echo  $error = $this->upload->display_errors();
                   }
                else
                {	
                	 
               
                  //$this->load->library('image_lib', $config_manip);
                    @$path =  $this->upload->data();
                    

                     return $uploaded_img = 'upload/'.$dir.'/'.$path['file_name'];
                     
                }
              
          }
           
                    }
      
}

// start User controller.

class Student_Controller extends Base_Controller {

	

	function __construct(){
		
		parent::__construct();
		$this->load->add_package_path(APPPATH.'themes/default/');
		$this->load->model('Category_model');

     	


	}

	function view($view, $vars = array(), $string=false)
	{
		if($string)
		{
			$result	 = $this->load->view('header', $vars, true);
			$result	.= $this->load->view($view, $vars, true);
			$result	.= $this->load->view('footer', $vars, true);
			
			return $result;
		}
		else
		{	
			$this->load->view('header', $vars);
			$this->load->view($view, $vars);
			$this->load->view('footer', $vars);
		}
	}
	
	function partial($view, $vars = array(), $string=false)
	{
		if($string)
		{
			return $this->load->view($view, $vars, true);
		}
		else
		{
			$this->load->view($view, $vars);
		}
		
	}

	function json($json)
	{
		header('Content-Type: application/json', true);
		die(json_encode($json));
	}
}

// end USER controller