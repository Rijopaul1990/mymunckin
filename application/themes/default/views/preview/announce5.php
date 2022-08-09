<link href="https://fonts.googleapis.com/css2?family=Sail&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">

<style>

@font-face {
  font-family: ITCEDSCR;
  src: url(<?php echo base_url('assets/'); ?>fonts/ITCEDSCR.woff);
}


.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(images/ann-5.svg);*/
    /*background-size: contain;*/
    /*background-position: top;*/
    /*background-repeat: no-repeat;*/
    /*padding: 20px 0;*/
           max-width: 500px;
    margin: 0 auto; 
    padding: 20px 0 0;
    position: relative;
    text-align: center;
    z-index: 9;
}
.top-sec {
    width: 100%;
    padding: 10px 0 0;
    position: relative;
}
.top-sec h3 {    
text-align: left;
    font-size: 24px;
    line-height: 1;
    position: relative;
    color: #59361E;
    font-family: 'Nunito', sans-serif;
    font-weight: 600;
    width: 45%;
    margin: 10px auto;
}
.top-sec .bow {
    width: 40px;
    height: auto;
    object-fit: unset;
    position: absolute;
    left: unset;
    right: 10px;
    margin: unset;
    top: -5px;
    border-radius: unset;
}
.top-sec img{
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
    /*top: 105px;*/
    /*border-radius: 50% 50% 50% 50% / 50% 50% 50% 50%;*/
}
.top-sec h3 span {
    display: block;
    text-align: right;
}
.top-sec .left-top {
    position: relative;
    /*background: url(images/ann5-frame.svg);*/
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    height: 300px;
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
    height: 302px;
    margin: auto;
}
.white-bottom{
    width: 85%;
    margin: 20px auto;
    text-align: center;
    color: #59361E;
    font-size: 18px;
}
.white-bottom p{   
    font-family:'Nunito', sans-serif;
    text-transform: capitalize;    
    margin: 5px 0 0;
}
.title-bot p{
    font-family: 'Nunito', sans-serif;
    text-align: center;
    font-size: 22px;
    color: #000;
    margin: 6px auto;
    font-weight: 600;
}
.title-bot{
    position:relative;
}
.title-bot hr{
width: 80%;
    background: #ffa293;
    height: 1px;
    margin: 0 auto 15px;
    border: none;
}
.title-bot h5 {
    font-weight: 700;
    font-size: 20px;
    color: #59361e;
    margin: 5px 0;
    font-family: 'Nunito', sans-serif;
}
.title-bot span {
    font-family: 'Nunito', sans-serif;
    color: #84c7a7;
    font-size: 20px;
    font-weight: 300;
}
.title-bot h3{
    text-align: center;
    font-size: 54px;
    font-family: 'Sail', cursive;
    line-height: 1;
    margin: 0px 0 10px;
    text-transform:capitalize;
    color: #84c7a7;
    font-weight: 100;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-weight: 600;
    font-size: 22px;
    color: #282828;
    margin: 0;
    font-family:  'Nunito', sans-serif;

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
    /*height: 100%;*/
    width: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}
.bg-frame{
top: 0 !important;
    width: auto !important;
    height: 310px !important;
    right: -20px !important;
    margin: auto !important;
    border-radius: 0 !important;
}

.top-sec .canvas_img {
   width: 220px;
    height: 300px !important;
    background: transparent !important;
    object-fit: cover;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 105px;
    border-radius: 50% 50% 50% 50% / 50% 50% 50% 50%;
}
</style>

<!--<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">-->
    <div class="main-bg" id="cont">
    <img src="<?php echo base_url('assets/'); ?>images/ann-5.png" class="bg-image">  

        <div class="top-sec">
                <h3> Introducing our <img src="<?php echo base_url('assets/'); ?>images/bow.png" class="bow">  <span>newest addition</span> </h3>
                
                
                  <div class="img-preview canvas_img" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
            <?php }  ?>
                 </div>
                 
            <!--    <?php if($fetch_create_template->u_img){ ?>-->
                 
            <!--     <div src="<?php echo base_url($fetch_create_template->u_img); ?>" id="gol_image" style=""></div>-->
            <!--    <canvas id="canvas" width=220 height=220 class="canvas_img"></canvas>-->
            <!--<?php } else{ ?>-->
            <!--    <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />-->
                
            <!--    <?php } ?>-->
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/ann5-frame.png" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3 input-name="b_name">Baby Name  </h3>
                <p input-name="together_parent_name">  <?php echo @$fetch_create_template->together_parent_name; ?>PARENT NAME HERE</p><hr>
                <!--<h5> Born/ Time</h5>-->
                
            </div>
            <div class="title2-bot">
                <h3> <span input-name="t_date">20 APRIL</span>  | <span input-name="t_time">6:00 PM</span> </h3>
                <!--<h3 input-name="b_name"> <?php echo @$fetch_create_template->t_date; ?> | <?php echo @$fetch_create_template->t_time; ?>    </h3>-->
            </div>
            <div class="white-bottom">
                <p input-name="description"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>


    </div>


 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <!--<script src="<?php echo base_url('assets/canvas_circle_img.js'); ?>"></script> -->
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   



<!--</html>-->