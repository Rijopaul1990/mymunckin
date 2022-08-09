<?php 
	$fetch_footer_links = $this->AdminModel->all_fetch("social_link",array('status'=>1),"sort_order");
	$fetch_footer_contact = $this->AdminModel->fs("contact",array('status'=>1));
	$fetch_footer_menu = $this->AdminModel->all_fetch("menu",array('status_for_footer'=>1),"sort_order");
?>
<footer>
<img src="<?php echo base_url('assets/'); ?>img/cloud.png" class="img-fluid footer-cloud"/>
	<div class="container">
		<div class="row">
			<div class="col-md-4 align-self-center  col-6">
				<ul class="footer-links m-0 text-center">
				    <?php if(is_array($fetch_footer_menu) || is_object($fetch_footer_menu)){ 
				    
				    foreach($fetch_footer_menu as $fetch_footer_menu){
				    ?>
    				<li>
    					<a href="<?php echo base_url($fetch_footer_menu->link); ?>"><?php echo $fetch_footer_menu->name; ?></a>
    				</li>
    				<?php } } ?>
    				<li>
    					<a href="<?php echo base_url('templates'); ?>">Template</a>
    				</li>
    				<li>
    					<a href="<?php echo base_url('albums'); ?>">Baby Books</a>
    				</li>
    				<li>
    					<a href="<?php echo base_url('blogs'); ?>">Blog </a>
    				</li>
    				
    				
			    </ul>
				<!--<h2 class="text-center"> <br> <br></h2> -->
			</div>
			<div class="col-md-4 pt-2 text-center  col-12">
				<img src="<?php echo base_url('assets/'); ?>img/logo.png" class="img-fluid "/>
				<p><?php echo $fetch_footer_contact->description; ?></p>
			</div>
			<div class="col-md-4  align-self-center  col-6">
			    <ul class="footer-links m-0 text-center">
    				<li>
    					<a href="<?php echo base_url('contact-us'); ?>">Contact Us</a>
    				</li>
    				<li>
    					<a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a>
    				</li>
    				<li>
    					<a href="<?php echo base_url('refund-policy'); ?>">Refund Policy</a>
    				</li>
    				<li>
    					<a href="<?php echo base_url('term-and-condtiton'); ?>">Terms & Condtiton</a>
    				</li>

			    </ul>
				<!--<h2 class=" text-center"> <br> <br></h2>-->
			</div> 
		</div>
	</div>
</footer>

<div class="container footer-bottom py-3">
	<div class="row">
		<div class="col-md-6 align-self-center">
			<p style="font-size:14px;">Copyright @mymunchkin. All Right Reserved </p>
		</div>
		<div class="col-md-6  ">
			<ul class="social-icons m-0 text-right">
				<?php 
				if(is_array($fetch_footer_links) || is_object($fetch_footer_links)){
					foreach ($fetch_footer_links as $fetch_footer_links) {
						
				?>
				<li>
					<a href="<?php echo $fetch_footer_links->link; ?>"><i class="<?php echo $fetch_footer_links->c_name; ?>"></i></a>
				</li>
			<?php } } ?>
				
			</ul>
		</div>
	</div>
</div>


<div class="text-center" id="home_loader" style="display:none;">
    <span class="fa fa-spinner fa-spin fa-3x"></span>
    <p class="font-weight-bold ml-2">Processing ... </p>
</div>


<style>
#home_loader {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    width: 100%;
    display: flex;
    height: 100%;
    background: #ffffffa6;
    justify-content: center;
    align-items: center;
    z-index: 999999999;
}
</style>

	<script src="<?php echo base_url('assets/'); ?>js/TweenMax.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/turn.min.js"></script> 
	<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/slick.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/aos.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/main.js"></script>


<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script> window.jQuery || document.write('<script src="<?php echo base_url('assets/'); ?>js/jquery-2.1.0.min.js"><\/script>') </script>


<script src="<?php echo base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/jquery.booklet.latest.min.js"></script>
<?php 
if(isset($this->session->userdata['userdetail']))
    { ?>
 <script>
     setInterval(function() {
    $.ajax({
            url : "<?php echo base_url('AjaxController/UserStatus'); ?>",
            method : "POST",
            data :{},
            success:function(res){
                
                if(res == 1){
                    window.location.href="";
                }
            }
    }); 
}, 5000);
 </script>
 <?php } ?>
<script>
    $(function() {
     $('#mybook').booklet({
         width: 1000,
        pagePadding: 0,
        arrows: true,
        height: 400,
        pageNumbers: false,
        shadows: false,
            closed: true,
        autoCenter: true
        });
    });
    
    
    $('#mobile_album').owlCarousel({
    loop:false,
    margin:0,
    nav:true,
    navText: ["<img src='<?php echo base_url('assets/'); ?>img/prev.png'>","<img src='<?php echo base_url('assets/'); ?>img/next.png'>"],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1  
        },
        1000:{
            items:1
        }
    }
  })


</script>

</body>
</html>