<?php 
	//include topbar page
	include_once('include/topbar.php');
	
	 
?>
	
 <div class="content-wrapper">
             
            <section class="content">
			<div class="row">
			
				<div class="col-sm-4">
				<div class="panel panel-success">
					 <div class="panel panel-heading">
						<i class="fa fa-key"></i> Change Password
					 </div>
					 <div class="panel-body">
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
					<form action="<?php echo base_url("admin/Setting/ChangePassword"); ?>" method="POST">
				<div class="form-group"> 
							<input type="password" placeholder="Old Password" name="old_password" class="form-control">
							  <span><?php echo form_error('old_password'); ?></span>
						</div>
						<div class="form-group"> 
							<input type="password" placeholder="New Password" name="new_pass" class="form-control">
							  <span><?php echo form_error('new_pass'); ?></span>
						</div>
						<div class="form-group"> 
							<input type="password" placeholder="Confirm Password" name="new_confirm_pass" class="form-control">
							  <span><?php echo form_error('new_confirm_pass'); ?></span>
						</div>
					 
					<button type="submit" name="send_message_btn" class="btn btn-munchkin btn-block">
							Chagne Password
					</button>
                </form>
				</div>
				</div>
				
				
				</div>
            </section>
            <!-- /.content -->
         </div>

<?php 
	//include footer page
	include_once('include/footer.php');
?>