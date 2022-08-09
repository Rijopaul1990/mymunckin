<?php 
include_once('include/topbar.php');
?>

<div class="content-wrapper">

	<section class="content">

		<?php echo form_open_multipart($form_action); ?>
		<div class="panel panel-success">
			<div class="panel panel-heading">
				<i class="fa fa-users"></i> <?php echo $page_title; ?>
				<span class="pull-right"><a href="<?php echo base_url('admin/all_page/') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
				Back</a></span>
			</div>
			<?php if ($success = $this->session->flashdata('success')): ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong><?php echo $success; ?></strong> </a>
				</div>
			<?php endif ?>

			<?php if ($error = $this->session->flashdata('error')): ?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong><?php echo $error; ?></strong> </a>
				</div>
			<?php endif ?>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for=""> Page Type </label>
							<select name="type" class="form-control">
								<option value="">Select Page Type</option>
								<?php 

									foreach ($page_type as $key=> $value) { 
										if($type == $key){
											?>
											<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
										<?php } else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
										<?php }
									
								}

								?>
							</select>
						</div>
						<span><?php echo form_error('c_id'); ?></span>
					</div>
					
				
					<div class="col-sm-12">
						<div class="form-group">
							<label for="">  Description </label>
							
							<textarea class="form-control" name="description" id="editor1"><?php echo @$description; ?></textarea>
						</div>
						<span><?php echo form_error('description'); ?></span>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<input type="submit" value="Submit" name="form_submit" class="btn btn-munchkin" />
			</div>
		</div>
	</form>
</section>
<!-- /.content -->
</div>

<?php 
	//include footer page
include_once('include/footer.php');
?>v