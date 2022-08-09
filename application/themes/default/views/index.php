<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
<?php if($fetch_banner){ ?>
<section class="banner home" id="banner" >

	<div class="container">
		<div class="row">
			<div class="col-lg-7 align-self-center banner-content col-md-7" data-aos="fade-down">
				<div class="background-icons">
					<img src="<?php echo base_url('assets/'); ?>img/icons/ballon.svg" class="img-fluid ballon" alt="ballon">
					<img src="<?php echo base_url('assets/'); ?>img/icons/cloud.svg" class="img-fluid cloud" alt="cloud">
				</div>
                <p> <?php echo $fetch_banner->heading1; ?> <span class="banner-title" ><?php echo $fetch_banner->heading2; ?></span></p>
                <h1> <?php echo $fetch_banner->heading3; ?></h1>
                <?php if($fetch_banner->btn_name){ ?>
				<a  class="btn btn-munchkin" ><span>
				<!--<a href="<?php echo $fetch_banner->btn_link; ?>" class="btn btn-munchkin" ><span>-->
					<?php echo $fetch_banner->btn_name; ?></span></a>
					<?php } ?>

				<?php if($fetch_banner->btn_name2){ ?>

				<a class="btn btn-munchkin" ><span>
					<?php echo $fetch_banner->btn_name2; ?> </span></a>
				<?php } ?>
				<?php if($fetch_banner->btn_name3){ ?>
				<a class="btn btn-munchkin" ><span>
					<?php echo $fetch_banner->btn_name3; ?></span></a>
			<?php } ?>
			</div>
			<div class="col-lg-5 col-md-5">
				<div class="background-icons">
					<img src="<?php echo base_url('assets/'); ?>img/icons/balloon.svg" class="img-fluid ballon" alt="ballon">
					<img src="<?php echo base_url('assets/'); ?>img/icons/balloon.svg" class="img-fluid ballon2" alt="ballon">
					<img src="<?php echo base_url('assets/'); ?>img/icons/cloud.svg" class="img-fluid cloud" alt="cloud">
					<img src="<?php echo base_url('assets/'); ?>img/bird.png" class="img-fluid bird" alt="bird">
					<img src="<?php echo base_url('assets/'); ?>img/bird.png" class="img-fluid bird2" alt="bird">
				</div>
				<img src="<?php echo base_url($fetch_banner->img); ?>" class="img-fluid " data-aos="fade-right"/>
			</div>
		</div>	
	</div>

	<img src="<?php echo base_url('assets/'); ?>img/cloud-white.png" class="img-fluid banner-cloud"/>
</section>
<?php } ?>
<?php 
	if($home_about){
?>
<section class="about" id="about">
	<div class="background-icons1">
		<img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid about1" alt="about1">
		<img src="<?php echo base_url('assets/'); ?>img/icons/about2.svg" class="img-fluid about2" alt="about2">
	</div>
	<div class="container " >
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<img src="<?php echo base_url($home_about->img); ?>" class="img-fluid "/>
			</div>
			<div class="col-lg-6 align-self-center col-md-6">
				<h2 class="title" data-aos="fade-down" ><?php echo $home_about->heading; ?></h2>
				<h5 data-aos="fade-down" ><?php echo $home_about->short_description; ?> </h5>
				<p data-aos="fade-up" ><?php echo $home_about->description; ?></p>
				<a href="<?php echo $home_about->btn_link; ?>" class="btn btn-munchkin " ><span> <?php echo $home_about->btn_name; ?> </span></a>
			</div>
		</div>	
	</div>
</section>
<?php } ?>

