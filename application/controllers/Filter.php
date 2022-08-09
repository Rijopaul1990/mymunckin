<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends Front_Controller {

var $data = array();
function __construct(){
parent::__construct();
$this->load->model(array('AdminModel','Front_model'));
$this->load->library(array('Banner','pagination','form_validation','session'));
$this->load->helper(array('form', 'url','general','date','uri'));

}



	public function LoadMore()
	{   

	     $data = array();
	     $limit = 8;
          $offset = $this->input->post('offset');
         $url = $this->input->post('url');
         $user_id = $this->AdminModel->fs('genrate_url',array('link'=>$url));
      
      //  $query = $this->AdminModel->all_fetch('course', array('status' => 1), $limit, $offset);
            
            $this->db->select('*')->from('comments');
            $this->db->where(array('status' => 1,'type'=>1,'u_id'=>$user_id->u_id));
           // $this->db->where('id >',$offset);
            $this->db->limit($limit,$offset);
            $this->db->order_by('id','desc');
            $query =  $this->db->get()->result();
         
            $result ="";
            if(count($query) >= 1){
            foreach($query as $all_course){ 
                $last_id =  $all_course->id;
                if($all_course->img){
                $img = base_url($all_course->img);
                }else{
                   
                     $img = base_url('assets/img/logo.png');
                }
                 
                $result .= '
                           <li id="'.$all_course->id.'">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="'.$img.'" class="img-fluid " alt="template">
                                    <p>'.$all_course->name.'</p>
                                </div>
                                <div class="flip-card-back">
                                  <p>'.$all_course->comment.'</p>
                                </div>  
                            </div>
                        </li>';
                }
                           
       
                $data['view'] = $result;
            $data['offset'] = ($offset+$limit);
            }
            
            else{
            $data['view'] = "End Here";
            }
           
            
           
             echo json_encode($data);
        }
	

	public function DataFilter()
	{
	    
		    $array = array();
		    
		     
                 
        $fetch_location_filter      = $this->input->post('location_filter');
        $fetch_session_filter       = $this->input->post('session_filter');
        $fetch_all_skiles           = $this->input->post('all_skiles');
        $fetch_student_age_group    = $this->input->post('student_age_group');
        $fetch_level_filters        = $this->input->post('level_filters');
        $fetch_max_price            = $this->input->post('max_price');
        $fetch_min_price            = $this->input->post('min_price');
        $fetch_max_class            = $this->input->post('max_class');
        $fetch_min_class            = $this->input->post('min_class');
        
         if ($fetch_min_class || $fetch_max_class || $fetch_max_price || $fetch_min_price || $fetch_location_filter || $fetch_session_filter || $fetch_all_skiles || $fetch_student_age_group || $fetch_level_filters)
             { 
                $fetch_data ="Select * from course where status = 1";
    
    
            if(isset($fetch_max_price,$fetch_min_price) and !empty($fetch_max_price) and !empty($fetch_min_price)){
		     $fetch_data .=" AND course_fee BETWEEN '".str_replace(",","",$fetch_min_price)."' AND '".str_replace(",","",$fetch_max_price)."' ";
	        }
	        
	         if(isset($fetch_max_class,$fetch_min_class) and !empty($fetch_max_class) and !empty($fetch_min_class)){
		      $fetch_data .=" AND no_of_class_per_batch BETWEEN '".str_replace(",","",$fetch_min_class)."' AND '".str_replace(",","",$fetch_max_class)."' ";
	        }
           
           
            
            if(isset($fetch_all_skiles) and !empty($fetch_all_skiles))
	         {
        	  $type_of_fetch_all_skiles = implode("','", $fetch_all_skiles);
        	  $fetch_data .= " AND primary_skill IN('".$type_of_fetch_all_skiles."') ";
	        }
            //print_r($fetch_all_skiles);
            
        // if($fetch_location_filter){
        //   foreach($fetch_location_filter as $k=> $value){
        //      $this->db->where("find_in_set($value, location_filter_id)");
        //   }
        // }
        // if($fetch_location_filter){
        //   foreach($fetch_location_filter as $k=> $f_l_f){
        //     $this->db->or_like('location_filter_id',$f_l_f);
        //   }
        // }
        
        if(isset($fetch_location_filter) and !empty($fetch_location_filter)){
            foreach($fetch_location_filter as $k=> $f_l_f){
            $fetch_data.="or location_filter_id LIKE '%".$f_l_f."%'";
        }
        }
        
        //  if($fetch_session_filter){
        //   foreach($fetch_session_filter as $k=> $f_s_f){
        //      $this->db->like("session_filter_id",$f_s_f);
        //   }
        // }
        
        // if($fetch_student_age_group){
        //   foreach($fetch_student_age_group as $k=> $f_s_a_g){
        //      $this->db->like("age_group_filter_id",$f_s_a_g);
        //   }
        // }
        //  if($fetch_level_filters){
        //   foreach($fetch_level_filters as $k=> $f_lev_f){
        //      $this->db->like("level_filter_id",$f_lev_f);
        //   }
        // }
        
        
      

         //$all_course_list = $this->db->get('admin')->result();
            //$this->db->limit('12');
          $fetch_data .= "order by id ASC limit 12";
        
         //$all_course    = $this->db->get('course')->result();
         $fetch = $this->db->query("$fetch_data");
        $all_course = $fetch->result();
        
             }else{
        $all_course        = $this->AdminModel->all_fetch("course",array('status'=>1),"id",12);
            //echo "else";
             }
               
              
           
                    if(count($all_course) >=1){
                         $i =1;
                foreach($all_course as $all_course){
                      $teacher = $this->AdminModel->fs("instructor_details",array('id'=>$all_course->teacher_id));
                                
                    
                    
                   
                ?>
                      <div class="col-sm-4">
                                <div class="course-listing-grid">
                                    <!--<div class="class-tag">Web Development</div>-->
                                    <a href="<?php echo site_url('course-details/'.$all_course->link);?>" class="cover-link"></a>
                                    <div class="course-image" style="background-image: url('<?php echo base_url($all_course->img);?>')"></div>
                                    <div class="course-grid-info">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="course-pulisher ml-0">By <?php echo @$teacher->first_name." ".@$teacher->last_name ?></div>
                                            <div class="course-no-classes mr-0"><?php echo $all_course->no_of_class_per_batch; ?> Classes</div>
                                        </div>
                                        <div class="course-name"><?php echo $all_course->course_title; ?></div>
                                        <div class="d-flex flex-wrap">
                                            <div class="course-grid-rating">
                                                <img src="<?php echo base_url();?>assets/images/course-review-stars.png">
                                                <span>(6)</span>
                                            </div>
                                            <div class="course-grid-like-dislike">
                                                <p><i class="fas fa-thumbs-up"></i><span>98%</span></p>
                                                <!--<p><i class="fas fa-thumbs-down"></i><span>8</span></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-user-interest">
                                        <div class="course-users"><img src="<?php echo base_url();?>assets/images/course-user.png"><span>1548</span></div>
                                        <div class="course-comments"><img src="<?php echo base_url();?>assets/images/course-comment.png"><span>25</span></div>
                                        <div class="course-price"> <span>₹ <?php echo $all_course->course_fee; ?>/-</span></div>
                                    </div>
                                </div>
                            </div>
                    
                    
                <?php  
                $i++;
                } 
                ?>
                  <div class="load-more-content" >
                                <div class="d-flex flex-wrap" id="show_load_more_data">
                                </div>
                            </div>
                            
                             <div class="col-sm-12 mt-5 text-center">
                                <a href="javascript:void(0)" class="btn theme-btn theme-btn-bordered load-more-content-btn" id="loadmore">Load more</a>
                                <input type="hidden" name="limit" id="limit" value="15"/>
                               
                                <input type="hidden" name="offset" id="offset" value="<?php echo $all_course->id; ?>"/>
                            </div>
  
	<?php 
                    }
	}


		
}

 ?>

