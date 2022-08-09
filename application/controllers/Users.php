 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends Student_Controller {
  var $data = array();
  var $for_form_user_id = false;
  public function __construct()
  { 
    parent::__construct();
    if(!$this->session->userdata('userdetail'))
    {
      redirect('login');
    }
    $this->load->helper(array('form','url','uri'));
    $this->load->model(array('Login_model','AdminModel','Category_model','User_model','Front_model'));
    $this->load->library(array('form_validation','session','banner','encryption','upload'));
    $this->load->database();  
    $this->user_id = $this->session->userdata['userdetail']['id'];
    $check_user_status = $this->AdminModel->fs('user',array('id'=>$this->user_id));
    if($check_user_status->status == 0){
        $this->Login_model->logout_user();
        
    }
    $check_purchase = $this->AdminModel->AllCount("order_address",array('u_id'=>$this->user_id,'status' =>1,'payment_status' =>"success"));
    if($check_purchase < 1)
    {
      redirect('pricing');
    }
    
  }
  

  public function index()
  {
    $user_id = $this->user_id;
    $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
    if($count < 1){
    $data['page_title'] = 'My munchkin - Dashboard';
    $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
    $data['genrate_url'] = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
    $count = $this->AdminModel->AllCount('user',array('child_name'=>$data['userdetail']->child_name));
    if($count >= 1){
    $data['available_url'] = base_url(sfu($data['userdetail']->child_name."-".$count));
    }else{
      $data['available_url'] = base_url(sfu($data['userdetail']->child_name));
    }
    $this->view('welcome', $data);
   }else{
     $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
     if($fetch->due_date ){
        // redirect('dd/'.$fetch->link);
        //$data['genrate_link']  =  'dd/'.$fetch->link;
     }else if($fetch->dob ){
      //redirect('db/'.$fetch->link);
     // $data['genrate_link']  =  'db/'.$fetch->link;
     }
    redirect('Users/dashboard');
    
   }

  }
  
  public function changetheme()
  {
       $user_id = $this->user_id;
      $data['page_title'] = 'My munchkin - Change Theme';
      $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
      
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
       $data['genrate_url'] = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
          if(@$data['genrate_url']->dob ){
     $data['genrate_link']  =  'db/'.@$data['genrate_url']->link;
     }else if($data['genrate_url']->due_date ){
      $data['genrate_link']  =  'dd/'.$data['genrate_url']->link;
     }
       
       
       if($count >= 1){
     $this->view('user_change_theme', $data);
     }else{
          redirect('Users/welcome');
          
     }
      
  }
  
  public function ChangeThemeColor()
  {
       $user_id = $this->user_id;
      $theme = $this->input->post('theme');
      $array = array();
      if($theme){
          $update = $this->AdminModel->update("genrate_url",array('theme'=>$theme),array('u_id'=>$user_id));
          if($update){
              echo 1;
          }else{
              $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            echo json_encode($array);
          }
      }else{
           $array['msg'] = "Select Theme Again ";
            $array['status'] = 0;
            echo json_encode($array);
      }
  } 

public function dashboard_old()
{
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Dashboard';
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
      
    $data['check_expery']       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $data['current_date']              = date('Y-m-d'); 
      
     
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['all_comments'] = $this->AdminModel->all_fetch('comments',array('u_id'=>$user_id)); 
     $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
     $data['all_order'] = $this->AdminModel->all_fetch_desc('order_address',array('status'=>1,'u_id'=>$user_id),"id");
     $check_order = $this->AdminModel->fs_desc('order_details',array('u_id'=>$user_id,'status'=>1),"id"); 
      
     $data['package'] = $this->AdminModel->fs("pricing",array('id'=>@$check_order->p_id));
     
     $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['all_milestone'] = $this->AdminModel->all_fetch_desc("milestone",array('u_id'=>$user_id),"id");
    if(@$fetch->dob ){
     
     $data['genrate_link']  =  'db/'.@$fetch->link;
       
     }else if($fetch->due_date ){
     
      $data['genrate_link']  =  'dd/'.$fetch->link;
     }
     if($count >= 1){
     $this->view('dashboard', $data);
     }else{
          redirect('Users/welcome');
          
     }
}
public function dashboard()
{
  
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Dashboard';
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
      
     $data['check_expery']       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $data['current_date']              = date('Y-m-d'); 
      
     
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['all_comments'] = $this->AdminModel->all_fetch('comments',array('u_id'=>$user_id)); 
     $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
     $data['all_order'] = $this->AdminModel->all_fetch_desc('order_address',array('status'=>1,'u_id'=>$user_id),"id");
     $check_order = $this->AdminModel->fs_desc('order_details',array('u_id'=>$user_id,'status'=>1),"id"); 
      
     $data['package'] = $this->AdminModel->fs("pricing",array('id'=>@$check_order->p_id));
     
     $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['all_milestone'] = $this->AdminModel->all_fetch_desc("milestone",array('u_id'=>$user_id),"id");
    if(@$fetch->dob ){
     
     $data['genrate_link']  =  'db/'.@$fetch->link;
       
     }else if($fetch->due_date ){
     
      $data['genrate_link']  =  'dd/'.$fetch->link;
     }
     if($count >= 1){
     //$this->view('dashboard_new', $data);
     
     $this->load->view('user/common/header.php', $data);
     $this->load->view('user/common/sidebar.php');
     $this->load->view('user/dashboard.php');
     $this->load->view('user/common/footer.php');
     }
     else{
          redirect('Users/welcome');
          
     }
}
 public function referlink()
 {
      $user_id = $this->user_id;
       $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
      $data['page_title'] = 'My munchkin - Refer Link';
       $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
       $data['check_this_url'] = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
        $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
      if(@$fetch->dob){
    // redirect('Users/welcome');
     $data['genrate_link']  =  'db/'.@$fetch->link;
       
     }else if($fetch->due_date ){
     
      $data['genrate_link']  =  'dd/'.$fetch->link;
     }
     
      if($count >= 1){
     $this->view('user_refer_link', $data);
     }else{
          redirect('Users/welcome');
          
     }
      
 }

 public function referlinkn()
 {
      $user_id = $this->user_id;
       $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
      $data['page_title'] = 'My munchkin - Refer Link';
       $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
       $data['check_this_url'] = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
        $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
      if(@$fetch->dob){
    // redirect('Users/welcome');
     $data['genrate_link']  =  'db/'.@$fetch->link;
       
     }else if($fetch->due_date ){
     
      $data['genrate_link']  =  'dd/'.$fetch->link;
     }
     
      if($count >= 1){
        $this->load->view('user/common/header.php', $data);
        $this->load->view('user/common/sidebar.php');
        $this->load->view('user/user_refer_link.php');
        $this->load->view('user/common/footer.php');
     //$this->view('user_refer_link', $data);
     }else{
          redirect('Users/welcome');
          
     }
      
 }
     
 public function updatelink()
 {  
     $user_id = $this->user_id;
     $array = array();
     $name  = $this->input->post('name');
     $check = $this->AdminModel->AllCount('genrate_url',array('name'=>$name));
     if($check >= 1){
            $array['msg']       = "This Url Link Already Exist";
            $array['status']    = 0;
            echo json_encode($array);
     }else{
         $col_val =array(
             'name' => $name,
             'link' => sfu($name)
             
             );
         $update = $this->AdminModel->update("genrate_url",$col_val,array('u_id'=>$user_id));
         if($update){
             echo 1;
         }else{
             
             $array['msg']       = "Something Went Wrong";
            $array['status']     = 0;
            echo json_encode($array);
         }
     }
     
     
 }


public function comments()
{

     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Dashboard';
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['all_comments'] = $this->AdminModel->all_fetch('comments',array('u_id'=>$user_id)); 
     $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
     $data['all_order'] = $this->AdminModel->all_fetch_desc('order_address',array('status'=>1,'u_id'=>$user_id),"id");
     $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['all_milestone'] = $this->AdminModel->all_fetch_desc("milestone",array('u_id'=>$user_id),"id");
     $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
    $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
     
     if($count >= 1){
     $this->view('user_comments', $data);
     }else{
          redirect('Users/welcome');
          
     }
}

public function ncomments(){
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Dashboard';
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['all_comments'] = $this->AdminModel->all_fetch('comments',array('u_id'=>$user_id)); 
     $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$user_id));
     $data['all_order'] = $this->AdminModel->all_fetch_desc('order_address',array('status'=>1,'u_id'=>$user_id),"id");
     $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['all_milestone'] = $this->AdminModel->all_fetch_desc("milestone",array('u_id'=>$user_id),"id");
     $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
    $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }

     $this->load->view('user/common/header.php', $data);
     $this->load->view('user/common/sidebar.php');
     $this->load->view('user/comments.php');
     $this->load->view('user/common/footer.php');
}

