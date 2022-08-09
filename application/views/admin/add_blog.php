<?php 
	include_once('include/topbar.php');
?>
	
 <div class="content-wrapper">
             
            <section class="content">
           
            <?php echo form_open_multipart($form_action); ?>
				<div class="panel panel-success">
					 <div class="panel panel-heading">
						<i class="fa fa-users"></i> <?php echo $page_title; ?>
						<span class="pull-right"><a href="<?php echo base_url('admin/all_blog') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
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
                        
                        <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
                       	

                        <div class="col-sm-6">
								<div class="form-group">
									<label for=""> Heading </label>
									<?php echo form_input(array('class' => "form-control",'name' =>"heading","placeholder"=>" Heading","value" =>set_value('heading',@$heading))); ?>
                                    <span><?php echo form_error('heading'); ?></span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for=""> Author </label>
									<?php echo form_input(array('class' => "form-control",'name' =>"author","placeholder"=>"Author","value" =>set_value('author',@$author))); ?>
                                    <span><?php echo form_error('author'); ?></span>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for=""> Date </label>
									<?php echo form_input(array('type'=>"date",'class' => "form-control",'name' =>"b_date","placeholder"=>" Date","value" =>set_value('b_date',@$b_date))); ?>
                                    <span><?php echo form_error('b_date'); ?></span>
								</div>
							</div>
						 
								 
							
						
							<div class="col-sm-6">
								<div class="form-group">
									<label for=""> Image </label>
                                    <?php if (@$img): ?>
                                        <img src="<?php echo base_url($img); ?>" height=100 width=250 >
                                        <br>
                                        <?php endif ?>
							            <input class="form-control " name="img" type="file" >
                                           
                                </div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for=""> Thumbnail Image </label>
                                    <?php if (@$thumbnail_img): ?>
                                        <img src="<?php echo base_url($thumbnail_img); ?>" height=100 width=250 >
                                        <br>
                                        <?php endif ?>
							            <input class="form-control " name="thumbnail_img" type="file" >
                                           
                                </div>
							</div>
                           	
                            
							 <div class="col-sm-12">
								<div class="form-group">
									<label for="">Description </label>
                                        <textarea name="description" id="editor1" class="form-control"><?php echo @$description;  ?></textarea>
                                        <span><?php echo form_error('description'); ?></span>
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