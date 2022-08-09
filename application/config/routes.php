<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 					= 'Frontend';
$route['admin']  								= 'admin/backend/index';
$route['logout']          						= 'admin/login/logout'; 
$route['admin/login']  							= 'admin/login';
$route['admin/checkusername']  					= 'admin/login/checkusername';
$route['admin/dashboard']						= 'admin/backend/index';
$route['404_override']                          = ''; 
$route['translate_uri_dashes'] 					= FALSE; 
$route['admin/profile']  							= 'admin/Setting/Profile';
//Backend URL
$route['admin/all_menu']  							= 'admin/Menu/all_menu';
$route['admin/add_menu']  							= 'admin/Menu/add_menu';
$route['admin/add_menu/(:num)']  					= 'admin/Menu/add_menu/$1';

//allabout
$route['admin/all_aboutus']  						= 'admin/About/all_aboutus';
$route['admin/add_aboutus']  						= 'admin/About/add_aboutus';
$route['admin/add_aboutus/(:num)']  				= 'admin/About/add_aboutus/$1';

//all_vision
$route['admin/all_about_why_mymunchkin']  						= 'admin/About/all_about_why_mymunchkin';
$route['admin/add_about_why_mymunchkin']  						= 'admin/About/add_about_why_mymunchkin';
$route['admin/add_about_why_mymunchkin/(:num)']  				= 'admin/About/add_about_why_mymunchkin/$1';
//all_faq
$route['admin/all_faq']  						= 'admin/About/all_faq';
$route['admin/add_faq']  						= 'admin/About/add_faq';
$route['admin/add_faq/(:num)']  				= 'admin/About/add_faq/$1';


//all_banner
$route['admin/all_banner']  						= 'admin/Home/all_banner';
$route['admin/add_banner']  						= 'admin/Home/add_banner';
$route['admin/add_banner/(:num)']  					= 'admin/Home/add_banner/$1';

//all_practice_heading
$route['admin/all_home_heading']  				= 'admin/Home/all_home_heading';
$route['admin/add_home_heading']  				= 'admin/Home/add_home_heading';
$route['admin/add_home_heading/(:num)']  		= 'admin/Home/add_home_heading/$1';


//all_job
$route['admin/all_social']  						= 'admin/Contact/all_social';
$route['admin/add_social']  						= 'admin/Contact/add_social';
$route['admin/add_social/(:num)']  				    = 'admin/Contact/add_social/$1';
//all_contact
$route['admin/all_contact']  						= 'admin/Contact/all_contact';
$route['admin/add_contact']  						= 'admin/Contact/add_contact';
$route['admin/add_contact/(:num)']  				= 'admin/Contact/add_contact/$1';



//all_home_about
$route['admin/all_home_about']  						= 'admin/Home/all_home_about';
$route['admin/add_home_about']  						= 'admin/Home/add_home_about';
$route['admin/add_home_about/(:num)']  					= 'admin/Home/add_home_about/$1';
//add_home_howwork.php
$route['admin/all_home_howwork']  						= 'admin/Home/all_home_howwork';
$route['admin/add_home_howwork']  						= 'admin/Home/add_home_howwork';
$route['admin/add_home_howwork/(:num)']  				= 'admin/Home/add_home_howwork/$1';
//all_pricing
$route['admin/all_pricing']  						= 'admin/Product/all_pricing';
$route['admin/add_pricing']  						= 'admin/Product/add_pricing';
$route['admin/add_pricing/(:num)']  				= 'admin/Product/add_pricing/$1';
//Template category
$route['admin/all_category']  						= 'admin/Template/all_category';
$route['admin/add_category']  						= 'admin/Template/add_category';
$route['admin/add_category/(:num)']  				= 'admin/Template/add_category/$1';
//add_template
$route['admin/all_template']  						= 'admin/Template/all_template';
$route['admin/add_template']  						= 'admin/Template/add_template';
$route['admin/add_template/(:num)']  				= 'admin/Template/add_template/$1';
//add_announcement.php
$route['admin/all_announcement']  						= 'admin/Template/all_announcement';
$route['admin/add_announcement']  						= 'admin/Template/add_announcement';
$route['admin/add_announcement/(:num)']  				= 'admin/Template/add_announcement/$1';
//Milestone category
$route['admin/all_milestone_category']  						= 'admin/Milestone/all_milestone_category';
$route['admin/add_milestone_category']  						= 'admin/Milestone/add_milestone_category';
$route['admin/add_milestone_category/(:num)']  				    = 'admin/Milestone/add_milestone_category/$1';


