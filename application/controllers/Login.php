<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Student_Controller {

  var $data = array();
  
  public function __construct()
  {   
        
    parent::__construct();
        //$this->load->helper(array('form','url'));
    $this->load->model(array('Login_model','AdminModel'));
    $this->load->library(array('form_validation','session'));
    $this->load->helper(array('form', 'url','uri','general','date'));
    $this->load->database();
    
    
  }
  

  public function login()
  {

      if($this->session->userdata('userdetail'))
        {
          redirect('index');
        }

    $array = array();

    $this->form_validation->set_error_delimiters('<div>','</div>');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
    if ($this->form_validation->run()==false) {
      
      $array['email']   =  form_error('email');
      $array['password'] = form_error('password');
      echo json_encode($array);
    }
    else{

      $email = trim($this->input->post('email'));
      // $password= md5(trim($this->input->post('password')));
      $password= trim($this->input->post('password'));

        $check_email = $this->Login_model->check_email($email);

      if ($check_email) {
         $check_password=$this->Login_model->check_password($email,$password);
        
        if ($check_password) {
          $check = $this->Login_model->login_user($email,$password);
          if ($check) {
             
            echo 1;
          }else{
            $array['Invalid']="Invalid Credential";
            echo json_encode($array);
          }
        }else{
          $array['match'] ='Incorrect password. Please try again.';
          echo json_encode($array);
        }
       }else
      {
        $array['exits'] ='Email Address does not exist. Please register.';
          echo json_encode($array);
      }
  
    }     
    
  }



function manimumCheck($len){
    if($len<15){
        $this->form_validation->set_message('manimumCheck','Age must be grater than 15');
        return false;
    }else{
        return true;
    }
}


//Create strong password 
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





function register(){
    
   
if(empty($this->input->post())){
  redirect('home');
}


$this->form_validation->set_error_delimiters('<p class="error">','</p>');
$this->form_validation->set_rules('child_name','Child Name','trim|alpha');
$this->form_validation->set_rules('last_name','Last name','trim|required|alpha');
$this->form_validation->set_rules('first_name','First name','trim|required|alpha');
$this->form_validation->set_rules('email','Email ','trim|required|valid_email|is_unique[user.email]',array('is_unique'=>'Email Already Exits Please Login'));
$this->form_validation->set_rules('password','Password','callback_valid_password');
$this->form_validation->set_rules('con_password','Confirm Password','trim|required|matches[password]');
//$this->form_validation->set_rules('number','Phone Number','trim|required|min_length[10]|max_length[10]|numeric');


if($this->form_validation->run()==false)
{
$array = array();
$array['first_name'] = form_error('first_name');
$array['email'] =  form_error('email');
$array['password'] =form_error('password');
$array['con_password'] =form_error('con_password');
$array['child_name'] = form_error('child_name');
$array['last_name'] = form_error('last_name');
$array['mobile'] = form_error('number');
$array['status'] = 0;
echo json_encode($array);

}else{
    
    $array = array();
  
   
    
    $check = $this->AdminModel->AllCount("user",array('email'=>$this->input->post('email')));
    $without_verify = $this->AdminModel->AllCount("user",array('email'=>$this->input->post('email'),'is_verify'=>0));
    if($check >= 1){
      $array['status'] =0;
      $array['msg'] ='This Email Address Already Register';
     }
     if($without_verify >= 1){
      $array['status'] =0;
      $array['msg'] ='This Email Address Already Register or Verify your email';
     }
    
    if($this->input->post('password') != $this->input->post('con_password'))
    {
       $array['status'] = 0;
       $array['msg'] ='Passwords do not match';
    }
    // $check_mob = $this->AdminModel->AllCount("user",array('number'=>$this->input->post('number')));
    // if ($check_mob >= 1) {
    //   $array['status'] = 0;
    //   $array['msg'] ='This Phone Number Already Register';
    // }
    
  if (!empty($array)) {
    echo json_encode($array);
   }else{
   
    $save = array();
     $save['child_name']   = $this->input->post('child_name');
    $save['last_name']    = $this->input->post('last_name');
    $save['first_name']    = $this->input->post('first_name');
    $save['email']        = $this->input->post('email');
   // $save['number']       = $this->input->post('number');
    $save['password']     = md5($this->input->post('password'));
    $save['con_password'] = md5($this->input->post('password'));
  

    if (!empty($save)) {
      $result = $this->AdminModel->insert("user",$save);
      $token = rand(111111,999999);
      $this->AdminModel->update("user",array("tokan"=>$token),array("email"=>$save['email']));
        // email send
      if ($result) {
      //$this->load->library('email');
       $config = Array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'mail.mymunchkin.in',
                   'smtp_port' => 587,
                  //  'smtp_user' => 'no-reply@mymunchkin.in',
                  //  'smtp_pass' => 'a^)w!@Q8wKNb',
                   'mailtype'  => 'html',
                   'charset'   => 'iso-8859-1'
               );
        $to = $this->input->post('email');
       // $this->load->library('email', $config);
        $this->load->library('email');
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->from('support@mymunchkin.in', 'My Munchkin');
        $this->email->to($to);
        $this->email->subject('Please Verify Your Email Address');
        $data['name'] = ucwords($this->input->post('first_name').' '.$this->input->post('last_name'));
        //$data['name'] = ucwords($this->input->post('child_name'));
        $link = base_url('email-verification/'.encrypt_url($to).'/'.encrypt_url($token));
        $data['link'] = $link;
        //$data['name'] ="Ricky";
        //$data['link'] = "#";
        $body = $this->partial('email_verification_mailer',$data,TRUE);
        $this->email->message($body);
        //$this->email->message("Hello");
        if($this->email->send())
           {
            $array['status'] =1;
            $messgae ="New User Registration email address ".$this->input->post('email');
             $config = Array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'mail.mymunchkin.in',
                   'smtp_port' => 587,
                  //  'smtp_user' => 'no-reply@mymunchkin.in',
                  //  'smtp_pass' => 'a^)w!@Q8wKNb',
                   'mailtype'  => 'html',
                   'charset'   => 'iso-8859-1'
               );
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->set_newline("\r\n");
                $this->email->from('support@mymunchkin.in', 'My Munchkin');
                $this->email->to("support@mymunchkin.in");
                //$this->email->bcc("yasin@cyberworx.in");
                $this->email->subject('New User Registration');
                $this->email->message($messgae);
                $this->email->send();
           // $array['msg'] = 'Registration Successfull.Please Verify Your Email Address';
            echo json_encode($array);      
           }else{
            $array['status'] =0 ;
            $array['msg'] = 'SMTP ERROR';
            echo json_encode($array);
           }
        // end email

      
      }else{
          $array['status'] =0 ;
            $array['msg'] = 'Issue in data insert';
            echo json_encode($array);
      } 
    }else{
        $array['status'] =0;
        $array['msg'] = 'Something Getting Wrong Please retry';
      echo json_encode($array);

      }

     
     }
   }
 }