public function album()
{
      $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Album';
     $data['selected_album_count'] = $this->AdminModel->AllCount("album_selected",array('u_id'=>$user_id));
     $data['select_album'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['check_album_img'] = $this->AdminModel->AllCount("album",array('u_id'=>$user_id));
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
     
     $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
       $data['check_print_status'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     
     
     
     if($count >= 1 && $check_expery->dob ){
    $this->view('user_album', $data);
     }else{
          redirect('Users/welcome');
          
     }
     
     
}
public function albumn(){
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Album';
     $data['selected_album_count'] = $this->AdminModel->AllCount("album_selected",array('u_id'=>$user_id));
     $data['select_album'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['check_album_img'] = $this->AdminModel->AllCount("album",array('u_id'=>$user_id));
     $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
     
     $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
    $data['check_print_status'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
    if($count >= 1 && $check_expery->dob ){
     $this->load->view('user/common/header.php', $data);
     $this->load->view('user/common/sidebar.php');
     $this->load->view('user/myBabyBook.php');
     $this->load->view('user/common/footer.php');
    }else{
        redirect('Users/welcome');
        
   }
}

public function selectAlbum()
{   
     $user_id = $this->user_id;
     $array = array();
    $id = $this->input->post('id');
    if($id){
        $check = $this->AdminModel->AllCount("album_selected",array('u_id'=>$user_id));
        if($check < 1){
            $insert = $this->AdminModel->insert("album_selected",array('u_id'=>$user_id,'album_id'=>$id));
            if($insert){
                echo 1;
                $this->AdminModel->update("album",array('album_id'=>$id),array('u_id'=>$user_id));
            }else{
                $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            echo json_encode($array);
            }
        }else{
              $insert = $this->AdminModel->update("album_selected",array('album_id'=>$id),array('u_id'=>$user_id));
            if($insert){
                echo 1;
                $this->AdminModel->update("album",array('album_id'=>$id),array('u_id'=>$user_id));
            }else{
                $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            echo json_encode($array);
            }
        }
        
    }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            echo json_encode($array);
    }
}

public function milestones_old()
{   
     $link = $this->uri->segment(3);
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Milestones';
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['all_milestone'] = $this->AdminModel->all_fetch_desc("milestone",array('u_id'=>$user_id,'m_id'=>$link),"id");
     $data['user_id'] = $this->user_id;
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
    $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
    
     if($count >= 1){
    if($link){
          $data['category_name'] = $this->AdminModel->fs("milestone_category",array("status"=>1,'id'=>$link));
     $this->view('user_milestones', $data);
    }else{
        $this->view('user_milestones_category', $data);
    }
     }else{
          redirect('Users/welcome');
          
     }
    
}

public function milestones(){
  $link = $this->uri->segment(3);
  $user_id = $this->user_id;
  $data['page_title'] = 'My munchkin - Milestones';
  $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
  $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
  $data['all_milestone'] = $this->AdminModel->all_fetch_desc("milestone",array('u_id'=>$user_id,'m_id'=>$link),"id");
  $data['user_id'] = $this->user_id;
   $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
 $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
  $current_date              = date('Y-m-d'); 
   if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
      redirect('pricing');
  }
  if($count >= 1){
    if($link){
          $data['category_name'] = $this->AdminModel->fs("milestone_category",array("status"=>1,'id'=>$link));
          $this->load->view('user/common/header.php', $data);
          $this->load->view('user/common/sidebar.php');
          //$this->view('user_milestones', $data);
          $this->load->view('user/user_milestones.php');
          $this->load->view('user/common/footer.php');
    }else{
        //$this->view('user_milestones_category', $data);
        $this->load->view('user/common/header.php', $data);
        $this->load->view('user/common/sidebar.php');
        $this->load->view('user/milestone.php');
        $this->load->view('user/common/footer.php');
    }
     }else{
          redirect('Users/welcome');
          
     }
     
     
     
}


public function albumimage()
{   
    
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Milestones';
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['all_milestone'] = $this->AdminModel->all_fetch("album",array('u_id'=>$user_id),"m_c_id");
     $data['select_album'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['user_id'] = $this->user_id;
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
    
     $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
     
     if($count >= 1  && $check_expery->dob ){
     $this->view('user_albumimage', $data);
     }else{
          redirect('Users/welcome');
          
     }
     
}

public function albumimagen(){
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Milestones';
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['all_milestone'] = $this->AdminModel->all_fetch("album",array('u_id'=>$user_id),"m_c_id");
     $data['select_album'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['user_id'] = $this->user_id;
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
    
     $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
     if($count >= 1  && $check_expery->dob ){
      $this->load->view('user/common/header.php', $data);
      $this->load->view('user/common/sidebar.php');
      $this->load->view('user/albumimage.php');
      $this->load->view('user/common/footer.php');
      }else{
           redirect('Users/welcome');
           
      }
}
//albumimg
public function albumimg($id)
{   
  
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Milestones';
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['select_album'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['all_milestone'] = $this->AdminModel->all_fetch("milestone",array('u_id'=>$user_id,'m_id'=> $id),"sort_order");
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
     $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
       if($count >= 1 ){
       $this->view('user_categorywise_albumimg', $data);
     }else{
          redirect('Users/welcome');
          
     }
     
}
public function albumimgn($id)
{   
  
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Milestones';
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['select_album'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['all_milestone'] = $this->AdminModel->all_fetch("milestone",array('u_id'=>$user_id,'m_id'=> $id),"sort_order");
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
     $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
       if($count >= 1 ){
        $this->load->view('user/common/header.php', $data);
        $this->load->view('user/common/sidebar.php');
        $this->load->view('user/albumimageedit.php');
        $this->load->view('user/common/footer.php');
     }else{
          redirect('Users/welcome');
          
     }
     
}
function UpdateSortOrder()
{   
     $user_id = $this->user_id;
   $id = $this->input->post('id');
    $sort_order = $this->input->post('sort_order');
    if($sort_order && $id){
        $update = $this->AdminModel->update("milestone",array('sort_order'=>$sort_order),array('id'=>$id,'u_id'=>$user_id));
        if($update){
            echo 1;
         $this->AdminModel->update("album",array('sort_order'=>$sort_order),array('m_id'=>$id,'u_id'=>$user_id));
        }else{
             $array['msg']    = "Something Went Wrong";
                 $array['status']    = 0;
                echo json_encode($array);
        }
    }else{
         $array['msg']    = "Something Went Wrong";
                 $array['status']    = 0;
                echo json_encode($array);
    }
}
public function createpage()
{   
     $link = $this->uri->segment(3);
     $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Album';
     $data['userdetail'] = $this->AdminModel->fs('user',array('id'=>$user_id)); 
     $data['select_album'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['all_album'] = array('1'=>"Album 1",'2'=>"Album 2",'3'=>"Album 3");
     $data['page_type'] = array('1'=>"First Page",'2'=>"Last Page");
    
    $data['fetch_data'] = $this->AdminModel->all_fetch("album_front_back_page",array('u_id'=>$user_id));
    
      $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['all_milestone'] = $this->AdminModel->all_fetch("milestone",array('u_id'=>$user_id),"m_id");
     $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
   $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
    
     if($count >= 1 && $check_expery->dob ){
       $this->view('user_create_album_page', $data);
     }else{
          redirect('Users/welcome');
          
     }
    
    
}
public function album1()
{    
    $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Album';
    $select_album = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
       $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
       $data['check_ultimate'] = $this->AdminModel->Allcount("order_details",array('u_id'=>$user_id,'status'=>1,'p_id'=>3));
       
     $data['check_print_status'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['first_page'] = $this->AdminModel->fs("album_front_back_page",array('u_id'=>$user_id,'album_id'=>1,'type'=>1));
     $data['last_page']  = $this->AdminModel->fs("album_front_back_page",array('u_id'=>$user_id,'album_id'=>1,'type'=>2));
      
     $data['baby_shower1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>1,'status'=>1));
     $data['baby_shower2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>2,'status'=>1));
     $data['baby_shower3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>3,'status'=>1));
     $data['baby_shower4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>4,'status'=>1));
     $data['baby_shower5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>5,'status'=>1));
     
     $data['all_baby_shower']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
     $data['mom_dad1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>1,'status'=>1));
     $data['mom_dad2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>2,'status'=>1));
     $data['mom_dad3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>3,'status'=>1));
     $data['mom_dad4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>4,'status'=>1));
     $data['mom_dad5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>5,'status'=>1));
     
    //  $data['all_mom_dad']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
     $data['baby_arrival']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>1,'status'=>1));
     $data['baby_arrival2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>2,'status'=>1));
     $data['baby_arrival3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>3,'status'=>1));
     $data['baby_arrival4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>4,'status'=>1));
     $data['baby_arrival5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>5,'status'=>1));
     
     $data['all_baby_arrival']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    $data['welcome_home1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>1,'status'=>1));
    $data['welcome_home2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>2,'status'=>1));
    $data['welcome_home3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>3,'status'=>1));
    $data['welcome_home4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>4,'status'=>1));
    $data['welcome_home5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>5,'status'=>1));
    
    //$data['all_welcome_home']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order > "=>2,'status'=>1),"sort_order",3);
    
    $data['first_smile']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>1,'status'=>1));
    $data['first_smile2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>2,'status'=>1));
    $data['first_smile3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>3,'status'=>1));
    $data['first_smile4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>4,'status'=>1));
    $data['first_smile5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>5,'status'=>1));
    
    //  $data['all_first_smile']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    $data['laugh1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>1,'status'=>1));
     //$data['all_laugh']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order !="=>1),"sort_order",4);
     $data['laugh2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>2,'status'=>1));
     $data['laugh3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>3,'status'=>1));
     $data['laugh4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>4,'status'=>1));
     $data['laugh5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>5,'status'=>1));
     
     $data['all_laugh']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order > "=>2,'status'=>1),"sort_order",3);
    
    $data['foody']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>1));
    $data['foody2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>2));
    $data['foody3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>3));
    $data['foody4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>4));
    $data['foody5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>5));
    
    $data['all_foody']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    
    $data['sitting1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>1,'status'=>1));
     $data['sitting2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>2,'status'=>1));
     $data['sitting3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>3,'status'=>1));
     $data['sitting4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>4,'status'=>1));
     $data['sitting5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>5,'status'=>1));
    
     $data['all_sitting']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order > "=>2,'status'=>1),"sort_order",3);
    
    $data['standing']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>1,'status'=>1));
    $data['standing2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>2,'status'=>1));
    $data['standing3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>3,'status'=>1));
    $data['standing4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>4,'status'=>1));
    $data['standing5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>5,'status'=>1));
      
    $data['all_standing']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    
    $data['birthday']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>1,'status'=>1));
    $data['birthday2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>2,'status'=>1));
    $data['birthday3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>3,'status'=>1));
    $data['birthday4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>4,'status'=>1));
    $data['birthday5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>5,'status'=>1));
      
    $data['all_birthday']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
    
     if($count >= 1 && $check_expery->dob ){
       if($select_album->album_id == 1){
     $this->view('user_album1', $data);
    }else{
       redirect('Users/album');
    }
     }else{
          redirect('Users/welcome');
          
     }
    
}
public function album2()
{    
     $user_id = $this->user_id;
     $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
        $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     
     $data['page_title']    = 'My munchkin - Album2';
     
     $data['check_ultimate'] = $this->AdminModel->Allcount("order_details",array('u_id'=>$user_id,'status'=>1,'p_id'=>3));
       
     $select_album          = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['check_print_status'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
     $data['first_page']    = $this->AdminModel->fs("album_front_back_page",array('u_id'=>$user_id,'album_id'=>2,'type'=>1));
    
     $data['baby_shower1']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>1,'status'=>1));
     $data['baby_shower2']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>2,'status'=>1));
     $data['baby_shower3']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>3,'status'=>1));
     $data['baby_shower4']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>4,'status'=>1));
     $data['baby_shower5']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>5,'status'=>1));
    //  $data['all_baby_shower2']      = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order >"=>1,'status'=>1),"sort_order",2);
    //  $data['all_baby_shower3']      = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order >"=>3,'status'=>1),"sort_order",2);
    
    
     
     $data['mom_dad1']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>1,'status'=>1));
     $data['mom_dad2']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>2,'status'=>1));
     $data['mom_dad3']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>3,'status'=>1));
     $data['mom_dad4']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>4,'status'=>1));
     $data['mom_dad5']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>5,'status'=>1));
    
     $data['baby_arrival']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>1,'status'=>1));
     $data['baby_arrival2']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>2,'status'=>1));
     $data['baby_arrival3']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>3,'status'=>1));
     $data['baby_arrival4']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>4,'status'=>1));
     $data['baby_arrival5']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>5,'status'=>1));
     
    //  $data['all_baby_arrival']      = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
     $data['welcome_home1']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>1,'status'=>1));
     $data['welcome_home2']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>2,'status'=>1));
     $data['welcome_home3']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>3,'status'=>1));
     $data['welcome_home4']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>4,'status'=>1));
     $data['welcome_home5']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>5,'status'=>1));
    
    // $data['welcome_home2']       = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>2));
     //$data['all_welcome_home']      = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order > "=>1,'status'=>1),"sort_order",4);
    
     $data['first_smile']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>1,'status'=>1));
     $data['first_smile2']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>2,'status'=>1));
     $data['first_smile3']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>3,'status'=>1));
     $data['first_smile4']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>4,'status'=>1));
     $data['first_smile5']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>5,'status'=>1));
    
     $data['all_first_smile']       = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
     $data['laugh1']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>1,'status'=>1));
     //$data['all_laugh']           = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order !="=>1),"sort_order",4);
     $data['laugh2']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>2,'status'=>1));
     $data['laugh3']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>3,'status'=>1));
     $data['laugh4']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>4,'status'=>1));
    
    // $data['all_laugh']             = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order > "=>2,'status'=>1),"sort_order",2);
     $data['laugh5']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>5,'status'=>1));
     
     
     $data['foody1']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>1,'status'=>1));
     $data['foody2']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>2,'status'=>1));
     $data['foody3']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>3,'status'=>1));
     $data['foody4']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>4,'status'=>1));
     $data['foody5']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>5,'status'=>1));
     
     $data['all_foody']             = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order >"=>3,'status'=>1),"sort_order",2);
    
    
     $data['sitting1']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>1,'status'=>1));
     $data['sitting2']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order "=>2,'status'=>1));
     $data['sitting3']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order "=>3,'status'=>1));
     $data['sitting4']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>4,'status'=>1));
     $data['sitting5']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>5,'status'=>1));
    
    //  $data['standing']              = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order <="=>2,'status'=>1),"sort_order",2);
    //  $data['all_standing']          = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order >"=>2,'status'=>1),"sort_order",2);
     $data['standing1']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>1,'status'=>1));
     $data['standing2']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>2,'status'=>1));
     $data['standing3']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>3,'status'=>1));
     $data['standing4']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>4,'status'=>1));
     $data['standing5']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>5,'status'=>1));
    
     $data['birthday1']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>1,'status'=>1));
     $data['birthday2']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>2,'status'=>1));
     $data['birthday3']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>3,'status'=>1));
     $data['birthday4']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>4,'status'=>1));
     $data['birthday5']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>5,'status'=>1));
     
    //  $data['birthday']              = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>2,'status'=>1),"sort_order",2);
    //  $data['all_birthday']          = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order >"=>2,'status'=>1),"sort_order",3);
    
    
   
   // $this->view('user_album2', $data);
   
      if($count >= 1 && $check_expery->dob ){
      if($select_album->album_id == 2){
     
     $this->view('user_album2', $data);
    }else{
      redirect('Users/album');
    }
     }else{
          redirect('Users/welcome');
          
     }
    
}

