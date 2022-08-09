
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $page_title; ?></title> 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/bootstrap/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/login_bg.css">
  
  <!-- Ionicons -->            
         
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>dist/css/AdminLTE.css">
  <!--<link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/animate.css">-->
</head>

<style>
    .btn-munchkin {
    background: #FF721D !important;
    color: #fff;
    border-radius: 50px;
    padding: 10px 20px !important;
    min-width: 70px !important;
    font-weight: 500;
    font-size: 14px !important;
    transition: 0.3s all;
    font-family: 'Montserrat Alternates', sans-serif;
    position: relative;
   border:1px solid;
    overflow: hidden;
}
   
  body {
    background-image: url(<?php echo base_url('assets/');?>img/bb.jpg);
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: fixed;
}
.btn-munchkin:hover {
    transition: 0.3s all;
    color: #FF721D;
    background: #fff !important;
}
    
</style>

<body> 
	<div class="container" style=" top: 50%;  transform: translateY(-50%); position: relative;"> 
		<div class="row">
		    <div class="col-md-12 text-center">
		    <a ><img src="<?php echo base_url('assets/');?>img/logo.png" class="img-fluid"></a>
		<h2 class="user_title" style="margin-top: 0;">Admin Login Panel</h2>
		<p class="text-center"><a href="javascript:;" onclick="show_login_form();" class="btn btn-success chrp btn-munchkin">Click Here To Login</a></p>
			<div class="col-sm-4 col-sm-offset-4 login_bg" style="display:none;">
			<form action="" method="POST" id="form_submit">
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="csrf_test_name">
				<div class="form-group">
					<input type="text" placeholder="User Email or Name" name="login_user_name" id="login_user_name" class="form-control">
					<input type="hidden" value="" id="hidden_email"/>
				</div>
				<div class="form-group">
				    <input type="password" placeholder="User Password"  name="login_user_password" id="login_user_password" class="form-control">
				</div> 
				<div class="form-group">
				<input type="submit" name="login_btn " id="login_btn" class="btn btn-block login_btn btn-munchkin" value="Submit"/>
			</div>
			<input type="hidden" id="base_url" value="<?php echo base_url() ?>">
				</form>
			</div>
		</div>
		</div>
	</div>
 
 
 

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/admin/');?>assets/jquery.js"></script>
<script src="<?php echo base_url('assets/admin/');?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/admin/');?>assets/login_js.js" type="text/javascript"></script>

</body>
</html>
