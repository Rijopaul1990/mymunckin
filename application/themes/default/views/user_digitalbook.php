	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/cropper.css">
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/crop_main.css">
<style>
     .btn-munchkin{
        margin-bottom :15px !important;
    } 
    .kk .img-preview{
        box-shadow: 0 0 10px #797979;
    }
    .kk{
         position: fixed;
        width: 85%; 
        z-index: 9999999;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        margin: auto;
        display: inline-flex;
        align-items: center;
        background: #fff;
        box-shadow: 0 0 10px #797979;
    }
    .kk #img-cropper{
        width: 60%;
        box-shadow: none !important;
        margin-right: 2%;
    }
    
    
    .login-page .banner .form-control {
        color: #495057 !important;
        padding: .375rem .75rem !important;
        border-radius: .25rem !important;
        font-size: 1rem !important;
        width: 100% !important;
    }
    .dashboard-color label {
        font-size: 14px;
        font-weight: 700;
        color: #4D1818;
    }
    .digital_pri{
        overflow: hidden;
        width: 350px !important;
        height: 200px !important;
    }
    .digital_pri img{
        width: 100% !important;
    }
    
    .img-preview {
      overflow: hidden;
      width: 350px !important; 
      height: 200px  !important;
    }
    .dashboard .tab-pane tbody td .img-preview img{
      width: 100% !important; 
    }
    div#img-cropper {
        border: 1px solid #f5f5f5;
        padding: 5px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 0 1px rgba(53,72,91,.1),0 3px 2px rgba(0,0,0,.04),0 7px 5px rgba(0,0,0,.02),0 13px 10px rgba(0,0,0,.02),0 22px 17px rgba(0,0,0,.02)!important;
    }
    
    .img-cropper-open{
      cursor: pointer;
        text-align: left;
        padding: 15px 20px;
    }
    #img-cropper .row:before ,.row:after{
        content:none !important;
    }
    button.close_editor {
    position: absolute;
        top: -10px;
        right: -10px;
        border: none;
        font-size: 24px;
        font-weight: 700;
        outline: none;
        background: #ff721d;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: #fff;
    }
    .digital_pgi li{
        margin: 0 6px;
        border: none;
        border-radius: 20px;
    }
    .digital_pgi .page-item.active .page-link {
        background-color: #ff721d;
        border-color: #ff721d;
        border-radius: 20px;
    }
    .digital_pgi li a{
        text-decoration: none;
        color: #000;
    }
        .update_image input {
        display: none;
    }
    .update_image span i {
        display: none;
    }
    .update_image input:checked + span i {
        display: block;
    }
    .update_image span {
        width: 25px;
        height: 25px;
        font-size: 12px;
        border: 1px solid;
        display: inline-flex;
        align-items: center;
        justify-content: center;
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
                              
                                <div class="tab-pane fade show active" id="v-pills-milestones" role="tabpanel" aria-labelledby="v-pills-milestones-tab">
                                   <span class="title-table ">  Digital Book</span>
                                   
                                   <span class="float-right">
                                        <a class="btn  btn-munchkin " id="RemoveMulitpleDigitalBook" href="javascript:void(0);" ><span><i class="fas fa-trash"></i>  Delete Pictures</span></a>
                                    
                                    </span>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-borderless booking-order-main-table ">
                                            <thead>
                                                <tr>
                                                    <td>
                                                      <label>#</label>
                                                    </td>
                                                    <td>
                                                        <label>Pictures</label>
                                                    </td>
                                                    <td>
                                                        <label>Action</label>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(is_array($all_digital_album) || is_object($all_digital_album)){
                                                    foreach($all_digital_album as $digital_album){
                                                ?>
                                                <tr>
                                                    
                                                    <td>
                                                        <label class="update_image select_mill_pic">  
                                                            <input type="checkbox" name="digitalbook[]" class="tem-picture" value="<?php echo $digital_album->id; ?>">
                                                            <span class="btn  text-success"><i class="fas fa-check"></i></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="digital_pri">
                                                        <img src="<?php echo base_url($digital_album->img) ?>" class="img-fluid " alt="price1" >
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="btn  btn-munchkin text-center btn_modal_edit img-cropper-open" data-id="<?php echo $digital_album->id; ?>" data-img="<?php echo base_url($digital_album->img) ?>"  data-toggle="modal" data-target="#edit_miles"><span>Edit Picture</span></div>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <?php } } ?>
                                            </tbody>
                                          

                                        </table>
                                          <nav aria-label="Page navigation example" class="review-pagi digital_pgi">
                                              <ul class="pagination justify-content-center align-items-center">
                                               
                                               <?php echo  $links; ?>
                                            
                                              </ul>
                                            </nav>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </section>
    <input type="hidden" id="update_id">
    <div class="kk d-none">
        <div id="img-cropper" class="d-none">
            <div class="docs-demo"> 
                <div class="img-container">
                <img class="cropimg"   alt="Picture">
                </div>
            </div>
            <div id="actions">
                <div class="docs-buttons">
                    <div class="btn-group btn-group-crop">
                      <button type="button" class="btn btn-munchkin save_img"data-method="getCroppedCanvas" data-dismiss="modal" aria-label="Close" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                        <span class="docs-tooltip" data-toggle="tooltip">
                          Save Image
                        </span>
                      </button> 
                      <!--<button type="button" id="getcropImage" class="btn btn-munchkin ml-3" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">-->
                      <!--  <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.getCroppedCanvas({ maxWidth: 4096, maxHeight: 4096 })">-->
                      <!--    Get Cropped Canvas-->
                      <!--  </span>-->
                      <!--</button>-->
                    </div>
                </div>
            </div>
        </div> 
        <div>
            <p class="mb-3 font-weight-bold text-center">Digital Album Preview</p>
            <div class="img-preview canvas_img"> 
                <img  class="img-fluid " id="preview_img"   alt="price1" >
            </div>
        </div> 
        <button type="button" class="close_editor">
          <span>×</span>
        </button>
    </div> 
        
        <div class="modal docs-cropped " id="getCroppedCanvasModal" aria-labelledby="getCroppedCanvasTitle" tabindex="-1" style="z-index:999999999;" aria-modal="true" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body"><canvas width="524" height="294"></canvas></div>
            </div>
          </div>
        </div>
        
    
</main>
<?php include("include/footer.php") ?>
<script>
    $(document).on("click",".btn_modal_edit",function(){
    var imgPath = $(this).data('img');
    //alert(imgPath);
    $(".cropimg").attr("src", imgPath);
    $("#preview_img").attr("src", imgPath);
    $(".cropper-hide").attr("src", imgPath);
    $(".cropper-view-box img").attr("src", imgPath);
})

</script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" />
<script src="<?php echo base_url('assets/user.js'); ?>"></script>
<script src="<?php echo base_url('assets/') ?>js/cropper.js"></script>
<script src="<?php echo base_url('assets/') ?>js/cop_main2.js"></script> 
<script>

 $(function() { 
    $('#preview_form input').keyup(function(){
        var inputValue = $(this).val();
        var targetField = $(this).attr('name');
        $(`[input-name=${targetField}]`).text(inputValue);
    })
    
    
    $('.img-cropper-open').click(function(){
        $('#preview_form').addClass('d-none');
        $('#img-cropper').removeClass('d-none');
        $('.kk').removeClass('d-none');
         var imgPath = $(this).data('img');
         var ID = $(this).data('id');
         $("#update_id").val(ID);
    //alert(imgPath);
        $(".cropimg").attr("src", imgPath);
        $("#preview_img").attr("src", imgPath);
        $(".cropper-hide").attr("src", imgPath);
        $(".cropper-view-box img").attr("src", imgPath);
        cropperInit();
    })
     $('.close_editor').click(function(){
        $('#img-cropper').addClass('d-none');
        $('.kk').addClass('d-none');
        window.location.href='';
    })
    
    //   $('#getcropImage').click(function(){
    //     $('#img-cropper').removeClass('d-none');
    //     $('.kk').addClass('d-none');
    // })
    $('.save_img').click(function(){
        $('#img-cropper').addClass('d-none');
        $('.kk').addClass('d-none');
        $('#preview_form').removeClass('d-none');
    })
    $('#img-cropper-close').click(function(){
        $('#img-cropper').addClass('d-none');
        $('.kk').addClass('d-none');
        $('#preview_form').removeClass('d-none');;
    })
});


$(document).ready(function(){
    $('#inputImage').change(function(e){
        var fileName = e.target.files[0].name;
        console.log(fileName);
        $(".img-cropper-open").html(fileName);
    });
});

</script>

