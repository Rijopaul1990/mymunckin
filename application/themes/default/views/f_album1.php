<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Great+Vibes&display=swap" rel="stylesheet">
  

    
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    text-align:left;
    line-height: 1.2;
}
.fifth .title-bot p{
    text-align: left;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    object-fit: cover;
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
    cursor: unset;
}
.edit_img:hover:after {
    opacity:0;
}

.edit_img{
    position:relative;
}



#summer_loader {
    position: absolute;
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
    .second .top-sec .album-img {
        height: 170px;
        margin-left: 0%;
        width: 67%;
    }
    .second .date h3 {
        font-size: 16px;
    }
    .second .title-bot h3 {
        font-size: 50px;
        margin: -60px 20px -10px;
    }
    .second .unicorn img {
        bottom: -26px;
        left: 4px;
    }
    .second .title-bot p {
       font-size: 22px;
    }
    .third .top-sec h2 {
        font-size: 34px;
    }
    .third .top-sec ul li img {
        height: 180px;
    }
    .forth .top-sec ul li img {
        height: 130px;
    }
    .forth .top-sec ul li:nth-child(3) {
            margin: 10px 0 0 50px;
    }
    .forth .top-sec ul li:nth-child(1) {
        width: 40%;
    }
    .fifth .title-bot h3 {
        font-size: 38px;
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
        height: 130px;
    }
    .seventh .title-bot h3 {
        font-size: 26px;
        width: 92%;
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
        width: 41%;
    }
    .eighth .top-sec ul li img {
        height: 130px;
    }
    .ninth .top-sec h2 {
        font-size: 38px;
    }
    .ninth .top-sec ul li img {
        height: 180px;
    }
    .tenth .top-sec ul li img {
        height: 130px;
    }
    .ninth .top-sec ul li:last-child img {
        height: 138px;
    }
    .tenth .top-sec ul li:nth-child(4) {
        width: 42%;
    }
    .tenth .top-sec ul li:nth-child(1) {
        margin: 20px 30px 15px 50px;
    }
    .eleven .top-sec h2 {
        font-size: 32px;
    }
    .eleven .top-sec h2 span {
        font-size: 44px;
    }
    .eleven .top-sec img {
        height: 180px;
    margin: 10px auto;
    }
    .twelve .top-sec ul li:nth-child(1) img {
        height: 120px;
    }
    .twelve .top-sec ul li img {
        height: 130px;
    }
    .twelve .top-sec ul li:nth-child(3) img {
        height: 150px;
    }
    .thirteen .top-sec h2 span {
        font-size: 42px;
    }
    .thirteen .top-sec ul li img {
        height: 180px;
    }
    .forthteen .top-sec ul li img {
        height: 120px;
    }
    .fifteen .top-sec h2 {
        font-size: 34px;
    }
    .fifteen .top-sec h2 span {
        font-size: 50px;
    }
    .fifteen .top-sec ul li img {
        height: 180px;
    }
    .sixteen .top-sec ul li img {
        height: 130px;
    }
    .sixteen .top-sec ul li:nth-child(2) img {
        height: 145px;
    }
    .seventeen .title-bot h3 {
        font-size: 32px;
    }
    .eighteen .top-sec ul li:nth-child(1) img {
        height: 145px;
    }
    .eighteen .top-sec ul li img {
        height: 130px;
    }
    .eighteen .top-sec ul li:nth-child(4) img {
        height: 145px;
    }
    .ninteen .top-sec h2 {
        font-size: 38px;
    }
    .ninteen .top-sec ul li img {
        height: 150px;
    }
    .twenty .top-sec ul li img {
        height: 130px;
    }
    .twenty_one .top-sec h2 {
        font-size: 32px;
        margin: 0px 0 0 25px;
    }
    .twenty_one .top-sec ul li img {
        height: 150px;
    }
    .twenty_one .top-sec ul {
        margin-top: -15px;
    }
    .twenty_two .top-sec ul li img {
        height: 130px;
    }
}



