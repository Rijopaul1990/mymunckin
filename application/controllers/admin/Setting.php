<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends Admin_Controller {
  
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

  public function Profile()
  {
    $data['page_title']= 'Profile';
    //$data['all_our_team']= $this->AdminModel->all_fetch('our_team',null);
    $this->view('profile', $data);
  }

  
  function ChangePassword($id=false)
  {

   
     $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
     $this->form_validation->set_rules('old_password','old password','required');
     $this->form_validation->set_rules('new_pass','new pass','required|trim');
     $this->form_validation->set_rules('new_confirm_pass','new_confirm_pass','required|trim');
    //  $this->form_validation->set_rules('design','design','required');
     if ($this->form_validation->run()==false) {
         $this->view('profile',@$data);
      }else{
 
 
       $save= array();
           
       
      //  print_r($this->input->post('design'));
      //  exit();
       $save['new_confirm_pass']                 =  $this->input->post('new_confirm_pass');
       $save['new_pass']                         =  $this->input->post('new_pass');
       $save['new_confirm_pass']                 =  $this->input->post('new_confirm_pass');
       
      
           
            $result=  $this->AdminModel->update("our_team",$save,array('id'=>$id));
           
              if ($result) {
                $this->session->set_flashdata('success','Record Updated successfully');
                redirect('admin/profile/');
                }else{
                $this->session->set_flashdata('error','Record not insert');
                redirect('admin/profile');
                }
 
 
  }
 
 
 }

function UpdateTeam($id)
{
  $row = $this->AdminModel->fs('our_team',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('our_team',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Status Update successfully');
  redirect('admin/all_our_team');
  }
}
function  DeleteTeam($id)
{
  if ($id) {
    $this->AdminModel->delete('our_team',array('id'=>$id));
     $this->session->set_flashdata('success','Record delete successfully');
    redirect('admin/all_our_team');
  }

}
//all_subscriber
function all_subscriber()
 {
     $data['page_title']  ='All Subscriber ';
  
     $data['all_subscriber']  = $this->AdminModel->all_fetch_desc("subscriber",null,"id");
     $this->view('all_subscriber',$data);
 }

//ADD TEMPLATE
function all_page()
 {
     $data['page_title']  ='All Page ';
     $data['all_page']  = $this->AdminModel->all_fetch("page",null);
     $this->view('all_page',$data);
 }

 function add_page($id=false)
 {


   $data['page_type'] = array('1'=>"Due Date",'2'=>"Date Of Birth");
  if (@$id)
  {
    $data['page_title'] = ' Edit Page';
    $data['form_action'] ='admin/add_page/'.$id;
    $row = $this->AdminModel->fs("page",array('id'=>$id));
    //print_r($row->heading);

     $data['id']   = $row->id;
     $data['description'] = $row->description;

    $data['type'] = $row->type;
  
    }
    else
    {
    $data['page_title'] = ' Add Page';
    $data['form_action'] ='admin/add_page';
    $data['id'] = '';
    $data['c_id'] = '';
  
  
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

    $this->form_validation->set_rules('description',' Description','required|trim');
     $this->form_validation->set_rules('type','Page Type','required|trim');
   
    if ($this->form_validation->run()==false) {
        $this->view('add_page',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
     
       $save['description']   =  $this->input->post('description');
       $save['type']        =  $this->input->post('type');




         if(@$id){
          
           $result=  $this->AdminModel->update("page",$save,array('id'=>$id));
        }else{
         $result=  $this->AdminModel->Insert("page",$save);
             }
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/add_page/'.@$id);
  }else{
  $this->session->set_flashdata('error','Record not insert');
  redirect('admin/add_page/'.@$id);
  }



 }


}
function UpdatePage($id)
{
$fs = $this->AdminModel->fs("page",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("page",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/all_page');
}

}

//Extra pages
//ADD TEMPLATE
function all_extra_page()
 {
     $data['page_title']  ='All Page ';
     $data['all_extra_page']  = $this->AdminModel->all_fetch("extra_pages",null);
     $this->view('all_extra_page',$data);
 }

 function add_extra_page($id=false)
 {


   $data['page_type'] = array('privacy-policy'=>"Privacy Policy",'refund-policy'=>"Refund Policy","term-and-condtiton"=>"Term And Condtiton");
  if (@$id)
  {
    $data['page_title'] = ' Edit Page';
    $data['form_action'] ='admin/add_extra_page/'.$id;
    $row = $this->AdminModel->fs("extra_pages",array('id'=>$id));
    //print_r($row->heading);

     $data['id']   = $row->id;
     $data['description'] = $row->description;

    $data['type'] = $row->type;
  
    }
    else
    {
    $data['page_title'] = ' Add Page';
    $data['form_action'] ='admin/add_extra_page';
    $data['id'] = '';
    $data['c_id'] = '';
  
  
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

    $this->form_validation->set_rules('description',' Description','required|trim');
     $this->form_validation->set_rules('type','Page Type','required|trim');
   
    if ($this->form_validation->run()==false) {
        $this->view('add_extra_page',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
     
       $save['description']   =  $this->input->post('description');
       $save['type']        =  $this->input->post('type');




         if(@$id){
          
           $result=  $this->AdminModel->update("extra_pages",$save,array('id'=>$id));
        }else{
         $result=  $this->AdminModel->Insert("extra_pages",$save);
             }
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/add_extra_page/'.@$id);
  }else{
  $this->session->set_flashdata('error','Record not insert');
  redirect('admin/add_extra_page/'.@$id);
  }



 }


}
function UpdateExtraPage($id)
{
$fs = $this->AdminModel->fs("extra_pages",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("extra_pages",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/all_extra_page');
}

}



}