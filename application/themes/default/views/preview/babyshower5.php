<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>
@font-face {
  font-family: Niconne;
  src: url(<?php echo base_url('assets/'); ?>fonts/Niconne-Regular.woff);
}

@font-face {
  font-family: Birly;
  src: url(<?php echo base_url('assets/'); ?>fonts/Birly.woff);
}

@font-face {
  font-family: tahoma;
  src: url(<?php echo base_url('assets/'); ?>fonts/tahoma.woff);
}
.main-bg{
        max-width: 500px;
    margin: 0 auto;
    padding: 20px 0 0;
    position: relative;
    text-align: center;
    z-index:9;
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
    width: 236px !important;
    border-radius: 50%;
    height: 235px !important;
    background: transparent;
    margin: auto;
    float: unset;
    
    top: 15px;
    position: relative;
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
    left: 16%;
    top: -24px;
    background-repeat: no-repeat;
    transform: rotate(-25deg);
}
.heart-icons .heart:nth-child(2){
    width: 18px;
    height: 18px;
    position: absolute;
    background-size: contain;
    right: 19%;
    top: 0;
    background-repeat: no-repeat;
    transform: rotate(-25deg);
}
.heart-icons .heart:nth-child(3){
    left: 22%;
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
    right: 14%;
    top: -25px;
    background-repeat: no-repeat;
    transform: rotate(15deg);
}
.bottom-sec {
    width: 80%;
    height: 345px;
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
    font-family: 'Niconne';
    text-transform: capitalize;
}
.title-bot p{
    font-family:  'Nunito', sans-serif;
    text-align: center;
    font-size: 18px;
    line-height: 1;
    position: relative;
    color: #424242;
    margin: 0;
    padding: 10px 0 ;
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
       font-family: 'Nunito', sans-serif;
    font-weight: 700;
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
    font-weight: 700;
    margin: 0 0;
    font-family:'Nunito', sans-serif;
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
    font-family: 'Nunito';
    margin: 10px 0 20px;
    font-weight: 700;
}

.bg-image{
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    /*height: 100%;*/
    margin: auto;
    z-index: -1;
}
.bg-frame{
    position: absolute;
    left: 0;
    top: 0;
    /*width: 330px !important;*/
    height: 100%;
    right: 0;
    margin: auto !important;
}

</style>

     <div class="main-bg" id="cont">
    <img src="<?php echo base_url('assets/'); ?>images/baby-shower5.png" class="bg-image">   
        <div class="top-sec">
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/gold-frame.png" class="bg-frame" >
                
                
                 
                 <div class="img-preview canvas_img baby-image" id="gol_image" src="" > 
                 
                  <?php if($temp_data->u_img){ ?>
                 <img src="<?php echo base_url($temp_data->u_img); ?>"  >
               
            <?php }  ?>
                 </div>
                 
                 
               
            <!--      <?php if($fetch_create_template->u_img){ ?>-->
                 
            <!--     <div src="<?php echo base_url($fetch_create_template->u_img); ?>" id="gol_image" style=""></div>-->
            <!--    <canvas id="canvas" width=220 height=220 class="baby-image"></canvas>-->
            <!--<?php } else{ ?>-->
            <!--    <img src="<?php echo base_url('assets/'); ?>images/shoes.png" class="baby-image"/>-->
                
            <!--    <?php } ?>-->
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <p> Join Us For The <span class="heart-icons">
                    
                <img src="<?php echo base_url('assets/'); ?>images/heart.png" class="heart" >
                <img src="<?php echo base_url('assets/'); ?>images/heart.png" class="heart"/>
                <img src="<?php echo base_url('assets/'); ?>images/heart.png" class="heart" >
                <img src="<?php echo base_url('assets/'); ?>images/heart.png" class="heart"/>
                    
                </span></p> 
                <h3> Baby Shower    </h3>
            </div>
            <div class="title2-bot">
                <h3 input-name="together_parent_name"> <?php echo @$fetch_create_template->together_parent_name; ?>    </h3>
                <!--<p> Angelina <span>&</span> Joseph</p> -->
            </div>
            <div class="time-bot">
                <ul>
                    <li><?php echo @$fetch_create_template->t_day; ?></li>
                    <li><?php echo @$fetch_create_template->t_date; ?></li>
                    <li><?php echo @$fetch_create_template->t_time; ?></li>
                </ul>
                <!-- <p> VIKAS MARG, VASANT KUNJ, ND</p> -->
                 <p input-name="address"><?php echo @$fetch_create_template->address; ?></p>
            </div>
            <div class="white-bottom">
                 <p input-name="description"><?php echo @$fetch_create_template->description; ?></p>
            </div>
        </div>


    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   