//all_blog
$route['admin/all_blog']					= "admin/Blog/all_blog";
$route['admin/add_blog']					= "admin/Blog/add_blog";
$route['admin/add_blog/(:num)']				= "admin/Blog/add_blog/$1";
//all_blog
$route['admin/all_testimonial']					= "admin/Testimonial/all_testimonial";
$route['admin/add_testimonial']					= "admin/Testimonial/add_testimonial";
$route['admin/add_testimonial/(:num)']			= "admin/Testimonial/add_testimonial/$1";
//ADD COUPON CODE
$route['admin/all_coupon']					= "admin/Coupon/all_coupon";
$route['admin/add_coupon']					= "admin/Coupon/add_coupon";
$route['admin/add_coupon/(:num)']			= "admin/Coupon/add_coupon/$1";
//USER
$route['admin/all_user']  						= 'admin/User/all_user';
$route['admin/view_user/(:num)']  				= 'admin/User/view_user/$1';



$route['admin/all_booking']  					= 'admin/User/all_booking';

//allorder
$route['admin/all_success_order']  					= 'admin/User/all_success_order';
$route['admin/all_failed_order']  					= 'admin/User/all_failed_order';
$route['admin/view_order/(:any)']  					= 'admin/User/view_order/$1';
//ADD PAGE
$route['admin/all_page']					= "admin/Setting/all_page";
$route['admin/add_page']					= "admin/Setting/add_page";
$route['admin/add_page/(:num)']				= "admin/Setting/add_page/$1";

//all_extra_page

$route['admin/all_extra_page']					= "admin/Setting/all_extra_page";
$route['admin/add_extra_page']					= "admin/Setting/add_extra_page";
$route['admin/add_extra_page/(:num)']			= "admin/Setting/add_extra_page/$1";

//subsriber
$route['admin/all_subscriber']					= "admin/Setting/all_subscriber";




//FRONT END URL
$route['home'] 									= 'Frontend';
$route['index'] 								= 'Frontend';
$route['about-us'] 								= 'Frontend/AboutUs';
$route['blog-details/(:any)'] 					= 'Frontend/BlogDetails/$1';
$route['blogs'] 								= 'Frontend/Blogs';
$route['pricing'] 								= 'Frontend/Pricing';
$route['cart'] 								    = 'Frontend/Cart';
$route['checkout'] 								= 'Frontend/Checkout';
$route['contact-us']							= "Frontend/ContactUs";
$route['login']							        = "Frontend/Login";
$route['signup']							    = "Frontend/Signup";
$route['templates']							    = "Frontend/Templates";
$route['albums']							    = "Frontend/Albums";
$route['privacy-policy']                         = "Frontend/ExtraPages";
$route['term-and-condtiton']                     = "Frontend/ExtraPages";
$route['refund-policy']                          = "Frontend/ExtraPages";
$route['mypdf'] 								= "Frontend/mypdf";

$route['share']							    	= "Frontend/Share";
$route['date-of-birth/(:any)']					= "DobController/DateOfBirth/$1";
$route['due-date/(:any)']						= "Frontend/DueDate/$1";

$route['db/(:any)']					            = "DobController/DateOfBirth/$1";
$route['dd/(:any)']						        = "Frontend/DueDate/$1";
$route['order-success']                         = 'Frontend/OrderSuccess';
$route['order-failed']                          = 'Frontend/OrderFailed';
$route['temp/(:any)']                           = 'Frontend/DesignTemplate/$1';

$route['email-verification/(:any)/(:any)']	    = "Frontend/EmailVerify/$1/$2";
$route['reset-password/(:any)/(:any)']          = 'Frontend/ResetPassword/$1/$2';

//user login
$route['Users']  								= "Users";
$route['Users/welcome']  						= "Users";
$route['Users/index']  						    = "Users";
$route['Users/announcement/(:any)']				= "Users/Announcement/$1";
$route['Users/preview']                         = 'Users/Preview';
$route['Users/digital-album']                   =  'Users/user_digital_album';

