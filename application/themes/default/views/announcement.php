<?php// print_r(phpinfo()); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/cropper.css">
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/crop_main.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js"></script>
  

<style>
    .loader {
    position: absolute;
    width: 100%;
    left: 0;
    z-index: 9;
    top: 35%;
}
</style>


<style>

    .img-preview {
      overflow: hidden;
      width: 300px; 
      height: 250px;
    }
    div#img-cropper {
        border: 1px solid #f5f5f5;
        padding: 5px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 0 1px rgba(53,72,91,.1),0 3px 2px rgba(0,0,0,.04),0 7px 5px rgba(0,0,0,.02),0 13px 10px rgba(0,0,0,.02),0 22px 17px rgba(0,0,0,.02)!important;
    }
    
    #img-cropper-open{
      cursor: pointer;
        text-align: left;
        padding: 15px 20px;
        height: 54px;
    }
    #img-cropper .row:before ,.row:after{
        content:none !important;
    }
</style>


<main class="template-page announ">

<!-- <section class="banner" id="banner" >
	<div class="container">
		<div class="row">
			<div class="col-lg-6  ">
                <h1>Create Announcement</h1>
                <p>Lorem Ipsum is simply dummy text of<br> the printing and typesetting industry</p>
			</div>
		</div>	
	</div>
	<img src="img/about-wave.png" class="img-fluid banner-cloud"/>
</section> -->
<?php include 'inner_banner.php'; ?>

