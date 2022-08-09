<?php 
	//include topbar page
include_once('include/topbar.php');


?>
<style type="text/css">
.hidden_row{
	display: none;
}
.mytable{
	background-color: #428bca;
	color: #fff;
}
</style>
<div class="content-wrapper">

	<section class="content"> 
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<i class="fa fa-users"></i> Order Id :- <?php echo @$fetch_order->order_id; ?>
			
			
			</div>
			<div class="panel-body">
				<div class="row">
					 <div class="col-sm-6">
								<table class="table table-bordered">
									<tr><td colspan="2" class="text-center mytable">User Details</td></tr>
									<tr><td> Address</td><td><?php echo @$fetch_order->address; ?></td></tr>
                                    <tr><td>State</td><td><?php echo @$fetch_order->state; ?></td></tr>
                                    <tr><td>Country</td><td><?php echo @$fetch_order->country; ?></td></tr>
                                    <tr><td>Pin Code</td><td><?php echo @$fetch_order->zip_code; ?>   
                                    
                                             
                                </td></tr>
								</table>
							</div> 
							<div class="col-sm-6">
								<table class="table table-bordered">
									<tr><td colspan="2" class="text-center mytable">User Details</td></tr>
									<tr><td> Name</td><td><?php echo $fetch_order->first_name." ".$fetch_order->last_name; ?></td></tr>

                                <tr><td>Email Address</td><td><?php echo $fetch_order->email; ?></td></tr>
                                <tr><td>Mobile Number</td><td><?php echo $fetch_order->number; ?></td></tr>
                               
								</table>
							</div>
				</div>
				<table class="table table-striped table-bordered table-hover" style="width:100%">
					<thead>
						<tr>
							 <th>S.No</th>
                               
                                <th>Package Name</th>
                                <th>Package Price</th>
                               
                                <th>Total</th>
   
						</tr>
					</thead>
					<tbody>
						<?php
                           
                            //print_r($all_order);
                            if(is_object($all_order) || is_array($all_order)){
                                $i=0;
                                $sub_total = 0;
                                foreach ($all_order as  $all_order) {  
                                    $i++;
                                    
                                    $sub_total += $all_order->percent_amount;
                                    $fetch_package = $this->AdminModel->fs("pricing",array("id"=>$all_order->p_id));
                                   
                              
                            //$date = date_create($all_order->booking_date);
                                        ?>
                                        <tr>

                                                 <td><?php echo $i; ?></td>
                          
                             <td><?php echo $fetch_package->name;  ?> Package</td>
                           
                            <td><i class="fa fa-rupee-sign"></i> <?php echo $all_order->p_amount; ?>/-</td>
                          <td><i class="fa fa-rupee-sign"></i> <?php echo $all_order->p_amount; ?>/-</td>
                         
                                          

                                        </tr>

                                    <?php    } }  ?>
                                         <tr >
                                        <td colspan="2"></td>
                                        <td><h4 style="color:black;">Sub Total</h4></td>
                                        <td colspan="2"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo @$fetch_order->sub_total; ?>/-</td>
                                    </tr>
                                     <tr >
                                        <td colspan="2"></td>
                                        <td><h4 style="color:black;">Coupon Code (if Applied)</h4></td>
                                        <td colspan="2"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo @$fetch_order->discount; ?>/-</td>
                                    </tr>
                                     <tr >
                                        <td colspan="2"></td>
                                        <td><h4 style="color:black;">Grand Total</h4></td>
                                        <td colspan="2"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo @$fetch_order->total; ?>/-</td>
                                    </tr>
                                    
                                   

					</tbody>
				</table>
			</div>

		</div> 
	</section>
	<!-- /.content -->
</div>

<?php 
	//include footer page
include_once('include/footer.php');
?>

<script>
    $(document).on("click",".orderStatus",function(){
        var order_id  = $(this).data('orderid');
        var status    = $(this).data('status');
        if(order_id){
            $.ajax({
                url:"<?php echo base_url('admin/Order/UpdateOrderStatus') ?>",
                type : "POST",
                data:{order_id:order_id,status:status},
                success:function(res){
                    if(res == 1){
                        window.location.href="";
                    }
                }
            })
        }
        
    });
</script>