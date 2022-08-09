<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends Admin_Controller {
   
  var $data = array();
  var $for_form_user_id = false;

  public function __construct()
  {
    parent::__construct();

    if(!$this->session->userdata('admindetail'))
    {
      redirect('admin/login');
    }
    $this->load->helper(array('form','url'));
    $this->load->model(array('Login_model','AdminModel','Category_model'));
    $this->load->library(array('form_validation','session','banner'));
    $this->load->database();
      
  } 

  public function index()
  {
    $data['page_title']= 'Dashboard';
    $data['dashboard'] = $this->data;
    $this->view('dashboard', $data);
  }




}