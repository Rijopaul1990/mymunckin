
<!DOCTYPE html>
<html lang="en">
 
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title><?php echo $page_title; ?></title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="<?php echo base_url('assets/admin/');?>img/apple-touch-icon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="<?php echo base_url('assets/admin/');?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="<?php echo base_url('assets/admin/');?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="<?php echo base_url('assets/admin/');?>assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="<?php echo base_url('assets/admin/');?>assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="<?php echo base_url('assets/admin/');?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="<?php echo base_url('assets/admin/');?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap-wysihtml5 css -->
      <link href="<?php echo base_url('assets/admin/');?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="<?php echo base_url('assets/admin/');?>assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link href="<?php echo base_url('assets/admin/');?>assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/');?>assets/invoice.css" media="all" />
      <link href="<?php echo base_url('assets/admin/');?>assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style ========================-->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/');?>assets/plugins/datatable/data-tabel-bs.css" media="all" /> 
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/');?>assets/select2/select2.min.css">
	 
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/');?>style.css">
	 <style type="text/css">
     body::-webkit-scrollbar { width: 1em; } 
     body::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px #020f17; } 
     body::-webkit-scrollbar-thumb { background-color: #020f17; outline: 1px solid slategrey; }  
     
     .col-sm-12 {
         overflow-x: auto;
     }
    </style>
   </head>
   <body class="hold-transition sidebar-mini">
   <!--preloader-->
      <!--<div id="preloader">
         <div id="status"></div>
      </div>-->
	  
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="<?php echo base_url('admin') ?>" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="<?php echo base_url('assets/');?>img/logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="<?php echo base_url('assets/');?>img/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/admin/');?>dist/img/user.jpg" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           
                           <li>
                              <a href="<?php echo base_url('admin/profile'); ?>">
                              <i class="fa fa-user"></i> User Profile</a>
                           </li>
                           
                           <li><a href="<?php echo base_url('logout'); ?>">
                              <i class="fa fa-sign-out"></i> Signout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
       <style>
       .error{
          color:red;
       }
       </style>
         
<?php 
	//sidebar 
	include_once('sidebar.php'); 
?>

