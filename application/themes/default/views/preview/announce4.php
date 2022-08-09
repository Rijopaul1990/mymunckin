<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">  
  
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>loader/loader.min.css">
    <script src="<?php echo base_url('assets/'); ?>loader/loader.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js"></script>
 

    <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/gifshot/0.3.2/gifshot.min.js"></script>
<style>


@font-face {
  font-family: Crows;
  src: url(<?php echo base_url('assets/'); ?>fonts/Crows.woff);
}
.main-bg{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
       max-width: 500px;
    margin: 0 auto;
    padding: 20px 0;
    position: relative;
    text-align: center;
    z-index: 9;
}
.top-sec {
    height: 320px;
    width: 100%;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: flex-end;
    flex-wrap: wrap;
}

/*.top-sec .left-top {*/
/*    position: relative;*/
    /*height: 50VH;*/
/*}*/
.top-sec .left-top h3 {
    font-family: 'Nunito', sans-serif;
    color: #4F4F4F;
    font-weight: 600;
    width: 100%;
    font-size: 16px;
    margin: 10px auto
}
.top-sec .left-top h2 {
    font-family: 'Crows' !important;
    color: #354406;
    font-weight: 500;
    /*width: 80%;*/
    font-size: 80px;
    margin: 10px auto 0;
    line-height: 1;
    text-transform: capitalize;
    text-align: center;
}

.top-sec .left-top h2 span{
    float:right;
    font-family: 'Crows';
    margin: -15px 0 0;
    text-transform: capitalize;
    
}
.top-sec .left-top img {
    width: 120px;
}
.top-sec .right-top {
    width: 50%;
}
.top-sec .right-top h2{
    font-family: 'Pacifico', cursive;
    font-size: 52px;
    line-height: 1.2;
    color: #f3999b;
    font-weight: 500;
    position: relative;
}

.top-sec .right-top h2:after{
    content: '';
    background: url(images/moon.svg);
    width: 50px;
    height: 50px;
    position: absolute;
    background-size: contain;
    right: 20px;
    top: 20px;
    background-repeat: no-repeat;
}

.bottom-sec {
    /*width: 80%;*/
    margin: auto;
    height: 350px;
}
.white-bottom{
    width: 65%;
    margin: 10px auto;
    text-align: center;
    color: #7C525A;
    font-size: 18px;
    line-height: 1.2;

}
.white-bottom p{   
    font-family: 'Nunito', sans-serif;
    text-transform: uppercase;
    color: #4F4F4F;
    font-weight: 600;
}
.title-bot p{
    font-family: 'Nunito', sans-serif;
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    line-height: 1;
    color: #4F4F4F;
    border-bottom: 2px solid #82a90b;
    width: 66%;
    padding: 0 0 10px;
    margin: auto;

}

.title-bot {
    position: relative;
}
.title-bot h3{
    text-align: center;
    font-size: 56px;
    font-family: 'flame';
    line-height: 1;
    margin: 0 0 15px;
    color: #FD8DB4;
    font-weight: 400;
}
.title-bot span {
    font-size: 16px;
    color: #4F4F4F;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
}


.title2-bot h3 {
    font-family: 'tahoma';
    font-weight: 100;
    margin-bottom: 5px;
    font-size: 18px;
}
.title2-bot p {
font-family:'Nunito', sans-serif;
    color: #000;
    font-size: 30px;
    width: 100%;
    margin: 20px auto 0px;
    line-height: 1;
    text-align: center;
    font-weight: 500;
}
.title2-bot p span{
    font-family: 'Nunito', sans-serif;
    font-size: 42px;
    color: #000000;
    display: block;
    margin-top: 5px;
    font-weight: 300;
}
.time-bot  {
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
}
.time-bot ul {
    display: inline-flex;
    margin: 0 0;
    font-family: 'tahoma';
    padding: 0;
}
.time-bot li {
    display: inline-block;
    position: relative;
    border-right: 2px solid #E57A9B;
    padding: 0 12px;
}

.time-bot li:last-child {
    
    border-right: none;
}
.time-bot p {
    font-family: 'Montserrat Alternates', sans-serif;
    margin: 10px 0 20px;
}

 #result img{
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}

.bg-image{
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}
div#loader,div#backdrop{
    display:none;
}
.loading div#loader {
    
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction:column;
}
.loading div#backdrop {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #fff;
    z-index: 99;
    opacity: 0.8;
    display: block;
}
</style>
<!--<?php $arr = explode(" ",$fetch_create_template->b_name); ?>-->

    <!--<div class="main-bg" id="cont">-->
    <!--    <div id="result"></div> -->
    <!--    <div class="top-sec">-->
    <!--        <div class="left-top">-->
    <!--            <h3> SAY HELLO TO    </h3>-->
    <!--            <h2> <?php echo @$arr[0]; ?> <span><?php echo @$arr[1]; ?></span>    </h2>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--    <div class="bottom-sec">-->

    <!--        <div class="title-bot">-->
    <!--            <p><?php echo @$fetch_create_template->together_parent_name; ?></p> -->
    <!--        </div>-->
    <!--        <div class="title2-bot">-->
    <!--            <p> <?php echo @$fetch_create_template->t_date; ?> <span>  <?php echo @$fetch_create_template->t_time; ?>   </span> </p>-->
    <!--        </div>-->
        
    <!--        <div class="white-bottom">-->
    <!--            <p> <?php echo @$fetch_create_template->description; ?></p>-->
    <!--        </div>-->
    <!--    </div>-->


    <!--</div>-->
    
