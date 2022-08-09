<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600&display=swap" rel="stylesheet">
</head>


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
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/Bday-02.svg);*/
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
    padding: 0 20px;
}
.top-sec p {
    font-size: 28px;
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
    margin: 0 auto;
    text-align: left;
}
.top-sec .left-top h3 span {
    text-align: right;
    display: block;
    margin: -25px 0 0;
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
    height: 400px;
}

.white-bottom p{   
    font-size: 22px !important;
    color: #002D60 !important;
    margin: 15px 0 15px 15px !important;
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
    left: 20px;
    top: -80px;
    width: 45%;
}
.title-bot h3{
    font-size: 48px;
    font-family: 'Candara';
    line-height: 1;
    color: #E97B2B;
    font-weight: 400;
    margin: 0;
    text-align: center;
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
    font-size: 64px;
    line-height: 0.8;
    text-align: center;
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

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">
    <img src="<?php echo base_url('assets/'); ?>images/Bday-02.svg" class="bg-image">  

        <div class="top-sec">
            <div class="left-top">
                <p>YOU ARE INVITED TO</p>
                <h3> Birthday <span>Party</span> </h3>
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3> DANIEL IS   </h3>
                <h3> TURNING 1</h3> 
                <div class="title2-bot">
                    <p>OCT 17 </p>
                    <p>4:00PM  </p>
                </div>
            
                <div class="white-bottom">
                    <p>All are invited for the birthday party</p>
                </div>
            </div>
            
        </div>


    </div>
</body>
</html>