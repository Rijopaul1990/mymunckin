<!--<!DOCTYPE html>-->
<!--<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">-->
<!--<head>-->
<!--    <title><?php echo @$page_title; ?></title>-->
<!--    <link rel="icon" type="image/png" sizes="80x96" href="<?php echo base_url('assets/img/logo.png'); ?>">-->

<!--    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
<!--    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
<!--    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
   
<!--</head>-->


  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
  
<style>

@font-face {
  font-family: FORTE;
  src: url(<?php echo base_url('assets/'); ?>fonts/FORTE.woff);
}
@font-face {
  font-family: Baloo;
  src: url(<?php echo base_url('assets/'); ?>fonts/Baloo.woff);
}

.main-bg {
    max-width: 500px;
    margin: 0 auto;
    padding: 50px 0 0;
    position: relative;
    text-align: center;
}
.top-sec {
    width: 100%;
    padding: 40px 0 0;
    position: relative;
}
.top-sec h3{
      position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 47px;
    width: 250px;
    font-family: 'Baloo';
    font-weight: 500;
    font-size: 20px;
    letter-spacing: 2px;
    color: #38301D;
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


.bottom-sec {
    width: 80%;
    margin: auto;
    position: relative;
    z-index: 9;
    height: 190px;
}
.title-bot p{
    font-family: 'Baloo' ;
    text-align: center;
    font-size: 50px;
    line-height: 1;
    color: #edb90a;
    padding-bottom: 10px;
    margin: 0;
}
.title-bot h3{
    text-align: center;
    font-size: 26px;
    font-family: 'Varela Round', sans-serif;
    line-height: 1;
    margin: 0 0 10px;
    color: #fff;
    font-weight: 500;
}



</style>

<!--<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;"  >-->
    <div class="main-bg" id="cont" >
        <img src="<?php echo base_url('assets/images/ann12.png'); ?>" class="bb" style="
    position: absolute; left: 0;top: 0;  width: 100%;right: 0;  margin: auto;">
        <div class="top-sec">
            <div class="left-top">
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3 style="font-size:22px;" input-name="together_parent_name" > ANGELINA & JOHNSON </h3>
                <h3> We are having a baby    </h3>
                <p input-name="t_date"> 20 April 2021</p>
            </div>
         
        </div>


    </div>
  <!--<div style="text-align: center;">-->
  <!--      <input type="hidden" id="base_url" value="<?php echo base_url(); ?>" >-->
  <!--      <input type="hidden" id="temp_id" value="<?php echo $fetch_create_template->temp_id; ?>">-->
  <!--       <button type="button" id="load" class="btn btn-munchkin"><span>Save</span></button>-->
  <!--        <a href="<?php echo base_url('Users/announcement/'.encrypt_url($fetch_create_template->temp_id)) ?>" class="btn btn-munchkin" > <span>Back</span></a>-->
          
         
  <!--  </div>-->
<!--</body>-->
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
  <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
<!--</html>-->