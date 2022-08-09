<div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">My Munchkin </a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url();?>assets/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/TweenMax.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/turn.min.js"></script> 
	<script src="<?php echo base_url();?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/deznav-init.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick-theme.min.css">
	
	<!-- Chart piety plugin files -->
    <script src="<?php echo base_url();?>assets/vendor/peity/jquery.peity.min.js"></script>
	
	
	
	<!-- Dashboard 1 -->
	<script src="<?php echo base_url();?>assets/js/dashboard/dashboard-1.js"></script>
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
<script>
var id;
var did;
var pixie = new Pixie({
    baseUrl: '<?php echo base_url();?>',
    crossOrigin: true,
    onSave: function(data, name) {
        $.ajax({
        url :"<?php echo base_url();?>Users/EditImage",
        method : "POST",
        data :{ img :data,name:name,id:id },
        beforeSend: function() {
        $("#summer_loader").show();
             },
             
        success:function(res){
        //alert(res);
         setTimeout(function(){
                        //$(this).unbind(e);
                      // window.location.replace(base_url+"Users/createpage"); 
                        // window.location.href='';
                        
                        $(".third").load(location.href + " .third");
                         $(".forth").load(location.href + " .forth");
                         $(".fifth").load(location.href + " .fifth");
                          $(".sixth").load(location.href + " .sixth");
                          $(".seventh").load(location.href + " .seventh");
                          $(".eighth").load(location.href + " .eighth");
                          $(".ninth").load(location.href + " .ninth");
                          $(".tenth").load(location.href + " .tenth");
                          $(".eleven").load(location.href + " .eleven");
                          $(".twelve").load(location.href + " .twelve");
                          $(".thirteen").load(location.href + " .thirteen");
                          $(".forthteen").load(location.href + " .forthteen");
                           $(".fifteen").load(location.href + " .fifteen");
                            $(".sixteen").load(location.href + " .sixteen");
                             $(".seventeen").load(location.href + " .seventeen");
                              $(".eighteen").load(location.href + " .eighteen");
                               $(".ninteen").load(location.href + " .ninteen");
                                $(".twenty").load(location.href + " .twenty");
                                 $(".twenty_one").load(location.href + " .twenty_one");
                                  $(".twenty_two").load(location.href + " .twenty_two");
                          
                          
                            },2000);
                             pixie.close();
        },
        complete: function() {
             $("#summer_loader").hide();
            }, 
        
        })
    },
    ui: {      
        visible: false, // whether pixie is visible initially
        mode: 'overlay',
        toolbar: {
        leftItems: [
        {
            type: 'image',
              src: "<?php echo base_url();?>assets/img/logo.png",
            showInCompactMode: true,
        },
        ]
        }
    },      
});
$(document).on("click",".edit_img",function(){
    var img = $(this).data('img');
    did = $(this).data('id');
    pixie.openEditorWithImage($(this).data('img'));
    id = did;
   
});


</script>
<script>
    $(function() {
        
    //     var dev_width;
    //     var dev_height;
    //  if(window.innerWidth >= 1024){
    //       dev_width = 1000; 
    //     dev_height = 400; 
    //  } else if(window.innerWidth < 1024){
    //     dev_width = 700; 
    //     dev_height = 280; 
    //  }else if(window.innerWidth < 540){
    //      dev_width = 180; 
    //     dev_height = 60;
    //  }   
      
     $('#mybook').booklet({
         width:  1000,
        pagePadding: 0,
        height: 400,
        arrows: true,
        pageNumbers: false,
        shadows: false,
            closed: true,
        autoCenter: true
        });
});
   $('.custom-goto').click(function(e){
       var page_id = $(this).data('id');
       //alert(page_id);
        e.preventDefault();
        $('#mybook').booklet("gotopage", page_id);
    });

$('#mobile_album').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    navText: ["<img src='<?php echo base_url();?>assets/img/prev.png'>","<img src='<?php echo base_url();?>assets/img/next.png'>"],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1  
        },
        1000:{
            items:1
        }
    }
})
    
</script>
   
</body>

</html>