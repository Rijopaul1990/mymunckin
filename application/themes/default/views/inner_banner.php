<?php if($banner){ ?>
<section class="banner" id="banner" style="background:url(<?php echo base_url($banner->banner_img); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 align-self-center ">
                <h1><?php echo @$banner->banner_heading; ?></h1>
                <p><?php echo @$banner->banner_description; ?></p>
			</div>
		</div>	
	</div>
	<img src="<?php echo base_url('assets/') ?>img/about-wave.png" class="img-fluid banner-cloud"/>
</section>
<?php } ?> 