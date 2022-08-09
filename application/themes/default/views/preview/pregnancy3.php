  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500&family=Niconne&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>


.main-bg{
        max-width: 500px;
    margin: 0 auto;
    padding: 20px 0 0;
    position: relative;
    text-align: center;
    z-index:9;
}
.top-sec {
    width: 100%;
    padding: 30px 0 0;
    position: relative;
}

.top-sec img{
    width: 330px;
    height: 330px;
    object-fit: cover;
    /*border-radius: 50%;*/
    position: absolute;
    left: -18px;
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    /*top: 75px;*/
}
.top-sec .left-top {
    position: relative;
    /*background: url(<?php echo base_url('assets/'); ?>images/preg-frame.svg);*/
    /*background-size: contain;*/
    /*background-repeat: no-repeat;*/
    height: 385px;
    text-align: center;
    /*background-position: center;*/
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
    margin: auto;
    height: 280px;
}
.white-bottom{
    width: 70%;
    margin: 10px auto;
    text-align: center;
    color: #606060;
    font-size: 16px;
    line-height: 1;
    font-weight: 500;
}
.white-bottom p{   
    font-family:'Lexend', sans-serif;
    text-transform: capitalize;
}
.title-bot p{
    font-family: 'Lexend', sans-serif;
    text-align: center;
    font-size: 16px;
    color: #606060;
    margin: 0;
    font-weight: 500;
}
.title-bot h3{
text-align: center;
    font-size: 60px;
    font-family: 'Niconne', cursive;
    line-height: 1;
    margin: 0 0 10px;
    color: #9E7666;
    font-weight: 500;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-family: 'Niconne', cursive;
    font-weight: 100;
    font-size: 46px;
    color: #F99A98;
    margin: 10px 0;
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
    width: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}
.bg-frame{
left: 0 !important;
    top: 0 !important;
    height: 380px !important;
    right: 0 !important;
    margin: auto !important;
    width: auto !important;
    border-radius: 0 !important;
}
.top-sec .canvas_img {
    width: 280px;
    height: 280px;
    /* object-fit: cover; */
    border-radius: 50%;
    position: absolute;
    left: -18px;
    right: 0;
    margin: auto;
    /* display: flex; */
    justify-content: center;
    /* align-items: center; */
    top: 75px;
    background: transparent;
}
</style>

    <div class="main-bg" id="cont">
                <img src="<?php echo base_url('assets/'); ?>images/pregnancy-01.png" class="bg-image" />

        <div class="top-sec">
            
              
                 <div class="img-preview canvas_img" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
            <?php }  ?>
                 </div>
                 
            <!--    <?php if($fetch_create_template->u_img){ ?>-->
                 
            <!--     <div src="<?php echo base_url($fetch_create_template->u_img); ?>" id="gol_image" style=""></div>-->
            <!--    <canvas id="canvas" width=220 height=220 class="canvas_img"></canvas>-->
            <!--<?php } else{ ?>-->
            <!--    <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />-->
                
            <!--    <?php } ?>-->
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/preg-frame.png"  class="bg-frame"/>
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3> Ooh baby baby! </h3>
               <p input-name="description">Lorem Ipsum is simply dummy text</p>
            </div>
            <div class="title2-bot">
                 <h3 input-name="t_date"> 20 April 2021  </h3>
            </div>
            <div class="white-bottom">
                <p input-name="together_parent_name">Parent Name </p>
            </div>
        </div>


    </div>

    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 