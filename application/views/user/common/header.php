<!DOCTYPE html>
<html lang="en">
<?php 
$cart_count = $this->AdminModel->AllCount("add_to_cart",array('session_id'=>$this->input->ip_address()));
$menu_cart_count = $cart_count;
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo @$page_title; ?></title>
    <meta name="keywords" content="<?php echo @$keywords; ?>">
    
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/chartist/css/chartist.min.css">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick-theme.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/toastr.min.css">
    <script src="<?php echo base_url();?>assets/toastr.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/inner.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <Style>
.album_preview_css{
    display: block !important;
    z-index: 0 !important;
}
.album_preview_css{
    display: block !important;
    z-index:  -10 !important;
}
.album_preview_css.show{
    z-index: 99999999 !important;
}
.custom_modal{
    position:absolute;
}
.add_miles .labels-mil {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}
.album_preview_css .close {
position: absolute;
    right: 0;
    color: #fff;
    opacity: 1;
    text-shadow: none;
    padding: 0;
    top: -25px;
}
.flip-control {
    margin-bottom: 2%;
}
</Style>
<style>

.first .main-bg{
    width: 100%;
    height: 400px;
    margin: 0 auto;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.first .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.first .logo{    
    transform: translateY(-40px);
    width: 200px;
}
.bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.top-sec {
    z-index: 9;
}
/*.top-sec  h2{*/
/*    font-family: 'Baloo 2', cursive;*/
/*    font-size: 26px;*/
/*    line-height: 1.2;*/
/*    color: #f3999b;*/
/*    font-weight: 500;*/
/*    width: 55%;*/
/*    margin: auto;*/
/*}*/
/*.logo{    */
/*    width: 220px;*/
/*}*/


@font-face {
  font-family: DTCCabanaBaby;
  src: url(<?php echo base_url();?>assets/fonts/DTCCabanaBaby.woff);
}

.second .main-bg{
    width: 100%;
    margin: 0 auto;
    height: 400px;
    background: #fff;
    position: relative;
}
.second .top-sec {
    width: 100%;
    position: relative;
}
.second .bottom-sec {
    width: 55%;
    margin-left: auto;
    position: absolute;
    top: 40%;
    right: 5%;
    z-index: 999;
    transform: translateY(-50%);
}
.second .title-bot h3{
    text-align: left;
    font-size: 80px;
    font-family: 'DTCCabanaBaby';
    line-height: 0.8;
    color: #0081C7;
    font-weight: 400;
    -webkit-text-stroke: 2px white;
    margin: 0;
}
.second .title-bot h3 span {
     margin: 0 10px;
    font-family: 'DTCCabanaBaby';
    display: inline-block;
    font-size:60px;
    color: #111;
}

.second .date h3 span{
    display: block;
    line-height: 1;
}
.second .top-sec .left-sec .album-img{
width: 100%;
    height: 400px;
    object-fit: contain;
    object-position: center;
}
.second .top-sec .left-sec .baby-img{
    width: 100%;
    height: 400px;
    object-fit: cover;
    object-position: center;
}
.second .left-sec {
    width: 60%;
    position: absolute;
    left: 0;
    display:inline-flex;
}

.second .right-sec {
    width: 40%;
    position: absolute;
    right: 0;
}

.second .top-sec .right-sec .album-img{
width: 100%;
    height: 400px;
    object-fit: cover;
    object-position: center;
}
.second .right-sec  .bottom-sec{
    width: 100%;
    top: 72%;
    text-align: center;
}
.second .right-sec  .bottom-sec p{
    font-family: 'Baloo 2', cursive;
    font-size:26px;
    margin: 0;
}
.second .foot {
    width: 32%;
}


.main-bg .placeholder_div img {
    object-fit: cover !important;
}
.main-bg .placeholder_div.edit_img:after{
    content:none !important;
}
.third .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 30px 0 10px;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
}
.third .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    z-index: 0;
    height: 100%;
}
.third .top-sec  h2{
font-size: 70px;
    color: #111;
    font-weight: 400;
    margin: auto;
    margin-top: -50px;
    z-index: 9;
    -webkit-text-stroke: 2px white;
    position: relative;
    font-family: 'DTCCabanaBaby';
    width: 100%;
}
.third .top-sec  h2 span{
    font-size: 58px;
    font-family: 'DTCCabanaBaby';
}
.third .top-sec img{
    width: 100%;
    height: 300px;
    object-fit: contain;
    position: relative;
}




.forth .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
}
.forth .top-sec {
    width: 100%;
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
}
.forth .top-sec ul{
    display: inline-flex;
    width: 50%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    margin: 0;
    overflow: hidden;
    height: 400px;
}
.forth .top-sec ul li{
    margin:  3px;
    width:100%;
    /*height: 240px;*/
}

.forth .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.forth .top-sec ul li:nth-child(1){
    height: 58%;
}
.forth .top-sec ul li:nth-child(2){
    height: 42%;
}
.forth .top-sec .second li:nth-child(2){
    height: 58%;
}
.forth .top-sec .second li:nth-child(1){
    height: 42%;
}