public function album3()
{    
    $user_id = $this->user_id;
    $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
     $data['page_title'] = 'My munchkin - Album 3';
     $data['check_ultimate'] = $this->AdminModel->Allcount("order_details",array('u_id'=>$user_id,'status'=>1,'p_id'=>3));
       
      $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     $data['check_print_status'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     
      $select_album = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
       $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
     $data['first_page'] = $this->AdminModel->fs("album_front_back_page",array('u_id'=>$user_id,'album_id'=>3,'type'=>1));
    
     $data['baby_shower1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>1,'status'=>1));
     $data['baby_shower2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>2,'status'=>1));
     $data['baby_shower3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>3,'status'=>1));
     $data['baby_shower4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>4,'status'=>1));
    //  $data['all_baby_shower2']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order >"=>1,'status'=>1),"sort_order",2);
    // $data['all_baby_shower3']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order >"=>3,'status'=>1),"sort_order",2);
    
    
    
     $data['mom_dad1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>1,'status'=>1));
     $data['mom_dad2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>2,'status'=>1));
     $data['mom_dad3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>3,'status'=>1));
     $data['mom_dad4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>4,'status'=>1));
     $data['mom_dad5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>5,'status'=>1));
    //  $data['all_mom_dad']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order >"=>1,'status'=>1),"sort_order",2);
    //   $data['all_mom_dad2']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order >"=>3,'status'=>1),"sort_order",2);
    
     $data['baby_arrival']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>1,'status'=>1));
     $data['baby_arrival2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>2,'status'=>1));
     $data['baby_arrival3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>3,'status'=>1));
     $data['baby_arrival4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>4,'status'=>1));
     $data['baby_arrival5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>5,'status'=>1));
     $data['all_baby_arrival']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order >"=>1,'status'=>1),"sort_order",4);
    
    $data['welcome_home1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>1,'status'=>1));
     $data['welcome_home2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>2,'status'=>1));
     $data['welcome_home3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>3,'status'=>1));
     $data['welcome_home4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>4,'status'=>1));
     $data['welcome_home5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>5,'status'=>1));
     
     $data['all_welcome_home']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order > "=>2,'status'=>1),"sort_order",3);
    
    $data['first_smile']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>1,'status'=>1));
    $data['first_smile2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>2,'status'=>1));
    $data['first_smile3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>3,'status'=>1));
    $data['first_smile4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>4,'status'=>1));
    $data['first_smile5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>5,'status'=>1));
    
    $data['all_first_smile']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    $data['laugh1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>1,'status'=>1));
     //$data['all_laugh']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order !="=>1),"sort_order",4);
     $data['laugh2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>2,'status'=>1));
     $data['laugh3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>3,'status'=>1));
     $data['laugh4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>4,'status'=>1));
     $data['laugh5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>5,'status'=>1));
    
     $data['all_laugh']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order > "=>2,'status'=>1),"sort_order",3);
    
    $data['foody']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>1,'status'=>1));
    $data['foody2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>2,'status'=>1));
    $data['foody3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>3,'status'=>1));
    $data['foody4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>4,'status'=>1));
    $data['foody5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>5,'status'=>1));
   
    //  $data['all_foody']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order >"=>1,'status'=>1),"sort_order",2);
    // $data['all_foody2']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order >"=>3,'status'=>1),"sort_order",2);
    
    $data['sitting1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>1,'status'=>1));
    $data['sitting2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>2,'status'=>1));
    $data['sitting3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>3,'status'=>1));
    $data['sitting4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>4,'status'=>1));
    $data['sitting5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>5,'status'=>1));
      
    // $data['sitting2']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order >"=>1,'status'=>1),"sort_order",2);
    //  $data['all_sitting']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order > "=>3,'status'=>1),"sort_order",2);
    
    $data['standing']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>1,'status'=>1));
    $data['standing2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>2,'status'=>1));
    $data['standing3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>3,'status'=>1));
    $data['standing4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>4,'status'=>1));
    $data['standing5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>5,'status'=>1));
    
    // $data['all_standing1']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order > "=>1,'status'=>1),"sort_order",2);
    //  $data['all_standing2']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order > "=>3,'status'=>1),"sort_order",2);
    
    
    $data['birthday']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>1,'status'=>1));
    $data['birthday2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>2,'status'=>1));
    $data['birthday3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>3,'status'=>1));
    $data['birthday4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>4,'status'=>1));
    $data['birthday5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>5,'status'=>1));
    
     $data['all_birthday1']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order > "=>1,'status'=>1),"sort_order",2);
     $data['all_birthday2']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order > "=>3,'status'=>1),"sort_order",2);
    
    
   
    
     if($count >= 1 && $check_expery->dob ){
      if($select_album->album_id == 3){
     $this->view('user_album3', $data);
    }else{
      redirect('Users/album');
    }
     }else{
          redirect('Users/welcome');
          
     }
    // $this->view('user_album3', $data);
}

public function albumn1(){
  $user_id = $this->user_id;
     $data['page_title'] = 'My munchkin - Album';
    $select_album = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
       $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
       $data['check_ultimate'] = $this->AdminModel->Allcount("order_details",array('u_id'=>$user_id,'status'=>1,'p_id'=>3));
       
     $data['check_print_status'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['first_page'] = $this->AdminModel->fs("album_front_back_page",array('u_id'=>$user_id,'album_id'=>1,'type'=>1));
     $data['last_page']  = $this->AdminModel->fs("album_front_back_page",array('u_id'=>$user_id,'album_id'=>1,'type'=>2));
      
     $data['baby_shower1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>1,'status'=>1));
     $data['baby_shower2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>2,'status'=>1));
     $data['baby_shower3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>3,'status'=>1));
     $data['baby_shower4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>4,'status'=>1));
     $data['baby_shower5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>5,'status'=>1));
     
     $data['all_baby_shower']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
     $data['mom_dad1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>1,'status'=>1));
     $data['mom_dad2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>2,'status'=>1));
     $data['mom_dad3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>3,'status'=>1));
     $data['mom_dad4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>4,'status'=>1));
     $data['mom_dad5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>5,'status'=>1));
     
    //  $data['all_mom_dad']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
     $data['baby_arrival']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>1,'status'=>1));
     $data['baby_arrival2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>2,'status'=>1));
     $data['baby_arrival3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>3,'status'=>1));
     $data['baby_arrival4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>4,'status'=>1));
     $data['baby_arrival5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>5,'status'=>1));
     
     $data['all_baby_arrival']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    $data['welcome_home1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>1,'status'=>1));
    $data['welcome_home2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>2,'status'=>1));
    $data['welcome_home3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>3,'status'=>1));
    $data['welcome_home4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>4,'status'=>1));
    $data['welcome_home5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>5,'status'=>1));
    
    //$data['all_welcome_home']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order > "=>2,'status'=>1),"sort_order",3);
    
    $data['first_smile']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>1,'status'=>1));
    $data['first_smile2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>2,'status'=>1));
    $data['first_smile3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>3,'status'=>1));
    $data['first_smile4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>4,'status'=>1));
    $data['first_smile5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>5,'status'=>1));
    
    //  $data['all_first_smile']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    $data['laugh1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>1,'status'=>1));
     //$data['all_laugh']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order !="=>1),"sort_order",4);
     $data['laugh2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>2,'status'=>1));
     $data['laugh3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>3,'status'=>1));
     $data['laugh4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>4,'status'=>1));
     $data['laugh5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>5,'status'=>1));
     
     $data['all_laugh']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order > "=>2,'status'=>1),"sort_order",3);
    
    $data['foody']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>1));
    $data['foody2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>2));
    $data['foody3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>3));
    $data['foody4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>4));
    $data['foody5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>5));
    
    $data['all_foody']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    
    $data['sitting1']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>1,'status'=>1));
     $data['sitting2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>2,'status'=>1));
     $data['sitting3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>3,'status'=>1));
     $data['sitting4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>4,'status'=>1));
     $data['sitting5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>5,'status'=>1));
    
     $data['all_sitting']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order > "=>2,'status'=>1),"sort_order",3);
    
    $data['standing']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>1,'status'=>1));
    $data['standing2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>2,'status'=>1));
    $data['standing3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>3,'status'=>1));
    $data['standing4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>4,'status'=>1));
    $data['standing5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>5,'status'=>1));
      
    $data['all_standing']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    
    $data['birthday']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>1,'status'=>1));
    $data['birthday2']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>2,'status'=>1));
    $data['birthday3']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>3,'status'=>1));
    $data['birthday4']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>4,'status'=>1));
    $data['birthday5']     = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>5,'status'=>1));
      
    $data['all_birthday']     = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
    $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
    
     if($count >= 1 && $check_expery->dob ){
       if($select_album->album_id == 1){
        $this->load->view('user/common/header.php', $data);
        $this->load->view('user/common/sidebar.php');
        //$this->load->view('user/dashboard.php');
        $this->load->view('user/common/footer.php');
    }else{
       redirect('Users/album');
    }
     }else{
          redirect('Users/welcome');
          
     }
}

public function albumn2(){
  $user_id = $this->user_id;
     $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
        $data['milestone_category'] = $this->AdminModel->all_fetch("milestone_category",array("status"=>1),"sort_order");
     
     $data['page_title']    = 'My munchkin - Album2';
     
     $data['check_ultimate'] = $this->AdminModel->Allcount("order_details",array('u_id'=>$user_id,'status'=>1,'p_id'=>3));
       
     $select_album          = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
     $data['check_print_status'] = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
     $data['first_page']    = $this->AdminModel->fs("album_front_back_page",array('u_id'=>$user_id,'album_id'=>2,'type'=>1));
    
     $data['baby_shower1']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>1,'status'=>1));
     $data['baby_shower2']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>2,'status'=>1));
     $data['baby_shower3']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>3,'status'=>1));
     $data['baby_shower4']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>4,'status'=>1));
     $data['baby_shower5']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order"=>5,'status'=>1));
    //  $data['all_baby_shower2']      = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order >"=>1,'status'=>1),"sort_order",2);
    //  $data['all_baby_shower3']      = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>5,"sort_order >"=>3,'status'=>1),"sort_order",2);
    
    
     
     $data['mom_dad1']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>1,'status'=>1));
     $data['mom_dad2']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>2,'status'=>1));
     $data['mom_dad3']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>3,'status'=>1));
     $data['mom_dad4']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>4,'status'=>1));
     $data['mom_dad5']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>6,"sort_order"=>5,'status'=>1));
    
     $data['baby_arrival']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>1,'status'=>1));
     $data['baby_arrival2']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>2,'status'=>1));
     $data['baby_arrival3']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>3,'status'=>1));
     $data['baby_arrival4']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>4,'status'=>1));
     $data['baby_arrival5']          = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order"=>5,'status'=>1));
     
    //  $data['all_baby_arrival']      = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>7,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
     $data['welcome_home1']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>1,'status'=>1));
     $data['welcome_home2']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>2,'status'=>1));
     $data['welcome_home3']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>3,'status'=>1));
     $data['welcome_home4']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>4,'status'=>1));
     $data['welcome_home5']         = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>5,'status'=>1));
    
    // $data['welcome_home2']       = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order"=>2));
     //$data['all_welcome_home']      = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>8,"sort_order > "=>1,'status'=>1),"sort_order",4);
    
     $data['first_smile']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>1,'status'=>1));
     $data['first_smile2']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>2,'status'=>1));
     $data['first_smile3']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>3,'status'=>1));
     $data['first_smile4']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>4,'status'=>1));
     $data['first_smile5']           = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order"=>5,'status'=>1));
    
     $data['all_first_smile']       = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>9,"sort_order !="=>1,'status'=>1),"sort_order",4);
    
     $data['laugh1']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>1,'status'=>1));
     //$data['all_laugh']           = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order !="=>1),"sort_order",4);
     $data['laugh2']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>2,'status'=>1));
     $data['laugh3']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>3,'status'=>1));
     $data['laugh4']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>4,'status'=>1));
    
    // $data['all_laugh']             = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order > "=>2,'status'=>1),"sort_order",2);
     $data['laugh5']                = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>10,"sort_order"=>5,'status'=>1));
     
     
     $data['foody1']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>1,'status'=>1));
     $data['foody2']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>2,'status'=>1));
     $data['foody3']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>3,'status'=>1));
     $data['foody4']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>4,'status'=>1));
     $data['foody5']                 = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order"=>5,'status'=>1));
     
     $data['all_foody']             = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>11,"sort_order >"=>3,'status'=>1),"sort_order",2);
    
    
     $data['sitting1']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>1,'status'=>1));
     $data['sitting2']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order "=>2,'status'=>1));
     $data['sitting3']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order "=>3,'status'=>1));
     $data['sitting4']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>4,'status'=>1));
     $data['sitting5']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>12,"sort_order"=>5,'status'=>1));
    
    //  $data['standing']              = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order <="=>2,'status'=>1),"sort_order",2);
    //  $data['all_standing']          = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order >"=>2,'status'=>1),"sort_order",2);
     $data['standing1']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>1,'status'=>1));
     $data['standing2']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>2,'status'=>1));
     $data['standing3']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>3,'status'=>1));
     $data['standing4']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>4,'status'=>1));
     $data['standing5']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>13,"sort_order"=>5,'status'=>1));
    
     $data['birthday1']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>1,'status'=>1));
     $data['birthday2']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>2,'status'=>1));
     $data['birthday3']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>3,'status'=>1));
     $data['birthday4']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>4,'status'=>1));
     $data['birthday5']              = $this->AdminModel->fs('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>5,'status'=>1));
     
    //  $data['birthday']              = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order"=>2,'status'=>1),"sort_order",2);
    //  $data['all_birthday']          = $this->AdminModel->all_fetch('album',array('u_id'=>$user_id,'m_c_id'=>14,"sort_order >"=>2,'status'=>1),"sort_order",3);
    
    
   
   // $this->view('user_album2', $data);
   
      if($count >= 1 && $check_expery->dob ){
      if($select_album->album_id == 2){
        $this->load->view('user/common/header.php', $data);
         $this->load->view('user/user_album2.php');
        //$this->load->view('user/dashboard.php');
        $this->load->view('user/common/footer.php');
    }else{
      redirect('Users/album');
    }
     }else{
          redirect('Users/welcome');
          
     }
    
}

