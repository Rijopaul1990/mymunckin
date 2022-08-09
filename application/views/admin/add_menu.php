<?php 
	include_once('include/topbar.php');
?>
	
 <div class="content-wrapper">
             
            <section class="content">
           
            <?php echo form_open_multipart($form_action); ?>
				<div class="panel panel-success">
					 <div class="panel panel-heading">
						<i class="fa fa-users"></i> <?php echo $page_title; ?>
						<span class="pull-right"><a href="<?php echo base_url('admin/all_menu') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
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
									<label for="">Menu Name </label>
									<?php echo form_input(array('class' => "form-control",'name' =>"name","placeholder"=>"Menu Name","value" =>set_value('name',@$name))); ?>
								</div>
							</div>
						   <div class="col-sm-6">
								<div class="form-group">
									<label for="">Banner Heading </label>
									<?php echo form_input(array('class' => "form-control",'name' =>"banner_heading","placeholder"=>"Banner Heading","value" =>set_value('banner_heading',@$banner_heading))); ?>
								</div>
							</div>
								
						 
							
							
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Sort Order </label>
                                    <?php echo form_input(array('type'=>"number",'class' => "form-control",'name' =>"sort_order","min"=>1,"placeholder"=>"Sort Order","value" =>set_value('sort_order', $sort_order))); ?>
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Banner Image  </label>
                                    <?php if (@$img): ?>
                                        <img src="<?php echo base_url($img); ?>" height=80 width=250 >
                                        <br>
                                        <?php endif ?>
							            <input class="form-control " name="img" type="file" >   
                                </div>
							</div>
						
							 <div class="col-sm-12">
								<div class="form-group">
									<label for="">Banner Description</label>
									<?php echo form_input(array('class' => "form-control",'name' =>"banner_description","placeholder"=>"Banner Description","value" =>set_value('banner_description',@$banner_description))); ?>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Banner Description 2</label>
									<?php echo form_input(array('class' => "form-control",'name' =>"banner_description1","placeholder"=>"Banner Description 2","value" =>set_value('banner_description1',@$banner_description1))); ?>
								</div>
							</div>
							
						
						 <div class="col-sm-12">
								<div class="form-group">
									<label for="">Meta Title</label>
									<?php echo form_input(array('class' => "form-control",'name' =>"meta_title","placeholder"=>"Meta Title","value" =>set_value('meta_title',@$meta_title))); ?>
								</div>
							</div>
							 <div class="col-sm-12">
								<div class="form-group">
									<label for="">Meta Keyword</label>
									<?php echo form_input(array('class' => "form-control",'name' =>"meta_keyword","placeholder"=>"Meta Keyword","value" =>set_value('meta_keyword',@$meta_keyword))); ?>
								</div>
							</div>
							 <div class="col-sm-12">
								<div class="form-group">
									<label for="">Meta Description</label>
									<?php echo form_input(array('class' => "form-control",'name' =>"meta_description","placeholder"=>"Meta Description","value" =>set_value('meta_description',@$meta_description))); ?>
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