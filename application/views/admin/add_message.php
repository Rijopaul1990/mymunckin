<?php 
include_once('include/topbar.php');
?>

<div class="content-wrapper">

  <section class="content">

    <?php echo form_open_multipart($form_action); ?>
    <div class="panel panel-success">
      <div class="panel panel-heading">
        <i class="fa fa-users"></i> <?php echo $page_title; ?>
        <span class="pull-right"><a href="<?php echo base_url('admin/all_message') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
        Back</a></span>
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
          <strong><?php echo $error; ?></strong> </a>
        </div>
      <?php endif ?>
      <div class="panel-body">
        <div class="row">

          <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
          
          
          
          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Type </label>
              <select name="type" class="form-control">
                  <option value="">Select Type</option>
                  <?php foreach ($all_type as $key => $value) {
                    if($type == $key){
                   ?>
                    <option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
                 <?php } else{ ?>
                          <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                  <?php } } ?>
              </select>
              <span><?php echo form_error('type'); ?></span>
            </div>
          </div>
           <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Heading </label>
              <?php echo form_input(array('class' => "form-control",'name' =>"name","placeholder"=>" Heading","value" =>set_value('name',@$name))); ?>
               <span><?php echo form_error('name'); ?></span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Backgroud Heading (Optional) </label>
              <?php echo form_input(array('class' => "form-control",'name' =>"b_heading","placeholder"=>" Backgroud Heading","value" =>set_value('b_heading',@$b_heading))); ?>
               <span><?php echo form_error('b_heading'); ?></span>
            </div>
          </div>
             <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Small Description (Optional) </label>
              <?php echo form_input(array('class' => "form-control",'name' =>"short_description","placeholder"=>" Small Description","value" =>set_value('short_description',@$short_description))); ?>
               <span><?php echo form_error('short_description'); ?></span>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
             <label for=""> Description (Optional)</label>
             <textarea name="description" class="form-control" id=""><?php echo @$description;  ?></textarea>
             <span><?php echo form_error('description'); ?></span>
           </div>
         </div>

         <div class="col-sm-6">
          <div class="form-group">
            <label for=""> Image (Optional) </label>
            <?php if (@$img): ?>
              <br>
              <img src="<?php echo base_url($img); ?>" height=100 width=100 >
              <br>
            <?php endif ?>
            <input class="form-control " name="img" type="file" >   
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for=""> Background Image(Optional) </label>
            <?php if (@$img1): ?>
              <br>
              <img src="<?php echo base_url($img1); ?>" height=100 width=100 >
              <br>
            <?php endif ?>
            <input class="form-control " name="img1" type="file" >   
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

?>
