<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Milestone extends Admin_Controller {
  
  var $data = array();
  var $for_form_user_id = false;

  public function __construct() 
  {
    parent::__construct(); 

    if(!$this->session->userdata('admindetail'))
    {
      redirect('admin/login');
    }
    $this->load->helper(array('form','url','general'));
    $this->load->model(array('Login_model','AdminModel','Category_model'));
    $this->load->library(array('form_validation','session','banner'));
    $this->load->database();
      
  }


function all_milestone_category()
 {
     $data['page_title']  ='All Category';
     $data['all_milestone_category']  = $this->AdminModel->all_fetch("milestone_category",null);
     $this->view('all_milestone_category',$data);
 }
function add_milestone_category($id=false)
 {
 
  if (@$id)
  {
    $data['page_title'] = ' Edit Category';
    $data['form_action'] ='admin/add_milestone_category/'.$id;
    $row = $this->AdminModel->fs("milestone_category",array('id'=>$id));

    $data['name']         = $row->name;
    $data['img']         = $row->img;
    $data['id']           = $row->id;
    $data['sort_order']   = $row->sort_order;


    }
    else
    {
    $data['page_title'] = ' Add Category';
    $data['form_action'] ='admin/add_milestone_category';
    $data['id'] = '';
    $data['name_2'] = '';
  
  
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('name','Name','required|trim');
    $this->form_validation->set_rules('sort_order','Sort Order','required|trim');  

    
    if ($this->form_validation->run()==false) {
        $this->view('add_milestone_category',$data);
     }else{
      $save= array();
          
       if(@$id){
       $save['id'] = $id; 
       
      }
      
       $save['sort_order']           =  $this->input->post('sort_order');
       $save['name']                 =  $this->input->post('name');

        $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/template/';
           $config['allowed_types']        = '*';
           $config['max_size']             = 5000;
           $config['file_name']            = time().$_FILES['img']['name'];
           $this->upload->initialize($config);
           if ( !$this->upload->do_upload('img'))
           {                        
               $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
               echo  $error = $this->upload->display_errors();
               exit();
              }
           else
           {
               @$path =  $this->upload->data();
                $save['img'] = 'upload/template/'.$path['file_name'];
                
           }
         
     }
      
         if(@$id){
            //$save['link']       =  sfu($this->input->post('name'));
           $result=  $this->AdminModel->update("milestone_category",$save,array('id'=>$id));
        }else{
           //$save['link']       =  sfu($this->input->post('name'));
         $result=  $this->AdminModel->Insert("milestone_category",$save);
             }
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/add_milestone_category/'.@$id);
  }else{
  $this->session->set_flashdata('error','Record not insert');
  redirect('admin/add_milestone_category/'.@$id);
  }



 }


}
function UpdateCategory($id)
{
$fs = $this->AdminModel->fs("milestone_category",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("milestone_category",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/all_milestone_category');
}

}
function  DeleteCategory($id)
{
  $check = $this->AdminModel->AllCount("milestone",array('m_id'=>$id));
  if ($check >= 1) {
     $this->session->set_flashdata('error','First Delete Relative Templates');
    redirect('admin/all_milestone_category');
    
  }else{
    $this->AdminModel->delete('milestone_category',array('id'=>$id));
     $this->session->set_flashdata('success','Record delete successfully');
    redirect('admin/all_milestone_category');
  }

}

//ADD TEMPLATE
function all_template()
 {
     $data['page_title']  ='All Template ';
     $data['all_template']  = $this->AdminModel->all_fetch("template",null);
     $this->view('all_template',$data);
 }

 function add_template($id=false)
 {

   $data['all_milestone_category']  = $this->AdminModel->all_fetch("milestone_category",array('status'=>1));
   $data['template_type'] = array('1'=>"Free",'2'=>"Paid");
  if (@$id)
  {
    $data['page_title'] = ' Edit Template';
    $data['form_action'] ='admin/add_template/'.$id;
    $row = $this->AdminModel->fs("template",array('id'=>$id));
    //print_r($row->heading);
    $data['name']    = $row->name;
    $data['c_id']    = $row->c_id;
     $data['id']   = $row->id;
     $data['short_description'] = $row->short_description;
    $data['sort_order']   = $row->sort_order;
    $data['img']   = $row->img;
    $data['free_or_paid'] = $row->free_or_paid;
  
    }
    else
    {
    $data['page_title'] = ' Add Template';
    $data['form_action'] ='admin/add_template';
    $data['id'] = '';
    $data['c_id'] = '';
  
  
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('c_id','Category','required|trim');
    $this->form_validation->set_rules('name','Heading','required|trim');
    $this->form_validation->set_rules('sort_order','Sort Order','required|trim');
    $this->form_validation->set_rules('short_description','short description','required|trim');
     $this->form_validation->set_rules('free_or_paid','Template Type','required|trim');
   
    if ($this->form_validation->run()==false) {
        $this->view('add_template',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
       $save['c_id']                =  $this->input->post('c_id');
       $save['sort_order']          =  $this->input->post('sort_order');
       $save['name']                =  $this->input->post('name');
       $save['short_description']   =  $this->input->post('short_description');
       $save['free_or_paid']        =  $this->input->post('free_or_paid');


        $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/template/';
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
                $save['img'] = 'upload/template/'.$path['file_name'];
                
           }
         
     }


         if(@$id){
          
           $result=  $this->AdminModel->update("template",$save,array('id'=>$id));
        }else{
         $result=  $this->AdminModel->Insert("template",$save);
             }
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/add_template/'.@$id);
  }else{
  $this->session->set_flashdata('error','Record not insert');
  redirect('admin/add_template/'.@$id);
  }



 }


}
function UpdateTemplate($id)
{
$fs = $this->AdminModel->fs("template",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("template",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/all_template');
}

}


function UpdateHome($id)
{
$fs = $this->AdminModel->fs("template",array('id' => $id ));
    if($fs->status_for_home == 1)
    {
      $status = array('status_for_home'=>0);
    }else{
      $status = array('status_for_home'=>1);
    }
 $a = $this->AdminModel->update("template",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/all_template');
}

}

function UpdateFeature($id)
{
$fs = $this->AdminModel->fs("template",array('id' => $id ));
    if($fs->status_for_feature == 1)
    {
      $status = array('status_for_feature'=>0);
    }else{
      $status = array('status_for_feature'=>1);
    }
 $a = $this->AdminModel->update("template",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/all_template');
}

}



function  DeleteTemplate($id)
{
  if ($id) {
    $this->AdminModel->delete('template',array('id'=>$id));
     $this->session->set_flashdata('success','Record delete successfully');
    redirect('admin/all_template');
  }

}





}