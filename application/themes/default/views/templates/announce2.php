<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>


<style>


.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/ann-4.svg);*/
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
    padding: 40px 0 0;
    position: relative;
}

.top-sec img{
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    position: absolute;
    left: 5px;
    right: 0;
    margin: auto;
    top: 185px;
}
.top-sec .left-top {
    position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/ann-frame2.svg);*/
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    height: 250px;
    text-align: center;
    margin-bottom: 10px;
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
    height: 280px;
    margin: auto;
}
.white-bottom{
    width: 80%;
    margin: 0 auto;
    text-align: center;
    color: #fff;
    font-size: 20px;
    line-height: 1.5;
    font-weight: 500;
}
.white-bottom p{   
    font-family:'Niconne', cursive;
    text-transform: capitalize;
    margin: 0 0 10px;
}
.title-bot p{
    font-family: 'Lexend', sans-serif;
    text-align: center;
    font-size: 16px;
    line-height: 1;
    color: #fff;
    margin: 0;
    font-weight: 400;
}
.title-bot h3{
    text-align: center;
    font-size: 44px;
    font-family: 'Lexend', sans-serif;
    line-height: 1;
    margin: 0 0 10px;
    color: #ffffff;
    font-weight: 500;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-family: 'Lexend', sans-serif;
    font-weight: 400;
    font-size: 16px;
    color: #fff;
    margin: 5px 0;
}
.title2-bot p {
    font-family: 'Birly';
    color: #fff;
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
.top-sec h3{
    text-align: center;
    font-size: 40px;
    font-family: 'Great Vibes', cursive;
    line-height: 1;
    margin: 65px 0 0;
    color: #fffefe;
    font-weight: 100;
}



.bg-image{
    position: absolute;
    left: 0;
    top: 0;
    width: 500px;
    right: 0;
    height: 100%;
    margin: auto;
    z-index: -1;
}
.bg-frame{
    left: 0 !important;
    top: 0 !important;
    width: auto !important;
    height: 250px !important;
    right: 0 !important;
    margin: auto !important;
    border-radius: 0 !important;
}
</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">
    <img src="<?php echo base_url('assets/'); ?>images/ann-4.svg" class="bg-image"> 
        <div class="top-sec">
            
                <h3> Announcing    </h3>
                <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/ann-frame2.svg" class="bg-frame" >
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3> BABY NAME    </h3>
                <p> PARENT NAME HERE</p>
            </div>
            <div class="title2-bot">
                <h3> 20 APRIL at 6:00 PM    </h3>
            </div>
            <div class="white-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
            </div>
        </div>


    </div>
</body>
</html>