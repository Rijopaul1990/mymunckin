    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500&family=Niconne&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">

<style>

@font-face {
  font-family: ITCEDSCR;
  src: url(<?php echo base_url('assets/'); ?>fonts/ITCEDSCR.woff);
}


.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(images/ann3.svg);*/
    /*background-size: contain;*/
    /*background-position: top;*/
    /*background-repeat: no-repeat;*/
    /*padding: 20px 0;*/
        max-width: 500px;
    margin: 0 auto;
    padding: 20px 0 00;
    position: relative;
    z-index: 9;
    text-align: center;
}
.top-sec {
    width: 100%;
    padding: 10px 0 0;
    position: relative;
}

.announ .explore .col-md-6 .top-sec img{
    width: 220px;
    height: 300px;
    object-fit: cover;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 75px;
    border-radius: 50% 50% 50% 50% / 50% 50% 50% 50%;
}
.top-sec .left-top {
    position: relative;
    /*background: url(images/ann3-frame.svg);*/
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
    width: 80%;
    margin: auto;
    height: 270px;
}
.white-bottom{
    width: 65%;
    margin: 0 auto;
    text-align: center;
    color: #EA6195;
    font-size: 16px;
    font-weight: 600;
}
.white-bottom p{   
    font-family:'Nunito', sans-serif;
    text-transform: capitalize;
}
.title-bot p{
    font-family: 'Nunito', sans-serif;
    text-align: center;
    font-size: 18px;
    color: #562603;
    margin: 0;
    font-weight: 600;
}
.title-bot{
    position:relative;
}
.title-bot hr{
      width: 70%;
    background: #989898;
    height: 1px;
    border: none;
    margin: 5px auto;
}
.title-bot span {
    position: absolute;
    left: 60px;
    top: -30px;
    font-family: 'Nunito', sans-serif;
    color: #562603;
    font-size: 20px;
    font-weight: 400;
}
.title-bot h3{
    text-align: center;
    font-size: 74px;
    font-family: 'ITCEDSCR';
    line-height: 1;
    margin: -20px 0 10px;
    color: #EA6195;
    font-weight: 100;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-weight: 600;
    font-size: 24px;
    color: #282828;
    margin: 10px;
    font-family: 'Nunito', sans-serif;

}
.title2-bot p {
    font-family: 'Birly';
    color: #e57a9b;
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
    width: 100% !important;
    right: 0;
    /*height: 100%;*/
    margin: auto;
    z-index: -1;
}
.bg-frame{
    top: 0 !important;
    width: auto !important;
    height: 420px !important;
    right: 0 !important;
    margin: auto !important;
    border-radius: 0 !important;
}
.top-sec .canvas_img {
    width: 220px;
    height: 300px !important;
    /*object-fit: cover;*/
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    /*display: flex;*/
    justify-content: center;
    align-items: center;
    background: transparent;
    top: 75px;
    border-radius: 50% 50% 50% 50% / 50% 50% 50% 50%;
}
</style>

     <div class="main-bg" id="cont">
    <img src="<?php echo base_url('assets/'); ?>images/ann3.png" class="bg-image">  
        <div class="top-sec">
             <div class="img-preview canvas_img" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
            <?php }  ?>
                 </div>
                 
           <!-- <?php if($fetch_create_template->u_img){ ?>-->
           <!--<div src="<?php echo base_url($fetch_create_template->u_img); ?>" id="gol_image" style=""></div>-->
           <!--     <canvas id="canvas" class="canvas_img"></canvas>-->
           <!-- <?php } else{ ?>-->
           <!--     <img src="<?php echo base_url('assets/'); ?>images/ann-baby.png" />-->
           <!--     <?php } ?>-->
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/ann3-frame.png" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <span>SAY HI TO</span>
              <h3 input-name="b_name"> Priya Mehta  </h3>
                <p input-name="together_parent_name"> PARENTS NAME HERE</p>
                <hr>
            </div>
            <div class="title2-bot">
                <h3><span  input-name="t_date">MARCH 13, 2021</span>  | <span  input-name="t_time">6:00 AM</span>   </h3>
            </div>
            <div class="white-bottom">
                <p input-name="description">Customer,Custom Text Goes Here   </p>
            </div>
        </div>


    </div>
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <!--<script src="<?php echo base_url('assets/canvas_circle_img.js'); ?>"></script> -->
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   