.fifth .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #f2fcff;
}
.fifth .top-sec{
    display: inline-flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
}
.fifth .top-sec  h2{
    font-size: 80px;
    color: #111;
    width: 10%;
    font-weight: 800;
    margin: auto;
    z-index: 9;
    -webkit-text-stroke: 0.5px white;
    position: relative;
    font-family: 'DTCCabanaBaby';
    left: 2%;
    line-height: 1;
}
.fifth .top-sec img{
    width: 100%;
    height: 320px;
    object-fit: contain;
    position: relative;
}



.sixth  .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: #fff;
}
.sixth  .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.sixth  .top-sec {
    z-index: 9;
    display: inline-flex;
}
.sixth  .top-sec ul{
    display: inline-flex;
    width: 70%;
    list-style: none;
    padding: 0;
    margin: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.sixth  .top-sec ul li{
    margin: 6px 6px 0 0;
    width: 48%;
}

.sixth  .top-sec ul li img{
    width: 100%;
    height: 160px;
    object-fit: contain;
}

.sixth  .right-side  h2{
    font-size: 38px;
    color: #111;
    font-weight: 100;
    margin: auto;
    z-index: 9;
    font-family: 'DTCCabanaBaby';
    width: 100%;
}

.sixth .right-side p{
font-family: 'Baloo 2', cursive;
    font-size: 16px;
    margin: 0 auto 10px;
    width: 82%;
    font-weight: 400;
}
.sixth  .right-side{
    width: 30%;
    margin: auto;
}
.sixth  .arrows{
    position: absolute;
    right: 30px;
    height: 14px;
}
.sixth  .right-side .slide{
    height: 90px;
}


.seventh .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 400px;
    position: relative;
    background: #EFE3E5;
    display: flex;
}

.seventh .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.seventh .title-bot h3{
color: #111;
    font-family: 'DTCCabanaBaby';
    font-size: 34px;
    font-weight: 800;
    margin: 0;
    line-height: 1.2;
    text-align: left;
    -webkit-text-stroke: 0.5px white;
}

.seventh .title-bot{
    text-align: center;
}
.seventh .left-sec{
    width: 58%;
}
.seventh .left-sec img {
    width: 100%;
    object-fit: contain;
    height: 400px;
    position: relative;
}
.seventh .right-sec {
    align-self: center;
    position: relative;
    width: 42%;
    padding: 0  26px;
    box-sizing: border-box;
}
.seventh .section{
    display: inline-flex;
}

.seventh .section .right-sec img{
    width:80%;
}


.eighth .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: #fff;
}
.eighth .top-sec {
    z-index: 9;
    display: inline-flex;
}
.eighth .top-sec ul{
    display: inline-flex;
    width: 100%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    margin: 0;
    justify-content: center;
    height: 400px;
}
.eighth .top-sec ul li{ 
    height: 200px;
    width: 50%;
    box-sizing: border-box;
}

.eighth .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.eighth .top-sec ul li:nth-child(1){
    padding: 0 3px 3px 0;
}
.eighth .top-sec ul li:nth-child(2){
   padding: 0 0px 3px 3px;
}
.eighth .top-sec ul li:nth-child(3){
    padding: 3px 3px 0 0;
}
.eighth .top-sec ul li:nth-child(4){ 
     padding: 3px 0 0 3px; 
}




.ninth .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 400px;
    position: relative;
    background: #EFE3E5;
    display: flex;
}

.ninth .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.ninth .title-bot h3{
    color: #111;
    font-family: 'DTCCabanaBaby';
    font-size:80px;
    font-weight: 800;
    margin: 0;
    position: relative;
    line-height: 1;
    text-align: left;
    -webkit-text-stroke: 0.5px white;
}

.ninth .title-bot{
    text-align: center;
}
.ninth .left-sec{
    width: 85.5%;
}
.ninth .left-sec img {
    width: 100%;
    object-fit: contain;
    height: 100%;
    position: relative;
}
.ninth .right-sec {
    align-self: center;
    position: absolute;
    left: 12%;
    width: 82%;
    bottom: 0;
}
.ninth .section{
    display: inline-flex; 
    width: 100%;
}
.ninth .title-bot h3:last-child {
    text-align: right;
}
.ninth .title-bot h3:last-child img{

    transform: unset;
    left: 0;
    width: 12%;
    top: 28%;

}
.ninth .section .right-sec img{
    width: 8%;
    position: absolute;
    left: unset;
    margin: 0 10px;
    z-index: 98;
    top: 50%;
    transform: translate(60%,-50%);
}



.tenth .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: #fff;
}
.tenth .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.tenth .top-sec {
    z-index: 9;
    display: inline-flex;
}
.tenth .top-sec ul{
    display: inline-flex;
    width: 62%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.tenth .top-sec ul li{
    width: 50%;
    height: 130px;
    box-sizing: border-box;
}

.tenth .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}


