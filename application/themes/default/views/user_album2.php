<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Great+Vibes&display=swap" rel="stylesheet">

<link href="<?php echo base_url('assets/'); ?>css/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

<link rel="stylesheet" href="<?php echo base_url('assets/img-editor/styles.min.css'); ?>">
<?php include_once('banner_dashboard.php'); ?>

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
  src: url(<?php echo base_url('assets/'); ?>fonts/DTCCabanaBaby.woff);
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
<?php if($check_print_status->print_status != 1) 
    {
 include('user_album_widget.php');
    }
 ?> 
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
<section id="albumm" class="main_cart_div">
   <div class="text-center mb-5 position-relative" style="z-index:0;">
     <a href="<?php echo base_url('Users/album'); ?>" class="btn btn-munchkin "><span><i class="fa fa-reply"></i> Back </span></a>
     <?php if($check_print_status->print_status != 1 && $check_ultimate >= 1) 
    { ?>
     <a href="#" class="btn btn-munchkin " data-toggle="modal" data-target="#print"><span><i class="fas fa-print"></i> Ready to print </span></a>
    <?php } ?>
     </div>
    <div id="mybook">
       
        <div class="second">
            
            <div class="main-bg">
                <div class="top-sec">
                    <div class="left-sec">
                        <img src="<?php echo base_url('assets/'); ?>images2/front-2.png" class="album-img"/>
                        <?php if(@$first_page->img){ ?>
                        <img src="<?php echo base_url(@$first_page->img); ?>" class="baby-img"/>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="baby-img"/>
                            <?php } ?>
                    </div>
                    <div class="right-sec">                
                        <img src="<?php echo base_url('assets/'); ?>images2/front-1.png" class="album-img"/>
                        <div class="bottom-sec">
                            <p> <?php echo @$first_page->name; ?></p>
                            <img src="<?php echo base_url('assets/'); ?>images2/foot.png" class="foot" />
                        </div>
                    </div>
                </div>
                <div class="bottom-sec">
                    <div class="title-bot">
                        <h3> Welcome <span>to the </span>World   </h3>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="third">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/blue_l1-bg.png" class="bg-image">   
                <div class="top-sec">
                     <?php if(@$baby_shower1){ ?>
                    <div class="edit_img " style="width: 80%;margin:auto;" data-id="<?php echo @$baby_shower1->id; ?>" data-img="<?php echo base_url(@$baby_shower1->img); ?>">
                    <img src="<?php echo base_url($baby_shower1->img); ?>" class="edit">
                    </div>
                   <?php }else{ ?>
                    <div class="edit_img placeholder_div" style="width: 80%;margin:auto;"  >
                    <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                        
                    </div>
                   <?php } ?>
                    <h2> "Yay!<span > We are expecting!</span>  </h2>
                </div>
            </div>
        </div>
        
        <div class="forth">
            <div class="main-bg"> 
                <div class="top-sec">
                    <ul>
                        
                        <li>
                        <?php if(@$baby_shower2){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_shower2->id; ?>" data-img="<?php echo base_url(@$baby_shower2->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower2->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;"  >
                            <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$baby_shower4){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_shower4->id; ?>" data-img="<?php echo base_url(@$baby_shower4->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower4->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;"  >
                            <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        
                   
                    </ul>
                    <ul class="second">
                    <li>
                        <?php if(@$baby_shower3){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_shower3->id; ?>" data-img="<?php echo base_url(@$baby_shower3->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower3->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;"  >
                            <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$baby_shower5){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_shower5->id; ?>" data-img="<?php echo base_url(@$baby_shower5->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower5->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;"  >
                            <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
   
        </div>
        
        <div class="fifth">
            
                <div class="main-bg"> 
                    <div class="top-sec">
                        <h2> Mom and Dad</span>  </h2>
                        <?php if(@$mom_dad1){ ?>
                        <div class="edit_img " style="width:85%;" data-id="<?php echo @$mom_dad1->id; ?>" data-img="<?php echo base_url(@$mom_dad1->img); ?>">
                        <img src="<?php echo base_url(@$mom_dad1->img); ?>" class="edit"> 
                             </div>
                       
                        <?php }else{ ?>
                    <div class="edit_img placeholder_div" style="width: 85%;"  >
                    <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                    </div>
                   <?php } ?>
                    </div>
                </div>
    
        
        </div>
        
        
          <div class="sixth">
        
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/r2-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <ul>
                    <li>
                        <?php if(@$mom_dad2){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$mom_dad2->id; ?>" data-img="<?php echo base_url(@$mom_dad2->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad2->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;"  >
                            <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad3){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$mom_dad3->id; ?>" data-img="<?php echo base_url(@$mom_dad3->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad3->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;"  >
                            <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad4){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$mom_dad4->id; ?>" data-img="<?php echo base_url(@$mom_dad4->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad4->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;"   >
                            <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad5){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$mom_dad5->id; ?>" data-img="<?php echo base_url(@$mom_dad5->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad5->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;"  >
                            <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                    </ul>
                    <div class="right-side">
                        <img src="<?php echo base_url('assets/'); ?>images2/arrows.png" class="arrows"> 
                        <h2> Dear Love </h2>
                        <p>We love you to the moon and back</p>
                            <img src="<?php echo base_url('assets/'); ?>images2/slide.png" class="slide"> 
                    </div>
                </div>
            </div>
       
        </div>
         <div class="seventh">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/l3-bg.jpg" class="bg-image">
        
                <div class="section">
                    
                    
                <div class="left-sec">
                <?php if(@$baby_arrival){ ?>
                        <div class="edit_img" data-id="<?php echo @$baby_arrival->id; ?>" data-img="<?php echo base_url(@$baby_arrival->img); ?>"  >
                        <img src="<?php echo base_url($baby_arrival->img); ?>" class=" edit">  
                    </div>  
                    <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="width: 80%;margin:auto;"  >
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
               </div> 
           
                    <div class="right-sec">
                        <div class="title-bot">
                            <h3> It's been a long long wait, for this date!    </h3>
                            <img src="<?php echo base_url('assets/'); ?>images2/bird.png" />
                        </div>
                        
                    </div>
                </div>  
            </div>
           
        </div>
        
        <div class="eighth">
            <div class="main-bg"> 
                <div class="top-sec">
                     <ul>
                     <li>
                        <?php if(@$baby_arrival2){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_arrival2->id; ?>" data-img="<?php echo base_url(@$baby_arrival2->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_arrival2->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="width: 80%;margin:auto;"  >
                            <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$baby_arrival3){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_arrival3->id; ?>" data-img="<?php echo base_url(@$baby_arrival3->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_arrival3->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="width: 80%;margin:auto;"  >
                            <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$baby_arrival4){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_arrival4->id; ?>" data-img="<?php echo base_url(@$baby_arrival4->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_arrival4->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="width: 80%;margin:auto;"  >
                            <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$baby_arrival5){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_arrival5->id; ?>" data-img="<?php echo base_url(@$baby_arrival5->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_arrival5->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" style="width: 80%;margin:auto;"  >
                            <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                    </ul>

                </div>
            </div>
       
            
        </div>
         <div class="ninth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/l4-bg.jpg" class="bg-image">
        
                <div class="section">
                   
                    <div class="left-sec">
                    <?php if(@$welcome_home1){ ?>
                         <div class="edit_img h-100" data-id="<?php echo @$welcome_home1->id; ?>" data-img="<?php echo base_url(@$welcome_home1->img); ?>">
                             <img src="<?php echo base_url(@$welcome_home1->img); ?>" class="edit" >    
                    </div> 
                    <?php } else { ?>
                    <div class="edit_img h-100 placeholder_div"   >
                    <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                            <?php } ?>
                    </div> 
                     
                    <div class="right-sec">
                        <div class="title-bot">
                            <h3> Home is <img src="<?php echo base_url('assets/'); ?>images2/heart.png"  /> </h3> 
                            <h3><img src="<?php echo base_url('assets/'); ?>images2/arrows.png" /> where Love is  </h3>
                        </div>
                        
                    </div>
                </div>  
            </div>
          
        </div>
        
         <div class="tenth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/r4-bg.png" class="bg-image">   
                <div class="top-sec">
                    <div class="right-side">
                        <img src="<?php echo base_url('assets/'); ?>images2/teddy.png" class="w-50"> 
                        <h2> Always Smile My Child </h2>
                    </div>
                    
                    <ul>
                         
                       <li>
                        <?php if(@$welcome_home2){ ?>
                            <div class="edit_img h-100"  data-id="<?php echo @$welcome_home2->id; ?>" data-img="<?php echo base_url(@$welcome_home2->img); ?>"  >
                                <img src="<?php echo base_url(@$welcome_home2->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div"   >
                            <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$welcome_home3){ ?>
                            <div class="edit_img h-100"  data-id="<?php echo @$welcome_home3->id; ?>" data-img="<?php echo base_url(@$welcome_home3->img); ?>"  >
                                <img src="<?php echo base_url(@$welcome_home3->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div"   >
                            <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$welcome_home4){ ?>
                            <div class="edit_img h-100"  data-id="<?php echo @$welcome_home4->id; ?>" data-img="<?php echo base_url(@$welcome_home4->img); ?>"  >
                                <img src="<?php echo base_url(@$welcome_home4->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div"   >
                            <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                        <li>
                        <?php if(@$welcome_home5){ ?>
                            <div class="edit_img h-100"  data-id="<?php echo @$welcome_home5->id; ?>" data-img="<?php echo base_url(@$welcome_home5->img); ?>"  >
                                <img src="<?php echo base_url(@$welcome_home5->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div"   >
                            <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                   <?php } ?>
                        </li>
                    </ul>
                </div>
            </div> 
             
             
       
        </div>
        <div class="eleven">
            
            <div class="main-bg"> 
                <img src="<?php echo base_url('assets/'); ?>images2/l5-bg.jpg" class="bg-image">
                <div class="top-sec">
                    <?php if(@$first_smile){ ?>
                    <div class="edit_img" data-id="<?php echo @$first_smile->id; ?>" data-img="<?php echo base_url(@$first_smile->img); ?>">
                    <img src="<?php echo base_url(@$first_smile->img); ?>" class="baby-img edit">    
                 </div> 
                    <?php }else{ ?>
                        <div class="edit_img  placeholder_div" >
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                        </div>
                        <?php } ?>
                     <div class="title-bot">
                        <h3> You make us </h3> 
                        <h3> <img src="<?php echo base_url('assets/'); ?>images2/rainbow.png" /> Smile   </h3>
                    </div>
                </div>
            </div>
            

        </div>
        <div class="twelve">
            
                <img src="<?php echo base_url('assets/'); ?>images2/r5-bg.png" class="bg-image">
            <div class="main-bg">
                <div class="top-sec">
                    <ul>
                         
                        <li>
                        <?php if(@$first_smile2){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile2->id; ?>" data-img="<?php echo base_url(@$first_smile2->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile2->img); ?>" class="edit" >
                         </div>
                        <?php }else{ ?>
                            <div class="edit_img  placeholder_div" >
                            <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                        </div>
                        <?php } ?>
                        </li>
                        <li>
                        <?php if(@$first_smile3){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile3->id; ?>" data-img="<?php echo base_url(@$first_smile3->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile3->img); ?>" class="edit" >
                         </div>
                        <?php }else{ ?>
                            <div class="edit_img  placeholder_div" >
                            <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                        </div>
                        <?php } ?>
                        </li>
                        <li>
                        <?php if(@$first_smile4){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile4->id; ?>" data-img="<?php echo base_url(@$first_smile4->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile4->img); ?>" class="edit" >
                         </div>
                        <?php }else{ ?>
                            <div class="edit_img  placeholder_div" >
                            <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                        </div>
                        <?php } ?>
                        </li>
                        <li>
                        <?php if(@$first_smile5){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile5->id; ?>" data-img="<?php echo base_url(@$first_smile5->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile5->img); ?>" class="edit" >
                         </div>
                        <?php }else{ ?>
                            <div class="edit_img  placeholder_div" >
                            <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                        </div>
                        <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        
        <div class="thirteen">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/l6-bg.png" class="bg-image">   
                <div class="top-sec">
                    <div class="content">
                        <h2> Nothing like a  </h2>
                        <img src="<?php echo base_url('assets/'); ?>images2/laugh.png" class="laugh">  
                        <h2> Laugh </h2>
                    </div>
                    
                    <ul>
                        
                    <li>
                    <?php if(@$laugh1){ ?>
                        <div class="edit_img" data-id="<?php echo @$laugh1->id; ?>" data-img="<?php echo base_url(@$laugh1->img); ?>"  ><img src="<?php echo base_url(@$laugh1->img); ?>" class="edit" > </div>
                        <?php }else{ ?>
                            <div class="edit_img  placeholder_div" >
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                        </div>
                            <?php } ?>
                    </li>
                      
                        
                    <li>
                    <?php if(@$laugh2){ ?>
                        <div class="edit_img" data-id="<?php echo @$laugh2->id; ?>" data-img="<?php echo base_url(@$laugh2->img); ?>"  ><img src="<?php echo base_url(@$laugh2->img); ?>" class="edit" > </div>
                        <?php }else{ ?>
                            <div class="edit_img  placeholder_div" >
                            <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                        </div>
                            <?php } ?>
                    </li>
                       
                    </ul>
                </div>
            </div>
           
            </div>
            
               <div class="forthteen">
        
                    <div class="main-bg"> 
                        <img src="<?php echo base_url('assets/'); ?>images2/r6-bg.png" class="bg-image">
                        <div class="top-sec">
                            <ul class="first">
                               
                                <li>
                                <?php if(@$laugh3){ ?>
                                    <div class="edit_img h-100" data-id="<?php echo @$laugh3->id; ?>" data-img="<?php echo base_url(@$laugh3->img); ?>" ><img src="<?php echo base_url(@$laugh3->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                            <?php } ?>
                                </li>
                                <li>
                                <?php if(@$laugh4){ ?>
                                    <div class="edit_img h-100" data-id="<?php echo @$laugh4->id; ?>" data-img="<?php echo base_url(@$laugh4->img); ?>" ><img src="<?php echo base_url(@$laugh4->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                            <?php } ?>
                                </li>
                               
                               
                            </ul>
                            <ul class="second">
                            
                                 
                    <li>
                    <?php if(@$laugh5){ ?>
                        <div class="edit_img h-100" data-id="<?php echo @$laugh5->id; ?>" data-img="<?php echo base_url(@$laugh5->img); ?>"  ><img src="<?php echo base_url(@$laugh5->img); ?>" class="edit" > </div>
                        <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                            <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                        </div>
                            <?php } ?>
                    </li>
                      
                            </ul>
                        </div> 
                    </div>
                    
            </div>
            
              <div class="seventeen">
                  
                <div class="main-bg">
                    <div class="top-sec">
                        <h2> A Foodie <span>in the making</span>  </h2>
                        <ul>
                            
                             <li>
                             <?php if($foody1){ ?>
                                 <div class="edit_img"  data-id="<?php echo @$foody1->id; ?>" data-img="<?php echo base_url(@$foody1->img); ?>"><img src="<?php echo base_url(@$foody1->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                           
                            <li class="jar"><img src="<?php echo base_url('assets/'); ?>images2/jar.png"> </li>
                             
                             <li>
                             <?php if($foody2){ ?>
                                 <div class="edit_img"  data-id="<?php echo @$foody2->id; ?>" data-img="<?php echo base_url(@$foody2->img); ?>"><img src="<?php echo base_url(@$foody2->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                          
                        </ul>
                    </div>
                </div>
           
            </div>
            
               <div class="eighteen">
                   
                    <div class="main-bg"> 
                        <img src="<?php echo base_url('assets/'); ?>images2/r8-bg.png" class="bg-image">  
                        <div class="top-sec">
                            <ul class="second">
                                
                             <li>
                             <?php if($foody3){ ?>
                                 <div class="edit_img"  data-id="<?php echo @$foody3->id; ?>" data-img="<?php echo base_url(@$foody3->img); ?>"><img src="<?php echo base_url(@$foody3->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                          
                            </ul>
                            <ul class="first">
                               
                                
                              <li>
                             <?php if($foody4){ ?>
                                 <div class="edit_img h-100"  data-id="<?php echo @$foody4->id; ?>" data-img="<?php echo base_url(@$foody4->img); ?>"><img src="<?php echo base_url(@$foody4->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                                <li>
                             <?php if($foody5){ ?>
                                 <div class="edit_img h-100"  data-id="<?php echo @$foody5->id; ?>" data-img="<?php echo base_url(@$foody5->img); ?>"><img src="<?php echo base_url(@$foody5->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                                
                            </ul> 
                        </div>
                    </div>
        
            </div>
            
            <div class="twenty_one">
                 
                <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/'); ?>images2/l10-bg.png" class="bg-image">  
                    <div class="top-sec">
                        <ul class="second">
                           
                            <li>
                            <?php if(@$sitting1){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting1->id; ?>" data-img="<?php echo base_url(@$sitting1->img); ?>"><img src="<?php echo base_url(@$sitting1->img); ?>" class="edit"> </div> 
                                <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                            </li>
                            
                            <div class="content">
                                <h2> And you started <span>Sitting</span> </h2>
                            </div>
                        </ul>
                        <ul class="first">
                        <li>  <?php if(@$sitting2){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting2->id; ?>" data-img="<?php echo base_url(@$sitting2->img); ?>"><img src="<?php echo base_url(@$sitting2->img); ?>" class="edit"> </div> 
                                <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                            </li>
                            
                       </li>
                           
                            <li> <?php if(@$sitting3){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting3->id; ?>" data-img="<?php echo base_url(@$sitting3->img); ?>"><img src="<?php echo base_url(@$sitting3->img); ?>" class="edit"> </div> 
                              
                                <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                            </li>
                            
                        </ul>
                    </div>
                </div>
  
            </div>
             <div class="twenty_two">
             
                 <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images2/r10-bg.png" class="bg-image"> 
                    <div class="top-sec">
                        <ul>
                          
                            <li>  <?php if(@$sitting4){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting4->id; ?>" data-img="<?php echo base_url(@$sitting4->img); ?>"><img src="<?php echo base_url(@$sitting4->img); ?>" class="edit"> </div> 
                                <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                            </li>
                            
                       </li>
                           
                            <li> <?php if(@$sitting5){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting5->id; ?>" data-img="<?php echo base_url(@$sitting5->img); ?>"><img src="<?php echo base_url(@$sitting5->img); ?>" class="edit"> </div> 
                              
                                <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                            </li>
                            
                            
                            <img src="<?php echo base_url('assets/'); ?>images2/car.png" class="car">
                        </ul>
                        
                    </div>
            
            
                </div>
               
            </div>
            
            
             <div class="fifteen">
                 
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images2/l9-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                           
                           
                                <li>
                                <?php if($standing1){ ?>
                                    <div class="edit_img " data-id="<?php echo @$standing1->id; ?>" data-img="<?php echo base_url(@$standing1->img); ?>" ><img src="<?php echo base_url(@$standing1->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                                <li>
                                <?php if($standing2){ ?>
                                    <div class="edit_img " data-id="<?php echo @$standing2->id; ?>" data-img="<?php echo base_url(@$standing2->img); ?>" ><img src="<?php echo base_url(@$standing2->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                               
                               
                        </ul>
                        <h2> Crawling <span>&</span>  Standing </h2>
                    </div>
                </div>
               
            </div>   
             <div class="sixteen">
                <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/r7-bg.png" class="bg-image"> 
                    <div class="top-sec">
                        <ul>
                        
                            <li>
                            <?php if($standing3){ ?>
                                <div class="edit_img"  data-id="<?php echo @$standing3->id; ?>" data-img="<?php echo base_url(@$standing3->img); ?>"><img src="<?php echo base_url(@$standing3->img); ?>" class="edit"> </div> 
                                <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                             
                            </li>
                            <li>
                            <?php if($standing4){ ?>
                                <div class="edit_img"  data-id="<?php echo @$standing4->id; ?>" data-img="<?php echo base_url(@$standing4->img); ?>"><img src="<?php echo base_url(@$standing4->img); ?>" class="edit"> </div> 
                                <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                             
                            </li>
                           
                            
                            
                            <li class="panda"><img src="<?php echo base_url('assets/'); ?>images2/shoes2.png" > </li>
                           
                             <li>
                             <?php if($standing5){ ?>
                                 <div class="edit_img"  data-id="<?php echo @$standing5->id; ?>" data-img="<?php echo base_url(@$standing5->img); ?>"><img src="<?php echo base_url(@$standing5->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                           
                        </ul>
                        
                    </div>
                </div>
            </div>
            
            
            
               <div class="ninteen">
                   
                    <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images2/l9-bg.jpg" class="bg-image">
                
                        <div class="section">
                            <div class="right-sec">                
                            </div>
                            <div class="left-sec">
                               
                                <li> <?php if($birthday1){ ?>
                                    <div class="edit_img " data-id="<?php echo @$birthday1->id; ?>" data-img="<?php echo base_url(@$birthday1->img); ?>"><img src="<?php echo base_url(@$birthday1->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                                <li> <?php if($birthday2){ ?>
                                    <div class="edit_img " data-id="<?php echo @$birthday2->id; ?>" data-img="<?php echo base_url(@$birthday2->img); ?>"><img src="<?php echo base_url(@$birthday2->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                </li>
                               
                            </div> 
                        </div>  
                    </div>
                 
            </div>
             <div class="twenty">
                   <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images2/r9-bg.jpg" class="bg-image"> 
                        <div class="top-sec">
                            <ul>
                                
                                <li>
                                <?php if($birthday3){ ?>
                                     <div class="edit_img h-100" data-id="<?php echo @$birthday3->id; ?>" data-img="<?php echo base_url(@$birthday3->img); ?>"><img src="<?php echo base_url(@$birthday3->img); ?>"  class="edit"> </div> 
                                     <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                    </li>
                                    <li>
                                <?php if($birthday4){ ?>
                                     <div class="edit_img h-100" data-id="<?php echo @$birthday4->id; ?>" data-img="<?php echo base_url(@$birthday4->img); ?>"><img src="<?php echo base_url(@$birthday4->img); ?>"  class="edit"> </div> 
                                     <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                    </li>
                                    <li>
                                <?php if($birthday5){ ?>
                                     <div class="edit_img h-100" data-id="<?php echo @$birthday5->id; ?>" data-img="<?php echo base_url(@$birthday5->img); ?>"><img src="<?php echo base_url(@$birthday5->img); ?>"  class="edit"> </div> 
                                     <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                                    </li>
                             

                            </ul>
                        </div>
                
                
                    </div>

            </div>
            
             
        
        <div class="first">
                <div class="main-bg">

                    <img src="<?php echo base_url('assets/'); ?>images2/back-bg.jpg" class="bg-image">   
                        <div class="top-sec">
                            <img src="<?php echo base_url('assets/'); ?>images2/logo.png" class="logo">
                        </div>
                    </div>
               

               
                
        </div>
    </div>
</section>




	<div class="owl-carousel owl-theme" id="mobile_album">
        <div class="item">
      <div class="second">
            
            <div class="main-bg">
                <div class="top-sec">
                    <div class="left-sec">
                        <img src="<?php echo base_url('assets/'); ?>images2/front-2.png" class="album-img"/>
                        <?php if(@$first_page->img){ ?>
                        <img src="<?php echo base_url(@$first_page->img); ?>" class="baby-img"/>
                        <?php } ?>
                    </div>
                    <div class="right-sec">                
                        <img src="<?php echo base_url('assets/'); ?>images2/front-1.png" class="album-img"/>
                        <div class="bottom-sec">
                            <p> <?php echo @$first_page->name; ?></p>
                            <img src="<?php echo base_url('assets/'); ?>images2/foot.png" class="foot" />
                        </div>
                    </div>
                </div>
                <div class="bottom-sec">
                    <div class="title-bot">
                        <h3> Welcome <span>to the </span>World   </h3>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
        <div class="item">
          <div class="third">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/blue_l1-bg.png" class="bg-image">   
                <div class="top-sec">
                     <?php if(@$baby_shower1){ ?>
                    <div class="edit_img " style="width: 80%;margin:auto;" data-id="<?php echo @$baby_shower1->id; ?>" data-img="<?php echo base_url(@$baby_shower1->img); ?>"><img src="<?php echo base_url($baby_shower1->img); ?>" class="edit"> </div>
                   <?php }else{ ?>
                                        <div class="edit_img placeholder_div" style="width: 80%;margin:auto;" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                    <h2> "Yay!<span > We are expecting!</span>  </h2>
                </div>
            </div>
        </div>
        </div>
        
        <div class="item">
        
         <div class="forth">
            <div class="main-bg"> 
                <div class="top-sec">
                    <ul>
                         
                        <li>
                        <?php if(@$baby_shower2){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_shower2->id; ?>" data-img="<?php echo base_url(@$baby_shower2->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower2->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" style="height:100%;" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li>
                        <?php if(@$baby_shower4){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_shower4->id; ?>" data-img="<?php echo base_url(@$baby_shower4->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower4->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" style="height:100%;" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                       
                   
                    </ul>
                    <ul class="second">
                    <li>
                        <?php if(@$baby_shower3){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_shower3->id; ?>" data-img="<?php echo base_url(@$baby_shower3->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower3->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" style="height:100%;" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li>
                        <?php if(@$baby_shower5){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$baby_shower5->id; ?>" data-img="<?php echo base_url(@$baby_shower5->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower5->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" style="height:100%;" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
   
        </div>
        </div>
        <div class="item">
          
        <div class="fifth">
            
                <div class="main-bg"> 
                    <div class="top-sec">
                        <h2> Mom and Dad</span>  </h2>
                        <?php if(@$mom_dad1){ ?>
                        <div class="edit_img " style="width:85%;" data-id="<?php echo @$mom_dad1->id; ?>" data-img="<?php echo base_url(@$mom_dad1->img); ?>"><img src="<?php echo base_url(@$mom_dad1->img); ?>" class="edit"> </div>
                        <?php }else{ ?>
                                        <div class="edit_img placeholder_div" style="width:85%;" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                    </div>
                </div>
    
        
        </div>
        </div>
        <div class="item">
        
          <div class="sixth">
        
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/r2-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <ul>
                        
                        <li>
                        <?php if(@$mom_dad2){ ?>
                            <div class="edit_img" data-id="<?php echo @$mom_dad2->id; ?>" data-img="<?php echo base_url(@$mom_dad2->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad2->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad3){ ?>
                            <div class="edit_img" data-id="<?php echo @$mom_dad3->id; ?>" data-img="<?php echo base_url(@$mom_dad3->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad3->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad4){ ?>
                            <div class="edit_img" data-id="<?php echo @$mom_dad4->id; ?>" data-img="<?php echo base_url(@$mom_dad4->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad4->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad5){ ?>
                            <div class="edit_img" data-id="<?php echo @$mom_dad5->id; ?>" data-img="<?php echo base_url(@$mom_dad5->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad5->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        
                    </ul>
                    <div class="right-side">
                        <img src="<?php echo base_url('assets/'); ?>images2/arrows.png" class="arrows"> 
                        <h2> Dear Love </h2>
                        <p>We love you to the moon and back</p>
                            <img src="<?php echo base_url('assets/'); ?>images2/slide.png" class="slide"> 
                    </div>
                </div>
            </div>
       
        </div>
        </div>
        <div class="item">
         <div class="seventh">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/l3-bg.jpg" class="bg-image">
        
                <div class="section">
                    
                   
                <div class="left-sec">
                <?php if(@$baby_arrival){ ?>
                        <div class="edit_img" data-id="<?php echo @$baby_arrival->id; ?>" data-img="<?php echo base_url(@$baby_arrival->img); ?>"  >
                        <img src="<?php echo base_url($baby_arrival->img); ?>" class=" edit">  </div> 
                        <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
               </div> 
            
                    <div class="right-sec">
                        <div class="title-bot">
                            <h3> It's been a long long wait, for this date!    </h3>
                            <img src="<?php echo base_url('assets/'); ?>images2/bird.png" />
                        </div>
                        
                    </div>
                </div>  
            </div>
           
        </div>
        </div>
        
        <div class="item">
       <div class="eighth">
            <div class="main-bg"> 
                <div class="top-sec">
                     <ul>
                      
                        <li> <?php if(@$baby_arrival2){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival2->id; ?>" data-img="<?php echo base_url(@$baby_arrival2->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival2->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li> <?php if(@$baby_arrival3){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival3->id; ?>" data-img="<?php echo base_url(@$baby_arrival3->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival3->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li> <?php if(@$baby_arrival4){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival4->id; ?>" data-img="<?php echo base_url(@$baby_arrival4->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival4->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li> <?php if(@$baby_arrival5){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival5->id; ?>" data-img="<?php echo base_url(@$baby_arrival5->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival5->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        
                        
                    </ul>

                </div>
            </div>
       
            
        </div>
        </div>
        <div class="item">
        <div class="ninth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/l4-bg.jpg" class="bg-image">
        
                <div class="section">
                   
                    <div class="left-sec">
                    <?php if(@$welcome_home1){ ?>
                         <div class="edit_img h-100" data-id="<?php echo @$welcome_home1->id; ?>" data-img="<?php echo base_url(@$welcome_home1->img); ?>">
                             <img src="<?php echo base_url(@$welcome_home1->img); ?>" class="edit" >    
                    </div> 
                    <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                    </div> 
                    
                    <div class="right-sec">
                        <div class="title-bot">
                            <h3> Home is <img src="<?php echo base_url('assets/'); ?>images2/heart.png"  /> </h3> 
                            <h3><img src="<?php echo base_url('assets/'); ?>images2/arrows.png" /> where Love is  </h3>
                        </div>
                        
                    </div>
                </div>  
            </div>
          
        </div>
        </div>
        
        <div class="item">
         <div class="tenth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/r4-bg.png" class="bg-image">   
                <div class="top-sec">
                    <div class="right-side">
                        <img src="<?php echo base_url('assets/'); ?>images2/teddy.png" class="w-50"> 
                        <h2> Always Smile My Child </h2>
                    </div>
                    
                    <ul>
                        
                        <li> 
                        <?php if(@$welcome_home2){ ?>
                        <div class="edit_img h-100" data-id="<?php echo @$welcome_home2->id; ?>" data-img="<?php echo base_url(@$welcome_home2->img); ?>">
                            <img src="<?php echo base_url(@$welcome_home2->img); ?>" class="edit">  </div>
                            <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li> 
                        <?php if(@$welcome_home3){ ?>
                        <div class="edit_img h-100" data-id="<?php echo @$welcome_home3->id; ?>" data-img="<?php echo base_url(@$welcome_home3->img); ?>">
                            <img src="<?php echo base_url(@$welcome_home3->img); ?>" class="edit">  </div>
                            <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li> 
                        <?php if(@$welcome_home4){ ?>
                        <div class="edit_img h-100" data-id="<?php echo @$welcome_home4->id; ?>" data-img="<?php echo base_url(@$welcome_home4->img); ?>">
                            <img src="<?php echo base_url(@$welcome_home4->img); ?>" class="edit">  </div>
                            <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li> 
                        <?php if(@$welcome_home5){ ?>
                        <div class="edit_img h-100" data-id="<?php echo @$welcome_home5->id; ?>" data-img="<?php echo base_url(@$welcome_home5->img); ?>">
                            <img src="<?php echo base_url(@$welcome_home5->img); ?>" class="edit">  </div>
                            <?php }else{ ?>
                                        <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                      
                   
                    </ul>
                </div>
            </div> 
             
             
       
        </div>
        </div>
        <div class="item">
            <div class="eleven">
            
            <div class="main-bg"> 
                <img src="<?php echo base_url('assets/'); ?>images2/l5-bg.jpg" class="bg-image">
                <div class="top-sec">
                    <?php if(@$first_smile){ ?>
                    <div class="edit_img" data-id="<?php echo @$first_smile->id; ?>" data-img="<?php echo base_url(@$first_smile->img); ?>"><img src="<?php echo base_url(@$first_smile->img); ?>" class="baby-img edit">     </div> 
                    <?php }else{ ?>
                                        <div class="edit_img  placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                     <div class="title-bot">
                        <h3> You make us </h3> 
                        <h3> <img src="<?php echo base_url('assets/'); ?>images2/rainbow.png" /> Smile   </h3>
                    </div>
                </div>
            </div>
            

        </div>
        </div>
        <div class="item">
            <div class="twelve">
            
                <img src="<?php echo base_url('assets/'); ?>images2/r5-bg.png" class="bg-image">
            <div class="main-bg">
                <div class="top-sec">
                    <ul>
                        
                        <li>
                        <?php if(@$first_smile2){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile2->id; ?>" data-img="<?php echo base_url(@$first_smile2->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile2->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                                        <div class="edit_img  placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li>
                        <?php if(@$first_smile3){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile3->id; ?>" data-img="<?php echo base_url(@$first_smile3->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile3->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                                        <div class="edit_img  placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li>
                        <?php if(@$first_smile4){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile4->id; ?>" data-img="<?php echo base_url(@$first_smile4->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile4->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                                        <div class="edit_img  placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        <li>
                        <?php if(@$first_smile5){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile5->id; ?>" data-img="<?php echo base_url(@$first_smile5->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile5->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                                        <div class="edit_img  placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?> 
                        </li>
                        
                    </ul>
                </div>
            </div>

        </div>
            
        </div>
        
        
        <div class="item">
             <div class="thirteen">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/l6-bg.png" class="bg-image">   
                <div class="top-sec">
                    <div class="content">
                        <h2> Nothing like a  </h2>
                        <img src="<?php echo base_url('assets/'); ?>images2/laugh.png" class="laugh">  
                        <h2> Laugh </h2>
                    </div>
                    
                    <ul>
                        
                    <li>
                    <?php if(@$laugh1){ ?>
                        <div class="edit_img" data-id="<?php echo @$laugh1->id; ?>" data-img="<?php echo base_url(@$laugh1->img); ?>"  ><img src="<?php echo base_url(@$laugh1->img); ?>" class="edit" > </div>
                        <?php }else{ ?>
                            <div class="edit_img placeholder_div" >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                      
                        
                    <li>
                    <?php if(@$laugh2){ ?>
                        <div class="edit_img" data-id="<?php echo @$laugh2->id; ?>" data-img="<?php echo base_url(@$laugh2->img); ?>"  ><img src="<?php echo base_url(@$laugh2->img); ?>" class="edit" > </div>
                        <?php }else{ ?>
                            <div class="edit_img placeholder_div" >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                      
                    </ul>
                </div>
            </div>
           
            </div>
        </div>
        <div class="item">
              <div class="forthteen">
        
                    <div class="main-bg"> 
                        <img src="<?php echo base_url('assets/'); ?>images2/r6-bg.png" class="bg-image">
                        <div class="top-sec">
                            <ul class="first">
                              
                                <li>
                                <?php if(@$laugh3){ ?>
                                    <div class="edit_img h-100" data-id="<?php echo @$laugh3->id; ?>" data-img="<?php echo base_url(@$laugh3->img); ?>" ><img src="<?php echo base_url(@$laugh3->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                                </li>
                                <li>
                                <?php if(@$laugh4){ ?>
                                    <div class="edit_img h-100" data-id="<?php echo @$laugh4->id; ?>" data-img="<?php echo base_url(@$laugh4->img); ?>" ><img src="<?php echo base_url(@$laugh4->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                                </li>
                                
                               
                            </ul>
                            <ul class="second">
                            
                                
                    <li>
                    <?php if(@$laugh5){ ?>
                        <div class="edit_img h-100" data-id="<?php echo @$laugh5->id; ?>" data-img="<?php echo base_url(@$laugh5->img); ?>"  ><img src="<?php echo base_url(@$laugh5->img); ?>" class="edit" > </div>
                        <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                                <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                      
                            </ul>
                        </div> 
                    </div>
                    
            </div>
        </div>
            
            <div class="item">
             
              <div class="seventeen">
                  
                <div class="main-bg">
                    <div class="top-sec">
                        <h2> A Foodie <span>in the making</span>  </h2>
                        <ul>
                            
                             <li> <?php if($foody1){ ?>
                                 <div class="edit_img"  data-id="<?php echo @$foody1->id; ?>" data-img="<?php echo base_url(@$foody1->img); ?>"><img src="<?php echo base_url(@$foody1->img); ?>" class="edit"> </div> 
                             <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                         
                            <li class="jar"><img src="<?php echo base_url('assets/'); ?>images2/jar.png"> </li>
                             
                             <li>
                             <?php if($foody2){ ?>
                                 <div class="edit_img"  data-id="<?php echo @$foody2->id; ?>" data-img="<?php echo base_url(@$foody2->img); ?>"><img src="<?php echo base_url(@$foody2->img); ?>" class="edit"> </div> 
                             <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                         
                        </ul>
                    </div>
                </div>
           
            </div>
        </div>
            
        <div class="item">
          <div class="eighteen">
                   
                    <div class="main-bg"> 
                        <img src="<?php echo base_url('assets/'); ?>images2/r8-bg.png" class="bg-image">  
                        <div class="top-sec">
                            <ul class="second">
                                
                             <li>
                             <?php if($foody3){ ?>
                                 <div class="edit_img"  data-id="<?php echo @$foody3->id; ?>" data-img="<?php echo base_url(@$foody3->img); ?>"><img src="<?php echo base_url(@$foody3->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                          
                            </ul>
                            <ul class="first">
                               
                                
                              <li>
                             <?php if($foody4){ ?>
                                 <div class="edit_img  h-100"  data-id="<?php echo @$foody4->id; ?>" data-img="<?php echo base_url(@$foody4->img); ?>"><img src="<?php echo base_url(@$foody4->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                            <li>
                             <?php if($foody5){ ?>
                                 <div class="edit_img  h-100"  data-id="<?php echo @$foody5->id; ?>" data-img="<?php echo base_url(@$foody5->img); ?>"><img src="<?php echo base_url(@$foody5->img); ?>" class="edit"> </div> 
                                 <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                                
                            </ul> 
                        </div>
                    </div>
        
            </div>
        </div>
            <div class="item">
             <div class="twenty_one">
                 
                <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/'); ?>images2/l10-bg.png" class="bg-image">  
                    <div class="top-sec">
                        <ul class="second">
                          
                            <li>
                            <?php if(@$sitting1){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting1->id; ?>" data-img="<?php echo base_url(@$sitting1->img); ?>"><img src="<?php echo base_url(@$sitting1->img); ?>" class="edit"> </div> 
                                <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                           
                            <div class="content">
                                <h2> And you started <span>Sitting</span> </h2>
                            </div>
                        </ul>
                        <ul class="first">

                        <li>
                            <?php if(@$sitting2){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting2->id; ?>" data-img="<?php echo base_url(@$sitting2->img); ?>"><img src="<?php echo base_url(@$sitting2->img); ?>" class="edit"> </div> 
                            <?php }else{ ?>
                                    <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                       </li>
                        <li>
                            <?php if(@$sitting3){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting3->id; ?>" data-img="<?php echo base_url(@$sitting3->img); ?>"><img src="<?php echo base_url(@$sitting3->img); ?>" class="edit"> </div> 
                            <?php }else{ ?>
                                    <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                       </li>
                            
                        </ul>
                    </div>
                </div>
  
            </div>
        </div>
            
        <div class="item">
           <div class="twenty_two">
             
                 <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images2/r10-bg.png" class="bg-image"> 
                    <div class="top-sec">
                        <ul>
                          
                            <li>
                            <?php if(@$sitting4){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting4->id; ?>" data-img="<?php echo base_url(@$sitting4->img); ?>"><img src="<?php echo base_url(@$sitting4->img); ?>" class="edit"> </div> 
                            <?php }else{ ?>
                                    <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                       </li>
                           
                            <li>
                            <?php if(@$sitting5){ ?>
                                <div class="edit_img h-100" data-id="<?php echo @$sitting5->id; ?>" data-img="<?php echo base_url(@$sitting5->img); ?>"><img src="<?php echo base_url(@$sitting5->img); ?>" class="edit"> </div> 
                            <?php }else{ ?>
                                    <div class="edit_img h-100 placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                        </li>
                           
                            <img src="<?php echo base_url('assets/'); ?>images2/car.png" class="car">
                        </ul>
                        
                    </div>
            
            
                </div>
               
            </div>
        </div>
        
        
            
        <div class="item">
          <div class="fifteen">
                 
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images2/l9-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                           
                           
                                <li>
                                    <?php if($standing1){ ?>
                                    <div class="edit_img " data-id="<?php echo @$standing1->id; ?>" data-img="<?php echo base_url(@$standing1->img); ?>" ><img src="<?php echo base_url(@$standing1->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                                </li>
                                <li>
                                    <?php if($standing2){ ?>
                                    <div class="edit_img " data-id="<?php echo @$standing2->id; ?>" data-img="<?php echo base_url(@$standing2->img); ?>" ><img src="<?php echo base_url(@$standing2->img); ?>"  class="edit"> </div> 
                                    <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                                </li>
                                
                               
                        </ul>
                        <h2> Crawling <span>&</span>  Standing </h2>
                    </div>
                </div>
               
            </div>  
        </div>
        
        <div class="item">
        <div class="sixteen">
                <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images2/r7-bg.png" class="bg-image"> 
                    <div class="top-sec">
                        <ul>
                          
                            <li>
                            <?php if($standing3){ ?>
                                <div class="edit_img"  data-id="<?php echo @$standing3->id; ?>" data-img="<?php echo base_url(@$standing3->img); ?>"><img src="<?php echo base_url(@$standing3->img); ?>" class="edit"> </div> 
                                <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>

                            <li>
                            <?php if($standing4){ ?>
                                <div class="edit_img"  data-id="<?php echo @$standing4->id; ?>" data-img="<?php echo base_url(@$standing4->img); ?>"><img src="<?php echo base_url(@$standing4->img); ?>" class="edit"> </div> 
                                <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                           
                            
                            
                            <li class="panda"><img src="<?php echo base_url('assets/'); ?>images2/shoes2.png" > </li>
                           
                             <li>
                             <?php if($standing5){ ?>
                                 <div class="edit_img"  data-id="<?php echo @$standing5->id; ?>" data-img="<?php echo base_url(@$standing5->img); ?>"><img src="<?php echo base_url(@$standing5->img); ?>" class="edit"> </div> 
                             <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                            </li>
                           
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
            
        
        <div class="item">
          
               <div class="ninteen">
                   
                    <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images2/l9-bg.jpg" class="bg-image">
                
                        <div class="section">
                            <div class="right-sec">                
                            </div>
                            <div class="left-sec">
                               
                                <li>
                                    <?php if($birthday1){ ?>
                                     <div class="edit_img " data-id="<?php echo @$birthday1->id; ?>" data-img="<?php echo base_url(@$birthday1->img); ?>"><img src="<?php echo base_url(@$birthday1->img); ?>"  class="edit"> </div> 
                                     <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                                    </li>

                                    <li>
                                    <?php if($birthday2){ ?>
                                     <div class="edit_img " data-id="<?php echo @$birthday2->id; ?>" data-img="<?php echo base_url(@$birthday2->img); ?>"><img src="<?php echo base_url(@$birthday2->img); ?>"  class="edit"> </div> 
                                     <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                                    </li>
                              
                            </div> 
                        </div>  
                    </div>
                 
            </div>
        </div>
            
        <div class="item">
              <div class="twenty">
                   <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images2/r9-bg.jpg" class="bg-image"> 
                        <div class="top-sec">
                            <ul>
                               
                               <li>
                                    <?php if($birthday3){ ?>
                                     <div class="edit_img h-100" data-id="<?php echo @$birthday3->id; ?>" data-img="<?php echo base_url(@$birthday3->img); ?>"><img src="<?php echo base_url(@$birthday3->img); ?>"  class="edit"> </div> 
                                     <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                                    </li>
                                    <li>
                                    <?php if($birthday4){ ?>
                                     <div class="edit_img h-100" data-id="<?php echo @$birthday4->id; ?>" data-img="<?php echo base_url(@$birthday4->img); ?>"><img src="<?php echo base_url(@$birthday4->img); ?>"  class="edit"> </div> 
                                     <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                                    </li>
                                    <li>
                                    <?php if($birthday5){ ?>
                                     <div class="edit_img h-100" data-id="<?php echo @$birthday5->id; ?>" data-img="<?php echo base_url(@$birthday5->img); ?>"><img src="<?php echo base_url(@$birthday5->img); ?>"  class="edit"> </div> 
                                     <?php }else{ ?>
                                    <div class="edit_img placeholder_div" >
                                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                                    </div>
                                <?php } ?>
                                    </li>
                            </ul>
                        </div>
                
                
                    </div>

            </div>
        </div>
            
            
        
        
        <div class="item">
             <div class="first">
                <div class="main-bg">

                    <img src="<?php echo base_url('assets/'); ?>images2/back-bg.jpg" class="bg-image">   
                        <div class="top-sec">
                            <img src="<?php echo base_url('assets/'); ?>images2/logo.png" class="logo">
                        </div>
                    </div>
               

               
                
        </div>
        </div>
    </div>
    
    
    
    
<!--<img id="open-me" src="http://cyberworx.co.in/mymunchkin_new/upload/home/cc8a45be86b0c469f6543ab882ab8b55.png" style="display: none;">-->



 <div class="pixie" data-scroll-section >
     <div class="text-center" id="summer_loader" style="display:none;">
         <span class="fa fa-spinner fa-spin fa-3x"></span>
         <p class="font-weight-bold ml-2">Saving Image </p>
         </div>
            <div class="some-container">
                <pixie-editor></pixie-editor>
            </div>
        </div>
      
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
 <script>

var id;
var did;
var pixie = new Pixie({
    baseUrl: '<?php echo base_url(); ?>',
    crossOrigin: true,
    onSave: function(data, name) {
        $.ajax({
        url :"<?php echo base_url('Users/EditImage'); ?>",
        method : "POST",
        data :{ img :data,name:name,id:id },
        beforeSend: function() {
        $("#summer_loader").show();
             },
             
        success:function(res){
        //alert(res);
         setTimeout(function(){
                        //$(this).unbind(e);
                      // window.location.replace(base_url+"Users/createpage"); 
                        // window.location.href='';
                        
                        $(".third").load(location.href + " .third");
                         $(".forth").load(location.href + " .forth");
                         $(".fifth").load(location.href + " .fifth");
                          $(".sixth").load(location.href + " .sixth");
                          $(".seventh").load(location.href + " .seventh");
                          $(".eighth").load(location.href + " .eighth");
                          $(".ninth").load(location.href + " .ninth");
                          $(".tenth").load(location.href + " .tenth");
                          $(".eleven").load(location.href + " .eleven");
                          $(".twelve").load(location.href + " .twelve");
                          $(".thirteen").load(location.href + " .thirteen");
                          $(".forthteen").load(location.href + " .forthteen");
                           $(".fifteen").load(location.href + " .fifteen");
                            $(".sixteen").load(location.href + " .sixteen");
                             $(".seventeen").load(location.href + " .seventeen");
                              $(".eighteen").load(location.href + " .eighteen");
                               $(".ninteen").load(location.href + " .ninteen");
                                $(".twenty").load(location.href + " .twenty");
                                 $(".twenty_one").load(location.href + " .twenty_one");
                                  $(".twenty_two").load(location.href + " .twenty_two");
                          
                          
                            },2000);
                             pixie.close();
        },
        complete: function() {
             $("#summer_loader").hide();
            }, 
        
        })
    },
    ui: {      
        visible: false, // whether pixie is visible initially
        mode: 'overlay',
        toolbar: {
        leftItems: [
        {
            type: 'image',
              src: "<?php echo base_url('assets/img/logo.png'); ?>",
            showInCompactMode: true,
        },
        ]
        }
    },      
});
$(document).on("click",".edit_img",function(){
    var img = $(this).data('img');
    did = $(this).data('id');
    pixie.openEditorWithImage($(this).data('img'));
    id = did;
   
});


</script>
<script>
    $(function() {
        
    //     var dev_width;
    //     var dev_height;
    //  if(window.innerWidth >= 1024){
    //       dev_width = 1000; 
    //     dev_height = 400; 
    //  } else if(window.innerWidth < 1024){
    //     dev_width = 700; 
    //     dev_height = 280; 
    //  }else if(window.innerWidth < 540){
    //      dev_width = 180; 
    //     dev_height = 60;
    //  }   
      
     $('#mybook').booklet({
         width:  1000,
        pagePadding: 0,
        height: 400,
        arrows: true,
        pageNumbers: false,
        shadows: false,
            closed: true,
        autoCenter: true
        });
});
   $('.custom-goto').click(function(e){
       var page_id = $(this).data('id');
       //alert(page_id);
        e.preventDefault();
        $('#mybook').booklet("gotopage", page_id);
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
    
</script>


    