<?php if($fetch_heading1){ ?>
<section class="create">	
	<div class="container " >
		<div class="row">
			<div class="col-lg-5 col-md-6">
				<h2 class="title" data-aos="fade-down"><?php echo @$fetch_heading1->heading1; ?> <span><?php echo @$fetch_heading1->heading2; ?></span> <?php echo @$fetch_heading1->heading3; ?>	</h2>
				<p data-aos="fade-up"><?php echo @$fetch_heading1->short_description; ?>  </p>
				<?php if(@$fetch_heading1->btn_name){ ?>
				<a href="<?php echo @$fetch_heading1->btn_link; ?>" class="btn btn-munchkin d-none" ><span> <?php echo @$fetch_heading1->btn_name; ?></span></a>
					<?php } ?>
					<?php if(@$fetch_heading1->btn_name2){ ?>
					<a href="<?php echo @$fetch_heading1->btn_link2; ?>" class="btn btn-munchkin2 " ><span> <?php echo @$fetch_heading1->btn_name2; ?></span></a>
				<?php } ?>
			</div>
			<div class="col-lg-7 col-md-6">
				<img src="<?php echo base_url(@$fetch_heading1->img); ?>" class="img-fluid book"/>
				<div class="background-icons">
					<img src="<?php echo base_url('assets/'); ?>img/leave1.png" class="img-fluid leave1" alt="leave1">
					<img src="<?php echo base_url('assets/'); ?>img/leave2.png" class="img-fluid leave2" alt="leave2">
				</div>
				
			</div>
		</div>	
	</div>
</section>
<?php } ?>

