<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Home extends Admin_Controller {
  
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
//Add HEADER
 function all_banner()
 {
     $data['page_title']  ='Banner List';
     $data['all_banner']  = $this->AdminModel->all_fetch("banner",null);
     //print_r($data['all_topbar']);
     $this->view('all_banner',$data);
 }

 function add_banner($id=false)
 {

  
  if (@$id)
  {
    $data['page_title'] = ' Edit Banner';
    $data['form_action'] ='admin/Home/add_banner/'.$id;
    $row = $this->AdminModel->fs("banner",array('id'=>$id));

    $data['img']            = $row->img;
    $data['id']             = $row->id;
    $data['heading3']       = $row->heading3;
    $data['heading1']       = $row->heading1;
    $data['heading2']       = $row->heading2;

    $data['btn_name']       = $row->btn_name;
    $data['btn_link']       = $row->btn_link;
    $data['btn_name2']       = $row->btn_name2;
    $data['btn_link2']       = $row->btn_link2;
    $data['btn_name3']       = $row->btn_name3;
    $data['btn_link3']       = $row->btn_link3;

    }
    else
    {
    $data['page_title'] = ' Add Banner';
    $data['form_action'] ='admin/Home/add_banner';
    $data['id'] = '';
    $data['small_description'] = '';
    $data['name']     = '';
    $data['heading3']             = '';
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('heading2','heading 2','trim|required');
    $this->form_validation->set_rules('heading1','Heading 1','trim|required');
    $this->form_validation->set_rules('heading3','Heading 3','trim|required');

    $this->form_validation->set_rules('btn_name','Button Link 1','trim');
    $this->form_validation->set_rules('btn_link','Button Link 1','trim');
    $this->form_validation->set_rules('btn_name2','Button Name 2','trim');
    $this->form_validation->set_rules('btn_link2','Button Link 2','trim');
    $this->form_validation->set_rules('btn_name3','Button Name 3','trim');
    $this->form_validation->set_rules('btn_link3','Button Link 3','trim');

    if ($this->form_validation->run()==false) {
        $this->view('add_banner',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
  
      $save['heading3']                       =  $this->input->post('heading3');
      $save['heading1']                       =  $this->input->post('heading1');
      $save['heading2']                       =  $this->input->post('heading2');

      $save['btn_name']                       =  $this->input->post('btn_name');
      $save['btn_link']                       =  $this->input->post('btn_link');
      $save['btn_name2']                       =  $this->input->post('btn_name2');
      $save['btn_link2']                       =  $this->input->post('btn_link2');
      $save['btn_name3']                       =  $this->input->post('btn_name3');
      $save['btn_link3']                       =  $this->input->post('btn_link3');
      
      $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/home/';
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
                $save['img'] = 'upload/home/'.$path['file_name'];
                
           }
         
     }
          


         //print_r($save);

         if(@$id){
          
           $result=  $this->AdminModel->update("banner",$save,array('id'=>$id));
             if ($result) {
  $this->session->set_flashdata('success','Record Updated successfully');
  redirect('admin/Home/add_banner/'.$id);
  }else{
  $this->session->set_flashdata('error','Record not Updated');
  redirect('admin/Home/all_banner');
  }
        }else{
         $result=  $this->AdminModel->Insert("banner",$save);
           if ($result) {
  $this->session->set_flashdata('success','Record Inserted successfully');
  redirect('admin/Home/add_banner');
  }else{
  $this->session->set_flashdata('error','Record not insert');
  redirect('admin/Home/add_banner');
  }
             }




 }


}

function UpdateBanner($id)
{
$fs = $this->AdminModel->fs("banner",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("banner",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('admin/Home/all_banner');
}

}

function DeleteBanner($id)
{
$fs = $this->AdminModel->fs("banner",array('id' => $id ));
 @unlink($fs->img);
 $a = $this->AdminModel->delete("banner",array('id' => $id ));
if($a == true){
  
$this->session->set_flashdata('success','One Item Succesfully Deleted..!!',3);
redirect('admin/Home/all_banner');
}

}
//ADD Service

  public function all_home_about()
  {
    $data['page_title']= 'Home About Us';
    $data['all_home_about']= $this->AdminModel->all_fetch('home_about',null);
    $this->view('all_home_about', $data);
  }

  
  function add_home_about($id=false)
  { 
     
  if ($id) {
    $data['page_title'] = ' Edit Home About Us';
    $data['form_action'] ='admin/add_home_about/'.$id;
    $row = $this->AdminModel->fs('home_about',array('id'=>$id));
    //$data['heading3']=$row->heading3;
    $data['heading']=$row->heading;
    $data['description']=$row->description;
    $data['img']=$row->img;
    $data['btn_name']=$row->btn_name;
     $data['btn_link']=$row->btn_link;
    $data['short_description']=$row->short_description;
    $data['id']=$row->id;
    
    }else{
    $data['page_title'] = 'Add Home About Us';
    $data['form_action'] ='admin/add_home_about';
    $data['id'] = '';
    $data['heading'] = "";
    $data['description'] ="";
    $data['img'] = "";
    $data['short_description'] = '';
   
    }
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('description','description','required|trim');
    $this->form_validation->set_rules('short_description','Description','required|trim');
    $this->form_validation->set_rules('heading','Heading','required|trim');
     $this->form_validation->set_rules('btn_name','Button Name','required|trim');
    $this->form_validation->set_rules('btn_link','Link','required|trim');
   
    if ($this->form_validation->run()==false)
    {
        $this->view('add_home_about',$data);
     } else
     {
    $save= array();
    $save['description'] = $this->input->post('description'); 
    $save['short_description'] = $this->input->post('short_description');
    $save['heading'] = $this->input->post('heading'); 
    $save['btn_name'] = $this->input->post('btn_name');
    $save['btn_link'] = $this->input->post('btn_link'); 

    $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/home/';
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
                $save['img'] = 'upload/home/'.$path['file_name'];
                
           }
         
     }
 
 if($id){
        // $save['id'] = $id; 
        $result=  $this->AdminModel->update('home_about',$save,array('id'=>$id));
        if ($result) 
        {
        $this->session->set_flashdata('success','Record Update successfully');
        redirect('admin/add_home_about/'.$id);
        }
        else
        {
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_home_about/'.$id);
        }
     }else{
        $result=  $this->AdminModel->Insert('home_about',$save);
        if ($result) {
        $this->session->set_flashdata('success','Record Insert successfully');
        redirect('admin/add_home_about');
        }else{
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_home_about');
        }


     }
  }
 }

