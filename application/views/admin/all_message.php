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
						<span class="pull-right"><a href="<?php echo base_url('admin/add_message') ?>" class="btn btn-xs btn-munchkin">Add New</a></span>
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
								 <th>Heading</th>
								 <th>Short Description</th>
                                <th>Description</th>
                                <th>Image</th>
                                
                                <th>Status</th>
                               
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
							 if(is_array($all_message) || is_object($all_message)){
								 $is = 1;
								 foreach($all_message as $fac){ 
								 	?>
									 <tr>
								<td><?php echo $is++; ?></td>
								
                                <td><?php echo $fac->name; ?></td>
                               	 <td><?php echo $fac->short_description; ?></td>
                               	  <td><?php echo $fac->description; ?></td>
                                 <td><?php if($fac->img){ ?>
									<img src="<?php echo base_url($fac->img); ?>" width="100" height="50">
								<?php } else{ ?>
									
									<img src="<?php echo base_url('assets/no_img.png'); ?>" width="100" height="50">
									
								<?php } ?>
								</td>
                            
								<td><?php if($fac->status=="1"){ ?>
									<a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/About/UpdateMessage/'.$fac->id) ?>">Show</a>
								<?php }
								else{ ?>
									<a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/About/UpdateMessage/'.$fac->id) ?>">Hide</a>
								<?php } ?></td>
								
								
                                
								<td>
                                <a href="<?php echo base_url('admin/add_message/'.$fac->id) ?>" class="btn  btn-success"><i class="fa fa-edit"></i> </a>
                              	   	<a href="<?php echo base_url('admin/About/DeleteMessage/'.$fac->id) ?>" class=""><button class="btn  btn-danger" onclick="return confirm('You Want To Delete??');"><i class="fa fa-trash"></i> </button></a>
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