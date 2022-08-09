<?php include("header.php") ?>
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 

<main class="login-page success" >


    <section class="banner" id="price">
        <div class="background-icons4">
            <img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/>
            <img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
                        <img src="<?php echo base_url('assets/'); ?>img/icons/price1.svg" class="img-fluid price1" alt="price1" >
                        <img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid price2" alt="price2">
                        <img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 text-center m-auto">
                    <img src="<?php echo base_url('assets/'); ?>img/baby-img.png" class="img-fluid baby-img " alt="baby">
                    <h2><i class="fas fa-check-circle"></i> Welcome Aboard </h2>
                    <p class="mb-2 mt-2"><strong>Your order has been successful</strong></p>
                   
                    	<?php if(isset($this->session->userdata['userdetail'])){ ?>
                        	 <a href="<?php echo base_url('Users'); ?>" class="btn btn-munchkin mb-3"><span>Let’s Get Started</span></a>
                        	<?php } else{ ?>
				        <a href="<?php echo base_url('signup'); ?>" class="btn btn-munchkin mb-3"><span>Let’s Get Started</span></a>
				       <?php } ?>
                    <br>
                    <!--<a href="#" class="  get-email">Download order receipt</a>-->
                </div>
            </div>	
        </div>
    </secction>


    
</main>
<?php include("include/footer.php") ?>
