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
						<span class="pull-right"><a href="#" class="btn btn-xs btn-munchkin">Add New</a></span>
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
								<th>Date</th>
                                <th>Email</th>
                                <th>Subscribe Type</th>
                                
                              
							</tr>
							</thead>
							<tbody>
							<?php
							 if(is_array($all_subscriber) || is_object($all_subscriber)){
								 $is = 1;
								 foreach($all_subscriber as $fac){ 
								 	?>
									 <tr>
								<td><?php echo $is++; ?></td>
								<td><?php echo $fac->add_date; ?></td>
                                <td><?php echo $fac->email; ?></td>
                                <td><?php echo $fac->type; ?></td>
                            
							
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