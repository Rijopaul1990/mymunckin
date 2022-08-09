
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>


@font-face {
  font-family: BRITANIC;
  src: url(<?php echo base_url('assets/'); ?>fonts/BRITANIC.woff);
}

@font-face {
  font-family: PAPYRUS;
  src: url(<?php echo base_url('assets/'); ?>fonts/PAPYRUS.woff);
}

.main-bg{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
        max-width: 500px;
    margin: 0 auto;
    padding: 20px 0 10px;
    position: relative;
    text-align: center;
    z-index:9;
}
.top-sec {
    height: 370px;
    width: 60%;
    display: inline-flex;
    text-align: center;
    justify-content: center;
    align-items: flex-end;
    margin-bottom: 15px;
}

.top-sec .left-top {
    position: relative;
    /*height: 50VH;*/
}
.top-sec .left-top h3 {
     font-family: 'BRITANIC';
    color: #C3922E;
    width:100%;
    font-size: 36px;
    margin: 0px auto 8px;
}

.top-sec .left-top h3 .name {
    font-family: 'BRITANIC';
    color: #C3922E;
    width: 100%;
    font-size: 36px;
    margin: 0px auto 8px;
}



.top-sec .left-top h3 span {
    display: block;
    font-size: 20px;
    font-family: 'Karla';
    font-weight: 400;
}
.top-sec .left-top h4 {
    font-family: 'Karla';
    color: #C3922E;
    font-size: 26px;
    margin: 0;
    font-weight: 400;
    border-bottom: 1px solid;
    padding: 5px 10px;
}

.top-sec .left-top img {
    width: 150px;
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
    height: 280px;
    text-align: center;
}
.white-bottom{
    width: 70%;
    margin: 0 auto;
    text-align: center;    
    font-weight: 700;
    font-size: 18px;
}
.white-bottom p{   
    font-family: 'Nunito', sans-serif;
    text-transform: capitalize;
    color: #7d5d1b;
    margin: 8px auto 0;
}
.title-bot p{
    font-family: 'flame';
    text-align: center;
    font-size: 30px;
    line-height: 1;
    color: #4F4F4F;
    margin: 0;
}

.title-bot {
    position: relative;
}
.title-bot h3{
    text-align: center;
    font-size: 56px;
    font-family: 'flame';
    line-height: 1;
    margin: 0 0 15px;
    color: #FD8DB4;
    font-weight: 400;
}
.title-bot span {
    font-size: 16px;
    color: #4F4F4F;
    font-family: 'Karla', sans-serif;
    font-weight: 500;
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
    font-family: 'Karla';
    color: #C3922E;
    font-size: 26px;
    width: 85%;
    margin: 10px auto 0;
    line-height: 1;
    font-weight: 400;
}
.title2-bot p span{
    font-family: 'Karla';
    color: #C3922E;
    font-size: 26px;
    width: 85%;
    margin: 10px auto 0;
    line-height: 1;
    font-weight: 400;
}

.title2-bot p.add {
    font-size: 16px;
    margin: 8px auto 0;
    font-weight: 500;
    width: 75%;
    line-height: 1.5;
}
.time{
    color:#7d5d1b !important;
}
.time span{
    color: #7d5d1b !important;
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

.cake-year {
    position: relative;
}
.cake-year span {
    font-size: 85px;
    font-family: monospace;
    color: #fdd491;
    font-weight: 900;
    position: absolute;
    left: 0;
    right: 0;
    top: 35px;
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
.bg-frame{
    position: absolute;
    left: 0;
    top: 0;
    width: 330px !important;
    height: 100%;
    right: 0;
    margin: auto !important;
    z-index: -1;
}

.invi{
    color: #7d5d1b !important;
    font-size: 22px !important;
width: 100% !important;
    font-weight: 700 !important;
}
</style>

    <div class="main-bg" id="cont">
    <img src="<?php echo base_url('assets/'); ?>images/Bday1.png" class="bg-image">   

        <div class="top-sec">
            <div class="left-top">
                <!--<h4>YOU ARE INVITED </h4>-->
                <h3> <span class="name" input-name="b_name">Angenila</span>   <span>is turning</span>  </h3>
                <div class="cake-year">
                    <img src="<?php echo base_url('assets/'); ?>images/cake.png" />
                    <span>1</span>
                </div>
                
                
            </div>
        </div>

        <div class="bottom-sec">

            
            <div class="title2-bot">
                <p class="invi">You are Invited for the Birthday Party</p>
                
                <p > <span input-name="t_day">20 APRIL</span>  <span input-name="t_date">6:00 PM</span> </p>
                <p class="time">@ <span input-name="t_time" > 7 PM</span> Onwards</p>
                <p class="add" input-name="address">23B Road No.2, Civil Lines, New Delhi</p>
            </div>
        
        </div>


    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   