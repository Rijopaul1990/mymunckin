<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 
<style>
    .template-page .banner{
        background-position:top !important;
    }
</style>

<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
<main class="template-page">

<!-- <section class="banner" id="banner" >
	<div class="container">
		<div class="row">
			<div class="col-lg-5  ">
                <h1>Templates</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
			</div>
		</div>	
	</div>
	<img src="img/about-wave.png" class="img-fluid banner-cloud"/>
</section> -->
<?php include 'inner_banner.php'; ?>

<section class="template-tab text-center position-relative" id="price" >
    <div class="background-icons4">
        <img src="<?php echo base_url('assets/') ?>img/icons/about1.svg" class="img-fluid price1" alt="price1" >
        <img src="<?php echo base_url('assets/') ?>img/icons/about2.svg" class="img-fluid price2" alt="price2" >
        <img src="<?php echo base_url('assets/') ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
        <img src="<?php echo base_url('assets/') ?>img/icons/price2.svg" class="img-fluid price4" alt="price3" >
    </div>	
    <?php 
    if($all_template_feature){
    ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 offset-1 align-self-center ">
                <h2>Featured <br> Templates</h2>
            </div>
			<div class="col-md-8 pr-0">
        		<div class=" owl-carousel owl-theme " id="template">
              <?php if(is_array($all_template_feature) || is_object($all_template_feature)){
                foreach ($all_template_feature as $all_template_feature) {
                     if($all_template_feature->free_or_paid == 1){
                        $class ="free_class";
                    }elseif($all_template_feature->free_or_paid == 2){
                        $class ="paid_class";
                    }
                    
                    
                    
                    
                    if(in_array($all_template_feature->id,@$all_paid_due_date)){
                        if(isset($this->session->userdata['userdetail'])){
                          $flink = base_url('Users/announcement/'.encrypt_url($all_template_feature->id));
                                 }else{
                                     $flink = "#";
                                 }
                ?>
        			<div class="item free_class">
        			    <a href="<?php echo $flink; ?>">
        				    <img src="<?php echo base_url($all_template_feature->img); ?>" class="img-fluid "/>
        				</a>
        			</div>
        			<?php }else{ ?>
        			<div class="item <?php echo @$class; ?>">
        			    <a href="<?php echo base_url('pricing'); ?>">
        				    <img src="<?php echo base_url($all_template_feature->img); ?>" class="img-fluid "/>
        				</a>
        			</div>
              <?php } } } ?>
        		
        		</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="container explore " >
		<div class="row">

			<div class="col-lg-12 ">
			    
                <h2>Explore All</h2>
				<ul class="nav nav-pills  justify-content-end" id="pills-tab" role="tablist">
             
                </ul>
                <div class="tab-content text-left" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab">
                         
                          <div class="row">
                            <div class="col-lg-2 col-md-4">
                                 <div class="nav flex-column nav-pills templates-pill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                  <?php if(is_array($all_category) || is_object($all_category)){
                                    $j=0;
                                    foreach ($all_category as $all_c) {
                                        $j++;
                                        if($j == 1){
                                            $c ="active";    
                                        }else{
                                            $c ="";
                                        }
                                    ?>
                                  <a class="nav-link <?php echo $c ?>" id="v-pills-born-tab<?php echo $all_c->id; ?>" data-toggle="pill" href="#v-pills-born<?php echo $all_c->id; ?>" role="tab" aria-controls="v-pills-born" aria-selected="false"><?php echo $all_c->name; ?></a>
                                <?php } } ?>
                                  
                                  
                            </div>
                            
                            </div>
                       
                            <div class="col-lg-10 col-md-8">
                                
                            <div class="tab-content" id="v-pills-tabContent">
                                  <?php if(is_array($all_category) || is_object($all_category)){
                                    $i= 0;
                                    foreach ($all_category as $a_c) {
                                        $fetch_template = $this->AdminModel->all_fetch("template",array('status'=>1,'c_id'=>$a_c->id),"sort_order");
                                        $i++;
                                        if($i == 1){
                                            $class ="show active";
                                        }else{
                                            $class = "";
                                        }
                                        
                                        
                                        
                                    ?>
                              <div class="tab-pane fade <?php echo $class; ?>" id="v-pills-born<?php echo $a_c->id; ?>" role="tabpanel" aria-labelledby="v-pills-born-tab<?php echo $a_c->id; ?>">
                                    
                                    <ul class="templates-card"> 
                                    <?php 
                                    if(is_array($fetch_template) || is_object($fetch_template)){
                                        foreach($fetch_template as $fetch_template){
                                            if($fetch_template->free_or_paid == 1){
                                        $myy_class ="free_class";
                                    }elseif($fetch_template->free_or_paid == 2){
                                        $myy_class ="paid_class";
                                    }
                                    
                                   
                                    
                                     if(in_array($fetch_template->id,@$all_paid_due_date)){
                                           if(isset($this->session->userdata['userdetail'])){
                                            $link = base_url('Users/announcement/'.encrypt_url($fetch_template->id));
                                         }else{
                                             $link = "#";
                                         }
                                     
                                    
                                    ?>
                                    <li class="free_class">
                                            <a href="<?php echo $link; ?>">
                                                <div class="card-img">
                                				    <img src="<?php echo base_url($fetch_template->img); ?>" class="img-fluid "/>  
                                				</div>
                                				    <!--<?php echo $fetch_template->name; ?> <span><?php echo $fetch_template->short_description; ?></span>-->
                                				    </a> 
                                        </li>
                                    <?php } else{ ?>
                                        <li class="<?php echo @$myy_class; ?>">
                                            <a href="<?php echo base_url('pricing'); ?>">
                                                <div class="card-img">
                                				    <img src="<?php echo base_url($fetch_template->img); ?>" class="img-fluid "/>  
                                				</div>
                                				    <!--<?php echo $fetch_template->name; ?> <span><?php echo $fetch_template->short_description; ?></span> -->
                                				    </a> 
                                        </li>
                                        <?php } } } ?>
                                       
                                    </ul>
                                  <!--  <div class="buttons-tem mt-5 text-center">-->
                                  <!--        <a href="#" class="btn btn-munchkin2  "><span> PREVIOUS</span></a>-->
                                  <!--        <a href="#" class="btn btn-munchkin "><span> NEXT</span></a>-->
                                  <!--</div>-->
                              
                              </div>
                              
                              <?php } } ?>
                              <!--<div class="tab-pane fade" id="v-pills-born" role="tabpanel" aria-labelledby="v-pills-born-tab">...</div>-->
                              <!--<div class="tab-pane fade" id="v-pills-girl" role="tabpanel" aria-labelledby="v-pills-girl-tab">...</div>-->
                              <!--<div class="tab-pane fade" id="v-pills-announcement" role="tabpanel" aria-labelledby="v-pills-announcement-tab">...</div>-->
                            </div>

                      
                            
                            </div>
                        </div>
                        
                        
                        
                        
                        
                    </div>
                  <div class="tab-pane fade" id="pills-premium" role="tabpanel" aria-labelledby="pills-premium-tab">
                    ...
                  </div>
                  <div class="tab-pane fade" id="pills-ultimate" role="tabpanel" aria-labelledby="pills-ultimate-tab">...
                  </div>
                </div>
			</div>
			
		</div>	
		</div>	
		
		
</section>


</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>
<script>
$(document).ready(function(){
    $("li.paid_class").remove("a");

});
</script>