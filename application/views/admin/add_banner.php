	<?php 
	include_once('include/topbar.php');
	?>

	<div class="content-wrapper">

		<section class="content">

			<?php echo form_open_multipart($form_action); ?>
			<div class="panel panel-success">
				<div class="panel panel-heading">
					<i class="fa fa-users"></i> <?php echo $page_title; ?>
					<span class="pull-right"><a href="<?php echo base_url('admin/all_banner') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
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
								<label for=""> Heading 1</label>
								<?php echo form_input(array('class' => "form-control",'name' =>"heading1","placeholder"=>" Heading","value" =>set_value('heading1',@$heading1))); ?>
							</div>
							<span><?php echo form_error('heading1'); ?></span>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for=""> Heading 2</label>
								<?php echo form_input(array('class' => "form-control",'name' =>"heading2","placeholder"=>" Heading 2","value" =>set_value('heading2',@$heading2))); ?>
							</div>
							<span><?php echo form_error('heading2'); ?></span>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for=""> Heading 3</label>
								<?php echo form_input(array('class' => "form-control",'name' =>"heading3","placeholder"=>" Heading 3","value" =>set_value('heading3',@$heading3))); ?>
							</div>
							<span><?php echo form_error('heading3'); ?></span>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label for=""> Button Name </label>
								<?php echo form_input(array('class' => "form-control",'name' =>"btn_name","placeholder"=>" Button Name ","value" =>set_value('btn_name',@$btn_name))); ?>
							</div>
							<span><?php echo form_error('btn_name'); ?></span>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for=""> Button Link</label>
								<?php echo form_input(array('class' => "form-control",'name' =>"btn_link","placeholder"=>" Button Link","value" =>set_value('btn_link',@$btn_link))); ?>
							</div>
							<span><?php echo form_error('btn_link'); ?></span>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label for=""> Button Name 2 </label>
								<?php echo form_input(array('class' => "form-control",'name' =>"btn_name2","placeholder"=>" Button Name 2","value" =>set_value('btn_name2',@$btn_name2))); ?>
							</div>
							<span><?php echo form_error('btn_name2'); ?></span>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for=""> Button Link 2</label>
								<?php echo form_input(array('class' => "form-control",'name' =>"btn_link2","placeholder"=>" Button Link 2","value" =>set_value('btn_link2',@$btn_link2))); ?>
							</div>
							<span><?php echo form_error('btn_link2'); ?></span>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label for=""> Button Name 3</label>
								<?php echo form_input(array('class' => "form-control",'name' =>"btn_name3","placeholder"=>" Button Name 3","value" =>set_value('btn_name3',@$btn_name3))); ?>
							</div>
							<span><?php echo form_error('btn_name3'); ?></span>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for=""> Button Link 3</label>
								<?php echo form_input(array('class' => "form-control",'name' =>"btn_link3","placeholder"=>" Button Link 3","value" =>set_value('btn_link3',@$btn_link3))); ?>
							</div>
							<span><?php echo form_error('btn_link3'); ?></span>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label for="">Banner Image <!-- (Height 506px * Width 552px) --> </label>
								<?php if (@$img): ?>
									<img src="<?php echo base_url($img); ?>" height=80 width=250 >
									<br>
								<?php endif ?>
								<input class="form-control " name="img" type="file" >   
							</div>
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