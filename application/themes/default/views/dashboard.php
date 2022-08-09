
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
                       
                            <div class="col-lg-9 col-md-12 dash-tabs text-left edit_dash">
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
                                  
                              <a class="nav-link edit" href="#" >Edit <i class="fas fa-edit"></i> </a>
                              <span class="title-table "> My Profile</span><hr>
                              <span class="text-right">
                                <a href="<?php echo base_url(@$genrate_link); ?>" target="_blank" class="btn  btn-munchkin"><span>Go to webpage</span></a>
                                </span>
                                  <span class="text-right">
                                <a href="<?php echo base_url('Users/changetheme'); ?>" target="_blank" class="btn  btn-munchkin"><span>Change Theme </span></a>
                                </span>
                                <form id="form_profile_details" method="POST" enctype='multipart/form-data'>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="name">First Name</label>
                                      <input type="text" class="form-control" id="name" name="first_name" value="<?php echo $userdetail->first_name; ?>" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="user">Last Name</label>
                                      <input type="text" class="form-control" id="user" name="last_name" value="<?php echo $userdetail->last_name; ?>" placeholder="Username">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="email">Email address</label>
                                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $userdetail->email; ?>" placeholder="Email" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="mob">Mobile no.</label>
                                      <input type="number" class="form-control" id="mob" name="number" value="<?php echo $userdetail->number; ?>" placeholder="Mobile no." >
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="pass">Child Name</label>
                                      <input type="text" class="form-control" id="chlid_name" value="<?php echo $userdetail->child_name; ?>" name="chlid_name" placeholder="Child Name">
                                    </div>
                                     <div class="form-group col-md-6">
                                      <label for="pass">Child Image</label>
                                      <?php if($userdetail->c_img){ ?>
                                      <img src="<?php echo base_url($userdetail->c_img); ?>" class="img-responsive" height="50" width="50">
                                      <?php } ?>
                                      <input type="file" name="c_img" class="form-control">
                                    
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="url">MyMunchkin URL</label>
                                      <input type="text" class="form-control" value="<?php echo base_url(@$genrate_link); ?>" placeholder="MyMunchkin URL" readonly>
                                    </div>
                                  </div>
                                  
                                  <div class="form-row plan">
                                    <div class="form-group col-md-6">
                                      <label for="plan">Current Plan</label>
                                      <input type="text" class="form-control"   value="<?php if(@$package){ echo @$package->name;}else{ echo "Free";
                                      } ?>" placeholder="Plan" readonly>
                                    </div>
                                   
                                    <div class="form-group col-md-6">
                                      <label for="plan">Expiry Date</label>
                                      <input type="text" class="form-control"   value="<?php if($check_expery->expiry_date){ echo @$check_expery->expiry_date;} ?>" placeholder="Expiry Date" readonly>
                                    </div>
                                    <?php if($check_expery->due_date){ ?>
                                      <div class="form-group col-md-6">
                                      <label for="plan">Date Of Birth</label>
                                      <input type="month" class="form-control" name="dob"   value="" placeholder="Date Of Birth" >
                                    </div>
                                    <?php } ?>
                                      <!--<label for="plan"></label>-->
                                      <!--<input type="text" class="form-control" id="plan" value="Premium" readonly>--> 
                                      <div class="form-group col-md-6">
                                      <label></label>
                                        <button type="submit" class="btn btn-munchkin d-block"><span>SAVE CHANGES1</span></button>
                                    </div>
                                  </div>
                                </form>
                                 <span class="title-table "> Change Password</span><hr>
                                <form id="changePassword" method="POST">
                                     <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="pass">Old Password</label>
                                      <input type="Password" class="form-control" name="old_password" id="oldpass" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label for="url">New Password</label>
                                      <input type="password" class="form-control" name="new_password" id="new_pass" placeholder="New Password">
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                      <label for="url">Confirm Password</label>
                                      <input type="password" class="form-control" name="confirm_password" id="new_pass" placeholder="Confirm Password">
                                    </div>
                                  </div> 
                                  <button type="submit" class="btn btn-munchkin "><span>Change Password</span></button>
                                </form>
                              </div>
                              
                                
                                <div class="tab-pane fade" id="v-pills-album" role="tabpanel" aria-labelledby="v-pills-album-tab">
                                   <span class="title-table ">  My Albums</span><hr>
                                   <form>
                                      <table class="table table-borderless booking-order-main-table">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label>Album</label>
                                                </td>
                                                <!--<td>-->
                                                <!--    <label> Category</label>-->
                                                <!--</td>-->
                                                <!--<td width="40%">-->
                                                <!--    <label> URL</label>-->
                                                <!--</td>-->
                                                <td>
                                                    <label> Date</label>
                                                </td>
                                                <td >
                                                    <label>Preview</label>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/design4.png" class="img-fluid " alt="price1" >
                                                </td>
                                                <!--<td>-->
                                                <!--    <p>New Born</p>-->
                                                <!--</td>-->
                                                <!--<td>-->
                                                <!--    <p style="line-height:1.5;"><a href="#">http://cyberworx.co.in/mymunchkin_new/due-date/kartik</a></p>-->
                                                <!--</td>-->
                                                <td>
                                                    <p >March 14, 2021 </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success"><i class="fas fa-eye"></i> </a>
                                                    <!--<span class="badge badge-warning p-2">Pending</span>-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/design2.png" class="img-fluid " alt="price1" >
                                                </td>
                                                <td>
                                                    <p >March 14, 2021 </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success"> <i class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/design3.png" class="img-fluid " alt="price1" >
                                                </td>
                                                <td>
                                                    <p >March 14, 2021 </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success"> <i class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/design4.png" class="img-fluid " alt="price1" >
                                                </td>
                                                <td>
                                                    <p >March 14, 2021 </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success"> <i class="fas fa-eye"></i> </a>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                     
                                    </form>
                                
                                </div>

                                <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                                   <span class="title-table ">  My Order</span><hr>
                                   <form>
                                      <table class="table table-borderless booking-order-main-table">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label>S.no</label>
                                                </td>
                                              
                                                <td>
                                                    <label> Date</label>
                                                </td>
                                               
                                                <td >
                                                    <label>Order Id</label>
                                                </td>
                                                 <td>
                                                    <label>Transction Id</label>
                                                </td>
                                                <td>
                                                    <label>Amount</label>
                                                </td>
                                                <td>
                                                  <label>View</label>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          if(is_array($all_order) || is_object($all_order)){
                                            $i =1;
                                            foreach ($all_order as $all_order) {
                                               $date = date_create($all_order->add_date);

                                             
                                          ?>
                                            <tr>
                                                <td>
                                                  <p><?php echo $i++; ?></p>
                                                    
                                                </td>
                                               
                                                <td>
                                                    <p> <?php  echo date_format($date,"d M Y");; ?> </p>
                                                </td>
                                               
                                                <td>
                                                     <p> <?php echo $all_order->order_id; ?> </p>
                                                </td>
                                                <td>
                                                     <p> <?php echo $all_order->transction_id; ?> </p>
                                                </td>
                                                <td>
                                                   <p> <?php echo $all_order->total; ?> </p>
                                                   
                                                    <!--<span class="badge badge-warning p-2">Pending</span>-->
                                                </td>
                                                <td>
                                                   <a href="<?php echo base_url('Users/order-details/'.$all_order->order_id); ?>" class="btn  text-success"><i class="fas fa-eye"></i> </a>
                                                </td>
                                            </tr>
                                            <?php 
                                            }
                                          }
                                          ?>
                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                     
                                    </form>
                                
                                </div>
                                <div class="tab-pane fade" id="v-pills-milestones" role="tabpanel" aria-labelledby="v-pills-milestones-tab">
                                   <span class="title-table ">  Milestones</span>
                                   <span class="float-right">
                                        <a class="btn  btn-munchkin" data-toggle="modal" data-target="#add_miles"><span><i class="fas fa-plus"></i> Add New</span></a>
                                    </span><hr>
                                   <form>
                                      <table class="table table-borderless booking-order-main-table">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label>Templates</label>
                                                </td>
                                                <td>
                                                    <label> Categories</label>
                                                </td>
                                                <td >
                                                    <label>Action</label>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/design4.png" class="img-fluid " alt="price1" >
                                                </td>
                                                <td>
                                                    <p >Invitation </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success" data-toggle="modal" data-target="#edit_miles"><i class="fas fa-pen"></i> </a>
                                                    <a href="#" class="btn text-danger"> <i class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/design2.png" class="img-fluid " alt="price1" >
                                                </td>
                                                <td>
                                                    <p >New Born </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success" data-toggle="modal" data-target="#edit_miles"><i class="fas fa-pen"></i> </a>
                                                    <a href="#" class="btn text-danger"> <i class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/design3.png" class="img-fluid " alt="price1" >
                                                </td>
                                                <td>
                                                    <p >Baby Girl </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success" data-toggle="modal" data-target="#edit_miles"><i class="fas fa-pen"></i> </a>
                                                    <a href="#" class="btn text-danger"> <i class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/design4.png" class="img-fluid " alt="price1" >
                                                </td>
                                                <td>
                                                    <p >Baby Boy </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success" data-toggle="modal" data-target="#edit_miles"><i class="fas fa-pen"></i> </a>
                                                    <a href="#" class="btn text-danger"> <i class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                     
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
<div class="modal fade " id="edit_miles" tabindex="-1" role="dialog" aria-labelledby="add_milesTitle" aria-hidden="true" style=" z-index: 99999999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Milestones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <form id="form_profile_details" method="POST">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label class="labels-mil">Milestones Name</label>
                    <select class="form-control">
                        <option>New Born</option>
                        <option>Baby Girl</option>
                        <option>Baby Boy</option>
                        <option>Announcement</option>
                    </select>
                  <!--<input type="text" class="form-control" id="name" name="first_name" value="Test" placeholder="Name">-->
                </div>
                <div class="form-group col-md-12">
                  <label class="labels-mil">Add Templates</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" >
                    <label class="custom-file-label" >Choose file</label>
                  </div>
                  <!--<input type="text" class="form-control" id="user" name="last_name" value="test" placeholder="Username">-->
                </div>
              </div>
              <button type="submit" class="btn btn-munchkin "><span>Save</span></button>
            </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade " id="add_miles" tabindex="-1" role="dialog" aria-labelledby="add_milesTitle" aria-hidden="true" style=" z-index: 99999999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Milestones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <form id="form_add_milestone" method="POST">
              <div class="form-row">
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
                  <label class="labels-mil">Add Image</label>
                  <div class="custom-file">
                    <input type="file" name="img" class="custom-file-input" >
                    <label class="custom-file-label" >Choose file</label>
                  </div>
                  <!--<input type="text" class="form-control" id="user" name="last_name" value="test" placeholder="Username">-->
                </div>
              </div>
              <button type="submit" class="btn btn-munchkin "><span>Add</span></button>
            </form>
      </div>
    </div>
  </div>
