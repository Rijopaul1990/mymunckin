<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Great+Vibes&display=swap" rel="stylesheet">
  
<?php include_once('banner_dashboard.php'); ?>
    
<link href="<?php echo base_url('assets/'); ?>css/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url('assets/img-editor/styles.min.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/cropper.css">
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/crop_main.css">
<!--<script src="https://cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script>-->
  <!--<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>-->
    <!--<script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>-->
<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>


<style>
.cke_combopanel {
    z-index:99999999 !important;
}


span#cke_84 {
    display: block;
}
.cke_combo__styles {
	display:none;
}.cke_combo__format  {
	display:none;
}.cke_combo__font  {
	display:none;
}

.cke_toolbar {
    display: none;
}
.cke_button__bold  {
    display : block !important;
}

 .cke_button__italic  {
    display : block !important;
}

span#cke_49{
    display: block;
}
.cke_button__strike{
	display:none !important;
}.cke_button__underline {
	display:none !important;
}.cke_button__subscript{
	display:none !important;
}

.cke_button__copyformatting {
	display:none !important;
}.cke_button__superscript {
	display:none !important;
}.cke_button__removeformat {
	display:none !important;
}

.cke_bottom {
    display: none;
}
/*.cke_toolbox .cke_toolbar#cke_34 {*/
/*     display: block; */
/*}*/
/*.cke_toolbox .cke_button__subscript {*/
/*     display: none; */
/*}*/
/*.cke_toolbox .cke_button__strike  {*/
/*     display: none; */
/*}*/
/*.cke_toolbox .cke_button__underline   {*/
/*     display: none; */
/*}*/
/*.cke_toolbox .cke_button__superscript   {*/
/*     display: none; */
/*}*/
/*.cke_toolbox .cke_button__removeformat    {*/
/*     display: none; */
/*}*/
/*.cke_toolbox .cke_toolbar#cke_48 {*/
/*     display: block; */
/*}*/
/*     .btn-munchkin{*/
        margin-bottom :15px !important;
    } 
    .kk .img-preview{
        box-shadow: 0 0 10px #797979;
    }
    .kk{
         position: fixed;
        width: 85%; 
        z-index: 9999999;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        margin: auto;
        display: inline-flex;
        align-items: center;
        background: #fff;
        box-shadow: 0 0 10px #797979;
    }
    .kk #img-cropper{
        width: 60%;
        box-shadow: none !important;
        margin-right: 2%;
    }
    .img-preview {
      overflow: hidden;
      width: 100% !important; 
      height: 100%  !important;
    }
    .img_tag{
      width: 365px !important; 
      height: 230px  !important; 
    }
    .dashboard .tab-pane tbody td .img-preview img{
      width: 100% !important; 
    }
    div#img-cropper {
        border: 1px solid #f5f5f5;
        padding: 5px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 0 1px rgba(53,72,91,.1),0 3px 2px rgba(0,0,0,.04),0 7px 5px rgba(0,0,0,.02),0 13px 10px rgba(0,0,0,.02),0 22px 17px rgba(0,0,0,.02)!important;
    }
    
    .img-cropper-open{
      cursor: pointer;
        text-align: left;
        /*padding: 15px 20px;*/
    }
    #img-cropper .row:before ,.row:after{
        content:none !important;
    }
    button.close_editor {
    position: absolute;
        top: -10px;
        right: -10px;
        border: none;
        font-size: 24px;
        font-weight: 700;
        outline: none;
        background: #ff721d;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: #fff;
    }
    

@font-face {
    font-family: "Boiling";
    src: url("../assets/fonts/digital_font/Boiling.woff") format("woff");
    font-weight: 400;
    font-style: normal;
}
@font-face {
    font-family: "Rochester";
    src: url("../assets/fonts/digital_font/Rochester.woff") format("woff");
    font-weight: 400;
    font-style: normal;
}
   
.edit_banner{
    height: 100px;
    margin-bottom: 100px;
    background: url(http://cyberworx.co.in/mymunchkin_new/upload/banner/ad3e2bca9023dcd141afc86a1c52c669.png);
    background-size: cover;
}
.first .main-bg{
    width: 100%;
    height: 350px;
    margin: 0 auto;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
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


.second .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    flex-wrap: wrap;
}

.second .main-bg {
    width: 100%;
    height: 350px;
    margin: 0 auto;
}
.second .top-sec .album-img{
    width: 60%;
    height: 195px;
    object-fit: contain;
    transform: translateY(-2.5%);
}
.second .title-bot {
    position: absolute;
    bottom: 20px;
}
.second .title-bot p{
    font-family: 'Boiling';
    text-align: center;
    font-size: 36px;
    color: #C4645C;
    margin: 0;
    font-weight: 500;
}




.main-bg .placeholder_div img {
    object-fit: cover !important;
}
.main-bg .placeholder_div.edit_img:after{
    content:none !important;
}

.third .main-bg{
    margin: 0 auto;
    position: relative;
    width: 100%;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.third .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}


.forth .main-bg{
    width: 100%;
    height:350px;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    background: #f2e1d7;
}
.forth .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: flex-start;
    height: 100%;
    flex-wrap: wrap;
}
.edit_img img {
    border: 6px solid #bbe7ff;
}
.forth .top-sec .edit_img{
    width: 70%;
    height: 230px;
    transform: translateY(10%);
}
.forth .top-sec .album-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.forth .title-bot {
    position: absolute;
    bottom: 20px;
    width: 70%;
}
.forth .title-bot p{
    font-family: 'Dancing Script', cursive !important;
    text-align: center;
    font-size: 26px;
    color: #727272;
    line-height: 1.2;
}
.forth .title-bot p span{
    font-family: 'Dancing Script', cursive !important;
}
 .title-bot p span{
    font-family: 'Dancing Script', cursive !important;
}
 .title-bot p {
    font-family: 'Dancing Script', cursive !important;
} .title-bot p em {
    font-family: 'Dancing Script', cursive !important;
}
.fifth .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 350px;
    position: relative;
    background: #EFE3E5;
    display: flex;
}

.fifth .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}

.sixth .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.sixth .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.sixth .top-sec  {
    width: 100%;
    height: 100%;
    display: inline-flex;
    justify-content: center;
    position: relative;
    align-items: flex-start;
    flex-wrap: wrap;
}
.sixth .top-sec .edit_img{
    width: 70%;
    height: 230px;
    transform: translateY(10%);
    
}
.sixth .top-sec .title-bot{
    width: 70%;
    text-align: center;
    position: absolute;
    bottom: 20px;
}
.sixth .top-sec .album-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}



.seventh .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 350px;
    position: relative;
    background: #F1E6DD;
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


