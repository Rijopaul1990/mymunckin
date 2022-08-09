
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">

<style>


@font-face {
  font-family: Birly;
  src: url(<?php echo base_url('assets/'); ?>fonts/Birly.woff);
}

@font-face {
  font-family: Niconne;
  src: url(<?php echo base_url('assets/'); ?>fonts/Niconne-Regular.woff);
}


@font-face {
  font-family: Boomolla;
  src: url(<?php echo base_url('assets/'); ?>fonts/Boomolla.ttf);
}
.main-bg{
    max-width: 500px;
    margin: 0 auto;
    padding: 20px 0 0;
    position: relative;
    text-align: center;
    z-index: 9;
}
.top-sec {
    /* height: 50vh; */
    width: 100%;
    /*padding: 30px 0 0;*/
}

.top-sec .left-top {
position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/frame2.png);*/
    height: 400px;
    text-align: center;
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    /*background-position: center;*/
}
.top-sec .left-top .baby-image {
    width: 230px;
    position: relative;
    left: -8px;
    top: 40px;
    float: none !important;
    object-fit: cover;
    margin: auto;
    height: 305px !important;
    background: transparent;
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
    margin: auto;
    height: 265px;
}
.white-bottom{
    width: 70%;
    margin: 0 auto;
    text-align: center;
    color: #7C525A;
    font-size: 22px;
}
.white-bottom p{   
    font-family: 'Niconne';
    text-transform: capitalize;   
    color: #B7586A;
}
.title-bot p{
    font-family: 'Birly';
    text-align: center;
    font-size: 30px;
    line-height: 1;
    color: #f4a076;
    margin: 0;
}

.title-bot {
    position: relative;
}
.title-bot h3{
    text-align: center;
    font-size: 50px;
    font-family: 'Boomolla';
    line-height: 1;
    margin: 15px 0 30px;
    color: #5D8766;
    font-weight: 400;
}
.title-bot span {
    position: absolute;
    right: 25%;top: -15px;
    font-size: 20px;
    color: #542121;
    font-family: 'Rubik', sans-serif;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-family: 'tahoma';
    font-weight: 100;
    margin-bottom: 5px;
    font-size: 18px;
}
.title2-bot p {
    font-family: 'Rubik', sans-serif;
    color: #915D5D;
    font-size: 16px;
    width: 65%;
    margin: 10px auto ;
    line-height: 1.5;
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
    border-right: 1px solid #E57A9B;
    padding: 0px 8px;
      font-weight: 700;
    color: #737373;
}
.add {
      font-weight: 700;
    color: #737373 !important;
    font-family: 'Nunito' !important;
}
.add span{
    font-family: 'Nunito' !important;
}
.time-bot li:nth-child(3) {
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
    /*width: auto;*/
    width: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}
.bg-frame{
    position: absolute;
    left: 0;
    top: 0;
    width: 330px !important;
    height: 100%;
    right: 0;
    margin: auto !important;
    z-index: 1;
}

</style>
     <div class="main-bg" id="cont">
    <img src="<?php echo base_url('assets/'); ?>images/ann1.png" class="bg-image">   
        <div class="top-sec">
            <div class="left-top">
                
                <img src="<?php echo base_url('assets/'); ?>images/frame2.png" class="bg-frame" >
               
                 <div class="img-preview canvas_img baby-image" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
            <?php }  ?>
                 </div>
                 
                <!--  <?php if($fetch_create_template->u_img){ ?>-->
                <!--   <img src="<?php echo base_url($fetch_create_template->u_img); ?>" class="baby-image"/>-->
                <!--   <?php } else{ ?>-->
                <!--<img src="<?php echo base_url('assets/'); ?>images/shoes.png" class="baby-image"/>-->
                
                <!--<?php } ?>-->
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <!--<span> SAY HI TO</span> -->
                <h3 > Baby Shower   </h3>
            </div>
            <div class="title2-bot">
                <p input-name="together_parent_name"> PARENT NAME HERE</p>
                <ul class="time-bot"> <li input-name="t_day">SATURDAY</li> <li input-name="t_date">20 APRIL</li> <li input-name="t_time">6:00 PM</li></ul>
                <p class="add">Venue : <span input-name="address" >at 23B Road No.2, Civil Lines, New Delhi</span></p>
            </div>
        
            <div class="white-bottom">
               <p input-name="description">  Lorem Ipsum is simply dummy </p> 
            </div>
        </div>


    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   