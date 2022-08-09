                <?php 
                   //include topbar page
                include_once('include/topbar.php');
                   //delete code

                ?>
                <div class="wrapper"> 

                 <!-- =============================================== -->
                 <!-- Left side column. contains the sidebar -->

                 <!-- =============================================== -->
                 <!-- Content Wrapper. Contains page content -->
                 <div class="content-wrapper">
                  <!-- Content Header (Page header) -->

                  <!-- Main content -->
                  <div class="content">
                   <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-b-20">
                     <!-- Nav tabs -->
                     <div class="panel panel-heading">
                      <i class="fa fa-users"></i> <?php echo $page_title; ?>
                      <span class="pull-right"><a href="<?php echo base_url('admin/all_pricing') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
                      Back</a></span>
                    </div>
                    <input type="hidden" name="" id="base_url" value="<?php echo base_url(); ?>">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab1" data-toggle="tab">General</a></li>
                       
                      
                      <li><a href="#tab8" data-toggle="tab"> Feature</a></li>
                      
                    </ul>
                    <!-- Tab panels -->
                    <?php echo form_open_multipart($form_action); ?>
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="tab1">


                        <div class="panel panel-success">

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
                  <label for=""> Template Id </label>
                    <select name="template_id[]" class="form-control js-example-basic-multiple" multiple="multiple">
                        <option value="">Select Artist</option>
                        <?php 
                           
                        foreach ($all_template as $all_template) { 
                        //  if($all_template->id == $cat_id){
                               $arr = json_decode($template_id);
                              if(in_array($all_template->id,$arr)){
                          ?>
                        <option value="<?php echo $all_template->id; ?>" selected><?php echo $all_template->name; ?></option>   
                      <?php } else{ ?>
                        <option value="<?php echo $all_template->id; ?>"><?php echo $all_template->name; ?></option>

                        <?php } } ?>
                      
                    </select>
                                    <span><?php echo form_error('template_id'); ?></span>
                </div>
              </div>
                      
                             <div class="col-sm-6">
                              <div class="form-group">
                               <label for=""> Name </label>
                               <?php echo form_input(array('class' => "form-control",'name' =>"name","placeholder"=>"Name","value" =>set_value('name',@$name))); ?>
                             </div>
                             <span><?php echo form_error('name'); ?></span>
                           </div>
                           
                          <div class="col-sm-6">
                  <div class="form-group">
                   <label for=""> Sort Order</label>
                   <?php echo form_input(array('type'=>"number",'class' => "form-control",'name' =>"sort_order","placeholder"=>" Sort Order","value" =>set_value('sort_order',@$sort_order))); ?>
                 </div>
                 <span><?php echo form_error('sort_order'); ?></span>
                </div>
                 <div class="col-sm-6">
                              <div class="form-group">
                               <label for=""> Price </label>
                               <?php echo form_input(array('class' => "form-control",'name' =>"price","placeholder"=>"Price","value" =>set_value('price',@$price))); ?>
                             </div>
                             <span><?php echo form_error('price'); ?></span>
                           </div>


                           
               
             
             

              
                </div>
                </div>

                </div>

                </div>
               
                
                <!-- End Tab 7 here -->

                    <!-- Start here tab 8 -->
                  <div class="tab-pane fade" id="tab8">
                 <div class="panel-body">
                  <?php if(@$fetch_feature){ ?>
                      <div class="col-sm-10"></div>
                     <div class="col-sm-2">
                    <div class="form-group">
                      <label for=""> Add More</label>
                      <button type="button" class="btn btn-sm btn-primary" onclick="add_variant();"> <i class="fa fa-plus"></i> Add More</button>
                    </div>
                  </div>
                    <?php foreach ($fetch_feature as $f_v) {
                     ?>
                     <div class="col-sm-12 removevariant<?php echo @$f_v->id; ?>">
            
                <div class="col-sm-5">
                  <div class="form-group">
                   <label for=""> Feature Heading</label>
                   <?php echo form_input(array('class' => "form-control",'name' =>"feature_heading[]","placeholder"=>" Feature Heading","value" =>set_value('feature_heading',@html_entity_decode($f_v->name)))); ?>
                 </div>
                 <span><?php echo form_error('feature_heading'); ?></span>
                </div>
                
                <div class="col-sm-5">
                  <div class="form-group">
                   <label for=""> Sort Order</label>
                   <?php echo form_input(array('class' => "form-control",'name' =>"feature_sort_order[]","placeholder"=>" Sort Order","value" =>set_value('feature_sort_order',@$f_v->sort_order))); ?>
                 </div>
                 <span><?php echo form_error('feature_sort_order'); ?></span>
                </div>

                   <div class="col-sm-2">
                <div class="form-group">
                  <label for=""> </label>
                    <button type="button" class="btn btn-sm btn-danger" onclick="remove_more_color(<?php echo @$f_v->id; ?>);"><i class="fa fa-plus"></i> Remove</button>
                      </div>
              </div>


                     </div>
                    <?php  } ?>
                  <?php } else{ ?>
                
                <div class="col-sm-5">
                  <div class="form-group">
                   <label for=""> Feature Heading</label>
                   <?php echo form_input(array('class' => "form-control",'name' =>"feature_heading[]","placeholder"=>" Feature Heading","value" =>set_value('feature_heading',@html_entity_decode($feature_heading)))); ?>
                 </div>
                 <span><?php echo form_error('feature_heading'); ?></span>
                </div>
                
                        <div class="col-sm-5">
                  <div class="form-group">
                   <label for=""> Sort Order</label>
                   <?php echo form_input(array('class' => "form-control",'name' =>"feature_sort_order[]","placeholder"=>" Sort Order","value" =>set_value('feature_sort_order',@$f_v->feature_sort_order))); ?>
                 </div>
                 <span><?php echo form_error('feature_sort_order'); ?></span>
                </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for=""> Add More</label>
                      <button type="button" class="btn btn-sm btn-primary" onclick="add_variant();"> <i class="fa fa-plus"></i> Add More</button>
                    </div>
                  </div>
                    <?php } ?>
                   <div id="add_variant"></div>
                </div>
                </div>
                <!-- end tab 8 here -->

                      

                <div class="panel-footer">
                  <input type="submit" value="Submit" name="form_submit" class="btn btn-munchkin" />
                </div>
                </form/>
                </div>
                </div>

                </div>


                </div>
                <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                </div>
                <?php
                include_once('include/footer.php');
                ?>
               

                <script>
                  //Color Feature Heading
                  var a_m_c = 1;
                  function add_variant() {
                   a_m_c++;
                   var objTo = document.getElementById('add_variant')
                   var divtest = document.createElement("div");
                   divtest.setAttribute("class", "col-md-12 form-group removevariant"+a_m_c);
                   var rdiv = 'removevariant'+a_m_c;
                   divtest.innerHTML = `
                   
                   <div class="col-sm-5"><div class="form-group"><label for="">Feature Heading</label><input type="text" placeholder="Feature Heading" name="feature_heading[]" class="form-control"></div></div>

       
                    <div class="col-sm-5"><div class="form-group"><label for="">Sort Order</label><input type="text" placeholder="Sort Order" name="feature_sort_order[]" class="form-control"></div></div>


                   <div class="col-md-2"><label for=""></label><button type="button" class="btn btn-sm btn-danger" onclick="remove_more_color('${a_m_c}');"><i class="fa fa-plus"></i> Remove</button></div>`;

                   objTo.appendChild(divtest)
                 }
                 function remove_more_color(rid) {
                   $('.removevariant'+rid).remove();
                 }
                 
                             $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
                </script>