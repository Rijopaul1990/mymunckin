    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500&family=Niconne&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>
@font-face {
  font-family: BRITANIC;
  src: url(<?php echo base_url('assets/'); ?>fonts/BRITANIC.woff);
}

.main-bg{
    max-width: 500px;
    margin: 0 auto;
    background: #eff5f9;
    background-size: contain;
    background-position: top;
    background-repeat: no-repeat;
    padding: 20px 0;
}
.top-sec {
    width: 100%;
    /*padding: 30px 0 0;*/
    position: relative;
    overflow: hidden;
}
.top-sec .img-preview{
height: 300px !important;
width: 200px !important;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 105px;
    border-radius: 0px !important;
}
.top-sec img{
/*width: 200px;*/
/*    height: 300px;*/
    object-fit: contain;
    /*position: absolute;*/
    /*left: 0;*/
    /*right: 0;*/
    /*margin: auto;*/
    /*display: flex !important;*/
    /*justify-content: center;*/
    /*align-items: center;*/
    /*top: 110px;*/
     border-radius: 0px !important;
}
.top-sec .left-top {
    position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/birthday.svg);*/
    background-size: contain;
    background-repeat: no-repeat;
    height: 420px;
    text-align: center;
    background-position: center;
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
}
.white-bottom{
    width: 60%;
    margin: 0 auto;
    text-align: center;
    color: #606060;
    font-size: 22px;
    line-height: 1;
    font-weight: 500;
}
.white-bottom p{   
    font-family: 'Niconne', cursive;
    text-transform: capitalize; 
    margin: 0 0 10px;
}
.title-bot p{
font-family: 'BRITANIC';
    text-align: center;
    font-size: 52px;
    line-height: 1;
    text-transform: uppercase;
    color: #3283DA;
    padding-bottom: 10px;
    margin: 0;
    border-bottom: 3px dashed #868686;
}
.title-bot h3{
text-align: center;
    font-size: 22px;
    font-family: 'Nunito';
    line-height: 1;
    margin: 5px 0 5px;
    color: #3A3A3A;
    font-weight: 400;
}
.title2-bot{
    text-align:center;
    border-bottom: 3px dashed #868686;
    margin-bottom: 10px;
}

.title2-bot h3 {
    font-family: 'Nunito';
    font-weight: 300;
    font-size: 20px;
    color: #3A3A3A;
    margin: 10px 0;
}
.title2-bot p {
    font-size: 18px;
    font-family: 'Nunito';
font-weight: 300;
color: #3A3A3A;
margin: 10px 0;
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

.bg-frame{
    position: absolute;
       left: 0 !important;
    top: 0 !important;
    width: 100% !important;
    height: 420px !important;
    right: 0 !important;
    margin: auto !important;
    z-index: 1;
    object-fit: unset !important;
}
</style>

    <div class="main-bg" id="cont" >

        <div class="top-sec">
                <div class="img-preview canvas_img" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
            <?php }  ?>
                 </div>
                 
            <!--   <?php if(@$fetch_create_template->u_img){ ?>-->
            <!-- <img src="<?php echo base_url(@$fetch_create_template->u_img); ?>" />-->
            <!--<?php } else{ ?>-->
            <!--    <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />-->
            <!--    <?php } ?>-->
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/birthday.png" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3> Join Us As We Celebrate</h3>
                <p input-name="b_name">BABY NAME</p>
            </div> 
            <div class="title2-bot">
                
                <h3 > <span input-name="t_date">20 APRIL</span>  at <span input-name="t_time">6:00 PM</span> </h3>
                <!--<h3 input-name="description"> <?php echo @$fetch_create_template->t_date; ?>   at <?php echo @$fetch_create_template->t_time; ?>      </h3>-->
            <p input-name="address">23B Road No.2, Civil Lines, New Delhi </p>
            </div>
           
            <div class="white-bottom">
                <p input-name="description">Customer Custom text Goes here  </p>
            </div>
        </div>


    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   