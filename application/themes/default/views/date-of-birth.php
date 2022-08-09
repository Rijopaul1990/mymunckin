
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 

 <?php 
 if(@$fetch_theme->theme){
 ?>
 <style type="text/css">
 .cong.login-page .banner {
    background: linear-gradient(
180deg, #9ddefe, #e3bac2) !important;
}
.comment {
    background: #ffacaa !important;
}

/*     .comment {*/
/*    background: <?php echo @$fetch_theme->theme ?> !important;*/
/*}*/
.cong.login-page .banner {
    background: linear-gradient(
270deg
, <?php echo @$fetch_theme->theme ?>, <?php echo @$fetch_theme->theme ?>);
}
.aspect {
    margin-bottom: -40%;
}
ul#social_share li {
    display: inline-block;
    margin: 20px 5px;
}
ul#social_share a {
    text-decoration: none;
    color: #fff;
    border-radius: 50%;
    justify-content: center;
    align-items: center;
    width: 42px;
    height: 42px;
    display: flex;
    font-size: 22px;
}
ul#social_share a.fb {
    background: #3b5998;
}
ul#social_share a.wt {
    background: #25D366;
}
ul#social_share a.tw {
    background: #00acee;
}
 </style>
    
    <?php } ?>
<main class="login-page cong" >
   
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
<?php if($banner){ ?>
    <section class="banner" id="price">
        <div class="background-icons4">
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/>
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud2" alt="cloud"/>
        </div>
        <div class="container">
            <div class="row">
                 <div class="background-icons4">
                        <img src="<?php echo base_url('assets/') ?>img/icons/price1.svg" class="img-fluid price1" alt="price1" >
                    </div>
                <div class="col-md-6 text-center">
                    <div class="background-icons4">
                        <!--<img src="img/icons/price1.svg" class="img-fluid price1" alt="price1" >-->
                        <img src="<?php echo base_url('assets/') ?>img/icons/about1.svg" class="img-fluid price2" alt="price2">
                        <img src="<?php echo base_url('assets/') ?>img/ribbon.png" class="img-fluid ribbon1" alt="ribbon">
                        <img src="<?php echo base_url('assets/') ?>img/ribbon.png" class="img-fluid ribbon2" alt="ribbon">
                        <img src="<?php echo base_url('assets/') ?>img/ribbon.png" class="img-fluid ribbon3" alt="ribbon">
                        <img src="<?php echo base_url('assets/') ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
                    </div>
                  <img src="<?php echo base_url(@$banner->banner_img); ?> " class="img-fluid "/>
                </div>
                <div class="col-md-6 align-self-center text-center ">
                   <h1><?php echo @$banner->banner_heading; ?></h1>
                    <h6><?php echo @$banner->banner_description; ?></h6>
                   <p><?php echo @$banner->banner_description1; ?></p>
                </div>
            </div>	
        </div>
        
	<img src="<?php echo base_url('assets/') ?>img/cloud-white.png" class="img-fluid banner-cloud"/>
    </section>
<?php } ?>


   
<?php if($description){ ?>
<section class="about" id="about">
	<div class="background-icons1">
		<img src="<?php echo base_url('assets/') ?>img/icons/price3.svg" class="img-fluid about1" alt="about1" >
		<img src="<?php echo base_url('assets/') ?>img/icons/price1.svg" class="img-fluid about2" alt="about2">
	</div>
	<div class="container ">
		<div class="row">
			<div class="col-lg-12 text-center">
				<p><?php echo @$description->description; ?></p>
			</div>
		</div>	
	</div>
</section>
<?php } ?>
<?php 
 if(isset($this->session->userdata['userdetail'])){
if($all_free_template && $check_announcement < 1){ ?>
<section class="cong-temp-carousel text-center position-relative "  >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
                <h2>Templates</h2>
        		<div class=" owl-carousel owl-theme " id="cong-template">
        			<?php 
        			if(count($all_paid_due_date) >= 1){
                    if(is_array($all_free_template) || is_object($all_free_template)){
                        foreach ($all_free_template as $all_free_template) {
                            if(in_array($all_free_template->id,@$all_paid_due_date)){
                                 if(isset($this->session->userdata['userdetail'])){
                          $link = base_url('Users/announcement/'.encrypt_url($all_free_template->id));
                                 }else{
                                     $link = "#";
                                 }
                    ?>
                    <div class="item">
        				<a href="<?php echo $link; ?>">
        			        <div class="card-img">
        				        <img src="<?php echo base_url($all_free_template->img); ?>" class="img-fluid "/>	
        				    </div>
        				</a>   
        			</div>
                <?php } } } }else{ 
                 if(is_array($all_free_template) || is_object($all_free_template)){
                        foreach ($all_free_template as $all_free_template) {
                           
                                 if(isset($this->session->userdata['userdetail'])){
                                     
                            if($all_free_template->free_or_paid == 1){
                                    $class ="free_class";
                                      $link = base_url('Users/announcement/'.encrypt_url($all_free_template->id));
                                }elseif($all_free_template->free_or_paid == 2){
                                    $class ="paid_class";
                                     $link = "#";
                                }
                              
                          // $link = "#";
                                 }else{
                                     $link = "#";
                                 }
                    ?>
                    <div class="item <?php echo @$class; ?>">
        				<a href="<?php echo $link; ?>">
        			        <div class="card-img">
        				        <img src="<?php echo base_url($all_free_template->img); ?>" class="img-fluid "/>	
        				    </div>
        				</a>   
        			</div>
                
                <?php }} } ?>
        		     				
        		</div>
        		
				<!--<a href="#" class="btn btn-munchkin"><span>VIEW ALL</span></a>-->
			</div>
		</div>
	</div>
</section>
<?php } } ?>
<?php

 if(isset($this->session->userdata['userdetail'])){
if($package->p_id == "1" ){ ?>
<section class="price" id="price">  
<div class="background-icons4">
        <img src="<?php echo base_url('assets/'); ?>img/icons/price1.svg" class="img-fluid price1" alt="price1">
        <img src="<?php echo base_url('assets/'); ?>img/icons/price2.svg" class="img-fluid price2" alt="price2">
        <img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid price3" alt="price3">
    </div>
    <div class="container " >
        <h2 class="title" data-aos="fade-down">Pricing  </h2>
        <div class=" owl-carousel owl-theme " id="mob-package" data-aos="fade-left">
            <?php 
            if(is_array($all_pricing) || is_object($all_pricing)) {
                foreach ($all_pricing as $pricing) {
                    if($pricing->id !== "1"){
            $fetch_feature = $this->AdminModel->all_fetch('pricing_feature',array('status'=>1,'p_id'=>$pricing->id),"sort_order");
                    if($pricing->period == 1){
                        $y ="Y";
                    }else{
                        $y ="M";
                    }
            
                ?>
            <div class="item ">
                <div class="price-box">
                    <div class="price-top">
                        <h6><?php echo $pricing->name; ?></h6>
                        <ul>
                            <?php if(is_array($fetch_feature) || is_object($fetch_feature)){
                                foreach ($fetch_feature as $fetch_feature) {
                              ?>
                            <li><?php echo $fetch_feature->name; ?></li>
                            <?php        # code...
                                }
                            }
                            ?>
                            
                        </ul>
                    </div>
                    	<div class="price-bottom">
						
						<?php
						if($pricing->id == "1"){ ?>
						    	<p>Free Trial</p>
						    	<?php if(isset($this->session->userdata['userdetail'])){ ?>
                        	 <a href="<?php echo base_url('Users'); ?>" class="btn btn-munchkin"><span>TRY NOW</span></a>
                        	<?php } else{ ?>
				        <!-- <a href="<?php echo base_url('signup'); ?>" class="btn btn-munchkin"><span>TRY NOW</span></a>
				       -->
                       <a href="javascript:void(0)" data-p_price="<?php echo encrypt_url($pricing->price); ?>" data-p_id="<?php echo encrypt_url($pricing->id); ?>" data-p_name="<?php echo $pricing->name; ?>" class="btn btn-munchkin add_to_cart" ><span>BUY NOW</span> </a>
					    
                        <?php } ?>
						<?php }else{
						?>
						<p><?php echo $pricing->price; ?><span>/Y</span></p>
						<a href="javascript:void(0)" data-p_price="<?php echo encrypt_url($pricing->price); ?>" data-p_id="<?php echo encrypt_url($pricing->id); ?>" data-p_name="<?php echo $pricing->name; ?>" class="btn btn-munchkin add_to_cart" ><span>BUY NOW</span> </a>
					    
                        <?php } ?>
					</div>
                </div>
            </div>
        <?php } } } ?>
            
            

        </div>  
    </div>
</section>
<?php } } ?>

