<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
    <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
			
				<div class="row">
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">	
								<div class="media align-items-center">
									<div class="media-body mr-2">
										<h2 class="text-white font-w600">67</h2>
										<span class="text-white">Total Photos</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}'>6/8</span>
										<small class="text-primary">
										<i class="flaticon-381-photo-camera" style="font-size: 30px;
    color: #ff9d52;"></i>
										</small>
										<span class="circle bg-white"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">	
								<div class="media align-items-center">
									<div class="media-body mr-2">
										<h2 class="text-white font-w600">05</h2>
										<span class="text-white">Total Albums</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}'>3/8</span>
										<small class="text-primary">
										<i class="flaticon-381-photo" style="font-size: 30px;
    color: #ff9d52;"></i>
										</small>
										<span class="circle bg-white"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">	
								<div class="media align-items-center">
									<div class="media-body mr-2">
										<h2 class="text-white font-w600">03</h2>
										<span class="text-white">Total Oders</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}'>4/8</span>
										<small class="text-primary">
											<i class="flaticon-381-briefcase" style="font-size: 30px;
    color: #ff9d52;"></i>
										</small>
										<span class="circle bg-white"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">	
								<div class="media align-items-center">
									<div class="media-body mr-2">
										<h2 class="text-white font-w600">14</h2>
										<span class="text-white">Total Messages</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}'>7/8</span>
										<small class="text-primary">
										<i class="fa fa-comments" style="font-size: 30px;
    color: #ff9d52;"></i>
										</small>
										<span class="circle bg-white"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
		<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">My Profile</h2>
                                
                                <a href="<?php echo base_url(@$genrate_link); ?>" target="_blank" class="btn btn-secondary btn-rounded">Go To Webpage</a>
                            
                            	<a href="<?php echo base_url('Users/changetheme'); ?>" target="_blank" class="btn btn-secondary btn-rounded"  >Change Theme</a>
                                
                                
                                
                            </div>
                            
                            	
                            
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="form_profile_details" method="POST" enctype='multipart/form-data'>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>First Name</label>
                                                <input type="text" id="name" name="first_name" value="<?php echo $userdetail->first_name; ?>" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" id="user" name="last_name" value="<?php echo $userdetail->last_name; ?>" class="form-control" placeholder="Last Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="mail" id="email" name="email" value="<?php echo $userdetail->email; ?>" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Phone Number</label>
                                                <input type="text" id="mob" name="number" value="<?php echo $userdetail->number; ?>" class="form-control" placeholder="Phone Number">
                                            </div>
                                            
                                            
                                            <div class="form-group col-md-6">
                                                <label>Child Name</label>
                                                <input type="text" id="chlid_name" value="<?php echo $userdetail->child_name; ?>" name="chlid_name" class="form-control" placeholder="Child Name">
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group col-md-6">
                                                <label>Upload Image</label>
                                                <?php if($userdetail->c_img){ ?>
                                                <img src="<?php echo base_url($userdetail->c_img); ?>" class="img-responsive" height="50" width="50">
                                                <?php } ?>
                                                <input type="file" name="c_img" class="form-control">
                                            </div>
                                            
                                            
                                            
                                            
                                               <div class="form-group col-md-12">
                                                <label>My Munchkin URL</label>
                                                <input type="text" class="form-control" value="<?php echo base_url(@$genrate_link); ?>" placeholder="My Munchkin URL URL">
                                            </div>
                                            
                                            
                                             <div class="form-group col-md-6">
                                                <label>Current Plan</label>
                                                <input type="text" class="form-control" value="<?php if(@$package){ echo @$package->name;}else{ echo "Free";
                                      } ?>" placeholder="Current Plan">
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group col-md-6">
                                                <label>Expiary Date</label>
                                                <input type="text" class="form-control"  value="<?php if($check_expery->expiry_date){ echo @$check_expery->expiry_date;} ?>" placeholder="Expiary Date">
                                            </div>
                                            
                                            
                                            
                                        </div>
                               
                                      
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
					
					
					
					
					
					
							<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Change Password</h2>
                                
                             
                                
                                
                                
                            </div>
                            
                            	
                            
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="changePassword" method="POST">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Current Password</label>
                                                <input type="Password" class="form-control" name="old_password" id="oldpass" placeholder="Password">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" name="new_password" id="new_pass" placeholder="New Password">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Confirm New Password</label>
                                                
                                                <input type="password" class="form-control" name="confirm_password" id="new_pass" placeholder="Confirm Password">
                                            </div>
                                            
                                            
                                            
                                        </div>
                               
                                      
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
					
				
				
				</div>
            </div>
        </div>    
        
        <script src="<?php echo base_url('assets/user.js'); ?>"></script>
        
        