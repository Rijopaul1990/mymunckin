<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>


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
    /*max-width: 500px;*/
    /*margin: 0 auto;*/
    /*background: url(<?php echo base_url('assets/'); ?>images/preg-bac.jpg);*/
    /*background-size: contain;*/
    /*background-position: top;*/
    /*background-repeat: no-repeat;*/
    /*padding: 20px 0;*/
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
        max-width: 500px;
    margin: 0 auto;
    padding: 20px 0;
    position: relative;
    text-align: center;
}
.top-sec {
    height:600px;
    width: 50%;
    display: inline-flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}

.top-sec .left-top {
    position: relative;
    /*height: 50VH;*/
}
.top-sec .left-top h3 {
    font-family: 'Great Vibes', cursive;
    color: #B07F4A;
    width: 75%;
    font-size: 60px;
    margin: 10px auto 0;
    font-weight: 600;
    background: -webkit-linear-gradient(190deg, #B07F4A, #c9b28a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}


.top-sec .left-top img {
    width: 220px;
    border-radius: 50%;
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
    font-size: 26px;
    color: #757575;
    margin: 0;
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
    width: auto;
    height: 100%;
    right: 0;
    margin: auto;
    z-index: -1;
}

</style>

<body width="100%" style="margin: 0; padding: 0 !important; background-color: #222222;">
    <div class="main-bg">

                <img src="<?php echo base_url('assets/'); ?>images/preg-bac.jpg" class="bg-image"/>
        <div class="top-sec">
            <div class="left-top">
                <img src="<?php echo base_url('assets/'); ?>images/shoes.png" />
                <h3> Soon to be There    </h3>
                <hr>
                <p>Two has been fun, but now we’re adding a son</p>
            </div>
        </div>


    </div>
</body>
</html>