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


@font-face {
  font-family: Birly;
  src: url(<?php echo base_url('assets/'); ?>fonts/Birly.woff);
}

@font-face {
  font-family: tahoma;
  src: url(<?php echo base_url('assets/'); ?>fonts/tahoma.woff);
}
.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/baby-shower5.svg);*/
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
    /* height: 50vh; */
    width: 100%;
    padding: 30px 0 0;
}

.top-sec .left-top {
    position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/gold-frame.svg);*/
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    height: 280px;
    text-align: center;
    /*background-position: center;*/
    margin-bottom: 25px;
}
.top-sec .left-top .baby-image {
    width: 236px;
    margin: 12px;
    object-fit: cover;
    border-radius: 50%;
    height: 235px;
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


.heart-icons .heart:nth-child(1){
    width: 22px;
    height: 22px;
    position: absolute;
    background-size: contain;
    left: 18%;
    top: -24px;
    background-repeat: no-repeat;
    transform: rotate(-25deg);
}
.heart-icons .heart:nth-child(2){
    width: 18px;
    height: 18px;
    position: absolute;
    background-size: contain;
    right: 24%;
    top: 0;
    background-repeat: no-repeat;
    transform: rotate(-25deg);
}
.heart-icons .heart:nth-child(3){
    left: 24%;
    width: 18px;
    height: 18px;
    position: absolute;
    background-size: contain;
    top: 0;
    background-repeat: no-repeat;
    transform: rotate( 20deg );
}
.heart-icons .heart:nth-child(4){
    width: 22px;
    height: 22px;
    position: absolute;
    background-size: contain;
    right: 18%;
    top: -25px;
    background-repeat: no-repeat;
    transform: rotate(15deg);
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
}
.title-bot p{
    font-family:  'Great Vibes', cursive;
    text-align: center;
    font-size: 30px;
    line-height: 1;
    position: relative;
    color: #898989;
    margin: 0;
}
.title-bot h3{
    text-align: center;
    font-size: 54px;
    font-family:  'Great Vibes', cursive;
    line-height: 1;
    margin: 15px 0 10px;
    color: #8A636C;
    font-weight: 100;
}
.title-bot h2{
    font-family: 'tahoma';
    font-weight: 100;
    text-align: center;
    color: #5E5F5F;
    margin-bottom: 5px;
    font-size: 18px;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
       font-family: 'tahoma';
    font-weight: 100;
    margin: 15px 0;
    font-size: 18px;
    color: #5E5F5F;
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
    color: #5E5F5F;

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
    padding: 0 15px;
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
    height: 100%;
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
    <img src="<?php echo base_url('assets/'); ?>images/baby-shower5.svg" class="bg-image">   
        <div class="top-sec">
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/gold-frame.svg" class="bg-frame" >
                <img src="<?php echo base_url('assets/'); ?>images/shoes.png" class="baby-image"/>
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <p> Join Us <span class="heart-icons">
                    
                <img src="<?php echo base_url('assets/'); ?>images/heart.svg" class="heart" >
                <img src="<?php echo base_url('assets/'); ?>images/heart.svg" class="heart"/>
                <img src="<?php echo base_url('assets/'); ?>images/heart.svg" class="heart" >
                <img src="<?php echo base_url('assets/'); ?>images/heart.svg" class="heart"/>
                    
                </span></p> 
                <h2> FOR THE CELEBRATION OF    </h2>
                <h3> Baby Shower    </h3>
            </div>
            <div class="title2-bot">
                <h3> NAME HERE    </h3>
                <!--<p> Angelina <span>&</span> Joseph</p> -->
            </div>
            <div class="time-bot">
                <ul>
                    <li>SATURDAY</li>
                    <li>APRIL 20</li>
                    <li>01:00 PM</li>
                </ul>
                <!-- <p> VIKAS MARG, VASANT KUNJ, ND</p> -->
            </div>
            <div class="white-bottom">
                <p>All are gradually invited to our
                    baby shower celebration</p>
            </div>
        </div>


    </div>
</body>
</html>