public function EditImage()
{           $user_id = $this->user_id;
            $id = $this->input->post('id');
           
            
           
            if($id){
                 $img = @$_POST['img'];//getting post img data
            $img = substr(explode(";",@$img)[1], 7);//converting the data 
            $target=time().'user_'.$user_id.'_img.png';//making file name
                $img_url = 'upload/album/'.$target;
               
                $update = $this->AdminModel->update("album",array('img'=>$img_url),array('id'=>$id,'u_id'=>$user_id));
                if($update){
                    echo 1;
                     file_put_contents('upload/album/'.$target, base64_decode($img));
                }else{
                    echo 2;
                }
            }else{
                echo 2;
            }
            
            
}
public function CreateGIFFrames(){
     $user_id = $this->user_id;
      $temp_id = $this->input->post('templateId');
       $frameNo = $this->input->post('frameNo');
       if($temp_id && $frameNo){
           $img = @$_POST['imgBase64'];//getting post img data
            $img = substr(explode(";",@$img)[1], 7);//converting the data 
            //$target=time().'user_'.$frameNo.'_img.png';//making file name
            $target = $temp_id .'_'.$frameNo. '.png';  
                $img_url = 'upload/frames/'.$target;
                $update = $this->AdminModel->insert("temp_frames",array('img'=>$img_url,'u_id'=>$user_id));
                if($update){
                    echo 1;
                     file_put_contents('upload/frames/'.$target, base64_decode($img));
                }else{
                    echo 2;
                }
       }
       
}