function UpdateHomeAbout($id)
{
  $row = $this->AdminModel->fs('home_about',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('home_about',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/all_home_about');
  }
}



//TESTIMONIAL
  public function all_home_howwork()
  {
    $data['page_title']= 'How it work';
    $data['all_home_howwork']= $this->AdminModel->all_fetch('home_how_it_works',null);
    $this->view('all_home_howwork', $data);
  }

  
  function add_home_howwork($id=false)
  { 
     
  if ($id) {
    $data['page_title'] = ' Edit How it work';
    $data['form_action'] ='admin/add_home_howwork/'.$id;
    $row = $this->AdminModel->fs('home_how_it_works',array('id'=>$id));
    //$data['heading3']=$row->heading3;
    $data['heading']=$row->heading;
    $data['you_tube_link']=$row->you_tube_link;
    $data['img']=$row->img;
    $data['short_description']=$row->short_description;
    $data['id']=$row->id;
    $data['btn_name']=$row->btn_name;
    
    }else{
    $data['page_title'] = 'Add How it work';
    $data['form_action'] ='admin/add_home_howwork';
    $data['id'] = '';
    $data['heading'] = "";
    $data['you_tube_link'] ="";
    $data['img'] = "";
    $data['description'] = '';
   
    }
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('you_tube_link','YouTube Link','trim');
    $this->form_validation->set_rules('heading','Heading','required|trim');
    $this->form_validation->set_rules('short_description','short description','required|trim');
    $this->form_validation->set_rules('btn_name','Button Name','required|trim');
   
    if ($this->form_validation->run()==false)
    {
        $this->view('add_home_howwork',$data);
     } else
     {
    $save= array();
    $save['you_tube_link']         = $this->input->post('you_tube_link'); 
    $save['short_description']     = $this->input->post('short_description');
    $save['heading']               = $this->input->post('heading');
    $save['btn_name']              = $this->input->post('btn_name');


    
    $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/home/';
           $config['allowed_types']        = '*';
           $config['max_size']             = 3000;
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
                $save['img'] = 'upload/home/'.$path['file_name'];
                
           }
         
     }
      
 if($id){
        // $save['id'] = $id; 
        $result=  $this->AdminModel->update('home_how_it_works',$save,array('id'=>$id));
        if ($result) 
        {
        $this->session->set_flashdata('success','Record Update successfully');
        redirect('admin/add_home_howwork/'.$id);
        }
        else
        {
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_home_howwork/'.$id);
        }
     }else{
        $result=  $this->AdminModel->Insert('home_how_it_works',$save);
        if ($result) {
        $this->session->set_flashdata('success','Record Insert successfully');
        redirect('admin/add_home_howwork');
        }else{
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_home_howwork');
        }


     }
  }
 }

