<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>


.main-bg{
    max-width: 500px;
    margin: 0 auto;
    position: relative;
    z-index: 9;
    text-align: center;
}
.top-sec {
    width: 100%;
    padding: 40px 0 0;
    position: relative;
}

.top-sec img{
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    position: absolute;
    left: 5px;
    right: 0;
    margin: auto;
    top: 185px;
}
.top-sec .left-top {
    position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/ann-frame2.svg);*/
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    height: 250px;
    text-align: center;
    margin-bottom: 10px;
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
    background: url(<?php echo base_url('assets/'); ?>images/moon.svg);
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
    height: 295px;
    margin: auto;
}
.white-bottom{
    width: 80%;
    margin: 0 auto;
    text-align: center;
    color: #fff;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 100;
}
.white-bottom p{   
    font-family:'Nunito', sans-serif;
    text-transform: capitalize;
    margin: 0 0 10px;
}
.title-bot p{
    font-family: 'Nunito', sans-serif;
    text-align: center;
    font-size: 18px;
    line-height: 1;
    color: #fff;
    margin: 0;
    font-weight: 400;
}
.title-bot h3{
text-align: center;
    font-size: 50px;
    font-family: 'Great Vibes';
    line-height: 1;
    margin: 0 0 10px;
    color: #ffffff;
    font-weight: 500;
    text-transform: capitalize;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-family: 'Nunito', sans-serif;
    font-weight: 400;
    font-size: 18px;
    color: #fff;
    margin: 5px 0;
}
.title2-bot p {
    font-family: 'Birly';
    color: #fff;
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
.top-sec h3{
    text-align: center;
    font-size: 40px;
    font-family: 'Nunito', sans-serif;
    line-height: 1;
    margin: 70px 0 0;
    color: #fffefe;
    font-weight: 400;
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
    left: 0 !important;
    top: 0 !important;
    width: auto !important;
    height: 250px !important;
    right: 0 !important;
    margin: auto !important;
    border-radius: 0 !important;
}
.top-sec .canvas_img {
        width: 180px;
    height: 180px;
    /* object-fit: cover; */
    border-radius: 50%;
    position: absolute;
    left: 5px;
    right: 0;
    margin: auto;
    /* display: flex; */
    justify-content: center;
    /* align-items: center; */
    top: 189px;
    background: transparent !important;
}

.canvas_img img {
     width: unset; 
     height: unset; 
     object-fit: unset !important; 
     border-radius: unset; 
     position: unset; 
     left: unset; 
     right: unset; 
     margin: unset; 
     top: unset; 
}


</style>

<!--<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">-->
    <div class="main-bg" id="cont">
    <img src="<?php echo base_url('assets/'); ?>images/ann-4.png" class="bg-image"> 
        <div class="template-content">
            <div class="top-sec">
            
                <h3> Introducing    </h3>
                
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
                <img src="<?php echo base_url('assets/'); ?>images/ann-frame2.png" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3 input-name="b_name"> Baby Name  </h3>
                <p input-name="together_parent_name">PARENT NAME HERE </p>
            </div>
            <div class="title2-bot">
                <h3 > <span input-name="t_date">20 APRIL</span>  at <span input-name="t_time">6:00 PM</span> </h3>
            </div>
            <div class="white-bottom">
                <p input-name="description"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>
        </div>
        </div>

 <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>-->
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <!--<script src="<?php echo base_url('assets/canvas_circle_img.js'); ?>"></script> -->
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   

