
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DobController extends Front_Controller {

var $data = array();
function __construct(){
parent::__construct();
$this->load->model(array('AdminModel','Front_model','Category_model'));
$ip = $this->input->ip_address();
$this->load->helper(array('form', 'url','general','uri','date'));
$this->load->library('form_validation','encryption','Banner','pagination');
$this->ip_address = $this->session->set_userdata('ip_address',$ip);


}

 public function DateOfBirth()
    {
    $link                           = $this->uri->segment(1);
     $url                            = $this->uri->segment(2);
     $current_date              = date('Y-m-d');     
     $data['fetch_theme']       = $this->AdminModel->fs("genrate_url",array('link' =>$url,'dob !=' =>""));
   // $check_expiry               = $this->AdminModel- 
     if(strtotime($current_date) >= strtotime($data['fetch_theme']->expiry_date)){
         redirect('home');
     }
    $data['banner']                 = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']             = 'My munchkin - '.$data['fetch_theme']->name ;

    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
    //$data['fetch_theme']            = $this->AdminModel->fs("genrate_url",array('link' =>$url,'dob !=' =>""));
    $data['all_milestone_category'] = $this->AdminModel->all_fetch('milestone_category',array('status'=>1),"sort_order");
      $id                           = $data['fetch_theme']->u_id;
      $data['userDetails']          = $this->AdminModel->fs("user",array('id'=>$id));
      $data['user_id']              = $id;
    $data['description']            = $this->AdminModel->fs("page",array('status' =>1,'type' =>2));
    $data['all_comments']           = $this->AdminModel->all_fetch_desc('comments',array('status'=>1,'type'=>1,'u_id'=>$id),"id",7); 
    $data['count_comment']          = $this->AdminModel->AllCount('comments',array('status'=>1,'u_id'=>$id)); 
    $data['all_album_img']          = $this->AdminModel->all_fetch("milestone",array('u_id'=>@$id,'status_for_album'=>1,'status'=>1),"sort_order",20);
    $data['count_milestone']        = $this->AdminModel->AllCount("milestone",array('u_id'=>@$id,'status'=>1));
    $data['check_order']            = $this->AdminModel->AllCount('order_address',array('status'=>1,'u_id'=>$id));
    $data['check_announcement']     = $this->AdminModel->AllCount('create_template',array('status'=>1,'u_id'=>$id));
    $data['package']                = $this->AdminModel->fs_desc("order_details",array('u_id'=>$id,'status' =>1,'payment_status' =>"success"));
    $data['fetch_heading3']     = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    
      $data['check_count_milestone'] = $this->AdminModel->AllCount('milestone',array('status'=>1,'u_id'=>$id));
      $data['created_template'] = $this->AdminModel->fs_desc('create_template',array('status'=>1,'u_id'=>$id),"id");
    if($data['check_order'] < 1)
    {
    $data['all_free_template']  = $this->AdminModel->all_fetch('template',array('status'=>1,'c_id'=>4),"id");
    $data['all_paid_due_date'] = array();
    }
    else
    {
   // $data['all_free_template']  = $this->AdminModel->all_fetch('template',array('status'=>1,'status_for_dob'=>1),"sort_order");
   $fetch_latest_order = $this->AdminModel->fs_desc('order_details',array('status'=>1,'u_id'=>$id),"id"); 
     $fetch_package = $this->AdminModel->fs("pricing",array("id"=>$fetch_latest_order->p_id));
     $all_package = json_decode($fetch_package->template_id);
     $data['all_free_template']  = $this->AdminModel->all_fetch('template',array('status'=>1,'c_id'=>4),"sort_order");
    
    $fetch_all_paid_template = $this->AdminModel->all_fetch('template',array('status'=>1,'c_id'=>4),"sort_order");
      $a = array();
        foreach($fetch_all_paid_template as $fetch_all_paid_template){
            if(in_array($fetch_all_paid_template->id,$all_package)){
                $a[] = $fetch_all_paid_template->id;
            }
        }
       // print_r($a);
       $data['all_paid_due_date'] = $a;
    }
    
    $data['all_pricing']         = $this->AdminModel->all_fetch("pricing",array('status'=>1),"sort_order");
 
    $get_temp = $this->AdminModel->fs("template",array("id"=> $data['created_template']->temp_id));
   
    $get_temp__category =  $this->AdminModel->fs("template_category",array("id"=>$get_temp->c_id));
    $data['announement_data'] =  $this->AdminModel->fs("announcement_data",array("c_id"=> $get_temp__category->id));
    
       $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$id));
    if($fetch->dob){
     
     $data['genrate_link']  =  'db/'.@$fetch->link;
       
     }else if($fetch->due_date){
     
      $data['genrate_link']  =  'dd/'.$fetch->link;
     }
   
   //album 1 start here
  
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
    
 
    // echo "<pre>";print_r($data);echo "</pre>";die;
    $this->view('date-of-birth',$data);     
    // $this->load->view('date-of-birth',$data);  
    }

    
    
}

 ?>