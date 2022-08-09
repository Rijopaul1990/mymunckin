
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 

<main class="login-page cart2" >


    <section class="banner" id="price">
        <div class="background-icons4">
            <img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/>
            <img src="<?php echo base_url('assets/'); ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
                        <img src="<?php echo base_url('assets/'); ?>img/icons/price1.svg" class="img-fluid price1" alt="price1" >
                        <img src="<?php echo base_url('assets/'); ?>img/icons/about1.svg" class="img-fluid price2" alt="price2">
                        <img src="<?php echo base_url('assets/'); ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
        </div>
        <div class="container">
            <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
            <?php if(count($fetch_all_cart) >= 1){ ?>
            <div class="row">
                <div class="col-md-8">
                   <div class="section_content">
            	        <div class="cart-table">
            	            <table class="table table-borderless">
            	                <thead>
            	                    <tr>
            	                        <th width="60%">My Cart</th>
            	                        <th>Plan</th>
            	                        <th>Total</th>
            	                        <th></th>
            	                    </tr>
            	                </thead>
            	                <tbody>
            	                    <?php 
            	                    if(is_array($fetch_all_cart) || is_object($fetch_all_cart)){
            	                        $total = 0;
            	                        foreach($fetch_all_cart as $fetch_all_cart){
            	                            $total += $fetch_all_cart->p_amount;
            	                    ?>
            	                     <tr>
            	                        <td class="d-flex flex-wrap align-items-center">
            	                            <p><?php echo $fetch_all_cart->p_name; ?> Plan</p>
            	                        </td>
            	                        <td>
            	                            <p ><?php echo $fetch_all_cart->p_name; ?></p>
            	                        </td>
            	                        <td>
            	                            <p class="total">₹ <?php echo $fetch_all_cart->p_amount; ?></p>
            	                        </td>
            	                        <td>
            	                            <a href="javascript:void(0)" class="removeCart" data-p_id="<?php echo encrypt_url($fetch_all_cart->id); ?>">
            	                            <i class="fas fa-trash"></i>
            	                            </a>
            	                        </td>
            	                    </tr>
            	                          <?php } }?>      	
            	                </tbody>
            	            </table>
            	        </div>
        	        </div>
                </div>
                
                <div class="col-md-4 ml-auto">
                    
                    <div class="payment-det">
                        <h2>Order Summary </h2>
                        <p>Sub Total <span>₹ <?php echo @$total; ?></span></p>
                        <!--<p>Discount <span>₹ 0</span></p>-->
                        <div class="total-order">
                        <p> Total<span>₹ <?php echo @$total; ?></span></p></div>
                        <?php 
                            if(isset($this->session->userdata['userdetail'])){
                        ?>
                     <a href="<?php echo base_url('checkout'); ?>" class="btn btn btn-munchkin w-100"><span>PROCEED TO CHECKOUT</span></a>
                     <?php } else{ ?>
                      <a href="<?php echo base_url('login'); ?>" class="btn btn btn-munchkin w-100"><span>PROCEED TO CHECKOUT</span></a>
                     <?php } ?>
                    </div>
                     
                    <!--<div class="payment-det mt-3">-->
                        
                    <!--    <h2> Add Discount Coupon </h2>-->
                    <!--    <div class="add-dis">-->
                    <!--        <input type="text" class="form-control w-100" placeholder="Add Discount Coupon">-->
                    <!--        <button class="btn my-2 btn-munchkin w-100" type="submit">Add Discount</button>-->
                    <!--    </div>-->
                        
                    <!--</div>-->
                </div>

            </div>	
            <?php } else{ ?>
                <div class="row">
                    <div class="col-md-12  text-center">
    			        <img src="<?php echo base_url('assets/empty-cart-png.png'); ?>">

                         <div class="section_head text-center mt-5">
                                <h2>Your Cart is Empty!</h2>
                            </div>
    			    </div>
                </div>
            
            <?php } ?>
        </div>
    </secction>


    
</main>
<?php include("include/footer.php") ?>
<script src="<?php echo base_url('assets/pcustom.js'); ?>"></script>
