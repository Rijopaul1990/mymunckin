
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 

<main class="blog-detail">

<!--<?php include 'inner_banner.php'; ?>-->

<section class="banner" id="banner" style="background:url(<?php echo base_url('assets/img/blog_banner.png') ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 align-self-center ">
                <h1><?php echo $fetch_blog->heading; ?> </h1>
                <ul>
                    <!--<li><p><i class="far fa-user-circle"></i> By <span>Kartik Mehra</span></p></li>-->
                    <li><p>
                        <?php if($fetch_blog->author || $fetch_blog->b_date){ ?>
                        <i class="far fa-clock"></i>
                        <?php } ?>
                        <?php echo $fetch_blog->author; ?> <span>
                    <?php
                    if($fetch_blog->b_date){
                         $datee = date_create($fetch_blog->b_date);
                    echo date_format($datee,"d M Y");
                    }
                    ?></span></p></li>
                    <!--<li><p>By <span>Kartik Mehra</span></p></li>-->
                </ul>
                <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>-->
			</div>
		</div>	
	</div>
	<img src="<?php echo base_url('assets/img/about-wave.png'); ?>" class="img-fluid banner-cloud">
</section>



<section class="contact-form" id="price">
    <div class="background-icons4">
        <img src="<?php echo base_url('assets/') ?>img/icons/about1.svg" class="img-fluid price1" alt="price1" >
        <img src="<?php echo base_url('assets/') ?>img/icons/price3.svg" class="img-fluid price2" alt="price2">
        <img src="<?php echo base_url('assets/') ?>img/icons/how2.svg" class="img-fluid price3" alt="price3" >
    </div>
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 ">
                <div class="entry-content">
                    <img src="<?php echo base_url($fetch_blog->img); ?>" class="img-fluid w-100 mb-4" alt="">
                        <?php echo $fetch_blog->description; ?>
                </div>
            </div>
            <div class="col-md-4 newSec2">
                <h3 class="dual-border">Recent Blogs</h3>
                <div>
                    <?php 
                    if(is_array($all_blog) || is_object($all_blog)){
                        foreach($all_blog as $all_blog){
                            if($all_blog->link !== $this->uri->segment(2)){
                            $date = date_create($all_blog->b_date);
                    ?>
                    <div class="post_wrapper">
                        <a href=" <?php echo base_url("blog-details/".$all_blog->link); ?>">
                            <div class="post_thumb">
                                    <img src="<?php echo base_url($all_blog->thumbnail_img); ?>" class="img-fluid" alt="">
                            </div>
                            <div class="post_info">
                                <h4>  <?php echo $all_blog->heading; ?> </h4>
                                <?php if($all_blog->b_date){ ?>
                                <span><?php echo date_format($date,"d M Y"); ?> </span>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                    <?php } } } ?>
                   
                   
                </div>
            </div>
        </div>	
    </div>
</section>





</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>