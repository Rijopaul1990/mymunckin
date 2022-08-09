<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500&display=swap" rel="stylesheet">
</head>


<style>

@font-face {
  font-family: FORTE;
  src: url(<?php echo base_url('assets/'); ?>fonts/FORTE.woff);
}

.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/Bday-03.svg);*/
    /*background-size: contain;*/
    /*background-position: top;*/
    /*background-repeat: no-repeat;*/
    /*padding: 20px 0;*/
    /*position: relative;*/
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
.top-sec h3{
      position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 47px;
    width: 250px;
    font-family: 'Baloo 2', cursive;
    font-weight: 500;
    font-size: 20px;
    letter-spacing: 2px;
    color: #38301D;
    text-align: left;

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
    height: 420px;
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
    font-size: 22px;
    line-height: 1;
    color: #00B2A9;
    margin: 0;
    font-weight: 400;
}
.title-bot h3{
text-align: center;
    font-size: 60px;
    font-family: 'FORTE';
    line-height: 1;
    margin: 0 0 10px;
    color: #0A7ABF;
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
    width: auto;
    height: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}

</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/Bday-03.svg" class="bg-image">   
        <div class="top-sec">
            <h3> WELCOMING </h3>
                <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/cloud.svg" class="cloud"/>
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3> Baby Name    </h3>
                <p> PARENTS NAME HERE</p>
            </div>
            <div class="title2-bot">
                <h3> SATURDAY 6:00PM    </h3>
                <h3> 20 APRIL 2021    </h3>
            </div>
            <div class="white-bottom">
                <p>WE’re excited to share that our family is growing.</p>
            </div>
        </div>


    </div>
</body>
</html>