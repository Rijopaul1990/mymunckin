<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200;300;400;500;600&family=Pacifico&family=Sacramento&display=swap" rel="stylesheet">
</head>


<style>

.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/baby-back.svg);*/
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
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 330px;
    width: 80%;
    margin: auto;
}

.top-sec .left-top {
    width: 50%;   
    margin-right: 20px;
    text-align: right;
}
.top-sec .left-top img{
    width: 180px;
}
.top-sec .right-top {
    width: 50%;
    position: relative;
}
.top-sec .right-top h2{
    font-family: 'Pacifico', cursive;
    font-size: 52px;
    line-height: 1.2;
    color: #f3999b;
    font-weight: 500;
    text-align: left;
    position: relative;
}

/*.top-sec .right-top h2:after{*/
/*    content: '';*/
/*    background: url(<?php echo base_url('assets/'); ?>images/moon.svg);*/
/*    width: 50px;*/
/*    height: 50px;*/
/*    position: absolute;*/
/*    background-size: contain;*/
/*    right: 20px;*/
/*    top: 20px;*/
/*    background-repeat: no-repeat;*/
/*}*/

.bottom-sec {
    width: 80%;
    margin: auto;
}
.white-bottom{
    background: #Fff;
    width: 65%;
    margin: 0 auto ;
    border-radius: 10px;
    padding: 5px;
    text-align: center;
    font-weight: 600;
    color: #ed6e70;
    font-size: 14px;
}
.white-bottom p{   
    border: 1px dashed;
    margin: 0;
    padding: 10px;
    font-family: 'Montserrat Alternates', sans-serif;
    border-radius: 10px;
    font-weight: 500;
    text-transform: capitalize;
}
.title-bot p{
    font-family: 'Sacramento', cursive;
    text-align: center;
    font-size: 48px;
    line-height: 1;
    margin: 20px 0 0;
}
.title-bot h3{
    text-align: center;
    font-size: 58px;
    font-family: 'Montserrat Alternates', sans-serif;
    line-height: 1;
    margin: 15px 0;
    color: #353535;
}
.time-bot  {
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
}
.time-bot ul {
    display: inline-flex;
    margin: 10px 0;
    font-family: 'Montserrat Alternates', sans-serif;
    padding: 0;
}
.time-bot li {
    display: inline-block;
    margin: 0 10px;
    position: relative;
}
.time-bot li:after {
content: '|';
    width: 5px;
    height: 20px;
    position: absolute;
    background-size: contain;
    right: -12px;
    color: #fc8e8e;
    top: 0;
    background-repeat: no-repeat;
}
.time-bot li:last-child::after {
    display: none;
}
.time-bot p {
    font-family: 'Montserrat Alternates', sans-serif;
    margin: 10px 0 20px;
}
.title-bot .lines {
    background: white;
    width: 5px;
    height: 15px;
    position: absolute;
    z-index: 9;
    top: 1%;
    border-radius: 25px;
    left: 25%;
    transform: rotate(-50deg);
}
.title-bot{
    position: relative;
}
.title-bot .lines:before {
    content: '';
    background: white;
    width: 5px;
    height: 20px;
    position: absolute;
    z-index: 9;
    top: 2px;
    border-radius: 25px;
    left: 15px;
    transform: rotate(15deg);
}
.title-bot .lines::after {
    content: '';
    background: white;
    width: 5px;
    height: 20px;
    position: absolute;
    z-index: 9;
    top: 2px;
    border-radius: 20px;
    left: -15px;
    transform: rotate(-35deg);
}

.title-bot .lines2 {
    background: white;
    width: 5px;
    height: 15px;
    position: absolute;
    z-index: 9;
    top: 1%;
    border-radius: 25px;
    right: 25%;
    transform: rotate(50deg);
}
.title-bot .lines2:before {
    content: '';
    background: white;
    width: 5px;
    height: 20px;
    position: absolute;
    z-index: 9;
    top: 2px;
    border-radius: 25px;
    left: 15px;
    transform: rotate(15deg);
}
.title-bot .lines2::after {
    content: '';
    background: white;
    width: 5px;
    height: 20px;
    position: absolute;
    z-index: 9;
    top: 2px;
    border-radius: 20px;
    left: -15px;
    transform: rotate(-35deg);
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
.moon{
    position: absolute;
    top: 60px;
    width: 50px !important;
    height: 50px;
    right: 20px;
    z-index: -1;
}

</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">

       <img src="<?php echo base_url('assets/'); ?>images/baby-back.svg" class="bg-image">  
        <div class="top-sec">
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/left-top.svg" />
            </div>
            <div class="right-top">
                <h2>Baby Shower</h2>
            <img src="<?php echo base_url('assets/'); ?>images/moon.svg" class="moon">  
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <div class="lines"></div>
                <p><span> honoring</span></p>                
                <div class="lines2"></div>
                <h3> Gebrialla</h3>
            </div>
            <div class="time-bot">
                <ul>
                    <li>SATURDAY</li>
                    <li>APRIL 20</li>
                    <li>01:00 PM</li>
                </ul>
                <p> VIKAS MARG, VASANT KUNJ, ND</p>
            </div>
            <div class="white-bottom">
                <p>All are gradually invited to our baby shower celebration</p>
            </div>
        </div>

    	<!-- BEGIN BODY
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
	        <tr>
        </tr>
        </table> -->

    </div>
</body>
</html>