function SaveGIF()
{
  
      
             $user_id =$this->user_id;
            $img = $_POST['imgBase64'];//getting post img data
            $img = substr(explode(";",$img)[1], 7);//converting the data 
            $target=time().'user_'.$user_id.'_img.gif';//making file name
            $templateId = $this->input->post('templateId');
          
          
             $img_url = 'upload/user_templates/'.$target;
            $col_val = array(
                'img'=>$img_url,
                'temp_id'=>$templateId,
                'b_name'  => $this->input->post('b_name'),
                 'together_parent_name'  => $this->input->post('together_parent_name'),
                 't_date'  => $this->input->post('t_date'),
                 't_time'  => $this->input->post('t_time'),
                 'description'  => $this->input->post('description'), 
                );
        //   print_r($col_val);
        //   exit();
            if($img){
               
                $check = $this->AdminModel->AllCount("create_template",array('u_id'=>$user_id));
                    if($check >= 1){
                $update = $this->AdminModel->update("create_template",$col_val,array('u_id'=>$user_id));
                    }else{
                        $col_val['u_id'] = $user_id;
                        $update = $this->AdminModel->insert("create_template",$col_val);
                    }
                
                if($update){
                    echo 1;
                     file_put_contents('upload/user_templates/'.$target, base64_decode($img));
                     $fetch_temp_data = $this->AdminModel->all_fetch('temp_frames',array('u_id'=>$user_id));
                     foreach($fetch_temp_data as $fetch_temp_data){
                         unlink($fetch_temp_data->img);
                         
                     }
                     $this->AdminModel->delete('temp_frames',array('u_id'=>$user_id));
                     
                }else{
                    echo 2;
                }
            }else{
                echo 2;
            }
}

public function digitalbook()
{
     $data['page_title']        = 'My Munchkin - Digital Album';
     $user_id =$this->user_id;
     
     
$this->load->library('pagination');

  $config["base_url"] = base_url() . "Users/digitalbook";
  $config["total_rows"] = count($this->AdminModel->all_fetch("digital_album",array('status'=>1,'u_id'=>$user_id),"m_id"));
  $config["per_page"] = 10;
  $config["uri_segment"] = 3;
  

$config['num_tag_open'] = '<li class="page-item page-link">'; 
$config['num_tag_close'] = '</li>'; 
$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="javascript:void(0);">'; 
$config['cur_tag_close'] = '</a></li>'; 
$config['next_link'] = 'Next'; 
$config['prev_link'] = 'Prev'; 
$config['next_tag_open'] = '<li class="pg-next">'; 
$config['next_tag_close'] = '</li>'; 
$config['prev_tag_open'] = '<li class="pg-prev">'; 
$config['prev_tag_close'] = '</li>'; 
$config['first_tag_open'] = '<li>'; 
$config['first_tag_close'] = '</li>'; 
$config['last_tag_open'] = '<li>'; 
$config['last_tag_close'] = '</li>';
      $this->pagination->initialize($config);

  $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

  $data["links"] = $this->pagination->create_links();
     $data['all_digital_album']      = $this->AdminModel->all_fetch("digital_album",array('status'=>1,'u_id'=>$user_id),"m_id",$config["per_page"],$page);
     
     $this->view('user_digitalbook',$data);     
}
    


 public function Announcement()
  {
    $link                      = $this->uri->segment(2);
     $user_id =$this->user_id;
     $temp_id                   = decrypt_url($this->uri->segment(3));
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']        = 'My Munchkin - Announcement';
    $data['keywords']          = '';
    $data['description']       = '';
    // $data['all_social']      = $this->AdminModel->all_fetch("social_link",array('status'=>1),"sort_order");
    $data['fetch_heading3']     = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    $data['contact']            = $this->AdminModel->fs("contact",array('status'=>1));
    $data['fetch_template']    = $this->AdminModel->fs("template",array('status'=>1,'id'=>$temp_id));
    $check_expery             = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
    $data['temp_data']          = $this->AdminModel->fs("create_template",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
      
    $this->view('announcement',$data);        
  }

   public function Preview(){
       $user_id =$this->user_id;
         $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
       $data['page_title'] ='My Munchkin - Preview';
       $data['fetch_create_template'] = $this->AdminModel->fs_desc("create_template",array('u_id'=>$user_id),"id");
       $data['templates'] = $this->AdminModel->fs("template",array('id'=>$data['fetch_create_template']->temp_id));
       $this->partial('preview/'.$data['templates']->template_name,$data); 
    }

public function SubmitPreview()
{
    
   $array = array();
     $user_id =$this->user_id;
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('temp_id','Template','trim|required|numeric');
    $temp_id = $this->input->post('temp_id');
    
      if($temp_id == 21 || $temp_id == 7 || $temp_id == 4 || $temp_id == 16 || $temp_id == 10 || $temp_id == 9 || $temp_id == 8   || $temp_id == 12 || $temp_id == 11 || $temp_id == 3 || $temp_id == 19 || $temp_id == 2 || $temp_id == 1 || $temp_id == 6 || $temp_id == 14 || $temp_id == 17 || $temp_id == 18){ 
     $this->form_validation->set_rules('t_date','Date','trim|required');
    }
     if($temp_id == 21 || $temp_id == 9 || $temp_id == 13 ||  $temp_id == 10 ||  $temp_id == 15  || $temp_id == 12 ||  $temp_id == 11 || $temp_id == 3 || $temp_id == 19 || $temp_id == 5 || $temp_id == 1 || $temp_id == 6 || $temp_id == 14 || $temp_id == 17 || $temp_id == 18){ 
     $this->form_validation->set_rules('description','description','trim|required');
    }
    
     if($temp_id == 21 || $temp_id == 7 || $temp_id == 5 || $temp_id == 2 || $temp_id == 13 || $temp_id == 15 ||  $temp_id == 12 || $temp_id == 11 || $temp_id == 3 || $temp_id == 19 || $temp_id == 1 || $temp_id == 6 || $temp_id == 14 || $temp_id == 17 || $temp_id == 18){
     $this->form_validation->set_rules('together_parent_name','Parents Name','trim|required');
    }
     if( $temp_id == 4 || $temp_id == 16 || $temp_id == 10 || $temp_id == 9 || $temp_id == 8 ||   $temp_id == 12 ||  $temp_id == 19 || $temp_id == 14 || $temp_id == 17 || $temp_id == 18){ 
     $this->form_validation->set_rules('b_name','Baby Name','trim|required');
    }
    
     if($temp_id == 17 || $temp_id == 14 || $temp_id == 16 || $temp_id == 4 || $temp_id == 10 || $temp_id == 9 || $temp_id == 8 ||  $temp_id == 12 || $temp_id == 11 || $temp_id == 3 ||  $temp_id == 19 || $temp_id == 18){
     $this->form_validation->set_rules('t_time',' Time','trim|required');
    }
      if($temp_id == 4 || $temp_id == 16 || $temp_id == 9 ||   $temp_id == 11 || $temp_id == 3){ 
     $this->form_validation->set_rules('t_day','Day','trim|required');
    }
    
    if( $temp_id == 12){
     $this->form_validation->set_rules('t_month','Month','trim|required');
    }
    
    if($temp_id == 11 || $temp_id == 9 || $temp_id == 8 || $temp_id == 13 || $temp_id == 3 || $temp_id == 4 || $temp_id == 16 || $temp_id == 10){
     $this->form_validation->set_rules('address','Address','trim|required');
    }
    
    if ($this->form_validation->run()==false) {
        $array['temp_id']   = form_error('temp_id');
        $array['t_date']    = form_error('t_date');
        $array['description']    = form_error('description');
        $array['together_parent_name']    = form_error('together_parent_name');
        $array['b_name']    = form_error('b_name');
        $array['t_time']    = form_error('t_time');
        $array['t_day']    = form_error('t_day'); 
        $array['t_month']    = form_error('t_month'); 
         $array['address']    = form_error('address'); 
        $array['status']    = 0;
        echo json_encode($array);
       
     }else{
         //check templates
        $col_val = array(
            'temp_id' =>$this->input->post('temp_id'),
            't_date' =>$this->input->post('t_date'),
            'description' => $this->input->post('description'),
            'together_parent_name' => $this->input->post('together_parent_name'),
            'b_name' => $this->input->post('b_name'),
            't_time' => $this->input->post('t_time'),
            't_day'  => $this->input->post('t_day'),
            't_month'=> $this->input->post('t_month'),
            'address'=> $this->input->post('address'),
            'u_id'  =>$user_id
            );
            
          if (@$_FILES['u_img']['name']) {
          $config['file_name']= time().$_FILES['u_img']['name'];
          $config['upload_path']          = './upload/img/';
          $config['allowed_types']        = 'jpg|png|jpeg';
          $this->load->library('upload');
          $this->upload->initialize($config);
          if ( ! $this->upload->do_upload('u_img'))
          {
                 echo $data['upload_error'] =  $this->upload->display_errors();
                 exit();
          }   else
          {
                  $path = $this->upload->data();
                  $col_val['u_img']  = 'upload/img/'.$path['file_name'];
          }
          
      }
//   print_r($_FILES);
//   print_r($col_val);
//     exit();
            
         $check_create_template = $this->AdminModel->AllCount("create_template",array('u_id'=>$user_id));
         if($check_create_template < 1){
             //insert
             $insert = $this->AdminModel->Insert("create_template",$col_val);
         }else{
             //update
             $insert = $this->AdminModel->update("create_template",$col_val,array('u_id'=>$user_id));
         }
            if($insert)
            {
                 echo 1;
             }else{
                  $array['msg']    = "Something Went Wrong";
                 $array['status']    = 0;
                echo json_encode($array);
             }
         
     }

}

function SaveTemplateImage()
{
      
             $user_id =$this->user_id;
            $img = $_POST['img'];//getting post img data
            $img = substr(explode(";",$img)[1], 7);//converting the data 
            $target=time().'user_'.$user_id.'_img.png';//making file name
          
            if($img){
                $img_url = 'upload/img/'.$target;
                $check = $this->AdminModel->AllCount("create_template",array('u_id'=>$user_id));
                    if($check >= 1){
                $update = $this->AdminModel->update("create_template",array('u_img'=>$img_url),array('u_id'=>$user_id));
                    }else{
                        $update = $this->AdminModel->insert("create_template",array('u_img'=>$img_url,'u_id'=>$user_id));
                    }
                
                if($update){
                    echo 1;
                     file_put_contents('upload/img/'.$target, base64_decode($img));
                }else{
                    echo 2;
                }
            }else{
                echo 2;
            }
}
function UpdateDigitalAlbum()
{
      
             $user_id =$this->user_id;
            $img = $_POST['img'];//getting post img data
            $img = substr(explode(";",$img)[1], 7);//converting the data 
            $target=time().'user_'.$user_id.'_img.png';//making file name
            $id = $this->input->post('update_id');
            if($img){
                $img_url = 'upload/img/'.$target;
               
                $update = $this->AdminModel->update("digital_album",array('img'=>$img_url),array('u_id'=>$user_id,'id'=>$id));
                   
                
                if($update){
                    $array['status'] = 1;
                    $array['imgUrl'] = base_url('upload/img/'.$target);
                    echo json_encode($array);
                     file_put_contents('upload/img/'.$target, base64_decode($img));
                }else{
                    echo 2;
                }
            }else{
                echo 2;
            }
}

function SaveTemplate(){
             $temp_id = $this->input->post('temp_id');
             $user_id =$this->user_id;
            $img = $_POST['img'];//getting post img data
            $img = substr(explode(";",$img)[1], 7);//converting the data 
            $target=time().'user_'.$user_id.'_img.png';//making file name
           
            if($temp_id && $img){
                $img_url = 'upload/user_templates/'.$target;
               
                $update = $this->AdminModel->update("create_template",array('img'=>$img_url),array('temp_id'=>$temp_id,'u_id'=>$user_id));
                if($update){
                    echo 1;
                     file_put_contents('upload/user_templates/'.$target, base64_decode($img));
                }else{
                    echo 2;
                }
            }else{
                echo 2;
            }
            
    
}

 public function Share()
  {
    $link                      = $this->uri->segment(2);
    $user_id                    = $this->user_id;
      $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
     $current_date              = date('Y-m-d'); 
      if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
         redirect('pricing');
     }
    $data['user_details']       = $this->AdminModel->fs('user',array('id'=>$user_id));
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']        = 'My munchkin - Share';
    $data['keywords']          = '';
    $data['description']       = '';
    // $data['all_social']          = $this->AdminModel->all_fetch("social_link",array('status'=>1),"sort_order");
    $data['fetch_create_template'] = $this->AdminModel->fs_desc("create_template",array('u_id'=>$user_id),"id");
    $data['fetch_url']      = $this->AdminModel->fs("genrate_url",array('u_id'=>$user_id));
    $data['fetch_heading3']       = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    $data['contact']            = $this->AdminModel->fs("contact",array('status'=>1));
    
    if($data['fetch_url']->due_date ){
        $data['genrate_link']  =  'dd/'.$data['fetch_url']->link;
     }else if($data['fetch_url']->dob ){
     
     $data['genrate_link']  =  'db/'.$data['fetch_url']->link;
     }
    $this->view('share',$data);        
  }

