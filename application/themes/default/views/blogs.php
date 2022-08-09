
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 


<style>
    
.blog {
    padding-bottom: 200px;
}
</style>
<main class="blog-detail">

<?php include 'inner_banner.php'; ?>



<section class="blog " id="blog">	
	<div class="background-icons6">
		<img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid blog1" alt="blog1">
		<img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid blog2" alt="blog2">
	</div>
	<div class="container " >
		<h2 class="title" data-aos="fade-down">Blogs	</h2>
		
			<div data-aos="fade-right" class="blog-list row">
			<?php if(is_array($all_blog) || is_object($all_blog)){
				foreach ($all_blog as $blog) {
			 ?>	
			<div class=" col-12 col-md-4 col-sm-6">
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
		</div>
		
</section>




</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>