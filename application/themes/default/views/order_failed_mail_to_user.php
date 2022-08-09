<!DOCTYPE html>
<html>
<head>
    <title>Mymunchkin -order details</title>

</head>
<body>
    <div class="wrapper" style="padding: 30px;background-color: #eeeeee;">
        
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" >
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;background: #fff;">
                    <tr>
					<tr>
						<td align="center">
							<a href="#" target="_blank" style=" margin: 20px 0 0;display: block;">
								<img src="<?php echo base_url('assets/img/logo.png'); ?>" width="150px"/>
							</a> 
						</td></tr>
                        
                    </tr>
                    <tr>
                        <td align="center" style="padding: 0 25px 25px; border-top:  1px solid #eeee;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 25px 0;"> 
                                    <!--<img src="<?php echo base_url('assets/img/baby-img.png'); ?>" width="125" height="120" style="display: block; border: 0px;" />-->
                                        <h2 style="font-size: 30px; line-height: 36px; color: #FF721D; margin: 0;"> Payment Failed / Cancelled! </h2>
                                    </td>
                                </tr>
                               
								 
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">Failed Order # </td>
                                                <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> <?php echo $order_id; ?> </td>
                                            </tr>
                                            <?php 
                                if(is_array($all_items) || is_object($all_items)){
                                    foreach($all_items as $f_a_o){
                                
                            ?>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> <?php echo $f_a_o->p_name; ?> (1) </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">  ₹<?php echo $f_a_o->p_amount; ?> </td>
                                            </tr>
                                            <?php } } ?>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Subtotal </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> ₹ <?php echo $subtotal; ?>/- </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Promo Code (if applied): </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> <?php if(@$coupon_amount){ ?>₹ <?php echo @$coupon_amount; ?> /- <?php } ?> </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> TOTAL </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> ₹ <?php echo $total; ?>/- </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                 
                    <tr>
                        <td align="center" style=" padding: 35px 35px ; border: 1px solid #eee;background:#FF721D" >
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px;">
                                       
										<p style="text-transform:uppercase;font-weight:700;margin: 0 0 10px;color: #fff;"> Payment Failed / Cancelled!</p>
										<p style="margin: 0 0 20px;color: #fff;"> Your order has failed / Cancelled. We request you to go back to Mymunchkin.in and complete your order. For any queries, please contact us at <a href="mailto:support@mymunchkin.in">support@mymunchkin.in</a>. </p>
										
                                    </td>
									
                                </tr>
                                <tr>
                                    <td align="center" >
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="border-radius: 50px;" bgcolor="#fff"> <a href="#" target="_blank" style="font-size: 18px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #F44336; text-decoration: none;font-weight: 700; background-color: #fff; padding: 15px 30px;  display: block;border-radius: 50px;">Get Order Help</a> </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                   
                </table>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>