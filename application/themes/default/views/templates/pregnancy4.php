<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
</head>


<style>

@font-face {
  font-family: Magenta-Rose;
  src: url(<?php echo base_url('assets/'); ?>fonts/Magenta-Rose.woff);
}
.main-bg{
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/pregnancy-04.svg);*/
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
    position: relative;
    height: 600px;
}

.top-sec img{
    width: 320px;
    height: 320px;
    object-fit: cover;
    border-radius: 50%;
    position: absolute;
    left: 0px; 
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 105px;
}
.top-sec .left-top {
     position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/preg-frame3.svg);*/
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    height: 450px;
    text-align: center;
}
.top-sec .left-top img {
    width: 270px;
    margin: 22px 0;
    object-fit: cover;
    border-radius: 50%;

}



.title-bot h3{
text-align: left;
    font-size: 26px;
    font-family: 'Magenta-Rose', cursive;
    line-height: 1;
    margin: 0 50px 10px;
    color: #917B6D;
    font-weight: 500;
}


.title2-bot h3 {
    font-family: 'Magenta-Rose', cursive;
    font-weight: 100;
    font-size: 25px;
    color: #5F8E5F;
    text-align: right;
    margin: 65px 30px;
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
    height: 450px !important;
    right: 0 !important;
    margin: auto !important;
    width: auto !important;
    border-radius: 0 !important;
}

</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">

    <img src="<?php echo base_url('assets/'); ?>images/pregnancy-04.svg" class="bg-image"> 
        <div class="top-sec">
             <div class="title-bot">
                <h3> Soon to be there    </h3>
            </div>
            <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/preg-frame3.svg"  class="bg-frame"/>
            </div>
            <div class="title2-bot">
                <h3> The best is yet to come…    </h3>
            </div>
        </div>

     


    </div>
</body>
</html>