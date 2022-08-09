<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends Front_Controller {

var $data = array();
function __construct(){
parent::__construct();
$this->load->model(array('AdminModel','Front_model','Category_model','Login_model'));
$this->load->library(array('Banner','pagination','form_validation','session'));
$this->load->helper(array('form', 'url','uri','general','date'));
if(isset($this->session->userdata['userdetail'])){
$this->user_id = $this->session->userdata['userdetail']['id'];
}
}
        public function UserStatus()
        {
           if(isset($this->session->userdata['userdetail'])){
            $user_id = $this->session->userdata['userdetail']['id'];
             $check_user_status = $this->AdminModel->fs('user',array('id'=>$user_id));
                if($check_user_status->status == 0){
                    $this->Login_model->logout_user();
                    echo 1;
                }else{
                    echo 2;
                }
            }
        }
        public function AddSubscriber()
        {
            $array = array();
		$this->form_validation->set_error_delimiters('<p class="errors">','</p>');
		$this->form_validation->set_rules('which', 'Select OPtion', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			if($this->form_validation->run()==false)
		{
			$array['which'] = form_error("which");
			$array['email'] = form_error("email");
			 $array['status'] = 0;
				echo json_encode($array);
		}else
		{
		    $check = $this->AdminModel->AllCount("subscriber",array("email"=>$this->input->post('email')));
		    if($check >= 1){
		        $array['status'] = 0;
				$array['msg'] = "this Email Address Already Register";
				echo json_encode($array);
		    }else{
		    	$insert = $this->AdminModel->Insert("subscriber",array("email"=>$this->input->post('email'),"type"=>$this->input->post('which')));
		    	if($insert)
		    	{
		    	    echo 1;
		    	}else{
		    	 $array['status'] = 0;
				$array['msg'] = "Something Went Wrong";
				echo json_encode($array);
		    	}
		    }
		}
		
        }

           public function ContactEnquiry()
	{	
		
		$array = array();
		$this->form_validation->set_error_delimiters('<p class="errors">','</p>');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required|numeric|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		if($this->form_validation->run()==false)
		{
			$array['first_name'] = form_error("first_name");
			$array['email'] = form_error("email");
			$array['contact_number'] = form_error("contact_number");
			$array['message'] = form_error("message");
				$array['last_name'] = form_error("last_name");
				$array['status'] = 0;
			echo json_encode($array);
		}else
		{
			$col_val = array(
				'last_name' =>$this->input->post('last_name'),
				'first_name' =>$this->input->post('first_name'),
				'email' =>$this->input->post('email'),
				'message' =>$this->input->post('message'),
				'contact_number' =>$this->input->post('contact_number'),
					);
			
			$insert = $this->AdminModel->Insert("contact_enquiry",$col_val);
			
			if($insert){
			     //   $config = Array(
        //           'protocol' => 'smtp',
        //           'smtp_host' => 'mail.mymunchkin.in',
        //           'smtp_port' => 587,
        //           'smtp_user' => 'no-reply@mymunchkin.in',
        //           'smtp_pass' => 'a^)w!@Q8wKNb',
        //           'mailtype'  => 'html',
        //           'charset'   => 'iso-8859-1'
        //       );
        //$to = $this->input->post('email');
        //$this->load->library('email', $config);
        $this->load->library('email');
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->from('support@mymunchkin.in', 'My Munchkin');
        $this->email->to("support@mymunchkin.in");
        $this->email->subject('You Have New Enquiry');
        
        $body = "<span style='font-family:Arial, Helvetica, sans-serif;  font-size:12px; color:#000000;'><br/>An enquiry posted from <strong>My Munchkin</strong>.<br><br>Enquiry details are as follows</span><br><br>
		<table cellpadding='3' cellspacing='1' width='80%'  border='0' bgcolor='#F5F5F5'  style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;'>
    	<tr>
    		<td width='20%' align='left' valign='middle' bgcolor='#FFFFFF'>Name</td>
    		<td width='3%;' align='center' valign='middle' bgcolor='#FFFFFF'>:</td>
    		<td width='65%' align='left' valign='middle' bgcolor='#FFFFFF'>".$_POST['first_name']." ".$_POST['last_name']."</td>
    	</tr>
    	<tr>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>Email</td>
    		<td  align='center' valign='middle' bgcolor='#FFFFFF'>:</td>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>".$_POST['email']."</td>
    	</tr>
    
    	<tr>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>Mobile</td>
    		<td  align='center' valign='middle' bgcolor='#FFFFFF'>:</td>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>".$_POST['contact_number']."</td>
    	</tr>
    	<tr>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>Message</td>
    		<td  align='center' valign='middle' bgcolor='#FFFFFF'>:</td>
    		<td  align='left' valign='middle' bgcolor='#FFFFFF'>".$_POST['message']."</td>
    	</tr>
    	<tr>
    		<td colspan='3' align='left' bgcolor='#FFFFFF'></td>
    	</tr>
    </table>
   ";
        $this->email->message($body);
        
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
				$array['status'] = 0;
				$array['msg'] = "Something Went Wrong";
				echo json_encode($array);
			}
		}
		
	}
        

        public function addToCart()
    {   
        $a = $this->session->all_userdata(); 
        $session_id = $this->input->ip_address();
        if(isset($this->session->userdata['userdetail'])){
        $user_id = @$this->user_id ;
        }else{
            $user_id = "";
        }
        $array = array();
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
            $this->form_validation->set_rules('p_id','Package','required|trim|htmlspecialchars');
            $this->form_validation->set_rules('p_price','Price','required|trim|htmlspecialchars');
            $this->form_validation->set_rules('p_name','Name','required|trim|htmlspecialchars');
           
         if ($this->form_validation->run()==false)
         {
                    $array['p_id']    =  "Something Went Wrong";
                    $array['p_price'] = "Something Went Wrong";
                    $array['p_name']  = "Something Went Wrong";
                    $array['status']  = 0;
                      echo json_encode($array);
             }
             else
             {
                 $p_id = decrypt_url($this->input->post('p_id'));
                 $p_amount = decrypt_url($this->input->post('p_price'));
                 $p_name = $this->input->post('p_name');
                 $col_val = array(
                     'p_id'     => $p_id,
                     'p_amount' => $p_amount,
                     'p_name'   => $p_name,
                     'u_id'     => $user_id,
                     'session_id' => $session_id
                     );
               
                  $count = $this->AdminModel->AllCount("add_to_cart",array('p_id'=> $p_id,'session_id' => $session_id));
                  if($count >= 1){
                      $insert = $this->AdminModel->update("add_to_cart",array('p_quantity'=>($count+1)),array('p_id'=> $p_id,'session_id' => $session_id));
                  }else{
                 $insert = $this->AdminModel->insert("add_to_cart",$col_val);
                  }
                 if($insert){
                     echo 1;
                 }else
                 {
                      $array['status'] = 0;
                     $array['msg']    = "Something Went Wrong";
                 }
             }
    }
    
     public function removeCart()
        {
             $array = array();
		    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
            $this->form_validation->set_rules('p_id','Package Id','required|trim|htmlspecialchars');

           
		     if ($this->form_validation->run()==false)
		     {
                    $array['p_id']    =  "Something Went Wrong";
                    $array['status']  = 0;
                      echo json_encode($array);
             }
             else
             {
                 $p_id = decrypt_url($this->input->post('p_id'));
                 $col_val = array(
                     'id'     => $p_id,
                     );
                 
                 $f_u = $this->AdminModel->fs("add_to_cart",$col_val);
                 $delete = $this->AdminModel->delete("add_to_cart",$col_val);
                 if($delete){
                     
                    //  print_r($f_u);
                    //  exit();
                     $this->AdminModel->delete("applied_coupon_code",array("u_id"=>$f_u->u_id,'status'=>0));
                    echo 1;
                 }else
                 {
                      $array['status'] = 0;
                     $array['msg']    = "Something Went Wrong";
                 }
             }
        }

    public function SendDateEnquiry()
    {
      
        $array = array();
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
            $this->form_validation->set_rules('name','Name','required|trim|htmlspecialchars');
            $this->form_validation->set_rules('email','Email Address','trim');
            $this->form_validation->set_rules('comment','Comment','required|trim|htmlspecialchars');
           
         if ($this->form_validation->run()==false)
         {
                    $array['name']     =  form_error('name');
                    $array['email']    =  form_error('email');
                    $array['comment']  =  form_error('comment');
                    $array['status']   = 0;
                      echo json_encode($array);
             }
             else
             {
                
                 $col_val = array(
                     'name'      => $this->input->post('name'),
                     'email'     => $this->input->post('email'),
                     'comment'   => $this->input->post('comment'),
                     'type'      => decrypt_url($this->input->post('type')),
                     'u_id'      => decrypt_url($this->input->post('u_id'))
                     );
 
                $this->load->library('upload');
      if($_FILES['img']['name']){
           $config['encrypt_name']         = TRUE;   
           $config['upload_path']          = './upload/img/';
           $config['allowed_types']        = 'pdf|PDF|png|PNG|JPG|jpg|JPEG|jpeg';
           $config['max_size']             = 15000;
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
                $col_val['img'] = 'upload/img/'.$path['file_name'];
                
           }
         
     }

                     $insert = $this->AdminModel->insert("comments",$col_val);
                      //print_r($col_val); exit();
              
                 if($insert){
                     echo 1;
                 }else
                 {
                      $array['status'] = 0;
                     $array['msg']    = "Something Went Wrong";
                      echo json_encode($array);
                 }
             }
        

    }
	 function ApplyCouponCode()
	 {
	     $array = array();
		    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
            $this->form_validation->set_rules('coupon_code','Coupon Code','required|trim|htmlspecialchars');
            $this->form_validation->set_rules('sub_total','Sub Total','required|trim|htmlspecialchars');
            // $this->form_validation->set_rules('artist_id','Artist','required|trim|htmlspecialchars');
             if ($this->form_validation->run()==false)
		     {
                    $array['coupon_code']    =  form_error("coupon_code");
                    $array['sub_total']      = "Something Went Wrong";
                    $array['status']         = 0;
                      echo json_encode($array);
             }
             else
             {
                 $coupon_code   = $this->input->post('coupon_code');
                 $sub_total     = $this->input->post('sub_total');
                 //check coupon code exist or not
                 $check_coupon_exist = $this->AdminModel->AllCount("deals",array('coupan_code'=>$coupon_code,'status'=>1));
                  $check = $this->AdminModel->fs("deals",array("coupan_code"=>$coupon_code,'status'=>1));
                 if($check_coupon_exist >= 1)
                 {
                     //check start date
                     if(strtotime(date('Y-m-d')) >= strtotime($check->start_date))
                     {
                         //check expiry date
                         if(strtotime(date('Y-m-d')) <= strtotime($check->expiry_date))
                         {
                             $check_coupon_use = $this->AdminModel->AllCount("applied_coupon_code",array("coupon_id"=>$check->id,"u_id"=>$this->user_id,'status'=>1));
                             //check per user limit
                             if($check_coupon_use < $check->use_per_user ){
                                  //check minimum amunt
                                 
                                 if($sub_total >= $check->minimum_amount)
                                 {
                                      $col_val = array(
                                         "u_id"=>$this->user_id,
                                         "coupon_id" => $check->id,
                                         "coupon_code" => $check->coupan_code,
                                         "status" =>0
                                         );
                                         
                                     if($check->rate == 1){
                                         $col_val['amount'] = $check->rate_amount;
                                         $col_val['type'] = 1;
                                         
                                             
                                     }else{
                                         //$amount = ($sub_total*$check->rate_amount)/100;
                                         $amount = ($sub_total*$check->rate_amount)/100;
                                         
                                         $col_val['amount'] = $amount;
                                         $col_val['type'] = 2;
                                         
                                        //  print_r($this->input->post());
                                        // exit();
                                     }
                                     // $check_counpan = $this->AdminModel->AllCount("applied_coupon_code",array("u_id"=>$this->user_id,"coupon_id" => $check->id,"coupon_code" => $check->coupan_code,"status" =>0));
                                      $check_counpan = $this->AdminModel->AllCount("applied_coupon_code",array("u_id"=>$this->user_id,"status" =>0));
                                       
                                     if($check_counpan >= 1){
                                         // $result = $this->AdminModel->update("applied_coupon_code",$col_val,array("u_id"=>$this->user_id,"coupon_id" => $check->id,"coupon_code" => $check->coupan_code,"status" =>0));
                                      $result = $this->AdminModel->update("applied_coupon_code",$col_val,array("u_id"=>$this->user_id,"status" =>0));
                                     
                                         
                                     }else{
                                     
                                     $result = $this->AdminModel->Insert("applied_coupon_code",$col_val);
                                     }
                                     if($result)
                                            {
                                                $this->session->set_flashdata('success','Coupon Code Applied Successfully');
                                                echo 1;
                                            }else{
                                                $array['msg'] ="Somthing Went Wrong";
                                                $array['status']         = 0;
                                                echo json_encode($array);
                                            }
                                 }else
                                 {
                                     $array['msg'] ="Total is less than Minimum Amount .Please Try another Coupon Code";
                                     $array['status']         = 0;
                                     echo json_encode($array);
                                 }
                                 
                             }else
                             {
                                 $array['msg'] ="Per User limit Cross .Please Try another Coupon Code";
                             $array['status']         = 0;
                             echo json_encode($array);
                             }
                             
                         }else{
                                 $array['status']   = 0;
                                 $array['msg']      = "This coupon has been expired .Please Try another Coupon Code";
                                 echo json_encode($array);  
                         }
                         
                     }else
                     {
                     $array['status']   = 0;
                     $array['msg']      = "This Coupon Code is Not Available .Please Try another Coupon Code";
                     echo json_encode($array);    
                     }
                     
                 }else
                 {
                     $array['status']   = 0;
                     $array['msg']      = "This Coupon Code is Not Available .Please Try another Coupon Code";
                     echo json_encode($array);
                 }
                 
                 
             }
	 }
    
               public function PlaceOrder()
	{   
	    
	    $user_details = $this->AdminModel->fs('user',array('id'=>$this->session->userdata['userdetail']['id']));
	   // print_r($user_details);
	   // exit();
	    $array = array();
		$this->form_validation->set_error_delimiters('<p class="errors">','</p>');
		$this->form_validation->set_rules('coupon_code', 'Coupan Code', 'trim');
		 
		$this->form_validation->set_rules('coupon_code_id', 'Coupan Code', 'trim');
		$this->form_validation->set_rules('subtotal', 'Sub Total', 'trim|required');
		$this->form_validation->set_rules('total', 'Total', 'trim|required');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('number', 'Number', 'trim|required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('coupon_amount','coupon amount','trim');
			if($this->form_validation->run()==false)
		    {
		       
			$array['coupon_code']       = form_error("coupon_code");
			$array['coupon_code_id']    = form_error("coupon_code_id");
			$array['subtotal']          = form_error("subtotal");
			$array['total']             = form_error("total");
			$array['first_name']        = form_error("first_name");
			$array['last_name']         = form_error("last_name");
			$array['number']            = form_error("number");
			$array['country']           = form_error("country");
			$array['address']           = form_error("address");
			$array['state']             = form_error("state");
			$array['zip_code']          = form_error("zip_code");
			//$array['coupon_amount'] = form_error("coupon_amount");
			echo json_encode($array);
			
		    }else
		    {
		          
		        $total_order = $this->AdminModel->AllCount('order_address',null);
		          
		         $order_id = $this->input->post('order_id');  
		          
		        //$all_transtion_id =  substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		        $all_transtion_id = $this->input->post('all_transtion_id');
		        $coupon_code_id = decrypt_url($this->input->post('coupon_code_id'));
		         $coupon_amount = decrypt_url($this->input->post('coupon_amount'));
		          $subtotal = decrypt_url($this->input->post('subtotal'));
		           $total = decrypt_url($this->input->post('total'));
		          //  print_r($subtotal);
		          // exit();
		         // $this->AdminModel->update("user",array("number"=>$this->input->post('number'),array("id"=>$this->user_id)));
		        $col_val = array(
		            'order_id' => $order_id,
		            'transction_id' => $all_transtion_id,
		            'u_id' => $this->user_id,
		            'first_name' => $this->input->post('first_name'),
		             'last_name' => $this->input->post('last_name'),
		            'email' => $user_details->email,
		            'number' => $this->input->post('number'),
		            'address' => $this->input->post('address'),
		            'state' => $this->input->post('state'),
		            'zip_code' => $this->input->post('zip_code'),
		            'country' => $this->input->post('country'),
		            'sub_total' =>$subtotal,
		            'discount' =>$coupon_amount,
		            'coupan_code' =>$coupon_code_id,
		            'total' =>$total,
		            'payment_status' =>"Pending",
		            'payment_method' =>"online",
		            'razorpay_order_id' =>$this->input->post('razor_pay_order_id')
		           
		            );
	               
		            $result = $this->AdminModel->Insert("order_address",$col_val);
		            $last_insert_id = $this->db->insert_id();
		           
		            if($result){
		                $fetch_cart = $this->AdminModel->all_fetch("add_to_cart",array('session_id'=>$this->input->ip_address()));
		                 
		                    
		                if(is_array($fetch_cart) || is_object($fetch_cart))
		                {
  
		                        foreach($fetch_cart as $fetch_cart){
		                       $col = array(
		                           'order_id'=> $order_id,
		                           'transction_id'=>$all_transtion_id,
		                           'o_id'=> $last_insert_id,
		                           'u_id'=> $this->user_id,
		                           'p_id' => $fetch_cart->p_id,
		                           'session_id'=> $fetch_cart->session_id,
		                           'p_amount'=>$fetch_cart->p_amount,
		                           'p_name'=>$fetch_cart->p_name,

		                           //"booking_date" => @$fetch_cart->booking_date
		                           
		                           ); 
		                              // print_r($col);                              
		                           $order_insert = $this->AdminModel->Insert("order_details",$col);
                                    
                                   
		                }
		                
		                }
		              //  print_r($col);
		              //   print_r($order_insert);
		              //    exit();
		                  //  echo 1;    
		                $array['status']     = 1;
        				$array['amount']     = $total*100;
                        $array['package_id'] = $fetch_cart->p_id;
                        $this->session->set_flashdata('merchant_order_id',$order_id);
        				echo json_encode($array);
		            }else{
		                $array['status'] = 0;
        				$array['msg'] = "Something Went Wrong";
        				echo json_encode($array);
		            }
		    }
	}


 }

 ?>