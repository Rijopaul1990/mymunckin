<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500&family=Niconne&display=swap" rel="stylesheet">
</head>


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
    padding: 20px 0;
    position: relative;
    text-align: center;
}
.top-sec {
    width: 100%;
    padding: 10px 0 0;
    position: relative;
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
}
.white-bottom{
    width: 65%;
    margin: 0 auto;
    text-align: center;
    color: #FF5572;
    font-size: 20px;
    font-weight: 100;
}
.white-bottom p{   
    font-family:'Lexend', sans-serif;
    text-transform: capitalize;
}
.title-bot p{
    font-family: 'Lexend', sans-serif;
    text-align: center;
    font-size: 18px;
    color: #562603;
    margin: 0;
    font-weight: 500;
}
.title-bot{
    position:relative;
}
.title-bot hr{
      width: 70%;
    background: #989898;
    height: 1px;
    border: none;
}
.title-bot span {
    position: absolute;
    left: 60px;
    top: -30px;
    font-family: 'Lexend', sans-serif;
    color: #562603;
    font-size: 20px;
    font-weight: 300;
}
.title-bot h3{
    text-align: center;
    font-size: 90px;
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
    font-weight: 100;
    font-size: 24px;
    color: #282828;
    margin: 10px;
    font-family: 'Lexend', sans-serif;

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
.bg-frame{
    top: 0 !important;
    width: auto !important;
    height: 420px !important;
    right: 0 !important;
    margin: auto !important;
    border-radius: 0 !important;
}
</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">
    <img src="<?php echo base_url('assets/'); ?>images/ann3.svg" class="bg-image">  
        <div class="top-sec">
                <img src="<?php echo base_url('assets/'); ?>images/ann-baby.png" />
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/ann3-frame.svg" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <span>SAY HI TO</span>
                <h3> Priya Mehta    </h3>
                <p> PARENTS NAME HERE</p>
                <hr>
            </div>
            <div class="title2-bot">
                <h3> MARCH 13, 2021 | 6:00 AM    </h3>
            </div>
            <div class="white-bottom">
                <p>Customer Custom Text Goes Here</p>
            </div>
        </div>


    </div>
</body>
</html>