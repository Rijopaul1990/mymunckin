<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 


<main class="template-page album">

<!-- <section class="banner" id="banner" >
	<div class="container">
		<div class="row">
			<div class="col-lg-5  ">
                <h1>Albums</h1>
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
	<div class="container explore " >
		<div class="row">

			<div class="col-lg-12 album_page">
			    
                <h2>Our Baby Books</h2>
                <div class="tab-content text-left" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab">
                        <div class="col-lg-12 ">
                                
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-categories" role="tabpanel" aria-labelledby="v-pills-categories-tab">
                                    
                                    <ul class="templates-card"> 
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#album_demo1">
                                                <div class="card-img">
                                				    <img src="<?php echo base_url('assets/') ?>img/dashboard_2.png" class="img-fluid "/>  
                                				</div>
                                		    </a> 
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#album_demo2">
                                                <div class="card-img">
                                				    <img src="<?php echo base_url('assets/') ?>img/dashboard_1.png" class="img-fluid "/>
                                				</div>
                                			</a> 
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#album_demo3">
                                                <div class="card-img">
                                				    <img src="<?php echo base_url('assets/') ?>images/album32.png" class="img-fluid "/>	</div>
                                				 
                                			</a>   
                                        </li>
                                    </ul>
                                        
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="<?php echo base_url('Users/dashboard') ?>" class="btn btn-munchkin "><span>CREATE BABY BOOK</span></a>
                        </div>
                    </div>
                    
                </div>
            </div>
		</div>
	</div>	
</section>


<!-- Modal -->
<div class="modal fade album_preview_css" id="album_demo1" tabindex="-1" role="dialog" aria-labelledby="album_demo1" aria-hidden="true">
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
                        <div class="page"><img src="<?php echo base_url('assets/images/album1.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album3.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album4.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album5.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album6.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album7.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album8.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album9.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album10.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album11.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album12.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album13.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album14.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album15.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album16.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album17.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album18.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album19.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album20.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album21.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album22.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/album2.png'); ?>" alt="" /></div>
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
                        <div class="page"><img src="<?php echo base_url('assets/images/2album1.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album3.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album4.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album5.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album6.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album7.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album8.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album9.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album10.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album11.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album12.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album13.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album14.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album15.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album16.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album17.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album18.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album19.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album20.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album21.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album22.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/2album2.png'); ?>" alt="" /></div>
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
                        <div class="page"><img src="<?php echo base_url('assets/images/album32.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album3.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album4.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album5.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album6.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album7.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album8.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album9.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album10.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album11.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album12.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album13.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album14.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album15.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album16.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album17.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album18.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album19.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album20.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album21.png'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album22.png'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/3album2.png'); ?>" alt="" /></div>
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



</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>


	
<Style>
.album_preview_css{
    display: block !important;
    z-index: 0 !important;
}
.album_preview_css{
    display: block !important;
    z-index: -10 !important;
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
    top: -25px;
    color: #fff;
    opacity: 1;
    text-shadow: none;
    padding: 0;
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
    	flipbookEL.style.width = '100%';
      flipbookEL.style.height = '400';
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
