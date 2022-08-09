<?php $get_user_id =  $this->session->userdata['userdetail']['id']; 

 $check_this_url = $this->AdminModel->fs('genrate_url',array('u_id'=>@$get_user_id));
 
 $check_order_purchase = $this->AdminModel->fs_desc('order_details',array('u_id'=>$get_user_id,'status'=>1)); 
    
?>
   <div class="col-lg-3 col-md-12 side-menu ">
                                <div id="sidebar-wrapper">
                                 <div class="nav flex-column nav-pills templates-pill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                  
                                      <a class="nav-link " id="v-pills-profile-tab"  href="<?php echo base_url('Users/dashboard') ?>"   aria-selected="true"><i class="fas fa-user-circle"></i> My Profile</a>
                                      <a class="nav-link" id="v-pills-comment-tab"  href="<?php echo base_url('Users/comments') ?>"  aria-selected="false"><i class="fas fa-comment-dots"></i> Messages</a>
                                      <a class="nav-link" id="v-pills-milestones-tab"  href="<?php echo base_url('Users/milestones') ?>"  aria-selected="false"><i class="fas fa-baby"></i> My Munchkin's Milestones</a>
                                     
                                     <?php if($check_this_url->due_date && $check_order_purchase->p_id == 2){
                                     }else{ ?>
                                      <a class="nav-link" id="v-pills-album-tab"  href="<?php echo base_url('Users/album') ?>"  aria-selected="false"><i class="fas fa-images"></i> My Baby Book</a>
                                     <?php } ?>
                                      
                                      <a class="nav-link" id="v-pills-album-tab"  href="<?php echo base_url('Users/referlink'); ?>"  aria-selected="false"><i class="fas fa-link"></i> Update/Share Webpage </a>
                                        
                                     <a class="nav-link" id="v-pills-album-tab"  href="<?php echo base_url('Users/digital-album'); ?>"  aria-selected="false"><i class="fas fa-images"></i> Digital Book</a>

                                      <a class="nav-link logout" href="<?php echo base_url('Users/logout'); ?>" ><i class="fas fa-sign-out-alt"></i> Logout</a>
                                      
                                </div>
                            </div>
                            </div>
                            
                            
<script>
     $(function(){
        var cUrl = window.location.href;
         $(".nav-link").each(function(){
                 if ($(this).attr("href") == cUrl){
                         $(this).addClass("active");
                 }
                 else{
                      $(this).removeClass("active");
                 }
         });
    });
</script>