
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>


@font-face {
  font-family: flame;
  src: url(<?php echo base_url('assets/'); ?>fonts/flame.woff);
}

@font-face {
  font-family: bday;
  src: url(<?php echo base_url('assets/'); ?>fonts/bday.woff);
}

.main-bg{
    /*height: 550px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/Bday-01.svg);*/
    /*background-size: contain;*/
    /*background-position: top;*/
    /*background-repeat: no-repeat;*/
    /*padding: 20px 0;*/
    max-width: 500px;
    margin: 0 auto;
    z-index: 9;
    padding: 20px 0 ;
    position: relative;
    text-align: center;

}
.top-sec {
    height: 630px;
    width: 100%;
    font-family: 'Karla';
    text-align: center;
    font-size: 18px;
    color: #4F4F4F;
    position: relative;
}


.top-sec .left-top h3 {
    font-family: 'Nunito', sans-serif;
    color: #4F4F4F;
    font-weight: 700;
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
    font-family: 'Nunito', sans-serif;
    text-align: center;
    font-size: 20px;
    line-height: 1;
    color: #4F4F4F;
    margin: 5px;
    font-weight: 700;

}
.title-bot p span{
    font-weight: 700;
    font-size: 20px;
    margin: 0px;
}

.title-bot p.at{
    font-family: 'bday';
    font-size: 26px;
    color: #f6a84f;
    font-weight: 100;
}
.title-bot p.name{
    font-family: 'bday';
    text-align: center;
    font-size: 55px;
    line-height: 1;
    font-weight:100;
    color: #E86255;
    margin: 0 0 15px;

}
.top-sec .left-top h3 span{  
    font-size: 36px;
    font-family: 'flame';
    line-height: 1;
    color: #F6A84F;
    display: block;
    
}
.title-bot {
    position: absolute;
    bottom: 10px;
    left: 0;
    margin: auto;
    right: 0;
}
.title-bot h3{
    text-align: center;
    font-size: 40px;
    font-family: 'bday';
    line-height: 1;
    margin: 0 0 15px;
    color: #f6a84f;
    font-weight: 400;
}
.title-bot span {
    font-size: 16px;
    color: #4F4F4F;
    font-family: 'Nunito', sans-serif;
    font-weight: 500;
}


.title2-bot h3 {
    font-family: 'tahoma';
    font-weight: 100;
    margin-bottom: 5px;
    font-size: 18px;
}
.title2-bot p {
    font-family:'Nunito', sans-serif;
    color: #4F4F4F;
    font-size: 18px;
    width: 100%;
    margin: 10px auto 0;
    line-height: 1;
    font-weight: 600;
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
    width: 100%;;
}

</style>

    <div class="main-bg" id="cont">
    <img src="<?php echo base_url('assets/'); ?>images/bday_11.png" class="bg-image">  
        <div class="top-sec">
            <div class="left-top">
                <h3> YOU ARE <br>INVITED TO MY </h3>
            </div>
            <div class="title-bot">
                <h3> Birthday Party   </h3>
                <p class="name" input-name="b_name">Sarah Mehra</p> 
                
                <p> <span input-name="t_day">SATURDAY</span> <span input-name="t_date">20 APRIL</span> | <span input-name="t_time">6:00 PM</span></p>
                    <!--<p input-name="together_parent_name"><?php echo @$fetch_create_template->t_day; ?> <?php echo @$fetch_create_template->t_date; ?> | <?php echo @$fetch_create_template->t_time; ?>   </p>-->
                    <p class="at">at   </p>
                 <div class="title2-bot">
                    <p input-name="address">23B, Street 2, Vasant Kunj </p>
                </div>
            </div>
           
        </div>

    </div>


 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   
<!--</html>-->