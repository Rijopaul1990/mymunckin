
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
                                 
                                     
                                     <span class="title-table "> Select Album Image</span>
                                   <span class="float-right">
                                       <a class="btn  btn-munchkin" href="<?php echo base_url('Users/album'.@$select_album->album_id); ?>"><span><i class="fas fa-eye"></i>  Preview</span></a>
                                    
                                        <a class="btn  btn-munchkin" href="<?php echo base_url('Users/albumimage'); ?>"><span><i class="fas fa-undo-alt"></i> Back</span></a>
                                    </span><hr>
                                
                                <div class="table-responsive">
                                      <table class="table table-borderless booking-order-main-table select_album_image">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label>#</label>
                                                </td>
                                                <td>
                                                    <label>Image</label>
                                                </td>
                                                <td>
                                                    <label> Categories</label>
                                                </td>
                                                <td>
                                                    <label>Sort Order</label>
                                                </td>
                                                <td>
                                                    <label>Select Images for Album</label>
                                                </td>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(is_array($all_milestone) || is_object($all_milestone)){
                                                $i=1;
                                                foreach($all_milestone as $all_milestone){
                                                    //$fetch_data = $this->AdminModel->fs("milestone",array("id"=>$all_milestone->id));
                                                    $mile_cate = $this->AdminModel->fs("milestone_category",array("id"=>$all_milestone->m_id));
                                            
                                            ?>
                                            <tr>
                                                <td>
                                                    <p ><?php echo $i++;; ?> </p>
                                                </td>
                                                <td>
                                                    <img src="<?php echo base_url($all_milestone->img); ?>" class="img-fluid " alt="price1" >
                                                </td>
                                                <td>
                                                    <p ><?php echo $mile_cate->name; ?> </p>
                                                </td>
                                                <td><input type="number" value="<?php echo $all_milestone->sort_order; ?>" min=0 data-id="<?php echo $all_milestone->id; ?>" class="UpdateSortOrder "></td>
                                               <td>
                                                    <!--<?php if($all_milestone->status_for_album == 1){ ?>-->
                                                   
                                                    <!--<a href="#" class="btn  text-success UpdateForAlbum" title="Click here to hide" data-id="<?php echo $all_milestone->id; ?>"> <i class="fas fa-check"></i> </a>-->
                                                    
                                                    <!--<?php } else{ ?>-->
                                                    <!-- <a href="#" class="btn  text-danger UpdateForAlbum" title="Click here to show" data-id="<?php echo $all_milestone->id; ?>"> <i class="fas fa-times"></i> </a>-->
                                                    <!--<?php } ?>-->
                                                    
                                                    <label class="update_image">  
                                                        <input type="checkbox" data-id="<?php echo $all_milestone->id; ?>" class="UpdateForAlbum" <?php echo $all_milestone->status_for_album==1 ?'checked':' '; ?>>
                                                         <span class="btn  text-success"><i class="fas fa-check"></i></span>
                                                    </label>
                                                    
                                                    
                                                </td>
                                            </tr>
                                            
                                            
</div>

                                            <?php } } ?>
                                           
                                           
                                            
                                            
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

.select_album_image input{
    width: 50%;
    text-align: center;
    color: #4D1818;
    border-radius: 10px;
    font-size: 14px;
    background: #0393EB12;
    border: none;
    box-shadow: none;
    outline: none;
}
.select_album_image .update_image input{
    display:none;
}
.select_album_image .update_image span{
    width: 25px;
    height: 25px;
    font-size: 12px;
    border: 1px solid;
    display: inline-flex;
    align-items: center;
    justify-content: center; 
}

.select_album_image .update_image span i{
    display: none;
}
.select_album_image .update_image input:checked + span i {
  display: block;
}
</Style>



