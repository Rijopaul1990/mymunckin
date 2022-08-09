
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 
<style>
    .text-error{
        color :red;
    }
    .text-success{
        color :green;
    }
    header {
        z-index: 9999999999;
    }
    .cart.login-page .banner .form-control{
            color: #404040;
    }
#toast-container{
        z-index: 99999999999;
        
    }
</style>
<main class="login-page cart" >

    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
    <section class="banner" id="price">
        <div class="background-icons4">
            <img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/>
            <img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
            <img src="<?php echo base_url('assets/'); ?>img/icons/price1.svg" class="img-fluid price1" alt="price1" >
            <img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid price2" alt="price2">
            <img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 ">
                    <h2>Enter Billing Details </h2>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" id="first_name" value="<?php echo @$user_details->first_name; ?>" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <input type="text" id="last_name" value="<?php echo @$user_details->last_name; ?>" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="address" placeholder="Address" value="<?php echo @$user_details->address; ?>">
                                    <div class="row">
                                        <div class="col">
                                            <select id="state" class="form-control ">
                                                <option value="">Select State</option>
                                                <?php foreach($all_state as $state){ ?>
                                                    <option value="<?php echo $state->name; ?>"><?php echo $state->name; ?></option>
                                                <?php } ?>
                                            </select>
                                            <!--<input type="text"  placeholder="State " value="<?php echo @$user_details->state; ?>">-->
                                        </div>
                                        <div class="col">
                                            <input type="number" id="pincode" class="form-control " placeholder="Pincode/Zip" value="<?php echo @$user_details->pin_code; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <select class="form-control" id="country">
                                                <option value="">Country</option>
                                                <option value="india" selected> India</option>
                                              
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input type="number" id="number" class="form-control " placeholder="Mobile" value="<?php echo @$user_details->number; ?>">
                                        </div>
                                    </div>
                                </div>
                                
                              
                            </div>
                            
                            
                        </div>
                    </form>
                </div>
                
                <div class="col-md-5 ml-auto col-lg-4 " id="outer_coupon" style="z-index: 999999999;">
                    
                    <div class="payment-det" id="inner_coupon">
                        <h2>Order Summary </h2>
                        <?php 
                            $sub_total = 0;
                		    $total =0;
                		    $counpon_amount = $this->AdminModel->fs_desc("applied_coupon_code",array("status"=>0,'u_id'=>$user_details->id),"id");
                		//	$coupon_name = $this->AdminModel->fs("deals",array("id"=>$counpon_amount->coupon_id));
                        foreach($fetch_all_cart as $all_cart){ 
                             	                   
                            $sub_total += $all_cart->p_amount;
                		    $total = $sub_total-@$counpon_amount->amount;
                        ?>
                        <p><?php echo $all_cart->p_name; ?> <span>₹ <?php echo $all_cart->p_amount; ?></span></p>
                        <?php } ?>
                        <p>Subtotal <span>₹ <?php echo @$sub_total; ?></span></p>
                        <input type="hidden" id="sub_total" value="<?php echo @$sub_total; ?>">
                            <?php if($all_cart->p_id !== "1"){ ?>
                        <div class="add-dis my-4">
                            <form id="coupon_form">
                            <h2> Have a coupon code? </h2>
                            <input type="text" class="form-control w-100" id="coupon_code" placeholder="Add Discount Coupon">
                            <button class="btn my-2 btn-munchkin w-100" id="btn_apply_coupon_code" type="button"><span>Apply Coupon Code</span></button>
                            <span id="coupon_error"></span>
                             <?php if ($success = $this->session->flashdata('success')): ?>
                              <p class='text-success'> Coupon Code Applied Successfully</p>
                              <?php endif ?>
                            </form>
                        </div>
                            <?php } ?>
                        <?php if($counpon_amount){ ?>
                        <p>Discount  <span>₹ <?php echo @$counpon_amount->amount; ?></span></p>
                        <span>(<?php echo $counpon_amount->coupon_code; ?>)</span>
                        <?php } ?>
                        <div class="total-order">
                        <p> Total<span id="total_amount">₹ <?php echo @$total; ?></span></p>
                        </div>
                         <div class="add-dis my-4">
                 
                  <input type="checkbox" name="checkoutTerms" id="checkoutTerms">
                  <span for="checkoutTerms">I have read and agree to terms and conditions</span>
                </div>
                            				    <?php