.tenth .top-sec ul li:nth-child(1){
    padding: 0 3px 3px 0;
}
.tenth .top-sec ul li:nth-child(2){
   padding: 0 0px 3px 3px;
}
.tenth .top-sec ul li:nth-child(3){
    padding: 3px 3px 0px 0 ;
}
.tenth .top-sec ul li:nth-child(4){ 
     padding: 3px 0 0 3px; 
}
.tenth .top-sec ul li:nth-child(5){ 
     padding: 3px 0px 0px 3px; 
}
.tenth .right-side  h2{
    font-size: 38px;
    color: #111;
    font-weight: 100;
    margin: auto;
    z-index: 9;
    text-align: left;
    font-family: 'DTCCabanaBaby';
}

.tenth .right-side p{
    font-family: 'Baloo 2', cursive;
    font-size: 20px;
    margin: 0 auto 10px;
    width: 68%;
    font-weight: 500;
}
.tenth .right-side{
    width: 30%;
    margin: auto;
}
.tenth .midd{
    width:100% !important;
}






.eleven .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative; 
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
}
.eleven .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.eleven .top-sec  h3{
    
    color: #111;
    font-family: 'DTCCabanaBaby';
    font-size:80px;
    font-weight: 800;
    margin: 0;
    position: relative;
    line-height: 0.6;
    text-align: left;
    -webkit-text-stroke: 0.5px white;
}
.eleven .top-sec .baby-img{
    width: 100%;
    height: 250px;
    object-fit: contain;
    position: relative;
    border: 8px solid #fff;
}
.eleven .top-sec {
    z-index: 9;
    width: 75%;
}
.eleven .title-bot {
    align-self: center;
    position: absolute;
    left: 6%;
    width: 75%;
    bottom: 5%;
}
.eleven .title-bot h3:last-child img {
    height: 90px;
}

.eleven .title-bot h3:last-child {
    margin-left:30px;
    font-size: 85px;
    margin-top: 15px;
}



.twelve .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
}
.twelve .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    z-index: 1;
    height: 100%;
}
.twelve .top-sec ul{
    display: inline-flex;
    width: 92%;
    list-style: none;
    padding: 0;
    margin: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.twelve .top-sec ul li{
    margin:   3px;
}

.twelve .top-sec ul li img{
    width: 100%;
    height: 180px;
    object-fit: contain;
}
.twelve .top-sec ul li:nth-child(1){
    width: 35%;
}
.twelve .top-sec ul li:nth-child(2){
    width:62%;
}
.twelve .top-sec ul li:nth-child(3){
    width: 62%;
}
.twelve .top-sec ul li:nth-child(4){
    width: 35%;
}




.thirteen  .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.thirteen  .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.thirteen .top-sec  h2{
font-family: 'DTCCabanaBaby';
    font-size: 58px;
    line-height: 0.6;
    color: #111;
    font-weight: 800;
    z-index: 9;
    margin: 0;
    -webkit-text-stroke: 0.5px white;
    position: relative;
    width: 100%;
}

.thirteen .top-sec  .content  h2:last-child{
    font-size: 94px;
    text-align: right;
    margin-top: 0;
}
.thirteen .top-sec  .content{
    position: absolute;
    right: 10%;
    margin: auto;
    top: 6%;
    width: 55%;
}
.thirteen .top-sec ul{
    display: inline-flex;
    width: 90%;
    list-style: none;
    align-items: flex-end;
    margin: 0;
    padding: 0;
    justify-content: space-between;
}
.thirteen .top-sec {
    width: 100%;
}
.thirteen .top-sec ul li{
    width: 50%; 
    margin: 0 5px;
}
.thirteen .top-sec .content img{
    text-align: right;
    margin-left: 45%;
    height: 30px;
}
.thirteen .top-sec ul li:last-child img{
    height: 220px;
}
.thirteen .top-sec ul li img{
    width: 100%;
    height: 350px;
    object-fit: contain;
}



.forthteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
}
.forthteen .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.forthteen .top-sec {
    width: 95%;
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
}
.forthteen .top-sec ul{
    display: inline-flex;
    width: 48%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    margin: 0;
    overflow: hidden;
    height: 400px;
}
.forthteen .top-sec ul li{
    width:100%;
    height: 50%;
    box-sizing: border-box;
}

.forthteen .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.forthteen .top-sec ul.first li:nth-child(1){
    padding-bottom:8px;
}
.forthteen .top-sec .second li:nth-child(1){
    height: 100%;
}



.fifteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
}
.fifteen .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    z-index: 0;
    height: 100%;
}
.fifteen .top-sec  h2{
    font-size: 70px;
    color: #111;
    font-weight: 800;
    margin: auto;
    margin-top: -50px;
    z-index: 9;
    -webkit-text-stroke: 0.5px white;
    position: relative;
    font-family: 'DTCCabanaBaby';
    width: 100%;
}

.fifteen .top-sec  h2 span{
    font-size: 52px;
    margin: 0;
    font-family: cursive;
    -webkit-text-stroke: 2.5px white;
}
.fifteen .top-sec {
   width:100%;  
}
.fifteen .top-sec ul {
    display: inline-flex;
    width: 92%;
    list-style: none;
    padding: 0; 
    justify-content: space-between;
    align-items: baseline;
}
.fifteen .top-sec ul li {
    width: 58%;
    margin: 0 5px;
}
.fifteen .top-sec ul li:nth-child(2){
    width: 42%;
}
.fifteen .top-sec ul li img {
    width: 100%;
    height: 270px;
    position: relative;
    object-fit: contain;
}


.sixteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    text-align: center;
}
.sixteen .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
}

.sixteen .top-sec .album-img{
    width: 600px;
    height: 400px;
    object-fit: contain;
    display: flex;
    justify-content: center;
    align-items: center;
}

.sixteen .top-sec ul{
    display: flex;
    width: 90%;
    padding: 0;
    margin: 0;
    list-style: none;
    flex-wrap: wrap;
}
.sixteen .top-sec ul li img {
    width: 100%;
    height: 180px;
    object-fit: contain;
}
.sixteen .top-sec ul li:nth-child(1) {
    width: 58%;
    margin-right: 8px;
}
.sixteen .top-sec ul li:nth-child(2) {
    width: 40%;
}
.sixteen .top-sec ul li:nth-child(4) {
    width: 55%;
    margin: 8px 0 0 0;

}
.sixteen .top-sec ul li:nth-child(4) img {
    height: 170px;
}
.sixteen .top-sec ul li.panda  {
    width: 45%;
    margin: 8px 0 0;
    position: relative;
    z-index: 9;
}
.sixteen .top-sec ul li.panda img{
    object-fit: contain;
    height: 160px;
}
 
.sixteen .top-sec ul li{
    width: 50%;
}





.seventeen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    text-align: center;
    background: #48BEEE;
}
.seventeen .top-sec  h2{
    font-size: 76px;
    color: #111;
    font-weight: 400;
    margin: auto;
    margin-top: 0px;
    -webkit-text-stroke: 2px white;
    z-index: 9;
    position: relative;
    font-family: 'DTCCabanaBaby';
    width: 100%;
}

.seventeen .top-sec  h2 span{
    font-size: 52px;
    margin: 0;
    font-family: 'DTCCabanaBaby';
}
.seventeen .top-sec {
   width:100%;  
    overflow: hidden; 
}
.seventeen .top-sec ul {
    display: inline-flex;
    width: 95%;
    list-style: none;   
     margin: 0;
    padding: 0;
    justify-content: space-between;
}
.seventeen .top-sec ul li {
    width: 58%;
    position: relative;
    margin: 0 10px 0 0;
    display: inline-flex;
    align-items: flex-end;
}

.seventeen .top-sec ul li:nth-child(1) img{
    height: 260px;
}
.seventeen .top-sec ul li:nth-child(3){
    width: 52%;
    position: relative;
}
.seventeen .top-sec ul li img {
    width: 100%;
    height: 280px;
    position: relative;
    object-fit: contain;
}
.seventeen .jar{
    width: 10% !important;
    margin-top: -15px !important;
    align-items: baseline !important;
}
.seventeen .jar img{
    height: auto !important;
}




.eighteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
}
.eighteen .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.eighteen .top-sec {
    width: 90%;
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    z-index: 9;
}
.eighteen .top-sec ul{
    display: inline-flex;
    width: 48%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    margin: 0;
    overflow: hidden;
    height: 400px;
}
.eighteen .top-sec ul li{
    width:100%;
    height: 50%;
    box-sizing: border-box;
}

.eighteen .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.eighteen .top-sec ul.first li:nth-child(1){
    padding-bottom:5px;
    width: 85%;
    margin-left: auto;
    margin-bottom: 8px;
}
.eighteen .top-sec ul.first li:nth-child(2){
    width: 90%;
    margin: auto;
}
.eighteen .top-sec .second li:nth-child(1){
    height: 75%;
}


.ninteen .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 400px;
    position: relative;
    display: flex;
}

.ninteen .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.ninteen .title-bot h3{
    color: #111;
    font-family: 'DTCCabanaBaby';
    font-size:58px;
    font-weight: 800;
    margin: 0;
    line-height: 1.2;
    text-align: left;
    -webkit-text-stroke: 0.5px white;
}

.ninteen .title-bot{
    text-align: center;
}
.ninteen .left-sec{
    width: 45%;
}
.ninteen .left-sec img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    position: relative;
}
.ninteen .right-sec {
    align-self: center;
    position: relative;
    width: 55%;
    padding: 0 45px;
    box-sizing: border-box;
}
.ninteen .section{
    width:100%;
    display: inline-flex;
}

.ninteen .section .right-sec img{
    width:80%;
}
.ninteen .section .left-sec li:nth-child(1){
    height: 54%;
    width: 100%;
    margin-bottom: 10px;      
}

.ninteen .section .left-sec li:nth-child(2){
      height: 46%;
    width: 100%; 
}
.ninteen .section .left-sec .edit_img{
    height: 100%;
}


.twenty .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.twenty .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.twenty .top-sec {
    width: 100%;
    position: relative;
}

