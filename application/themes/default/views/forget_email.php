<!DOCTYPE html>
<html>
<head>
    <title>Mymunchkin -Forget Password</title>

    <style>
        @font-face{
            font-family: hyundaiHead-bold;
            src: url('http://cyberworx.co.in/hyundai/fonts/HyundaiSansHead-Bold.otf')format('opentype');
        }
        @font-face{
            font-family: hyundaiHead-regular;
            src: url('http://cyberworx.co.in/hyundai/fonts/HyundaiSansHead-Regular.otf')format('opentype');;
        }
    
    </style>
</head>
<body>
    <div class="wrapper" style="padding: 30px;background-color: #fbfbfb;">
        <div class="emailer" style="background-color: #fff; width: 550px; border-radius: 5px;margin: 0 auto;box-shadow: 0 0 15px #efefef;text-align: center;">
            <div class="trial-main-header" style="padding-top: 20px;">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt=" Logo" class="logo" style="width: 150px;">
               
            </div> 
            <div class="section_head" style="text-align: center;background-image: url(http://cyberworx.co.in/xtractivity/images/order-success-bg.png);padding: 20px;display: inline-block;margin: 0 auto !important;background-size: contain;margin-top: 20px !important;
    width: 550px;
    box-sizing: border-box;">
                <h2 style="font-size: 28px;color: #5c5c5c;text-align: center;margin-top: 0;margin-bottom: 0px;position: relative !important;/* background-image: url('http://cyberworx.co.in/xtractivity/images/order-success-bg.png'); */">
                    <span style="color: #ff834f !important;">Reset</span> Password
                </h2>
               
            </div>
            <div class="emailer-content" style="padding: 30px;text-align: center;font-size: 17px;">
                <p>Dear <span style="color: #dd2533;"><?php echo $name?$name:''; ?></span>,</p>
              
                <p>Please click the following link to Reset Password:</p>
                <a
                    href="<?php echo $link; ?>"
                    class="hyundai-btn"
                    style="
                    background: #FF721D;
    color: #fff;
    border-radius: 50px;
    padding: 15px 20px;
    min-width: 180px;
    font-weight: 500;
    font-size: 14px;
    transition: 0.3s all;
    position: relative;
    z-index: 99999;
    overflow: hidden;
    
                    "
                >
                    Click here
                </a>
            </div>
            <div class="emailer-footer" style="padding: 15px 30px 5px; font-size: 13px; background: #eee; text-align: center;">
                <!--<a href="<?php echo base_url(); ?>" target="_blank"><img src="<?php echo base_url('assets/images/logo-blue.png'); ?>" style="max-height: 35px;" /></a>-->
                <p style="color: #002c5f;"> Email: <span style="color: #ff834f !important;">support@mymunchkin.in</span> | Website: <span style="color: #ff834f !important;">mymunchkin.in</span></p>
            </div>
        </div>
    </div>
</body>
</html>