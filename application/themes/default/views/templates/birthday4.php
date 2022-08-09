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
}

.top-sec img{
width: 200px;
    height: 270px;
    object-fit: cover;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 110px;
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
    font-size: 26px;
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
    font-size: 36px;
    font-family: 'Niconne', cursive;
    line-height: 1;
    margin: 0 0 10px;
    color: #3A3A3A;
    font-weight: 500;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-family: 'Lexend';
    font-weight: 100;
    font-size: 28px;
    color: #3A3A3A;
    margin: 10px 0;
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

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">

        <div class="top-sec">
                <img src="<?php echo base_url('assets/'); ?>images/babypic.png" />
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/birthday.svg" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3> Joins Us as we Celebrate    </h3>
                <p> Baby Name</p>
            </div>
            <div class="title2-bot">
                <h3> 20 APRIL 21 at 6:00PM    </h3>
            </div>
            <div class="white-bottom">
                <p>Customer Custome Text Goes Here</p>
            </div>
        </div>


    </div>
</body>
</html>