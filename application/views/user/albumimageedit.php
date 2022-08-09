<div class="content-body" style="min-height: 788px;">
   <!-- row -->
   <div class="container-fluid">
   <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
      <!-- Add Order -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Milestone Categories</h4>
                  <a href="javascript:void(0)">Preview</a>
                  <a href="javascript:void(0)">Back</a>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-responsive-sm">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Images</th>
                              <th>Categories</th>
                              <th>Sort order</th>
                              <th>Select Images For Album</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php 
                                            if(is_array($all_milestone) || is_object($all_milestone)){
                                                $i=1;
                                                foreach($all_milestone as $all_milestone){
                                                    //$fetch_data = $this->AdminModel->fs("milestone",array("id"=>$all_milestone->id));
                                                    $mile_cate = $this->AdminModel->fs("milestone_category",array("id"=>$all_milestone->m_id));
                                            
                                            ?>
                           <tr>
                              <td><?php echo $i++;; ?></td>
                              <td>
                                 <div class="d-flex align-items-center"><img src="<?php echo base_url($all_milestone->img); ?>" class="img-fluid " alt="price1" > </div>
                              </td>
                              <td><?php echo $mile_cate->name; ?>
                              </td>
                              <td><input type="number" value="<?php echo $all_milestone->sort_order; ?>" min=0 data-id="<?php echo $all_milestone->id; ?>" class="UpdateSortOrder">
                              </td>
                              <td>
                              <label class="update_image">  
                                                        <input type="checkbox" data-id="<?php echo $all_milestone->id; ?>" class="UpdateForAlbum" <?php echo $all_milestone->status_for_album==1 ?'checked':' '; ?>>
                                                         <span class="btn  text-success"><i class=""></i></span>
                                                    </label>
                              </td>
                           </tr>
                        </tbody>
                        <?php } } ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>
<script src="<?php echo base_url('assets/user.js'); ?>"></script>