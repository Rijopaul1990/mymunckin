<!DOCTYPE html>
<html>
<?php 
$cart_count = $this->AdminModel->AllCount("add_to_cart",array('session_id'=>$this->input->ip_address()));
$menu_cart_count = $cart_count;
?>
<head>
	<title><?php echo @$page_title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="<?php //echo @$description; ?>">
   <meta name="keywords" content="<?php echo @$keywords; ?>">
	<link rel="icon" type="image/png" sizes="80x96" href="<?php echo base_url('assets/'); ?>img/logo.png">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700&family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
	<meta name="google-signin-client_id" content="36800334003-cucetr7an1jutkvkpqb45h45tui5j3gl.apps.googleusercontent.com">
   
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/slick-theme.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/aos.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>toastr.min.css">
    <script src="<?php echo base_url('assets/'); ?>toastr.min.js"></script>

    <?php if($this->uri->segment('1') == "due-date" || $this->uri->segment('1') == "date-of-birth" || $this->uri->segment('1') == "dd" || $this->uri->segment('1') == "db"){ ?>
<!--For facebook and twitter-->
<meta property="og:title" content="My Munchkin <?php echo $userDetails->child_name?' - '.$userDetails->child_name:'' ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo base_url(@$created_template->img); ?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="900" />
<meta property="og:url" content="<?php echo base_url(@$this->uri->segment('1').'/'.@$this->uri->segment('2')); ?>" />
<meta property="og:site_name" content="My Munchkin" />
<meta property="og:description" content="<?php echo $announement_data->short_description?$announement_data->short_description:''; ?>" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mymunchkin">
<meta name="twitter:creator" content="@MyMunchkin">
<meta name="twitter:title" content="My Munchkin <?php echo $userDetails->child_name?' - '.$userDetails->child_name:'' ?>">
<meta name="twitter:description" content="<?php echo $announement_data->short_description?$announement_data->short_description:''; ?>">
<meta name="twitter:image" content="<?php echo base_url(@$created_template->img); ?>">

<?php } ?>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSRR9XV');</script>
<!-- End Google Tag Manager -->


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSRR9XV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<meta name="google-site-verification" content="xCPU3nTjLwSQdtl107hedAN7MyOj2JP4NZw6UTkwL4U" />
</head>
<?php 
	$fetch_menu = $this->AdminModel->all_fetch("menu",array('status'=>1),"sort_order"); 
	$fetch_header_links = $this->AdminModel->all_fetch("social_link",array('status'=>1,'status_for_header'=>1),"sort_order");
	
?>
<body>
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light" >
				
				
				<!--<a href="#" class="btn pika-btn header-btn d-md-none d-block" ><i class="far fa-calendar-alt"></i> Book A free class</a>-->
				
				<a class="navbar-brand logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/'); ?>img/logo.png" class="img-fluid"/></a>
				<!--<a class="navbar-brand scoll-logo d-none" href="#"><img src="img/logo.png" class="img-fluid"/></a>-->
				<a href="<?php echo base_url('cart') ?>" class="nav-link text-dark pl-0 cart_link position-relative d-md-block d-lg-none ml-auto" ><i class="fas fa-shopping-cart"></i><span><?php echo @$cart_count ?></span></a>
						
				<button class="navbar-toggler" type="button" data-toggle="collapse" id="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
					<span class="cross" style="display:none">&times;</span>	
				</button>

				<div class=" navbar-collapse" >
					
				<a class="navbar-brand mobile-logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/'); ?>img/logo.png" class="img-fluid"/></a>
					<ul class="navbar-nav mr-auto ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo base_url(); ?>">Home </a>
						</li>
						<?php if(is_array($fetch_menu) || is_object($fetch_menu)){
							foreach ($fetch_menu as $fetch_menu) {
						 ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url($fetch_menu->link); ?>"><?php echo $fetch_menu->name; ?></a>
						</li>
					<?php } } ?>
						
					
					</ul>
					<div class="form-inline my-2 my-lg-0">
					
						<?php 

						if(isset($this->session->userdata['userdetail'])){  ?>
						     <span id="outer_cart_count">
							<a href="<?php echo base_url('cart') ?>" id="innert_cart_count" class="nav-link text-white pl-0 cart_link position-relative d-none d-md-none  d-lg-block" >
							    <i class="fas fa-shopping-cart"></i><span><?php echo @$cart_count ?></span>
							    </a>
							    </span>
						<?php
						    $u_de = $this->AdminModel->fs("user",array('id'=>$this->session->userdata['userdetail']['id']));
						   $get_web_page =  $this->AdminModel->fs('genrate_url',array('u_id'=>$this->session->userdata['userdetail']['id']));
						      if(@$get_web_page->dob){

                         $web_page_link  =  'db/'.@$get_web_page->link;
                           
                         }else if($get_web_page->due_date ){
                         
                          $web_page_link  =  'dd/'.$get_web_page->link;
                         }
						?>
						<div class="nav-item dropdown">
						    
							<a class="nav-link dropdown-toggle login" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user"></i> <span>Hi , <?php echo @$u_de->first_name; ?></span>
							</a>
    						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    							<a class="dropdown-item" href="<?php echo base_url('Users/dashboard'); ?>">Dashboard</a>
    								<a class="dropdown-item" href="<?php echo base_url($web_page_link); ?>" target="_blank">Web Page</a>
    							<a class="dropdown-item" href="<?php echo base_url('Login/logout'); ?>">Logout</a>
    						</div>
						</div>
						
						
							<a href="<?php echo base_url('Users/album') ?>" class="btn btn-munchkin " ><span>CREATE BABY BOOK</span></a>
					<?php }else{ ?>
						<a href="<?php echo base_url('login') ?>" class=" login" ><i class="fas fa-user"></i> Login</a>
						<a href="<?php echo base_url('albums') ?>" class="btn btn-munchkin " ><span>CREATE BABY BOOK</span></a>
					<?php } ?>
						
					
					</div>
				</div>
			</nav>
		</div>
	</header>