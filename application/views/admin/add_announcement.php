<?php 
include_once('include/topbar.php');
?>

<div class="content-wrapper">

	<section class="content">

		<?php echo form_open_multipart($form_action); ?>
		<div class="panel panel-success">
			<div class="panel panel-heading">
				<i class="fa fa-users"></i> <?php echo $page_title; ?>
				<span class="pull-right"><a href="<?php echo base_url('admin/all_announcement/') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
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
							<label for=""> Category </label>
							<select name="c_id" class="form-control">
								<option value="">Select Category</option>
								<?php if(is_array($all_template_category) || is_object($all_template_category)){ 
									foreach ($all_template_category as $all_template_category) { 
										if($c_id == $all_template_category->id){
											?>
											<option value="<?php echo $all_template_category->id; ?>" selected><?php echo $all_template_category->name; ?></option>
										<?php } else{ ?>
											<option value="<?php echo $all_template_category->id; ?>"><?php echo $all_template_category->name; ?></option>
										<?php }
									}
								}

								?>
							</select>
						</div>
						<span><?php echo form_error('c_id'); ?></span>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for=""> Heading 1</label>
							<?php echo form_input(array('class' => "form-control",'name' =>"heading1","placeholder"=>"Heading 1","value" =>set_value('heading1',@$heading1))); ?>
						</div>
						<span><?php echo form_error('heading1'); ?></span>
					</div>


                    	<div class="col-sm-6">
						<div class="form-group">
							<label for=""> Heading 2 </label>
							<?php echo form_input(array('class' => "form-control",'name' =>"heading2","placeholder"=>"Heading 2","value" =>set_value('heading2',@$heading2))); ?>
						</div>
						<span><?php echo form_error('heading2'); ?></span>
					</div>
				
				
					<div class="col-sm-12">
						<div class="form-group">
							<label for=""> Short Description </label>
							<!--<?php echo form_input(array('class' => "form-control",'name' =>"short_description","placeholder"=>"Short Description","value" =>set_value('short_description',@$short_description))); ?>-->
						    
						     <textarea name="short_description" class="form-control" id="editor1"><?php echo @$short_description;  ?></textarea>
                                        
						</div>
						<span><?php echo form_error('short_description'); ?></span>
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