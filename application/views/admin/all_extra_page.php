<?php 
	//include topbar page
	include_once('include/topbar.php');
	//delete code

?>
	
 <div class="content-wrapper">
             
            <section class="content"> 
				<div class="panel panel-primary">
					 <div class="panel panel-heading">
					 <i class="fa fa-bars"></i> <?php echo $page_title ?>
						<span class="pull-right"><a href="<?php echo base_url('admin/add_extra_page') ?>" class="btn btn-xs btn-munchkin">Add New</a></span>
                     </div>
                     <?php if ($success = $this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong><?php echo $success; ?></strong> 
                  </div>
                  <?php endif ?>

                  <?php if ($error = $this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong><?php echo $error; ?></strong> 
                  </div>
                  <?php endif ?>
					 <div class="panel-body">
						 <table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr>
								<th>Sr no</th>
								<th>Page Name</th>
                                <th>Description</th>

                                <th>Status</th>

								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
							 if(is_array($all_extra_page) || is_object($all_extra_page)){
								 $is = 1;
								 foreach($all_extra_page as $fac){ 
								 	?>
									 <tr>
								<td><?php echo $is++; ?></td>
								<td><?php if($fac->type == "privacy-policy"){ ?>
									<p>Privacy Policy</p>
								<?php } elseif($fac->type == "term-and-condtiton"){ ?>
									
									<p>Term And Condition</p>
									
								<?php }elseif($fac->type == "refund-policy"){ ?>
									
									<p>Refund Policy</p>
								
									<?php } ?>
								</td>

                                <td><?php echo $fac->description; ?></td>
                            	  
								 
								
								
								<td>
									<?php if($fac->status=="1"){ ?>
									<a class="btn btn-xs action_btn text-success" href="<?php echo base_url('admin/Setting/UpdateExtraPage/'.$fac->id) ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
								<?php }
								else{ ?>
									<a class="btn btn-xs action_btn text-danger" href="<?php echo base_url('admin/Setting/UpdateExtraPage/'.$fac->id) ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
								<?php } ?>
							</td>
							
								<td>
									<a href="<?php echo base_url('admin/add_extra_page/'.$fac->id) ?>" class="btn  btn-success"><i class="fa fa-edit"></i> </a>
                                
                               
								
									</td>
							</tr>
<?php 								 }
								 
							 }
							?>
							
							    </tbody>
						 </table>
					 </div>
					  
				</div> 
            </section>
            <!-- /.content -->
         </div>

<?php 
	//include footer page
	include_once('include/footer.php');
?>