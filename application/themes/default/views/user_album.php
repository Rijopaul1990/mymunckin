
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 
<style>
     .btn-munchkin{
        margin-bottom :15px !important;
    } 
</style>
<main class="login-page dashboard" >
    
<?php include_once('banner_dashboard.php'); ?>
    
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">

    <section class="banner" id="price">
        <div class="background-icons4">
            <img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/>
            <img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
                        <img src="<?php echo base_url('assets/'); ?>img/icons/price1.svg" class="img-fluid price1" alt="price1" >
                        <img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid price2" alt="price2">
                        <img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                        <button class="navbar-toggler show-side " type="button">
                            <span class="fa fa-bars "></span>
                            <span class="fa fa-times " style="display:none"></span>
                        </button>  
                     <div class="row">
                        
                          <?php include_once('user_sidebar.php'); ?>
                       
                            <div class="col-lg-9 col-md-12 dash-tabs text-left">
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
                            <div class="tab-content" id="v-pills-tabContent">
                              
                              
                                
                                <div class="tab-pane fade show active " id="v-pills-album" role="tabpanel" aria-labelledby="v-pills-album-tab">
                                   <span class="title-table ">  My Baby Book <?php if($check_print_status->print_status == 1){
                                   echo "(Printing Request Sent)";
                                   } ?></span>
                                    <?php if($selected_album_count >= 1 && $check_print_status->print_status != 1){ ?>
                                    <span class="float-right">
                                        <a class="btn  btn-munchkin" href="<?php echo base_url('Users/createpage'); ?>"><span><i class="fas fa-plus"></i> 
                                        Edit first / last page of Baby Book </span></a>
                                    </span>
                                    <span class="float-right mr-2">
                                        <a class="btn  btn-munchkin" href="<?php echo base_url('Users/albumimage'); ?>"><span><i class="fas fa-plus"></i> 
                                        Select Photos for Baby Book </span></a>
                                    </span>
                                     <?php } ?>
                                    <hr>
                                   <form>
                                       
                                        <table class="table table-borderless booking-order-main-table " >
                                        <thead>
                                            <tr>
                                               
                                                <td>
                                                    <label> Baby Book</label>
                                                </td>
                                              
                                              
                                                <td >
                                                    <label>Demo</label>
                                                </td>
                                               
                                                <td>
                                                    <label>Action</label>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                           
                                            
                                            <tr>
                                              
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/dashboard_2.png" class="img-fluid " alt="price1" >
                                                </td>
                                              
                                               
                                                <td>
                                                    <a href="#" class="btn  btn-munchkin album_privew"  data-toggle="modal" data-target="#album_demo"> <span> View</span></a>
                                                </td>
                                                
                                                <td>
                                                    <?php if(@$select_album->album_id == 1){ ?>
                                                    <span> Baby Book Selected</span>
                                                    <?php } else{ 
                                                    if($check_print_status->print_status != 1){
                                                    ?>
                                                   <button type="button" data-id="1" class="btn btn-munchkin selectAlbum album_privew"><span>Select Baby Book</span></button>
                                                   <?php } } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                                                              
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>img/dashboard_1.png" class="img-fluid " alt="price1" >
                                                </td>
                                               
                                                <td>
                                                    <a href="#" class="btn  btn-munchkin album_privew" data-toggle="modal" data-target="#album_demo2">  <span> View</span></a>
                                                </td>
                                                 
                                                <td>
                                                     <?php if(@$select_album->album_id == 2){ ?>
                                                    <span>Baby Book Selected</span>
                                                    <?php } else{ 
                                                     if($check_print_status->print_status != 1){
                                                    ?>
                                                   <button type="button" data-id="2" class="btn btn-munchkin selectAlbum album_privew"><span>Select Baby Book</span></button>
                                                     <?php } } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <img src="<?php echo base_url('assets/'); ?>images/3album1.png" class="img-fluid " alt="price1" >
                                                </td>
                                               
                                                <td>
                                                    <a href="#" class="btn  btn-munchkin album_privew" data-toggle="modal" data-target="#album_demo3">  <span> View</span></a>
                                                </td>
                                                 
                                                <td>
                                                     <?php if(@$select_album->album_id == 3){ ?>
                                                    <span>Baby Book Selected</span>
                                                    <?php } else{ 
                                                     if($check_print_status->print_status != 1){
                                                    ?>
                                                   <button type="button" data-id="3" class="btn btn-munchkin selectAlbum album_privew"><span>Select Baby Book</span></button>
                                                         <?php } } ?>
                                                </td>
                                            </tr>
                                         
                                            
                                        </tbody>
                                    </table>
                                       
                                       <?php if(@$select_album){ ?>
                                        <table class="table table-borderless booking-order-main-table selected_album" >
                                            <thead>
                                                <tr>
                                                   
                                                    <td>
                                                        <label>Selected Baby Book</label>
                                                    </td>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>    
                                                <?php if($select_album->album_id == 1){ ?>
                                                 <td class="text-center">
                                                        <img src="<?php echo base_url('assets/'); ?>img/dashboard_2.png" class="img-fluid " alt="price1" >
                                                        <img src="<?php echo base_url('assets/'); ?>img/album_back1.png" class="img-fluid " alt="price1" >
                                                    </td>
                                                
                                                <?php }elseif($select_album->album_id == 2){ ?>
                                                    <td class="text-center">
                                                        <img src="<?php echo base_url('assets/'); ?>img/dashboard_1.png" class="img-fluid " alt="price1" >
                                                        <img src="<?php echo base_url('assets/'); ?>img/dashboard_back.png" class="img-fluid " alt="price1" >
                                                    </td>
                                                    <?php } elseif($select_album->album_id == 3){ ?>
                                                     <td class="text-center">
                                                        <img src="<?php echo base_url('assets/'); ?>images/3album1.png" class="img-fluid " alt="price1" >
                                                        <img src="<?php echo base_url('assets/'); ?>images/3album2.png" class="img-fluid " alt="price1" >
                                                    </td>
                                                    
                                                    <?php } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            <!--<a href="#" class="btn  btn-munchkin album_privew" data-toggle="modal" data-target="#album_demo"> <span> View Demo</span></a>-->
                                            <a href="<?php echo base_url('Users/album'.$select_album->album_id); ?>" class="btn  btn-munchkin album_privew"> <span> View Preview</span></a>
                                        </div>
                                        <?php }else{ ?>
                                     
                                     <?php } ?>
                                    </form>
                                
                                </div>

                                
                                
                                
                            </div>

                      
                            
                            </div>
                        </div>
                </div>
            </div>	
        </div>
    </secction>
    
    
    
