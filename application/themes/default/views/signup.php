
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 

<style>
    form#userRegister{
        z-index: 99999;
        position: relative;
    }
    .abcRioButtonBlue, .abcRioButtonBlue:hover {
    border-radius: 34px !important;
    background-color: #ff0d0d00 !important;
}
.abcRioButtonBlue .abcRioButtonIcon {
    background-color: #fff !important;
    border-radius: 28px !important;
    padding: 13px !important;
}
</style>
 <script src="https://apis.google.com/js/platform.js" async defer></script>
     <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
<main class="signup-page" >

<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
    <section class="banner" id="price">
        <div class="background-icons4">
            <!-- <img src="img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/> -->
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-5 text-center">
                    <div class="background-icons4">
                        <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid price1" alt="price1" >
                        <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid price2" alt="price2">
                        <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid price3" alt="price3" >
                        <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid price4" alt="price2">
                        <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid price5" alt="price3" >
                    </div>
                    <img src="<?php echo base_url('assets/') ?>img/banner.png " class="img-fluid login-kid"/>
                </div>
                <div class="col-md-7 align-self-center text-center ">
                    <h1>Create an account</h1>
                     <div class="other-login">
                          <div id="gSignIn"></div>
                        <!--<a href="#" class=" google"><span><img src="<?php echo base_url('assets/') ?>img/icons/google-icon.svg" class="google-icon"> </span></a>-->
                        <a  href="javascript:void(0);" onclick="fbLogin();" class=" facebook"><span><i class="fab fa-facebook-square"></i> </span></a>
                    </div>
                    
                    <div class="use-email">
                        or
                    </div>
                    <form id="userRegister" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            
                            <div class="col">
                                <input type="text" name="child_name" class="form-control" placeholder="Child Name">
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <!--<div class="form-row">-->
                        <!--    <div class="col">-->
                        <!--        <input type="email" name="email" class="form-control" placeholder="Email">-->
                        <!--    </div>-->
                        <!--    <div class="col">-->
                        <!--        <input type="text" name="number" class="form-control" placeholder="Number">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-row">
                            <div class="col">
                                <input type="password" name="password" class="form-control pass_val" placeholder="Password" >
                                <div class="invalid-feedback text-left" style="margin-top: -10px;  margin-bottom: 10px;  font-weight: 700;color:#fff;">
                                  Passwords must contain at least 8 characters, including uppercase, lowercase letters ,special character and numbers.
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" name="con_password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <!--<span>Passwords must contain at least 8 characters, including uppercase, lowercase letters ,special character and numbers.</span>-->
                       
                        </div>
                        
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree the Terms & Conditions, Privacy Policy and use of Cookies.</label>
                        </div>
                        
                        <button type="submit" class="btn btn-munchkin"><span>SIGNUP</span></button>
                    </form>
                    
                    <a href="<?php echo base_url('login'); ?>" class="extra-link" >Already have an account? Login </a>
                   

                </div>
            </div>	
        </div>
    </secction>


    
</main>
<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/custom.js'); ?>"></script>
<script src="<?php echo base_url('assets/fblogin.js') ?>"></script>

<script>

$(document).ready(function(){
  $(".pass_val").focusin(function(){
    $(".invalid-feedback").css("display", "block");
  });
  $(".pass_val").focusout(function(){
    $(".invalid-feedback").css("display", "none");
  });
});
</script>