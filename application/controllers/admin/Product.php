<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Admin_Controller {
  
  var $data = array();
  var $for_form_user_id = false;

  public function __construct() 
  {
    parent::__construct(); 

    if(!$this->session->userdata('admindetail'))
    {
      redirect('admin/login');
    }
    $this->load->helper(array('form','url','general'));
    $this->load->model(array('Login_model','AdminModel','Category_model'));
    $this->load->library(array('form_validation','session','banner'));
    $this->load->database();
      
  }



//ADD NEW CARS
  public function all_pricing()
  {
    $data['page_title']= 'All Pricing';
    $data['all_pricing']= $this->AdminModel->all_fetch('pricing',null);
    $this->view('all_pricing', $data);
  }

  
  function add_pricing($id=false)
  {
   $data['all_period'] = array('1'=>"Year",'2'=>"Month");
   $data['all_template'] = $this->AdminModel->all_fetch("template",array('status'=>1),"name");
   if (@$id)
   {
     $data['page_title'] = ' Edit Pricing';
     $data['form_action'] ='admin/add_pricing/'.@$id;
     $row = $this->AdminModel->fs("pricing",array('id'=>$id));
     $data['fetch_feature'] = $this->AdminModel->all_fetch("pricing_feature",array('p_id'=>$id,'status'=>1));
   

     $data['name']                       = $row->name;
     $data['id']                         = $row->id;
     $data['price']                      = $row->price;
     $data['period']                    = $row->period;
     $data['sort_order']                = $row->sort_order;
     $data['template_id']               = $row->template_id;
    
     

     
     }
     else
     {
     $data['page_title'] = ' Add Pricing';
     $data['form_action'] ='admin/add_pricing';
     $data['id'] = '';
     $data['differentiators'] = '';
     $data['differentiators']         = '';
     $data['short_description']     = '';
     $data['short_short_description']      = '';
     $data['short_description']   = '';
     $data['link']             = '';
     
     }
  // print_r($this->input->post());
  // exit();
     $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
     $this->form_validation->set_rules('name','Name','trim|required');
     $this->form_validation->set_rules('sort_order','Sort Order','trim|required');
     $this->form_validation->set_rules('price','Price','trim|required');
    // $this->form_validation->set_rules('period','Duration','trim|required');

    //  $this->form_validation->set_rules('differentiators','Differentiators','required');
     if ($this->form_validation->run()==false) {
         $this->view('add_pricing',$data);
      }else{
 
 
       $save= array();
           
        if(@$id){
       $save['id'] = $id; 
        
       }
      
       $save['name']                                 =  $this->input->post('name');
       $save['sort_order']                           =  $this->input->post('sort_order');
       $save['price']                                =  $this->input->post('price');
       $save['period']                               =  1;
       $save['template_id']                          = json_encode($this->input->post('template_id'));

      

          
 
          if(@$id){
             
            $result=  $this->AdminModel->update("pricing",$save,array('id'=>$id));
            $last_id = $id;
              }
              else{
              
              $result=  $this->AdminModel->Insert("pricing",$save);
              $last_id = $this->db->insert_id();
              }
              
           

         //Add Variant
        $this->AdminModel->delete("pricing_feature",array('p_id'=>$last_id));
        for($i = 0; $i < count($this->input->post("feature_heading")); $i++)
        {
          
            $col_val          = array('p_id' =>$last_id);
            $col_val['name']  = $this->input->post('feature_heading')[$i];
            $col_val['sort_order'] = $this->input->post('feature_sort_order')[$i];
            
           $this->AdminModel->insert("pricing_feature",$col_val);
           // print_r($col_val);
           //  exit();
        }
       



           if ($result) {
  $this->session->set_flashdata('success','Record Update successfully');
  redirect('admin/add_pricing/'.@$id);
  }else{
  $this->session->set_flashdata('error','Record not insert');
  redirect('admin/all_pricing');
  }
 
 
  }
 
 
 }

function UpdatePricing($id)
{
  $row = $this->AdminModel->fs('pricing',array('id'=>$id));
  if ($row->status==1) {
    $status = array('status'=>'0');
  }else{
      $status = array('status'=>'1');
  }
 $result=  $this->AdminModel->update('pricing',$status,array('id'=>$id));
  if ($result) {
  $this->session->set_flashdata('success','Status Update successfully');
  redirect('admin/all_pricing');
  }
}


// function  DeletePricing($id)
// {
//   if ($id) {
//     $this->AdminModel->delete('pricing',array('id'=>$id));
//      $this->session->set_flashdata('success','Record delete successfully');
//     redirect('admin/all_cars');
//   }

// }


  
 








}