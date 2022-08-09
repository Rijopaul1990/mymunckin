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
						<!-- <span class="pull-right"><a href="<?php echo base_url('admin/add_menu') ?>" class="btn btn-xs btn-munchkin">Add New</a></span> -->
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
								<th>Menu</th>
                                <th>Sort Order</th>
                                <th>Banner Heading</th>
                                <th>Banner Image</th>
                                <th>Status</th>
                               	
                                 <th>Status For Footer</th> 
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
							 if(is_array($all_menu) || is_object($all_menu)){
								 $is = 1;
								 foreach($all_menu as $fac){ 
								 	?>
									 <tr>
								<td><?php echo $is++; ?></td>
								<td><?php echo $fac->name; ?></td>

                                <td><?php echo $fac->sort_order; ?></td>
                                <td><?php echo $fac->banner_heading; ?></td>
                                <td><?php if($fac->banner_img){ ?>
									<img src="<?php echo base_url($fac->banner_img); ?>" width="100" height="50">
								<?php } else{ ?>
									
									<img src="<?php echo base_url('assets/no_img.png'); ?>" width="100" height="50">
									
								<?php } ?>
								</td>
								<td><?php if($fac->status=="1"){ ?>
									<a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/Menu/UpdateMenu/'.$fac->id) ?>">Show</a>
								<?php }
								else{ ?>
									<a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/Menu/UpdateMenu/'.$fac->id) ?>">Hide</a>
								<?php } ?></td>
								
									

								
                                 <td><?php if($fac->status_for_footer=="1"){ ?>
									<a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/Menu/UpdateFooterMenu/'.$fac->id) ?>">Show</a>
								<?php }
								else{ ?>
									<a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/Menu/UpdateFooterMenu/'.$fac->id) ?>">Hide</a>
								<?php } ?>
							</td> 
								<td><a href="<?php echo base_url('admin/add_menu/'.$fac->id) ?>" class="btn  btn-success"><i class="fa fa-edit"></i> </a>
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