.eighth .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    text-align: center;
}
.eighth .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.eighth .top-sec ul{
    display: inline-flex;
    width: 100%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin: 0;
}
.eighth .top-sec ul li:nth-child(1) {
    width: 100%;
}
.eighth .top-sec ul li:nth-child(2) {
    position: absolute;
    bottom: 20px;
}
.eighth .top-sec ul li {
    width: 70%;
    text-align: center;
}
.eighth .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: flex-start;
    height: 100%;
    flex-wrap: wrap;
}
.eighth .top-sec ul li .edit_img {
    width: 70%;
    height: 230px;
    transform: translateY(10%);
    margin:auto;
    text-align:center;
}
.eighth .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.born_content p{
    font-family: 'Dancing Script', cursive; 
    font-size: 24px;
    padding: 0 10px;
    line-height: 1.2;
    color: #727272;
}
.born_content h5 {
    color: #C4645C;
    font-family: 'Boiling';
    font-size: 28px;
    padding: 0 10px;
}
.ninth .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 30px 0 10px;
    position: relative;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
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



.tenth .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 350px;
    background: #f2e1d7;
}
.tenth .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    height: 100%;
    align-items: flex-start;
    flex-wrap: wrap;
}
.tenth .top-sec .edit_img{
    width: 70%;
    height: 230px;
    transform: translateY(10%);
}
.tenth .top-sec .title-bot{
    text-align: center;   
    position: absolute;
    bottom: 20px;
    width: 60%;
}
.tenth .top-sec .album-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}



.eleven .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.eleven  .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}


.twelve .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.twelve .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.twelve .top-sec ul{
    display: inline-flex;
    width: 100%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    align-items: flex-start;
    margin: 0;
    height: 100%;
}
.twelve .top-sec ul li {
    width: 100%;
    height: 100%;
    text-align: center;
}
.twelve .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    align-items: center;
    height: 100%;
    flex-wrap: wrap;
}
.twelve .title-bot {
    position: absolute;
    bottom: 20px;
    width: 60%;
    margin: 0 auto;
    text-align: center;
    left: 0;
    right: 0;
}
.twelve .top-sec ul li .edit_img {

    width: 70%;
    height: 230px;
    margin: auto;
    transform: translateY(10%);
}
.twelve .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: cover; 
}

.thirteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
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


.forthteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
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
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    height: 100%;
    align-items: flex-start;
    flex-wrap: wrap;
    /*align-items: center;*/
}
.forthteen .top-sec .edit_img {
    width: 70%;
    height: 230px;
    transform: translateY(10%);
}
.forthteen .top-sec .title-bot{
    text-align: center;   
    position: absolute;
    bottom: 20px;
    width: 60%;
}
.forthteen .top-sec .album-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}



.fifteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.fifteen  .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}



.sixteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.sixteen .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.sixteen .top-sec ul{
    display: inline-flex;
    width: 100%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
    margin: 0;
}
/*.sixteen .top-sec ul li:nth-child(2) {*/
/*    width: 60%;*/
/*}*/
/*.sixteen .top-sec ul li:nth-child(1) {*/
/*    margin-bottom: 15%;*/
/*}*/
.sixteen .top-sec ul li {
    width: 100%;
    text-align: center;
}
.sixteen .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: flex-start;
    height: 100%;
    flex-wrap: wrap;
}
.sixteen .top-sec ul li .edit_img{
    width: 70%;
    height: 230px;
    margin: auto;
    transform: translateY(10%);
}
.sixteen .top-sec ul li img{
    width: 100%;
    height: 100%;
    object-fit: cover; 
}
.sixteen .top-sec .title-bot{
    position: absolute;
    bottom: 20px;
    width: 60%;
    margin: auto;
    text-align: center;
    left: 0;
    right: 0;
}



.seventeen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.seventeen  .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}




.eighteen .main-bg{
    width: 100%;
    height:350px;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    background: #f2e1d7;
}
.eighteen .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: flex-start;
    height: 100%;
    flex-wrap: wrap;
}
.eighteen .top-sec .edit_img {
    width: 70%;
    height: 230px;
    /* margin: auto; */
    transform: translateY(10%);
}
.eighteen .top-sec .album-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.eighteen .title-bot {
    position: absolute;
    bottom: 20px;
    width: 60%;
}
.eighteen .title-bot p{
    font-family: 'Rochester';
    text-align: center;
    font-size: 26px;
    color: #727272;
    line-height: 1.2;
}



.ninteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.ninteen  .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}


.twenty .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 350px;
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
    display: inline-flex;
    justify-content: center;
    height: 100%;
    align-items: flex-start;
    flex-wrap: wrap;
}
.twenty .top-sec .edit_img{
    width: 70%;
    height: 230px;
    transform: translateY(10%);
    /*margin:auto;*/
}
.twenty .top-sec .album-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.twenty .top-sec .title-bot{
    position: absolute;
    bottom: 20px;
}


.twenty_one .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:350px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.twenty_one  .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}



.twenty_two .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 350px;
    background: #f2e1d7;
}
.twenty_two .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    height: 100%;
    align-items: flex-start;
    flex-wrap: wrap;
}
.twenty_two .top-sec .title-bot{
    position: absolute;
    bottom: 20px;
}
.twenty_two .top-sec .edit_img {
    width: 70%;
    height: 230px;
    transform: translateY(10%);
    /*margin:auto;*/
}
.twenty_two .top-sec .album-img{
    width: 100%;
    height:100%;
    object-fit: cover;
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
        width:400px;
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
        height: 280px !important;
    }
    .second .top-sec .album-img {
        height: 150px;    width: 58%;
    }
    .second .title-bot p {
       font-size: 22px;
    }
    .forth .top-sec .album-img {
        width: 66%;
        height: 170px;
        transform: translateY(15%);
    }
    .forth .title-bot p {
        font-size: 20px;
    }.sixth .top-sec .album-img {
        height: 225px;
        transform: translateX(0);
    }
    .eighth .top-sec ul li img {   
        height: 225px;
        transform: translateX(5px);
        width: 95%;
    }
    .born_content p {
        font-size: 20px;
    }.born_content h5 {
    font-size: 22px;
}
.tenth .top-sec .album-img {
    height: 195px;
    transform: translateY(-2%);
    width: 75%;
}.twelve .top-sec ul li img {
    height: 200px;
}.forthteen .top-sec .album-img {
    height: 225px;
    width: 52%;
    transform: translateY(0%);
}.sixteen .top-sec ul li img {
    height: 225px;
    transform: translateX(4%);width: 95%;
}.eighteen .top-sec .album-img {
    height: 170px;   
    width: 66%;
    transform: translateY(18%);
}.eighteen .title-bot p {
    font-size: 20px;
}
 .twenty .top-sec .album-img {
    height: 225px;
    width: 52%;
    transform: translateY(0.5%);
}.twenty_two .top-sec .album-img {
    height: 190px;
    width: 75%;
    transform: translateY(-1.5%);
}
}
.select_album_image .active-image {
    box-shadow: 0px 0px 6px #ff721d;
}


</style>

 <?php 
 include('digital_widget.php');
    
 ?> 
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">