function logout()
{ 
  $this->Login_model->logout_user();
  redirect('home');
}

//send reset password mail
    function forgetUserPassword()
    {
      $array = array();
     $token =  rand(100000,999999);

    $this->form_validation->set_rules('user_email','Email','trim|required|valid_email');
    if ($this->form_validation->run()==FALSE) {
        $array['user_email'] = form_error('user_email');
        echo json_encode($array);
    }else{
        
        $check_email = $this->AdminModel->AllCount("user",array('status'=>1,'is_verify'=>1,'email' =>$this->input->post('user_email')));
       
        if($check_email >=1 )
        {
           $to = $this->input->post('user_email');
            
            if(!empty($to))
            {
                
         $config = Array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'mail.mymunchkin.in',
                   'smtp_port' => 587,
                  //  'smtp_user' => 'no-reply@mymunchkin.in',
                  //  'smtp_pass' => 'a^)w!@Q8wKNb',
                   'mailtype'  => 'html',
                   'charset'   => 'iso-8859-1'
               );
        
       // $this->load->library('email', $config);
        $this->load->library('email');
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->from('support@mymunchkin.in', 'My Munchkin');
        $this->email->to($to);
        $this->email->subject('MyMunchkin | Link to reset your password');
        $user = $this->AdminModel->fs('user',array('email'=>$to));
        $data['name'] = ucwords($user->first_name.' '.$user->last_name);
        //$data['name'] = ucwords($user->child_name);
        $aa = array();
        $check = $this->AdminModel->fs('reset_password',array('email'=>$to));
       
        if (!empty($check)){
        $aa['token'] = $token;
        $aa['modify_date'] = date('Y-m-d H:i:s'); 
            $this->AdminModel->update('reset_password',$aa,array('email'=>$to));
       }else{
    
        $aa['email'] = $to;
        $aa['token'] = $token;
        $aa['create_date'] = date('Y-m-d H:i:s');
        $aa['modify_date'] = date('Y-m-d H:i:s');
        $insert = $this->AdminModel->insert('reset_password',$aa);
       
       } 

        $link = base_url('reset-password/'.encrypt_url($to).'/'.encrypt_url($token));

        $data['link'] = $link;
        $body = $this->partial('forget_email',$data,TRUE);
        $this->email->message($body); 
        //exit();
        if ($this->email->send()) {
           echo 1;

        }else{
            $array['status'] = 0;
            $array['msg'] = "SMTP Error";
            echo json_encode($array);
        }
            }else
            {
                $array['status'] = 0;
                $array['msg'] = "Email Not Found";
                echo json_encode($array);
            }
            
            
            
            
        }else
        {
            $array['status'] = 0;
            $array['msg'] = "Email Address Not Register";
            echo json_encode($array);
        }
      
    }
    }

    
//end here
}
