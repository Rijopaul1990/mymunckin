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
  font-family: flame;
  src: url(<?php echo base_url('assets/'); ?>fonts/flame.woff);
}

/*@font-face {*/
/*  font-family: Boomolla;*/
/*  src: url(fonts/Boomolla.tff);*/
/*}*/
.main-bg{
    height: 550px;
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/Bday-01.svg);*/
    /*background-size: contain;*/
    /*background-position: top;*/
    /*background-repeat: no-repeat;*/
    /*padding: 20px 0;*/
    width: 700px;
    margin: 0 auto;
    padding: 20px 0;
    position: relative;
    text-align: center;

}
.top-sec {
    height: 520px;
    width: 52%;
    font-family: 'Karla';
    text-align: center;
    font-size: 18px;
    color: #4F4F4F;
    position: relative;
}


.top-sec .left-top h3 {
    font-family: 'Karla';
    color: #4F4F4F;
    font-weight: 500;
    width: 75%;
    font-size: 16px;
    margin: 30px  auto  0px;
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


.title-bot p{
    font-family: 'Karla';
    text-align: center;
    font-size: 22px;
    line-height: 1;
    color: #686868;
    margin: 5px;

}
.top-sec .left-top h3 span{  
    font-size: 40px;
    font-family: 'flame';
    line-height: 1;
    color: #F6A84F;
    display: block;
    
}
.title-bot {
    position: absolute;
    bottom: 25px;
    left: 0;
    margin: auto;
    right: 0;
}
.title-bot h3{
    text-align: center;
    font-size: 40px;
    font-family: 'flame';
    line-height: 1;
    margin: 0 0 15px;
    color: #E86255;
    font-weight: 400;
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
    font-family: 'Karla';
    color: #E86255;
    font-size: 20px;
    width: 100%;
    margin: 10px auto 0;
    line-height: 1;
    font-weight: 500;
}
.title2-bot p span{
    font-family: 'flame';
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
    /*width: auto;*/
    /*height: 100%;*/
    right: 0;
    margin: auto;
    z-index: -1;    
    width: 700px;
}

</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">
    <img src="<?php echo base_url('assets/'); ?>images/Bday-01.svg" class="bg-image">  
        <div class="top-sec">
            <div class="left-top">
                <h3> YOU ARE <span>invited</span>    </h3>
            </div>
            <div class="title-bot">
                <h3> Birthday Celebration   </h3>
                <p>PARENTS NAME HERE</p> 
                    <p>on   </p>
                 <div class="title2-bot">
                    <p>SATURDAY 20 APRIL I 6:00 PM   </p>
                </div>
            </div>
           
        </div>

    </div>
</body>
</html>