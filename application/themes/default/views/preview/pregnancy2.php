
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
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
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
        max-width: 500px;
    margin: 0 auto;
    padding: 20px 0 0;
    position: relative;
    text-align: center;
    z-index:9;
}
.top-sec {
    /*height:600px;*/
    width: 55%;
    display: inline-flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}

.top-sec .left-top {
    position: relative;
    top: 70px;
    /*height: 50VH;*/
}
.top-sec .left-top h3 {
    font-family: 'Great Vibes', cursive;
    color: #ceaf7a;
    width: 80%;
    font-size: 62px;
    margin: 12px auto 0;
    font-weight: 500;
    line-height: 1;
}


.top-sec .left-top img {
  /*width:100%;
  height:100%;
  object-fit:cover;
  clip: rect(10px, 20px, 30px, 40px);*/
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
.left-top p {
    font-family: 'flame';
    text-align: center;
    font-size: 24px;
    color: #757575;
    margin: 5px 0;
}

.left-top hr{
    width: 20%;
    height: 3px;
    background: -webkit-linear-gradient(
2deg
, #c9b28a69, #b07f4ac7, #c9b28a00);
    border: none;
    margin: 0 auto 10px;
    border-radius: 50%;
}


.bg-image{
    position: absolute;
    left: 0;
    top: 0;
    /*width: auto;*/
    width: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}
.img-preview {
    overflow: hidden;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    margin: auto;
    text-align: center;
    background: transparent;
    float: unset;
}
.parent{
font-family: 'Nunito' !important;
    font-size: 18px !important;
    color: #757575 !important;
    margin: 10px 0 !important;
    font-weight:  600;
}
.text-field{
    height:255px;
}
</style>

    <div class="main-bg" id="cont">
<div>
                <img src="<?php echo base_url('assets/'); ?>images/preg-bac.jpg" class="bg-image"/>
        <div class="top-sec">
            <div class="left-top">
                
                     <div class="img-preview canvas_img img_round" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
            <?php }  ?>
                 </div>
                 
                 
                <!--<div class="img_round">-->
                <!--<?php if($fetch_create_template->u_img){ ?>-->
                <!--<div src="<?php echo base_url($fetch_create_template->u_img); ?>" id="gol_image" style=""></div>-->
                <!--<canvas id="canvas" width=220 height=220></canvas>-->
                 
                <!--<?php } else{ ?>-->
                <!--<img src="<?php echo base_url('assets/'); ?>images/shoes.png" />-->
                <!--<?php } ?>-->
                <!--</div>-->
                <h3> Soon to be There    </h3>
                <!--<hr>-->
                <div class="text-field">
                <p input-name="description">Lorem Ipsum is simply dummy text</p>
                 <p input-name="together_parent_name" class="parent">Parent Name </p></div>
            </div>
            
        </div>
</div>

    </div>

    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 