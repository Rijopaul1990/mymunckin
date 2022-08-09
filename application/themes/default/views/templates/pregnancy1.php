<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
</head>


<style>

@font-face {
  font-family: Arnoia;
  src: url(<?php echo base_url('assets/'); ?>fonts/Arnoia-Display.woff);
}
@font-face {
  font-family: CALIST;
  src: url(<?php echo base_url('assets/'); ?>fonts/CALIST.woff);
}

.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/pregnancy-02.svg);*/
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
    padding: 30px 0 0;
    position: relative;
}

.top-sec img{
    width: 330px;
    height: 330px;
    object-fit: cover;
    border-radius: 50%;
    position: absolute;
    left: -18px;
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 75px;
}
.top-sec .left-top {
    position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/preg-frame1.png);*/
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
    background: url(<?php echo base_url('assets/'); ?>images/preg-frame1.png);
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
    color: #000;
    font-size: 16px;
    line-height: 1;
    font-weight: 500;
}
.white-bottom p{   
    font-family:' CALIST ';
    text-transform: capitalize;
}
.title-bot p{
    font-family: ' CALIST ';
    text-align: center;
    font-size: 16px;
    line-height: 1;
    color: #000;
    font-weight: 500;
}
.title-bot h3{
    text-align: center;
    font-size: 40px;
    font-family: 'Arnoia';
    line-height: 1;
    margin: 0 0 10px;
    color: #3F7A76;
    font-weight: 500;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-family: ' CALIST ';
    font-weight: 100;
    font-size: 26px;
    color: #3D63A6;
    margin: 10px 0 0;
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
    width: auto;
    height: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}
.bg-frame{
    left: 0 !important;
    top: 0 !important;
    width: auto !important;
    height: 420px !important;
    right: 0 !important;
    margin: auto !important;
    border-radius: 0 !important;
}
</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color:transparent;">
    <div class="main-bg">
    <img src="<?php echo base_url('assets/'); ?>images/pregnancy-02.svg" class="bg-image">  

        <div class="top-sec">
                <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/preg-frame1.png" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3> Soon to be there    </h3>
                <p> WE ARE EXPECTING A BOY</p>
            </div>
            <div class="title2-bot">
                <h3> 20 April 21    </h3>
            </div>
            <div class="white-bottom">
                <p>ANGELINA AND JOHNSON</p>
            </div>
        </div>


    </div>
</body>
</html>