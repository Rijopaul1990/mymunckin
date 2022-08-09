<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends Admin_Controller {
  
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
    $this->load->model(array('login_model','AdminModel'));
    $this->load->library(array('form_validation','session','banner'));
    $this->load->helper("general");
    $this->load->database();
      
  }
//Add HEADER
 function all_testimonial()
 {
     $data['page_title']  ='Testimonial List';
     $data['all_testimonial']  = $this->AdminModel->all_fetch("testimonial",null);
     //print_r($data['all_topbar']);
     $this->view('all_testimonial',$data);
 }

 function add_testimonial($id=false)
 {

  
  if (@$id)
  {
    $data['page_title'] = ' Edit Testimonial';
    $data['form_action'] ='admin/add_testimonial/'.$id;
    $row = $this->AdminModel->fs("testimonial",array('id'=>$id));
    $data['sort_order']           = $row->sort_order;
    $data['name']               = $row->name;
    $data['description']     = $row->description;
    $data['id']             = $row->id;
    $data['stars'] =$row->stars;
   
    }
    else
    {
    $data['page_title'] = ' Add Testimonial';
    $data['form_action'] ='admin/add_testimonial';
    $data['id'] = '';
    $data['sort_order'] = '';
    $data['sort_order']         = '';
    $data['name']     = '';
    //$data['short_description']      = '';
    $data['description']   = '';
    $data['status_for_home']             = '';
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('sort_order','Sort Order','trim|required');
    $this->form_validation->set_rules('name','Name','trim|required');
    $this->form_validation->set_rules('description','Description','trim|required');
    $this->form_validation->set_rules('stars','stars','trim|required');
    //$this->form_validation->set_rules('btn_name','button Name','required');

    if ($this->form_validation->run()==false) {
        $this->view('add_testimonial',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
      $save['sort_order']                =  $this->input->post('sort_order');
      $save['name']                     =  $this->input->post('name');
      $save['description']             =  $this->input->post('description');
      $save['stars']                    =  $this->input->post('stars');

   

         //print_r($save);

         if(@$id){
          
           $result=  $this->AdminModel->update("testimonial",$save,array('id'=>$id));
             if ($result) {
                    $this->session->set_flashdata('success','Record Insert successfully');
                    redirect('admin/add_testimonial/'.$id);
                    }else{
                    $this->session->set_flashdata('error','Record not insert');
                    redirect('admin/all_testimonial');
                    }
        }else{
         $result=  $this->AdminModel->Insert("testimonial",$save);
           if ($result) {
                    $this->session->set_flashdata('success','Record Update successfully');
                    redirect('admin/add_testimonial');
                    }else{
                    $this->session->set_flashdata('error','Record not insert');
                    redirect('admin/add_testimonial');
                    }
             }




 }


}

function UpdateTestimonial($id)
{
$fs = $this->AdminModel->fs("testimonial",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("testimonial",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('delete','Status Succesfully Updated..!!',3);
redirect('admin/all_testimonial');
}

}

function DeleteTestimonial($id)
{
$fs = $this->AdminModel->fs("testimonial",array('id' => $id ));
 @unlink($fs->img);
 $a = $this->AdminModel->delete("testimonial",array('id' => $id ));
if($a == true){
  
$this->session->set_flashdata('delete','One Item Succesfully Deleted..!!',3);
redirect('admin/all_testimonial');
}

}



}