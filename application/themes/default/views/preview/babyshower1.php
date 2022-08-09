<link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>


@font-face {
  font-family: Birly;
  src: url(<?php echo base_url('assets/'); ?>fonts/Birly.woff ) format("woff"),
    url(<?php echo base_url('assets/'); ?>fonts/Birly.otf ) format("opentype");
}

@font-face {
  font-family: tahoma;
  src: url(<?php echo base_url('assets/'); ?>fonts/tahoma.woff);
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
    /* height: 50vh; */
    width: 100%;
    padding: 30px 0 0;
}
.img-preview {
    margin: 22px auto;
    float: unset;
    height: 270px !important;
    width: 270px !important;
    background: transparent !important;
    z-index: 9;
    position: relative;
}

.top-sec .left-top {
    position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/frame.svg);*/
    /*background-size: cover;*/
    /*background-repeat: no-repeat;*/
    height: 330px;
    text-align: center;
    overflow:hidden;
}
.top-sec .left-top .baby-image {
    width: 270px;
    margin: 22px 0;
    object-fit: cover;
    height: 270px;
    border-radius:0 !important;
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
    height: 303px;

}
.white-bottom{
    width: 70%;
    margin: 0 auto;
    text-align: center;
    color: #7C525A;
    font-size: 18px;
}
.white-bottom p{   
    font-family: 'Nunito', sans-serif;
    font-weight: 600;
    text-transform: capitalize;
}
.title-bot p{
    font-family: 'Birly';
    text-align: center;
    font-size: 30px;
    line-height: 1;
    color: #f4a076;
    margin: 0;
}
.title-bot h3{
    text-align: center;
    font-size: 54px;
    font-family: 'Birly';
    line-height: 1;
    margin: 15px 0 10px;
    color: #876b5d;
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
 font-family: 'Nunito', sans-serif;
    color: #e57a9b;
    font-size: 20px;
    font-weight: 600;
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
    font-weight: 600;
    margin: 0 0;
    font-family: 'Nunito', sans-serif;
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
    font-family: 'Nunito', sans-serif;
    font-weight: 600;
    margin: 5px 0 20px;
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
    width: 105% !important;
    height: 100%;
    right: 0;
    margin: auto !important;
    z-index: 0;
}
</style>

<!--<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">-->
   
     <div class="main-bg" id="cont">
        <img src="<?php echo base_url('assets/'); ?>images/baby-shower1.png" class="bg-image" >

        <div class="top-sec">
            <div class="left-top">
                
                 <img src="<?php echo base_url('assets/'); ?>images/frame.png" class="bg-frame" >
                 
                  <div class="img-preview canvas_img " id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  class="baby-image">
               
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
                <h3 > Baby Shower    </h3>
                <p> Celebration</p> 
            </div>
            <div class="title2-bot">
                <!--<h3> honouring    </h3>-->
                <p input-name="together_parent_name">  PARENT NAME HERE</p> 
            </div>
            <div class="time-bot">
                <ul>
                    <li input-name="t_day">SATURDAY</li>
                    <li input-name="t_date">APRIL 2021</li>
                    <li input-name="t_time">01:00 PM</li>
                </ul>
                 <p input-name="address"> at 23B Road No.2, Civil Lines, New Delhi</p> 
            </div>
            <div class="white-bottom">
                <p input-name="description"> Lorem Ipsum is simply dummy text of the printing </p> 
            </div>
        </div>


    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
    <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 