</main>
<?php include("include/footer.php") ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" />
<script src="<?php echo base_url('assets/user.js'); ?>"></script>


<!-- Modal -->
<div class="modal fade album_preview_css" id="album_demo" tabindex="-1" role="dialog" aria-labelledby="album_demo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="col-lg-12 text-center">
                <h2>Baby Book Preview</h2>
                <div class="wrapper1">
                  <div class="aspect">
                    <div class="aspect-inner">
                      <div class="flipbook" id="flipbook">
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album1.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album2.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album3.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album4.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album5.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album6.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album7.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album8.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album9.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album10.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album11.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album12.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album13.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album14.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album15.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album16.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album17.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album18.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album19.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album20.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album21.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album22.jpg'); ?>" alt="" /></div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <div class="flip-control">
                    <a href="#" id="prev"> <img src="<?php echo base_url('assets/img/prev.png'); ?>"> </a>
                    <a href="#" id="next"> <img src="<?php echo base_url('assets/img/next.png'); ?>"> </a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade album_preview_css" id="album_demo2" tabindex="-1" role="dialog" aria-labelledby="album_demo2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="col-lg-12 text-center">
                <h2>Baby Book Preview</h2>
                <div class="wrapper1">
                  <div class="aspect">
                    <div class="aspect-inner">
                      <div class="flipbook" id="flipbook2">
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album1.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album2.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album3.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album4.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album5.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album6.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album7.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album8.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album9.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album10.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album11.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album12.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album13.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album14.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album15.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album16.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album17.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album18.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album19.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album20.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album21.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album22.jpg'); ?>" alt="" /></div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <div class="flip-control">
                    <a href="#" id="prev2"> <img src="<?php echo base_url('assets/img/prev.png'); ?>"> </a>
                    <a href="#" id="next2"> <img src="<?php echo base_url('assets/img/next.png'); ?>"> </a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade album_preview_css" id="album_demo3" tabindex="-1" role="dialog" aria-labelledby="album_demo3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="col-lg-12 text-center">
                <h2>Baby Book Preview</h2>
                <div class="wrapper1">
                  <div class="aspect">
                    <div class="aspect-inner">
                      <div class="flipbook" id="flipbook3">
                       <div class="page"><img src="<?php echo base_url('assets/images/pre_3album1.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album2.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album3.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album4.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album5.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album6.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album7.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album8.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album9.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album10.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album11.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album12.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album13.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album14.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album15.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album16.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album17.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album18.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album19.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album20.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album21.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album22.jpg'); ?>" alt="" /></div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <div class="flip-control">
                    <a href="#" id="prev3"> <img src="<?php echo base_url('assets/img/prev.png'); ?>"> </a>
                    <a href="#" id="next3"> <img src="<?php echo base_url('assets/img/next.png'); ?>"> </a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

    		