<section class="template-tab text-center position-relative" id="price" >
    <div class="background-icons4">
        <img src="<?php echo base_url('assets/') ?>img/icons/duck.svg" class="img-fluid price1" alt="price1" >
        <img src="<?php echo base_url('assets/') ?>img/icons/leave.svg" class="img-fluid price2" alt="price2" >
    </div>	
	<div class="container explore " >
	    <div class="loader" id="loading" style="display:none;">
            <img src="<?php echo base_url('assets/loding.gif'); ?>">
        </div>
		<div class="row">
        
			<div class="col-md-12 col-lg-5 ">
                <h2>Fill the Details</h2>
                <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
                <form id="preview_form" method="post" enctype='multipart/form-data'>
                    <input type="hidden" name="temp_id" id="temp_id" value="<?php echo $fetch_template->id; ?>">
                   
                    
                    
                    <?php if($fetch_template->id == 4 ||$fetch_template->id == 16 || $fetch_template->id == 10 || $fetch_template->id == 9 || $fetch_template->id == 8 ||   $fetch_template->id == 12 ||  $fetch_template->id == 19 || $fetch_template->id == 14 || $fetch_template->id == 17 || $fetch_template->id == 18){ ?>
                    <div class="form-group">
                        <input type="text" name="b_name" class="form-control" placeholder="Baby Name" value="<?php echo @$temp_data->b_name; ?>">
                     </div>
                     <?php } ?>
                    
                    
                      <?php if($fetch_template->id == 21 || $fetch_template->id == 7 || $fetch_template->id == 5 || $fetch_template->id == 2 || $fetch_template->id == 13 || $fetch_template->id == 15 ||  $fetch_template->id == 12 || $fetch_template->id == 11 || $fetch_template->id == 3 || $fetch_template->id == 19 || $fetch_template->id == 1 || $fetch_template->id == 6 || $fetch_template->id == 14 || $fetch_template->id == 17 || $fetch_template->id == 18){ ?>
                      <div class="form-group">
                        <input type="text" name="together_parent_name" class="form-control" placeholder="Parents Name (ANGELINA & JOHNSON)" value="<?php echo @$temp_data->together_parent_name; ?>">
                     </div>
                      <?php } ?>
                    
                    
                    <?php if($fetch_template->id == 21 || $fetch_template->id == 7 || $fetch_template->id == 4 || $fetch_template->id == 16 || $fetch_template->id == 10 || $fetch_template->id == 9 || $fetch_template->id == 8  ||  $fetch_template->id == 12 || $fetch_template->id == 11 || $fetch_template->id == 3 || $fetch_template->id == 19 || $fetch_template->id == 2 || $fetch_template->id == 1 || $fetch_template->id == 6 || $fetch_template->id == 14 || $fetch_template->id == 17 || $fetch_template->id == 18){ ?>
                    <div class="form-group">
                        <input type="text" name="t_date" class="form-control" placeholder=" <?php echo  $fetch_template->id == 1 || $fetch_template->id == 5 || $fetch_template->id == 6 || $fetch_template->id == 7 || $fetch_template->id == 21?'Expected Date or Month':'Date';  ?>" value="<?php echo @$temp_data->t_date; ?>">
                     </div>
                     <?php } ?>
                     
                     <?php if($fetch_template->id == 12 ){ ?>
                    <div class="form-group">
                        <input type="text" name="t_month" class="form-control" placeholder="Month" value="<?php echo @$temp_data->t_month; ?>">
                     </div>
                     <?php } ?>
                     
                      <?php if($fetch_template->id == 17 || $fetch_template->id == 14 || $fetch_template->id == 16 ||$fetch_template->id == 4 || $fetch_template->id == 10 || $fetch_template->id == 9 || $fetch_template->id == 8 ||   $fetch_template->id == 12 || $fetch_template->id == 11 || $fetch_template->id == 3 ||  $fetch_template->id == 19 || $fetch_template->id == 18){ ?>
                    <div class="form-group">
                        <input type="text" name="t_time" class="form-control" placeholder="Time (6:00 PM)" value="<?php echo @$temp_data->t_time; ?>">
                     </div>
                     <?php } ?>
                     
                      <?php if($fetch_template->id == 4 || $fetch_template->id == 16 || $fetch_template->id == 9  || $fetch_template->id == 11 || $fetch_template->id == 3){ ?>
                    <div class="form-group">
                        <input type="text" name="t_day" class="form-control" placeholder="Day (SATURDAY)" value="<?php echo @$temp_data->t_day; ?>">
                     </div>
                     <?php } ?>
                     
                     
                      <?php if($fetch_template->id == 10  || $fetch_template->id == 15 || $fetch_template->id == 11 || $fetch_template->id == 3 || $fetch_template->id == 19 || $fetch_template->id == 5 || $fetch_template->id == 1 || $fetch_template->id == 6 || $fetch_template->id == 7 || $fetch_template->id == 14 || $fetch_template->id == 17){ ?>
                    <div class="form-group">
                        <!--<input type="file" name="u_img" class="form-control" >-->
                        
                        
                        <div class="form-control " id="img-cropper-open">Select image for template</div>
                        
                     </div>
                     
                     <?php } ?>
                     
                     
                     
                     
                      <?php if($fetch_template->id == 11 || $fetch_template->id == 9 || $fetch_template->id == 8 || $fetch_template->id == 15 || $fetch_template->id == 13 || $fetch_template->id == 3 || $fetch_template->id == 4 || $fetch_template->id == 16 || $fetch_template->id == 10 ){ ?>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo @$temp_data->address; ?>">
                     </div>
                     <?php } ?>
                    
                     
                      <?php if($fetch_template->id == 21 || $fetch_template->id == 9 || $fetch_template->id == 13 || $fetch_template->id == 10 ||   $fetch_template->id == 15 ||  $fetch_template->id == 12 ||  $fetch_template->id == 11 || $fetch_template->id == 3 || $fetch_template->id == 19 || $fetch_template->id == 5 || $fetch_template->id == 1 || $fetch_template->id == 6 || $fetch_template->id == 14 || $fetch_template->id == 17 || $fetch_template->id == 18){ ?>
                      <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Small Description" value="<?php echo @$temp_data->description; ?>">
                     </div>
                     <?php } ?>
                     
                    <a href="<?php echo base_url('templates'); ?>" class="btn btn-munchkin"><span>Back</span></a>
                    <?php if($fetch_template->id == 18 || $fetch_template->id == 21) { ?>
                     <button type="button" id="btnSave" class="btn btn-munchkin"><span>Share</span></button>
                    <?php } else{ ?>
                    <button type="submit" id="load" class="btn btn-munchkin"><span>Share</span></button>
                     <?php } ?>
                   
                </form>
                
                 <div id="img-cropper" class="d-none">
                    <div class="row">
                        <div class="col-md-12">
                          <!-- <h3>Demo:</h3> -->
                            <div class="docs-demo">
                                <div class="img-container">
                                <img class="cropimg" src="<?php echo base_url('assets/') ?>img/logo.png" alt="Picture">
                                </div>
                            </div>
                            <div id="actions">
                                <div class="docs-buttons">
                                    <div class="btn-group">
                                      <!--<button type="button" class="btn btn-primary" data-method="reset" title="Reset">-->
                                      <!--  <span class="docs-tooltip" data-toggle="tooltip" title="Reset Cropping">-->
                                      <!--    <span class="fa fa-sync-alt"></span>-->
                                      <!--  </span>-->
                                      <!--</button>-->
                                      <label class="btn btn-upload btn-munchkin mt-0" for="inputImage" title="Upload image file">
                                        <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                        <span class="docs-tooltip" data-toggle="tooltip" >
                                          <i class="fas fa-upload mr-1"></i>Upload Image
                                        </span>
                                      </label>
                                    </div>
                            
                                    <div class="btn-group btn-group-crop">
                                      <button type="button" class="btn btn-munchkin save_img" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                        <span class="docs-tooltip" data-toggle="tooltip">
                                          Save Image
                                        </span>
                                      </button>
                                    </div>
                                    <!--<button id="click-image">Click Image</button>-->
                                    <!--<a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>-->
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                
                
			</div>
			<div class="col-md-12 col-lg-7 ">
			    
			 
                <?php include 'preview/'.$fetch_template->template_name.".php"; ?>
                
                
                
                
			</div>
			
		</div>	
	</div>	
