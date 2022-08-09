<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Admin_Controller {
  
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

  public function all_aboutus()
  {
    $data['page_title']= 'About Us';
    $data['all_aboutus']= $this->AdminModel->all_fetch('about',null);
    $this->view('all_aboutus', $data);
  }

  
  function add_aboutus($id=false)
  { 
     
  if ($id) {
    $data['page_title'] = ' Edit About Us';
    $data['form_action'] ='admin/add_aboutus/'.$id;
    $row = $this->AdminModel->fs('about',array('id'=>$id));
    $data['name']=$row->name;
    $data['description']=$row->description;
    $data['id']=$row->id;
    $data['img'] = $row->img;
    $data['img1'] = $row->img1;
    $data['short_description'] = $row->short_description;
    $data['our_thought']    = $row->our_thought;
    $data['story_heading']    = $row->story_heading;
    $data['story_img']    = $row->story_img;
    
    }else{
    $data['page_title'] = 'Add About Us';
    $data['form_action'] ='admin/add_aboutus';
    $data['id'] = '';
    $data['name'] = "";
    $data['img'] = "";
    $data['description'] = '';
   
    }
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('name','name','required|trim');
    $this->form_validation->set_rules('description','Description','required|trim');
    $this->form_validation->set_rules('short_description','short description','required|trim');

    if ($this->form_validation->run()==false) { 
        $this->view('add_aboutus',$data);
     } else{
    $save= array();

    // $save['name'] = $this->input->post('name');    
    $save['name']         = $this->input->post('name'); 
    $save['description']  = $this->input->post('description');
    $save['short_description']  = $this->input->post('short_description');
    $save['our_thought']  = $this->input->post('our_thought');
     $save['story_heading']  = $this->input->post('story_heading');
     
    $this->load->library('upload');
      if($_FILES['story_img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/about/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg';
           $config['max_size']             = 5000;
           $config['file_name']            = time().$_FILES['story_img']['name'];
           $this->upload->initialize($config);
           if ( !$this->upload->do_upload('story_img'))
           {                        
               $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
               echo  $error = $this->upload->display_errors();
              }
           else
           {
               @$path =  $this->upload->data();
                $save['story_img'] = 'upload/about/'.$path['file_name'];
                
           }
         
     }
         if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/about/';
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
                $save['img'] = 'upload/about/'.$path['file_name'];
                
           }
         
     }
          if($_FILES['img1']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/about/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg';
           $config['max_size']             = 5000;
           $config['file_name']            = time().$_FILES['img1']['name'];
           $this->upload->initialize($config);
           if ( !$this->upload->do_upload('img1'))
           {                        
               $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
               echo  $error = $this->upload->display_errors();
              }
           else
           {
               @$path =  $this->upload->data();
                $save['img1'] = 'upload/about/'.$path['file_name'];
                
           }
         
     }
    
    
    
 if($id){
        // $save['id'] = $id; 
        $result=  $this->AdminModel->update('about',$save,array('id'=>$id));
        if ($result) 
        {
        $this->session->set_flashdata('success','Record Update successfully');
        redirect('admin/add_aboutus/'.$id);
        }
        else
        {
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_aboutus/'.$id);
        }
     }else{
        $result=  $this->AdminModel->Insert('about',$save);
        if ($result) {
        $this->session->set_flashdata('success','Record Insert successfully');
        redirect('admin/add_aboutus');
        }else{
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_aboutus');
        }


     }
  }
 }