.twenty .top-sec ul{
    display: flex;
    width: 90%;
    padding: 0;
    justify-content: center;
    align-items: center;
    margin: auto;
    list-style: none;
}
.twenty .top-sec ul li img {
    width: 100%;
    height: 180px;
    object-fit: contain;
}
.twenty .top-sec ul li{
    width: 33%;
    margin: 0 5px;
}
.twenty .top-sec ul li:nth-child(1) {
    transform: translateY(-60px);

}
.twenty .top-sec ul li:nth-child(3)  {
    transform: translateY(60px);
}






.twenty_one .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
}
.twenty_one .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.twenty_one .top-sec {
    width: 90%;
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    z-index: 9;
    position: relative;
    height: 360px;
}
.twenty_one .top-sec ul{
    display: inline-flex;
    width: 55%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    margin: 0;
    overflow: hidden;
    align-items: flex-end;
    height: 100%;
}
.twenty_one .top-sec ul li{
    width:100%;
    height: 45%;
    box-sizing: border-box;
}

.twenty_one .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.twenty_one .top-sec ul.first li:nth-child(1){
    padding-bottom:15px;
    width: 65%;
    margin-left: auto;
}
.twenty_one .top-sec ul.first li:nth-child(2){
    width: 94%;
    margin-left: auto;
}
.twenty_one .top-sec .second li:nth-child(1){
    height: 80%;
}
.twenty_one .top-sec .second {
    width: 40%;
}
.twenty_one .content {
    position: absolute;
    top: 0;
    font-size: 58px;
    left: 0;
    text-align: left;
    width: 60%;
}
.twenty_one .content h2{
color: #111;
    font-family: 'DTCCabanaBaby';
    font-size: 50px;
    font-weight: 800;
    margin: 0;
    line-height: 1;
    text-align: left;
    -webkit-text-stroke: 0.5px white;
    width: 100%;
    position: relative;
    z-index: 9;
}
.twenty_one .content h2 span{
    font-size: 80px;
    display: block;
    text-align: right;
    font-family: 'DTCCabanaBaby';
}



.twenty_two .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:400px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    text-align: center;
}
.twenty_two .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;   
    height: 100%;
}
.twenty_two .top-sec {
    width: 100%;
    position: relative;
}

.twenty_two .top-sec .album-img{
    width: 600px;
    height: 400px;
    object-fit: contain;
    display: flex;
    justify-content: center;
    align-items: center;
}

.twenty_two .top-sec ul{
    display: inline-flex;
    width: 92%;
    padding: 0;
    margin: 0;
    list-style: none;
    flex-wrap: wrap;
    align-items: flex-start;
    height: 400px;
    overflow: hidden;
    position: relative;
}
.twenty_two .top-sec ul li img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.twenty_two .top-sec ul li:nth-child(1) {
     width: 52%;
    margin-right: 15px;
    position: relative;
    height: 300px;
}
.twenty_two .top-sec ul li:nth-child(2) {
    width: 44%;
    height: 300px;
    margin-top: auto;
}
.twenty_two .top-sec .car  {
    width: 160px;
    position: absolute;
    z-index: 9;
    left: 40px;
    object-fit: contain;
    bottom: 5%;
    height: auto;
}
.twenty_two .top-sec ul li{
    width: 50%;
}

.edit_img:after {
    font-family: "Font Awesome 5 Free"; 
    font-weight: 900; 
    content: "\f303 ";
    position: absolute;
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 50%;
    transform: translateY(-50%);
    background: #ff721d47;
    height: 100%;
    color: #ffffff;
    opacity:0;
    margin: auto;
    cursor: pointer;
}
.edit_img:hover:after {
    opacity:1;
}

.edit_img{
    position:relative;
}



#summer_loader {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    width: 100%;
    display: flex;
    height: 100%;
    background: #ffffff69;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.pixie .position-top .control-button:nth-child(7) {
    display:none;
}
.pixie .position-top .control-button:nth-child(8) {
    display:none;
}
.pixie .position-top .control-button:nth-child(9) {
    display:none;
}

.pixie .position-top .control-button:last-child {
    display:none;
}

.pixie toolbar.ng-tns-c119-1.ng-star-inserted {
    background-color: #5789ff;
}

.pixie toolbar.ng-tns-c119-1.ng-star-inserted .mat-focus-indicator.mat-menu-trigger.mat-button.mat-button-base.ng-star-inserted{
      display:none;
}
pixie-editor button.no-style{
    
    text-align: center !important;
}
.pixie navigation-bar .scroll-container {
    justify-content: center !important;
}
.pixie .left.ng-star-inserted{
      display:inline-flex;
}
.pixie .left.ng-star-inserted .ng-star-inserted:nth-child(2){
    order: 1;
    display: inline-flex;
}
.pixie .left.ng-star-inserted .ng-star-inserted:nth-child(2){
    order: 1;
    display: inline-flex;
}
.pixie .left.ng-star-inserted .ng-star-inserted:nth-child(3) .toolbar-image{
    max-height: 50px;
}
.pixie .left.ng-star-inserted .ng-star-inserted:nth-child(2) .mat-button .mat-button-wrapper .mat-icon{
    vertical-align: unset;
}
.pixie .right.ng-star-inserted .ng-star-inserted:nth-child(2){
      display:none;
}
.pixie .right.ng-star-inserted .ng-star-inserted:nth-child(3){
      display:none;
}
.position-top  .ng-trigger svg {
    color: #FF721D;
}



