<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends Front_Controller {

var $data = array();
function __construct(){
parent::__construct();
$this->load->model(array('AdminModel','Front_model','Category_model'));
$ip = $this->input->ip_address();
$this->load->helper(array('form', 'url','general','uri','date'));
$this->load->library('form_validation','encryption','Banner','pagination','Pdf');
$this->ip_address = $this->session->set_userdata('ip_address',$ip);


}



  public function index()
    {
    $data['banner']            = $this->AdminModel->fs("menu",array('id'=>13));   
    $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
    $data['fetch_banner']       = $this->AdminModel->fs("banner",array('status'=>1));
    $data['fetch_heading1']     = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>1));
    $data['fetch_heading2']     = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>2));
    $data['fetch_heading3']     = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    $data['fetch_how_work']     = $this->AdminModel->fs("home_how_it_works",array('status'=>1));
    $data['home_about']         = $this->AdminModel->fs("home_about",array('status'=>1));
    $data['all_blog']           = $this->AdminModel->all_fetch_desc("blogs",array('status'=>1,'status_for_home'=>1),"add_date",8);
    $data['all_testimonial']    = $this->AdminModel->all_fetch("testimonial",array('status'=>1),"sort_order",8);
     $data['all_pricing']       = $this->AdminModel->all_fetch("pricing",array('status'=>1),"sort_order");
    $data['all_template']       = $this->AdminModel->all_fetch("template",array('status'=>1,'status_for_home'=>1),"sort_order");
      if(isset($this->session->userdata['userdetail'])){
        $id = $this->session->userdata['userdetail']['id'];
        $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$id));
        $data['expiry_date']        = strtotime($check_expery->expiry_date);
        $data['current_date']              = strtotime(date('Y-m-d')); 
        $data['check_package']      = $this->AdminModel->AllCount("order_address",array('u_id'=>$id,'status'=>1));
    }
    
    $this->view('index',$data);

    }

 function mypdf()
    {
        $data['fecting_order_address'] = $this->AdminModel->fs_desc("order_address",array('status'=>1),"id");
        $data['fetching_order_details'] = $this->AdminModel->fs("order_details",array('status'=>1,'order_id'=>$data['fecting_order_address']->order_id));
        $this->load->library('Pdf');

        $html = $this->load->view('mypdf',$data, true);
        //$this->pdf->download($html, 'invoice', false);
        $this->pdf->createPDF($html, 'invoice', false);
        //$this->email->attach('C:\Users\xyz\Desktop\images\abc.png');
    }
  public function AboutUs()
  {
    $link                      = $this->uri->segment(1);
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;

    $data['fetch_heading3']       = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    $data['all_testimonial']   = $this->AdminModel->all_fetch("testimonial",array('status'=>1),"sort_order",8);
    $data['all_faq']            = $this->AdminModel->all_fetch("faq",array('status'=>1),"sort_order");
    $data['all_whymunchkin']    = $this->AdminModel->all_fetch("about_why_munchkin",array('status'=>1),"sort_order");
    $data['fetch_about_banner']  = $this->AdminModel->fs("about",array('status'=>1));
    $data['contact']            = $this->AdminModel->fs("contact",array('status'=>1));
 
 

    $this->view('about',$data);        
  }
  public function Pricing()
  {
     $link                      = $this->uri->segment(1);
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
       $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
    $data['all_pricing']       = $this->AdminModel->all_fetch("pricing",array('status'=>1),"sort_order");
    $data['fetch_heading3']       = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    $data['contact']            = $this->AdminModel->fs("contact",array('status'=>1));
    if(isset($this->session->userdata['userdetail'])){
        $id = $this->session->userdata['userdetail']['id'];
        $check_expery       = $this->AdminModel->fs("genrate_url",array('u_id'=>$id));
        $data['expiry_date']        = strtotime($check_expery->expiry_date);
        $data['current_date']              = strtotime(date('Y-m-d')); 
        $data['check_package']      = $this->AdminModel->AllCount("order_address",array('u_id'=>$id,'status'=>1));
    }
    $this->view('pricing',$data); 
  }
  
  public function Blogs()
  
  {
      $link     = $this->uri->segment(1);
      $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
        $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
        $data['keywords']           = $data['banner']->meta_keyword;
        $data['description']        = $data['banner']->meta_description;
      $data['all_blog']     = $this->AdminModel->all_fetch_desc("blogs",array('status'=>1),"id");
      $this->view('blogs',$data);
  }
  
  public function BlogDetails()
  {
      $link                      = $this->uri->segment(2);
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
     $data['fetch_blog']         = $this->AdminModel->fs("blogs",array('link'=>$link,'status'=>1));
     $meta_title = $data['fetch_blog']->meta_title?$data['fetch_blog']->meta_title:$data['fetch_blog']->heading;
    $data['page_title']         = 'My Munchkin - '.$meta_title; 
    $data['keywords']           = $data['fetch_blog']->meta_keyword;
    $data['description']        = $data['fetch_blog']->meta_description;
    
    $data['fetch_heading3']      = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
   
    $data['all_blog']           = $this->AdminModel->all_fetch_desc("blogs",array('status'=>1),"id",8);
    $this->view('blog-detail',$data); 
  
      
  }
   public function DesignTemplate($link){
     
       $data['page_title'] ='My Munchkin - Templates';
    //   $data['fetch_create_template'] = $this->AdminModel->fs_desc("create_template",array('u_id'=>$user_id));
       $data['templates'] = $this->AdminModel->fs("template",array('template_name'=>$link));
       $this->partial('templates/'.$link,$data); 
    }
  
    public function Cart()
  {
    $ip_address = $this->session->userdata('ip_address');
   
    $data['page_title']        = 'My Munchkin - Cart';
    $data['keywords']          = '';
    $data['description']       = '';
    $data['fetch_all_cart']    = $this->AdminModel->all_fetch("add_to_cart",array('session_id'=>$ip_address));
 
    $this->view('cart',$data); 
  }
  
     public function Checkout()
  {
    $ip_address = $this->session->userdata('ip_address');
    $check_count    = $this->AdminModel->AllCount("add_to_cart",array('session_id'=>$ip_address));
    if($check_count >= 1){
    $data['page_title']        = 'My Munchkin - Checkout';
    $data['keywords']          = '';
    $data['description']       = '';
    $data['fetch_all_cart']    = $this->AdminModel->all_fetch("add_to_cart",array('session_id'=>$ip_address));
    $data['all_state']          = $this->AdminModel->all_fetch("state",array('country_id'=>99));
    $total_order               = $this->AdminModel->AllCount('order_address',null);
    $data['order_id']          = OrderNo($total_order);  
    $data['all_transtion_id']  =  substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    $data['callback_url']       = base_url().'RazorCheckout/callback';
    $data['surl']               = base_url('').'order-success';
    $data['furl']               = base_url().'order-failed';; 
    $data['currency_code']      = 'INR';  
    
   
  
  if(isset($this->session->userdata['userdetail']))
    {
        $id = $this->session->userdata['userdetail']['id'];
        $data['user_details'] = $this->AdminModel->fs("user",array('id'=>$id));
    $this->view('checkout',$data);
    }
    else{
      redirect('home');
    }
    }else{
        redirect('home');
    }
    
  }
  
   public function ContactUs()
  {
    $link                      = $this->uri->segment(1);
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
    // $data['all_social']          = $this->AdminModel->all_fetch("social_link",array('status'=>1),"sort_order");
    $data['fetch_heading3']       = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    $data['contact']            = $this->AdminModel->fs("contact",array('status'=>1));
 
    $this->view('contact',$data);        
  }


  public function Templates()
  {
    $link                      = $this->uri->segment(1);
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
      $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
    
    if(isset($this->session->userdata['userdetail']['id'])){
        $id = $this->session->userdata['userdetail']['id'];
    $fetch_latest_order = $this->AdminModel->fs_desc('order_details',array('status'=>1,'u_id'=>$id),"id"); 
    if($fetch_latest_order){
     $fetch_package = $this->AdminModel->fs("pricing",array("id"=>$fetch_latest_order->p_id));
    }else{
         $fetch_package = $this->AdminModel->fs("pricing",array("id"=>1));
    }
     $all_package = json_decode($fetch_package->template_id);
     //print_r($all_package);
    $fetch_all_paid_template = $this->AdminModel->all_fetch('template',array('status'=>1),"sort_order");
      $a = array();
        foreach($fetch_all_paid_template as $fetch_all_paid_template){
            if(in_array($fetch_all_paid_template->id,$all_package)){
                $a[] = $fetch_all_paid_template->id;
            }
        }
       
       $data['all_paid_due_date'] = $a;
    
    }
     $data['all_template_feature']     = $this->AdminModel->all_fetch("template",array('status'=>1,'status_for_feature'=>1),"sort_order");
    
    $data['all_template']      = $this->AdminModel->all_fetch("template",array('status'=>1),"sort_order");
  
    $data['all_category']      = $this->AdminModel->all_fetch("template_category",array('status'=>1),"sort_order");
    
    $data['fetch_heading3']       = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    $data['contact']            = $this->AdminModel->fs("contact",array('status'=>1));
 
    $this->view('template',$data);        
  }

  public function Albums()
  {
    $link                      = $this->uri->segment(1);
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
    // $data['all_social']          = $this->AdminModel->all_fetch("social_link",array('status'=>1),"sort_order");
    $data['fetch_heading3']       = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    $data['contact']            = $this->AdminModel->fs("contact",array('status'=>1));
 
    $this->view('album',$data);        
  }
  
   public function ExtraPages()
  {
       $link                      = $this->uri->segment(1);
     $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
      $data['fetch_data']  = $this->AdminModel->fs("extra_pages",array('type'=>$link));
    $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
      $data['fetch_heading3']     = $this->AdminModel->fs("home_heading",array('status'=>1,'type'=>3));
    if($this->uri->segment(1) == "privacy-policy"){
    $this->view('privacy',$data);        
    }else if($this->uri->segment(1) == "term-and-condtiton"){
           $this->view('term',$data);  
    }
    else if($this->uri->segment(1) == "refund-policy"){
           $this->view('refund',$data);  
    }
  }

 
 
  
    
    public function Login()
    {
     // print_r($this->session->userdata['userdetail']['id']);
      if(isset($this->session->userdata['userdetail']['id'])){
        redirect('Users');
      }else{
      $link                      = $this->uri->segment(1);
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
     // $data['all_social']          = $this->AdminModel->all_fetch("social_link",array('status'=>1),"sort_order");
    $this->view('login',$data);     
    }
}
    public function Signup()
    {
        if(isset($this->session->userdata['userdetail']['id'])){
        redirect('Users');
      }else{
      $link                      = $this->uri->segment(1);
    $data['banner']            = $this->AdminModel->fs("menu",array('link'=>$link));
   $data['page_title']         = 'My Munchkin - '.$data['banner']->meta_title;
    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
    $this->view('signup',$data);     
    }
  }

     public function DateOfBirth()
    {
    $link                           = $this->uri->segment(1);
    $url                            = $this->uri->segment(2);
     $current_date              = date('Y-m-d');     
     $data['fetch_theme']       = $this->AdminModel->fs("genrate_url",array('link' =>$url,'due_date !=' =>""));
   // $check_expiry               = $this->AdminModel- 
     if(strtotime($current_date) >= strtotime($data['fetch_theme']->expiry_date)){
         redirect('home');
     }
    $data['banner']                 = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']             = 'My Munchkin - Date Of Birth';
    $data['keywords']               = '';
    $data['description']            = '';
    //$data['fetch_theme']            = $this->AdminModel->fs("genrate_url",array('link' =>$url,'dob !=' =>""));
    $data['all_milestone_category'] = $this->AdminModel->all_fetch('milestone_category',array('status'=>1),"sort_order");
      $id                           = $data['fetch_theme']->u_id;
      $data['user_id']              = $id;
    $data['description']            = $this->AdminModel->fs("page",array('status' =>1,'type' =>2));
    $data['all_comments']           = $this->AdminModel->all_fetch_desc('comments',array('status'=>1,'type'=>1,'u_id'=>$id),"id",4); 
    $data['all_album_img']          = $this->AdminModel->all_fetch("milestone",array('u_id'=>@$id,'status_for_album'=>1,'status'=>1),"sort_order",20);
    $data['count_milestone']        = $this->AdminModel->AllCount("milestone",array('u_id'=>@$id,'status'=>1));
    
     $data['check_order']       = $this->AdminModel->AllCount('order_address',array('status'=>1,'u_id'=>$id));
    $data['check_announcement'] = $this->AdminModel->AllCount('create_template',array('status'=>1,'u_id'=>$id));
    if($data['check_order'] < 1)
    {
    $data['all_free_template']  = $this->AdminModel->all_fetch('template',array('status'=>1,'free_or_paid'=>1),"id",3);
    $data['all_paid_due_date'] = array();
    }
    else
    {
   // $data['all_free_template']  = $this->AdminModel->all_fetch('template',array('status'=>1,'status_for_dob'=>1),"sort_order");
   $fetch_latest_order = $this->AdminModel->fs_desc('order_details',array('status'=>1,'u_id'=>$id),"id"); 
     $fetch_package = $this->AdminModel->fs("pricing",array("id"=>$fetch_latest_order->p_id));
     $all_package = json_decode($fetch_package->template_id);
     $data['all_free_template']  = $this->AdminModel->all_fetch('template',array('status'=>1,'status_for_dob'=>1),"sort_order");
    
    $fetch_all_paid_template = $this->AdminModel->all_fetch('template',array('status'=>1,'status_for_dob'=>1),"sort_order");
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
 
    $data['test'] = "Test Data";
    $this->view('date-of-birth',$data);     
    }
  

     public function DueDate()
    {
      
    $link                           = $this->uri->segment(1);
    $url                            = $this->uri->segment(2);
     $current_date              = date('Y-m-d');     
     $data['fetch_theme']       = $this->AdminModel->fs("genrate_url",array('link' =>$url,'due_date !=' =>""));
   // $check_expiry               = $this->AdminModel- 
     if(strtotime($current_date) >= strtotime($data['fetch_theme']->expiry_date)){
         redirect('home');
     }
    $data['banner']             = $this->AdminModel->fs("menu",array('link'=>$link));
    $data['page_title']         = 'My Munchkin - '.$data['fetch_theme']->name;

    $data['keywords']           = $data['banner']->meta_keyword;
    $data['description']        = $data['banner']->meta_description;
  
    $id = $data['fetch_theme']->u_id;
     $data['userDetails']          = $this->AdminModel->fs("user",array('id'=>$id));
    $data['user_id']              = $id;
     $data['count_milestone']        = $this->AdminModel->AllCount("milestone",array('u_id'=>@$id,'status'=>1));

    $data['all_milestone_category'] = $this->AdminModel->all_fetch('milestone_category',array('status'=>1),"sort_order");
 $data['count_comment']           = $this->AdminModel->AllCount('comments',array('status'=>1,'u_id'=>$id)); 
    $data['check_order']       = $this->AdminModel->AllCount('order_address',array('status'=>1,'u_id'=>$id));
    $data['check_announcement'] = $this->AdminModel->AllCount('create_template',array('status'=>1,'u_id'=>$id));
     $data['check_count_milestone'] = $this->AdminModel->AllCount('milestone',array('status'=>1,'u_id'=>$id));
    $data['created_template'] = $this->AdminModel->fs_desc('create_template',array('status'=>1,'u_id'=>$id),"id");
    $get_temp = $this->AdminModel->fs("template",array("id"=> $data['created_template']->temp_id));
    $get_temp__category =  $this->AdminModel->fs("template_category",array("id"=> $get_temp->c_id));
    $data['announement_data'] =  $this->AdminModel->fs("announcement_data",array("c_id"=> $get_temp__category->id));
    $data['package']                = $this->AdminModel->fs_desc("order_details",array('u_id'=>$id,'status' =>1,'payment_status' =>"success"));
    
    if($data['check_order'] < 1)
    {
    $data['all_free_template']  = $this->AdminModel->all_fetch('template',array('status'=>1,'free_or_paid'=>1),"sort_order",3);
   // print_r($data['all_free_template']);
    $data['all_paid_due_date'] = array();
    }
    else
    {
     $fetch_latest_order = $this->AdminModel->fs_desc('order_details',array('status'=>1,'u_id'=>$id),"id"); 
     $fetch_package = $this->AdminModel->fs("pricing",array("id"=>$fetch_latest_order->p_id));
     $all_package = json_decode($fetch_package->template_id);
     $data['all_free_template']  = $this->AdminModel->all_fetch('template',array('status'=>1,'status_for_due_date'=>1),"sort_order");
    
    $fetch_all_paid_template = $this->AdminModel->all_fetch('template',array('status'=>1,'status_for_due_date'=>1),"sort_order");
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
   $data['description']         = $this->AdminModel->fs("page",array('status' =>1,'type' =>1));
   $data['all_comments']        = $this->AdminModel->all_fetch_desc('comments',array('status'=>1,'u_id'=>$id),"id",7);    
    
    $fetch = $this->AdminModel->fs('genrate_url',array('u_id'=>$id));
    if(@$fetch->dob){
     
     $data['genrate_link']  =  'date-of-birth/'.@$fetch->link;
       
     }else if($fetch->due_date ){
     
      $data['genrate_link']  =  'due-date/'.$fetch->link;
     }
    
     $data['all_baby_shower']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>5,'status'=>1),"sort_order");

     $data['all_mom_dad']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>6,'status'=>1),"sort_order");

     $data['all_baby_arrival']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>7,'status'=>1),"sort_order");
    

     $data['all_welcome_home']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>8,'status'=>1),"sort_order");

     $data['all_first_smile']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>9,'status'=>1),"sort_order");

     $data['all_laugh']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>10,'status'=>1),"sort_order");
    

     $data['all_foody']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>11,'status'=>1),"sort_order");
    
    $data['all_sitting']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>12,'status'=>1),"sort_order");
    
     $data['all_crawling']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>13,'status'=>1),"sort_order");
    
    
     $data['all_birthday']     = $this->AdminModel->all_fetch('digital_album',array('u_id'=>$id,'m_id'=>14,'status'=>1),"sort_order");
    
    $this->view('due-date',$data);  
  }
  
  public function Preview($template){
      
      $data['page_title'] ="My Munchkin - Preview";
      
      $this->partial('templates/'.$template,$data); 
  }
    public function EmailVerify()
  {
     $data['page_title']        = 'My Munchkin - Email Verification';
     $email = decrypt_url($this->uri->segment('2'));
     $tokan = decrypt_url($this->uri->segment('3'));
     $count = $this->AdminModel->AllCount("user",array("email"=>$email,"is_verify"=>0));
     if($count >= 1){
         $check = $this->AdminModel->fs("user",array("email"=>$email));
         if($check->tokan == $tokan)
         {
             $update = $this->AdminModel->update("user",array("is_verify"=>1,"verify_date"=>date("Y-m-d")),array("email"=>$email));
             if($update){
                 $data['status'] = 1;
                 $data['msg'] ="Email Verification Successful";
             }
         }else
         {
                 $data['status'] = 0;
                 $data['msg'] = "Tokan Invalid. Try Again"; 
         }
     }else{
         $data['msg'] = "Email address not found Or Email Already Verify";
     }
     $this->view('email_verify',$data);
  }

  ////Create strong password 
  public function valid_password($password = '')
  {
    $password = trim($password);

    $regex_lowercase = '/[a-z]/';
    $regex_uppercase = '/[A-Z]/';
    $regex_number = '/[0-9]/';
    $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>ยง~]/';

    if (empty($password))
    {
      $this->form_validation->set_message('valid_password', 'The {field} field is required.');

      return FALSE;
    }

    if (preg_match_all($regex_lowercase, $password) < 1)
    {
      $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');

      return FALSE;
    }

    if (preg_match_all($regex_uppercase, $password) < 1)
    {
      $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');

      return FALSE;
    }

    if (preg_match_all($regex_number, $password) < 1)
    {
      $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');

      return FALSE;
    }

    if (preg_match_all($regex_special, $password) < 1)
    {
      $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>ยง~'));

      return FALSE;
    }

    if (strlen($password) < 8)
    {
      $this->form_validation->set_message('valid_password', 'The {field} field must be at least 8 characters in length.');

      return FALSE;
    }

    if (strlen($password) > 32)
    {
      $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');

      return FALSE;
    }

    return TRUE;
  }


    function ResetPassword()
{   
    
     $data['email']  = $this->uri->segment(2);
     $data['token'] = $this->uri->segment(3);
     $link = $this->uri->segment(1);
    //$data['heading'] = $this->AdminModel->fs('special_pages',array('link'=>$link));
 
    $data['page_title']     = 'My Munchkin - Reset Password';

    
    $array=array();
    if ($this->input->post()) {
      
    $this->form_validation->set_error_delimiters('<p class="error">','</p>');
    $this->form_validation->set_rules('password','Password','required|trim|callback_valid_password');
    $this->form_validation->set_rules('con_password','Confirm Password','required|trim|matches[password]');
    if ($this->form_validation->run()==FALSE) {
        $array['password'] = form_error('password');
        $array['con_password'] = form_error('con_password');
        $array['status'] =0;
        echo json_encode($array);   
          
    }else{
        $save= array();
      
        $save['password']= $this->input->post('password');
        $save['con_password']= $this->input->post('con_password');
        $email = decrypt_url($this->input->post('email'));
        $token = decrypt_url($this->input->post('token'));

         if($save['password']!=$save['con_password']){
        $array['status'] =0;
        $array['msg'] = 'Passwords do not match. Please enter again.';
        }

        $email_check = $this->AdminModel->fs('reset_password',array('email'=>$email,'token'=>$token));
         if(empty($email_check)) {
        $array['status'] =0;
        $array['msg'] = 'This Password Reset Link is Expired. Please Request New';
        }
       
         if (!empty($array)) {
         echo json_encode($array);
         }else{
         $this->AdminModel->update('user',array('password'=>md5($save['password']),'con_password'=>md5($save['password'])),array('email'=>$email));
         $this->AdminModel->delete('reset_password',array('email'=>$email));
         $array['status'] =1;
         $array['msg'] = 'Password Reset Successfully';
         echo json_encode($array);
       }
       
      
     }
    }else{
    //$this->partial('reset_password',$data);
     $this->view('reset_password',$data);
    }
}
    
    
    
    
     public function OrderSuccess()
  {
        $data['page_title']        = 'My Munchkin - Order Successful';
         $new_date  = date("Y-m-d H:i:s");
       // print_r($this->session->all_userdata());exit();
        if(isset($this->session->userdata['userdetail'])){
        $user_id = $this->session->userdata['userdetail']['id'];
        if($this->session->flashdata('merchant_order_id')){
            $check_generate_url = $this->AdminModel->AllCount("genrate_url",array('u_id'=>$user_id));
            
            //update expiry date if user genrate url before PG
            if($check_generate_url >= 1){
                $ex_date = AddDateInCurrentDate("1","year");
            $this->AdminModel->update('genrate_url',array('expiry_date'=>$ex_date),array('u_id'=>$user_id));
            }
            
            
            $order_id = $this->session->flashdata('merchant_order_id');
            $razorpay_payment_id =$this->session->flashdata('razorpay_payment_id');
              $this->load->library('pdf');
             //pdf start
             $data['fecting_order_address'] = $this->AdminModel->fs_desc("order_address",array('u_id'=>$user_id,'order_id'=>$order_id),"id");
             $data['package_name'] = $this->AdminModel->fs("order_details",array('order_id'=>$order_id,'u_id'=>$user_id));
           

        $html = $this->load->view('mypdf',$data, true);
        //$this->pdf->download($html, 'invoice', false);
        $file_name = 'invoice_'.$order_id;
            //pdf end here
            
            
           // $update_order_address = $this->AdminModel->update('order_address',array('status'=>1,'razorpay_payment_id'=>$razorpay_payment_id,'payment_status'=>'success','add_date'=>$new_date),array('u_id'=>$user_id,'order_id'=>$order_id));
             $update_order_address = $this->AdminModel->update('order_address',array('status'=>1,'razorpay_payment_id'=>$razorpay_payment_id,'payment_status'=>'success','add_date'=>$new_date,"invoice"=>"upload/invoice/".$file_name.".pdf"),array('u_id'=>$user_id,'order_id'=>$order_id));
           
            if($update_order_address){
                                //mail to admin
            $update_order_details = $this->AdminModel->update('order_details',array('status'=>1,'payment_status'=>'success','add_date'=>$new_date),array('u_id'=>$user_id,'order_id'=>$order_id));
            $fetch_order = $this->AdminModel->fs('order_address',array('u_id'=>$user_id,'order_id'=>$order_id));
            $this->AdminModel->update('applied_coupon_code',array('status'=>1,'o_id'=>$fetch_order->id),array('u_id'=>$user_id));
            $user_details = $this->AdminModel->fs('user',array('id'=>$user_id));
                             $this->pdf->createPDF($html,$file_name, false);
                                    
                             $config = Array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'mail.mymunchkin.in',
                   'smtp_port' => 587,
                   'smtp_user' => 'no-reply@mymunchkin.in',
                   'smtp_pass' => 'a^)w!@Q8wKNb',
                   'mailtype'  => 'html',
                   'charset'   => 'iso-8859-1'
               );        
                                    
                                    //ADMIN MAIL
                                    //$this->email->initialize($config);
                                    // $this->load->library('email', $config);
                                    $this->load->library('email');
                                    $this->email->set_mailtype("html");
                                    $this->email->set_newline("\r\n");
                                    $this->email->from('support@mymunchkin.in', 'My Munchkin');
                                    $this->email->to("subpport@mymunchkin.in");
                                    $this->email->subject('My Munchkin | You Have a New Order #'.$order_id);
                                     $this->email->attach(base_url('upload/invoice/'.$file_name.".pdf"));
                                    $data['name'] = "My Munchkin ";
                                    
                                    
                                    $data['link'] = base_url();
                                    $data['order_id'] = $order_id;
                                    $data['all_items'] = $this->AdminModel->all_fetch('order_details',array("order_id"=>$order_id));
                                    $data['coupon_amount'] =$fetch_order->discount;;
                                    $data['subtotal'] =$fetch_order->sub_total;
                                    $data['total'] =$fetch_order->total;
                                    $body = $this->load->view('order_mail_to_admin',$data,TRUE);
                                    //$body ="Hello";
                                    $this->email->message($body); 
                                   //$this->email->send();
                                    if (!$this->email->send())
                                        {    
                                        $array['status'] = 0;
                                $array['msg'] =  $this->email->print_debugger();;
                                echo json_encode($array);
                                        
                                        }else{
                                             $config = Array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'mail.mymunchkin.in',
                   'smtp_port' => 587,
                   'smtp_user' => 'no-reply@mymunchkin.in',
                   'smtp_pass' => 'a^)w!@Q8wKNb',
                   'mailtype'  => 'html',
                   'charset'   => 'iso-8859-1'
               );        
                                             //USER MAIL
                                   // $this->load->library('email', $config);
                                    $this->load->library('email');
                                         $this->email->set_mailtype("html");
                                    $this->email->set_newline("\r\n");
                                    $this->email->from('support@mymunchkin.in', 'My Munchkin');
                                    $this->email->to($user_details->email);
                                    $this->email->subject('My Munchkin |  Order Successful #'.$order_id);
                                     $this->email->attach(base_url('upload/invoice/'.$file_name.".pdf"));
                                    $data['name'] = $user_details->first_name;
                                    $data['link'] = base_url();
                                    $data['order_id'] = $order_id;
                                    $data['all_items'] = $this->AdminModel->all_fetch('order_details',array("order_id"=>$order_id));
                                    $data['coupon_amount'] =$fetch_order->discount;;
                                    $data['subtotal'] =$fetch_order->sub_total;
                                    $data['total'] =$fetch_order->total;
                                    $ubody = $this->load->view('order_mail_to_user',$data,TRUE);
                                    //$ubody = $this->load->view('test_mail',$data,TRUE);
                                    $this->email->message($ubody); 
                                     if (!$this->email->send())
                                        {    
                                        $array['status'] = 0;
                                $array['msg'] =  $this->email->print_debugger();;
                                echo json_encode($array);
                                        
                                        }else{
                                            // echo 1;
                                    $this->AdminModel->delete("add_to_cart",array('session_id'=>$this->input->ip_address()));
                            
                                        }
                                        } 

                            }else{
                                $array['status'] = 0;
                            $array['msg'] = "Something Went Wrong1";
                            echo json_encode($array);
                            }
           
        $data['fetch_all_order'] = $this->AdminModel->all_fetch('order_details',array('u_id'=>$user_id,'order_id'=>$order_id));
        $data['All_Order_Count'] = $this->AdminModel->AllCount('order_details',array('u_id'=>$user_id,'order_id'=>$order_id));
        $data['fetch_order_address'] = $this->AdminModel->fs('order_address',array('u_id'=>$user_id,'order_id'=>$order_id));
        $this->load->view('order-success',$data)  ; 
        }else{
             redirect('home');
             
        }
         
        }else{
             redirect('home');
             
        }
  }
  
  public function OrderFailed()
  {
       $data['page_title']        = 'My Munchkin - Order Failed';
      
        if(isset($this->session->userdata['userdetail'])){
        $user_id = $this->session->userdata['userdetail']['id'];
        if($this->session->flashdata('merchant_order_id')){
            $order_id = $this->session->flashdata('merchant_order_id');
            $razorpay_payment_id =$this->session->flashdata('razorpay_payment_id');
          //   print_r($this->session->all_userdata());
            $update_order_address = $this->AdminModel->update('order_address',array('status'=>0,'razorpay_payment_id'=>$razorpay_payment_id,'payment_status'=>'failed'),array('u_id'=>$user_id,'order_id'=>$order_id));
            if($update_order_address){
                                //mail to admin
            $update_order_details = $this->AdminModel->update('order_details',array('status'=>0,'payment_status'=>'failed'),array('u_id'=>$user_id,'order_id'=>$order_id));
            $fetch_order = $this->AdminModel->fs('order_address',array('u_id'=>$user_id,'order_id'=>$order_id));
            $this->AdminModel->update('applied_coupon_code',array('status'=>1,'o_id'=>$fetch_order->id),array('u_id'=>$user_id));
            $user_details = $this->AdminModel->fs('user',array('id'=>$user_id));
                           
                                    
                             $config = Array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'mail.mymunchkin.in',
                   'smtp_port' => 587,
                   'smtp_user' => 'no-reply@mymunchkin.in',
                   'smtp_pass' => 'a^)w!@Q8wKNb',
                   'mailtype'  => 'html',
                   'charset'   => 'iso-8859-1'
               );        
                                    
                                    //ADMIN MAIL
                                    //$this->email->initialize($config);
                                    // $this->load->library('email', $config);
                                     $this->load->library('email');
                                    $this->email->set_mailtype("html");
                                    $this->email->set_newline("\r\n");
                                    $this->email->from('support@mymunchkin.in', 'My Munchkin');
                                    $this->email->to("support@mymunchkin.in");
                                    $this->email->subject('My Munchkin | You Have New Failed Order #'.$order_id);
                                    $data['name'] = "My Munchkin ";
                                    
                                    
                                    $data['link'] = base_url();
                                    $data['order_id'] = $order_id;
                                    $data['all_items'] = $this->AdminModel->all_fetch('order_details',array("order_id"=>$order_id));
                                    $data['coupon_amount'] = $fetch_order->discount;
                                    $data['subtotal'] =$fetch_order->sub_total;
                                    $data['total'] =$fetch_order->total;
                                    $body = $this->load->view('order_failed_mail_to_admin',$data,TRUE);
                                    //$body ="Hello";
                                    $this->email->message($body); 
                                   //$this->email->send();
                                    if (!$this->email->send())
                                        {    
                                        $array['status'] = 0;
                                $array['msg'] =  $this->email->print_debugger();;
                                echo json_encode($array);
                                        
                                        }else{
                                             $config = Array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'mail.mymunchkin.in',
                   'smtp_port' => 587,
                   'smtp_user' => 'no-reply@mymunchkin.in',
                   'smtp_pass' => 'a^)w!@Q8wKNb',
                   'mailtype'  => 'html',
                   'charset'   => 'iso-8859-1'
               );        
                                             //USER MAIL
                                    //$this->load->library('email', $config);
                                        $this->load->library('email');
                                        $this->email->set_mailtype("html");
                                        $this->email->set_newline("\r\n");
                                        $this->email->from('support@mymunchkin.in', 'My Munchkin');
                                    $this->email->to($user_details->email);
                                    $this->email->subject('My Munchkin |  Order Failed #'.$order_id);
                                    $data['name'] = $user_details->first_name;
                                    $data['link'] = base_url();
                                    $data['order_id'] = $order_id;
                                    $data['all_items'] = $this->AdminModel->all_fetch('order_details',array("order_id"=>$order_id));
                                    $data['coupon_amount'] =$fetch_order->discount;
                                    $data['subtotal'] =$fetch_order->sub_total;
                                    $data['total'] =$fetch_order->total;
                                    $ubody = $this->load->view('order_failed_mail_to_user',$data,TRUE);
                                    //$ubody = $this->load->view('test_mail',$data,TRUE);
                                    $this->email->message($ubody); 
                                     if (!$this->email->send())
                                        {    
                                        $array['status'] = 0;
                                $array['msg'] =  $this->email->print_debugger();;
                                echo json_encode($array);
                                        
                                        }else{
                                            // echo 1;
                                    $this->AdminModel->delete("add_to_cart",array('session_id'=>$this->input->ip_address()));
                                     $fetch_order_details = $this->AdminModel->all_fetch('order_details',array('order_id'=>$order_id,'u_id'=>$user_id));
                           
                                        }
                                        } 

                            }else{
                                $array['status'] = 0;
                            $array['msg'] = "Something Went Wrong1";
                            echo json_encode($array);
                            }
           
        $data['fetch_all_order'] = $this->AdminModel->all_fetch('order_details',array('u_id'=>$user_id,'order_id'=>$order_id));
        $data['All_Order_Count'] = $this->AdminModel->AllCount('order_details',array('u_id'=>$user_id,'order_id'=>$order_id));
        $data['fetch_order_address'] = $this->AdminModel->fs('order_address',array('u_id'=>$user_id,'order_id'=>$order_id));
        $this->load->view('order-failed',$data)  ; 
        }else{
             redirect('home');
        }
         
        }else{
             redirect('home');
        }
  }
  
    
    
}

 ?>