</style>
<section id="albumm">
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
                        <img src="<?php echo base_url('assets/'); ?>images/baby.png" class="album-img"/>
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
                        <?php if(@$baby_shower1){ ?>
                        
                        <li>
                             
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower1->img); ?>" data-id="<?php echo @$baby_shower1->id; ?>" >
                        
                    <img src="<?php echo base_url(@$baby_shower1->img); ?>"  class= "edit" > 
                   
                    </div>
                     
                    </li>
                    
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="forth">
        
            <div class="main-bg">
    
                <div class="top-sec">
                    <ul>
                        <?php foreach($all_baby_shower as $all_baby_showers){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_baby_showers->id; ?>" data-img="<?php echo base_url(@$all_baby_showers->img); ?>"  ><img src="<?php echo base_url(@$all_baby_showers->img); ?>" class="edit" > </div></li>
                        <?php } ?>
                    
                    </ul>
                    
                    <div class="flower">                
                        <img src="<?php echo base_url('assets/'); ?>images/r1-flower.png" />
                    </div>
                </div>
            </div>
        </div>
        
        <div class="fifth">
        
            <div class="main-bg">
                 <?php if(@$mom_dad1){ ?>
                <div class="left-sec">
                    <div class="edit_img h-100"  data-id="<?php echo @$mom_dad1->id; ?>" data-img="<?php echo base_url(@$mom_dad1->img); ?>" > <img src="<?php echo base_url(@$mom_dad1->img); ?>" class="edit">  </div>    
                </div> 
                <?php } ?>
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
                        <?php foreach($all_mom_dad as $all_mom_dads){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_mom_dads->id; ?>" data-img="<?php echo base_url(@$all_mom_dads->img); ?>"  ><img src="<?php echo base_url(@$all_mom_dads->img); ?>" class="edit" > </div></li>
                        <?php } ?>
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
                <?php if(@$baby_arrival){ ?>
                <div class="left-sec">
                    <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" >  
                    <div class="edit_img" data-id="<?php echo @$baby_arrival->id; ?>" data-img="<?php echo base_url(@$baby_arrival->img); ?>"  style="  position: unset;"><img src="<?php echo base_url($baby_arrival->img); ?>" class="baby-img edit">  </div>  
                </div> 
                <?php } ?>
            </div>
        </div>
        
        <div class="eighth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                      <?php foreach($all_baby_arrival as $all_baby_arrivals){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_baby_arrivals->id; ?>" data-img="<?php echo base_url(@$all_baby_arrivals->img); ?>"  ><img src="<?php echo base_url(@$all_baby_arrivals->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                          <?php if(@$welcome_home1){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$welcome_home1->id; ?>" data-img="<?php echo base_url(@$welcome_home1->img); ?>"  ><img src="<?php echo base_url(@$welcome_home1->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                          <?php if(@$welcome_home2){ ?>
                         <li><div class="edit_img" data-id="<?php echo @$welcome_home2->id; ?>" data-img="<?php echo base_url(@$welcome_home2->img); ?>"  ><img src="<?php echo base_url(@$welcome_home2->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        
         <div class="tenth">
           <div class="main-bg">

                <div class="top-sec">
                    <ul>
                       <?php foreach($all_welcome_home as $all_welcome_homes){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_welcome_homes->id; ?>" data-img="<?php echo base_url(@$all_welcome_homes->img); ?>"  ><img src="<?php echo base_url(@$all_welcome_homes->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                        <div class="edit_img" data-id="<?php echo @$first_smile->id; ?>" data-img="<?php echo base_url(@$first_smile->img); ?>"  ><img src="<?php echo base_url(@$first_smile->img); ?>" class="edit" > </div>
                         <?php } ?>
                </div>
            </div>
        </div>
        <div class="twelve">
         <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
        <div class="top-sec">
            <ul>
                 <?php foreach($all_first_smile as $all_first_smiles){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_first_smiles->id; ?>" data-img="<?php echo base_url(@$all_first_smiles->img); ?>"  ><img src="<?php echo base_url(@$all_first_smiles->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                         	 <?php if(@$foody){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$foody->id; ?>" data-img="<?php echo base_url(@$foody->img); ?>"  ><img src="<?php echo base_url(@$foody->img); ?>" class="edit" > </div></li>
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
                            <?php foreach($all_foody as $all_foodys){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_foodys->id; ?>" data-img="<?php echo base_url(@$all_foodys->img); ?>"  ><img src="<?php echo base_url(@$all_foodys->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                	 <?php if(@$sitting1){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$sitting1->id; ?>" data-img="<?php echo base_url(@$sitting1->img); ?>"  ><img src="<?php echo base_url(@$sitting1->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                	 <?php if(@$sitting2){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$sitting2->id; ?>" data-img="<?php echo base_url(@$sitting2->img); ?>"  ><img src="<?php echo base_url(@$sitting2->img); ?>" class="edit" > </div></li>
                         <?php } ?>
            </ul>
        </div>
    </div>
            </div>   
             <div class="sixteen">
           <div class="main-bg">
        <img src="<?php echo base_url('assets/'); ?>images/r7-bg.png" class="bg-image"> 

        <div class="top-sec">
            <ul>
                <?php 
                $i=1;
                foreach($all_sitting as $all_sittings){ 
                
                if($i != 3){
                ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_sittings->id; ?>" data-img="<?php echo base_url(@$all_sittings->img); ?>"  ><img src="<?php echo base_url(@$all_sittings->img); ?>" class="edit" > </div></li>
                        
                        <?php }else{ ?>
               
                <li class="panda"><img src="<?php echo base_url('assets/'); ?>images/panda.png" > </li>
                <?php } } ?>
                
            </ul>
            
        </div>


    </div>
            </div>
            
              <div class="seventeen">
               <div class="main-bg">

        
         	 <?php if(@$standing){ ?>
                       <div class="left-sec edit_img" data-id="<?php echo @$standing->id; ?>" data-img="<?php echo base_url(@$standing->img); ?>"  ><img src="<?php echo base_url(@$standing->img); ?>" class="edit" > </div>
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
                <?php foreach($all_standing as $all_standings){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_standings->id; ?>" data-img="<?php echo base_url(@$all_standings->img); ?>"  ><img src="<?php echo base_url(@$all_standings->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                	 <?php if(@$birthday){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$birthday->id; ?>" data-img="<?php echo base_url(@$birthday->img); ?>"  ><img src="<?php echo base_url(@$birthday->img); ?>" class="edit" > </div></li>
                         <?php } ?>
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
                        <?php foreach($all_birthday as $all_birthdays){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_birthdays->id; ?>" data-img="<?php echo base_url(@$all_birthdays->img); ?>"  ><img src="<?php echo base_url(@$all_birthdays->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                            	 <?php if(@$laugh1){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$laugh1->id; ?>" data-img="<?php echo base_url(@$laugh1->img); ?>"  ><img src="<?php echo base_url(@$laugh1->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                         
                          	 <?php if(@$laugh2){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$laugh2->id; ?>" data-img="<?php echo base_url(@$laugh2->img); ?>"  ><img src="<?php echo base_url(@$laugh2->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                         
                         
                         
                        </ul>
                    </div>
                </div>
            </div>
             <div class="twenty_two">
                 <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images/r10-bg.png" class="bg-image">   
            
                    <div class="top-sec">
                        <ul>
                             	 
                         <?php foreach($all_laugh as $all_laughs){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_laughs->id; ?>" data-img="<?php echo base_url(@$all_laughs->img); ?>"  ><img src="<?php echo base_url(@$all_laughs->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                        <img src="<?php echo base_url('assets/'); ?>images/baby.png" class="album-img"/>
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
                        <?php if(@$baby_shower1){ ?>
                        
                        <li>
                             
                    <div class="edit_img" data-img="<?php echo base_url(@$baby_shower1->img); ?>" data-id="<?php echo @$baby_shower1->id; ?>" >
                        
                    <img src="<?php echo base_url(@$baby_shower1->img); ?>"  class= "edit" > 
                   
                    </div>
                     
                    </li>
                    
                    <?php } ?>
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
                        <?php foreach($all_baby_shower as $all_baby_shower){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_baby_shower->id; ?>" data-img="<?php echo base_url(@$all_baby_shower->img); ?>"  ><img src="<?php echo base_url(@$all_baby_shower->img); ?>" class="edit" > </div></li>
                        <?php } ?>
                    
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
                 <?php if(@$mom_dad1){ ?>
                <div class="left-sec">
                    <div class="edit_img h-100"  data-id="<?php echo @$mom_dad1->id; ?>" data-img="<?php echo base_url(@$mom_dad1->img); ?>" > <img src="<?php echo base_url(@$mom_dad1->img); ?>" class="edit">  </div>    
                </div> 
                <?php } ?>
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
                        <?php foreach($all_mom_dad as $all_mom_dad){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_mom_dad->id; ?>" data-img="<?php echo base_url(@$all_mom_dad->img); ?>"  ><img src="<?php echo base_url(@$all_mom_dad->img); ?>" class="edit" > </div></li>
                        <?php } ?>
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
                <?php if(@$baby_arrival){ ?>
                <div class="left-sec">
                    <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" >  
                    <div class="edit_img" data-id="<?php echo @$baby_arrival->id; ?>" data-img="<?php echo base_url(@$baby_arrival->img); ?>"  style="  position: unset;"><img src="<?php echo base_url($baby_arrival->img); ?>" class="baby-img edit">  </div>  
                </div> 
                <?php } ?>
            </div>
        </div>
        </div>
        
        <div class="item">
        <div class="eighth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images/r3-bg.png" class="bg-image">   
                <div class="top-sec">
                    <ul>
                      <?php foreach($all_baby_arrival as $all_baby_arrival){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_baby_arrival->id; ?>" data-img="<?php echo base_url(@$all_baby_arrival->img); ?>"  ><img src="<?php echo base_url(@$all_baby_arrival->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                          <?php if(@$welcome_home1){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$welcome_home1->id; ?>" data-img="<?php echo base_url(@$welcome_home1->img); ?>"  ><img src="<?php echo base_url(@$welcome_home1->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                          <?php if(@$welcome_home2){ ?>
                         <li><div class="edit_img" data-id="<?php echo @$welcome_home2->id; ?>" data-img="<?php echo base_url(@$welcome_home2->img); ?>"  ><img src="<?php echo base_url(@$welcome_home2->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                    </ul>
                </div>
            </div>
        </div></div>
        
        <div class="item">
         <div class="tenth">
           <div class="main-bg">

                <div class="top-sec">
                    <ul>
                       <?php foreach($all_welcome_home as $all_welcome_home){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_welcome_home->id; ?>" data-img="<?php echo base_url(@$all_welcome_home->img); ?>"  ><img src="<?php echo base_url(@$all_welcome_home->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                            <div class="edit_img" data-id="<?php echo @$first_smile->id; ?>" data-img="<?php echo base_url(@$first_smile->img); ?>"  ><img src="<?php echo base_url(@$first_smile->img); ?>" class="edit" > </div>
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
                             <?php foreach($all_first_smile as $all_first_smile){ ?>
                                    <li><div class="edit_img" data-id="<?php echo @$all_first_smile->id; ?>" data-img="<?php echo base_url(@$all_first_smile->img); ?>"  ><img src="<?php echo base_url(@$all_first_smile->img); ?>" class="edit" > </div></li>
                                    
                                    <?php } ?>
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
                             	 <?php if(@$foody){ ?>
                            <li><div class="edit_img" data-id="<?php echo @$foody->id; ?>" data-img="<?php echo base_url(@$foody->img); ?>"  ><img src="<?php echo base_url(@$foody->img); ?>" class="edit" > </div></li>
                             <?php } ?>
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
                            <?php foreach($all_foody as $all_foody){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_foody->id; ?>" data-img="<?php echo base_url(@$all_foody->img); ?>"  ><img src="<?php echo base_url(@$all_foody->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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
                        	 <?php if(@$sitting1){ ?>
                                <li><div class="edit_img" data-id="<?php echo @$sitting1->id; ?>" data-img="<?php echo base_url(@$sitting1->img); ?>"  ><img src="<?php echo base_url(@$sitting1->img); ?>" class="edit" > </div></li>
                                 <?php } ?>
                        	 <?php if(@$sitting2){ ?>
                                <li><div class="edit_img" data-id="<?php echo @$sitting2->id; ?>" data-img="<?php echo base_url(@$sitting2->img); ?>"  ><img src="<?php echo base_url(@$sitting2->img); ?>" class="edit" > </div></li>
                                 <?php } ?>
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
                            <?php 
                            $i=1;
                            foreach($all_sitting as $all_sitting){ 
                            
                            if($i != 3){
                            ?>
                                    <li><div class="edit_img" data-id="<?php echo @$all_sitting->id; ?>" data-img="<?php echo base_url(@$all_sitting->img); ?>"  ><img src="<?php echo base_url(@$all_sitting->img); ?>" class="edit" > </div></li>
                                    
                                    <?php }else{ ?>
                           
                            <li class="panda"><img src="<?php echo base_url('assets/'); ?>images/panda.png" > </li>
                            <?php } } ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="item">
            <div class="seventeen">
                <div class="main-bg">
                 	 <?php if(@$standing){ ?>
                   <div class="left-sec edit_img" data-id="<?php echo @$standing->id; ?>" data-img="<?php echo base_url(@$standing->img); ?>"  ><img src="<?php echo base_url(@$standing->img); ?>" class="edit" > </div>
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
                            <?php foreach($all_standing as $all_standing){ ?>
                                <li><div class="edit_img" data-id="<?php echo @$all_standing->id; ?>" data-img="<?php echo base_url(@$all_standing->img); ?>"  ><img src="<?php echo base_url(@$all_standing->img); ?>" class="edit" > </div></li>
                            <?php } ?>
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
                        	 <?php if(@$birthday){ ?>
                            <li><div class="edit_img" data-id="<?php echo @$birthday->id; ?>" data-img="<?php echo base_url(@$birthday->img); ?>"  ><img src="<?php echo base_url(@$birthday->img); ?>" class="edit" > </div></li>
                             <?php } ?>
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
                            <?php foreach($all_birthday as $all_birthday){ ?>
                            <li><div class="edit_img" data-id="<?php echo @$all_birthday->id; ?>" data-img="<?php echo base_url(@$all_birthday->img); ?>"  ><img src="<?php echo base_url(@$all_birthday->img); ?>" class="edit" > </div></li>
                            
                            <?php } ?>
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
                            	 <?php if(@$laugh1){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$laugh1->id; ?>" data-img="<?php echo base_url(@$laugh1->img); ?>"  ><img src="<?php echo base_url(@$laugh1->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                         
                          	 <?php if(@$laugh2){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$laugh2->id; ?>" data-img="<?php echo base_url(@$laugh2->img); ?>"  ><img src="<?php echo base_url(@$laugh2->img); ?>" class="edit" > </div></li>
                         <?php } ?>
                         
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
                         <?php foreach($all_laugh as $all_laugh){ ?>
                        <li><div class="edit_img" data-id="<?php echo @$all_laugh->id; ?>" data-img="<?php echo base_url(@$all_laugh->img); ?>"  ><img src="<?php echo base_url(@$all_laugh->img); ?>" class="edit" > </div></li>
                        
                        <?php } ?>
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

