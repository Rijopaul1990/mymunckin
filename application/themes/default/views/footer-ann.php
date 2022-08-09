<?php if($fetch_heading3){ ?>
<section class="announcement" id="announcement">
	<div class="container">
		<div class="row">

			<div class="col-lg-7 announcement-left col-md-7">
				<div class="background-icons7">
					<img src="<?php echo base_url('assets/'); ?>img/icons/ann1.svg" class="img-fluid ann1" alt="ann">
					<img src="<?php echo base_url('assets/'); ?>img/icons/ann2.svg" class="img-fluid ann2" alt="ann">
					<img src="<?php echo base_url('assets/'); ?>img/icons/ann3.svg" class="img-fluid ann3" alt="ann">
				</div>
				<h1 data-aos="fade-down"><?php echo $fetch_heading3->heading1; ?></h1>
					<?php if(isset($this->session->userdata['userdetail'])){ ?>
                        	 <a href="<?php echo base_url('Users/album'); ?>" class="btn btn-munchkin"><span><?php echo @$fetch_heading3->btn_name; ?></span></a>
                        	<?php } else{ ?>
				      <a href="<?php echo @$fetch_heading3->btn_link; ?>" class="btn btn-munchkin"><span> <?php echo @$fetch_heading3->btn_name; ?></span> </a>
				       <?php } ?>
				
 			</div>
			<div class="col-lg-5 announcement-right text-right col-md-5">
				
				<div class="lines"></div>
				<img src="<?php echo base_url($fetch_heading3->img); ?>" class="img-fluid "/>
			</div>
		</div>
	</div>
</section>
<?php } ?>