</section>


</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/user.js'); ?>"></script>


    <script src="https://unpkg.com/bootstrap@4/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/') ?>js/cropper.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/cop_main.js"></script>
    <script>
     $(document).ready(function() {
            var together_parent_name = $('[name="together_parent_name"]').val();
            $(`[input-name=together_parent_name]`).text(together_parent_name);
            
            
             var t_date = $('[name="t_date"]').val();
            $(`[input-name=t_date]`).text(t_date);
            
             var t_time = $('[name="t_time"]').val();
            $(`[input-name=t_time]`).text(t_time);
            
             var t_day = $('[name="t_day"]').val();
            $(`[input-name=t_day]`).text(t_day);
            
             var t_month = $('[name="t_month"]').val();
            $(`[input-name=t_month]`).text(t_month);
            
             var b_name = $('[name="b_name"]').val();
            $(`[input-name=b_name]`).text(b_name);
            
             var description = $('[name="description"]').val();
            $(`[input-name=description]`).text(description);
            
             var address = $('[name="address"]').val();
            $(`[input-name=address]`).text(address);
            
            
            
        });
    
    
        $(function() { 
            $('#preview_form input').keyup(function(){
                var inputValue = $(this).val();
                var targetField = $(this).attr('name');
                $(`[input-name=${targetField}]`).text(inputValue);
            })
            
            
            $('#img-cropper-open').click(function(){
                $('#preview_form').addClass('d-none');
                $('#img-cropper').removeClass('d-none');
                cropperInit();
            })
            
            $('.save_img').click(function(){
                $('#img-cropper').addClass('d-none');
                $('#preview_form').removeClass('d-none');
            })
            $('#img-cropper-close').click(function(){
                $('#img-cropper').addClass('d-none');
                $('#preview_form').removeClass('d-none');;
            })
        });
        
        $('#click-image').on('click',function(){
            html2canvas(document.querySelector('#cont'),
                {
                    scrollX: -window.scrollX,
                    scrollY: -window.scrollY,
                    windowWidth: document.documentElement.offsetWidth,
                    windowHeight: document.documentElement.offsetHeight,
                    allowTaint : true
                }
                ).then(function(canvas) {
                    var dataURL = canvas.toDataURL();
                    saveAs(dataURL, `file-name.png`);
                });
            
            // html2canvas(document.querySelector('#cont')).then(function(canvas) {
            //         saveAs(canvas.toDataURL(), `file-name.png`);
            // });
        })
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
        var svgElements = document.body.querySelectorAll('svg');
svgElements.forEach(function(item) {
    item.setAttribute("width", item.getBoundingClientRect().width);
    item.setAttribute("height", item.getBoundingClientRect().height);
    item.style.width = null;
    item.style.height= null;
});



$(document).ready(function(){
    $('#inputImage').change(function(e){
        var fileName = e.target.files[0].name;
        console.log(fileName);
        $("#img-cropper-open").html(fileName);
    });
});

    </script>
    
    
