<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 

<main class="about-page">
	<?php 
	if($fetch_about_banner){
	?>
<section class="banner" id="banner" >
	<div class="container">
		<div class="row">
			<div class="col-lg-5 align-self-center col-md-5">
                <h1><?php echo $fetch_about_banner->name; ?></h1>
                <p><?php echo $fetch_about_banner->short_description; ?></p>
			</div>
			<div class="col-lg-7 col-md-7">
				<img src="<?php echo base_url($fetch_about_banner->img); ?> " class="img-fluid "/>
				<img src="<?php echo base_url($fetch_about_banner->img1); ?>" class="img-fluid "/>
			</div>
		</div>	
	</div>

	<img src="<?php echo base_url('assets/'); ?>img/about-wave.png" class="img-fluid banner-cloud"/>
</section>

<section class="about" id="about">
	<div class="background-icons1">
		<img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid about1" alt="about1">
		<img src="<?php echo base_url('assets/'); ?>img/icons/about2.svg" class="img-fluid about2" alt="about2">
	</div>
	<div class="container " >
		<div class="row">
			<div class="col-lg-12 text-center">
				<?php echo $fetch_about_banner->description; ?>
			</div>
		</div>	
	</div>
</section>

<?php } ?>


<section class="mymunch_about py-4">
<div class="container ">
		<div class="row">
			<div class="col-lg-5">
				<img src="<?php echo base_url($fetch_about_banner->story_img); ?>" class="img-fluid ">
			</div>
			<div class="col-lg-7 align-self-center pl-5">
				<h2 class="title aos-init aos-animate" data-aos="fade-down"><?php echo $fetch_about_banner->story_heading; ?></h2>
				<p data-aos="fade-up" class="aos-init aos-animate"><?php echo $fetch_about_banner->our_thought; ?></p>
			</div>
		</div>	
	</div>
	
</section>

<section class="why" id="how" >
    <div class="background-icons2">
		<img src="<?php echo base_url('assets/'); ?>img/icons/price2.svg" class="img-fluid why1" alt="how1" >
		<img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid why2" alt="how2">
	</div>	
    <h2 class="title text-center"> Why Mymunchkin ?</h2>
    <div class="container " >
        <div class="">
        	<?php 
        	if(is_array($all_whymunchkin) || is_object($all_whymunchkin)){
        		foreach ($all_whymunchkin as $all_whymunchkin) {
        			
        	?>
            <div class="col-lg-6 col-md-8 col-12">
                <div class="why-img">
                    <img src="<?php echo base_url($all_whymunchkin->img); ?>" class="img-fluid " alt="why">
                </div>
                <div class="why-content">
                    <p><?php echo $all_whymunchkin->description; ?> </p>
                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        <?php } } ?>
            
           
		</div>	
	</div>
</section>



<section class="customer" id="customer">	
<div class="background-icons5">
		<img src="<?php echo base_url('assets/'); ?>img/icons/how2.svg" class="img-fluid customer1" alt="how1" >
	</div>
	<div class="container " >
		<h2 class="title">Our Delighted Customers	</h2>
		<div class=" owl-carousel owl-theme " id="course-banner">
			<?php 
				if(is_array($all_testimonial) || is_object($all_testimonial)){
					foreach ($all_testimonial as $all_testimonial) {
				
			?>
			<div class="item">
				<div class="customer-rating">
					<?php for ($i=1; $i <=$all_testimonial->stars ; $i++) { 
						
					 ?>
					<i class="fas fa-star"></i>
				<?php } ?>
					
				</div>
				<div class="customer-box">
					<p><?php echo $all_testimonial->description; ?></p>
				</div>
				<div class="customer-title">
					<p><?php echo $all_testimonial->name; ?></p>
				</div>
			</div>
		<?php } } ?>
			
			

		</div>	
	</div>
</section>





<section class="faq" id="create-second-icons">	
    <div class="background-icons3">
		<img src="<?php echo base_url('assets/'); ?>img/icons/price1.svg" class="img-fluid faq" alt="mic">
		<img src="<?php echo base_url('assets/'); ?>img/icons/how1.svg" class="img-fluid faq2" alt="mic">
	</div>
	<div class="container " >
		<h2 class="title text-center">Frequently Asked Questions	</h2>
		<div class="row">

			<div class="col-lg-12 mt-3 ">
                <div id="accordion">
                	<?php if(is_array($all_faq) || is_object($all_faq)){
                		$i=1;
                		foreach ($all_faq as $all_faq) {
                			if($i == 1){
                				$show_class ="show";
                			}else{
                				$show_class ="";
                			}
                			$i++;
                	 ?>
                    <div class="card">
                        <div class="card-header" id="headingOne<?php echo $i; ?>">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i; ?>">
                            <?php echo $all_faq->name; ?>
                            </button>
                        </h5>
                        </div>
<!--<?php echo $show_class ?>-->
                        <div id="collapseOne<?php echo $i; ?>" class="collapse " aria-labelledby="headingOne<?php echo $i; ?>" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $all_faq->description; ?>
                        </div>
                        </div>
                    </div>
                <?php } } ?>
                    
                   
                </div>

            </div>
        </div>
    </div>
</section>




<section class="about-contact text-center" >	
		<h2 class="title">Contact</h2>
	<div class="container " >
		<div class="row">

			<div class="col-md-4 ">
				<div class="about-contact-box">
					<div class="about-contact-top">
						<img src="<?php echo base_url('assets/'); ?>img/icons/smartphone.svg" class="img-fluid "/>
					</div>
					<div class="about-contact-bottom">
						<p>Phone </p>
						<a href="#"><?php echo $contact->number; ?></a>
					</div>
				</div> 
			</div>
            <div class="col-md-4 ">
				<div class="about-contact-box">
					<div class="about-contact-top">
						<img src="<?php echo base_url('assets/'); ?>img/icons/mailbox.svg" class="img-fluid "/>
					</div>
					<div class="about-contact-bottom">
						<p>Mail </p>
						<a href="#"><?php echo $contact->email; ?></a>
					</div>
				</div>
			</div>
            <div class="col-md-4 ">
				<div class="about-contact-box">
					<div class="about-contact-top">
						<img src="<?php echo base_url('assets/'); ?>img/icons/digital-marketing.svg" class="img-fluid "/>
					</div>
					<div class="about-contact-bottom">
						<p>Social Media </p>
						<a href="#">@mymunchkin</a>
					</div>
				</div>
			</div>
			

		</div>	
	</div>
</section>


<style>
.mymunch_about h2{
    border-bottom: 1px solid;
}
.mymunch_about p {
    font-size: 16px;
    font-weight: 600;
    color: #4B1616;
}
</style>
</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>
