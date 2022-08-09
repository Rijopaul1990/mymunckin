<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class SocialLogin extends Front_Controller {

var $data = array();
function __construct(){
parent::__construct();
$this->load->model(array('AdminModel','Front_model'));
$this->load->library(array('Banner','pagination','form_validation','session'));
$this->load->helper(array('form', 'url','general','date','uri'));
if(isset($this->session->userdata['userdetail'])){
$this->user_id = $this->session->userdata['userdetail']['id'];
}
}

//user FB login here

public function UserFBLogin()
{
    
    $first_name = $this->input->post('first_name');
	$last_name = $this->input->post('last_name');
	$email = $this->input->post('email');
	$fphoto = $this->input->post('fphoto');
	$oauth_uid = $this->input->post('oauth_uid');
    $oauth_provider = 'facebook';
	
	$where = array('oauth_provider'=>"facebook","oauth_uid"=>$oauth_uid);
	
	$check_uese_exits = $this->AdminModel->AllCount('user',$where);
	if($check_uese_exits >= 1){
	     $user_details = $this->AdminModel->fs('user',$where);
	   $user =array();
		$user['id']         = $user_details->id;
		$user['first_name'] = $user_details->first_name;
		$user['last_name']  = $user_details->last_name;
		$user['email']      = $user_details->email;
		$this->session->set_userdata('userdetail',$user);
		redirect('home');
	}else
	{
	     $count_users = $this->AdminModel->AllCount("user",null);
        $check_email = $this->AdminModel->AllCount('user',array('email'=>$email));
	    $col_val = array(
	        'first_name' => $first_name,
	        'last_name' => $last_name,
	        'email' => $email,
	        'img' => $fphoto,
	        'oauth_provider' => "facebook",
	        'oauth_uid' => $oauth_uid,
	        
	        'status' => 1,
	        'is_verify' => 1,
	        'verify_date' => date('Y-m-d')
	        );    
	        if($check_email >= 1){
	            $insert = $this->AdminModel->update('user',$col_val,array('email'=>$email));
	        }else{
	        $insert = $this->AdminModel->Insert('user',$col_val);
	   
	            //email end here
	        }
	   //      print_r($col_val);
    // exit();
	        if($insert){
	       $user_details = $this->AdminModel->fs('user',$where);
	   $user =array();
		$user['id']         = $user_details->id;
		$user['first_name'] = $user_details->first_name;
		$user['last_name']  = $user_details->last_name;
		$user['email']      = $user_details->email;
		$this->session->set_userdata('userdetail',$user);
		redirect('home');
	        }
	}
	
	
	
}




//user fb login end here

//user google login here
public function UserGoogleLogin()
{
    $name = $this->input->post('name');
	$email = $this->input->post('email');
	$gpicture = $this->input->post('gpicture');
	$oauth_uid = $this->input->post('oauth_uid');
	$oauth_provider = 'google';
	    $explod_name = explode(" ",$name);
		$where = array('oauth_provider'=>"google","oauth_uid"=>$oauth_uid);
		$check_uese_exits = $this->AdminModel->AllCount('user',$where);
	if($check_uese_exits >= 1){
	     $user_details = $this->AdminModel->fs('user',$where);
	   $user =array();
		$user['id']         = $user_details->id;
		$user['first_name'] = $user_details->first_name;
		$user['last_name']  = @$user_details->last_name;
		$user['email']      = $user_details->email;
		$this->session->set_userdata('userdetail',$user);
		redirect('home');
	}else
	{
	     $count_users = $this->AdminModel->AllCount("user",null);
              $check_email = $this->AdminModel->AllCount('user',array('email'=>$email));
	    $col_val = array(
	        'first_name' => @$explod_name[0],
	        'last_name' => @$explod_name[1],
	        'email' => $email,
	       // 'img' => $gpicture,
	        'oauth_provider' => "google",
	        'oauth_uid' => $oauth_uid,
	        //'profile_id' => ProfileID($count_users),
	        'status' => 1,
	        'is_verify' => 1,
	        'verify_date' => date('Y-m-d'),
	        
	        );    
	        if($check_email >= 1){
	             $insert = $this->AdminModel->update('user',$col_val,array('email'=>$email));
	        }else{
	       
	        $insert = $this->AdminModel->Insert('user',$col_val);
	      
	        
	        }
	        if($insert){
	       $user_details = $this->AdminModel->fs('user',$where);
	   $user =array();
		$user['id']         = $user_details->id;
		$user['first_name'] = $user_details->first_name;
		$user['last_name']  = $user_details->last_name;
		$user['email']      = $user_details->email;
		$this->session->set_userdata('userdetail',$user);
		redirect('home');
	        }
	}
	
}

//user google login end here





}?>