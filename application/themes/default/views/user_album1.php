<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Great+Vibes&display=swap" rel="stylesheet">
  
<?php include_once('banner_dashboard.php'); ?>
    
<link href="<?php echo base_url('assets/'); ?>css/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

<link rel="stylesheet" href="<?php echo base_url('assets/img-editor/styles.min.css'); ?>">
<style>
    
.edit_banner{
        height: 100px;
    margin-bottom: 100px;
    background: url(http://cyberworx.co.in/mymunchkin_new/upload/banner/ad3e2bca9023dcd141afc86a1c52c669.png);
    background-size: cover;
}
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
.top-sec  h2{
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    line-height: 1.2;
    color: #f3999b;
    font-weight: 500;
    width: 55%;
    margin: auto;
}
.logo{    
    width: 220px;
}


.second .top-sec {
    width:90%;
    padding: 30px 0;
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
}

.second .top-sec:before {
    content: '';
    position: absolute;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    right: 170px;
    top: -50px;
    background: #E8B6BC;
}

.second .top-sec:after {
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    right: 6%;
    top: 58%;
    background: #E6CCB8;
}
.second .main-bg {
    width: 100%;
    height: 400px;
    margin: 0 auto;
    padding: 30px 0 10px;
    background: #EFE3E5;
}
.second .top-sec .album-img{
    width: 80%;
    height: 230px;
    object-fit: contain;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 10%;
}

.second .flower img {
    width: 75px;
    position: absolute;
    top: 0;
    left: 40px;
    z-index: 9;
}
.second .flower img:nth-child(3) {
    width: 45px;
    top: 72px;
}
.second .flower img:nth-child(1) {
    width: 45px;
    top: 5px;
    left: 115px;
}
.second .bottom-sec {
    width: 60%;
    margin-left: auto;
    position: relative;
    margin-right: 50px;
}
.second .title-bot p{
    font-family: 'Baloo 2', cursive;
    text-align: left;
    font-size: 32px;
    color: #E7848A;
    margin: 0;
    font-weight: 500;
    margin-left: 40px;
}
.second .title-bot h3{
    text-align: left;
    font-size: 70px;
    font-family: 'Great Vibes', cursive;
    line-height: 1;
    margin: -75px 20px -10px;
    color: #805A5C;
    font-weight: 500;
    z-index: 9;
    position: relative;
}
.second .date h3{
    font-family: 'Baloo 2', cursive;
    color: #E19764;
    font-size: 20px;
    font-weight: 200;
    margin-left: 10px;
}

.date {
    width: 10%;
}
.second .date h3 span{
    display: block;
    line-height: 1;
}
.second .unicorn img {
    width: 30%;
    position: absolute;
    bottom: -50px;
    left: 25px;
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
    height: 400px;
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
.third .top-sec  h2{
font-family: 'Great Vibes', cursive;
    font-size: 52px;
    line-height: 1.2;
    color: #805A5C;
    font-weight: 500;
    margin: auto;
    margin-bottom: 15px;
    width: 100%;
}
.third .top-sec ul{
    display: inline-flex;
    width: 65%;
    list-style: none;
    justify-content: flex-end;
    float: right;
    margin-right: 35px;
}
.third .top-sec {
    width: 100%;
}
.third .top-sec ul li{

    width: 100%;
}
.third .top-sec ul li img{
    width: 100%;
    height: 220px;
    object-fit: contain;
}



.forth .main-bg{
    width: 100%;
    height: 400px;
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
    align-items: center;
}

.forth .top-sec:before {
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    left: -15px;
    top: 15%;
    background: #E6CCB8;
}

.forth .top-sec:after {
    content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    left: -15px;
    bottom: 20%;
    background: #E8B6BC;

}
.forth .top-sec .album-img{
    width: 600px;
    height: 400px;
    object-fit: contain;
    display: flex;
    justify-content: center;
    align-items: center;
}

.forth .flower img {
    width: 130px;
    position: absolute;
    top: 25%;
    right: 2%;
}

.forth .top-sec ul{
    display: flex;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    flex-wrap: wrap;
}
.forth .top-sec ul li img {
    width: 80%;
    height: 180px;
    object-fit: contain;
}
.forth .top-sec ul li:nth-child(1) {
    width: 35%;
    margin:30px  5px 10px 20px;
    text-align: center;
}
.forth .top-sec ul li:nth-child(2) {
    width: 40%;
}
.forth .top-sec ul li:nth-child(3)  {
    margin: 10px 0 0 70px;
    width: 44%;
}
.forth .top-sec ul li:nth-child(4)  {
    width: 38%;
    margin: 0 0;
    position: relative;
    z-index: 9;
}


.fifth .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 400px;
    position: relative;
    background: #EFE3E5;
    display: flex;
}
.fifth .right-sec:before {
    content: '';
    position: absolute;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    right: 40px;
    top: -20px;
    background: #E8B6BC;
}

.fifth .right-sec:after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    right: 70px;
    bottom: 35%;
    background: #E6CCB8;
}
.fifth .title-bot h3{
    color: #805A5C;
    font-family: 'Great Vibes', cursive;
    font-size: 55px;
    font-weight: 500;
    margin: 0;
    line-height: 1.2;
}
.fifth .title-bot p{
    color: #E7848A;
    font-family: 'Baloo 2', cursive;
    font-size: 18px;
    font-weight: 400;
    line-height: 1;
}
.fifth .title-bot p span{
    font-size: 28px;
    font-weight: 500;
    display:block;
}
.fifth .title-bot img {
    width: 100%;
    margin-top: 10%;
}
.fifth .title-bot p span:last-child{
    display:inline-block;
}
.fifth .left-sec{
    width: 62%;
    margin-right: 5%;
}
.fifth .left-sec img {
    width: 100%;
    object-fit: contain;
    height: 100%;
}
.fifth .right-sec {
    align-self: center;
    width: 28%;
}


.sixth .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
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
.sixth .top-sec ul{
    display: inline-flex;
    width: 85%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.sixth .top-sec ul li{
    margin:  2px ;
}

.sixth .top-sec ul li img{
    width: 100%;
    height:150px;
    object-fit: contain;
}
.sixth .top-sec ul li:nth-child(1){
    width: 35%;
}
.sixth .top-sec ul li:nth-child(2){
    width:62%;
}
.sixth .top-sec ul li:nth-child(3){
    width: 62%;
}
.sixth .top-sec ul li:nth-child(4){
    width: 35%;
}



.seventh .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 400px;
    position: relative;
    background: #F1E6DD;
    display: flex;
}
.seventh .title-bot h3{
color: #805A5C;
    font-family: 'Great Vibes', cursive;
    font-size: 35px;
    font-weight: 500;
    line-height: 1.2;
    width: 85%;
    margin: 0 auto 10px;
}
.seventh .title-bot img{
    width: 75%;
}
.seventh .left-sec{
    width: 65%;
    position: relative;
}
.seventh .left-sec .placeholder_div img {
    width: 100% !important;
    object-fit: cover;
    height: 100% !important;
}
.seventh .left-sec img {
    width: 100%;
    object-fit: cover;
    height: 100%;
}
.seventh .right-sec {
    align-self: center;
    text-align: center;
    width: 40%;
}
.seventh .baby-img {
    position: absolute;
    width: 80% !important;
    top: 50%;
    left: 0;
    right: 0;
    height: 70% !important;
    margin: auto;
    transform: translateY(-50%);
    object-fit: contain !important;
}


