
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/canvas.css'); ?>">
<style>


@font-face {
  font-family: flame;
  src: url(<?php echo base_url('assets/'); ?>fonts/flame.woff);
}

.main-bg{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    max-width: 500px;
    margin: 0 auto;
    position: relative;
    z-index:9;
    text-align: center;
}
.top-sec {
    height: 280px;
    width: 50%;
    display: inline-flex;
    text-align: center;
    justify-content: center;
    align-items: flex-end;
}

.top-sec .left-top {
    position: relative;
    /*height: 50VH;*/
}
.top-sec .left-top h3 {
    font-family: 'Karla';
    color: #4F4F4F;
    font-weight: 500;
    /*width: 75%;*/
    font-size: 20px;
    margin: 10px auto;
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

.bottom-sec {
    width: 80%;
    margin: auto;
    height: 420px;

}
.white-bottom{
    width: 70%;
    margin: 0 auto;
    text-align: center;
    color: #7C525A;
    font-size: 18px;
    font-weight: 500;
}
.white-bottom p{   
    font-family: 'Karla';
    text-transform: capitalize;
    color: #4F4F4F;
}
.title-bot p{
    font-family: 'flame';
    text-align: center;
    font-size: 30px;
    line-height: 1;
    color: #4F4F4F;
    margin: 0;
}
.title-bot p .parent{

    font-family: 'Nunito';
    text-align: center;
    font-size: 24px;
    line-height: 1;
    color: #4F4F4F;
    margin: 0;
    font-weight: 600;

}

.title-bot {
    position: relative;
}
.title-bot h3{
    text-align: center;
    font-size: 50px;
    font-family: 'flame';
    line-height: 1;
    margin: 10px 0;
    color: #FD8DB4;
    font-weight: 400;
}
.title-bot span {
    font-size: 20px;
    color: #4F4F4F;
    font-family: 'Karla', sans-serif;
    font-weight: 500;
}
.title2-bot{
    text-align:center;
}

.title2-bot h3 {
    font-family: 'tahoma';
    font-weight: 100;
    margin-bottom: 5px;
    font-size: 18px;
}
.title2-bot p {
    font-family: 'Karla';
    color: #4F4F4F;
    font-size: 18px;
    width: 50%;
    margin: 10px auto;
    line-height: 1;
    text-align: left;
    font-weight: 500;
    display: flex;
    justify-content: center;
}
.title2-bot p span {
    font-family: 'Karla';
    color: #4F4F4F;
    font-size: 18px;
    width: 50%;
    margin: 10px auto ;
    line-height: 1;
    text-align: left;
    font-weight: 500;
    display: flex;
    justify-content: center;
}

/*.title2-bot p span{*/
/*    font-family: 'flame';*/
/*    font-size: 40px;*/
/*    color: #FD8DB4;*/
/*    margin-right: 10px;*/
/*    border-right: 1px solid;*/
/*    padding-right: 10px;*/
/*}*/
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
.title2-bot p span.date{
    font-family: 'flame';
    font-size: 40px;
    color: #FD8DB4;
    border-right: 1px solid;
    padding-right: 10px;
    
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
    width: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}


</style>

    <div class="main-bg" id="cont">

        <img src="<?php echo base_url('assets/'); ?>images/a-04.png" class="bg-image"> 
        <div class="top-sec">
            <div class="left-top">
                <h3> INTRODUCING  </h3>
                <img src="<?php echo base_url('assets/'); ?>images/crown.png" />
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <h3 input-name="b_name">  Baby name  </h3>
                <p><span>by</span> <span input-name="together_parent_name" class="parent">Parent Name</span></p> 
            </div>
            <div class="title2-bot">
                <p><span input-name="t_date" class="date">20</span> <span input-name="t_month">SEP  </span><span input-name="t_time">6:00 PM</span>   </p>
            </div>
        
            <div class="white-bottom">
                <p input-name="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>


    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   
