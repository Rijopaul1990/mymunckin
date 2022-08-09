<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
			
				<div class="row">
					
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Messages </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                               
                                                <th>Sl NO.</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Comment</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($all_comments) || is_object($all_comments)){
                                                foreach($all_comments as $key => $all_comments){
                                            ?>
                                            <tr>
                                               
                                                <td><strong><?=++$key;?></strong></td>
                                                <td><div class="d-flex align-items-center">
                                                <?php if($all_comments->img){ ?>
                                                    <img style="width:200px;" src="<?php echo base_url($all_comments->img); ?>" class="img-fluid " alt="price1" >
                                                    <?php } else{ ?>
                                                    <img style="width:200px;" src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-fluid " alt="price1" >
                                                    <?php } ?>
                                               </div></td>
                                                 <td><div class="d-flex align-items-center"> <span class="w-space-no"><?php echo $all_comments->name; ?></span></div></td>
                                                <td><a href="#"><?php echo $all_comments->email; ?></a>	</td>
                                                <td><?php echo $all_comments->comment; ?></td>
                                              
                                                <td>
													<div class="d-flex">
                                                    <?php if($all_comments->status == 1){ ?>
                                                   
                                                   <a href="<?php echo base_url('Users/UpdateCommentStatus/'.$all_comments->id); ?>" class="btn  text-danger action_btn"> <i class="fa fa-times"></i> </a>
                                                   
                                                   <?php } else{ ?>
                                                    <a href="<?php echo base_url('Users/UpdateCommentStatus/'.$all_comments->id); ?>" class="btn  text-success action_btn"> <i class="fa fa-check"></i> </a>
                                                   <?php } ?>
                                                   <a href="<?php echo base_url('Users/DeleteComment/'.$all_comments->id); ?>" class="btn text-danger"> <i class="fa fa-trash"></i> </a>
													</div>
												</td>
                                            </tr>
										      
                                           
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
        <!--**********************************
            Content body end
        ***********************************-->