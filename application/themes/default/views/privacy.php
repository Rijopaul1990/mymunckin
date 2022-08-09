<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 

<style>
 .about .row:before {
    width: 220px;
    height: 220px;
   bottom: 5%;
    left: -10%;
}
</style>
<main class="contact-page">

<section class="banner" id="banner" style="background:url('<?php echo base_url('assets/'); ?>img/policy.png');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center ">
                <h1>Privacy Policy</h1>
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
			<div class="col-lg-12 ">
				<?php echo $fetch_data->description; ?>
			</div>
		</div>	
	</div>
</section>


</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>