function UpdateHowItWork($id)
{
  $row = $this->AdminModel->fs('home_how_it_works',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('home_how_it_works',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/all_home_howwork');
  }
}

function DeleteHowItWork($id)
{
$fs = $this->AdminModel->fs("home_how_it_works",array('id' => $id ));
 @unlink($fs->img);
 $a = $this->AdminModel->delete("home_how_it_works",array('id' => $id ));
if($a == true){
  
$this->session->set_flashdata('success','One Item Succesfully Deleted..!!',3);
redirect('admin/all_home_howwork');
}

}

//all extra home_about
  public function all_exprience_support()
  {
    $data['page_title']= 'Experience Support';
    $data['all_exprience_support']= $this->AdminModel->all_fetch('home_experience',null);
    $this->view('all_exprience_support', $data);
  }

  
  function add_exprience_support($id=false)
  { 
     
  if ($id) {
    $data['page_title'] = ' Edit Experience Support';
    $data['form_action'] ='admin/add_exprience_support/'.$id;
    $row = $this->AdminModel->fs('home_experience',array('id'=>$id));
    //$data['heading3']=$row->heading3;
    $data['name']=$row->name;
    $data['heading3']=$row->heading3;
    $data['short_description']=$row->short_description;
    $data['id']=$row->id;
    
    }else{
    $data['page_title'] = 'Add Experience Support';
    $data['form_action'] ='admin/add_exprience_support';
    $data['id'] = '';
    $data['name'] = "";
    $data['heading3'] ="";
    $data['img'] = "";
    $data['short_description'] = '';
   
    }
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('heading3','heading3','required|trim');
    $this->form_validation->set_rules('short_description','Description','required|trim|htmlspecialchars');
    $this->form_validation->set_rules('name','Heading','required|trim');
   
    if ($this->form_validation->run()==false)
    {
        $this->view('add_exprience_support',$data);
     } else
     {
    $save= array();
    $save['heading3'] = $this->input->post('heading3'); 
    $save['short_description'] = $this->input->post('short_description');
    $save['name'] = $this->input->post('name');
    
   
 if($id){
        // $save['id'] = $id; 
        $result=  $this->AdminModel->update('home_experience',$save,array('id'=>$id));
        if ($result) 
        {
        $this->session->set_flashdata('success','Record Update successfully');
        redirect('admin/add_exprience_support/'.$id);
        }
        else
        {
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_exprience_support/'.$id);
        }
     }else{
        $result=  $this->AdminModel->Insert('home_experience',$save);
        if ($result) {
        $this->session->set_flashdata('success','Record Insert successfully');
        redirect('admin/add_exprience_support');
        }else{
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_exprience_support');
        }


     }
  }
 }

function UpdateExprienceSupport($id)
{
  $row = $this->AdminModel->fs('home_experience',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('home_experience',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/all_exprience_support');
  }
}

function DeleteExprienceSupport($id)
{
$fs = $this->AdminModel->fs("home_experience",array('id' => $id ));
 @unlink($fs->img);
 $a = $this->AdminModel->delete("home_experience",array('id' => $id ));
if($a == true){
  
$this->session->set_flashdata('success','One Item Succesfully Deleted..!!',3);
redirect('admin/all_exprience_support');
}

}

//ALL HOME HEADING
  public function all_home_heading()
  {
    $data['page_title']= 'All Home Heading';
    $data['all_home_heading']= $this->AdminModel->all_fetch('home_heading',null);
    $this->view('all_home_heading', $data);
  }

  
  function add_home_heading($id=false)
  { 
   
$data['array'] = array(
  "1" => "Create Digital Baby PhotoBooks",
  "2" => "Create Baby Announcement Online",
  "3" => "Create Your Child's Birth Anouncement TODAY!",
);

  if ($id) {
    $data['page_title'] = ' Edit Home Heading';
    $data['form_action'] ='admin/add_home_heading/'.$id;
    $row = $this->AdminModel->fs('home_heading',array('id'=>$id));
    $data['btn_name'] =$row->btn_name;
    $data['btn_link']=$row->btn_link;
    $data['btn_link2']=$row->btn_link2;
    $data['heading1']=$row->heading1;
    $data['type']=$row->type;
    $data['heading2']=$row->heading2;
     $data['heading3']=$row->heading3;
    $data['id']=$row->id;
    $data['img']=$row->img;
    $data['btn_name2']=$row->btn_name2;
    $data['short_description'] = $row->short_description;

    }else{
    $data['page_title'] = 'Add Home Heading';
    $data['form_action'] ='admin/add_home_heading';
    $data['id'] = '';
    $data['heading'] = "";
    $data['type'] ="";
    $data['img'] = "";
    $data['heading2'] = '';
   
    }
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('type','type','required|trim');
    $this->form_validation->set_rules('heading2','Description','trim|htmlspecialchars');
    $this->form_validation->set_rules('heading3','Description','trim|htmlspecialchars');
    $this->form_validation->set_rules('heading1','Heading','trim|htmlspecialchars');
    $this->form_validation->set_rules('btn_link','link','trim|htmlspecialchars');
    $this->form_validation->set_rules('btn_name','Button name','trim|htmlspecialchars');
   
    if ($this->form_validation->run()==false)
    {
        $this->view('add_home_heading',$data);
     } else
     {
    $save= array();
    $save['type']     = $this->input->post('type'); 
    $save['heading2'] = $this->input->post('heading2');
    $save['heading3'] = $this->input->post('heading3');
    $save['heading1']  = $this->input->post('heading1');
    $save['btn_link']     = $this->input->post('btn_link'); 
   $save['short_description'] = $this->input->post('short_description');
    $save['btn_name']  = $this->input->post('btn_name');
    $save['btn_name2']                       =  $this->input->post('btn_name2');
    $save['btn_link2']                       =  $this->input->post('btn_link2');
      
       $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/home/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg';
           $config['max_size']             = 3000;
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
                $save['img'] = 'upload/home/'.$path['file_name'];
                
           }
         
     }
   
 if($id){
        // $save['id'] = $id; 
        $result=  $this->AdminModel->update('home_heading',$save,array('id'=>$id));
        if ($result) 
        {
        $this->session->set_flashdata('success','Record Update successfully');
        redirect('admin/add_home_heading/'.$id);
        }
        else
        {
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_home_heading/'.$id);
        }
     }else{
        $result=  $this->AdminModel->Insert('home_heading',$save);
        if ($result) {
        $this->session->set_flashdata('success','Record Insert successfully');
        redirect('admin/add_home_heading');
        }else{
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_home_heading');
        }


     }
  }
 }

