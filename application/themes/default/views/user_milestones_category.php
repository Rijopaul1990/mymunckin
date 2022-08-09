
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
                                   <span class="title-table ">  Milestones Category</span>
                                   <span class="float-right">
                                        <a class="btn  btn-munchkin" data-toggle="modal" data-target="#add_miles"><span><i class="fas fa-plus"></i> Add Milestone Pictures </span></a>
                                    </span><hr>
                                <div class="table-responsive">
                                      <table class="table table-borderless booking-order-main-table ">
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
                                                foreach($milestone_category as $mile_cate){
                                                 $count = $this->AdminModel->AllCount("milestone",array('m_id'=>$mile_cate->id,'u_id'=>$user_id));
                                                 if($count >= 1){
                                            ?>
                                            <tr>
                                                
                                                <td>
                                                    <p ><?php echo  $i++; ?> </p>
                                                </td>
                                                  <td>
                                                    <p ><?php echo $mile_cate->name; ?> </p>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('Users/milestones/'.$mile_cate->id) ?>" class="btn  text-primary" >View </a>
                                                
                                                </td>
                                            </tr>
                                            
                                
                                            <?php } } } ?>
                                           
                                           
                                            
                                            
                                        </tbody>
                                    </table></div>
                                     
                                    
                                
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
<div class="modal fade dashboard-color" id="add_miles" tabindex="-1" role="dialog" aria-labelledby="add_milesTitle" aria-hidden="true" style=" z-index: 99999999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Milestone Pictures</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <form id="form_add_milestone" method="POST">
              <div class="form-row ">
                <div class="form-group col-md-12">
                  <label class="labels-mil">Milestones Name</label>
                    <select class="form-control" name="m_id">
                        <option value="">Select Milestone</option>
                        <?php foreach($milestone_category as $m_c){ ?>
                        <option value="<?php echo $m_c->id; ?>"><?php echo $m_c->name; ?></option>
                        <?php } ?>
                        
                    </select>
                  <!--<input type="text" class="form-control" id="name" name="first_name" value="Test" placeholder="Name">-->
                </div>
                <div class="form-group col-md-12">
                  <label class="labels-mil">Add Image (You can Upload Multiple files (Max:50 images Per Milestones))</label>
                  <div class="custom-file">
                    <input type="file" name="img[]" class="custom-file-input" multiple required>
                    <label class="custom-file-label">Choose file</label>
                  </div>
                  
                  <label class="labels-mil">Note: Only JPG, JPEG, PNG Format Allowed </label>
                  <!--<input type="text" class="form-control" id="user" name="last_name" value="test" placeholder="Username">-->
                </div>
              </div>
              <button type="submit" class="btn btn-munchkin "><span>Add</span></button>
            </form>
      </div>
    </div>
  </div>
</div>




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