function UpdateCommentStatus($id)
{
     $user_id =$this->user_id;
$fs = $this->AdminModel->fs("comments",array('id' => $id ,'u_id'=>$user_id));
    if($fs->status == 1)
    {
      $status = array('status'=>0);
    }else{
      $status = array('status'=>1);
    }
 $a = $this->AdminModel->update("comments",$status,array('id' => $id ,'u_id'=>$user_id));

if($a == true){
 
$this->session->set_flashdata('success','Status Succesfully Updated..!!',3);
redirect('Users/ncomments');
}

}

function  DeleteComment($id)
{
     $user_id =$this->user_id;
    $this->AdminModel->delete('comments',array('id'=>$id,'u_id'=>$user_id));
     $this->session->set_flashdata('success','Record delete successfully');
    redirect('Users/comments');
  

}

    
 

public function GenrateUrl()
{
     $user_id =$this->user_id;
      $save = array();
      $array = array();
     $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
     if($this->input->post('due_date')){
     $this->form_validation->set_rules('name','Child Name','trim');
    }else{
        $this->form_validation->set_rules('name','Child Name','trim|required');
    }
    
     $this->form_validation->set_rules('due_date','Due Date','trim');
     $this->form_validation->set_rules('dob','Date Of Birth','trim');
     if($this->input->post('dob')){
     $this->form_validation->set_rules('gender','Gender','required|trim');
   }
     $this->form_validation->set_rules('theme','Theme ','trim');

       if ($this->form_validation->run()==false) {
                  $array['name']      =  form_error('name');
                  $array['due_date']  = form_error('due_date');
                  $array['dob']       = form_error('dob');
                  $array['gender']    = form_error('gender');
                  $array['theme']     = form_error('theme');
                  $array['status']    = 0;
                      echo json_encode($array);
      
       }else{
           $rand_number = rand(111111,999999);
      $save['u_id']     = $user_id;
      if($this->input->post('name')){
      $save['name']     = ucwords($this->input->post('name'));
      }else{
      $save['name']     = "My munchkin ".$rand_number;
      }
      $save['due_date'] = $this->input->post('due_date');
      $save['dob']      = $this->input->post('dob');
      $save['gender']   = $this->input->post('gender');
      $save['theme']    = $this->input->post('theme');
      $count = $this->AdminModel->AllCount('genrate_url',array('u_id'=>$user_id));
        if($count >= 1)
        {

            // $result = $this->AdminModel->update('genrate_url',$save,array('u_id'=>$user_id));
        }else
        {

    $save['add_date'] = date('Y-m-d');
    $count = $this->AdminModel->AllCount('genrate_url',array('name'=>$save['name']));
    if($count >= 1){
      $array['status'] = 0;
        $array['msg']    = "This url is already exist";
         echo json_encode($array);
    }else{
      $save['link'] = sfu($save['name']);
      $check_package_purchased  = $this->AdminModel->AllCount("order_address",array('status'=>1,'u_id'=>$user_id));
        if($check_package_purchased >= 1){
         $fetch_latest_order =   $this->AdminModel->fs_desc("order_details",array('status'=>1,'u_id'=>$user_id),"id");
         $fetch_package = $this->AdminModel->fs("pricing",array('id'=>$fetch_latest_order->p_id));
                if($fetch_package->period == 1){
                    $duration ="year";
                }else{
                    $duration ="month";
                }
                if($fetch_package->id == "1"){
                  $save['expiry_date'] = AddDateInCurrentDate("2","days");
                }else{
                  $save['expiry_date'] = AddDateInCurrentDate("1",$duration);
                }
                
        }else{
            $save['expiry_date'] = AddDateInCurrentDate("2","days");
        }
        // print_r($save);
        // exit();
     $result = $this->AdminModel->Insert('genrate_url',$save);
      
    }
    }
    if ($result) {
         $array['status'] = 1;
         $array['msg']    =  sfu($save['name']);
          echo json_encode($array);
      }else
      {
         $array['status'] = 0;
        $array['msg']    = "Something Went Wrong";
         echo json_encode($array);
      }


       }
      
}

 public function CheckUrl()
 {
   $this->form_validation->set_rules('val', 'Child Name', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $check = $this->AdminModel->AllCount("genrate_url",array('name'=> ucwords($this->input->post('val'))));
            if($check >= 1){
                    //already exist
                echo 1;
            }else{
                //User id Available
                echo 2;
            }

        } else {
            //Something Went Wrong
            echo 3;
        }
 }

 public function SuggestChildName()
 {
     $array = array('Sweet','Cute','Cutie Pie');
     $arr = array();
   $this->form_validation->set_rules('val', 'Child Name', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $check = $this->AdminModel->AllCount("genrate_url",array('name'=> ucwords($this->input->post('val'))));
            if($check >= 1){
                    //already exist
        foreach($array as $key => $value)
        {
            $name = $value." ".$this->input->post('val');
            $check = $this->AdminModel->AllCount("genrate_url",array('name'=> ucwords($name)));
                if($check < 1){
                    $arr[] = $name;
                    echo ucwords($name).",";
                }
            
        }            
                    
                
            }else{
                //User id Available
                echo 2;
            }

        } else {
            //Something Went Wrong
            echo 3;
            
        }
 }


//Create strong password 
   public function valid_password($password = '')
  {
    $password = trim($password);

    $regex_lowercase = '/[a-z]/';
    $regex_uppercase = '/[A-Z]/';
    $regex_mobile = '/[0-9]/';
    $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>ยง~]/';

    if (empty($password))
    {
      $this->form_validation->set_message('valid_password', 'The Password field must have at least 1 lowercase letter, 1 uppercase letter, 1 special character and is of atleast 8 characters.');

      return FALSE;
    }

    if (preg_match_all($regex_lowercase, $password) < 1)
    {
      $this->form_validation->set_message('valid_password', 'The Password field must have at least 1 lowercase letter, 1 uppercase letter, 1 special character and is of atleast 8 characters');

      return FALSE;
    }

    if (preg_match_all($regex_uppercase, $password) < 1)
    {
      $this->form_validation->set_message('valid_password', 'The Password field must have at least 1 lowercase letter, 1 uppercase letter, 1 special character and is of atleast 8 characters');

      return FALSE;
    }

    if (preg_match_all($regex_mobile, $password) < 1)
    {
      $this->form_validation->set_message('valid_password', 'The Password field must have at least 1 lowercase letter, 1 uppercase letter, 1 special character and is of atleast 8 characters');

      return FALSE;
    }

    if (preg_match_all($regex_special, $password) < 1)
    {
      $this->form_validation->set_message('valid_password', 'The Password field must have at least 1 lowercase letter, 1 uppercase letter, 1 special character and is of atleast 8 characters');

      return FALSE;
    }

    if (strlen($password) < 8)
    {
      $this->form_validation->set_message('valid_password', 'The Password field must have at least 1 lowercase letter, 1 uppercase letter, 1 special character and is of atleast 8 characters');

      return FALSE;
    }

    if (strlen($password) > 32)
    {
      $this->form_validation->set_message('valid_password', 'The Password field must have at least 1 lowercase letter, 1 uppercase letter, 1 special character and is of atleast 8 characters');

      return FALSE;
    }

    return TRUE;
  }

