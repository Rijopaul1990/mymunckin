<div class="content-body" style="min-height: 788px;">
   <!-- row -->
   <div class="container-fluid">
      <!-- Add Order -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Select Album Image</h4>
                  <a href="albumpreview.html" class="btn btn-secondary btn-rounded"><i class="fa fa-eye" aria-hidden="true"></i>
                  Preview</a>
                  <a href="mybabybook.html" class="btn btn-secondary btn-rounded"><i class="fa fa-undo" aria-hidden="true"></i>
                  Back</a>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-responsive-sm">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Categories</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php 
                            if(is_array($milestone_category) || is_object($milestone_category)){
                                $i=1;
                                foreach($milestone_category as $milestone_category){
                                    $count = $this->AdminModel->AllCount("milestone",array('m_id'=>$milestone_category->id,'u_id'=>$user_id));
                                        if($count >= 1){
                                ?>
                           <tr>
                              <th><?php echo $i++;; ?></th>
                              <td><?php echo $milestone_category->name; ?></td>
                              <td><a href="<?php echo base_url('Users/albumimgn/'.$milestone_category->id); ?>">Edit </a></a>
                              </td>
                           </tr>
                           <?php }  }} ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>