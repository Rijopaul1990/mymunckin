<div class="content-body" style="min-height: 788px;">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
			
				<div class="row">






<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" />
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Milestone Categories</h4>
                                	<a href="javascript:void(0)" class="btn btn-secondary btn-rounded" data-toggle="modal" data-target="#add_miles">+Add Milestone Pictures</a>
                                	
                                	
                                		<a href="javascript:void(0)" class="btn btn-secondary btn-rounded" id="RemoveMulitpleMilestone">-Delete Milestone Pictures</a>
                                	
                                	
                                	
                                	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Pictures</th>
                                                <th>Action</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            if(is_array($all_milestone) || is_object($all_milestone)){
                                                foreach($all_milestone as $all_milestone){
                                                    $fetch_data = $this->AdminModel->fs("milestone",array("id"=>$all_milestone->id));
                                                    $mile_cate = $this->AdminModel->fs("milestone_category",array("id"=>$all_milestone->m_id));
                                            
                                            ?>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" name="milestone[]" class="tem-picture" value="<?php echo $all_milestone->id; ?>">
                                                        <span class="btn  text-success"></i></span>
										            </div>
                                                    <!-- <label class="update_image select_mill_pic">  
                                                        <input type="checkbox" name="milestone[]" class="tem-picture" value="<?php echo $all_milestone->id; ?>">
                                                        <span class="btn  text-success"><i class="fas fa-check"></i></span>
                                                    </label> -->
                                                </th>
                                                   <td><div class="d-flex align-items-center"><img style="width: 200px;" src="<?php echo base_url($all_milestone->img); ?>" class="rounded-lg mr-2"> </div></td>
                                                <td>
                                                    <!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#editOrderModalside">
                                                        <span class="badge badge-danger">Edit Picture</span>
                                                    </a> -->
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#edit_miles<?php echo $all_milestone->id; ?>"><span class="badge badge-danger">Edit Picture</span></a>
                                                </td>
                                               
                                            </tr>
                                            <div class="modal fade" id="edit_miles<?php echo $all_milestone->id; ?>" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Milestone Pictures</h5>
								<button type="button" class="close" data-dismiss="modal"><span>×</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="form_edit_profile_details" method="POST">
                                    <input type="hidden" name="id" value="<?php echo @$fetch_data->id; ?>">
									<div class="form-group">
										<label class="text-black font-w500">Milestone Name</label>
										<select class="form-control" name="m_id">
                                        <option value="">Select Milestone</option>
                                    <?php foreach($milestone_category as $m_c){ 
                                    if($m_c->id == @$fetch_data->m_id){
                                    
                                    ?>
                                    <option value="<?php echo $m_c->id; ?>" selected><?php echo $m_c->name; ?></option>
                                    <?php } else{ ?>
                                    <option value="<?php echo $m_c->id; ?>" ><?php echo $m_c->name; ?></option>
                                    <?php } } ?>
										                   
										                        
										    </select>
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Add Templates </label>
                                            <img src="<?php echo base_url($fetch_data->img); ?>" class="rounded-lg mr-2" width="24" alt="">
										<input type="file" name="img" class="form-control">
										<label class="text-black font-w500">Note:Only JPG, JPEG,PNG Format allowed </label>
									</div>
									
									
											<div class="form-group">
										<label class="text-black font-w500">Milestone Description </label>
										<input type="text" id="name" name="description" value="<?php echo $fetch_data->heading; ?>" class="form-control" placeholder="A Smile is happiness you'll find right under your nose
										">
									
									</div>
									
									
									
								
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
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
        <div class="modal fade" id="add_miles">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Milestone Pictures</h5>
								<button type="button" class="close" data-dismiss="modal"><span>×</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="form_add_milestone" method="POST">
									<div class="form-group">
										<label class="text-black font-w500">Milestone Name</label>
										<select class="form-control" name="m_id">
										    <option>Choose Milestone</option>
                                            <?php foreach($milestone_category as $m_c){ ?>
                        <option value="<?php echo $m_c->id; ?>"><?php echo $m_c->name; ?></option>
                        <?php } ?>
										                   
										                        
										    </select>
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Add Image(You Can Upload Multiple Files(Max 50 Images Per Milestones)</label>
										<!-- <input type="file" name="img[]" class="custom-file-input" multiple required> -->
                                        <input type="file" name="img[]" class="form-control" multiple required>
									</div>
								
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                