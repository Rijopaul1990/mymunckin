<link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>

@font-face {
  font-family: Arnoia;
  src: url(<?php echo base_url('assets/'); ?>fonts/Arnoia-Display.woff);
}
@font-face {
  font-family: CALIST;
  src: url(<?php echo base_url('assets/'); ?>fonts/CALIST.woff);
}

.main-bg{
        max-width: 500px;
    margin: 0 auto;
    padding: 20px 0 0;
    position: relative;
    z-index:9;
    text-align: center;
}
.top-sec {
    width: 100%;
    padding: 30px 0 0;
    height: 420px;
    position: relative;
}

.top-sec img{
    width: 330px;
    height: 330px;
    object-fit: cover;
    /*border-radius: 50%;*/
    position: absolute;
    left: -18px;
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    /*top: 75px;*/
}
.top-sec .left-top {
    position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/preg-frame1.png);*/
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    height: 420px;
    text-align: center;
    /*background-position: center;*/
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
    background: url(<?php echo base_url('assets/'); ?>images/preg-frame1.png);
    width: 50px;
    height: 50px;
    position: absolute;
    background-size: contain;
    right: 20px;
    top: 20px;
    background-repeat: no-repeat;
}

.bottom-sec {
    width: 80%;
    height: 260px;
    margin: auto;
}
.white-bottom{
    width: 70%;
    margin: 0 auto 15px;
    text-align: center;
    color: #000;
    font-size: 22px;
    line-height: 1;
    font-weight: 700;
}
.white-bottom p{   
    font-family:'Nunito';
    text-transform: capitalize;
}
.title-bot p{
font-family: 'Nunito';
    text-align: center;
    font-size: 20px;
    line-height: 1;
    color: #000;
    font-weight: 700;
    margin: 10px 0px 20px;
}
.title-bot h3{
    text-align: center;
    font-size: 40px;
    font-family: 'Arnoia';
    line-height: 1;
    margin: 0 0 10px;
    color: #3F7A76;
    font-weight: 500;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-family: 'Nunito';
    font-weight: 600;
    font-size: 26px;
    color: #3D63A6;
    margin: 0 0 15px;
}
.title2-bot p {
    font-family: 'Nunito';
    color: #111;
    margin-top: 0;
    font-size: 18px;
}
.title2-bot p span{
    font-family: sans-serif;

    
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

.bg-image{
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    /*height: 100%;*/
    right: 0;
    margin: auto;
    z-index: -1;
}
.bg-frame{
    left: 0 !important;
    top: 0 !important;
    width: auto !important;
    height: 390px !important;
    right: 0 !important;
    position: absolute;
    margin: auto !important;
    border-radius: 0 !important;
}

.top-sec .canvas_img {
    width: 300px;
    height: 300px;
    /* object-fit: cover; */
    border-radius: 50%;
    position: absolute;
    left: -18px;
    right: 0;
    margin: auto;
    /* display: flex; */
    justify-content: center;
    /* align-items: center; */
    top: 75px;
    background: transparent;
}
</style>

    <div class="main-bg" id="cont">
    <img src="<?php echo base_url('assets/'); ?>images/pregnancy-02.png" class="bg-image">  

        <div class="top-sec">
            
              <div class="img-preview canvas_img" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
            <?php }  ?>
                 </div>
                 
                 
            <!--<?php if($fetch_create_template->u_img){ ?>-->
                 
            <!--     <div src="<?php echo base_url($fetch_create_template->u_img); ?>" id="gol_image" style=""></div>-->
            <!--    <canvas id="canvas" width=220 height=220 class="canvas_img"></canvas>-->
            <!--<?php } else{ ?>-->
            <!--    <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />-->
                
            <!--    <?php } ?>-->
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/preg-frame1.png" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3>Our Family is Growing </h3>
                 <p input-name="description">Lorem Ipsum is simply dummy text</p>
            </div>
            <div class="title2-bot">
                <!--<p>Expected Date or Month</p>-->
                <h3 input-name="t_date"> 20 APRIL 2021  </h3>
                
            </div>
            <div class="white-bottom">
                 <p input-name="together_parent_name">Parent Name </p>
            </div>
        </div>


    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   