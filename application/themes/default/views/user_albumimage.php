
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
                              
                              
                                
                                

                                
                                <div class="tab-pane fade show active" id="v-pills-milestones" role="tabpanel" aria-labelledby="v-pills-milestones-tab">
                                   <span class="title-table ">Select  Album Image</span>
                                   <span class="float-right">
                                       <a class="btn  btn-munchkin" href="<?php echo base_url('Users/album'.@$select_album->album_id); ?>"><span><i class="fas fa-eye"></i>  Preview</span></a>
                                    
                                        <a class="btn  btn-munchkin" href="<?php echo base_url('Users/album'); ?>"><span><i class="fas fa-undo-alt"></i> Back</span></a>
                                    </span><hr>
                                
                                <div class="table-responsive">
                                       <table class="table table-borderless booking-order-main-table select_album_image">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label>#</label>
                                                </td>
                                               
                                                <td>
                                                    <label> Categories</label>
                                                </td>
                                              
                                                <td>
                                                    <label>Action</label>
                                                </td>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(is_array($milestone_category) || is_object($milestone_category)){
                                                $i=1;
                                                foreach($milestone_category as $milestone_category){
                                                    $count = $this->AdminModel->AllCount("milestone",array('m_id'=>$milestone_category->id,'u_id'=>$user_id));
                                                  if($count >= 1){
                                            ?>
                                            <tr>
                                                <td>
                                                    <p ><?php echo $i++;; ?> </p>
                                                </td>
                                             
                                                <td>
                                                    <p ><?php echo $milestone_category->name; ?> </p>
                                                </td>
                                                    <td>
                                                        <p><a href="<?php echo base_url('Users/albumimg/'.$milestone_category->id); ?>">Edit </a></p>
                                                    </td>
                                            </tr>
                                            
                                        

                                            <?php }  }} ?>
                                           
                                           
                                            
                                            
                                        </tbody>
                                    </table>
                                     
                                    
                                
                                </div>
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




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" />
<script src="<?php echo base_url('assets/user.js'); ?>"></script>


<Style>
.add_miles .labels-mil {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}
.modal-open .modal-backdrop.show {
    z-index:9999;
}
.modal-open .dash-tabs:after {
    content: '';
    position: absolute;
    background: #000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    transition: opacity .15s linear;
    opacity: 0.5;
    z-index: 99999;
}
.modal-open .side-menu:after {
    content: '';
    position: absolute;
    background: #000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    transition: opacity .15s linear;
    opacity: 0.5;
    z-index: 99999;
}
.login-page .banner .form-control {
    color: #495057 !important;
    padding: .375rem .75rem !important;
    border-radius: .25rem !important;
    font-size: 1rem !important;
    width: 100% !important;
}
.dashboard-color label {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}
</Style>



