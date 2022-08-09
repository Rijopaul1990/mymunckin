<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Admin_Controller {
  
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
    $this->load->model(array('login_model','AdminModel'));
    $this->load->library(array('form_validation','session','banner'));
    
    $this->load->helper("general");
    $this->load->database();
      
  }
//Add NEWS
 function all_blog()
 {
     $data['page_title']  ='Blogs List';
     $data['all_blog']  = $this->AdminModel->all_fetch("blogs",null);
     //print_r($data['all_topbar']);
     $this->view('all_blog',$data);
 }

 function add_blog($id=false)
 {

  
  if (@$id)
  {
    $data['page_title'] = ' Edit Blogs';
    $data['form_action'] ='admin/add_blog/'.$id;
    $row = $this->AdminModel->fs("blogs",array('id'=>$id));
    $data['heading']               = $row->heading;
    $data['description']     = $row->description;
    $data['img']            = $row->img;
    $data['id']             = $row->id;
    $data['thumbnail_img']       = $row->thumbnail_img;
    $data['b_date']       = $row->b_date;
    $data['author']       = $row->author;
    
       $data['meta_title']             = $row->meta_title;
    $data['meta_keyword']         = @$row->meta_keyword;
    $data['meta_description']         = @$row->meta_description;
    
    }
    else
    {
    $data['page_title'] = ' Add Blogs';
    $data['form_action'] ='admin/add_blog';
    $data['id'] = '';
    $data['tag'] = '';
    $data['tag']         = '';
    $data['heading']     = '';
    $data['short_description']      = '';
    $data['description']   = '';
    $data['posted_by']             = '';
    $data['b_date'] ="";
    $data['author']       = "";
    }

    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('heading','Heading','trim|required');
    $this->form_validation->set_rules('b_date','Date','required');
    $this->form_validation->set_rules('author','Author','trim|required');
    $this->form_validation->set_rules('description','Description','required');
  
       $this->form_validation->set_rules('meta_description','Banner Description','trim');
     $this->form_validation->set_rules('meta_keyword','Banner Description','trim');
    $this->form_validation->set_rules('meta_title','Banner Heading','trim');
    if ($this->form_validation->run()==false) {
        $this->view('add_blog',$data);
     }else{


      $save= array();
          
       if(@$id){
      $save['id'] = $id; 
       
      }
      

      $save['heading']                 =  $this->input->post('heading');
      $save['description']             =  $this->input->post('description');
      $save['b_date']                  =  $this->input->post('b_date');
      $save['author']                  =  $this->input->post('author');
          $save['meta_description']         =  $this->input->post('meta_description');
      $save['meta_keyword']             =  $this->input->post('meta_keyword');
      $save['meta_title']               =  $this->input->post('meta_title');
           if($_FILES['img']['name']){
                $config['encrypt_name']         = TRUE;   
                $config['upload_path']          = './upload/blogs/';
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
                     $save['img'] = 'upload/blogs/'.$path['file_name'];
                     
                }
              
          }
  
          
          if($_FILES['thumbnail_img']['name']){
                $config['encrypt_name']         = TRUE;   
                $config['upload_path']          = './upload/blogs/';
                $config['allowed_types']        = 'jpg|png|jpeg|svg';
                $config['max_size']             = 5000;
                $config['file_name']            = time().$_FILES['thumbnail_img']['name'];
                $this->load->library('upload', $config);
                if ( !$this->upload->do_upload('thumbnail_img'))
                {                        
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                    echo  $error = $this->upload->display_errors();
                   }
                else
                {
                    @$path =  $this->upload->data();
                     $save['thumbnail_img'] = 'upload/blogs/'.$path['file_name'];
                     
                }
              
          }
         //print_r($save);
            
          
         if(@$id){
            $count = $this->AdminModel->AllCount("blogs",array('link'=> sfu($this->input->post('heading')),"id !=" => $id));
            if($count >= 1){
              $link = sfu($this->input->post('heading'))."-".($count+1);
            }else{
              $link = sfu($this->input->post('heading'));
            }
           $save['link']                 =  $link;
           $result=  $this->AdminModel->update("blogs",$save,array('id'=>$id));
             if ($result) {
                    $this->session->set_flashdata('success','Record Insert successfully');
                    redirect('admin/add_blog/'.$id);
                    }else{
                    $this->session->set_flashdata('error','Record not insert');
                    redirect('admin/all_blog');
                    }
        }else{
            
            $count = $this->AdminModel->AllCount("blogs",array('link'=> sfu($this->input->post('heading'))));
            if($count >= 1){
              $link = sfu($this->input->post('heading'))."-".($count+1);
            }else{
              $link = sfu($this->input->post('heading'));
            }
           $save['link']                 =  $link;
         $result=  $this->AdminModel->Insert("blogs",$save);
           if ($result) {
                    $this->session->set_flashdata('success','Record Update successfully');
                    redirect('admin/add_blog');
                    }else{
                    $this->session->set_flashdata('error','Record not insert');
                    redirect('admin/add_blog');
                    }
             }




 }


}

function UpdateBlog($id)
{
$fs = $this->AdminModel->fs("blogs",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("blogs",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('delete','Status Succesfully Updated..!!',3);
redirect('admin/all_blog');
}

}

function UpdateHomeBlog($id)
{
$fs = $this->AdminModel->fs("blogs",array('id' => $id ));
    if($fs->status_for_home == 1)
    {
      $status_for_home = array('status_for_home'=>0);
    }else{
      $status_for_home = array('status_for_home'=>1);
    }
 $a = $this->AdminModel->update("blogs",$status_for_home,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('delete','Status Succesfully Updated..!!',3);
redirect('admin/all_blog');
}

}


function DeleteBlog($id)
{
$fs = $this->AdminModel->fs("blogs",array('id' => $id ));
 @unlink($fs->img);
 $a = $this->AdminModel->delete("blogs",array('id' => $id ));
if($a == true){
  
$this->session->set_flashdata('delete','One Item Succesfully Deleted..!!',3);
redirect('admin/all_blog');
}

}
//Add success_stories



}