<?php 
include_once('include/topbar.php');
?>

<div class="content-wrapper">

  <section class="content">

    <?php echo form_open_multipart($form_action); ?>
    <div class="panel panel-success">
      <div class="panel panel-heading">
        <i class="fa fa-users"></i> <?php echo $page_title; ?>
        <span class="pull-right"><a href="<?php echo base_url('admin/all_home_about') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
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



          <div class="col-sm-12">
            <div class="form-group">
             <label for="">Heading </label>
             <textarea name="heading" class="form-control" id=""><?php echo @$heading;  ?></textarea>
             <span><?php echo form_error('heading'); ?></span>
           </div>
         </div>
         
         <div class="col-sm-12">
          <div class="form-group">
           <label for="">Small Description </label>
           <textarea name="short_description" class="form-control" id=""><?php echo @$short_description;  ?></textarea>
           <span><?php echo form_error('short_description'); ?></span>
         </div>
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
                  <label for=""> Image</label>
                                    <?php if (@$img): ?>
                                      <br>
                                        <img src="<?php echo base_url($img); ?>" height=100 width=100 >
                                        <br>
                                        <?php endif ?>
                          <input class="form-control " name="img" type="file" >   
                                </div>
              </div>
       <div class="col-sm-12">
        <div class="form-group">
         <label for=""> Description </label>
         <textarea name="description"  class="form-control" id="editor1"><?php echo @$description;  ?>
       </textarea>
       <span><?php echo form_error('description'); ?></span>
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