<?php 
//templete created and purchased any package && $check_order >= 1
    if($check_announcement >= 1 ){
?>
<section class="announcement-due">
    <div class="container">
        <div class="row">

			<div class="col-md-6 text-center">
			    <?php if($created_template->img){ ?>
			    <div class="ann-img">
                    <img src="<?php echo base_url($created_template->img); ?>" class="img-fluid " alt="template">
			    </div>
			    <?php } ?>
			</div>
			<div class="col-md-6 align-self-center text-center">
			    <?php if($announement_data){ ?>
			    <div class="ann-title">
			        <h2><?php echo @$announement_data->heading1?$announement_data->heading1:''; ?></h2>
                    <label>
                    <img src="<?php echo base_url('assets/'); ?>img/icons/mic.svg" class="img-fluid " alt="template"><?php echo @$announement_data->heading2?$announement_data->heading2:''; ?> 
                    <img src="<?php echo base_url('assets/'); ?>img/icons/mic.svg" class="img-fluid sec-mic" alt="template"></label>
                    <p><?php echo @$announement_data->short_description?@$announement_data->short_description:''; ?></p>
    		    </div>
    		    <?php } 
    		     if(isset($this->session->userdata['userdetail'])){ ?>
    		    <button type="button" class="btn btn-munchkin mt-4" id="btn_share"><span>SHARE</span></button>
    		    <ul id="social_share" style="display:none;">
                    <li>
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url($genrate_link); ?>" target="_blank" class="fb"><i class="fab fa-facebook"></i></a>
                    </li>
                   
                       <li>
                        <a href="https://api.whatsapp.com/send?phone=&text=<?php echo base_url($genrate_link); ?>" target="_blank" class="wt"><i class="fab fa-whatsapp"></i></a>
                    </li>
                   
                       <li>
                        <a href="http://twitter.com/share?url=<?php echo base_url($genrate_link); ?>&text=My Munchkin &hashtags=My_Munchkin" target="_blank" class="tw"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
                 <?php } ?>
                <!--<div class="form-group">-->
                <!--    <label>Parents</label>-->
                <!--    <input type="text" class="form-control" value="Mr & Mrs Malik" readonly>-->
                <!-- </div>-->
                 <?php if($created_template->temp_id == 2){ ?>
                 <div class="form-group">
                    <label>Due Date</label>
                    <input type="text" class="form-control" value="<?php echo $created_template->t_date; ?>" readonly>
                 </div>
                 <?php } ?>
			</div>
			
		</div>	
    </div>
</section>
<?php } ?>



