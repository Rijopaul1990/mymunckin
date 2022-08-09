    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
  
<style>

@font-face {
  font-family: FORTE;
  src: url(<?php echo base_url('assets/'); ?>fonts/FORTE.woff);
}

@font-face {
  font-family: bday;
  src: url(<?php echo base_url('assets/'); ?>fonts/bday.woff);
}
.main-bg{
        max-width: 500px;
    margin: 0 auto;
    padding: 20px 0 0;
    position: relative;
    z-index: 9;
    text-align: center;
}
.top-sec {
    width: 100%;
    padding: 30px 0 0;
    position: relative;
    height: 680px;
}
.top-sec h3{
    font-family: 'Baloo 2', cursive;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 2px;
    color: #38301D;
    text-align: center;
    margin-top: 60px;
}
.top-sec img{
    width: 250px;
    height: 350px;
    object-fit: cover;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 75px;
    border-radius: 15px;
}
.top-sec .left-top {
    position: relative;
    /*background: url(images/preg-frame.svg);*/
    background-size: contain;
    background-repeat: no-repeat;
    /*height: 420px;*/
    text-align: center;
    background-position: center;
}

.cloud{
width: 150px !important;
    height: 90px !important;
    position: absolute !important;
    background-size: contain;
    right: 80px !important;
    top: 10px !important;
    background-repeat: no-repeat;
    object-fit: contain !important;
    border-radius: 0 !important;
    left: unset !important;
}
/*.top-sec .left-top:after{*/
/*    content: '';*/
/*    background: url(<?php echo base_url('assets/'); ?>images/cloud.svg);*/
/*    width: 150px;*/
/*    height: 150px;*/
/*    position: absolute;*/
/*    background-size: contain;*/
/*    right: 80px;*/
/*    top: 15px;*/
/*    background-repeat: no-repeat;*/
/*}*/

.bottom-sec {
    width: 80%;
    margin: auto;
}
.white-bottom{
    width: 70%;
    margin: 0 auto;
    text-align: center;
    color: #38301D;
    font-size: 18px;
    line-height: 1.2;
    font-weight: 500;
}
.white-bottom p{   
    font-family:'Lexend', sans-serif;
    text-transform: capitalize;
}
.title-bot p{
    font-family: 'Baloo 2', cursive;
    text-align: center;
    font-size: 26px;
    line-height: 1.5;
    color: #e86255;
    margin: 0;
    font-weight: 500;
}
.title-bot p.name {
font-family: 'Baloo 2', cursive;
    text-align: center;
    font-size: 20px;
    color: #4e4742;
    margin-bottom: 15px;
}
.title-bot h3{
text-align: center;
    font-size: 60px;
    font-family: 'bday';
    line-height: 1;
    margin: 0 0 0;
    letter-spacing: unset;
    color: #892e29;
    font-weight: 500;
}
.title-bot h3 span{
text-align: center;
    font-size: 60px;
    font-family: 'bday';
    line-height: 1;
    letter-spacing: unset;
    color: #892e29;
    font-weight: 500;
}

.title-bot p span{
    font-family: 'Baloo 2', cursive;
    text-align: center;
    font-size: 26px;
    line-height: 1.5;
    color: #e86255;
    margin: 0;
    font-weight: 500;
}


.title-bot h4 {
    font-family: 'Baloo 2', cursive;
    font-size: 36px;
    line-height: 1;
    color: #38302b;
    margin: 10px 0 10px;
    font-weight: 500;
}
.title2-bot{
    text-align:center;
}
.title2-bot h3:first-child {
    left: 20px;
    width: 30%;
}
.title2-bot h3:last-child {
    right: 20px;
    width: 25%;
}
.title2-bot h3 {
    font-family: 'Baloo 2', cursive;
    font-weight: 100;
    font-size: 24px;
    color: #38301D;
    margin: 0;
    padding: 0;
    letter-spacing: 1px;
    text-align: center;
    display: inline-block;
    position: absolute;
    top: 32%;
    line-height: 2.5;
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
    width: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}
.title-bot p.add{
    font-family: 'Baloo 2', cursive;
    font-size: 22px;
    line-height: 1;
    color: #38302b;
    font-weight: 500;
    width: 60%;
    margin: 5px auto;
}
.title-bot p.desc {
font-size: 16px;
    width: 60%;
    margin: 10px auto;
}

</style>

<!--<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">-->
      <div class="main-bg" id="cont" >
        <img src="<?php echo base_url('assets/'); ?>images/bday_13.png" class="bg-image">   
        <!--<div class="top-sec">-->
        <!--    <h3> WELCOMING </h3>-->
        <!--    <?php if(@$fetch_create_template->u_img){ ?>-->
        <!--     <img src="<?php echo base_url(@$fetch_create_template->u_img); ?>" />-->
        <!--    <?php } else{ ?>-->
        <!--        <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />-->
        <!--        <?php } ?>-->
        <!--    <div class="left-top">-->
        <!--        <img src="<?php echo base_url('assets/'); ?>images/cloud.png" class="cloud"/>-->
        <!--    </div>-->
        <!--</div>-->

        <!--<div class="bottom-sec">-->

        <!--    <div class="title-bot">-->
        <!--        <h3> <?php echo @$fetch_create_template->b_name; ?>    </h3>-->
        <!--        <p> <?php echo @$fetch_create_template->together_parent_name; ?></p>-->
        <!--    </div>-->
        <!--    <div class="title2-bot">-->
        <!--        <h3> <?php echo @$fetch_create_template->t_day; ?> <?php echo @$fetch_create_template->t_time; ?>    </h3>-->
        <!--        <h3> <?php echo @$fetch_create_template->t_date; ?>    </h3>-->
        <!--    </div>-->
        <!--    <div class="white-bottom">-->
        <!--         <p> <?php echo @$fetch_create_template->description; ?></p>-->
        <!--    </div>-->
        <!--</div>-->
        
        <div class="top-sec">
            <div class="left-top">
                <h3> YOU ARE INVITED FOR </h3>
            </div>
            <div class="title-bot">
                <h3 > <span input-name="b_name">Sara's </span> 1st   </h3>
                <h4> Birthday Celebration   </h4>
                <p> <span input-name="t_day">SATURDAY </span> <span input-name="t_date">20 APRIL </span> @ <span input-name="t_time"> 6:00 PM</span></p>
                <p input-name="address" class="add"> at 23B Road No.2, Civil Lines, New Delhi</p>
                <p input-name="description" class="desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
           
        </div>
        


    </div>
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   