<?php if($fetch_how_work){ 
	$y_link = substr($fetch_how_work->you_tube_link, -11);

	?>
<section class="how" id="how">
	<div class="background-icons2">
		<img src="<?php echo base_url('assets/'); ?>img/icons/how1.svg" class="img-fluid how1" alt="how1">
		<img src="<?php echo base_url('assets/'); ?>img/icons/how2.svg" class="img-fluid how2" alt="how2">
	</div>
	<div class="container " >
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<img src="<?php echo base_url($fetch_how_work->img); ?>" class="img-fluid video-img "/>
				<!-- Button trigger modal -->
				<button type="button" class="modal-btn" data-toggle="modal" data-target="#howto">
					<img src="<?php echo base_url('assets/'); ?>img/icons/video-btn.svg" class="img-fluid "/>
				</button>

				<!-- Modal -->
				<div class="modal fade" id="howto" tabindex="-1" role="dialog" aria-labelledby="howtoTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body p-0">
							    <?php if($fetch_how_work->you_tube_link){ ?>
							<iframe width="100%" height="450" src="https://www.youtube.com/embed/<?php echo $y_link; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<?php } else{ ?>
							<img src="<?php echo base_url('assets/coming.jpg'); ?>" class="img-fluid w-100">
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 align-self-center col-md-4" data-aos="fade-down">
				<h2 class="title" ><?php echo @$fetch_how_work->heading; ?>	</h2>
				<p><?php echo @$fetch_how_work->short_description; ?> </p>
				<a href="#" class="btn btn-munchkin " data-toggle="modal" data-target="#howto"><i class="fas fa-play"></i><span> <?php echo @$fetch_how_work->btn_name; ?> </span></a>
			</div>
		</div>	
	</div>
</section>
<?php } ?>

<?php if($fetch_heading2){ ?>
<section class="create-second" id="create-second-icons">	
	<div class="container " >
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="background-icons3">
					<img src="<?php echo base_url('assets/'); ?>img/icons/mic.svg" class="img-fluid mic" alt="mic">
				</div>
				<h2 class="title" data-aos="fade-down"><?php echo @$fetch_heading2->heading1; ?> <span><?php echo @$fetch_heading2->heading2; ?></span><br> <?php echo html_entity_decode(@$fetch_heading2->heading3); ?>	</h2>
				<p data-aos="fade-up"><?php echo @$fetch_heading2->short_description; ?> </p>
				<?php if(@$fetch_heading2->btn_name){ ?>
				<a href="<?php echo @$fetch_heading2->btn_link; ?>" class="btn btn-munchkin " ><span> <?php echo @$fetch_heading2->btn_name; ?></span></a>
					<?php } ?>
					<?php if(@$fetch_heading2->btn_name2){ ?>
					<a href="<?php echo @$fetch_heading2->btn_link2; ?>" class="btn btn-munchkin2 " ><span> <?php echo @$fetch_heading2->btn_name2; ?></span></a>
				<?php } ?>
			</div>
			<div class="col-lg-6 col-md-6 text-center">
				<div class="background-icons3">
					<img src="<?php echo base_url('assets/'); ?>img/ribbon.png" class="img-fluid ribbon" alt="ribbon">
					<img src="<?php echo base_url('assets/'); ?>img/ribbon.png" class="img-fluid ribbon1" alt="ribbon">
					<img src="<?php echo base_url('assets/'); ?>img/icons/blue-ballon.svg" class="img-fluid blue-ballon" alt="blue-ballon">
					<img src="<?php echo base_url('assets/'); ?>img/icons/blue-ballon.svg" class="img-fluid blue-ballon1" alt="blue-ballon">
					<img src="<?php echo base_url('assets/'); ?>img/icons/like.svg" class="img-fluid like" alt="like">
					<img src="<?php echo base_url('assets/'); ?>img/icons/heart.svg" class="img-fluid heart" alt="heart">
				</div>
				<div class="create-img">
					<img src="<?php echo base_url($fetch_heading2->img); ?>" class="img-fluid w-50"/>
				</div>
			</div>
		</div>
	</div>
	<?php if($all_template){ ?>
	<div class="create-second-bottom " >
		<h2 class="title my-4 " data-aos="fade-down">Our Collection of Cute Templates	</h2>
		<div class=" owl-carousel owl-theme " id="create-second" data-aos="fade-right">
			<?php if(is_array($all_template) || is_object($all_template)){
				foreach ($all_template as $all_template) {
			?>
			<div class="item">
				<img src="<?php echo base_url($all_template->img); ?>" class="img-fluid "/>
			</div>
			<?php 	}
			} ?>
			
		</div>
	</div>
<?php } ?>
</section>

<?php } ?>
<section class="price" id="price">	
<div class="background-icons4">
		<img src="<?php echo base_url('assets/'); ?>img/icons/price1.svg" class="img-fluid price1" alt="price1">
		<img src="<?php echo base_url('assets/'); ?>img/icons/price2.svg" class="img-fluid price2" alt="price2">
		<img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid price3" alt="price3">
	</div>
	<div class="container " >
		<h2 class="title" data-aos="fade-down">Pricing	</h2>
		<div class=" owl-carousel owl-theme " id="mob-package" data-aos="fade-left">
			<?php 
			if(is_array($all_pricing) || is_object($all_pricing)) {
				foreach ($all_pricing as $pricing) {
			$fetch_feature = $this->AdminModel->all_fetch('pricing_feature',array('status'=>1,'p_id'=>$pricing->id),"sort_order");
				
			
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
				// 		 if(@$check_package >= 1 && $current_date < $expiry_date){ 
				//       }else{
						if($pricing->id == "1"){ ?>
						    	<p>Free Trial</p>
						    	<?php if(isset($this->session->userdata['userdetail'])){ ?>
                        	 <a href="<?php echo base_url('Users'); ?>" class="btn btn-munchkin"><span>TRY NOW</span></a>
                        	<?php } else{ ?>
				        <!--<a href="<?php echo base_url('signup'); ?>" class="btn btn-munchkin"><span>TRY NOW</span></a>-->
				       <a href="javascript:void(0)" data-p_price="<?php echo encrypt_url($pricing->price); ?>" data-p_id="<?php echo encrypt_url($pricing->id); ?>" data-p_name="<?php echo $pricing->name; ?>" class="btn btn-munchkin add_to_cart" ><span>TRY NOW</span> </a>
					    
				       <?php } ?>
						<?php }else{
						    
						?>
						<p><?php echo $pricing->price; ?><span>/Y</span></p>
						<a href="javascript:void(0)" data-p_price="<?php echo encrypt_url($pricing->price); ?>" data-p_id="<?php echo encrypt_url($pricing->id); ?>" data-p_name="<?php echo $pricing->name; ?>" class="btn btn-munchkin add_to_cart" ><span>BUY NOW</span> </a>
					    
					    <?php }
					    
					    //} 
					    ?>
					</div>
				</div>
			</div>
		<?php } } ?>
			
			

		</div>	
	</div>
</section>


<section class="customer" id="customer">
	<div class="background-icons5">
		<img src="<?php echo base_url('assets/'); ?>img/icons/how1.svg" class="img-fluid customer1" alt="how1">
	</div>	
	<div class="container " >
		<h2 class="title" data-aos="fade-down">Our Delighted Customers	</h2>
		<div class=" owl-carousel owl-theme " id="course-banner" data-aos="fade-left">
				<?php 
				if(is_array($all_testimonial) || is_object($all_testimonial)){
					foreach ($all_testimonial as $testimonial) {
				
				?>
			<div class="item">
				<div class="customer-rating">
					<?php for ($i=1; $i <= $testimonial->stars; $i++) { 
					 ?>
					<i class="fas fa-star"></i>
				<?php } ?>
					
				</div>
				<div class="customer-box">
					<p><?php echo $testimonial->description; ?></p>
				</div>
				<div class="customer-title">
					<p><?php echo $testimonial->name; ?></p>
				</div>
			</div>
		<?php } } ?>
		

		</div>	
	</div>
</section>

<?php if($all_blog){ ?>
<section class="blog" id="blog">	
	<div class="background-icons6">
		<img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid blog1" alt="blog1">
		<img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid blog2" alt="blog2">
	</div>
	<div class="container " >
		<h2 class="title" data-aos="fade-down">Blogs	</h2>
		<div class=" owl-carousel owl-theme " id="blog-box" data-aos="fade-right">
			<?php if(is_array($all_blog) || is_object($all_blog)){
				foreach ($all_blog as $blog) {
			 ?>	
			<div class="item">
				<div class="blog-box">
					<div class="blog-top">
						<img src="<?php echo base_url($blog->thumbnail_img); ?>" class="img-fluid "/>
					</div>
					<div class="blog-bottom">
						<p><?php echo $blog->heading; ?> </p>
						<a href="<?php echo base_url("blog-details/".$blog->link); ?>"><i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		<?php } } ?>
			
		</div>	
		
			<a href="<?php echo base_url('blogs'); ?>" class="btn btn-munchkin m-auto" > <span> VIEW MORE</span> </a>
	</div>
</section>
<?php } ?>






<?php	if(!isset($this->session->userdata['userdetail'])){  ?>
<!-- Modal -->
<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="register_modal" aria-hidden="true" style="z-index: 99999999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-center">
      <div class="modal-header">  
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title w-100 font-weight-bolder">Subscribe Now</h5>
      </div>
      <div class="modal-body">
        <p> On your way to parenthood or already a parent, subscribe to our newsletter for tips and hints on making your journey smoother .</p><br>
        <form id="subscriber_from" method="POST">
            <div class="form-row">
                <div class="col">
                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
            </div>
            <div class="form-row text-left mt-4">
                <div class="col">
                    <input type="radio" id="parenthood" name="which" value="On your way to parenthood">
                    <label for="parenthood">On your way to parenthood</label><br>
                    <input type="radio" id="Already" name="which" value="Already a parent">
                    <label for="Already">Already a parent</label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-munchkin"><span>Submit</span></button>
        </form>
    </div>
    </div>
  </div>
</div>
<?php } ?>


<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/pcustom.js'); ?>"></script>

<script>
$(window).on('load', function() {
	setTimeout(function(){
		$('#register_modal').modal('show');
             },30000)
    
});

</script>
