 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>

@font-face {
  font-family: Magenta-Rose;
  src: url(<?php echo base_url('assets/'); ?>fonts/Magenta-Rose.woff);
}
.main-bg{
        max-width: 500px;
    margin: 0 auto;
    padding: 30px 0 0;
    position: relative;
    text-align: center;
    z-index:9;
}
.top-sec {
    width: 100%;
    position: relative;
    /*height: 600px;*/
}

.top-sec img{
    width: 320px;
    height: 320px;
    object-fit: cover;
    /*border-radius: 50%;*/
    position: absolute;
    left: 0px; 
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    /*top: 105px;*/
}
.exp h3{
    color: #8c402f;
    font-size: 26px;
    font-weight: 600;
}
.exp .parent {
    font-size: 20px;
}
.top-sec .left-top {
     position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/preg-frame3.svg);*/
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    height: 410px;
    text-align: center;
}
.top-sec .left-top img {
    width: 270px;
    margin: 22px 0;
    object-fit: cover;
    border-radius: 50%;

}



.title-bot h3{
text-align: center;
    font-size: 26px;
    font-family: 'Magenta-Rose', cursive;
    line-height: 1;
    margin: 0 50px 10px;
    color: #917B6D;
    font-weight: 500;
}


.title2-bot h3 {
    font-family: 'Magenta-Rose', cursive;
    font-weight: 100;
    font-size: 25px;
    color: #5F8E5F;
    text-align: center;
    margin-top: 25px ;
}

.title2-bot {
    height: 105px;
}

.bg-image{
    position: absolute;
    left: 0;
    top: 0;
    /*width: auto;*/
    width: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}
.bg-frame{
left: 0 !important;
    top: 0 !important;
    height: 400px !important;
    right: 0 !important;
    margin: auto !important;
    width: auto !important;
    border-radius: 0 !important;
}
.top-sec .canvas_img {
    width: 290px !important;
    height: 290px  !important;
    /* object-fit: cover; */
    border-radius: 50%;
    position: absolute;
    left: -18px;
    right: 0;
    margin: auto;
    /* display: flex; */
    justify-content: center;
    /* align-items: center; */
    top: 98px;
}
</style>

    <div class="main-bg" id="cont">

    <img src="<?php echo base_url('assets/'); ?>images/pregnancy-04.png" class="bg-image"> 
        <div class="top-sec">
             <div class="title-bot">
                <h3>We are having a Baby   </h3>
            </div>
            
             <div class="img-preview canvas_img" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                    <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
                    <?php }  ?>
                 </div>
                 
            <!-- <?php if($fetch_create_template->u_img){ ?>-->
                 
            <!--     <div src="<?php echo base_url($fetch_create_template->u_img); ?>" id="gol_image" style=""></div>-->
            <!--    <canvas id="canvas" width=220 height=220 class="canvas_img"></canvas>-->
            <!--<?php } else{ ?>-->
            <!--    <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />-->
                
            <!--    <?php } ?>-->
            
            
            
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/preg-frame3.png"  class="bg-frame"/>
            </div>
            <div class="exp">
                <!--<p>Expected Date or Month</p>-->
                <h3 input-name="t_date">29 JAN 1996</h3>
                
                <p input-name="together_parent_name" class="parent">PARENT NAME HERE </p>
            </div>
            
            <div class="title2-bot">
                <h3> The best is yet to come…    </h3>
            </div>
        </div>

    
    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   
