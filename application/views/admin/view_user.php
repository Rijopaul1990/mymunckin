<?php 
	//include topbar page
	include_once('include/topbar.php');
	
	
?>
	
 <div class="content-wrapper">
             
            <section class="content">
				<form action="" method="post" enctype="multipart/form-data">
				<div class="panel panel-success">
					 <div class="panel panel-heading">
						<i class="fa fa-users"></i> View User
						<span class="pull-right"><a href="<?php echo base_url('admin/all_user') ?>" class="btn btn-xs btn-danger"><i class="fa fa-reply" aria-hidden="true"></i>
 Back</a></span>
					</div>
					 <div class="panel-body">
						<div class="row">
							
						   <div class="col-sm-4">
								<div class="form-group">
									<label for="">First Name</label>
									<p><?php echo @$c_fsd->first_name; ?></p>
								
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="">Last Name</label>
								<p><?php echo @$c_fsd->last_name; ?></p>
								</div>
							</div>
							
							
							 <div class="col-sm-4">
								<div class="form-group">
									<label for="">Email</label>
									<p><?php echo @$c_fsd->email; ?></p>
								
								</div>
							</div>
							 <div class="col-sm-4">
								<div class="form-group">
									<label for="">Number</label>
								<p><?php echo @$c_fsd->number; ?></p>
								</div>
							</div>
						
							
						
						</div>
					 </div>
					 
				</div>
				</form>
            </section>
            <!-- /.content -->
         </div>

<?php 
	//include footer page
	include_once('include/footer.php');
?>