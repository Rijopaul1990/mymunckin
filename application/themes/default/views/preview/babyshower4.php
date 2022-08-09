<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200;300;400;500;600&family=Pacifico&family=Sacramento&display=swap" rel="stylesheet">
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
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 330px;
    width: 80%;
    margin: auto;
}

.top-sec .left-top {
    width: 50%;   
    margin-right: 20px;
    text-align: right;
}
.top-sec .left-top img{
    width: 180px;
}
.top-sec .right-top {
    width: 50%;
    position: relative;
    margin-bottom: 20px;
}
.top-sec .right-top h2{
    font-family: 'Pacifico', cursive;
    font-size: 52px;
    line-height: 1.2;
    color: #f3999b;
    font-weight: 500;
    text-align: left;
    position: relative;
}

.bottom-sec {
    width: 90%;
    margin: 20px auto;
    height: 300px;
}
.white-bottom{
    background: #Fff;
    margin: 0 auto ;
    border-radius: 10px;
    padding: 5px;
    text-align: center;
    font-weight: 600;
    color: #ed6e70;
    font-size: 16px;
}
.white-bottom p{   
    border: 1px dashed;
    margin: 0;
    padding:20px;
    font-family: 'Montserrat Alternates', sans-serif;
    border-radius: 10px;
    font-weight: 500;
    text-transform: capitalize;
}
.title-bot p{
    font-family: 'Sacramento', cursive;
    text-align: center;
    font-size: 40px;
    line-height: 1;
    margin: 30px 0 0;
}
.title-bot p span{
    font-family: 'Sacramento', cursive;
    text-align: center;
    font-size: 40px;
    line-height: 1;
}
.title-bot h3{
    text-align: center;
    font-size: 34px;
    font-family: 'Nunito';
    line-height: 1;
    margin: 25px 0 0;
    color: #353535;
    font-weight: 600;
}
.time-bot  {
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
}
.time-bot ul {
    display: inline-flex;
    margin: 10px 0;
    font-family: 'Montserrat Alternates', sans-serif;
    padding: 0;
}
.time-bot li {
    /*display: inline-block;*/
    margin: 0 10px;
    display: none;
    position: relative;
}
.time-bot li:after {
content: '|';
    width: 5px;
    height: 20px;
    position: absolute;
    background-size: contain;
    right: -12px;
    color: #fc8e8e;
    top: 0;
    background-repeat: no-repeat;
}
.time-bot li:last-child::after {
    display: none;
}
.time-bot p {
    font-family: 'Montserrat Alternates', sans-serif;
    margin: -15px 0 30px;
}
.title-bot .lines {
    background: white;
    width: 5px;
    height: 15px;
    display:none;
    position: absolute;
    z-index: 9;
    top: 1%;
    border-radius: 25px;
    left: 25%;
    transform: rotate(-50deg);
}
.title-bot{
    position: relative;
}
.title-bot .lines:before {
    content: '';
    background: white;
    width: 5px;
    display:none;
    height: 20px;
    position: absolute;
    z-index: 9;
    top: 2px;
    border-radius: 25px;
    left: 15px;
    transform: rotate(15deg);
}
.title-bot .lines::after {
    content: '';
    background: white;
    width: 5px;
    display:none;
    height: 20px;
    position: absolute;
    z-index: 9;
    top: 2px;
    border-radius: 20px;
    left: -15px;
    transform: rotate(-35deg);
}

.title-bot .lines2 {
    background: white;
    width: 5px;
    height: 15px;
    position: absolute;
    z-index: 9;
    display:none;
    top: 1%;
    border-radius: 25px;
    right: 25%;
    transform: rotate(50deg);
}
.title-bot .lines2:before {
    content: '';
    background: white;
    width: 5px;
    height: 20px;
    display:none;
    position: absolute;
    z-index: 9;
    top: 2px;
    border-radius: 25px;
    left: 15px;
    transform: rotate(15deg);
}
.title-bot .lines2::after {
    content: '';
    background: white;
    width: 5px;
    height: 20px;
    position: absolute;
    display:none;
    z-index: 9;
    top: 2px;
    border-radius: 20px;
    left: -15px;
    transform: rotate(-35deg);
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
.moon{
    position: absolute;
    top: 25px;
    width: 50px !important;
    height: 50px;
    right: 20px;
}

</style>

    <div class="main-bg" id="cont">

       <img src="<?php echo base_url('assets/'); ?>images/baby-back1.png" class="bg-image">  
        <div class="top-sec">
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/left-top.png" />
            </div>
            <div class="right-top">
                <h2>Baby Shower</h2>
            <img src="<?php echo base_url('assets/'); ?>images/moon.png" class="moon">  
            </div>
        </div>

        <div class="bottom-sec">

            <div class="title-bot">
                <div class="lines"></div>
                <p><span> Celebrating</span></p>                
                <div class="lines2"></div>
                <h3 input-name="together_parent_name"> Parent Name</h3>
            </div>
            <div class="time-bot">
                <ul>
                    <li><?php echo @$fetch_create_template->t_day; ?></li>
                    <li><?php echo @$fetch_create_template->t_date; ?></li>
                    <li><?php echo @$fetch_create_template->t_time; ?></li>
                </ul>
                 <p></p>
                 <p input-name="address"> Address line goes here</p>
            </div>
            <div class="white-bottom">
                <p input-name="description">Lorem Ipsum is simply dummy text of the printing</p>
            </div>
        </div>


    </div>
    
 <script src="<?php echo base_url('assets/html2canvas.min.js'); ?>"></script> 
   <script src="<?php echo base_url('assets/canvas.js'); ?>"></script> 
   
