
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 
 <style>

    .abcRioButtonBlue, .abcRioButtonBlue:hover {
    border-radius: 34px !important;
    background-color: #ff0d0d00 !important;
}
.abcRioButtonBlue .abcRioButtonIcon {
    background-color: #fff !important;
    border-radius: 28px !important;
    padding: 13px !important;
}
#login_form .other-login {
    justify-content: flex-start;
    margin-bottom: 20px;
}
</style>
 <script src="https://apis.google.com/js/platform.js" async defer></script>
     <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
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
                <div class="col-md-5 align-self-center " id="login_form">
                    <h1>Login to your account</h1>
                      <div class="other-login">
                          <div id="gSignIn"></div>
                        <!--<a href="#" class=" google"><span><img src="<?php echo base_url('assets/') ?>img/icons/google-icon.svg" class="google-icon"> </span></a>-->
                        <a  href="javascript:void(0);" onclick="fbLogin();" class=" facebook"><span><i class="fab fa-facebook-square"></i> </span></a>
                    </div>
                    
                    
                    <form id="login_from" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="useremail"  placeholder="Email Address">
                         </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="userpass"  placeholder="Password">
                        </div>
                        <button type="submit" id="UserLogin" class="btn btn-munchkin"><span>LOGIN</span></button>
                    </form>
                    
                    <a href="javascript:void(0)" class="extra-link" id="btn_show_forget_form">Forgot Password ?</a>
                    <a href="<?php echo base_url('signup') ?>" class="extra-link" >New user ? Signup </a>

                </div>

                <div class="col-md-5 align-self-center " id="reset_password_form" style="display: none;">
                    <h1>Forgot Password</h1>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="user_email_forget"  placeholder="Email Address">
                         </div>
                       
                        <button type="button" id="user_forget_password" class="btn btn-munchkin"><span>Reset Password</span></button>
                    </form>
                    
                    <a href="javascript:void(0)"  class="extra-link" id="btn_show_login_form">Login Here</a>
                    <a href="<?php echo base_url('signup') ?>" class="extra-link" >New user ? Signup </a>

                </div>
            </div>	
        </div>
    </secction>


    
</main>
<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/custom.js'); ?>"></script>
<script src="<?php echo base_url('assets/fblogin.js') ?>"></script>
