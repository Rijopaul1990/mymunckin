<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>


<style>


@font-face {
  font-family: Birly;
  src: url(<?php echo base_url('assets/'); ?>fonts/Birly.woff);
}

@font-face {
  font-family: Boomolla;
  src: url(<?php echo base_url('assets/'); ?>fonts/Boomolla.tff);
}
.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/ann1.svg);*/
    /*background-size: cover;*/
    /*background-position: top;*/
    /*background-repeat: no-repeat;*/
    /*padding: 20px 0;*/
    max-width: 500px;
    margin: 0 auto;
    padding: 20px 0;
    position: relative;
    text-align: center;
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
/*.left-top:after {*/
    /* position: relative; */
/*    background: url(<?php echo base_url('assets/'); ?>images/ann-baby.png);*/
/*    height: 400px;*/
/*    text-align: center;*/
/*    background-size: contain;*/
/*    background-repeat: no-repeat;*/
/*    background-position: center;*/
/*    content: '';*/
/*    width: 231px;*/
/*    position: absolute;*/
/*    left: -17px;*/
    /* z-index: -48; */
/*    top: -8px;*/
/*    right: 0px;*/
/*    margin: auto;*/
/*}*/
.top-sec .left-top .baby-image {
    width: 230px;
    position: relative;
    left: -8px;
    top: 40px;
    height: 305px;
    object-fit: cover;
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
    width: 70%;
    margin: 0 auto;
    text-align: center;
    color: #7C525A;
    font-size: 22px;
}
.white-bottom p{   
    font-family: 'Niconne', cursive;
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
    font-size: 86px;
    font-family: 'Boomolla';
    line-height: 1;
    margin: 15px 0 10px;
    color: #5D8766;
    font-weight: 400;
}
.title-bot span {
    position: absolute;
    right: 25%;
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
    margin: 10px auto 0;
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
    width: auto;
    height: 100%;
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

</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">
    <img src="<?php echo base_url('assets/'); ?>images/ann1.svg" class="bg-image">   
        <div class="top-sec">
            <div class="left-top">
                
                <img src="<?php echo base_url('assets/'); ?>images/frame2.png" class="bg-frame" >
                <img src="<?php echo base_url('assets/'); ?>images/ann-baby.png" class="baby-image" />
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <span> SAY HI TO</span> 
                <h3> Diana    </h3>
            </div>
            <div class="title2-bot">
                <p> PARENTS NAME GOES HERE SATURDAY 20 APRIL @ 6:00 PM    </p>
            </div>
        
            <div class="white-bottom">
                <p>Cutomer Custom text goes here</p>
            </div>
        </div>


    </div>
</body>
</html>