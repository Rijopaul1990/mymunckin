<link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">

<style>


@font-face {
  font-family: Candara;
  src: url(<?php echo base_url('assets/'); ?>fonts/Candara.woff);
}
@font-face {
  font-family: Arnoia;
  src: url(<?php echo base_url('assets/'); ?>fonts/Arnoia-Display.woff);
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
    padding: 10px 20px 0;
}
.top-sec p {
    font-size: 24px;
    font-family: 'Karla';
    text-align: right;
    padding-right: 60px;
    margin-bottom: 0;
    color: #002D60;
}
.top-sec .left-top {
    position: relative;
    /*height: 50VH;*/
}
.top-sec .left-top h3 {
    font-family: 'Arnoia';
    color: #8F9D18;
    font-weight: 500;
    font-size: 90px;
    margin: -10px auto 25px;
    text-align: center;
}
.top-sec .left-top h3 .name_field {
    font-family: 'Arnoia';
    color: #8F9D18;
    font-weight: 500;
    font-size: 90px;
    margin: -10px auto 25px;
    text-align: center;
}

.top-sec .left-top h3 span {
    /*text-align: right;*/
    /*display: block;*/
    margin: -25px 0 0;
    font-family: 'Arnoia';
    color: #00775A;
}

.top-sec .left-top img {
    width: 120px;
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
    /*width: 80%;*/
    margin: auto;
    position: relative;
    height: 505px;
}

.white-bottom p{   
    font-size: 20px !important;
    color: #002D60 !important;
    margin: 15px 0 15px 0px !important;
    text-align: left !important;
    line-height: 1.2 !important;
}

.title-bot p{
    font-family: 'Candara';
    text-align: center;
    font-size: 30px;
    line-height: 1;
    color: #4F4F4F;
    margin: 0;
}

.title-bot {
    position: absolute;
    left: 40px;
    /*top: -80px;*/
    width: 40%;
}
.title-bot h3{
    font-size: 45px;
    font-family: 'Candara';
    line-height: 1;
    color: #E97B2B;
    font-weight: 400;
    margin: 0px;
    text-align: left;
    margin-bottom: 10px;
}
.title-bot span {
    font-size: 16px;
    color: #4F4F4F;
    font-family: 'Karla', sans-serif;
    font-weight: 500;
}

.title2-bot h3 {
    font-family: 'tahoma';
    font-weight: 100;
    margin-bottom: 5px;
    font-size: 18px;
}
.title2-bot p {
    color: #00775A;
    font-size: 50px;
    line-height: 0.8;
    text-align: left;
}
.title2-bot p span{
    font-family: 'Candara';
    font-size: 40px;
    color: #FD8DB4;
    margin-right: 10px;
    border-right: 1px solid;
    padding-right: 10px;
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
    width: 500px;
    right: 0;
    margin: auto;
    z-index: -1;
}
</style>

<!--<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">-->
    <div class="main-bg" id="cont" >
    <img src="<?php echo base_url('assets/'); ?>images/Bday-02.png" class="bg-image">  

        <div class="top-sec">
            <div class="left-top">
                <p>YOU ARE INVITED TO</p>
                <h3 ><span class="name_field" input-name="b_name">Kartik</span>  <span>1st</span> </h3>
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3> Birthday <br> Party  </h3>
                 
                <div class="title2-bot">
                    <p input-name="t_date"> OCT 17 </p>
                    <p input-name="t_time"> 4:00 PM  </p>
                </div>
            
                <div class="white-bottom">
                    <p input-name="address">at 23B Road No.2, Civil Lines, New Delhi</p>
                </div>
            </div>
            
        </div>


    </div>
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   