<Style>
.album_preview_css{
    display: block !important;
    z-index: 0 !important;
}
.album_preview_css{
    display: block !important;
    z-index:  -10 !important;
}
.album_preview_css.show{
    z-index: 99999999 !important;
}
.custom_modal{
    position:absolute;
}
.add_miles .labels-mil {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}
.album_preview_css .close {
position: absolute;
    right: 0;
    color: #fff;
    opacity: 1;
    text-shadow: none;
    padding: 0;
    top: -25px;
}
.flip-control {
    margin-bottom: 2%;
}
</Style>


<script>

    var flipbookEL = document.getElementById('flipbook');
    
    window.addEventListener('resize', function (e) {
    	flipbookEL.style.width = '';
      flipbookEL.style.height = '';
      $(flipbookEL).turn('size', flipbookEL.clientWidth, flipbookEL.clientHeight);
    });
    
    $(flipbookEL).turn({
        autoCenter: true
    });  
    
    $("#prev").click(function(e){
    e.preventDefault();
    $("#flipbook").turn("previous");
});
$("#next").click(function(e){
    e.preventDefault();
$("#flipbook").turn("next");
});


    var flipbookEL = document.getElementById('flipbook2');
    
    window.addEventListener('resize', function (e) {
    	flipbookEL.style.width = '';
      flipbookEL.style.height = '';
      $(flipbookEL).turn('size', flipbookEL.clientWidth, flipbookEL.clientHeight);
    });
    
    $(flipbookEL).turn({
        autoCenter: true
    });  
    
    $("#prev2").click(function(e){
    e.preventDefault();
    $("#flipbook2").turn("previous");
});
$("#next2").click(function(e){
    e.preventDefault();
$("#flipbook2").turn("next");
});



var flipbookEL = document.getElementById('flipbook3');
    
    window.addEventListener('resize', function (e) {
    	flipbookEL.style.width = '';
      flipbookEL.style.height = '';
      $(flipbookEL).turn('size', flipbookEL.clientWidth, flipbookEL.clientHeight);
    });
    
    $(flipbookEL).turn({
        autoCenter: true
    });  
    
    $("#prev3").click(function(e){
    e.preventDefault();
    $("#flipbook3").turn("previous");
});
$("#next3").click(function(e){
    e.preventDefault();
$("#flipbook3").turn("next");
});


</script>