<section id="albumm" class="main_cart_div">
    <div id="mybook_digital">
        <div class="second">
    		 
    		<div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_1.png" class="bg-image">
                <div class="top-sec">
                    <?php if($userDetails->c_img){ ?>
                    <img src="<?php echo base_url($userDetails->c_img); ?>" class="album-img"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                            
                            
                    <div class="title-bot">
                        <p> <?php echo $userDetails->child_name; ?></p>
                    </div>
                </div>
        
        
            </div>
            
        </div>
        
        <div class="third">
    		<div class="main-bg">
    		    <?php if($all_milestone_category[0]->img){ ?>
    		    
    		     <img src="<?php echo base_url($all_milestone_category[0]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/baby_shower.png" class="bg-image">
                 <?php } ?>
            </div>
        </div>
        <?php 
        if(is_array($all_baby_shower) || is_object($all_baby_shower)){
           
            foreach($all_baby_shower as $baby_shower)
            {
        ?>
        <div class="forth ">
        
            <div class="main-bg">
    
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_shower.png" class="bg-image">
                <div class="top-sec">
                    <?php if($baby_shower->img){ ?>
                    <div class="edit_img btn_modal_edit img-cropper-open" data-height="230" data-width="360" data-img="<?php echo base_url($baby_shower->img); ?>" data-id="<?php echo $baby_shower->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                        <!--<img src="<?php echo base_url($baby_shower->img); ?>"  class= "" > -->
                        <img src="<?php echo base_url($baby_shower->img); ?>" class="album-img edit my_img_<?php echo $baby_shower->id; ?>"/>
                    </div> 
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                            
                             
                        <div class="title-bot my_text_<?php echo $baby_shower->id; ?>">
                        <p><?php echo @$baby_shower->heading; ?></p>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <?php }  
         if(count($all_baby_shower)%2 == 0){
        ?>
          <div class="forth">
        
            <div class="main-bg">
    
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_shower.png" class="bg-image">
                <div class="top-sec">
                    <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                    <div class="title-bot">
                        <p></p>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
        <?php } } ?>
        
        
        <div class="fifth">
        
           	<div class="main-bg">
           	     <?php if($all_milestone_category[1]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[1]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/family.png" class="bg-image">
                 <?php } ?>
               
            </div>
        </div>
        
        
         <?php 
        if(is_array($all_mom_dad) || is_object($all_mom_dad)){
            
            foreach($all_mom_dad as $mom_dad)
            {
        ?>
          <div class="sixth sixth_<?php echo $mom_dad->id; ?>">
        
              <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_family.png" class="bg-image">
                 <div class="top-sec">
                    <?php if($mom_dad->img){ ?>
                     <div class="edit_img btn_modal_edit img-cropper-open" data-height="300" data-width="287" data-img="<?php echo base_url($mom_dad->img); ?>" data-id="<?php echo $mom_dad->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                        <img src="<?php echo base_url($mom_dad->img); ?>" class="album-img edit my_img_<?php echo $mom_dad->id; ?>"/>
                    </div>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                            
                        <div class="title-bot my_text_<?php echo $mom_dad->id; ?>">
                        <p><?php echo @$mom_dad->heading; ?></p>
                    </div>
                    
                </div>
            </div>
        </div>
          <?php }  if(count($all_mom_dad) % 2 == 0){ ?>
       <div class="sixth">
        
              <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_family.png" class="bg-image"> 
                 <div class="top-sec">
                   
                        <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">

                           
                </div>
            </div>
        </div>
        
        <?php } } ?>
         <div class="seventh">
           	<div class="main-bg">
           	    <?php if($all_milestone_category[2]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[2]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
               <img src="<?php echo base_url('assets/'); ?>images/digital_images/born.png" class="bg-image">
                 <?php } ?>
                
            </div>
        </div>
        
         <?php 
        if(is_array($all_baby_arrival) || is_object($all_baby_arrival)){
            foreach($all_baby_arrival as $baby_arrival)
            {
        ?>
        <div class="eighth eighth_<?php echo $baby_arrival->id; ?>">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_born.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                         <?php if($baby_arrival->img){ ?>
                    <li>
                        <div class="born_img" >
                            <div class="edit_img btn_modal_edit img-cropper-open" data-height="280" data-width="260" data-img="<?php echo base_url($baby_arrival->img); ?>" data-id="<?php echo $baby_arrival->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                                <img src="<?php echo base_url($baby_arrival->img); ?>" class="album-img edit my_img_<?php echo $baby_arrival->id; ?>"/>
                            </div>
                        </div> 
                    </li>
                     <?php }  ?>
                   
                    <li class=" title-bot my_text_<?php echo $baby_arrival->id; ?>">
                    <p><?php echo @$baby_arrival->heading; ?></p>
                    </li>
                    
                    
                    </ul>
                </div>
            </div>
        </div>
         <?php }  if(count($all_baby_arrival) % 2 == 0){ ?>
      <div class="eighth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_born.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                    <li>
                        <div class="born_img" >
                             <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                        </div> 
                    </li>
                   
                    <li>
                    <p></p>
                    </li>
                    
                    </ul>
                </div>
            </div>
        </div>
        
        <?php } } ?>
         <div class="ninth">
           
           	<div class="main-bg">
           	     <?php if($all_milestone_category[3]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[3]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
               <img src="<?php echo base_url('assets/'); ?>images/digital_images/love.png" class="bg-image">
                 <?php } ?>
               
            </div>
        </div>
          <?php 
        if(is_array($all_welcome_home) || is_object($all_welcome_home)){
            foreach($all_welcome_home as $welcome_home)
            {
        ?>
         <div class="tenth tenth_<?php echo $welcome_home->id; ?>">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_love.png" class="bg-image">
                <div class="top-sec">
                    <?php if($welcome_home->img){ ?>
                    <div class="edit_img btn_modal_edit img-cropper-open" data-height="240" data-width="390" data-img="<?php echo base_url($welcome_home->img); ?>" data-id="<?php echo $welcome_home->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                        <img src="<?php echo base_url($welcome_home->img); ?>" class="album-img edit my_img_<?php echo $welcome_home->id; ?>"/> 
                    </div>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
               
                        <div class="title-bot my_text_<?php echo $welcome_home->id; ?>">
                        <p><?php echo @$welcome_home->heading; ?></p>
                    </div>
                                
                </div>
            </div>
        </div>
         <?php }  if(count($all_welcome_home) % 2 == 0){ ?>
          <div class="tenth">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_love.png" class="bg-image">
                <div class="top-sec">
                  
                      <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                   
                </div>
            </div>
        </div>
         <?php } } ?>
        <div class="eleven">
           <div class="main-bg">
                <?php if($all_milestone_category[4]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[4]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
              <img src="<?php echo base_url('assets/'); ?>images/digital_images/smile.png" class="bg-image">
                 <?php } ?>
                
            </div>
        </div>
         <?php 
        if(is_array($all_first_smile) || is_object($all_first_smile)){
            foreach($all_first_smile as $first_smile)
            {
        ?>
        <div class="twelve twelve_<?php echo $first_smile->id; ?>">
         <div class="main-bg">
            <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_smile.png" class="bg-image">   
            <div class="top-sec">
                    <ul>
                <!--        <?php if($first_smile->heading){ ?>-->
                <!--<li>-->
                <!--    <div class="born_content title-bot my_text_<?php echo $first_smile->id; ?>">-->
                <!--        <p><?php echo $first_smile->heading; ?></p>-->
                <!--    </div> -->
                <!--</li>-->
                <!--<?php } ?>-->
                <li>
                    <div class="born_img">
                        <?php if($first_smile->img){ ?>
                        <div class="edit_img btn_modal_edit img-cropper-open" data-height="260" data-width="295" data-img="<?php echo base_url($first_smile->img); ?>" data-id="<?php echo $first_smile->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                            <img src="<?php echo base_url($first_smile->img); ?>" class="album-img edit my_img_<?php echo $first_smile->id; ?>"/>
                        </div>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" >

                            <?php } ?>
                    </div> 
                      
                    <div class="born_content title-bot my_text_<?php echo $first_smile->id; ?>">
                        <p><?php echo @$first_smile->heading; ?></p>
                    </div> 
               
                </li>
                </ul>
            </div>
    </div>
        </div>
            <?php }  if(count($all_first_smile) % 2 == 0){ ?>
               <div class="twelve">
         <div class="main-bg">
            <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_smile.png" class="bg-image">   
            <div class="top-sec">
                    <ul>
                     
                <li>
                    <div class="born_content">
                        <p></p>
                    </div> 
                </li>
              
                <li>
                    <div class="born_img">
                        <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                    </div> 
                </li>
                </ul>
            </div>
    </div>
        </div>
         <?php } } ?>
               <div class="thirteen">
        
            
           <div class="main-bg">
                 <?php if($all_milestone_category[5]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[5]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
              <img src="<?php echo base_url('assets/'); ?>images/digital_images/laugh.png" class="bg-image">
                 <?php } ?>
               
            </div>
            </div>
            
            <?php 
        if(is_array($all_laugh) || is_object($all_laugh)){
            foreach($all_laugh as $laugh)
            {
        ?>
             <div class="forthteen forthteen_<?php echo $laugh->id; ?>">
        
            
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_laugh.png" class="bg-image">
                    <div class="top-sec">
                        <?php if($laugh->img){ ?>
                        <div class="edit_img btn_modal_edit img-cropper-open" data-height="280" data-width="270" data-img="<?php echo base_url($laugh->img); ?>" data-id="<?php echo $laugh->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                            <img src="<?php echo base_url($laugh->img); ?>" class="album-img edit my_img_<?php echo $laugh->id; ?>"/>
                        </div>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">
    
                                <?php } ?>
                                
                        <div class="title-bot my_text_<?php echo $laugh->id; ?>">
                        <p><?php echo @$laugh->heading; ?></p>
                    </div>
                       
                    </div>
                </div>
            </div>
                 <?php }  if(count($all_laugh) % 2 == 0){ ?>
                   <div class="forthteen">
        
            
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_laugh.png" class="bg-image">
                    <div class="top-sec">
                        <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                    </div>
                </div>
            </div>
        <?php } } ?>
        
 
            
             <div class="fifteen">
                <div class="main-bg">
                     <?php if($all_milestone_category[6]->img){ ?>
    		         <img src="<?php echo base_url($all_milestone_category[6]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/foodie.png" class="bg-image">
                 <?php } ?>
                  
                </div>
            </div> 
              <?php 
        if(is_array($all_foody) || is_object($all_foody)){
            foreach($all_foody as $foody)
            {
        ?>
             <div class="sixteen sixteen_<?php echo $foody->id; ?>">
           <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_foodie.png" class="bg-image"> 

            <div class="top-sec">
                    <ul>
                      
                <li>
                    <div class="born_img" >
                         <?php if($foody->img){ ?>
                         <div class="edit_img btn_modal_edit img-cropper-open" data-height="280" data-width="265" data-img="<?php echo base_url($foody->img); ?>" data-id="<?php echo $foody->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                            <img src="<?php echo base_url($foody->img); ?>" class="album-img edit my_img_<?php echo $foody->id; ?>"/>
                        </div>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" >
    
                                <?php } ?>
                       
                    </div> 
                    
                      
                    <div class="born_content title-bot my_text_<?php echo $foody->id; ?>">
                        <p><?php echo @$foody->heading; ?></p>
                    </div> 
                 
                </li>
                </ul>
            </div>
                 </div>
            </div>
             <?php }  if(count($all_foody) % 2 == 0){ ?>
              <div class="sixteen">
           <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_foodie.png" class="bg-image"> 

            <div class="top-sec">
                    <ul>
                        
                <li>
                    <div class="born_content">
                        <p></p>
                    </div> 
                </li>
                 
                <li>
                    <div class="born_img" >
                      <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                       
                    </div> 
                </li>
                </ul>
            </div>
                 </div>
            </div>
             <?php } } ?>
              <div class="seventeen">
               <div class="main-bg">
                      <?php if($all_milestone_category[7]->img){ ?>
    		         <img src="<?php echo base_url($all_milestone_category[7]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                   <img src="<?php echo base_url('assets/'); ?>images/digital_images/sitting.png" class="bg-image">
                 <?php } ?>
                    
                </div>
            </div>
             <?php 
        if(is_array($all_sitting) || is_object($all_sitting)){
            foreach($all_sitting as $sitting)
            {
        ?>
            <div class="eighteen eighteen_<?php echo $sitting->id; ?>">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_sitting.png" class="bg-image">
                    <div class="top-sec">
                        <?php if($sitting->img){ ?>
                        <div class="edit_img btn_modal_edit img-cropper-open" data-height="212" data-width="345" data-img="<?php echo base_url($sitting->img); ?>" data-id="<?php echo $sitting->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                            <img src="<?php echo base_url($sitting->img); ?>" class="album-img edit my_img_<?php echo $sitting->id; ?>"/>
                        </div>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">
    
                                <?php } ?>
                                
                                 
                        <div class="title-bot my_text_<?php echo $sitting->id; ?>">
                             <p><?php echo @$sitting->heading; ?></p>
                        </div>
                         
                    </div>
                    
                </div>
            </div>
              <?php }  if(count($all_sitting) % 2 == 0){ ?>
              <div class="eighteen">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_sitting.png" class="bg-image">
                    <div class="top-sec">
                         <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                                
                                 
                        <div class="title-bot">
                             <p></p>
                        </div>
                          
                    </div>
                    
                </div>
            </div>
             <?php } } ?>
               <div class="ninteen">
                <div class="main-bg">
                     <?php if($all_milestone_category[8]->img){ ?>
    		         <img src="<?php echo base_url($all_milestone_category[8]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                   <img src="<?php echo base_url('assets/'); ?>images/digital_images/crawling.png" class="bg-image">
                 <?php } ?>
                   
                </div>
            </div>
             <?php 
        if(is_array($all_crawling) || is_object($all_crawling)){
            foreach($all_crawling as $crawling)
            {
        ?>
             <div class="twenty twenty_<?php echo $crawling->id; ?>">
                
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_crawling.png" class="bg-image">
                    <div class="top-sec">
                        <?php if($crawling->img){ ?>
                        <div class="edit_img btn_modal_edit img-cropper-open" data-height="280" data-width="270" data-img="<?php echo base_url($crawling->img); ?>" data-id="<?php echo $crawling->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                            <img src="<?php echo base_url($crawling->img); ?>" class="album-img edit my_img_<?php echo $crawling->id; ?>"/>
                        </div>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">
    
                                <?php } ?>
                                
                        <div class="title-bot my_text_<?php echo $crawling->id; ?>">
                        <p><?php echo @$crawling->heading; ?></p>
                    </div>
                      
                                
                    </div>
                </div>
            </div>
               <?php }  if(count($all_crawling) % 2 == 0){ ?>
                <div class="twenty">
                
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_crawling.png" class="bg-image">
                    <div class="top-sec">
                        <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                    </div>
                </div>
            </div>
            
            <?php } } ?>
             <div class="twenty_one">
                <div class="main-bg">
                     <?php if($all_milestone_category[9]->img){ ?>
    		         <img src="<?php echo base_url($all_milestone_category[9]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                   <img src="<?php echo base_url('assets/'); ?>images/digital_images/birthday.png" class="bg-image">
                 <?php } ?>
                   
                </div>
            </div>
            <?php 
        if(is_array($all_birthday) || is_object($all_birthday)){
            foreach($all_birthday as $birthday)
            {
        ?>
             <div class="twenty_two twenty_two_<?php echo $birthday->id; ?>">
                 <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_birthday.png" class="bg-image">
                <div class="top-sec">
                    <?php if($birthday->img){ ?>
                     <div class="edit_img btn_modal_edit img-cropper-open" data-height="240" data-width="390" data-img="<?php echo base_url($birthday->img); ?>" data-id="<?php echo $birthday->id; ?>"  data-toggle="modal" data-target="#edit_miles">
                        <img src="<?php echo base_url($birthday->img); ?>" class="album-img edit my_img_<?php echo $birthday->id; ?>"/>
                    </div>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                            
                        <div class="title-bot my_text_<?php echo $birthday->id; ?>">
                        <p><?php echo @$birthday->heading; ?></p>
                    </div>
                       
                </div>
            </div>
            </div>
             <?php }  if(count($all_birthday) % 2 == 0){ ?>
             <div class="twenty_two">
                 <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_birthday.png" class="bg-image">
                <div class="top-sec">
                  <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                  
                  
                </div>
            </div>
            </div>
         <?php } } ?>
        <div class="first">
            
                <div class="main-bg">

                <img src="<?php echo base_url('assets/'); ?>images/digital_images/back.png" class="bg-image">
                </div>
                
        </div>
    </div>
</section>

	<div class="owl-carousel owl-theme" id="mobile_album">
        <div class="item">
      <div class="second">
    		<div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_1.png" class="bg-image">
                <div class="top-sec">
                    <?php if($userDetails->c_img){ ?>
                    <img src="<?php echo base_url($userDetails->c_img); ?>" class="album-img"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                            
                            
                    <div class="title-bot">
                        <p> <?php echo $userDetails->child_name; ?></p>
                    </div>
                </div>
        
        
            </div>
            
        </div>
        </div>
        <div class="item">
        <div class="third">
    		<div class="main-bg">
    		      <?php if($all_milestone_category[0]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[0]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                <!--<img src="<?php echo base_url('assets/'); ?>images/digital_images/baby_shower.png" class="bg-image">-->
                 <?php } ?>
              
                 
            </div>
        </div>
        </div>
         <?php 
        if(is_array($all_baby_shower) || is_object($all_baby_shower)){
           
            foreach($all_baby_shower as $baby_shower)
            {
        ?>
        <div class="item">
        
        <div class="forth">
        
            <div class="main-bg">
    
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_shower.png" class="bg-image">
                <div class="top-sec">
                    <?php if($baby_shower->img){ ?>
                    <img src="<?php echo base_url($baby_shower->img); ?>" class="album-img"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                   
                    <div class="title-bot">
                        <p><?php echo $baby_shower->heading; ?></p>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
        </div>
          <?php }  
         if(count($all_baby_shower)%2 == 0){
        ?>
         <div class="item">
        
        <div class="forth">
        
            <div class="main-bg">
    
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_shower.png" class="bg-image">
                <div class="top-sec">
              
                    <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                            
                    <div class="title-bot">
                        <p></p>
                    </div>
                </div>
                
            </div>
        </div>
        
        </div>
         <?php } } ?>
        <div class="item">
        <div class="fifth">
        
            
           	<div class="main-bg">
                 <?php if($all_milestone_category[1]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[1]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/family.png" class="bg-image">
                 <?php } ?>
            </div>
        </div>
        </div>
         <?php 
        if(is_array($all_mom_dad) || is_object($all_mom_dad)){
            
            foreach($all_mom_dad as $mom_dad)
            {
        ?>
        <div class="item">
          <div class="sixth">
        
              <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_family.png" class="bg-image"> 
                 <div class="top-sec">
                    <?php if($mom_dad->img){ ?>
                    <img src="<?php echo base_url($mom_dad->img); ?>" class="album-img"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                </div>
            </div>
        </div>
        </div>
          <?php }  if(count($all_mom_dad) % 2 == 0){ ?>
           <div class="item">
          <div class="sixth">
        
              <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_family.png" class="bg-image"> 
                 <div class="top-sec">
                    <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                </div>
            </div>
        </div>
        </div>
         <?php } } ?>
        <div class="item">
         
         <div class="seventh">
           	<div class="main-bg">
                <?php if($all_milestone_category[2]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[2]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
               <img src="<?php echo base_url('assets/'); ?>images/digital_images/born.png" class="bg-image">
                 <?php } ?>
            </div>
        </div>
        </div>
             <?php 
        if(is_array($all_baby_arrival) || is_object($all_baby_arrival)){
            foreach($all_baby_arrival as $baby_arrival)
            {
        ?>
        <div class="item">
        <div class="eighth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_born.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                          <?php if($baby_arrival->img){ ?>
                    <li>
                        <div class="born_img" >
                             <img src="<?php echo base_url($baby_arrival->img); ?>" class="album-img"/>
                        </div> 
                    </li>
                      <?php } if($baby_arrival->heading){ ?>
                    <li>
                        <div class="born_content">
                            <p><?php echo $baby_arrival->heading; ?></p>
                        </div> 
                    </li>
                     <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        </div>
         <?php }  if(count($all_baby_arrival) % 2 == 0){ ?>
             <div class="item">
        <div class="eighth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_born.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                    <li>
                        <div class="born_img" >
                            <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                        </div> 
                    </li>
                    <li>
                        <div class="born_content">
                            <p></p>
                            <!--<h5>to love and be loved.</h5>-->
                        </div> 
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        
         <?php } } ?>
        <div class="item">
         <div class="ninth">
           <div class="main-bg">
              <?php if($all_milestone_category[3]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[3]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
               <img src="<?php echo base_url('assets/'); ?>images/digital_images/love.png" class="bg-image">
                 <?php } ?>
            </div>
        </div></div>
         <?php 
        if(is_array($all_welcome_home) || is_object($all_welcome_home)){
            foreach($all_welcome_home as $welcome_home)
            {
        ?>
        <div class="item">
         <div class="tenth">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_love.png" class="bg-image">
                <div class="top-sec">
                     <?php if($welcome_home->img){ ?>
                    <img src="<?php echo base_url($welcome_home->img); ?>" class="album-img"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                </div>
            </div>
            </div>
        </div>
          <?php }  if(count($all_welcome_home) % 2 == 0){ ?>
             <div class="item">
         <div class="tenth">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_love.png" class="bg-image">
                <div class="top-sec">
                     <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                </div>
            </div>
            </div>
        </div>
          
           <?php } } ?>
           
        <div class="item">
            <div class="eleven">
           <div class="main-bg">
                <?php if($all_milestone_category[4]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[4]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
              <img src="<?php echo base_url('assets/'); ?>images/digital_images/smile.png" class="bg-image">
                 <?php } ?>
            </div>
        </div>
        </div>
         <?php 
        if(is_array($all_first_smile) || is_object($all_first_smile)){
            foreach($all_first_smile as $first_smile)
            {
        ?>
        
        
        <div class="item">
            <div class="twelve">
         <div class="main-bg">
            <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_smile.png" class="bg-image">   
            <div class="top-sec">
                    <ul>
                         <?php if($first_smile->heading){ ?>
                <li>
                    <div class="born_content">
                        <p><?php echo $first_smile->heading; ?></p>
                    </div> 
                </li>
                 <?php } ?>
                <li>
                    <div class="born_img">
                          <?php if($first_smile->img){ ?>
                    <img src="<?php echo base_url($first_smile->img); ?>" class="album-img"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" >

                            <?php } ?>
                    </div> 
                </li>
                </ul>
            </div>
    </div>
        </div>
            
        </div>
          <?php }  if(count($all_first_smile) % 2 == 0){ ?>
          
              <div class="item">
            <div class="twelve">
         <div class="main-bg">
            <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_smile.png" class="bg-image">   
            <div class="top-sec">
                    <ul>
                <li>
                    <div class="born_content">
                        <p></p>
                    </div> 
                </li>
                <li>
                    <div class="born_img">
                        <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                    </div> 
                </li>
                </ul>
            </div>
    </div>
        </div>
            
        </div>
               <?php } } ?>
        <div class="item">
             <div class="thirteen">
        
            
           <div class="main-bg">
                <?php if($all_milestone_category[5]->img){ ?>
    		     <img src="<?php echo base_url($all_milestone_category[5]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
              <img src="<?php echo base_url('assets/'); ?>images/digital_images/laugh.png" class="bg-image">
                 <?php } ?>
            </div>
            </div>
        </div>
                <?php 
        if(is_array($all_laugh) || is_object($all_laugh)){
            foreach($all_laugh as $laugh)
            {
        ?>
            
        <div class="item">
            <div class="forthteen">
        
            
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_laugh.png" class="bg-image">
                    <div class="top-sec">
                        <?php if($laugh->img){ ?>
                        <img src="<?php echo base_url($laugh->img); ?>" class="album-img"/>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">
    
                                <?php } ?>
                    </div>
                </div>
            </div>
        </div>
              <?php }  if(count($all_laugh) % 2 == 0){ ?>
               <div class="item">
            <div class="forthteen">
        
            
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_laugh.png" class="bg-image">
                    <div class="top-sec">
                        <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>
              
                <?php } } ?>
              
              
        <div class="item">
            <div class="fifteen">
                <div class="main-bg">
                      <?php if($all_milestone_category[6]->img){ ?>
    		         <img src="<?php echo base_url($all_milestone_category[6]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/foodie.png" class="bg-image">
                 <?php } ?>
                </div>
            </div> 
        </div>
         <?php 
        if(is_array($all_foody) || is_object($all_foody)){
            foreach($all_foody as $foody)
            {
        ?>
        <div class="item">
             <div class="sixteen">
           <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_foodie.png" class="bg-image"> 

            <div class="top-sec">
                    <ul>
                <?php if($foody->heading){ ?>
                <li>
                    <div class="born_content">
                        <p><?php echo $foody->heading; ?></p>
                    </div> 
                </li>
                 <?php } ?>
                <li>
                    <div class="born_img" >
                         <?php if($laugh->img){ ?>
                        <img src="<?php echo base_url($foody->img); ?>" class="album-img"/>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" >
    
                                <?php } ?>
                    </div> 
                </li>
                </ul>
            </div>

    </div>
            </div>
        </div>
              <?php }  if(count($all_foody) % 2 == 0){ ?>
             <div class="item">
             <div class="sixteen">
           <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_foodie.png" class="bg-image"> 

            <div class="top-sec">
                    <ul>
                <li>
                    <div class="born_content">
                        <p></p>
                    </div> 
                </li>
                <li>
                    <div class="born_img" >
                         <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                    </div> 
                </li>
                </ul>
            </div>

    </div>
            </div>
        </div>
               <?php } } ?>
            
        <div class="item">
            <div class="seventeen">
               <div class="main-bg">
                    <?php if($all_milestone_category[7]->img){ ?>
    		         <img src="<?php echo base_url($all_milestone_category[7]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                   <img src="<?php echo base_url('assets/'); ?>images/digital_images/sitting.png" class="bg-image">
                 <?php } ?>
                </div>
            </div>
        </div>
             <?php 
        if(is_array($all_sitting) || is_object($all_sitting)){
            foreach($all_sitting as $sitting)
            {
        ?>
        <div class="item">
               <div class="eighteen">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_sitting.png" class="bg-image">
                    <div class="top-sec">
                        <?php if($sitting->img){ ?>
                        <img src="<?php echo base_url($sitting->img); ?>" class="album-img"/>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">
    
                                <?php } ?>
                                
                                
                        
                        <div class="title-bot">
                             <?php if($sitting->heading){ ?>
                             <p><?php echo $sitting->heading; ?></p>
                              <?php } ?>
                        </div>
                         
                        
                    </div>
                    
                </div>
            </div>
        </div>
              <?php }  if(count($all_sitting) % 2 == 0){ ?>
                      <div class="item">
               <div class="eighteen">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_sitting.png" class="bg-image">
                    <div class="top-sec">
                       <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                                
                        <div class="title-bot">
                            <p></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
              
               <?php } } ?>
        <div class="item">
            <div class="ninteen">
                <div class="main-bg">
                   <?php if($all_milestone_category[8]->img){ ?>
    		         <img src="<?php echo base_url($all_milestone_category[8]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                   <img src="<?php echo base_url('assets/'); ?>images/digital_images/crawling.png" class="bg-image">
                 <?php } ?>
                </div>
            </div>
        </div>
              <?php 
        if(is_array($all_crawling) || is_object($all_crawling)){
            foreach($all_crawling as $crawling)
            {
        ?>
        <div class="item">
            <div class="twenty">
                
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_crawling.png" class="bg-image">
                    <div class="top-sec">
                        <?php if($crawling->img){ ?>
                        <img src="<?php echo base_url($crawling->img); ?>" class="album-img" style="object-fit:cover;"/>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">
    
                                <?php } ?>
                    </div>
                </div>
            </div>
        </div>
              <?php }  if(count($all_crawling) % 2 == 0){ ?>
             <div class="item">
            <div class="twenty">
                
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_crawling.png" class="bg-image">
                    <div class="top-sec">
                        <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>
           <?php } } ?>
           
        <div class="item">
             <div class="twenty_one">
                <div class="main-bg">
                    <?php if($all_milestone_category[9]->img){ ?>
    		         <img src="<?php echo base_url($all_milestone_category[9]->img); ?>" class="bg-image">
    		    <?php }else{ ?>
                   <img src="<?php echo base_url('assets/'); ?>images/digital_images/birthday.png" class="bg-image">
                 <?php } ?>
                </div>
            </div>
        </div>
             <?php 
        if(is_array($all_birthday) || is_object($all_birthday)){
            foreach($all_birthday as $birthday)
            {
        ?>
        <div class="item">
        <div class="twenty_two">
                 <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_birthday.png" class="bg-image">
                <div class="top-sec">
                    <?php if($birthday->img){ ?>
                    <img src="<?php echo base_url($birthday->img); ?>" class="album-img" style="object-fit:cover;"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">
                        <?php } ?>
                </div>
            </div>
            </div>
        </div>
          <?php }  if(count($all_birthday) % 2 == 0){ ?>
             <div class="item">
        <div class="twenty_two">
                 <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/digital_images/digital_birthday.png" class="bg-image">
                <div class="top-sec">
                      <img src="<?php echo base_url('assets/empty.png'); ?>" class="album-img" style="object-fit:cover;">
                </div>
            </div>
            </div>
        </div>
            <?php } } ?>
        
        <div class="item">
              <div class="first">
            
                <div class="main-bg">

                <img src="<?php echo base_url('assets/'); ?>images/digital_images/back.png" class="bg-image">
                </div>
                
        </div>
        </div>
    </div>
<img id="open-me" src="" style="display: none;">

<input type="hidden" id="update_id">

<div class="kk d-none">
        <div id="img-cropper" class="d-none">
            <div class="docs-demo"> 
                <div class="img-container">
                <img class="cropimg"   alt="Picture">
                </div>
            </div>
            <div id="actions">
                <div class="docs-buttons">
                    <div class="btn-group btn-group-crop">
                      <button type="button" class="btn btn-munchkin save_img"data-method="getCroppedCanvas" data-dismiss="modal" aria-label="Close" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                        <span class="docs-tooltip" data-toggle="tooltip">
                          Save Image
                        </span>
                      </button> 
                    </div>
                </div>
            </div>
        </div> 
        <div>
            <p class="mb-3 font-weight-bold text-center">Digital Album Preview</p>
            <div class="img_tag"> 
            <div class="img-preview canvas_img"> 
                <img  class="img-fluid " id="preview_img"   alt="price1" >
            </div>
        </div> 
        </div> 
        <button type="button" class="close_editor">
          <span>×</span>
        </button>
    </div> 
        
<div class="text-center" id="home_loader" style="display:none;">
    <span class="fa fa-spinner fa-spin fa-3x"></span>
    <p class="font-weight-bold ml-2">Processing ... </p>
</div>


<div class="modal fade " id="modalAddBrand" tabindex="-1" role="dialog" aria-labelledby="modalAddBrandLabel" aria-hidden="true" style=" z-index: 99999999;">

    <div class="modal-dialog draggable_kk"  style=" cursor: grab;">
      <div class="modal-content">

            <div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Image Caption</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body p-0">

                <form>
                  
                    <textarea cols="80"  id="editor1" name="editor1" rows="10" data-sample-short class="w-100 show_msg" ></textarea>
                        <div id="trackingDiv" ></div>
                </form>

            </div>

            <div class="modal-footer">

                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

                <button id="AddBrandButton" type="button" class="btn  update_text_data btn btn-munchkin "> <span>Save</span></button>

            </div>

        </div>

    </div>

</div>


<style>
#home_loader {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    width: 100%;
    display: flex;
    height: 100%;
    background: #ffffffa6;
    justify-content: center;
    align-items: center;
    z-index: 999999999;
}
#mydiv {
  position: absolute;
  z-index: 9;
  background-color: #f1f1f1;
  text-align: center;
  border: 1px solid #d3d3d3;
}
.modal-backdrop.show{
    display:none;
}

</style>
      
	<script src="<?php echo base_url('assets/'); ?>js/TweenMax.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/turn.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/slick.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/aos.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/main.js"></script>

<script> window.jQuery || document.write('<script src="<?php echo base_url('assets/'); ?>js/jquery-2.1.0.min.js"><\/script>') </script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>


<script src="<?php echo base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/jquery.booklet.latest.min.js"></script>
 <script src="<?php echo base_url('assets/img-editor/scripts.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/user.js'); ?>"></script>
 



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" />

<script src="<?php echo base_url('assets/') ?>js/cropper.js"></script>
<script src="<?php echo base_url('assets/') ?>js/cop_main2.js"></script> 
<script>

 $(function() { 
    $('#preview_form input').keyup(function(){
        var inputValue = $(this).val();
        var targetField = $(this).attr('name');
        $(`[input-name=${targetField}]`).text(inputValue);
    })
    
    
    $('.img-cropper-open').click(function(){
        $(".docs-demo").remove();
        var crop_html = `<div class="docs-demo"> 
                <div class="img-container">
                <img class="cropimg"   alt="Picture">
                </div>
            </div>`;
        $("#img-cropper").prepend(crop_html);
        
        
        $('#preview_form').addClass('d-none');
        $('#img-cropper').removeClass('d-none');
        $('.kk').removeClass('d-none');
         var imgPath = $(this).data('img');
         var ID = $(this).data('id');
        // alert(ID);
         $("#update_id").val(ID);
    //alert(imgPath);
        $(".cropimg").attr("src", imgPath);
        $("#preview_img").attr("src", imgPath);
        $(".cropper-hide").attr("src", imgPath);
        $(".cropper-view-box img").attr("src", imgPath);
        
        
        
       var imgPath = $(this).data('img');
    var img_height = $(this).data('height');
   
     var img_width = $(this).data('width');
    var styleattr = "height:"+img_height+ "px !important;width:"+img_width +"px !important; asdasdasd";

// console.log(img_height);
// console.log(img_width);
// $(".img_tag").removeAttr( "style" );
// $(".img_tag").attr( "style","width:"+img_width+"px !important;height:"+img_height+"px !Important;" );


    
    $(".cropimg").attr("src", imgPath);
    $("#preview_img").attr("src", imgPath);
    $(".cropper-hide").attr("src", imgPath);
    $(".cropper-view-box img").attr("src", imgPath);
    $(".img-preview").find("img").attr("src", imgPath);
        
        
        cropperInit();
      
    })
     $('.close_editor').click(function(){
        $('#img-cropper').addClass('d-none');
        $('.kk').addClass('d-none');
        //window.location.href='';
    })

    $('.save_img').click(function(){
        $('#img-cropper').addClass('d-none');
        $('.kk').addClass('d-none');
        $('#preview_form').removeClass('d-none');
    })
    $('#img-cropper-close').click(function(){
        $('#img-cropper').addClass('d-none');
        $('.kk').addClass('d-none');
        $('#preview_form').removeClass('d-none');;
    })
});
//  $('.custom-goto').click(function(e){
//       var page_id = $(this).data('id');
//       //alert(page_id);
//         e.preventDefault();
//         $('#mybook').booklet("gotopage", page_id);
//     });

$(document).ready(function(){
    $('#inputImage').change(function(e){
        var fileName = e.target.files[0].name;
        console.log(fileName);
        $(".img-cropper-open").html(fileName);
    });
});

</script>



<script>
    $(function() {
     $('#mybook_digital').booklet({
         width: 1040,
        pagePadding: 0,
        arrows: true,
        height: 350,
        pageNumbers: false,
        shadows: false,
        closed: true,
        autoCenter: true
        });
});


    $(function() {
     $('#mybook').booklet({
         width: 1000,
        pagePadding: 0,
        arrows: true,
        height: 400,
        pageNumbers: false,
        shadows: false,
        closed: true,
        autoCenter: true
        });
});

 $('.custom-goto').click(function(e){
       var page_id = $(this).data('id');
    //   alert(page_id);
        e.preventDefault();
        $('#mybook_digital').booklet("gotopage", page_id);
    });
    
 
$('#mobile_album').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    navText: ["<img src='<?php echo base_url('assets/'); ?>img/prev.png'>","<img src='<?php echo base_url('assets/'); ?>img/next.png'>"],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1  
        },
        1000:{
            items:1
        }
    }
})
 
//  $(document).on("keyup",".show_msg",function(){
//     var LiveMsg = $(this).val();
//     var ID      = $("#update_id").val();
//     alert(CKEDITOR.instances.editor1.getData());
//     $(".my_text_"+ID).val(LiveMsg);
//  });
</script>
<script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
    // CKEDITOR.replace('editor1', {
    //   height: 150,
    //   // List of text formats available for this editor instance.
    //   format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
    //   removeButtons: 'PasteFromWord'
    // });
    
    //  CKEDITOR.replace('editor1', {
    //   height: 400,
    //   baseFloatZIndex: 10005,
    //   removeButtons: 'PasteFromWord'
    // });
    
    timer = setInterval(updateDiv,100);
    function updateDiv(){
         var ID      = $("#update_id").val();
        var editorText = CKEDITOR.instances.editor1.getData();
       // $('#trackingDiv').html(editorText);
         $(".my_text_"+ID).html(editorText);
    }
</script>
<script>
    // CKEDITOR.replace('editor1', {
    //   height: 150,
    //   removeButtons: 'PasteFromWord'
    // });
    
    
    $( function() {
    $( ".draggable_kk" ).draggable();
  } );
  
  
  </script>
<script>
//$("body").delegate(".btn_modal_edit", "click", function() {
    // ...
/*    $(document).on("click",".btn_modal_edit",function(){
    var imgPath = $(this).data('img');
    var img_height = $(this).data('height');
   
     var img_width = $(this).data('width');
    var styleattr = "height:"+img_height+ "px !important;width:"+img_width +"px !important; asdasdasd";

// console.log(img_height);
// console.log(img_width);
$(".img_tag").removeAttr( "style" );
$(".img_tag").attr( "style","width:"+img_width+"px !important;height:"+img_height+"px !Important;" );

    /* $(".img-preview").css({
    "width":""+img_width+"px",
    "height":""+img_height+"px",
    });*/
/*    
    
    $(".cropimg").attr("src", imgPath);
    $("#preview_img").attr("src", imgPath);
    $(".cropper-hide").attr("src", imgPath);
    $(".cropper-view-box img").attr("src", imgPath);
    $(".img-preview").find("img").attr("src", imgPath);*/
    //$(".img-preview").attr("style","'"+styleattr+"'");
     //(".img-preview").attr("style", `${styleattr}`);
   
   // console.log("'"+styleattr+"'");
   
// })*/

$(".select_album_image tbody tr:first-child").addClass("active-image");
$(document).on("click",".b-arrow-next",function(){
    var img_id = $(".b-p1").find(".edit_img").attr("data-id");
    $(".collapse .select_album_image tr.active-image").next().addClass("active-image");
    $(".collapse .select_album_image tr.active-image").prev().removeClass("active-image");
   // alert(img_id);
   
    
    /*if( img_id !== undefined){
         $('.my_class_' + img_id).parent().closest('tr').addClass('yasin');
    }
    else{
        var img_id = $(".b-p2").find(".edit_img").attr("data-id");
        $('.my_class_' + img_id).parent().closest('tr').addClass('yasin');
    }*/
    
    
    
});

$(document).on("click",".go_to_booklet_page",function(){
    var getPageId = $(this).attr('toggle-page');
    $(this).parents('tbody').find('tr').removeClass('active-image');
    $('#mybook_digital').booklet("gotopage", getPageId);
    $(this).parents('tr').addClass('active-image');
})

$(document).on("click",".booklet .b-arrow",function(){
    setTimeout(function(){
        var img_id = $(".b-p1").find(".edit_img").attr("data-id");
         var img_id2 = $(".b-p2").find(".edit_img").attr("data-id");
        $('.my_class_' + img_id).parents('tbody').find('tr').removeClass('active-image');
         
        // $(".collapse.show .select_album_image tr.active-image").prev().addClass("active-image");
        // $(".collapse.show .select_album_image tr.active-image").next().removeClass("active-image");
        
    //   $('.my_class_' + img_id).addClass('yasin');
        
        if( img_id !== undefined){
             $('.my_class_' + img_id).parents('tr').addClass('active-image');
        }
        else{
             $('.my_class_' + img_id2).parents('tbody').find('tr').removeClass('active-image');
             $('.my_class_' + img_id2).parents('tr').addClass('active-image');
        }
        
    },1200)
    
    
    
});

</script>
