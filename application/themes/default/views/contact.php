<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 



<main class="contact-page">

<?php include 'inner_banner.php'; ?>
<section class="about-contact text-center" >	
	<div class="container " >
		<div class="row">

			<div class="col-md-4 ">
				<div class="about-contact-box">
					<div class="about-contact-top">
						<img src="<?php echo base_url('assets/') ?>img/icons/smartphone.svg" class="img-fluid "/>
					</div>
					<div class="about-contact-bottom">
						<p>Phone </p>
						<a href="#"><?php echo $contact->number; ?></a>
					</div>
				</div>
			</div>
            <div class="col-md-4 ">
				<div class="about-contact-box">
					<div class="about-contact-top">
						<img src="<?php echo base_url('assets/') ?>img/icons/mailbox.svg" class="img-fluid "/>
					</div>
					<div class="about-contact-bottom">
						<p>Mail </p>
						<a href="#"><?php echo $contact->email; ?></a>
					</div>
				</div>
			</div>
            <div class="col-md-4 ">
				<div class="about-contact-box">
					<div class="about-contact-top">
						<img src="<?php echo base_url('assets/') ?>img/icons/digital-marketing.svg" class="img-fluid "/>
					</div>
					<div class="about-contact-bottom">
						<p>Social Media </p>
						<a href="#">@mymunchkin</a>
					</div>
				</div>
			</div>
			
		</div>	
	</div>
</section>




<section class="contact-form" id="price">
    <div class="background-icons4">
        <img src="<?php echo base_url('assets/') ?>img/icons/about1.svg" class="img-fluid price1" alt="price1" >
        <img src="<?php echo base_url('assets/') ?>img/icons/price3.svg" class="img-fluid price2" alt="price2">
        <img src="<?php echo base_url('assets/') ?>img/icons/how2.svg" class="img-fluid price3" alt="price3" >
    </div>
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 text-center">
                <img src="<?php echo base_url('assets/') ?>img/contact.png " class="img-fluid "/>
            </div>
            <div class="col-lg-7 align-self-center ">
                <h1>We'd love to hear from you</h1>
                <form id="contact_form" method="POST">
                    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>" >
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name" onkeydown="Check(event);" onkeyup="Check(event);">
                        </div>
                        <div class="col">
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name" onkeydown="Check(event);" onkeyup="Check(event);">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" id="contact_number" name="contact_number" minlength="10" maxlength="10"  placeholder="Contact Number" onkeydown="checkNumber(event);" onkeyup="checkNumber(event);">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <textarea placeholder="Your message..." rows="4" cols="50" name="message" id="message"></textarea>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-munchkin"><span>SEND</span></button>
                </form>
                
            </div>
        </div>	
    </div>
</section>





</main>
<?php include("footer-ann.php") ?>
<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/custom.js'); ?>"></script>