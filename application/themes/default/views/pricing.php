	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
<main class="pricing-page">

<section class="banner" id="banner" style="background-image: url( <?php echo base_url($banner->banner_img); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-5  text-center m-auto">
                <h1><?php echo $banner->banner_heading; ?></h1>
			</div>
		</div>	 
	</div> 
	<img src="<?php echo base_url('assets/'); ?>img/about-wave.png" class="img-fluid banner-cloud"/>
</section>


<section class="pricing-tab text-center position-relative" id="price" >
    <div class="background-icons4">
        <img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid price1" alt="price1" >
        <img src="<?php echo base_url('assets/'); ?>img/icons/about2.svg" class="img-fluid price2" alt="price2" >
        <img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
        <img src="<?php echo base_url('assets/'); ?>img/icons/price2.svg" class="img-fluid price4" alt="price3" >
    </div>	
	<div class="container " >
		<div class="row">

			<div class="col-lg-12 ">
				<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
                  <?php if(is_array($all_pricing) || is_object($all_pricing)){
                    $i = 1;
                    foreach ($all_pricing as $pricing) {
                        if($i == 1){
                            $cls ="active";

                        }else{
                            $cls ="";

                        }
                        $i++;
                        if($pricing->period == 1){
                            $y ="Year";
                        }else{
                            $y ="Month";

                        }
                    ?>
                  <li class="nav-item">
                    <a class="nav-link <?php echo $cls; ?>" id="pills-basic-tab<?php echo $pricing->id; ?>" data-toggle="pill" href="#pills-basic<?php echo $pricing->id; ?>" role="tab" aria-controls="pills-basic<?php echo $pricing->id; ?>" aria-selected="true">
                        <?php echo $pricing->name; ?> <span>
                            <?php if($pricing->id == "1"){ 
                                echo "Free Trial";
                            }else{
                            ?>
                            ₹ <?php echo $pricing->price; ?> / <?php echo $y; ?>
                            <?php } ?>
                            </span>
                    </a>
                  </li>
                  <?php      
                    }
                  }
                  ?>
                
                </ul>
                <div class="tab-content" id="pills-tabContent">
                     <?php if(is_array($all_pricing) || is_object($all_pricing)){
                    $ii = 1;
                    foreach ($all_pricing as $d_pricing) {
                        $fetch_feature = $this->AdminModel->all_fetch('pricing_feature',array('status'=>1,'p_id'=>$d_pricing->id),"sort_order");
                        if($ii == 1){
                            $cls_name ="show active";

                        }else{
                            $cls_name ="";

                        }
                        $ii++;

                    ?>
                    <div class="tab-pane fade <?php echo $cls_name; ?>" id="pills-basic<?php echo $d_pricing->id; ?>" role="tabpanel" aria-labelledby="pills-basic-tab<?php echo $d_pricing->id; ?>">
                        <ul>
                            <?php if(is_array($fetch_feature) || is_object($fetch_feature)){
                                foreach ($fetch_feature as $fetch_feature) {
                              ?>
                            <li><i class="fas fa-check"></i><?php echo html_entity_decode($fetch_feature->name); ?></li>
                            <?php        # code...
                                }
                            }
                            ?>
                           
                        </ul>  
                         <?php 
                         if(@$check_package >= 1 && $current_date < $expiry_date){ 
				            }else{
                         if($d_pricing->id == "1" ){ ?>
                      
                        	<?php if(isset($this->session->userdata['userdetail']) ){ 
                        	    if( $current_date < $expiry_date){
                        	?>
                        	 <!-- <h3 class="days-title">Free Trial (2 Days)</h3>-->
                        	 <!--<a href="<?php echo base_url('Users'); ?>" class="btn btn-munchkin"><span>TRY NOW</span></a>-->
                        	<?php } } else{ ?>
                        	  <h3 class="days-title">Free Trial (2 Days)</h3>
				        <!-- <a href="<?php echo base_url('signup'); ?>" class="btn btn-munchkin"><span>TRY NOW</span></a> -->
                        <a href="javascript:void(0)" data-p_price="<?php echo encrypt_url($d_pricing->price); ?>" data-p_id="<?php echo encrypt_url($d_pricing->id); ?>" data-p_name="<?php echo $d_pricing->name; ?>" class="btn btn-munchkin add_to_cart" ><span>TRY NOW</span> </a>
					    
                        <?php } ?>
				       
				       <?php } ?>
				       <?php if($d_pricing->id !== "1"){ 
				       
				       ?>
				       
				        <a href="javascript:void(0)" data-p_price="<?php echo encrypt_url($d_pricing->price); ?>" data-p_id="<?php echo encrypt_url($d_pricing->id); ?>" data-p_name="<?php echo $d_pricing->name; ?>" class="btn btn-munchkin add_to_cart" ><span>BUY NOW</span> </a>
					    <?php } } ?>
                    </div>
                     <?php      
                    }
                  }
                  ?>
                  
                 
                </div>
			</div>
			
		</div>	
	</div>
</section>


</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/pcustom.js'); ?>"></script>