function SaveProfileSetting()
{
  $array = array();
  $id = $this->user_id;
  $this->form_validation->set_error_delimiters('<p class="errors">','</p>');
  $this->form_validation->set_rules('first_name','First Name','required|trim');
  $this->form_validation->set_rules('last_name','Last Name','required|trim');
  $this->form_validation->set_rules('email',"Email Address",'required|trim|valid_email');
  $this->form_validation->set_rules('number',"Contact number",'required|trim|min_length[10]|max_length[10]');
  $this->form_validation->set_rules('chlid_name',"Child Name",'required|trim');
   $this->form_validation->set_rules('dob','Date of Birth','trim');
  if ($this->form_validation->run() == FALSE) {
    $array['first_name']  = form_error('first_name');
    $array['last_name']   = form_error('last_name');
    $array['email']       = form_error('email');
    $array['number']      = form_error('number');
    $array['chlid_name']  = form_error('chlid_name');
    $array['status']      = 0;
    echo json_encode($array);
  } else {
    $col_val = array(
      'first_name'  => $this->input->post('first_name'),
      'last_name'   => $this->input->post('last_name'),
      'email'       => $this->input->post('email'),
      'number'      => $this->input->post('number'),
      'child_name'  => $this->input->post('chlid_name')
  );
  
 
    $this->load->library('upload');
      if($_FILES['c_img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/milestone/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg|JPG|JPEG|PNG|jfif|JFIF';
           $config['max_size']             = 5000;
           $config['file_name']            = time().$_FILES['c_img']['name'];
           $this->upload->initialize($config);
           if ( !$this->upload->do_upload('c_img'))
           {                        
               $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
               echo  $error = $this->upload->display_errors();
              }
           else
           {
                $path =  $this->upload->data();
                $col_val['c_img'] = 'upload/milestone/'.$path['file_name'];
                
           }
         
     } 
  
  
    $check_mobile_number = $this->AdminModel->AllCount('user',array('number'=>$this->input->post('number')));
      if($check_mobile_number >= 1)
      {
        $check_slef_number = $this->AdminModel->AllCount('user',array('number'=>$this->input->post('number'),'id'=>$id));
        if($check_slef_number >= 1)
        {
          $update = $this->AdminModel->update('user',$col_val,array('id'=>$id));
            if($update){
                if($this->input->post('dob')){
                $this->AdminModel->update("genrate_url",array("dob"=>$this->input->post('dob'),"due_date"=>null),array("u_id"=>$id));
                }
                $array['msg']     = "Profile Updated Succesfully";
                $array['status']  = 1;
                echo json_encode($array);
            }else{
               $array['msg']     = "Something Went Wrong";
              $array['status']  = 0;
              echo json_encode($array);
            }
        }else
        {
          $array['msg']     = "Mobile Number is already Exist";
          $array['status']  = 0;
          echo json_encode($array);

        }


      }
      else
      {
        $update = $this->AdminModel->update('user',$col_val,array('id'=>$id));
        if($update)
        {
          $array['msg']     = "Profile Updated Succesfully";
          $array['status']  = 1;
          echo json_encode($array);
        }else{
          $array['msg']     = "Something Went Wrong";
          $array['status']  = 0;
          echo json_encode($array);
        }   
    
      }


  }

   
}
function AddMilestone()
{

 $array = array();
 $save = array();
  $user_id = $this->user_id;
  $this->form_validation->set_error_delimiters('<p class="errors">','</p>');
  $this->form_validation->set_rules('m_id','Milestone','trim|required');
  if($this->form_validation->run()==false)
{
$array['m_id'] =form_error('m_id');
$array['status'] = 0;
echo json_encode($array);
}else{
    
        $save['m_id'] = $this->input->post('m_id');
        $save['u_id'] = $user_id;
    
     if($this->input->post('id')){
         $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/milestone/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg|JPG|JPEG|PNG|jfif|JFIF';
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
                $save['img'] = 'upload/milestone/'.$path['file_name'];
                
           }
         
     }      $save['heading'] = $this->input->post('description');
          $result=  $this->AdminModel->update('milestone',$save,array('id'=>$this->input->post('id')));
          $this->AdminModel->update('digital_album',$save,array('t_m_id'=>$this->input->post('id')));
          
     }else{
         
          $this->load->library('upload');
            $image = array();
            $ImageCount = count($_FILES['img']['name']);
        for($i = 0; $i < $ImageCount; $i++){
          
            $_FILES['file']['name']       = rand().$_FILES['img']['name'][$i];
            $_FILES['file']['type']       = $_FILES['img']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['img']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['img']['error'][$i];
            $_FILES['file']['size']       = $_FILES['img']['size'][$i];
            // File upload configuration
            $uploadPath = './upload/milestone/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|png|JPG|PNG|JPEG|jpeg';

            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file'))
            {
                // Uploaded file data
                $imageData          = $this->upload->data();
                $uploadImgData[$i]  = 'upload/milestone/'.$imageData['file_name'];
            }

            $col_val = array();
             $col_val['m_id'] = $this->input->post('m_id');
            $col_val['u_id'] = $user_id;
            
            $col_val['img'] = $uploadImgData[$i];
             
           
          // $this->AdminModel->insert("gallery",$col_val)
          //per milestone 50 image limit check
          $check_per_milestone_count = $this->AdminModel->AllCount("milestone",array("u_id"=>$user_id,'m_id'=>$this->input->post('m_id')));
          if($check_per_milestone_count <= 50){
             $result=  $this->AdminModel->Insert('milestone',$col_val);
             $col_val['t_m_id'] = $this->db->insert_id();
             $this->AdminModel->Insert('digital_album',$col_val);
          }
        }
       
     }
        if($result){
            echo 1;
        }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
        }
}
    
}



function RemoveMultipleMilestone(){
   $array = array();
   $user_id = $this->user_id;
    $id = $this->input->post('m_id');

    if($id){
        foreach($id as $k=>$v){
        $delete = $this->AdminModel->delete("milestone",array('id'=>$v,'u_id'=>$user_id));
       //  $this->AdminModel->delete("digital_album",array('id'=>$v,'u_id'=>$user_id));
        }
        if($delete){
           
            echo 1;
        }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            
        }
        
    }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
    }
    
}

//RemoveMulitpleDigitalBook

function RemoveMulitpleDigitalBook(){
   $array = array();
   $user_id = $this->user_id;
    $id = $this->input->post('m_id');

    if($id){
        foreach($id as $k=>$v){
        $delete = $this->AdminModel->delete("digital_album",array('id'=>$v,'u_id'=>$user_id));
         //$this->AdminModel->delete("digital_album",array('id'=>$v,'u_id'=>$user_id));
        }
        if($delete){
           
            echo 1;
        }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            
        }
        
    }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
    }
    
}



function RemoveMilestone(){
   $array = array();
   $user_id = $this->user_id;
    $id = $this->input->post('m_id');
    if($id){
        $delete = $this->AdminModel->delete("milestone",array('id'=>$id,'u_id'=>$user_id));
        $this->AdminModel->delete("digital_album",array('id'=>$id,'u_id'=>$user_id));
        if($delete){
            echo 1;
        }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            
        }
        
    }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
    }
    
}


function RemoveAlbumPage(){
   $array = array();
   $user_id = $this->user_id;
    $id = $this->input->post('id');
    if($id){
        $delete = $this->AdminModel->delete("album_front_back_page",array('id'=>$id,'u_id'=>$user_id));
        if($delete){
            echo 1;
        }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            echo json_encode($array);
        }
        
    }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
            echo json_encode($array);
    }
    
}


function change_user_password()
{
  $array = array();
  $id = $this->user_id;
  $this->form_validation->set_error_delimiters('<p class="errors">','</p>');
  $this->form_validation->set_rules('old_password','Current Password','required');
    $this->form_validation->set_rules('new_password','New Password','callback_valid_password');
    $this->form_validation->set_rules('confirm_password','Confirm Password','matches[new_password]');
  if($this->form_validation->run()==false)
{
$array['old_password'] =form_error('old_password');
$array['new_password'] =form_error('new_password');
$array['confirm_password'] =form_error('confirm_password');
$array['status'] = 0;
echo json_encode($array);
}else{
  $old_password = $this->input->post('old_password');
  $new_password = $this->input->post('new_password');
  $confirm_password = $this->input->post('confirm_password');

    if (empty($old_password)) {
    $array['status'] = 0;
    $array['msg'] ='Please enter old and new passwords.'; 
    }

  
    $check =     $this->AdminModel->fs('user',array('password'=>md5($old_password),'id'=>$id));
    if (!$check) {
      $array['status'] = 0;
      $array['msg'] ='Old Password is Invalid.'; 
    }

     if ($confirm_password != $new_password ) {
      $array['status'] = 0;
      $array['msg'] ='Confirm Password do not match'; 
      }


      if (!empty($array)) {
        echo json_encode($array);
      }else{
         $result =  $this->AdminModel->update('user',array('password'=>md5($confirm_password),'con_password'=>md5($confirm_password)),array('id'=>$id));
          $array['status'] = 1;
          $array['msg'] ='Password changed successfully'; 
          echo json_encode($array);
      }
}
         
}