#mobile_album{
    display:none;
}


@media screen and (max-width: 1020px) {
   #albumm{
        /*overflow-x: scroll !important;*/
        /*width: 100%;*/
        /*height: 500px;*/
        display:none;
    }
    
    #mobile_album{
        width:350px;
        display:block;
        margin:20px auto;
    }
    #mobile_album .owl-nav button{
        background: unset;
        border: none;
        margin: 0 20px;
        outline: none;
    }
    #mobile_album .owl-nav button img{
      width:20px;
    }
    #mobile_album .main-bg {
        height: 300px !important;
    }
    .second .top-sec .left-sec .album-img {
        height: 300px;
    }
    .second .top-sec .left-sec .baby-img {
        height: 300px;
    }
    .second .top-sec .right-sec .album-img {
        height: 300px;
    }
    .second .bottom-sec {
    top: 30%;
    }
    .second .title-bot h3 {
        font-size: 48px;
    -webkit-text-stroke: 1px white;
    }
    .second .right-sec .bottom-sec p {
        font-size: 20px;
    }
    .second .foot {
        width: 50% !important;
        margin: auto;
    }
    .second .title-bot h3 span {
        font-size: 46px;
    }
    .third .top-sec img {
        height: 230px;
    }
    .third .top-sec h2 span {
        font-size: 38px;
    }
    .third .top-sec h2 {
        font-size: 44px;
    -webkit-text-stroke: 1px white;
    }
    .forth .top-sec ul {
        height: 300px;
    }
    .fifth .top-sec img {
        height: 300px;
    }
    .fifth .top-sec h2 {
        font-size: 66px;
    }
    .sixth .top-sec ul li {
        width: 46%;
    }
    .sixth .top-sec ul li img {
        height: 130px;
    }
    .sixth .top-sec {
        align-items: center;
    }
    .sixth .right-side h2 {
        font-size: 30px;
        width: 100%;
    }
    .sixth .right-side p {
        font-size: 12px;
    }
    .sixth .arrows {
        right: 16px;
        height: 12px;
        width: auto !important;
    }
    .sixth .right-side .slide {
        height: 80px;
        width: auto;
        margin: auto;
    }
    .seventh .left-sec img {
        height: 300px;
    }
    .seventh .title-bot h3 {
        font-size: 28px;
        font-weight: 400;
        -webkit-text-stroke: 1px white;
    }
    .seventh .right-sec {
        padding: 0 10px;
    }
    .eighth .top-sec ul {
        height: 300px;
    }
    .eighth .top-sec ul li {
        height: 150px;
    }
    .ninth .title-bot h3 {
        font-size: 54px;
        font-weight: 400;
        -webkit-text-stroke: 1px white;
    }
    .ninth .section .right-sec img {
        right: 35%;
    }
    .tenth .right-side img {
        margin: auto;
    }
    .tenth .right-side h2 {
        font-size: 34px;
    }
    .eleven .top-sec h3 {
        font-size: 58px;
        font-weight: 400;
        -webkit-text-stroke: 1px white;
    }
    .eleven .title-bot h3:last-child {
        font-size: 58px;
    }
    .eleven .top-sec .baby-img {
        height: 200px;
    }
    .eleven .title-bot h3:last-child img {
        height: 60px;
        width: auto;
        display: unset;
    }
    .twelve .top-sec ul li:nth-child(2) {
        width: 60%;
    }
    .twelve .top-sec ul li:nth-child(3) {
        width: 60%;
    }
    .twelve .top-sec ul li img {
        height: 140px;
    }
    .thirteen .top-sec h2 {
        font-size: 44px;
        font-weight: 400;
        -webkit-text-stroke: 1px white;
    }
    .thirteen .top-sec .content img {
        margin-left: 55%;
        width: auto;
        margin-top: 5px;
    }
    .thirteen .top-sec .content h2:last-child {
        font-size: 66px;
    }
    .thirteen .top-sec ul li img {
        height: 305px;
    }
    .thirteen .top-sec ul li:last-child img {
        height: 180px;
    }
    .forthteen .top-sec ul {
        height: 300px;
    }
    .fifteen .top-sec h2 {
        font-size: 48px;
        font-weight: 500;
        -webkit-text-stroke: 1px white;
    }
    .fifteen .top-sec h2 span {
        font-size: 38px;
    -webkit-text-stroke: 1px white;
    }
    .fifteen .top-sec ul li img {
        height: 180px;
    }
    .sixteen .top-sec ul li.panda img {
        height: 120px;
    }
    .sixteen .top-sec ul li:nth-child(1) {
        width: 56%;
    }
    .sixteen .top-sec ul li:nth-child(4) img {
        height: 150px;
    }
    .sixteen .top-sec ul li img {
        height: 130px;
    }
    .seventeen .top-sec h2 span {
        font-size: 38px;
    }
    .seventeen .top-sec h2 {
        font-size: 44px;
        -webkit-text-stroke: 1px white;
    }
    .seventeen .top-sec ul li:nth-child(1) img {
        height: 190px;
    }
    .seventeen .top-sec ul li img {
        height: 200px;
    }
    .seventeen .jar {
        margin-top: -5px !important;
    }
    .eighteen .top-sec ul {
        height: 300px;
    }
    .twenty .top-sec ul li img {
        height: 130px;
    }
    .twenty_one .top-sec {
        height: 300px;
    }
    .twenty_one .content h2 {
        font-size: 36px;
        font-weight: 400;
        -webkit-text-stroke: 1px white;
    }
    .twenty_one .content {
        top: 10px;
    }
    .twenty_two .top-sec ul {
        height: 300px;
    }
    .twenty_two .top-sec ul li:nth-child(1) {
        width: 50%;
        height: 220px;
    }
    .twenty_two .top-sec .car {
        width: 32%;
        left: 10%;
        bottom: 12%;
    }
    .twenty_two .top-sec ul li:nth-child(2) {
        height: 220px;
    }
    .first .logo {
        transform: translateY(-28px);
        width: 80% !important;
        margin: auto;
    }
}



