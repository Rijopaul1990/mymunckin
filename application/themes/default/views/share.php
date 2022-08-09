<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 


<main class="template-page share">


<?php include 'inner_banner.php'; ?>

<section class="template-tab text-center position-relative" id="price" >
    <div class="background-icons4">
        <img src="<?php echo base_url('assets/') ?>img/icons/duck.svg" class="img-fluid price1" alt="price1" >
        <img src="<?php echo base_url('assets/') ?>img/icons/about2.svg" class="img-fluid price2" alt="price2" >
        <img src="<?php echo base_url('assets/') ?>img/icons/spoon.svg" class="img-fluid price3" alt="price3" >
        <img src="<?php echo base_url('assets/') ?>img/icons/pin.svg" class="img-fluid price4" alt="price3" >
        
         <img src="<?php echo base_url('assets/') ?>img/icons/star.svg" class="img-fluid star1" alt="price1" >
        <img src="<?php echo base_url('assets/') ?>img/icons/star.svg" class="img-fluid star2" alt="price3" >
        <img src="<?php echo base_url('assets/') ?>img/icons/cloud-icon.svg" class="img-fluid cloud-icon" alt="price2" >
        <img src="<?php echo base_url('assets/') ?>img/icons/red-star.svg" class="img-fluid red-star" alt="price3" >
        <img src="<?php echo base_url('assets/') ?>img/icons/red-star.svg" class="img-fluid red-star1" alt="price3" >
        
    </div>	
	<div class="container explore " >
		<div class="row">
			<div class="col-lg-10 m-auto text-center " data-aos="fade-down" data-aos-duration="2000">
			    
                <img src="<?php echo base_url($fetch_create_template->img); ?>" class="img-fluid " alt="album" ><br>
                    <a href="<?php echo base_url('Users/announcement/'.encrypt_url($fetch_create_template->temp_id)) ?>" class="btn btn-munchkin mt-5"><span> <i class="fas fa-pen"></i> Edit </span></a>
			</div>
			
		</div>	
	</div>	
</section>

<section class="share-url" >
	<div class="container explore " >
		<div class="row">
			<div class="col-md-10 m-auto text-center ">
                <h2>Mymunchkin URL</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Mymunchkin URL" value="<?php echo base_url($genrate_link); ?>" readonly>
                     </div>
                    <button type="button" class="btn btn-munchkin" id="btn_share"><span>SHARE</span></button>
                    
                    <a href="<?php echo base_url($fetch_create_template->img) ?>" class="btn btn-munchkin" download ><span>Download</span></a>
                </form>
                <ul id="social_share" style="display:none;">
                    <li>
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url($genrate_link); ?>" target="_blank" class="fb"><i class="fab fa-facebook"></i></a>
                    </li>
                   
                       <li>
                        <a href="https://api.whatsapp.com/send?phone=&text=<?php echo base_url($genrate_link); ?>" class="wt"><i class="fab fa-whatsapp"></i></a>
                    </li>
                   
                       <li>
                        <a href="http://twitter.com/share?url=<?php echo base_url($genrate_link); ?>&text=My Munchkin &hashtags=My_Munchkin" target="_blank " class="tw"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
			</div>
			
		</div>	
	</div>	
</section>



</main>

<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>
<script>
    $(document).on("click","#btn_share",function(){
        $("#social_share").show();
    })
</script>