function UpdateAbout($id)
{
  $row = $this->AdminModel->fs('about',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('about',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/all_aboutus');
  }
}
// function  DeleteAbout($id)
// {
//   if ($id) {
//     $this->AdminModel->delete('about',array('id'=>$id));
//      $this->session->set_flashdata('success','Record delete() successfully');
//     redirect('admin/all_aboutus');
//   }

// }





//ADD VISION AND MISSION
  public function all_about_why_mymunchkin()
  {
    $data['page_title']= 'Why My Munchkin';
    $data['all_about_why_mymunchkin']= $this->AdminModel->all_fetch('about_why_munchkin',null);
    $this->view('all_about_why_mymunchkin', $data);
  }

  
  function add_about_why_mymunchkin($id=false)
  { 
     
  if ($id) {
    $data['page_title'] = ' Edit Why My Munchkin';
    $data['form_action'] ='admin/add_about_why_mymunchkin/'.$id;
    $row = $this->AdminModel->fs('about_why_munchkin',array('id'=>$id));
   
    $data['description']=$row->description;
    $data['id']=$row->id;
    $data['img'] = $row->img;

    $data['sort_order'] = $row->sort_order;
    
    }else{
    $data['page_title'] = 'Add Why My Munchkin';
    $data['form_action'] ='admin/add_about_why_mymunchkin';
    $data['id'] = '';
    $data['name'] = "";
    $data['img'] = "";
    $data['description'] = '';
   
    }
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
   
    $this->form_validation->set_rules('description','Description','required|trim');
    $this->form_validation->set_rules('sort_order','Short Order','required|trim');

    if ($this->form_validation->run()==false) { 
        $this->view('add_about_why_mymunchkin',$data);
     } else{
    $save= array();

    // $save['name'] = $this->input->post('name');    
    
    $save['description']  = $this->input->post('description');
    $save['sort_order']   = $this->input->post('sort_order');
     
    $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/about/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg|SVG';
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
                $save['img'] = 'upload/about/'.$path['file_name'];
                
           }
         
     }

         
    
 if($id){
        // $save['id'] = $id; 
        $result=  $this->AdminModel->update('about_why_munchkin',$save,array('id'=>$id));
        if ($result) 
        {
        $this->session->set_flashdata('success','Record Update successfully');
        redirect('admin/add_about_why_mymunchkin/'.$id);
        }
        else
        {
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_about_why_mymunchkin/'.$id);
        }
     }else{
        $result=  $this->AdminModel->Insert('about_why_munchkin',$save);
        if ($result) {
        $this->session->set_flashdata('success','Record Insert successfully');
        redirect('admin/add_about_why_mymunchkin');
        }else{
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_about_why_mymunchkin');
        }


     }
  }
 }

function UpdateWhyMunchkin($id)
{
  $row = $this->AdminModel->fs('about_why_munchkin',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('about_why_munchkin',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/all_about_why_mymunchkin');
  }
}

function  DeleteWhyMunchkin($id)
{
  if ($id) {
    $this->AdminModel->delete('about_why_munchkin',array('id'=>$id));
     $this->session->set_flashdata('success','Record delete() successfully');
    redirect('admin/all_about_why_mymunchkin');
  }

}


//ADD FAQ
public function all_faq()
  {
    $data['page_title']= 'All Faq';
    $data['all_faq']= $this->AdminModel->all_fetch('faq',null);
    $this->view('all_faq', $data);
  }

  
  function add_faq($id=false)
  {
  if (@$id)
   {
     $data['page_title'] = ' Edit Faq';
     $data['form_action'] ='admin/add_faq/'.@$id;
     $row = $this->AdminModel->fs("faq",array('id'=>$id));
     $data['name']                          = $row->name;
     $data['id']                            = $row->id;
     $data['description']                 = $row->description;
     $data['sort_order']                   = $row->sort_order;



     }
     else
     {
     $data['page_title'] = ' Add Faq';
     $data['form_action'] ='admin/add_faq';
     $data['id'] = '';
     $data['b_s_name'] = '';
     $data['b_s_name']         = '';
          $data['name']     = '';
     $data['img']      = '';
     $data['name']   = '';
     $data['description']             = '';
     
     }
 
     $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
     $this->form_validation->set_rules('name','Heading','required|trim');
     $this->form_validation->set_rules('description','Answer','trim|required');
     $this->form_validation->set_rules('sort_order','sort_order','trim|required');
     
     if ($this->form_validation->run()==false) {
         $this->view('add_faq',$data);
      }else{
 
 
       $save= array();
           
        if(@$id){
       $save['id'] = $id; 
        
       }

       $save['name']                                =  $this->input->post('name');
       $save['description']                             =  $this->input->post('description');
       $save['sort_order']                              =  $this->input->post('sort_order');

       
          if(@$id){
           
            $result=  $this->AdminModel->update("faq",$save,array('id'=>$id));
            $last_id = $id;
             
         }else{
          $result=  $this->AdminModel->Insert("faq",$save);
          $last_id     =  $this->db->insert_id();
              }
             

              if ($result) {
                $this->session->set_flashdata('success','Record Updated successfully');
                redirect('admin/add_faq/'.$id);
                }else{
                $this->session->set_flashdata('error','Record not insert');
                redirect('admin/all_faq');
                }
 
 
  }
 
 
 }

function UpdateFaq($id)
{
  $row = $this->AdminModel->fs('faq',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('faq',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Status Update successfully');
  redirect('admin/all_faq');
  }
}
function  DeleteFaq($id)
{
  if ($id) {
    $this->AdminModel->delete('faq',array('id'=>$id));
     $this->session->set_flashdata('success','Record delete successfully');
    redirect('admin/all_faq');
  }

}



}