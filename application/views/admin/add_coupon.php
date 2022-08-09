<?php 
include_once('include/topbar.php');
?>

<div class="content-wrapper">

  <section class="content">

    <?php echo form_open_multipart($form_action); ?>
    <div class="panel panel-success">
      <div class="panel panel-heading">
        <i class="fa fa-users"></i> <?php echo $page_title; ?>
        <span class="pull-right"><a href="<?php echo base_url('admin/all_coupon') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
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
             <label for="">Coupon Code </label>
             <?php echo form_input(array('class' => "form-control",'name' =>"coupan_code","placeholder"=>"Coupon Code","value" =>set_value('coupan_code',@$coupan_code))); ?>
             <span><?php echo form_error('coupan_code'); ?></span>
           </div> 
         </div>
         <div class="col-sm-6">
          <div class="form-group">
            <label for="">Minimum Order amount </label>
            <?php echo form_input(array('type'=>"number",'class' => "form-control",'name' =>"minimum_amount","min"=>1,"placeholder"=>"Minimum Order amount","value" =>set_value('minimum_amount',@$minimum_amount))); ?>
            <span><?php echo form_error('minimum_amount'); ?></span>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label for="">Discount Type </label>
            <select name="rate" class="form-control">
              <option value="">Select Type</option>
              <?php foreach ($rate_type as $key => $value) { 

                if($key == $rate){
                  ?>
                  <option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
                <?php } else{ ?>
                  <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                <?php } } ?>
              </select>
              <span><?php echo form_error('rate'); ?></span>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Amount </label>
              <?php echo form_input(array('type'=>"number",'class' => "form-control",'name' =>"rate_amount","min"=>1,"placeholder"=>"Flat Rate or Fixed Amount","value" =>set_value('rate_amount',@$rate_amount))); ?>
              <span><?php echo form_error('rate_amount'); ?></span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Start Date </label>
              <?php echo form_input(array('type'=>"date",'class' => "form-control",'name' =>"start_date","placeholder"=>"Start Date","value" =>set_value('start_date',@$start_date))); ?>
              <span><?php echo form_error('start_date'); ?></span>
            </div>
          </div>       
          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> End Date </label>
              <?php echo form_input(array('type'=>"date",'class' => "form-control",'name' =>"expiry_date","placeholder"=>"End Date","value" =>set_value('expiry_date',@$expiry_date))); ?>
              <span><?php echo form_error('expiry_date'); ?></span>
            </div>
          </div>   

          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> No. of Uses </label>
              <?php echo form_input(array('type'=>"number",'class' => "form-control",'name' =>"use_per_user","min"=>1,"placeholder"=>"No. of Uses","value" =>set_value('use_per_user',@$use_per_user))); ?>
              <span><?php echo form_error('use_per_user'); ?></span>
            </div>
          </div>


          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Image </label>
              <?php if (@$img): ?>
                <img src="<?php echo base_url($img); ?>" height=80 width=250 >
                <br>
              <?php endif ?>
              <input class="form-control " name="img" type="file" >   
            </div>
          </div>

         <!--  <div class="col-sm-12">
            <div class="form-group">
             <label for="">Short Description </label>
             <?php echo form_input(array('class' => "form-control",'name' =>"short_description","placeholder"=>"Short Description","value" =>set_value('short_description',@$short_description))); ?>
             <span><?php echo form_error('short_description'); ?></span>
           </div> 
         </div> -->













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
