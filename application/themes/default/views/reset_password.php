
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 

<main class="login-page" >

<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
    <section class="banner" id="price">
        <div class="background-icons4">
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/>
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
        </div>
        <div class="container">
            <div class="row"> 
                
                <div class="col-md-7 text-center">
                    <div class="background-icons4">
                        <img src="<?php echo base_url('assets/') ?>img/icons/price1.svg" class="img-fluid price1" alt="price1" >
                        <img src="<?php echo base_url('assets/') ?>img/icons/about1.svg" class="img-fluid price2" alt="price2">
                        <img src="<?php echo base_url('assets/') ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
                    </div>
                    <img src="<?php echo base_url('assets/') ?>img/icons/login-kid.svg " class="img-fluid login-kid"/>
                </div>
                <div class="col-md-5 align-self-center " >
                    <h1>Reset Password</h1>
                     <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
                    <form id="reset_password_form" >
                        
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password"  placeholder="Password">
                         </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="con_password" name="con_password"  placeholder="Confirm Password">
                        </div>
                        <button type="submit"  class="btn btn-munchkin"><span>Reset Password</span></button>
                    </form>
                    
                    

                </div>

                
            </div>	
        </div>
    </secction>


    
</main>
<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/custom.js'); ?>"></script>
<script>
  
         
           $(document).ready(function(){
  $('#password').bind("paste",function(e) {
      e.preventDefault();
  });

   $('#con_password').bind("paste",function(e) {
      e.preventDefault();
  });
});