<div class="content-body" style="min-height: 788px;">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
			
				<div class="row">







 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Milestone Categories</h4>
                                	<a href="javascript:void(0)" class="btn btn-secondary btn-rounded" data-toggle="modal" data-target="#addOrderModalside">+Add Milestone Pictures</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Categories</th>
                                                <th>Action</th>
                                             
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
                                                <th><?php echo  $i++; ?></th>
                                                <td><?php echo $mile_cate->name; ?></td>
                                                <td><a href="<?php echo base_url('Users/milestones/'.$mile_cate->id) ?>"><span class="badge badge-danger">View</span></a>
                                                </td>
                                               
                                            </tr>
                                            <?php } } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
               		</div>
            </div>
        </div>