//albumstatus2nd
function UpdateAlbum()
{
   $array = array();
    $user_id =$this->user_id;
    $id = $this->input->post('m_id');
    if($id)
    {
        $album_selected = $this->AdminModel->fs("album_selected",array('u_id'=>$user_id));
        $count = $this->AdminModel->AllCount("milestone",array('status_for_album'=>1,'u_id'=>$user_id));
        if($count < 50)
        {
            $fs = $this->AdminModel->fs("milestone",array('id' => $id ,'u_id'=>$user_id));
            $count_category = $this->AdminModel->AllCount("milestone",array('status_for_album'=>1,'u_id'=>$user_id,'m_id'=>$fs->m_id));
           
             if($count_category < 5){
             
                     if($fs->status_for_album == 1)
                    {
                      $status = array('status_for_album'=>0);
                    }else{
                      $status = array('status_for_album'=>1);
                    }
                    
                 $a = $this->AdminModel->update("milestone",$status,array('id' => $id ,'u_id'=>$user_id));
                 $fetch_milestone_after_update = $this->AdminModel->fs("milestone",array('id'=>$id,'u_id'=>$user_id));
                 if($a)
                 {
                     echo 1; 
                    $col_val = array(
                        'u_id'=>$fs->u_id,
                        'm_id'=>$fs->id,
                        'sort_order'=>$fs->sort_order,
                        'img'=>$fs->img,
                        'm_c_id'=>$fs->m_id,
                        'status' => $fetch_milestone_after_update->status_for_album
                    );
                    if($album_selected){
                        $col_val['album_id'] = $album_selected->album_id;
                    }
                    $check_entry = $this->AdminModel->AllCount("album",array('m_id'=>$fs->id,'u_id'=>$user_id));
                    if($check_entry < 1){
                        $this->AdminModel->insert("album",$col_val);
                    }else{
                        
                        
                        $fetch_album = $this->AdminModel->fs("album",array('m_id'=>$fs->id,'u_id'=>$user_id));
                        if(empty($fetch_album->album_id) || $fetch_album->album_id == null){
                            $this->AdminModel->update("album",$col_val,array('m_id'=>$fs->id,'u_id'=>$user_id));
                        }else{
                            $this->AdminModel->update("album",array('status'=>$fetch_milestone_after_update->status_for_album),array('m_id'=>$fs->id,'u_id'=>$user_id));
                        }
                        
                        
                    }
                     
                 }else{
                      $array['status'] = 0;
                      $array['msg'] ='Something Went Wrong'; 
                      echo json_encode($array);
                 }
             }else{
                    
                      $status = array('status_for_album'=>0);
                    
                    $a = $this->AdminModel->update("milestone",$status,array('id' => $id ,'u_id'=>$user_id));
                     $fetch_milestone_after_update = $this->AdminModel->fs("milestone",array('id'=>$id,'u_id'=>$user_id));
                
                     if($a)
                 {
                      $array['status'] = 0;
                      $array['msg'] ='Only 5 Milestone allowed per category'; 
                      echo json_encode($array); 
                     $this->AdminModel->update("album",array('status'=>$fetch_milestone_after_update->status_for_album),array('m_id'=>$id,'u_id'=>$user_id));
                 
                     
                 }else{
                     $array['status'] = 0;
                      $array['msg'] ='Something Went Wrong'; 
                      echo json_encode($array);
                 }
                 
             }
    
            
        }
        else
        {
             $fs = $this->AdminModel->fs("milestone",array('id' => $id ,'u_id'=>$user_id));
               $status = array('status_for_album'=>0);
                    
                    $a = $this->AdminModel->update("milestone",$status,array('id' => $id ,'u_id'=>$user_id));
                     $fetch_milestone_after_update = $this->AdminModel->fs("milestone",array('id'=>$id,'u_id'=>$user_id));
                     if($a)
                 {
                     $array['status'] = 0;
                      $array['msg'] ='Only 50 Milestone allowed per Album'; 
                      echo json_encode($array); 
                    $this->AdminModel->update("album",array('status'=>$fetch_milestone_after_update->status_for_album),array('m_id'=>$id,'u_id'=>$user_id));
                 
                 }else{
                     $array['status'] = 0;
                      $array['msg'] ='Something Went Wrong'; 
                      echo json_encode($array);
                 }
            
        }
        
    }
    else
    {
        $array['status'] = 0;
          $array['msg'] ='Something Went Wrong'; 
          echo json_encode($array);
    }
    
}

function UpdateAlbumStatus()
{
    $array = array();
    $id = $this->input->post('m_id');
    if($id){
     $user_id =$this->user_id;
$fs = $this->AdminModel->fs("milestone",array('id' => $id ,'u_id'=>$user_id));
$count = $this->AdminModel->AllCount("milestone",array('status_for_album'=>1));
if($count < 20){
    if($fs->status_for_album == 1)
    {
      $status = array('status_for_album'=>0);
    }else{
      $status = array('status_for_album'=>1);
    }
 $a = $this->AdminModel->update("milestone",$status,array('id' => $id ,'u_id'=>$user_id));

if($a == true){
echo 1; 
$col_val = array(
    'u_id'=>$fs->u_id,
    'm_id'=>$fs->id,
    'sort_order'=>$fs->sort_order,
    'img'=>$fs->img,
    'm_c_id'=>$fs->m_id,
);
$check_entry = $this->AdminModel->AllCount("album",array('m_id'=>$fs->id));
if($check_entry < 1){
    $this->AdminModel->insert("album",$col_val);
}else{
    $fetch_album = $this->AdminModel->fs("album",array('m_id'=>$fs->id));
    if(empty($fetch_album->album_id) || $fetch_album->album_id == null){
        $this->AdminModel->update("album",$col_val,array('m_id'=>$fs->id));
    }
    
}

}else{
     $array['status'] = 0;
          $array['msg'] ='Something Went Wrong'; 
          echo json_encode($array);
}
       
}else{
          $array['status'] = 0;
          $array['msg'] ='Please Select maximum 20 Milestone'; 
          echo json_encode($array);
}
}else{
        
          $array['status'] = 0;
          $array['msg'] ='Something Went Wrong'; 
          echo json_encode($array);
}

}

//AddAlbumFirstPage
function AddAlbumFirstPage()
{
  
     $array = array();
     $save = array();
  $user_id = $this->user_id;
  $this->form_validation->set_error_delimiters('<p class="errors">','</p>');
  $this->form_validation->set_rules('type','type','trim|required');
  $this->form_validation->set_rules('album_id','Album','trim|required');
  $this->form_validation->set_rules('description ','description','trim');
  $this->form_validation->set_rules('date ','date','trim');
  $this->form_validation->set_rules('name ','name','trim');

 
  if($this->form_validation->run()==false)
{
    
$array['type'] =form_error('type');
$array['album_id'] =form_error('album_id');
$array['status'] = 0;
echo json_encode($array);
 
}else{
    
    $save['album_id'] = $this->input->post('album_id');
    $save['name'] = $this->input->post('name');
    $save['description'] = $this->input->post('description');
    $save['date'] = $this->input->post('date');
    $save['type'] = $this->input->post('type');
    
     $save['u_id'] = $user_id;
    $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/album/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg|JPG|JPEG|PNG';
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
                $save['img'] = 'upload/album/'.$path['file_name'];
                
           }
         
     }
           if($_FILES['img2']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/album/';
           $config['allowed_types']        = 'jpg|png|jpeg|svg|JPG|JPEG|PNG';
           $config['max_size']             = 5000;
           $config['file_name']            = time().$_FILES['img2']['name'];
           $this->upload->initialize($config);
           if ( !$this->upload->do_upload('img2'))
           {                        
               $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
               echo  $error = $this->upload->display_errors();
              }
           else
           {
               @$path =  $this->upload->data();
                $save['img2'] = 'upload/album/'.$path['file_name'];
                
           }
         
     }
     if($this->input->post('id')){
          $result=  $this->AdminModel->update('album_front_back_page',$save,array('id'=>$this->input->post('id')));
     }else{
       $result=  $this->AdminModel->Insert('album_front_back_page',$save);
     }
        if($result){
            echo 1;
        }else{
            $array['msg'] = "Something Went Wrong";
            $array['status'] = 0;
        }
}
    
}


function PrintRequest()
{   $user_id = $this->user_id;
    $print_status = $this->input->post('print');
    if($print_status){
        $update = $this->AdminModel->update("album_selected",array('print_status'=>1),array('u_id'=>$user_id));
        $user_details = $this->AdminModel->fs("user",array('id'=>$user_id));
        if($update){
              $config = Array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'mail.wprojects.in',
                   'smtp_port' => 587,
                  //  'smtp_user' => 'no-reply@wprojects.in',
                  //  'smtp_pass' => 'admin@123',
                   'mailtype'  => 'html',
                   'charset'   => 'iso-8859-1'
               );
        //$to = $this->input->post('email');
        //$this->load->library('email', $config);
        $this->load->library('email');
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->from('support@mymunchkin.in', 'My Munchkin');
        $this->email->to("support@mymunchkin.in");
        $this->email->subject('New Printing Request');
         $message = "<span style='font-family:Arial, Helvetica, sans-serif;  font-size:12px; color:#000000;'><br/>An enquiry posted from <strong>My Munchkin</strong>.</span><br><br>
		<table cellpadding='3' cellspacing='1' width='80%'  border='0' bgcolor='#F5F5F5'  style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;'>
    	<tr>
    		<td width='20%' align='left' valign='middle' bgcolor='#FFFFFF'>First Name</td>
    		<td width='3%;' align='center' valign='middle' bgcolor='#FFFFFF'>:</td>
    		<td width='65%' align='left' valign='middle' bgcolor='#FFFFFF'>".$user_details->first_name."</td>
    	</tr>
    		<tr>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>Last Name </td>
    		<td  align='center' valign='middle' bgcolor='#FFFFFF'>:</td>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>".$user_details->last_name."</td>
    	</tr>
    	<tr>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>Email</td>
    		<td  align='center' valign='middle' bgcolor='#FFFFFF'>:</td>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>".$user_details->email."</td>
    	</tr>
    
    	<tr>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>Mobile</td>
    		<td  align='center' valign='middle' bgcolor='#FFFFFF'>:</td>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>".@$user_details->number."</td>
    	</tr>
    	
    	<tr>
    		<td colspan='3' align='left' bgcolor='#FFFFFF'></td>
    	</tr>
    </table>
   ";
        $this->email->message($message);
        //$this->email->message("Hello");
        if($this->email->send())
           {
           echo 1;     
           }else{
            $array['status'] =0 ;
            $array['msg'] = 'SMTP ERROR';
            echo json_encode($array);
           }
        // end email

        }else{
            echo 2;
        }
    }else{
        echo 2;
    }
}
function updateDigitalData()
{
    $id = $this->input->post('id');
    $data = $this->input->post('text_data');
    if($id)
    {
        $update = $this->AdminModel->update("digital_album",array('heading'=>$data),array('id'=>$id));
            if($update)
            {
                echo 1;
            }else{
                echo 2;
            }
    }else{
        echo 2;
        
    }
    
}
/////////// END APPLICATION  ///////////

function user_digital_album()
{
   
    $data['page_title'] = "Digital Album";
    $id =  $this->user_id;
    $data['userDetails'] = $this->AdminModel->fs("user",array('id'=>$id));
      $data['all_milestone_category'] = $this->AdminModel->all_fetch('milestone_category',array('status'=>1),"sort_order");
        $data['milestone_category'] = $this->AdminModel->all_fetch('milestone_category',array('status'=>1),"sort_order");
     $data['all_baby_shower']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>5,'status'=>1));

     $data['all_mom_dad']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>6,'status'=>1));

     $data['all_baby_arrival']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>7,'status'=>1));
    

     $data['all_welcome_home']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>8,'status'=>1));

     $data['all_first_smile']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>9,'status'=>1));

     $data['all_laugh']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>10,'status'=>1));
    

     $data['all_foody']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>11,'status'=>1));
    
    $data['all_sitting']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>12,'status'=>1));
    
     $data['all_crawling']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>13,'status'=>1));
    
    
     $data['all_birthday']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>14,'status'=>1));
    
 
     $this->view('user_digital_album',$data);
     
}


function logout()
  {
    $this->Login_model->logout_user();
    redirect('home');
  }


}