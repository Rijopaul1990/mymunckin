
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 
<style>
     .btn-munchkin{
        margin-bottom :15px !important;
    } 

    .notavailable{
        color:red !important;
    }
   
 div#res_data {
    position: absolute;
    right: 12%;
    top: 50%;
    transform: translateY(-45%);
}
div#res_data .fa-check-circle {
    color: #28a745!important;
}
#new_url{
    color: #4b1616;
}

ul#social_share li {
    display: inline-block;
    margin: 0 5px;
}

ul#social_share a {
    text-decoration: none;
    color: #fff;
    border-radius: 50%;
    justify-content: center;
    align-items: center;
    
    width: 35px;
    height: 35px;
    display: flex;
    font-size: 18px
    
}

ul#social_share a.fb {
    background: #3b5998;
}


ul#social_share a.wt {
    background: #25D366;
}

ul#social_share a.tw {
    background: #00acee;
}
</style>
<main class="login-page dashboard" >   


<?php include_once('banner_dashboard.php'); ?>

    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">



    <section class="banner" id="price">
        <div class="background-icons4">
            <!--<img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/>-->
            <!--<img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>-->
                        <img src="<?php echo base_url('assets/'); ?>img/icons/price1.svg" class="img-fluid price1" alt="price1" >
                        <img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid price2" alt="price2">
                        <img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                        <button class="navbar-toggler show-side " type="button">
                            <span class="fa fa-bars "></span>
                            <span class="fa fa-times " style="display:none"></span>
                        </button>  
                     <div class="row">
                        
                          <?php include_once('user_sidebar.php'); ?>
                       
                            <div class="col-lg-9 col-md-12 dash-tabs text-left ">
                                <?php if ($success = $this->session->flashdata('success')): ?>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong><?php echo $success; ?></strong> </a>
							</div>
						<?php endif ?>

						<?php if ($error = $this->session->flashdata('error')): ?>
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong><?php echo $error; ?></strong> </a>
							</div>
						<?php endif ?>
                            <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                  
                            
                                 <span class="title-table "> Update/Share Webpage </span><hr>
                                 <span class="text-right">
                                <a href="<?php echo base_url(@$genrate_link); ?>" target="_blank" class="btn  btn-munchkin"><span>Go to webpage</span></a>
                                </span>
                                <form id="changePassword" method="POST">
                                     <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="pass">Current Webpage</label>
                                      <input type="test" class="form-control" value="<?php echo base_url(@$genrate_link); ?>"  placeholder="" readonly>
                                    </div>
                                   <?php if($check_this_url->due_date){ ?>
                                    <div class="form-group col-md-12">
                                      <label for="url" >Update your Webpage</label>
                                      <div class="position-relative">
                                      <input type="text" class="form-control " name="name"  id="forurl" placeholder="Enter your baby name" title="You can use your Child’s name as your webpage name">
                                       <div id="res_data">
                                       
                                        </div>
                                        </div>
                                        
                                        <span id="new_url"></span>
                                    </div>
                                    <?php } ?>

                                  </div> 
                                   <?php if($check_this_url->due_date){ ?>
                                  <button type="button" id="btn_submit_generate_url" class="btn btn-munchkin "><span>Submit</span></button>
                                   <?php } ?>
                                    <button type="button" class="btn btn-munchkin" id="btn_share"><span>SHARE</span></button>
                                     <ul id="social_share" style="display:none;">
                    <li>
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url($genrate_link); ?>" target="_blank" class="fb"><i class="fab fa-facebook"></i></a>
                    </li>
                   
                       <li>
                        <a href="https://api.whatsapp.com/send?phone=&text=<?php echo base_url($genrate_link); ?>" target="_blank" class="wt"><i class="fab fa-whatsapp"></i></a>
                    </li>
                   
                       <li>
                        <a href="http://twitter.com/share?url=<?php echo base_url($genrate_link); ?>&text=My Munchkin &hashtags=My_Munchkin" target="_blank" class="tw"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
                                </form>

                              </div>
                              
                               
                                
                            </div>

                      
                            
                            </div>
                        </div>
                </div>
            </div>	
        </div>
    </secction>
    
    





    
</main>
<?php include("include/footer.php") ?>

<script src="<?php echo base_url('assets/user.js'); ?>"></script>
<script>
   $(document).on("click","#btn_share",function(){
       $("#social_share").show();
   });
</script>

<Style>
.add_miles .labels-mil {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}
</Style>