.eighth .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:400px;
    display: flex;
    justify-content: center;
    align-items: center;
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
    width: 85%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.eighth .top-sec ul li{
    margin:  8px;
    width: 42%;
}

.eighth .top-sec ul li img{
    width: 100%;
    height: 170px;
    object-fit: contain;
}
.eighth .top-sec ul li:nth-child(1){
    margin-top: -20px !important;
}
.eighth .top-sec ul li:nth-child(2){
    margin-top: 5px !important;
}
.eighth .top-sec ul li:nth-child(3){
    margin-left: 40px !important;
}
.eighth .top-sec ul li:nth-child(4){
    margin-top: 5px !important;
}




.ninth .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 30px 0 10px;
    position: relative;
    height: 400px;
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
.ninth .top-sec  h2{
    font-family: 'Great Vibes', cursive;
    font-size: 50px;
    line-height: 1.2;
    color: #805A5C;
    font-weight: 500;
    margin: 0 auto 10px;
    width: 100%;
}
.ninth .top-sec ul{
    display: inline-flex;
    width: 75%;
    list-style: none;
    justify-content: flex-end;
}
.ninth .top-sec ul li{
    width: 50%;
}
.ninth .top-sec ul li img{
    width: 90%;
    height: 250px;
    object-fit: contain;
}.ninth .top-sec ul li:last-child img{
    height: 150px;
}



.tenth .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 400px;
    background: #f2e1d7;
}
.tenth .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
}

.tenth .top-sec:before {
    content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    left: -15px;
    top: 15%;
    background: #e8b6bc;
}

.tenth .top-sec:after {
    content: '';
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    left: 5px;
    bottom: 20%;
    background: #E8B6BC;
}
.tenth .top-sec ul:before {
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    right: 30px;
    top: 15%;
    background: #e6bca4;
}

.tenth .top-sec ul:after {
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    right: 52%;
    bottom: 20%;
    background: #E8B6BC;
}

.tenth .top-sec .album-img{
    width: 600px;
    height: 400px;
    object-fit: contain;
    display: flex;
    justify-content: center;
    align-items: center;
}

.tenth .top-sec ul{
    display: flex;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    flex-wrap: wrap;
}
.tenth .top-sec ul li img {
    width: 100%;
    height: 170px;
    object-fit: contain;
}
.tenth .top-sec ul li:nth-child(1) {
    width: 35%;
    margin: 30px 30px 20px 50px;
    text-align: center;
}
.tenth .top-sec ul li:nth-child(2) {
    width: 35%;
}
.tenth .top-sec ul li:nth-child(3)  {
    margin: 10px 30px 0 50px;
    width: 32%;
}
.tenth .top-sec ul li:nth-child(4)  {
    width: 50%;
    margin: -30px 0 0;
    position: relative;
    z-index: 9;
}
.tenth .top-sec ul li:nth-child(4) img{

    object-fit: contain;
}



.eleven .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height:400px;
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
.eleven .top-sec {
    margin-left: 50px;
}
.eleven .top-sec  h2{
    font-family: 'Great Vibes', cursive;
    font-size: 40px;
    line-height: 1.2;
    color: #805A5C;
    font-weight: 500;
    margin: auto;
    width: 80%;
}
.eleven .top-sec  h2 span{
    font-family: 'Great Vibes', cursive;
    font-size:60px;
    font-weight: 500;
}
.eleven .top-sec img{
    width: 70%;
    height: 220px;
    object-fit: contain;
    margin-top: 10px;
}



.twelve  .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
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
    width: 95%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.twelve .top-sec ul li{
    margin: 10px ;
    width: 42%;
}

.twelve .top-sec ul li img{
    width: 100%;
    height: 180px;
    object-fit: contain;
}
.twelve .top-sec ul li:nth-child(1) img{
    height: 160px;
}
.twelve .top-sec ul li:nth-child(3) img{
    height: 200px;
}
.twelve .top-sec ul li:nth-child(3){
margin-top: -10px;
}




.thirteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.thirteen .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.thirteen .top-sec  h2 span{

    font-size: 54px;
    font-family: 'Great Vibes', cursive;
}
.thirteen .top-sec  h2{
font-family: 'Great Vibes', cursive;
    font-size: 34px;
    line-height: 1.2;
    color: #805A5C;
    font-weight: 500;
    margin: auto;
    width: 100%;
}
.thirteen .top-sec {
    width: 100%;
}
.thirteen .top-sec ul{
    display: inline-flex;
    width: 100%;
    list-style: none;
    padding: 0;
    justify-content: center;
    margin: 0;
}
.thirteen .top-sec ul li{
    width:80%;
}
.thirteen .top-sec ul li img{
    width: 100%;
    height: 220px;
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
.forthteen .top-sec ul{
    display: inline-flex;
    width: 85%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.forthteen .top-sec ul li{
    margin:  2px ;
}

.forthteen .top-sec ul li img{
    width: 100%;
    height: 160px;
    object-fit: contain;
}
.forthteen .top-sec ul li:nth-child(1){
    width: 35%;
}
.forthteen .top-sec ul li:nth-child(2){
    width:62%;
}
.forthteen .top-sec ul li:nth-child(3){
    width: 62%;
}
.forthteen .top-sec ul li:nth-child(4){
    width: 35%;
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
}
.fifteen .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    right: 0;
    margin: auto;
    height: 100%;
}
.fifteen .top-sec  h2 span{
    font-size: 60px;
    font-family: 'Great Vibes', cursive;
}
.fifteen .top-sec  h2{
font-family: 'Great Vibes', cursive;
    font-size: 42px;
    line-height: 1.2;
    color: #805A5C;
    font-weight: 500;
    width: 100%;
    margin: auto;
}
.fifteen .top-sec {
    width: 100%;
}
.fifteen .top-sec ul{
    display: inline-flex;
    width: 95%;
    list-style: none;
    padding: 0;
    justify-content: center;
    margin: 15px 0 0;
}
.fifteen .top-sec ul li{    
    width: 55%;
}
.fifteen .top-sec ul li:first-child{
    margin-right: 15px;
    width: 45%;
}
.fifteen .top-sec ul li img{
    width: 100%;
    height: 220px;
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
.sixteen .top-sec {
    width: 100%;
    position: relative;
    display: inline-flex;
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
    height: 170px;
    object-fit: contain;
}
.sixteen .top-sec ul li:nth-child(1) {
    width: 40%;
    margin: 15px ;
    text-align: center;
}
.sixteen .top-sec ul li:nth-child(2) {
    width: 50%;
}
.sixteen .top-sec ul li:nth-child(2) img {
    height: 200px;
}
.sixteen .top-sec ul li:nth-child(4) {
    width: 42%;
    margin:  10px 0 0 10px;
}
.sixteen .top-sec ul li.panda  {
    width: 45%;
    margin: 0px 0 0;
    position: relative;
    z-index: 9;
}
.sixteen .top-sec ul li.panda img{
    object-fit: contain;
    height: 160px;
}



.seventeen .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    height: 400px;
    position: relative;
    background: #EFE3E5;
    display: flex;
}
.seventeen .right-sec:before {
    content: '';
    position: absolute;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    right: 40px;
    top: -20px;
    background: #E8B6BC;
}

.seventeen .right-sec:after {
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    right: -15px;
    bottom: 10%;
    background: #e8b6bc;
}


.seventeen .title-bot:before {
    content: '';
    position: absolute;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    right: 18%;
    top: 10%;
    background: #E8B6BC;
}

.seventeen .title-bot:after {

    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    right: 36%;
    bottom: 52%;
    background: #E6CCB8;

}

.seventeen .title-bot img{
    width: 100%;
}
.seventeen .title-bot h3{
    color: #805A5C;
    font-family: 'Great Vibes', cursive;
    font-size: 45px;
    font-weight: 500;
    margin: 0;
    text-align: center;
    line-height: 1.2;
    margin-bottom: 15px;
}
.seventeen .title-bot p{
    color: #E7848A;
    font-family: 'Baloo 2', cursive;
    font-size: 30px;
    font-weight: 400;
    line-height: 1;
    margin: 0 20px 20px;
}
.seventeen .title-bot p span{
    font-size: 40px;
    font-weight: 500;
    display:block;
}

.seventeen .title-bot p span:last-child{
    display:inline-block;
}
.seventeen .left-sec{
    width: 62%;
    margin-right: 5%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
}
.seventeen .left-sec img {
    width: 95%;
    object-fit: contain;
    height: 96%;
}
.seventeen .right-sec {
    align-self: center;
    width: 28%;
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
.eighteen .top-sec ul{
    display: inline-flex;
    width: 98%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.eighteen .top-sec ul li{
    margin:  5px 0;
}

.eighteen .top-sec ul li img{
    width: 100%;
    height: 160px;
    object-fit: contain;
}
.eighteen .top-sec ul li:nth-child(1){
    width: 45%;
}

.eighteen .top-sec ul li:nth-child(1) img{
    height: 180px;
}
.eighteen .top-sec ul li:nth-child(2){
    width:40%;
    margin-left: 10%;
}
.eighteen .top-sec ul li:nth-child(3){
    width: 40%;
    margin-right: 10%;
}
.eighteen .top-sec ul li:nth-child(4){
    width: 45%;
    margin-top: -5px;
}

.eighteen .top-sec ul li:nth-child(4) img{
    height: 170px;
}



.ninteen .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
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
.ninteen .top-sec  h2 span{
    font-size: 85px;
}
.ninteen .top-sec  h2{
    font-family: 'Great Vibes', cursive;
    font-size: 48px;
    line-height: 1.2;
    color: #805A5C;
    font-weight: 500;
    width: 100%;
    margin: auto;
}
.ninteen .top-sec {
    width: 100%;
}
.ninteen .top-sec ul{
    display: inline-flex;
    width: 95%;
    list-style: none;
    padding: 0;
    justify-content: center;
    margin: 20px 0 0;
}
.ninteen .top-sec ul li{    
    width: 80%;
    transform: rotate(8deg);
}
.ninteen  .top-sec ul li img{
    width: 100%;
    height: 200px;
    object-fit: contain;
}


.twenty  .main-bg{
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
    z-index: 9;
}
.twenty .top-sec ul{
    display: inline-flex;
    width: 85%;
    list-style: none;
    padding: 0;
    flex-wrap: wrap;
    justify-content: center;
}
.twenty .top-sec ul li{
    margin:  10px 0;
    width: 32%;
}

.twenty .top-sec ul li:nth-child(odd){
    margin-right:36%;
}
.twenty .top-sec ul li img{
    width: 100%;
    height: 165px;
    object-fit: contain;
}


.twenty_one .main-bg{
    width: 100%;
    margin: 0 auto;
    padding: 30px 0 10px;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
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
.twenty_one .top-sec  h2{
 font-family: 'Great Vibes', cursive;
    font-size: 50px;
    line-height: 1.2;
    color: #805A5C;
    font-weight: 500;
    float: left;
    text-align: left;
    margin: 0 0 0 30px;
    width: 55%;
}
.twenty_one .top-sec ul{
display: inline-flex;
    width: 68%;
    list-style: none;
    justify-content: flex-end;
    float: right;
    margin-right: 20px;
    padding: 0;
    margin-top: -50px;
}
.twenty_one .top-sec ul li:last-child{
    margin-top: -100px;
}
.twenty_one .top-sec {
    width: 100%;
}
.twenty_one .top-sec ul li{
    width: 50%;
    margin: 0 10px;

}
.twenty_one .top-sec ul li img{
    width: 100%;
    height: 230px;
    object-fit: contain;
}



.twenty_two .main-bg{
    width: 100%;
    margin: 0 auto;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
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

.twenty_two .top-sec ul{
    display: flex;
    width: 90%;
    padding: 0;
    justify-content: center;
    align-items: center;
    margin: auto;
    list-style: none;
}
.twenty_two .top-sec ul li img {
    width: 100%;
    height: 180px;
    object-fit: contain;
}
.twenty_two .top-sec ul li{
    width: 33%;
    position:relative;
    margin: 0 5px;
}
.twenty_two .top-sec ul li:nth-child(1) {
    transform: translateY(-60px);

}
.twenty_two .top-sec ul li:nth-child(3)  {
    transform: translateY(60px);
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
        height: 350px !important;
    }
    .second .top-sec .album-img {
        height: 200px;
    }
    .second .title-bot h3 {
        font-size: 58px;
        margin: -60px 20px -10px;
    }
    .second .title-bot p {
       font-size: 22px;
    }
    .third .top-sec h2 {
        font-size: 40px;
    }
    .third .top-sec ul li img {
        height: 200px;
    }
    .forth .top-sec ul li img {
        height: 155px;
    }
    .forth .top-sec ul li:nth-child(1) {
        width: 40%;
    }
    .fifth .title-bot h3 {
        font-size: 44px;
    }
    .fifth .title-bot p {
        font-size: 14px;
    }
    .fifth .right-sec:before {
        width: 40px;
        height: 40px;
    }
    .fifth .right-sec:after {
        right: 34px;
    }
    .sixth .top-sec ul li img {
        height: 140px;
    }
    .seventh .title-bot h3 {
        font-size: 30px;
        width: 90%;
    }
    .seventh .title-bot img {
        width: 70%;
        margin: 10px auto;
    }
    .eighth .top-sec ul {
        width: 90%;
    }
    .eighth .top-sec ul li {
        margin: 4px;
        width: 42%;
    }
    .eighth .top-sec ul li img {
        height: 150px;
    }
    .ninth .top-sec h2 {
        font-size: 44px;
    }
    .ninth .top-sec ul li img {
        height: 210px;
    }
    .tenth .top-sec ul li img {
        height: 150px;
    }
    .tenth .top-sec ul li:nth-child(4) {
        width: 42%;
    }
    .eleven .top-sec h2 {
        font-size: 36px;
    }
    .eleven .top-sec h2 span {
        font-size: 54px;
    }
    .eleven .top-sec img {
        height: 200px;
    margin: 10px auto;
    }
    .twelve .top-sec ul li:nth-child(1) img {
        height: 135px;
    }
    .twelve .top-sec ul li img {
        height: 150px;
    }
    .twelve .top-sec ul li:nth-child(3) img {
        height: 170px;
    }
    .thirteen .top-sec h2 span {
        font-size: 46px;
    }
    .thirteen .top-sec ul li img {
        height: 200px;
    }
    .forthteen .top-sec ul li img {
        height: 140px;
    }
    .fifteen .top-sec h2 {
        font-size: 36px;
    }
    .fifteen .top-sec h2 span {
        font-size: 54px;
    }
    .fifteen .top-sec ul li img {
        height: 200px;
    }
    .sixteen .top-sec ul li img {
        height: 145px;
    }
    .sixteen .top-sec ul li:nth-child(2) img {
        height: 165px;
    }
    .seventeen .title-bot h3 {
        font-size: 36px;
    }
    .eighteen .top-sec ul li:nth-child(1) img {
        height: 165px;
    }
    .eighteen .top-sec ul li img {
        height: 150px;
    }
    .eighteen .top-sec ul li:nth-child(4) img {
        height: 165px;
    }
    .ninteen .top-sec h2 {
        font-size: 42px;
    }
    .ninteen .top-sec ul li img {
        height: 180px;
    }
    .twenty .top-sec ul li img {
        height: 150px;
    }
    .twenty_one .top-sec h2 {
        font-size: 38px;
        margin: 0px 0 0 25px;
    }
    .twenty_one .top-sec ul li img {
        height: 200px;
    }
    .twenty_one .top-sec ul {
        margin-top: -15px;
    }
    .twenty_two .top-sec ul li img {
        height: 160px;
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
                    <div class="flower">                
                        <img src="<?php echo base_url('assets/'); ?>images/yellow-flower.png" />
                        <img src="<?php echo base_url('assets/'); ?>images/pink-flower.png" />
                        <img src="<?php echo base_url('assets/'); ?>images/yellow-flower.png" />
                    </div>
                    <?php if(@$first_page->img){ ?>
                    <img src="<?php echo base_url(@$first_page->img); ?>" class="album-img"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img" style="object-fit:cover;">

                            <?php } ?>
                    <div class="date"> 
                        
                        <h3>
                            <?php 
                                $date = explode(" ",@$first_page->date);
                                   
                            ?>
                             <?php echo @$date[0]; ?><span> <?php echo @$date[1]; ?></span> <?php echo @$date[2]; ?>    </h3>
                    </div>
                    
                    <div class="unicorn">                
                        <img src="<?php echo base_url('assets/'); ?>images/unicorn.png" />
                    </div>
                </div>
        
                <div class="bottom-sec">
                    <div class="title-bot">
                        <h3> Welcoming    </h3>
                        <p> <?php echo @$first_page->name; ?></p>
                    </div>
                </div>
        
        
            </div>
            
        </div>
        
        <div class="third">
    		<div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/l1-bg.png" class="bg-image">   
                <div class="top-sec">
                    <h2> "Yay! We are expecting!  </h2>
                    <ul>
                        <!-- <li><img src="images/l11.png" > </li> -->
                        <li>
                        <?php if(@$baby_shower1){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower1->img); ?>" data-id="<?php echo @$baby_shower1->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower1->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    
                    
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="forth">
        
            <div class="main-bg">
    
                <div class="top-sec">
                    <ul>
                    <li>
                        <?php if(@$baby_shower2){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower2->img); ?>" data-id="<?php echo @$baby_shower2->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower2->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_shower3){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower3->img); ?>" data-id="<?php echo @$baby_shower3->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower3->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_shower4){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower4->img); ?>" data-id="<?php echo @$baby_shower4->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower4->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_shower5){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower5->img); ?>" data-id="<?php echo @$baby_shower5->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower5->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    
                    </ul>
                    
                    <div class="flower">                
                        <img src="<?php echo base_url('assets/'); ?>images/r1-flower.png" />
                    </div>
                </div>
            </div>
        </div>
        
        <div class="fifth">
        
            <div class="main-bg">
                
                <div class="left-sec">
                <?php if(@$mom_dad1){ ?>
                    <div class="edit_img h-100"  data-id="<?php echo @$mom_dad1->id; ?>" data-img="<?php echo base_url(@$mom_dad1->img); ?>" > 
                    <img src="<?php echo base_url(@$mom_dad1->img); ?>" class="edit">  
                </div>   
                <?php } else{ ?>
                    <div class="edit_img h-100 placeholder_div"  >
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                </div> 
               
                <div class="right-sec">
                    <div class="title-bot">
                        <h3> Mom & Dad    </h3>
                        <p> We love <span>you </span>to the <span>moon </span> and back</p>
                        <img src="<?php echo base_url('assets/'); ?>images/l2-label.png" />
                    </div>
                    
                </div>
            </div>
        </div>
        
        
          <div class="sixth">
        
              <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/r2-bg.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                    <li>
                        <?php if(@$mom_dad2){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$mom_dad2->img); ?>" data-id="<?php echo @$mom_dad2->id; ?>" >
                    <img src="<?php echo base_url(@$mom_dad2->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$mom_dad3){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$mom_dad3->img); ?>" data-id="<?php echo @$mom_dad3->id; ?>" >
                    <img src="<?php echo base_url(@$mom_dad3->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$mom_dad4){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$mom_dad4->img); ?>" data-id="<?php echo @$mom_dad4->id; ?>" >
                    <img src="<?php echo base_url(@$mom_dad4->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$mom_dad5){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$mom_dad5->img); ?>" data-id="<?php echo @$mom_dad5->id; ?>" >
                    <img src="<?php echo base_url(@$mom_dad5->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
         <div class="seventh">
        
              <div class="main-bg">
               
                <div class="right-sec">
                    <div class="title-bot">
                        <h3> It's been a long long wait, for this date!    </h3>
                        <img src="<?php echo base_url('assets/'); ?>images/panda.png" />
                    </div>
                    
                </div>
              
                <div class="left-sec">
                    <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" >  
                    <?php if(@$baby_arrival){ ?>
                    <div class="edit_img" data-id="<?php echo @$baby_arrival->id; ?>" data-img="<?php echo base_url(@$baby_arrival->img); ?>"  style="  position: unset;">
                    <img src="<?php echo base_url($baby_arrival->img); ?>" class="baby-img edit"> 
                 </div>  
                 <?php } else{ ?>
                    <div class="edit_img placeholder_div" style="  position: unset;" >
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid baby-img">
                    </div>
                    <?php } ?>
                </div> 
                
            </div>
        </div>
        
        <div class="eighth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                    <li>
                        <?php if(@$baby_arrival2){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_arrival2->img); ?>" data-id="<?php echo @$baby_arrival2->id; ?>" >
                    <img src="<?php echo base_url(@$baby_arrival2->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_arrival3){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_arrival3->img); ?>" data-id="<?php echo @$baby_arrival3->id; ?>" >
                    <img src="<?php echo base_url(@$baby_arrival3->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_arrival4){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_arrival4->img); ?>" data-id="<?php echo @$baby_arrival4->id; ?>" >
                    <img src="<?php echo base_url(@$baby_arrival4->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_arrival5){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_arrival5->img); ?>" data-id="<?php echo @$baby_arrival5->id; ?>" >
                    <img src="<?php echo base_url(@$baby_arrival5->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
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
                <img src="<?php echo base_url('assets/'); ?>images/l4-bg.png" class="bg-image">   
                <div class="top-sec">
                    <h2> Home is where Love is  </h2>
                    <ul>
                         
                        <li> <?php if(@$welcome_home1){ ?>
                            <div class="edit_img" data-id="<?php echo @$welcome_home1->id; ?>" data-img="<?php echo base_url(@$welcome_home1->img); ?>"  ><img src="<?php echo base_url(@$welcome_home1->img); ?>" class="edit" > </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                        </li>
                        
                         
                         <li>
                         <?php if(@$welcome_home2){ ?>
                             <div class="edit_img" data-id="<?php echo @$welcome_home2->id; ?>" data-img="<?php echo base_url(@$welcome_home2->img); ?>"  >
                             <img src="<?php echo base_url(@$welcome_home2->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                         
                    </ul>
                </div>
            </div>
        </div>
        
         <div class="tenth">
           <div class="main-bg">

                <div class="top-sec">
                    <ul>
                    <li>
                         <?php if(@$welcome_home3){ ?>
                             <div class="edit_img" data-id="<?php echo @$welcome_home3->id; ?>" data-img="<?php echo base_url(@$welcome_home3->img); ?>"  >
                             <img src="<?php echo base_url(@$welcome_home3->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$welcome_home4){ ?>
                             <div class="edit_img" data-id="<?php echo @$welcome_home4->id; ?>" data-img="<?php echo base_url(@$welcome_home4->img); ?>"  >
                             <img src="<?php echo base_url(@$welcome_home4->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$welcome_home5){ ?>
                             <div class="edit_img" data-id="<?php echo @$welcome_home5->id; ?>" data-img="<?php echo base_url(@$welcome_home5->img); ?>"  >
                             <img src="<?php echo base_url(@$welcome_home5->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                        <li><img src="<?php echo base_url('assets/'); ?>images/unicorn.png" > </li>
                    </ul>
                    
                </div>
        
        
            </div>
        </div>
        <div class="eleven">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/r5-bg.png" class="bg-image">   
                <div class="top-sec">
                    <h2> You make us <span>Smile</span>  </h2>
                   <?php if(@$first_smile){ ?>
                        <div class="edit_img" data-id="<?php echo @$first_smile->id; ?>" data-img="<?php echo base_url(@$first_smile->img); ?>"  >
                        <img src="<?php echo base_url(@$first_smile->img); ?>" class="edit" > 
                    </div>
                    <?php } else { ?>
                    <div class="edit_img placeholder_div"  >
                       <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="twelve">
         <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
        <div class="top-sec">
            <ul>
            <li>
                         <?php if(@$first_smile2){ ?>
                             <div class="edit_img" data-id="<?php echo @$first_smile2->id; ?>" data-img="<?php echo base_url(@$first_smile2->img); ?>"  >
                             <img src="<?php echo base_url(@$first_smile2->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$first_smile3){ ?>
                             <div class="edit_img" data-id="<?php echo @$first_smile3->id; ?>" data-img="<?php echo base_url(@$first_smile3->img); ?>"  >
                             <img src="<?php echo base_url(@$first_smile3->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$first_smile4){ ?>
                             <div class="edit_img" data-id="<?php echo @$first_smile4->id; ?>" data-img="<?php echo base_url(@$first_smile4->img); ?>"  >
                             <img src="<?php echo base_url(@$first_smile4->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$first_smile5){ ?>
                             <div class="edit_img" data-id="<?php echo @$first_smile5->id; ?>" data-img="<?php echo base_url(@$first_smile5->img); ?>"  >
                             <img src="<?php echo base_url(@$first_smile5->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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
                    <img src="<?php echo base_url('assets/'); ?>images/l10-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <h2> Nothing like a <br>
                            Laugh </h2>
                        <ul>
   
                         
                         <li> <?php if(@$laugh1){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh1->id; ?>" data-img="<?php echo base_url(@$laugh1->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh1->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$laugh2){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh2->id; ?>" data-img="<?php echo base_url(@$laugh2->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh2->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                         
                        </ul>
                    </div>
                </div>
            </div>
             <div class="twenty_two">
                 <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r10-bg.png" class="bg-image">   
            
                    <div class="top-sec">
                        <ul>
                             	 
                        
                        <li> <?php if(@$laugh3){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh3->id; ?>" data-img="<?php echo base_url(@$laugh3->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh3->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$laugh4){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh4->id; ?>" data-img="<?php echo base_url(@$laugh4->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh4->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$laugh5){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh5->id; ?>" data-img="<?php echo base_url(@$laugh5->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh5->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
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
                <img src="<?php echo base_url('assets/'); ?>images/l6-bg.png" class="bg-image">   
                <div class="top-sec">
                    <h2> <span>A Foodie</span> in the making </h2>
                    <ul>
                         	
                        <li>
                        <?php if(@$foody){ ?>
                            <div class="edit_img" data-id="<?php echo @$foody->id; ?>" data-img="<?php echo base_url(@$foody->img); ?>"  >
                            <img src="<?php echo base_url(@$foody->img); ?>" class="edit" > </div>
                        </li>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </ul>
                </div>
                </div>
            </div>
            
               <div class="forthteen">
        
            <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                        <li>
                         <?php if(@$foody2){ ?>
                             <div class="edit_img" data-id="<?php echo @$foody2->id; ?>" data-img="<?php echo base_url(@$foody2->img); ?>"  >
                             <img src="<?php echo base_url(@$foody2->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$foody3){ ?>
                             <div class="edit_img" data-id="<?php echo @$foody3->id; ?>" data-img="<?php echo base_url(@$foody3->img); ?>"  >
                             <img src="<?php echo base_url(@$foody3->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$foody4){ ?>
                             <div class="edit_img" data-id="<?php echo @$foody4->id; ?>" data-img="<?php echo base_url(@$foody4->img); ?>"  >
                             <img src="<?php echo base_url(@$foody4->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$foody5){ ?>
                             <div class="edit_img" data-id="<?php echo @$foody5->id; ?>" data-img="<?php echo base_url(@$foody5->img); ?>"  >
                             <img src="<?php echo base_url(@$foody5->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
             <div class="fifteen">
        <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/l7-bg.png" class="bg-image">   
        <div class="top-sec">
            <h2> And you started <span> Sitting </span></h2>
            <ul>
                	
                        <li>
                        <?php if(@$sitting1){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting1->id; ?>" data-img="<?php echo base_url(@$sitting1->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting1->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                        
                	
                        <li>
                        <?php if(@$sitting2){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting2->id; ?>" data-img="<?php echo base_url(@$sitting2->img); ?>"  >
                        <img src="<?php echo base_url(@$sitting2->img); ?>" class="edit" > 
                    </div>
                    <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                </li>
                         
            </ul>
        </div>
    </div>
            </div>   
             <div class="sixteen">
           <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/r7-bg.png" class="bg-image"> 

        <div class="top-sec">
            <ul>
               
                        <li>
                        <?php if(@$sitting3){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting3->id; ?>" data-img="<?php echo base_url(@$sitting3->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting3->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>

                    <li>
                        <?php if(@$sitting4){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting4->id; ?>" data-img="<?php echo base_url(@$sitting4->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting4->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if(@$sitting5){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting5->id; ?>" data-img="<?php echo base_url(@$sitting5->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting5->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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

        
         	 <?php if(@$standing){ ?>
                       <div class="left-sec edit_img" data-id="<?php echo @$standing->id; ?>" data-img="<?php echo base_url(@$standing->img); ?>"  ><img src="<?php echo base_url(@$standing->img); ?>" class="edit" > </div>
                       <?php } else{ ?>
                            <div class="left-sec edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
        
        <div class="right-sec">
            <div class="title-bot">
                <h3> Crawling         &        Standing    </h3>
                <img src="<?php echo base_url('assets/'); ?>images/l2-label.png" />
            </div>
            
        </div>
    </div>
            </div>
            
               <div class="eighteen">
            <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/r2-bg.png" class="bg-image">   
        <div class="top-sec">
            <ul>
            <li>
                        <?php if(@$standing2){ ?>
                            <div class="edit_img" data-id="<?php echo @$standing2->id; ?>" data-img="<?php echo base_url(@$standing2->img); ?>"  >
                            <img src="<?php echo base_url(@$standing2->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if(@$standing3){ ?>
                            <div class="edit_img" data-id="<?php echo @$standing3->id; ?>" data-img="<?php echo base_url(@$standing3->img); ?>"  >
                            <img src="<?php echo base_url(@$standing3->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>

                    <li>
                        <?php if(@$standing4){ ?>
                            <div class="edit_img" data-id="<?php echo @$standing4->id; ?>" data-img="<?php echo base_url(@$standing4->img); ?>"  >
                            <img src="<?php echo base_url(@$standing4->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if(@$standing5){ ?>
                            <div class="edit_img" data-id="<?php echo @$standing5->id; ?>" data-img="<?php echo base_url(@$standing5->img); ?>"  >
                            <img src="<?php echo base_url(@$standing5->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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
        <img src="<?php echo base_url('assets/'); ?>images/l9-bg.png" class="bg-image">   
        <div class="top-sec">
            <h2> First Birthday</h2>
            <ul>
                	
                        <li> <?php if(@$birthday){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday->id; ?>" data-img="<?php echo base_url(@$birthday->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                        
                <!-- <li><img src="images/l9-1.png" > </li> -->
            </ul>
        </div>
    </div>
            </div>
             <div class="twenty">
                    <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/r9-bg.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                    <li> <?php if(@$birthday2){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday2->id; ?>" data-img="<?php echo base_url(@$birthday2->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday2->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$birthday3){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday3->id; ?>" data-img="<?php echo base_url(@$birthday3->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday3->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$birthday4){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday4->id; ?>" data-img="<?php echo base_url(@$birthday4->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday4->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$birthday5){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday5->id; ?>" data-img="<?php echo base_url(@$birthday5->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday5->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
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

                <img src="<?php echo base_url('assets/'); ?>images/back.png" class="bg-image">   
                    <div class="top-sec">
                        <h2> <?php echo @$last_page->description; ?>  </h2>
                        <img src="<?php echo base_url('assets/'); ?>images/logo.png" class="logo">
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
                    <div class="flower">                
                        <img src="<?php echo base_url('assets/'); ?>images/yellow-flower.png" />
                        <img src="<?php echo base_url('assets/'); ?>images/pink-flower.png" />
                        <img src="<?php echo base_url('assets/'); ?>images/yellow-flower.png" />
                    </div>
                    <?php if(@$first_page->img){ ?>
                    <img src="<?php echo base_url(@$first_page->img); ?>" class="album-img"/>
                    <?php }else{ ?>
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="album-img">
                        <?php } ?>
                    <div class="date">
                        
                        <h3>
                            <?php 
                                $date = explode(" ",@$first_page->date);
                                   
                            ?>
                             <?php echo @$date[0]; ?><span> <?php echo @$date[1]; ?></span> <?php echo @$date[2]; ?>    </h3>
                    </div>
                    
                    <div class="unicorn">                
                        <img src="<?php echo base_url('assets/'); ?>images/unicorn.png" />
                    </div>
                </div>
        
                <div class="bottom-sec">
                    <div class="title-bot">
                        <h3> Welcoming    </h3>
                        <p> <?php echo @$first_page->name; ?></p>
                    </div>
                </div>
        
        
            </div>
            
        </div>
        </div>
        <div class="item">
        <div class="third">
    		<div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/l1-bg.png" class="bg-image">   
                <div class="top-sec">
                    <h2> "Yay! We are expecting!  </h2>
                    <ul>
                        <!-- <li><img src="images/l11.png" > </li> -->
                        
                        
                        <li>
                        <?php if(@$baby_shower1){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower1->img); ?>" data-id="<?php echo @$baby_shower1->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower1->img); ?>"  class= "edit" > 
                    </div>
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
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
        
        <div class="forth">
        
            <div class="main-bg">
    
                <div class="top-sec">
                    <ul>
                    <li>
                        <?php if(@$baby_shower2){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower2->img); ?>" data-id="<?php echo @$baby_shower2->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower2->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_shower3){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower3->img); ?>" data-id="<?php echo @$baby_shower3->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower3->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_shower4){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower4->img); ?>" data-id="<?php echo @$baby_shower4->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower4->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_shower5){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower5->img); ?>" data-id="<?php echo @$baby_shower5->id; ?>" >
                    <img src="<?php echo base_url(@$baby_shower5->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    
                    </ul>
                    
                    <div class="flower">                
                        <img src="<?php echo base_url('assets/'); ?>images/r1-flower.png" />
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="item">
        <div class="fifth">
        
            <div class="main-bg">
                
                <div class="left-sec">
                <?php if(@$mom_dad1){ ?>
                    <div class="edit_img h-100"  data-id="<?php echo @$mom_dad1->id; ?>" data-img="<?php echo base_url(@$mom_dad1->img); ?>" > <img src="<?php echo base_url(@$mom_dad1->img); ?>" class="edit">  </div>    
                    <?php } else{ ?>
                    <div class="edit_img h-100 placeholder_div"  >
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                </div> 
                
                <div class="right-sec">
                    <div class="title-bot">
                        <h3> Mom & Dad    </h3>
                        <p> We love <span>you </span>to the <span>moon </span> and back</p>
                        <img src="<?php echo base_url('assets/'); ?>images/l2-label.png" />
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        <div class="item">
        
          <div class="sixth">
        
              <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/r2-bg.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                    <li>
                        <?php if(@$mom_dad2){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$mom_dad2->img); ?>" data-id="<?php echo @$mom_dad2->id; ?>" >
                    <img src="<?php echo base_url(@$mom_dad2->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$mom_dad3){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$mom_dad3->img); ?>" data-id="<?php echo @$mom_dad3->id; ?>" >
                    <img src="<?php echo base_url(@$mom_dad3->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$mom_dad4){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$mom_dad4->img); ?>" data-id="<?php echo @$mom_dad4->id; ?>" >
                    <img src="<?php echo base_url(@$mom_dad4->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$mom_dad5){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$mom_dad5->img); ?>" data-id="<?php echo @$mom_dad5->id; ?>" >
                    <img src="<?php echo base_url(@$mom_dad5->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
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
         <div class="seventh">
        
              <div class="main-bg">
               
                <div class="right-sec">
                    <div class="title-bot">
                        <h3> It's been a long long wait, for this date!    </h3>
                        <img src="<?php echo base_url('assets/'); ?>images/panda.png" />
                    </div>
                    
                </div>
               
                <div class="left-sec">
                    <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" >  
                    <?php if(@$baby_arrival){ ?>
                    <div class="edit_img" data-id="<?php echo @$baby_arrival->id; ?>" data-img="<?php echo base_url(@$baby_arrival->img); ?>"  style="  position: unset;">
                    <img src="<?php echo base_url($baby_arrival->img); ?>" class="baby-img edit">  
                    </div>  
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                    </div>
                <?php } ?>
                </div> 
               
            </div>
        </div>
        </div>
        
        <div class="item">
        <div class="eighth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                    <li>
                        <?php if(@$baby_arrival2){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_arrival2->img); ?>" data-id="<?php echo @$baby_arrival2->id; ?>" >
                    <img src="<?php echo base_url(@$baby_arrival2->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_arrival3){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_arrival3->img); ?>" data-id="<?php echo @$baby_arrival3->id; ?>" >
                    <img src="<?php echo base_url(@$baby_arrival3->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_arrival4){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_arrival4->img); ?>" data-id="<?php echo @$baby_arrival4->id; ?>" >
                    <img src="<?php echo base_url(@$baby_arrival4->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    </li>
                    <li>
                        <?php if(@$baby_arrival5){ ?>
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_arrival5->img); ?>" data-id="<?php echo @$baby_arrival5->id; ?>" >
                    <img src="<?php echo base_url(@$baby_arrival5->img); ?>"  class= "edit" > 
                    </div> 
                    <?php } else{ ?>
                    <div class="edit_img placeholder_div"  >
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
                <img src="<?php echo base_url('assets/'); ?>images/l4-bg.png" class="bg-image">   
                <div class="top-sec">
                    <h2> Home is where Love is  </h2>
                    <ul>
                         
                        <li>
                        <?php if(@$welcome_home1){ ?>
                            <div class="edit_img" data-id="<?php echo @$welcome_home1->id; ?>" data-img="<?php echo base_url(@$welcome_home1->img); ?>"  >
                            <img src="<?php echo base_url(@$welcome_home1->img); ?>" class="edit" > </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                        </li>
                         
                         
                         <li>
                         <?php if(@$welcome_home2){ ?>
                             <div class="edit_img" data-id="<?php echo @$welcome_home2->id; ?>" data-img="<?php echo base_url(@$welcome_home2->img); ?>"  ><img src="<?php echo base_url(@$welcome_home2->img); ?>" class="edit" > </div>
                         <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div></div>
        
        <div class="item">
         <div class="tenth">
           <div class="main-bg">

                <div class="top-sec">
                    <ul>
                    <li>
                         <?php if(@$welcome_home3){ ?>
                             <div class="edit_img" data-id="<?php echo @$welcome_home3->id; ?>" data-img="<?php echo base_url(@$welcome_home3->img); ?>"  >
                             <img src="<?php echo base_url(@$welcome_home3->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$welcome_home4){ ?>
                             <div class="edit_img" data-id="<?php echo @$welcome_home4->id; ?>" data-img="<?php echo base_url(@$welcome_home4->img); ?>"  >
                             <img src="<?php echo base_url(@$welcome_home4->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$welcome_home5){ ?>
                             <div class="edit_img" data-id="<?php echo @$welcome_home5->id; ?>" data-img="<?php echo base_url(@$welcome_home5->img); ?>"  >
                             <img src="<?php echo base_url(@$welcome_home5->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                        <li><img src="<?php echo base_url('assets/'); ?>images/unicorn.png" > </li>
                    </ul>
                    
                </div>
        
        
            </div>
            </div>
        </div>
        <div class="item">
            <div class="eleven">
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r5-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <h2> You make us <span>Smile</span>  </h2>
                       <?php if(@$first_smile){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile->id; ?>" data-img="<?php echo base_url(@$first_smile->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="twelve">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                        <li>
                         <?php if(@$first_smile2){ ?>
                             <div class="edit_img" data-id="<?php echo @$first_smile2->id; ?>" data-img="<?php echo base_url(@$first_smile2->img); ?>"  >
                             <img src="<?php echo base_url(@$first_smile2->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$first_smile3){ ?>
                             <div class="edit_img" data-id="<?php echo @$first_smile3->id; ?>" data-img="<?php echo base_url(@$first_smile3->img); ?>"  >
                             <img src="<?php echo base_url(@$first_smile3->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$first_smile4){ ?>
                             <div class="edit_img" data-id="<?php echo @$first_smile4->id; ?>" data-img="<?php echo base_url(@$first_smile4->img); ?>"  >
                             <img src="<?php echo base_url(@$first_smile4->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$first_smile5){ ?>
                             <div class="edit_img" data-id="<?php echo @$first_smile5->id; ?>" data-img="<?php echo base_url(@$first_smile5->img); ?>"  >
                             <img src="<?php echo base_url(@$first_smile5->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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
                    <img src="<?php echo base_url('assets/'); ?>images/l10-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <h2> Nothing like a <br>
                            Laugh </h2>
                        <ul>
                        <li> <?php if(@$laugh1){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh1->id; ?>" data-img="<?php echo base_url(@$laugh1->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh1->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$laugh2){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh2->id; ?>" data-img="<?php echo base_url(@$laugh2->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh2->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
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
            <div class="twenty_two">
                 <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r10-bg.png" class="bg-image">   
            
                    <div class="top-sec">
                        <ul>
                        
                        <li> <?php if(@$laugh3){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh3->id; ?>" data-img="<?php echo base_url(@$laugh3->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh3->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$laugh4){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh4->id; ?>" data-img="<?php echo base_url(@$laugh4->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh4->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$laugh5){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh5->id; ?>" data-img="<?php echo base_url(@$laugh5->img); ?>"  >
                        <img src="<?php echo base_url(@$laugh5->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
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
                    <img src="<?php echo base_url('assets/'); ?>images/l6-bg.png" class="bg-image">   
                        <div class="top-sec">
                            <h2> <span>A Foodie</span> in the making </h2>
                            <ul>
                             	
                            <li>
                            <?php if(@$foody){ ?>
                                <div class="edit_img" data-id="<?php echo @$foody->id; ?>" data-img="<?php echo base_url(@$foody->img); ?>"  >
                                <img src="<?php echo base_url(@$foody->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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
                    <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                        <li>
                         <?php if(@$foody2){ ?>
                             <div class="edit_img" data-id="<?php echo @$foody2->id; ?>" data-img="<?php echo base_url(@$foody2->img); ?>"  >
                             <img src="<?php echo base_url(@$foody2->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$foody3){ ?>
                             <div class="edit_img" data-id="<?php echo @$foody3->id; ?>" data-img="<?php echo base_url(@$foody3->img); ?>"  >
                             <img src="<?php echo base_url(@$foody3->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$foody4){ ?>
                             <div class="edit_img" data-id="<?php echo @$foody4->id; ?>" data-img="<?php echo base_url(@$foody4->img); ?>"  >
                             <img src="<?php echo base_url(@$foody4->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                                <?php } ?>
                            </li>
                            <li>
                         <?php if(@$foody5){ ?>
                             <div class="edit_img" data-id="<?php echo @$foody5->id; ?>" data-img="<?php echo base_url(@$foody5->img); ?>"  >
                             <img src="<?php echo base_url(@$foody5->img); ?>" class="edit" >
                             </div>
                             <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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
            <div class="fifteen">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/l7-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <h2> And you started <span> Sitting </span></h2>
                        <ul>
                        <li>
                        <?php if(@$sitting1){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting1->id; ?>" data-img="<?php echo base_url(@$sitting1->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting1->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                        
                	
                        <li>
                        <?php if(@$sitting2){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting2->id; ?>" data-img="<?php echo base_url(@$sitting2->img); ?>"  >
                        <img src="<?php echo base_url(@$sitting2->img); ?>" class="edit" > 
                    </div>
                    <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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
            <div class="sixteen">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r7-bg.png" class="bg-image"> 
            
                    <div class="top-sec">
                        <ul>
                           
                        <li>
                        <?php if(@$sitting3){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting3->id; ?>" data-img="<?php echo base_url(@$sitting3->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting3->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>

                    <li>
                        <?php if(@$sitting4){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting4->id; ?>" data-img="<?php echo base_url(@$sitting4->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting4->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if(@$sitting5){ ?>
                            <div class="edit_img" data-id="<?php echo @$sitting5->id; ?>" data-img="<?php echo base_url(@$sitting5->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting5->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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
                 	 <?php if(@$standing){ ?>
                   <div class="left-sec edit_img" data-id="<?php echo @$standing->id; ?>" data-img="<?php echo base_url(@$standing->img); ?>"  >
                   <img src="<?php echo base_url(@$standing->img); ?>" class="edit" > 
                </div>
                <?php } else{ ?>
                            <div class="left-sec edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                
                    <div class="right-sec">
                        <div class="title-bot">
                            <h3> Crawling         &        Standing    </h3>
                            <img src="<?php echo base_url('assets/'); ?>images/l2-label.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="item">
            <div class="eighteen">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r2-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                        <li>
                        <?php if(@$standing2){ ?>
                            <div class="edit_img" data-id="<?php echo @$standing2->id; ?>" data-img="<?php echo base_url(@$standing2->img); ?>"  >
                            <img src="<?php echo base_url(@$standing2->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if(@$standing3){ ?>
                            <div class="edit_img" data-id="<?php echo @$standing3->id; ?>" data-img="<?php echo base_url(@$standing3->img); ?>"  >
                            <img src="<?php echo base_url(@$standing3->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>

                    <li>
                        <?php if(@$standing4){ ?>
                            <div class="edit_img" data-id="<?php echo @$standing4->id; ?>" data-img="<?php echo base_url(@$standing4->img); ?>"  >
                            <img src="<?php echo base_url(@$standing4->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if(@$standing5){ ?>
                            <div class="edit_img" data-id="<?php echo @$standing5->id; ?>" data-img="<?php echo base_url(@$standing5->img); ?>"  >
                            <img src="<?php echo base_url(@$standing5->img); ?>" class="edit" > 
                        </div>
                        <?php } else{ ?>
                            <div class="edit_img placeholder_div"  >
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
                    <img src="<?php echo base_url('assets/'); ?>images/l9-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <h2> First Birthday</h2>
                        <ul>
                        <li> <?php if(@$birthday){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday->id; ?>" data-img="<?php echo base_url(@$birthday->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
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
             <div class="twenty">
                <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r9-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                        <li> <?php if(@$birthday2){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday2->id; ?>" data-img="<?php echo base_url(@$birthday2->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday2->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$birthday3){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday3->id; ?>" data-img="<?php echo base_url(@$birthday3->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday3->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$birthday4){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday4->id; ?>" data-img="<?php echo base_url(@$birthday4->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday4->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
                                <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </li>
                    <li> <?php if(@$birthday5){ ?>
                            <div class="edit_img" data-id="<?php echo @$birthday5->id; ?>" data-img="<?php echo base_url(@$birthday5->img); ?>"  >
                        <img src="<?php echo base_url(@$birthday5->img); ?>" class="edit" >
                     </div>
                     <?php } else{ ?>
                            <div class=" edit_img placeholder_div"  >
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

                <img src="<?php echo base_url('assets/'); ?>images/back.png" class="bg-image">   
                    <div class="top-sec">
                        <h2> <?php echo @$last_page->description; ?>  </h2>
                        <img src="<?php echo base_url('assets/'); ?>images/logo.png" class="logo">
                    </div>
                </div>
                
        </div>
        </div>
    </div>
<img id="open-me" src="http://cyberworx.co.in/mymunchkin_new/upload/home/cc8a45be86b0c469f6543ab882ab8b55.png" style="display: none;">

<!-- Modal -->
<!--<div class="modal fade dashboard-color" id="add_miles" tabindex="-1" role="dialog" aria-labelledby="add_milesTitle" aria-hidden="true" style=" z-index: 99999999;">-->
<!--  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLongTitle">Add Milestones</h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body" style=" height: 100vh; overflow: auto;">-->
          
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

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

