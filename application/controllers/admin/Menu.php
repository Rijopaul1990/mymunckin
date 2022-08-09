<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends Admin_Controller {
  
  var $data = array();
  var $form_user_id = false;
 
  public function __construct()
  {
    parent::__construct();

    if(!$this->session->userdata('admindetail'))
    {
      redirect('admin/login');
    }
    $this->load->helper(array('form','url','uri'));
    $this->load->model(array('login_model','AdminModel','Category_model'));
    $this->load->library(array('form_validation','session','banner'));
    $this->load->helper("general");
    $this->load->database();
      
  }
//Add Menu
 function all_menu()
 {
     $data['page_title']  ='Menu List';
     $data['all_menu']  = $this->AdminModel->all_fetch("menu",null);
     //print_r($data['all_topbar']);
     $this->view('all_menu',$data);
 }

 function add_menu($id=false)
 {

  if (@$id)
  {
    $data['page_title'] = ' Edit Menu';
    $data['form_action'] ='admin/add_menu/'.$id;
    $row = $this->AdminModel->fs("menu",array('id'=>$id));
    $data['sort_order']                 = $row->sort_order;
    $data['name']                       = $row->name;
    $data['link']                       = $row->link;
    $data['img']                        = $row->banner_img;
    $data['id']                         = $row->id;
    $data['banner_heading']             = $row->banner_heading;
    $data['banner_description']         = @$row->banner_description;
    $data['banner_description1']         = @$row->banner_description1;
      $data['meta_title']             = $row->meta_title;
    $data['meta_keyword']         = @$row->meta_keyword;
    $data['meta_description']         = @$row->meta_description;

    }
    else
    {
    $data['page_title'] = ' Add Menu';
    $data['form_action'] ='admin/Menu/add_menu';
    $data['id'] = '';
    $data['sort_order'] = '';
    $data['name']     = '';
    $data['link']      = '';
    $data['description']   = '';

    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('sort_order','Sort Order','required');
    $this->form_validation->set_rules('name','Menu Name','required|trim|htmlspecialchars_decode');
    $this->form_validation->set_rules('banner_description','Banner Description','trim');
     $this->form_validation->set_rules('banner_description1','Banner Description','trim');
    $this->form_validation->set_rules('banner_heading','Banner Heading','trim');
    
     $this->form_validation->set_rules('meta_description','Banner Description','trim');
     $this->form_validation->set_rules('meta_keyword','Banner Description','trim');
    $this->form_validation->set_rules('meta_title','Banner Heading','trim');


    if ($this->form_validation->run()==false) {
        $this->view('add_menu',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
      $save['sort_order']              =  $this->input->post('sort_order');
      $save['name']                    =  $this->input->post('name');     
      $save['banner_heading']          =  $this->input->post('banner_heading');
      $save['banner_description']      =  $this->input->post('banner_description');
      $save['banner_description1']     =  $this->input->post('banner_description1');
      
      $save['meta_description']         =  $this->input->post('meta_description');
      $save['meta_keyword']             =  $this->input->post('meta_keyword');
      $save['meta_title']               =  $this->input->post('meta_title');
      
      
    
       if($_FILES['img']['name']){
      $save['banner_img']              =  $this->uploadImage("img",$_FILES['img']['name'],"jpg|png|jpeg|svg|GIF|gif","banner");
      }
      

   
         if(@$id){ 
          
           $result=  $this->AdminModel->update("menu",$save,array('id'=>$id));
             if ($result) {
                    $this->session->set_flashdata('success','Record Updated successfully');
                    redirect('admin/add_menu/'.$id);
                    }else{
                    $this->session->set_flashdata('error','Record not Updating');
                    redirect('admin/all_menu/');
                    }
                  }else{
                    $save['link']                    =  sfu($this->input->post('name'));
                  $result=  $this->AdminModel->Insert("menu",$save);
           if ($result) {
                    $this->session->set_flashdata('success','Record Insert successfully');
                    redirect('admin/add_menu/');
                    }else{
                    $this->session->set_flashdata('error','Record not insert');
                    redirect('admin/add_menu/');
                    }
             }




 }


}

function UpdateMenu($id)
{
$fs = $this->AdminModel->fs("menu",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("menu",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Updated Succesfully..!!',3);
redirect('admin/all_menu/');
}

}
function UpdateTopMenu($id)
{
$fs = $this->AdminModel->fs("menu",array('id' => $id ));
    if($fs->status_for_header == 1)
    {
      $status = array('status_for_header'=>0);
    }else{
      $status = array('status_for_header'=>1);
    }
 $a = $this->AdminModel->update("menu",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Updated Succesfully..!!',3);
redirect('admin/all_menu/');
}

}
function UpdateFooterMenu($id)
{
$fs = $this->AdminModel->fs("menu",array('id' => $id ));
    if($fs->status_for_footer == 1)
    {
      $status = array('status_for_footer'=>0);
    }else{
      $status = array('status_for_footer'=>1);
    }
 $a = $this->AdminModel->update("menu",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Updated Succesfully..!!',3);
redirect('admin/all_menu/');
}

}
function UpdateHomeMenu($id)
{
$fs = $this->AdminModel->fs("menu",array('id' => $id ));
    if($fs->status_for_home == 1)
    {
      $status = array('status_for_home'=>0);
    }else{
      $status = array('status_for_home'=>1);
    }
 $a = $this->AdminModel->update("menu",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updateing..!!',3);
redirect('admin/all_menu');
}

}

//SUBMENU
 function all_submenu()
 {
     $data['page_title']  ='Sub Menu List';
     $data['all_submenu']  = $this->AdminModel->all_fetch("submenu",null);
     //print_r($data['all_topbar']);
     $this->view('all_submenu',$data);
 }

 function add_submenu($id=false)
 {

  $data['all_menu'] = $this->AdminModel->all_fetch("menu",null);
  $data['all_type']= $this->AdminModel->all_fetch('practice_heading',array('status'=>1));
  
  if (@$id)
  {
    $data['page_title'] = ' Edit Sub Menu';
    $data['form_action'] ='admin/add_submenu/'.$id;
    $row = $this->AdminModel->fs("submenu",array('id'=>$id));
    $data['sort_order']         = $row->sort_order;
    $data['name']               = $row->name;
    $data['menu_id']            = $row->menu_id;
    $data['img']                = $row->banner_img;
    $data['id']                 = $row->id;
    //$data['banner_heading']     = $row->banner_heading;
    $data['icon']               = $row->icon;
    $data['type']     = $row->type;
    }
    else
    {
    $data['page_title'] = ' Add Sub Menu';
    $data['form_action'] ='admin/add_submenu';
    $data['id'] = '';
    $data['sort_order'] = '';
    $data['name']     = '';
    $data['menu_id']      = '';
    $data['banner_heading']   = '';

    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('sort_order','Sort Order','required');
    $this->form_validation->set_rules('name','Sub Menu Name','required|trim|htmlspecialchars_decode');
    $this->form_validation->set_rules('menu_id','Menu','required');

    if ($this->form_validation->run()==false) {
        $this->view('add_submenu',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      
      $save['sort_order']              =  $this->input->post('sort_order');
      $save['name']                    =  $this->input->post('name');
      //$save['banner_heading']          =  $this->input->post('banner_heading');
      $save['menu_id']                 =  $this->input->post('menu_id');
      $save['type']                    =  $this->input->post('type');

     if($_FILES['img']['name']){
      $save['banner_img']              =  $this->uploadImage("img",$_FILES['img']['name'],"jpg|png|jpeg|svg","banner");
      }
      if($_FILES['icon']['name']){
      $save['icon']                    =  $this->uploadImage("icon",$_FILES['icon']['name'],"jpg|png|jpeg|svg","banner");
    }

           
         //print_r($save);

         if(@$id){
            
           $result=  $this->AdminModel->update("submenu",$save,array('id'=>$id));
             if ($result) {
                    $this->session->set_flashdata('success','Record Updated successfully');
                    redirect('admin/add_submenu/'.$id);
                    }else{
                    $this->session->set_flashdata('error','Record not Updated');
                    redirect('admin/all_submenu');
                    }
        }else{
          $save['link'] = sfu($this->input->post('name'));
         $result=  $this->AdminModel->Insert("submenu",$save);
           if ($result) {
                    $this->session->set_flashdata('success','Record Insert successfully');
                    redirect('admin/add_submenu');
                    }else{
                    $this->session->set_flashdata('error','Record not insert');
                    redirect('admin/add_submenu');
                    }
             }




 }


}

function UpdateSubMenu($id)
{
$fs = $this->AdminModel->fs("submenu",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("submenu",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updateing..!!',3);
redirect('admin/all_submenu');
}

}


//SUBSUBMENU
function all_subsubmenu()
{
    $data['page_title']  ='Sub Sub Menu List';
    $data['all_subsubmenu']  = $this->AdminModel->all_fetch("subsubmenu",null);
    //print_r($data['all_topbar']);
    $this->view('all_subsubmenu',$data);
}

function add_subsubmenu($id=false)
{

 $data['all_menu'] = $this->AdminModel->all_fetch("menu",null);
 if (@$id)
 {
   $data['page_title'] = ' Edit Sub Sub Menu';
   $data['form_action'] ='admin/Menu/add_subsubmenu/'.$id;
   $row = $this->AdminModel->fs("subsubmenu",array('id'=>$id));
   $data['sort_order']         = $row->sort_order;
   $data['name']               = $row->name;
   $data['menu_id']            = $row->menu_id;
   $data['submenu_id']         = $this->AdminModel->fs("submenu",array('id'=>$row->submenu_id));
   $data['img']                = $row->banner_img;
   $data['id']                 = $row->id;
   //$data['banner_heading']     = $row->banner_heading;

   }
   else
   {
   $data['page_title'] = ' Add Sub Sub Menu';
   
   $data['form_action'] ='admin/Menu/add_subsubmenu';
   $data['id'] = '';
   $data['sort_order'] = '';
   $data['name']     = '';
   $data['menu_id']      = '';
   $data['banner_heading']   = '';

   }

   $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
   $this->form_validation->set_rules('sort_order','Sort Order','required');
   $this->form_validation->set_rules('name','Sub Sub Menu','required|trim|htmlspecialchars_decode');
   $this->form_validation->set_rules('menu_id','Menu','required');
   $this->form_validation->set_rules('submenu_id','Sub Menu Name','required');
  //  $this->form_validation->set_rules('banner_heading','Heading','required');

   if ($this->form_validation->run()==false) {
       $this->view('add_subsubmenu',$data);
    }else{


     $save= array();
         
      if(@$id){
     $save['id'] = $id; 
      
     }
     
     $save['sort_order']              =  $this->input->post('sort_order');
     $save['name']                    =  $this->input->post('name');
     $save['banner_heading']          =  html_entity_decode($this->input->post('banner_heading'));
     $save['menu_id']                 =  $this->input->post('menu_id');
     $save['submenu_id']              =  $this->input->post('submenu_id');
   

          if($_FILES['img']['name']){
               $config['encrypt_name']         = TRUE;   
               $config['upload_path']          = './upload/banner/';
               $config['allowed_types']        = 'jpg|png|jpeg|svg';
               $config['max_size']             = 5000;
               $config['file_name']            = time().$_FILES['img']['name'];
               $this->load->library('upload', $config);
               if ( !$this->upload->do_upload('img'))
               {                        
                   $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                   echo  $error = $this->upload->display_errors();
                  }
               else
               {
                   @$path =  $this->upload->data();
                    $save['banner_img'] = 'upload/banner/'.$path['file_name'];
                    
               }
             
         }

        //print_r($save);

        if(@$id){
           
          $result=  $this->AdminModel->update("subsubmenu",$save,array('id'=>$id));
            if ($result) {
                   $this->session->set_flashdata('success','Record Updated successfully');
                   redirect('admin/Menu/add_subsubmenu/'.$id);
                   }else{
                   $this->session->set_flashdata('error','Record not Updated');
                   redirect('admin/Menu/all_subsubmenu');
                   }
       }else{
         $save['link'] = sfu($this->input->post('name'));
        $result=  $this->AdminModel->Insert("subsubmenu",$save);
          if ($result) {
                   $this->session->set_flashdata('success','Record Insert successfully');
                   redirect('admin/Menu/add_subsubmenu');
                   }else{
                   $this->session->set_flashdata('error','Record not insert');
                   redirect('admin/Menu/add_subsubmenu');
                   }
            }




}


}

function UpdateSubSubMenu($id)
{
$fs = $this->AdminModel->fs("subsubmenu",array('id' => $id ));
   if($fs->status == 1)
   {
     $status = array('status'=>0);
   }else{
     $status = array('status'=>1);
   }
$a = $this->AdminModel->update("subsubmenu",$status,array('id' => $id ));

if($a == true){

$this->session->set_flashdata('success','Status Succesfully Updateing..!!',3);
redirect('admin/Menu/all_subsubmenu');
}

}
//SUB SUB SUBMENU
function all_subsubsubmenu()
{
    $data['page_title']  ='Sub Sub Menu List';
    $data['all_subsubsubmenu']  = $this->AdminModel->all_fetch("subsubsubmenu",null);
    //print_r($data['all_topbar']);
    $this->view('all_subsubsubmenu',$data);
}

function add_subsubsubmenu($id=false)
{

 $data['all_menu'] = $this->AdminModel->all_fetch("menu",null);
 if (@$id)
 {
   $data['page_title'] = ' Edit Sub Sub Menu';
   $data['form_action'] ='admin/Menu/add_subsubsubmenu/'.$id;
   $row = $this->AdminModel->fs("subsubsubmenu",array('id'=>$id));
   $data['sort_order']         = $row->sort_order;
   $data['name']               = $row->name;
   $data['menu_id']            = $row->menu_id;
   $data['submenu_id']         = $this->AdminModel->fs("submenu",array('id'=>$row->submenu_id));
   $data['img']                = $row->banner_img;
   $data['id']                 = $row->id;
   $data['banner_heading']     = $row->banner_heading;
   $data['subsubmenu_id']		   = $this->AdminModel->fs("subsubmenu",array('id'=>$row->subsubmenu_id));
   }
   else
   {
   $data['page_title'] = ' Add Sub Sub Menu';
   
   $data['form_action'] ='admin/Menu/add_subsubsubmenu';
   $data['id'] = '';
   $data['sort_order'] = '';
   $data['name']     = '';
   $data['menu_id']      = '';
   $data['banner_heading']   = '';

   }

   $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
   $this->form_validation->set_rules('sort_order','Sort Order','required');
   $this->form_validation->set_rules('name','Sub Sub Menu','required|trim|htmlspecialchars_decode');
   $this->form_validation->set_rules('menu_id','Menu','required');
   $this->form_validation->set_rules('submenu_id','Sub Menu Name','required');
  $this->form_validation->set_rules('banner_heading','Heading','required');
  $this->form_validation->set_rules('subsubmenu_id','Sub Sub Sub Menu','required');

   if ($this->form_validation->run()==false) {
       $this->view('add_subsubsubmenu',$data);
    }else{


     $save= array();
         
      if(@$id){
     $save['id'] = $id; 
      
     }
     
     $save['sort_order']              =  $this->input->post('sort_order');
     $save['name']                    =  $this->input->post('name');
     $save['banner_heading']          =  html_entity_decode($this->input->post('banner_heading'));
     $save['menu_id']                 =  $this->input->post('menu_id');
     $save['submenu_id']              =  $this->input->post('submenu_id');
     $save['subsubmenu_id']              =  $this->input->post('subsubmenu_id');
   

          if($_FILES['img']['name']){
               $config['encrypt_name']         = TRUE;   
               $config['upload_path']          = './upload/banner/';
               $config['allowed_types']        = 'jpg|png|jpeg|svg';
               $config['max_size']             = 5000;
               $config['file_name']            = time().$_FILES['img']['name'];
               $this->load->library('upload', $config);
               if ( !$this->upload->do_upload('img'))
               {                        
                   $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                   echo  $error = $this->upload->display_errors();
                  }
               else
               {
                   @$path =  $this->upload->data();
                    $save['banner_img'] = 'upload/banner/'.$path['file_name'];
                    
               }
             
         }

        //print_r($save);

        if(@$id){
           
          $result=  $this->AdminModel->update("subsubsubmenu",$save,array('id'=>$id));
            if ($result) {
                   $this->session->set_flashdata('success','Record Updated successfully');
                   redirect('admin/Menu/add_subsubsubmenu/'.$id);
                   }else{
                   $this->session->set_flashdata('error','Record not Updated');
                   redirect('admin/Menu/all_subsubsubmenu');
                   }
       }else{
         $save['link'] = sfu($this->input->post('name'));
        $result=  $this->AdminModel->Insert("subsubsubmenu",$save);
          if ($result) {
                   $this->session->set_flashdata('success','Record Insert successfully');
                   redirect('admin/Menu/add_subsubsubmenu');
                   }else{
                   $this->session->set_flashdata('error','Record not insert');
                   redirect('admin/Menu/add_subsubsubmenu');
                   }
            }




}


}

function UpdateSubSubSubMenu($id)
{
$fs = $this->AdminModel->fs("subsubsubmenu",array('id' => $id ));
   if($fs->status == 1)
   {
     $status = array('status'=>0);
   }else{
     $status = array('status'=>1);
   }
$a = $this->AdminModel->update("subsubsubmenu",$status,array('id' => $id ));

if($a == true){

$this->session->set_flashdata('success','Status Succesfully Updateing..!!',3);
redirect('admin/Menu/all_subsubsubmenu');
}

}



}