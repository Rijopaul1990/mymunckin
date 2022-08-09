
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 
<style>
     .btn-munchkin{
        margin-bottom :15px !important;
    } 
</style>
<main class="login-page dashboard" >
<?php include_once('banner_dashboard.php'); ?>
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">

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
                
                <div class="col-md-12 text-center">
                        <button class="navbar-toggler show-side " type="button">
                            <span class="fa fa-bars "></span>
                            <span class="fa fa-times " style="display:none"></span>
                        </button>  
                     <div class="row">
                        
                          <?php include_once('user_sidebar.php'); ?>
                       
                            <div class="col-lg-9 col-md-12 dash-tabs text-left">
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
                              
                              
                                <div class="tab-pane fade show active" id="v-pills-comment" role="tabpanel" aria-labelledby="v-pills-comment-tab">
                                 <span class="title-table ">   Messages</span><hr>
                                    <form>
                                      
                                <div class="table-responsive">
                                      <table class="table table-borderless booking-order-main-table ">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label>Photo</label>
                                                </td>
                                                <td>
                                                    <label>Name</label>
                                                </td>
                                                <td>
                                                    <label> Email</label>
                                                </td>
                                                <td>
                                                    <label> Comment</label>
                                                </td>
                                                <td width="15%">
                                                    <label>Action</label>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($all_comments) || is_object($all_comments)){
                                                foreach($all_comments as $all_comments){
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php if($all_comments->img){ ?>
                                                    <img src="<?php echo base_url($all_comments->img); ?>" class="img-fluid " alt="price1" >
                                                    <?php } else{ ?>
                                                    <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-fluid " alt="price1" >
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <p><?php echo $all_comments->name; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $all_comments->email; ?></p>
                                                </td>
                                                <td>
                                                    <p style="line-height:1.5;"><?php echo $all_comments->comment; ?></p>
                                                </td>
                                                <td>
                                                    <?php if($all_comments->status == 1){ ?>
                                                   
                                                    <a href="<?php echo base_url('Users/UpdateCommentStatus/'.$all_comments->id); ?>" class="btn  text-danger action_btn"> <i class="fas fa-times"></i> </a>
                                                    
                                                    <?php } else{ ?>
                                                     <a href="<?php echo base_url('Users/UpdateCommentStatus/'.$all_comments->id); ?>" class="btn  text-success action_btn"> <i class="fas fa-check"></i> </a>
                                                    <?php } ?>
                                                    <a href="<?php echo base_url('Users/DeleteComment/'.$all_comments->id); ?>" class="btn text-danger"> <i class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                            <?php } } ?>
                                            
                                           
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                                     
                                  <!--<button type="submit" class="btn btn-munchkin "><span>SAVE CHANGES</span></button>-->
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


<!-- Modal -->



<!-- Modal -->



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" />
<script src="<?php echo base_url('assets/user.js'); ?>"></script>


<Style>
.add_miles .labels-mil {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}

.action_btn {
    width: 35px;
    height: 35px;
    font-size: 14px;
    border: 1px solid;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
</Style>