</div>


<?php 
if(strtotime($current_date) >= strtotime($check_expery->expiry_date)){
       
      
?>

<!-- Modal -->
<div class="modal fade" id="try_expire" tabindex="-1" role="dialog" aria-labelledby="try_expire" aria-hidden="true" style="z-index: 99999999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Welcome Back</h5>
      </div>
      <div class="modal-body">
         
          <?php if($all_order){ ?>
          <p class="">Enjoying MyMunchkin, dear customer your trial has expired</p>
          <?php } else{ ?>
          <p> Enjoying MyMunchkin, dear customer your trial is expiring on <?php echo $check_expery->expiry_date; ?> .</p>
          <?php } ?>
          <br> <br>
      <div >
        <a  href="<?php echo base_url('pricing'); ?>" class="btn btn-munchkin "><span>Buy Package Now</span></a>
       <?php if(count($all_order) < 1){ ?>
        <a  href="<?php echo base_url(); ?>" class="btn btn-munchkin "><span>Continue</span></a>
        <?php } ?>
        </div></div>
    </div>
  </div>
</div>
<?php } ?>

<script src="<?php echo base_url('assets/user.js'); ?>"></script>
<script>

$(window).on('load', function() {
    $('#try_expire').modal('show');
});
$('#try_expire').modal({
    backdrop: 'static',
    keyboard: false
})

</script>

<Style>
.add_miles .labels-mil {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}
</Style>

