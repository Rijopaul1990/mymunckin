
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 


<main class="login-page success" >


    <section class="banner" id="price">
        <div class="background-icons4">
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/>
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
                        <img src="<?php echo base_url('assets/') ?>img/icons/price1.svg" class="img-fluid price1" alt="price1" >
                        <img src="<?php echo base_url('assets/') ?>img/icons/about1.svg" class="img-fluid price2" alt="price2">
                        <img src="<?php echo base_url('assets/') ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 text-center m-auto">
                    <img src="<?php echo base_url('assets/') ?>img/baby-img.png" class="img-fluid baby-img " alt="baby">
                     <?php if(@$status == 1){ ?>
                    <h2><i class="fas fa-check-circle"></i> Success </h2>
                    <?php } else{ ?>
                    <h2 style="color:red;"><i class="fas fa-times-circle"></i> Failed  </h2>
                    <?php } ?>
                    <p class="mb-2 mt-2"><strong><?php echo @$msg; ?></strong></p>
                    
                    <?php if(@$status == 1){ ?>
                            <a href="<?php echo base_url('login'); ?>" class="btn btn-munchkin mb-3"><span>Login Here</span></a>
                            <?php }else{ ?>
                            <a href="<?php echo base_url(); ?>" class="btn btn-munchkin mb-3"><span>Back To Home</span></a>
                            <?php } ?>
                    
                </div>
            </div>	
        </div>
    </secction>


    
</main>