<?php if($count_milestone >= 1){ ?>
<section class="template-tab text-center position-relative " id="create-second-icons" >
<div class="background-icons3">
		<img src="<?php echo base_url('assets/') ?>img/icons/price1.svg" class="img-fluid faq" alt="mic">
		<img src="<?php echo base_url('assets/') ?>img/icons/how1.svg" class="img-fluid faq2" alt="mic" >
	</div>
    <?php 
 if(isset($this->session->userdata['userdetail'])){ ?>
	<div class="container explore " >
		<div class="row">

			<div class="col-lg-12 ">
			    
                <h2>Milestones</h2>
                <div class=" text-left cong-tabs" >
                          <div class="row">
                            <div class="col-lg-2 col-md-4">
                                 <div class="nav flex-column nav-pills templates-pill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                     <?php 
                                     if(is_array($all_milestone_category) || is_object($all_milestone_category)){
                                            $i =1;
                                        foreach($all_milestone_category as $a_m_c){
                                        $count_mile_images = $this->AdminModel->AllCount("milestone",array('status'=>1,'m_id'=>$a_m_c->id,'u_id'=>@$user_id));
                                                
                                            
                                            if($i == 1){
                                                $clas = "active";
                                                $area_selected ="true";
                                            }else{
                                                $clas = "";
                                                 $area_selected ="false";
                                            }
                                            $i++;
                                            if($count_mile_images >= 1){
                                     ?>
                                  <a class="nav-link <?php echo @$clas; ?>" id="v-pills-categories-tab<?php echo $a_m_c->id; ?>" data-toggle="pill" href="#v-pills-categories<?php echo $a_m_c->id; ?>" role="tab" aria-controls="v-pills-categories" aria-selected="<?php echo @$area_selected; ?>"><?php echo $a_m_c->name; ?></a>
                                  <?php } } } ?>
                                  
                                  <?php if($check_count_milestone >= 1){ ?>
				                <a  class="btn btn-munchkin preview" id="album-preview"><span>View Baby Book</span></a>
				               <?php } ?>
				               
                            </div>
                            
                            </div>
                       
                            <div class="col-lg-10 col-md-8">
                                
                            <div class="tab-content" id="v-pills-tabContent">
                                 <?php 
                                     if(is_array($all_milestone_category) || is_object($all_milestone_category)){
                                            $ii =1;
                                        foreach($all_milestone_category as $a_m_c_i){
                                            if($ii == 1){
                                                $active_clas = "show active";
                                               
                                            }else{
                                                $active_clas = "";
                                                 
                                            }
                                            $ii++;
                                            $fetch_user_milestone = $this->AdminModel->all_fetch("milestone",array('status'=>1,'m_id'=>$a_m_c_i->id,'u_id'=>@$user_id));
                                            
                                     ?>
                              <div class="tab-pane fade <?php echo $active_clas; ?>" id="v-pills-categories<?php echo $a_m_c_i->id; ?>" role="tabpanel" aria-labelledby="v-pills-categories-tab<?php echo $a_m_c_i->id; ?>">
                                    
                                    <ul class="templates-card"> 
                                    <?php 
                                        if(is_array($fetch_user_milestone) || is_object($fetch_user_milestone)){
                                            foreach($fetch_user_milestone as $fetch_user_milestone){
                                                
                                    ?>
                                        <li>
                                            <a >
                                                <div class="card-img">
                                				    <img src="<?php echo base_url($fetch_user_milestone->img); ?>" class="img-fluid "/>  
                                				</div>
                                				    <?php echo $fetch_user_milestone->heading; ?> <span><?php echo $a_m_c_i->name; ?></span> </a> 
                                        </li>
                                        <?php 
                                            }
                                        }
                                        ?>
                                        
                                    </ul>
                                    
                               
                            			
                              </div>
                              <?php } } ?>
                              <!--<div class="tab-pane fade" id="v-pills-born" role="tabpanel" aria-labelledby="v-pills-born-tab">...</div>-->
                              <!--<div class="tab-pane fade" id="v-pills-girl" role="tabpanel" aria-labelledby="v-pills-girl-tab">...</div>-->
                              <!--<div class="tab-pane fade" id="v-pills-announcement" role="tabpanel" aria-labelledby="v-pills-announcement-tab">...</div>-->
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
			</div>
			
		</div>	
		</div>	
		<?php } ?>
		
	<div class="container  album-newsection d-none" >
		<div class="row">

                       
                    		<div class="col-lg-12 text-center album-preview show">
                            
                    <br>
              
                    <div class="wrapper1">
                  <div class="aspect">
                    <div class="aspect-inner">
                      <div class="flipbook" id="flipbook3">
                          <div class="page">
                              <img src=<?php echo base_url("assets/Milestones.png")?>  alt="" />
                            <p class="baby_name"><?php  $arr = explode(" ",$userDetails->child_name);
                                foreach($arr as $key=> $value){
                                    echo $value."<br>";
                                }
                            ?></p>  
                            </div>
                          <?php 
                          if(is_array($all_milestone_category) || is_object($all_milestone_category)){
                              $i = 0;
                              foreach($all_milestone_category as $flip_m_c){
                                  $i++;
                                  $fetch_flip_cate_image = $this->AdminModel->all_fetch("digital_album",array('u_id'=>$user_id,'status'=>1,'m_id'=>$flip_m_c->id),"sort_order");
                                   if(count($fetch_flip_cate_image) >= 1){
                                   if($flip_m_c->img){
                                  ?>
                                  <div class="page"><img src="<?php echo base_url($flip_m_c->img); ?>"  alt="" /></div>
                                  <?php 
                                   }
                                  foreach($fetch_flip_cate_image as $f_f_c_m){
                                      
                         
                          ?>
                        
                        <div class="page"><img src="<?php echo base_url($f_f_c_m->img); ?>"  alt="" /></div>
                        <?php          } 
                        
                            if($i == 1){
                                if(count($fetch_flip_cate_image)%2 == 0){
                                     echo '<div class="page"  ><img src="'.base_url("assets/Milestones.png").'"  alt="" 1/></div>';
                                }
                            }else{
                                if(count($fetch_flip_cate_image)%2 == 0){
                                     echo '<div class="page" ><img src="'.base_url("assets/Milestones.png").'"  alt="" 2/></div>';
                                }
                            }
                        
                        ?>
                                   
                                   
                                  <?php }
                              }
                          }
                          
                          ?>
                       
                        <div class="page"><img src="<?php echo base_url('assets/img/last-mill.png'); ?>"  alt="" /></div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <div class="flip-control">
                    <a href="#" id="prev3"> <img src="<?php echo base_url('assets/img/prev.png'); ?>"> </a>
                    <a href="#" id="next3"> <img src="<?php echo base_url('assets/img/next.png'); ?>"> </a>
                </div>
                    
                    </div>

		</div>	
		</div>	
		
		
</section>

<section class="mb-5 pb-5">
<?php include('user_digitalboook.php'); ?>
    <?php 
 if(isset($this->session->userdata['userdetail'])){ ?>
<div class="mt-5 pt-5 text-center">
     <a class="btn btn-munchkin preview" id="album-preview" href="<?php echo base_url('Users/digital-album'); ?>"><span>Edit Digital Book</span></a>
</div>
	<?php } ?>
</section>


<?php }else{ ?>


<?php include("footer-ann.php") ?>
<?php } ?>