</style>
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url();?>assets/images/logo.png" alt="">
               
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		

		
		<!--**********************************
            Header start
        ***********************************-->
        <?php
			$u_de = $this->AdminModel->fs("user",array('id'=>$this->session->userdata['userdetail']['id']));
			$get_web_page =  $this->AdminModel->fs('genrate_url',array('u_id'=>$this->session->userdata['userdetail']['id']));
			if(@$get_web_page->dob){
                $web_page_link  =  'db/'.@$get_web_page->link;
            } else if($get_web_page->due_date ){
                $web_page_link  =  'dd/'.$get_web_page->link;
            }
		?>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Hi, <?php echo @$u_de->first_name; ?>
								<span>Welcome to My Munchkin</span>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<!-- <li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
									</div>
								</div>
							</li> -->
							<!-- <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#ff9d52"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">12</span>
                                </a>
                                <div class="dropdown-menu rounded dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">My Munchkin Updates Waitng For You</h6>
														<small class="d-block">08 July 2022 - 02:26 PM</small>
													</div>
												</div>
											</li>
										
										
										
										
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : New Templates Arrived!</h6>
														<small class="d-block">07 July 2022 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li> -->
							<!-- <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0)">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.4604 3.84863H5.31685C4.64745 3.84937 4.00568 4.11561 3.53234 4.58895C3.059 5.06229 2.79276 5.70406 2.79202 6.37346V18.156C2.79276 18.8254 3.059 19.4672 3.53234 19.9405C4.00568 20.4138 4.64745 20.6801 5.31685 20.6808C5.54002 20.6809 5.75401 20.7697 5.91181 20.9275C6.06961 21.0853 6.15832 21.2993 6.15846 21.5224V23.3166C6.15846 23.6212 6.24115 23.9202 6.39771 24.1815C6.55427 24.4429 6.77882 24.6569 7.04744 24.8006C7.31605 24.9444 7.61864 25.0125 7.92295 24.9978C8.22726 24.9831 8.52186 24.8861 8.77536 24.7171L14.6173 20.8222C14.7554 20.7297 14.9179 20.6805 15.0841 20.6808H19.187C19.7383 20.6798 20.2743 20.4991 20.7137 20.1662C21.1531 19.8332 21.472 19.3661 21.6222 18.8357L24.8965 7.04986C24.9999 6.67457 25.0152 6.2805 24.9413 5.89831C24.8675 5.51613 24.7064 5.15615 24.4707 4.84638C24.235 4.53662 23.9309 4.28544 23.5823 4.11238C23.2336 3.93933 22.8497 3.84907 22.4604 3.84863ZM23.2733 6.6028L20.0006 18.3845C19.95 18.5612 19.8432 18.7166 19.6964 18.8272C19.5496 18.9378 19.3708 18.9976 19.187 18.9976H15.0841C14.5856 18.997 14.0981 19.1446 13.6836 19.4217L7.84168 23.3166V21.5224C7.84094 20.853 7.5747 20.2113 7.10136 19.7379C6.62802 19.2646 5.98625 18.9983 5.31685 18.9976C5.09368 18.9975 4.87969 18.9088 4.72189 18.7509C4.56409 18.5931 4.47537 18.3792 4.47524 18.156V6.37346C4.47537 6.15029 4.56409 5.9363 4.72189 5.7785C4.87969 5.6207 5.09368 5.53198 5.31685 5.53185H22.4604C22.5905 5.53218 22.7188 5.56252 22.8352 5.62052C22.9517 5.67851 23.0532 5.76259 23.1318 5.86621C23.2105 5.96984 23.2641 6.09021 23.2887 6.21797C23.3132 6.34572 23.3079 6.47742 23.2733 6.6028Z" fill="#4C8147"/>
										<path d="M7.84167 11.423H12.0497C12.2729 11.423 12.487 11.3343 12.6448 11.1765C12.8027 11.0186 12.8913 10.8046 12.8913 10.5814C12.8913 10.3581 12.8027 10.1441 12.6448 9.98625C12.487 9.82842 12.2729 9.73975 12.0497 9.73975H7.84167C7.61846 9.73975 7.4044 9.82842 7.24656 9.98625C7.08873 10.1441 7.00006 10.3581 7.00006 10.5814C7.00006 10.8046 7.08873 11.0186 7.24656 11.1765C7.4044 11.3343 7.61846 11.423 7.84167 11.423Z" fill="#4C8147"/>
										<path d="M15.4162 13.1064H7.84167C7.61846 13.1064 7.4044 13.1951 7.24656 13.3529C7.08873 13.5108 7.00006 13.7248 7.00006 13.9481C7.00006 14.1713 7.08873 14.3853 7.24656 14.5432C7.4044 14.701 7.61846 14.7897 7.84167 14.7897H15.4162C15.6394 14.7897 15.8534 14.701 16.0113 14.5432C16.1691 14.3853 16.2578 14.1713 16.2578 13.9481C16.2578 13.7248 16.1691 13.5108 16.0113 13.3529C15.8534 13.1951 15.6394 13.1064 15.4162 13.1064Z" fill="#4C8147"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">5</span>
                                </a>
							</li> -->
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.625 6.12494H22.75V2.62494C22.75 2.47256 22.7102 2.32283 22.6345 2.19056C22.5589 2.05829 22.45 1.94807 22.3186 1.87081C22.1873 1.79355 22.0381 1.75193 21.8857 1.75007C21.7333 1.7482 21.5831 1.78616 21.4499 1.86019L14 5.99902L6.55007 1.86019C6.41688 1.78616 6.26667 1.7482 6.11431 1.75007C5.96194 1.75193 5.8127 1.79355 5.68136 1.87081C5.55002 1.94807 5.44113 2.05829 5.36547 2.19056C5.28981 2.32283 5.25001 2.47256 5.25 2.62494V6.12494H4.375C3.67904 6.1257 3.01181 6.40251 2.51969 6.89463C2.02757 7.38674 1.75076 8.05398 1.75 8.74994V11.3749C1.75076 12.0709 2.02757 12.7381 2.51969 13.2302C3.01181 13.7224 3.67904 13.9992 4.375 13.9999H5.25V23.6249C5.25076 24.3209 5.52757 24.9881 6.01969 25.4802C6.51181 25.9724 7.17904 26.2492 7.875 26.2499H20.125C20.821 26.2492 21.4882 25.9724 21.9803 25.4802C22.4724 24.9881 22.7492 24.3209 22.75 23.6249V13.9999H23.625C24.321 13.9992 24.9882 13.7224 25.4803 13.2302C25.9724 12.7381 26.2492 12.0709 26.25 11.3749V8.74994C26.2492 8.05398 25.9724 7.38674 25.4803 6.89463C24.9882 6.40251 24.321 6.1257 23.625 6.12494ZM21 6.12494H17.3769L21 4.11244V6.12494ZM7 4.11244L10.6231 6.12494H7V4.11244ZM7 23.6249V13.9999H13.125V24.4999H7.875C7.64303 24.4996 7.42064 24.4073 7.25661 24.2433C7.09258 24.0793 7.0003 23.8569 7 23.6249ZM21 23.6249C20.9997 23.8569 20.9074 24.0793 20.7434 24.2433C20.5794 24.4073 20.357 24.4996 20.125 24.4999H14.875V13.9999H21V23.6249ZM24.5 11.3749C24.4997 11.6069 24.4074 11.8293 24.2434 11.9933C24.0794 12.1574 23.857 12.2496 23.625 12.2499H4.375C4.14303 12.2496 3.92064 12.1574 3.75661 11.9933C3.59258 11.8293 3.5003 11.6069 3.5 11.3749V8.74994C3.5003 8.51796 3.59258 8.29558 3.75661 8.13155C3.92064 7.96752 4.14303 7.87524 4.375 7.87494H23.625C23.857 7.87524 24.0794 7.96752 24.2434 8.13155C24.4074 8.29558 24.4997 8.51796 24.5 8.74994V11.3749Z" fill="#4C8147"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">2</span>
                                </a>
								<div class="dropdown-menu dropdown-menu-right rounded">
									<div id="DZ_W_TimeLine11Home" class="widget-timeline dz-scroll style-1 p-3 height370 ps ps--active-y">
										<ul class="timeline">
											<li>
												<div class="timeline-badge primary"></div>
												<a class="timeline-panel text-muted" href="#">
													<span>10 minutes ago</span>
													<h6 class="mb-0">New Template For B'day Celebration Released.</h6>
												</a>
											</li>
											
											<li>
												<div class="timeline-badge dark">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">New Baby Shower Album Uploaded.</h6>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="<?php echo base_url();?>assets/images/profile/17.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong><?php echo @$u_de->first_name; ?></strong></span>
										<p class="fs-12 mb-0">Customer</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Dashboard </span>
                                    </a>
                                    <a href="<?php echo base_url($web_page_link); ?>" target="_blank" class="dropdown-item ai-icon">
                                        <svg id="icon-earth" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Webpage </span>
                                    </a>
                                    <a href="#" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->