function UpdateHomeHeading($id)
{
  $row = $this->AdminModel->fs('home_heading',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('home_heading',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/all_home_heading');
  }
}

function DeleteHomeHeading($id)
{
$fs = $this->AdminModel->fs("home_heading",array('id' => $id ));
 @unlink($fs->img);
 $a = $this->AdminModel->delete("home_heading",array('id' => $id ));
if($a == true){
  
$this->session->set_flashdata('success','One Item Succesfully Deleted..!!',3);
redirect('admin/all_home_heading');
}

}

//add home galery
  public function all_home_gallery()
  {
    $data['page_title']= 'All Inspiration Center';
    $data['all_home_gallery']= $this->AdminModel->all_fetch('home_gallery',null);
    $this->view('all_home_gallery', $data);
  }

  
  function add_home_gallery($id=false)
  { 
   
  if ($id) {
    $data['page_title'] = ' Edit Inspiration Center';
    $data['form_action'] ='admin/add_home_gallery/'.$id;
    $row = $this->AdminModel->fs('home_gallery',array('id'=>$id));
    $data['heading3']=$row->heading3;
    $data['name']=$row->name;
    $data['id']=$row->id;
    $data['img']=$row->img;
    }else{
    $data['page_title'] = 'Add Inspiration Center';
    $data['form_action'] ='admin/add_home_gallery';
    $data['id'] = '';
    $data['name'] = "";
    $data['type'] ="";
    $data['img'] = "";
    $data['short_description'] = '';
   
    }
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('name','Heading','trim|htmlspecialchars');
    $this->form_validation->set_rules('heading3','Button name','trim|htmlspecialchars');
   
    if ($this->form_validation->run()==false)
    {
        $this->view('add_home_gallery',$data);
     } else
     {
    $save= array();
    $save['name'] = $this->input->post('name');
    $save['heading3'] = $this->input->post('heading3');
      
       $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/home/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg';
           $config['max_size']             = 3000;
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
                $save['img'] = 'upload/home/'.$path['file_name'];
                
           }
         
     }
   
 if($id){
        // $save['id'] = $id; 
        $result=  $this->AdminModel->update('home_gallery',$save,array('id'=>$id));
        if ($result) 
        {
        $this->session->set_flashdata('success','Record Update successfully');
        redirect('admin/add_home_gallery/'.$id);
        }
        else
        {
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_home_gallery/'.$id);
        }
     }else{
        $result=  $this->AdminModel->Insert('home_gallery',$save);
        if ($result) {
        $this->session->set_flashdata('success','Record Insert successfully');
        redirect('admin/add_home_gallery');
        }else{
        $this->session->set_flashdata('error','Record not insert');
        redirect('admin/add_home_gallery');
        }


     }
  }
 }

function UpdateHomeGallery($id)
{
  $row = $this->AdminModel->fs('home_gallery',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('home_gallery',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/all_home_gallery');
  }
}

function DeleteHomeGallery($id)
{
$fs = $this->AdminModel->fs("home_gallery",array('id' => $id ));
 @unlink($fs->img);
 $a = $this->AdminModel->delete("home_gallery",array('id' => $id ));
if($a == true){
  
$this->session->set_flashdata('success','One Item Succesfully Deleted..!!',3);
redirect('admin/all_home_gallery');
}

}










}