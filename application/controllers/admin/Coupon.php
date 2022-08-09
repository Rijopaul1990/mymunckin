<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends Admin_Controller {
  
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
    $this->load->model(array('Login_model','AdminModel'));
    $this->load->library(array('form_validation','session','banner'));
    $this->load->database();
      
  }

  public function all_coupon()
  {
    $data['page_title']= 'All Coupon Code';
    $data['all_coupon']= $this->AdminModel->all_fetch('deals',null);
    $this->view('all_coupon', $data);
  }

  
  function add_coupon($id=false)
  {
    $data['rate_type'] = array('1' =>"Fixed",'2'=>" Percent (%)");
    //$data['all_type'] = array('1' =>"Package",'2'=>"MasterClass",'3'=>"Both");
     //$data['all_artist'] = $this->AdminModel->all_fetch('admin',array('type'=>2,'status'=>1,'is_verified'=>1),"admin_name");
   if (@$id)
   {
     $data['page_title'] = ' Edit Coupon Code';
     $data['form_action'] ='admin/add_coupon/'.@$id;
     $row = $this->AdminModel->fs("deals",array('id'=>$id));
     $data['coupan_code']       = $row->coupan_code;
     $data['minimum_amount']    = $row->minimum_amount;
     $data['id']                = $row->id;
     $data['rate']              = $row->rate;
     $data['rate_amount']       = @$row->rate_amount;
     $data['start_date']        = @$row->start_date;
     $data['expiry_date']       = @$row->expiry_date;
     $data['img']               = @$row->img;
     $data['use_per_user']      = @$row->use_per_user;
     $data['type']              = @$row->type;
    // $data['short_description'] = @$row->short_description;
     // $data['applied_on']        = @$row->applied_on;    
     // $data['artist_id']         = @$row->artist_id;
     }
     else
     {
     $data['page_title'] = ' Add Coupon Code';
     $data['form_action'] ='admin/add_coupon';
     $data['id'] = '';
     $data['rate_amount'] = '';
     $data['rate_amount']         = '';
     $data['minimum_amount']     = '';
     $data['rate']      = '';
     $data['minimum_amount']   = '';
     $data['link']             = '';
     
     }
 
     $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
     $this->form_validation->set_rules('coupan_code','Coupan Code','trim|required');
     $this->form_validation->set_rules('minimum_amount','Minimum Amount','required|trim');
     $this->form_validation->set_rules('rate','Rate','required|trim');
     $this->form_validation->set_rules('rate_amount','Rate Or Amount','required');
     $this->form_validation->set_rules('start_date','Start Date','trim|required');
     $this->form_validation->set_rules('expiry_date','End Date','required|trim');
     $this->form_validation->set_rules('use_per_user','Uses','required|trim');
    // $this->form_validation->set_rules('short_description','short description','required|trim');
        //$this->form_validation->set_rules('type','type','required|trim');
        //$this->form_validation->set_rules('rate_amount','Rate Or Amount','required');
       if ($this->form_validation->run()==false) {
         $this->view('add_coupon',$data);
      }else{
 
 
       $save= array();
           
        if(@$id){
       $save['id'] = $id; 
        
       }
      //  print_r($this->input->post('rate_amount'));
      //  exit();
       $save['coupan_code']                         =  $this->input->post('coupan_code');
       $save['minimum_amount']                      =  $this->input->post('minimum_amount');
       $save['rate']                                =  $this->input->post('rate');
       $save['rate_amount']                         =  $this->input->post('rate_amount');
       $save['expiry_date']                         =  $this->input->post('expiry_date');
       $save['start_date']                          =  $this->input->post('start_date');
       $save['use_per_user']                        =  $this->input->post('use_per_user');
      // $save['short_description']                   =  $this->input->post('short_description');
       // $save['type']                                =  $this->input->post('type');
       
      
         $this->load->library('upload');
            if($_FILES['img']['name']){
                 $config['encrypt_name']         = TRUE;   
                 $config['upload_path']          = './upload/coupon/';
                 $config['allowed_types']        = 'jpg|png|jpeg|svg';
                 $config['max_size']             = 5000;
                 $config['file_name']            = time().$_FILES['img']['name'];
                 $this->upload->initialize($config);
                 if ( !$this->upload->do_upload('img'))
                 {                        
                     $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                     echo  $error = $this->upload->display_errors();
                    }
                 else
                 {
                     @$path =  $this->upload->data();
                      $save['img'] = 'upload/coupon/'.$path['file_name'];
                      
                 }
               
           }
           
        
                  if(@$id){
           
            $result=  $this->AdminModel->update("deals",$save,array('id'=>$id));
            $last_id = $id;
             
         }else{
          $result=  $this->AdminModel->Insert("deals",$save);
          $last_id     =  $this->db->insert_id();
              }
             
              if ($result) {
                $this->session->set_flashdata('success','Record Updated successfully');
                redirect('admin/add_coupon/'.$id);
                }else{
                $this->session->set_flashdata('error','Record not insert');
                redirect('admin/all_coupon');
                }
                
      
 
 
  }
 
 
 }

function UpdateCoupon($id)
{
  $row = $this->AdminModel->fs('deals',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('deals',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Status Update successfully');
  redirect('admin/all_coupon');
  }
}
function  DeleteCoupon($id)
{
  if ($id) {
    $this->AdminModel->delete('deals',array('id'=>$id));
     $this->session->set_flashdata('success','Record delete successfully');
    redirect('admin/all_coupon');
  }

}



}