<section class="comment " id="how" >
    <div class="background-icons2">
		<img src="<?php echo base_url('assets/') ?>img/icons/blue-ballon.svg" class="img-fluid price1" alt="price1">
		<img src="<?php echo base_url('assets/') ?>img/icons/balloon.svg" class="img-fluid price2" alt="price2" >
		<img src="<?php echo base_url('assets/') ?>img/icons/balloon.svg" class="img-fluid price4" alt="price2" >
		<img src="<?php echo base_url('assets/') ?>img/icons/blue-ballon.svg" class="img-fluid price3" alt="price3" >
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
		        <h2>Share Messages</h2>
		        <form id="date_enquiry" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col">
                              <input type="hidden" name="type" value="<?php echo encrypt_url(1); ?>">
                        <input type="hidden" name="u_id" value="<?php echo encrypt_url($fetch_theme->u_id); ?>">
                            <input type="text" name="name" class="form-control" placeholder="Name*">
                        </div>
                        <div class="col">
                            <input type="email" name="email" class="form-control" placeholder="Email*">
                        </div>
                        <div class="col ">
                            <input type="file" id="img" name="img" class="form-control file-input" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="comment" rows="3" id="my_text" placeholder="Comment..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-munchkin"><span>POST COMMENT</span></button>
                </form>
                
               
                <div class="comment-post">
                    <ul>
                        <?php 
                        if(is_array($all_comments) || is_object($all_comments)){
                            foreach($all_comments as $all_comment){
                           $last_id = $all_comment->id;     
                        ?>
                        <li id="<?php echo @$all_comment->id; ?>">
                            <div class="flip-card-inner ">
                                <div class="flip-card-front">
                                    <?php if($all_comment->img){ ?>
                                    <img src="<?php echo base_url(@$all_comment->img); ?>" class="img-fluid " alt="template">
                                    <?php } else{ ?>
                                     <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-fluid " alt="template">
                                    <?php } ?>
                                    <p><?php echo @$all_comment->name; ?></p>
                                </div>
                                <div class="flip-card-back">
                                  <p><?php echo @$all_comment->comment; ?></p>
                                </div>  
                            </div>
                        </li>
                        <?php } }
                       
                         ?>
                        <li>
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-fluid " alt="template">
                                    <p>MyMunchkin</p>
                                </div>
                                <div class="flip-card-back">
                                  <p>Congratulations</p>
                                </div>  
                            </div>
                        </li>
                       
                    </ul>
                       
                    <ul id="show_load_more_data">
                        
                        
                    </ul>
                     <div id ="show_loading_img" style="display:none;">
                            <img src="<?php echo base_url('assets/loding.gif'); ?>">
                        </div>
                        <?php 
                             
                        if($count_comment >= 8){ ?>
				<a href="javascript:void(0)" class="btn btn-munchkin" id="load_more" data-url="<?php echo $this->uri->segment(2); ?>" data-offset="<?php echo count($all_comments); ?>"><span>LOAD MORE</span></a>
				<input type="hidden" id="offset" value="<?php  echo count($all_comments); ?>">
				<?php } ?>
                </div>
                
		    </div>
		</div>
	</div>
