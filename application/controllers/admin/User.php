<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {
   
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
  function DownloadAlbumImage($id)
  {
         $this->load->library('zip');
        $fetch_image = $this->AdminModel->all_fetch("album",array('status'=>1,'u_id'=>$id));
        foreach($fetch_image as $images){
        $filepath[] = FCPATH.$images->img;
        }
        
        
        
        foreach($filepath as $file) {
          $this->zip->read_file($file);
        }
        
        // Download the file to your desktop. Name it "my_backup.zip"
        $this->zip->download('user_image.zip');
  }
  
  //all enquiry
   function all_booking()
 {
     $data['page_title']  ='Booking List';
     $data['all_booking']  = $this->AdminModel->all_fetch_desc("book_an_appointment",null,'add_date');
     $this->view('all_booking',$data);
 }
//Add HEADER
 function all_user()
 {
     $data['page_title']  ='User List';
     $data['all_user']  = $this->AdminModel->all_fetch_desc("user",null,"id");
     //print_r($data['all_topbar']);
     $this->view('all_user',$data);
 }

function view_user($id)
{
    $data['page_title']  ='View User Details';
    $data['c_fsd'] = $this->AdminModel->fs("user",array('id'=>$id));
    $this->view('view_user',$data);
}
 
  function all_success_order()
 {
     $data['page_title']  ='All Success Order';
     $data['all_success_order']  = $this->AdminModel->all_fetch_desc("order_address",array('status'=>1),"id");
     //print_r($data['all_topbar']);
    // echo AddDateInCurrentDate("3","days");
     $this->view('all_success_order',$data);
 }
 
   function all_failed_order()
 {
     $data['page_title']  ='All Failed Order';
     $data['all_failed_order']  = $this->AdminModel->all_fetch_desc("order_address",array('status'=>0),"id");
     //print_r($data['all_topbar']);
     $this->view('all_failed_order',$data);
 }

function view_order($id)
{
    $data['page_title']  ='View Order Details';
    $data['fetch_order'] = $this->AdminModel->fs("order_address",array('order_id'=>$id));
    $data['all_order'] = $this->AdminModel->all_fetch("order_details",array('order_id'=>$id));
    $this->view('view_order',$data);
}
 

function UpdateUser($id)
{
$fs = $this->AdminModel->fs("user",array('id' => $id ));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("user",$status,array('id' => $id ));

if($a == true){
 
$this->session->set_flashdata('delete','Status Succesfully Updated..!!',3);
redirect('admin/all_user');
}

}

function Deleteuser($id)
{
$fs = $this->AdminModel->fs("user",array('id' => $id ));
 @unlink($fs->img);
 $a = $this->AdminModel->delete("user",array('id' => $id ));
if($a == true){
  
$this->session->set_flashdata('delete','One Item Succesfully Deleted..!!',3);
redirect('admin/all_user');
}

}



}