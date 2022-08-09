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
  font-family: Flame;
  src: url(<?php echo base_url('assets/'); ?>fonts/Flame.woff);
}
.main-bg{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
       max-width: 500px;
    margin: 0 auto;
    padding: 15px 0;
    position: relative;
    text-align: center;
    z-index: 9;
}
.top-sec {
    height:480px;
    width: 100%;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: flex-end;
    flex-wrap: wrap;
}

.top-sec .left-top h3 {
    font-family: 'Flame';
    color: #bd7a58;
    font-weight: 400;
    width: 100%;
    font-size: 56px;
    margin: 10px auto;
}

.top-sec .left-top p {
    font-family: 'Nunito', sans-serif;
    color: #111;
    font-weight: 600;
    width: 100%;
    font-size: 22px;
    margin: 0 auto 10px;
}
.title-bot p{
    font-family: 'Nunito', sans-serif;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    color: #4F4F4F;
    width: 70%;
    margin: auto;
}
.title-bot p.date{
    font-size: 24px;
    font-weight: 600;
    color: #56250d;

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
.bottom-sec{
    height:200px;
}
.title2-bot p {
     font-family: 'Nunito', sans-serif;
    color: #4F4F4F;
    font-size: 20px;
    width: 100%;
    margin: 10px auto 0px;
    line-height: 1;
    text-align: center;
    font-weight: 600;
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

    
<div id="loader">
    <h3><strong>Processing Frames..</strong></h3>
    <div id="gif-save-progress-bar" data-preset="energy"></div>
</div>
    <div id="backdrop"></div>
    
        <div id="widget" class="main-bg">
        <img id="frame-holder" src="<?php echo base_url('assets/images/preg_001.png'); ?>" data-path="<?php echo base_url('assets/prg-frame/p'); ?>" data-frames="24" class="bg-image" crossorigin="anonymous">  
             <div id="content">
                <div class="top-sec">
                    <div class="left-top">
                        <h3> Coming Soon    </h3>
                        <p input-name="description">We are having a Baby</p>
                    </div>
                </div>
        
                <div class="bottom-sec">
        
                    <div class="title-bot">
                        <!--<p>Expected Date or Month</p>-->
                        <p class="date" input-name="t_date">  29 JAN 1996</p>
                    </div>
                    <div class="title2-bot">
                      <p input-name="together_parent_name">ANGELINA & JOHNSON</p> 
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