</section>
</main>


<?php include('include/footer.php') ?>
	 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js" integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA==" crossorigin="anonymous"></script>

<script type="text/javascript">
	$("#my_text").emojioneArea({
    pickerPosition:"center"
})

$(document).on("click","#btn_share",function(){
    $("#social_share").show();
})

</script>
<script src="<?php echo base_url('assets/user.js') ?>"></script>
<script src="<?php echo base_url('assets/pcustom.js') ?>"></script>
<script>

//     var flipbookEL = document.getElementById('flipbook');
    
//     window.addEventListener('resize', function (e) {
//     	flipbookEL.style.width = '';
//       flipbookEL.style.height = '';
//       $(flipbookEL).turn('size', flipbookEL.clientWidth, flipbookEL.clientHeight);
//     });
    
//     $(flipbookEL).turn({
//         autoCenter: true
//     });  
    
//     $("#prev").click(function(e){
//     e.preventDefault();
//     $("#flipbook").turn("previous");
// });


// $("#my_text").emojioneArea({
//     pickerPosition:"right"
// })



// $("#next").click(function(e){
//     e.preventDefault();
// $("#flipbook").turn("next");
// });

$("#album-preview").click(function() {
    $('html,body').animate({
        scrollTop: $(".album-preview").offset().top},
        'slow');
});


var flipbookEL = document.getElementById('flipbook3');
    
    window.addEventListener('resize', function (e) {
    	flipbookEL.style.width = '';
      flipbookEL.style.height = '';
      $(flipbookEL).turn('size', flipbookEL.clientWidth, flipbookEL.clientHeight);
    });
    
    $(flipbookEL).turn({
        autoCenter: true
    });  
    
    $("#prev3").click(function(e){
    e.preventDefault();
    $("#flipbook3").turn("previous");
});
$("#next3").click(function(e){
    e.preventDefault();
$("#flipbook3").turn("next");
});


</script>