<div id="loader">
    <h3><strong>Processing Frames..</strong></h3>
    <div id="gif-save-progress-bar" data-preset="energy"></div>
</div>
    <div id="backdrop"></div>
    
        <div id="widget" class="main-bg">
        <img id="frame-holder" src="<?php echo base_url('assets/images/zoo16.png'); ?>" data-path="<?php echo base_url('assets/zoo_frame/zoo'); ?>" data-frames="28" class="bg-image" crossorigin="anonymous">  
            <div id="content">
                <div class="top-sec">
                    <div class="left-top">
                        <h3> SAY HELLO TO    </h3>
                        <h2 input-name="b_name" > Sharthak    </h2>
                    </div>
                </div>
        
                <div class="bottom-sec">
        
                    <div class="title-bot">
                      <p input-name="together_parent_name">Aman Singh & Smriti Singh</p> 
                    </div>
                    <div class="title2-bot">
                        
                <p> <span input-name="t_date"> 30 August, 23 </span> <span input-name="t_time"> 6:00 PM  </span> </p>
                        <!--<p>30 August, 23 <span> 6:00 PM   </span> </p>-->
                    </div>
                
                    <div class="white-bottom">
                        <p input-name="description">This is some random stuff about our baby!!</p>
                    </div>
                </div>
            </div>
        </div>
        
         
<!--<input type="button" id="btnSave" value="Save PNG"/>-->
<div id="img-out"></div>

 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   
   
        <script>
    $(function() { 
        var baseUrl = $("#base_url").val(),
        userId = 345,
         
        
        
        templateId = $("#temp_id").val(),
        progressBar = new ldBar("#gif-save-progress-bar"),
        ele = document.getElementById('frame-holder'),
        path = ele.getAttribute('data-path'),
        frameNo = 1;
        const frames = parseInt(ele.getAttribute('data-frames'));
        var progressPercentageStepSize = 100 / frames,
        currentProgressPercentage = 0;
        
        progressBar.set(currentProgressPercentage);
        
        document.getElementById("btnSave").addEventListener("click", function() {
            currentProgressPercentage = 0;
            $('body').addClass('loading');
            var imageSave = function(){
                var currentFrame = `${path}${frameNo}.png`;
                ele.setAttribute('src', currentFrame)
                html2canvas(document.querySelector('#widget'),
                {
                    scrollX: -window.scrollX,
                    scrollY: -window.scrollY,
                    windowWidth: document.documentElement.offsetWidth,
                    windowHeight: document.documentElement.offsetHeight
                }
                ).then(function(canvas) {
                    var dataURL = canvas.toDataURL();
                    $.ajax({
                            type: "POST",
                            url: baseUrl +"Users/CreateGIFFrames",
                            data: {
                                imgBase64: dataURL,
                                templateId : templateId,
                                frameNo: frameNo
                            }
                    }).done(function(o) {
                        if(frameNo<frames){
                            progressBar.set(currentProgressPercentage)
                            currentProgressPercentage = currentProgressPercentage + progressPercentageStepSize;
                            frameNo++;
                            imageSave();
                        }else{
                            progressBar.set(100)
                            frameNo = 0
                            $("#gif-save-progress-bar").hide();
                            progressBar.set(0);
                            createGIF();
                        }
                    });
                });
            }
            imageSave();
        });
        
        var createGIF = function() {
            var imagesArray = [];
            var int = 1;
            b_name  = $('input[name="b_name"]').val(),
         together_parent_name  = $('input[name="together_parent_name"]').val(),
          t_date  = $('input[name="t_date"]').val(),
           t_time  = $('input[name="t_time"]').val(),
          description  = $('input[name="description"]').val(),
            $('#loader h3').text('Creating GIF...');
            //Push frames into imageArray for gifshot
            while(int <= frames){
                imagesArray.push(`${baseUrl}/upload/frames/${templateId}_${int}.png`);
                int++;
            }
            
            gifshot.createGIF({
                images: imagesArray,
                gifWidth:1000,
                gifHeight: 1420,
                progressCallback: function(captureProgress) {
                    if(captureProgress < 0.1){
                        $("#gif-save-progress-bar").show();
                    }
                    progressBar.set(captureProgress*100);
                },
                completeCallback: function() {
                    $('#loader h3').text('Process Complete');
                },
            }, function (obj) {
                if (!obj.error) {
                    progressBar.set(100)
                    var gif = obj.image;
                  //  saveAs(gif, `file-name${userId}.gif`);
                    $.ajax({
                            type: "POST",
                              url: baseUrl +"Users/SaveGIF",
                            data: {
                                imgBase64: gif,
                                templateId : templateId,
                                b_name : b_name,
                                together_parent_name  : together_parent_name,
                                t_date : t_date,
                                t_time : t_time,
                                description : description, 
        
                                
                            }
                    }).done(function(o) {
                        console.log(o);
                        $('body').removeClass('loading');//This should work once the server issue is fixed
                         $("#loading").show();
                        window.location.href= baseUrl+"Users/share";
                    });
                    $('body').removeClass('loading');
                }
            });
        }
        function saveAs(uri, filename) {
            var link = document.createElement('a');
            if (typeof link.download === 'string') {
                link.href = uri;
                link.download = filename;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            } else {
                window.open(uri);
            }
        }
    }); 
        </script>