$description        = $all_cart->p_name;
$txnid              = $all_transtion_id;     

//Mymunchkin KEY
$key_id             = "rzp_live_iijjN20XThTy5Q";
//$key_id             = "rzp_test_WwvGHD960S8t5v";


//Xtractivity KEY
//$key_id            = "rzp_test_ZQcCU9esNO6NOe";
$currency_code      = $currency_code;            
$ttotal              = (100* $total); // 100 = 1 indian rupees

$amount             = $total;
$merchant_order_id  = $order_id;
$card_holder_name   = @$user_details->first_name." ".@$user_details->last_name;
$email              = $user_details->email;
$phone              = $user_details->number;
$name               = "My Munchkin";


$get_razorpay_order_id =  CreateRazorPayOrderId($ttotal);
$get_razorpay_order_id_decode = json_decode($get_razorpay_order_id);
$razor_pay_order_id = $get_razorpay_order_id_decode->id;
//print_r($razor_pay_order_id->id);
?>
        				        <!--RazorPay-->
        <form name="razorpay-form" id="razorpay-form" action="<?php echo $callback_url; ?>" method="POST">
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
        <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
        <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
        <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $description; ?>"/>
        <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>
        <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>
        <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
        <input type="hidden" name="merchant_total" id="merchant_total" value=""/>
        <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
    </form>
    
                <input type="hidden">
                     <button class="btn btn btn-munchkin w-100" id="place_order" type="button" data-razor_pay_order_id ="<?php echo $razor_pay_order_id; ?>" data-all_transtion_id="<?php echo $all_transtion_id; ?>" data-order_id="<?php echo $order_id; ?>" data-coupon_code_id="<?php echo encrypt_url(@$counpon_amount->id); ?>" data-coupon_amount="<?php echo encrypt_url(@$counpon_amount->amount); ?>" data-order_id="<?php echo $order_id; ?>" data-all_transtion_id="<?php echo $all_transtion_id; ?>" data-total="<?php echo encrypt_url(@$total); ?>" data-sub_total="<?php echo encrypt_url(@$sub_total); ?>"><span>PLACE ORDER</span></button>
                    </div>
                </div>

            </div>	
        </div>
    </secction>


    
</main>
<?php include("include/footer.php") ?>
<script src="<?php echo base_url('assets/pcustom.js'); ?>"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
  //  alert($("#merchant_total").val());
      //  options.amount = $('input').val()
        var options = {
            key:            "<?php echo $key_id; ?>",
            amount:         $("input[name='merchant_total']").val(),
            name:           "<?php echo $name; ?>",
            description:    "Order # <?php echo $merchant_order_id; ?>",
            netbanking:     true,
            currency:       "<?php echo $currency_code; ?>", // INR
           // order_id:       "<?php echo $razor_pay_order_id; ?>",
            prefill: {
                name:       "<?php echo $card_holder_name; ?>",
                email:      "<?php echo $email; ?>",
                contact:    "<?php echo $phone; ?>"
            },
            notes: {
                soolegal_order_id: "<?php echo $merchant_order_id; ?>",
            },
            handler: function (transaction) {
                document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
                document.getElementById('razorpay-form').submit();
            },
            "modal": {
                "ondismiss": function(){
                    location.reload()
                }
            }
        };
        
        $('#place_order').click(function(){
  options.amount = $('#merchant_total').val()
})

        var razorpay_pay_btn, instance;
        function razorpaySubmit(el) {
            if(typeof Razorpay == 'undefined') {
                setTimeout(razorpaySubmit, 200);
                if(!razorpay_pay_btn && el) {
                    razorpay_pay_btn    = el;
                    el.disabled         = true;
                    el.value            = 'Please wait...';  
                }
            } else {
                if(!instance) {
                    instance = new Razorpay(options);
                    if(razorpay_pay_btn) {
                    razorpay_pay_btn.disabled   = false;
                    razorpay_pay_btn.value      = "Pay Now";
                    }
                }
                instance.open();
            }
        }  
    </script>