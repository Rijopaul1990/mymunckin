<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_Controller {
  
  var $data = array();
  var $form_user_id = false;

  public function __construct()
  {
    parent::__construct();

    if(!$this->session->userdata('admindetail'))
    {
      redirect('admin/login');
    }
    $this->load->helper(array('form','url'));
    $this->load->model(array('login_model','AdminModel','Category_model'));
    $this->load->library(array('form_validation','session','banner'));
    $this->load->helper("general");
    $this->load->database();
      
  }


///Contact/all_contact
function all_contact()
 {
     $data['page_title']  ='All Contact Details';
     $data['all_contact']  = $this->AdminModel->all_fetch("contact",null);
     $this->view('all_contact',$data);
 }

 function add_contact($id=false)
 {

   
  if (@$id)
  {
    $data['page_title'] = ' Edit Contact Details';
    $data['form_action'] ='admin/add_contact/'.$id;
    $row = $this->AdminModel->fs("contact",array('id'=>$id));
    //print_r($row->heading);
   
    $data['number'] = $row->number;
    $data['email']  = $row->email;
    $data['description']  = $row->description;

    }
    else
    {
    $data['page_title'] = ' Add Contact Details';
    $data['form_action'] ='admin/add_contact';
    $data['id'] = '';
    $data['address'] = '';
    $data['contact'] = ''; 
    $data['number '] = '';
    $data['email'] ='';

  
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    
    $this->form_validation->set_rules('email','Email Id','required|trim');
    $this->form_validation->set_rules('number','Number','required|trim');
    $this->form_validation->set_rules('description','description','required|trim');
    if ($this->form_validation->run()==false) {
        $this->view('add_contact',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
      $save['number']                    =  $this->input->post('number');
      //$save['schedule']                  =  $this->input->post('schedule');
      $save['description']               =  $this->input->post('description');
      $save['email']                     =  $this->input->post('email');
      //$save['map']                     =  $this->input->post('map');

      

         if(@$id){
          
           $result=  $this->AdminModel->update("contact",$save,array('id'=>$id));
        }else{
         $result=  $this->AdminModel->Insert("contact",$save);
             }
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/add_contact/'.@$id);
  }else{
  $this->session->set_flashdata('error','Record not insert');
  redirect('admin/add_contact/'.@$id);
  }



 }


}

function UpdateContact($id)
{
$fs = $this->AdminModel->fs("contact",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("contact",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/all_contact');
}

}

// function DeleteContact($id)
// {
// $fs = $this->AdminModel->fs("contact",array('id' => $id ));
//  $a = $this->AdminModel->delete("contact",array('id' => $id ));
// if($a == true){
//   @unlink($fs->img);
// $this->session->set_flashdata('success','One Item Succesfully Deleted..!!',3);
// redirect('admin/all_contact');
// }

// }


//ADD Social
function all_social()
 {
     $data['page_title']  ='All Social';
     $data['all_social']  = $this->AdminModel->all_fetch("social_link",null);
     $this->view('all_social',$data);
 }

 function add_social($id=false)
 {


   
  if (@$id)
  {
    $data['page_title'] = ' Edit Social';
    $data['form_action'] ='admin/Contact/add_social/'.$id;
    $row = $this->AdminModel->fs("social_link",array('id'=>$id));
    //print_r($row->heading);
    $data['c_name'] = $row->c_name;
    $data['sort_order'] = $row->sort_order;
    $data['link'] = $row->link;
    }
    else
    {
    $data['page_title'] = ' Add Social';
    $data['form_action'] ='admin/Contact/add_social';
    $data['id'] = '';
    $data['c_name'] = '';
  
  
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('c_name','Social','required');
    $this->form_validation->set_rules('sort_order','Sort Order','required');
    $this->form_validation->set_rules('link','link','required');
    if ($this->form_validation->run()==false) {
        $this->view('add_social',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
      $save['c_name']                      =  $this->input->post('c_name');
      $save['sort_order']                =  $this->input->post('sort_order');
      $save['link']                =  $this->input->post('link');
                      


         if(@$id){
          
           $result=  $this->AdminModel->update("social_link",$save,array('id'=>$id));
        }else{
         $result=  $this->AdminModel->Insert("social_link",$save);
             }
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/Contact/add_social/'.@$id);
  }else{
  $this->session->set_flashdata('error','Record not insert');
  redirect('admin/Contact/add_social/'.@$id);
  }



 }


}

function UpdateSocial($id)
{
$fs = $this->AdminModel->fs("social_link",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("social_link",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/Contact/all_social');
}

}
function UpdateHeaderSocial($id)
{
$fs = $this->AdminModel->fs("social_link",array('id' => $id ));
    if($fs->status_for_header == 1)
    {
      $status = array('status_for_header'=>0);
    }else{
      $status = array('status_for_header'=>1);
    }
 $a = $this->AdminModel->update("social_link",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/Contact/all_social');
}

}
function  DeleteSocial($id)
{
  if ($id) {
    $this->AdminModel->delete('social_link',array('id'=>$id));
     $this->session->set_flashdata('success','Record delete successfully');
    redirect('admin/Contact/all_social');
  }

}

}

