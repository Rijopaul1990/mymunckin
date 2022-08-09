<html>
<head>
<title>Invoice</title>
<style type="text/css">
body {
    background-color: #eee;
    font-family: sans-serif;
}
	#page-wrap {
		width: 850px;
		margin: 0 auto;
        padding: 10px;
        background: #fff;
	}
	.center-justified {
		text-align: justify;
		margin: 0 auto;
		width: 30em;
	}
	table.outline-table {
		/* border: 1px solid; */
		border-spacing: 0;
	}
	tr.border-bottom td, td.border-bottom {
		border-bottom: 1px solid;
	}
	tr.border-top td, td.border-top {
		border-top: 1px solid;
	}
	tr.border-right td, td.border-right {
		border-right: 1px solid;
	}
	tr.border-right td:last-child {
		border-right: 0px;
	}
	tr.center td, td.center {
		text-align: center;
		vertical-align: text-top;
	}
	td.pad-left {
		padding-left: 5px;
	}
	tr.right-center td, td.right-center {
		text-align: right;
		padding-right: 50px;
	}
	tr.right td, td.right {
		text-align: right;
	}
	.blue-bg {
		background:#6d9eeb;
	}    
	.blue-color {
		color:#6d9eeb;
	}
    td {
        padding: 5px ;
        font-size: 14px;
    }
	.order_id p{
		margin: 5px 0 ;
	}
</style>
</head>
<body style="background:#fff;">
	<div id="page-wrap" style="width:100%;">
		<table width="100%" height="100%" class="outline-table">
			<tbody>
				<tr>
					<td colspan="3" align="center" style=" padding-top: 6px; font-size: 20px;position: relative;">
						<strong>Invoice</strong>
						<p style="border: 1px solid;padding: 3px;position: absolute;font-size: 12px;right: 0;
						top: -10px;	"><strong style="  font-weight: 800;">Invoice Number </strong># <?php echo @$fecting_order_address->order_id; ?></p>
					</td>
				</tr>
				<tr>
					<td width="100%" style="vertical-align: middle;">
						<strong >Sold By: My Munchkin</strong>
					</td>
				</tr>
				<!-- <tr>
					<td style="font-size: 11px;"><i><strong >Ship-from Address:</strong> 5th Floor, Urmila Heights, Road No. 10, Banjara Hills, Hyderabad, Telangana, INDIA - 500034, IN-TA</i></td>
				</tr> -->
				<tr>
					<td><strong>GSTIN </strong>- 06AGAPM2613B1Z6</td>
				</tr>
			</tbody>
		</table>
		<?php $arr = explode(" ",$fecting_order_address->add_date); ?>
				<table  width="100%" class="outline-table" style="	padding: 10px 0;">
					<tr class="border-top order_id">
						<td style="width: 50%;	vertical-align: top;" >
							<p><strong>Order ID: <?php echo @$fecting_order_address->order_id; ?></strong></p>
							<p><strong>Transction ID: <?php echo @$fecting_order_address->transction_id; ?></strong></p>
							<p><strong>Order Date:</strong><?php echo $arr[0]  ?> </p>
							<p><strong>Invoice Date:</strong> <?php echo $arr[0]  ?></p>
							<!-- <p><strong>PAN:</strong> AADCL2721R</p> -->
						</td>
						<td style="width: 50%;">
							<strong>Bill To<br>	<?php echo @$fecting_order_address->first_name.' '.$fecting_order_address->last_name; ?></strong>
							<p><?php echo @$fecting_order_address->address; ?>,
								<?php echo @$fecting_order_address->state; ?> <?php echo @$fecting_order_address->zip_code; ?> ,<?php echo @$fecting_order_address->country; ?> <br>
								Phone: <?php echo @$fecting_order_address->number; ?></p>
						</td>
						
					
					</tr>
				</table> 
                
		<!-- 	</tbody>
		</table> -->
		<?php 

		$taxable_amount = $fecting_order_address->total;
		$tax_amount = round(($taxable_amount*18)/118);
		?>
		<table width="100%" class="outline-table" style=" border-top: none;">
			<tbody>
				<tr class="border-top border-bottom" style="vertical-align: top;">
					<!-- <td width="18%" style="padding-bottom: 25px;"><strong></strong></td> -->
					<td width="32%"  style="padding-bottom: 25px;"><strong>Package </strong></td>
					<td width="1%"  style="text-align: center;"><strong>Qty</strong></td>
					<td width="10%"   style="text-align: center;"> <strong>Gross Amount ₹</strong></td>
					<td width="10%" style="padding-bottom: 25px;text-align: center;"><strong>Discount ₹  </strong></td>
					<td width="10%"  style="padding-bottom: 25px;text-align: center;"><strong>Taxable	Value ₹  </strong></td>
					<td  width="10%"  style="padding-bottom: 25px;text-align: center;"><strong>Total Tax ₹</strong></td>
					<td width="10%"  style="padding-bottom: 25px;text-align: center;"> <strong>Total ₹</strong></td>
				</tr>
				<tr class="order_id">
				<!-- 	<td style="	font-size: 11px;">Wired Earphone -->
						<!-- <p>FSN:	</p>
						<p>SKRFG7AVQES9EVDW </p> -->
						<!-- <p>HSN/SAC: 85183000</p> -->
					<!-- </td> -->
					<td style="	vertical-align: baseline;">
						<strong><?php echo @$package_name->p_name;?>  (HSN/SAC: 85183000)</strong>
						
						<?php if( $fecting_order_address->state == "Delhi"){ ?>
						<p style="	font-size: 11px;margin:1px 0 !important;"><strong >CGST (9.0 %) : <?php echo $tax_amount/2 ?> </strong></p>
						<p style="	font-size: 11px;margin:1px 0 !important;"><strong >SGST (9.0 %) : <?php echo $tax_amount/2 ?></strong> </p>
					<?php }else{ ?>
						<p style="	font-size: 11px;margin:1px 0 !important;"><strong >IGST (18.0 %) : <?php echo $tax_amount ?></strong></p>
					<?php } ?>
					</td>
					<td style="text-align: center;vertical-align: baseline;">1</td>
					<td style="text-align: center;vertical-align: baseline;">₹ <?php echo @$fecting_order_address->sub_total; ?></td>
					<td style="text-align: center;vertical-align: baseline;"> <?php echo @$fecting_order_address->discount?$fecting_order_address->discount:0; ?></td>
					<td style="text-align: center;vertical-align: baseline;">₹ <?php echo @$fecting_order_address->total; ?></td>
					<td style="text-align: center;vertical-align: baseline;">₹ <?php echo $tax_amount ?></td>
					<td style="text-align: center;vertical-align: baseline;">₹ <?php echo @$fecting_order_address->total; ?></td>
				</tr>
               <!--  <tr class=""> -->
				<!-- 	<td class="pad-left"></td> -->
					<!-- <td class=""><strong>Shipping Charge</strong></td>
					<td style="text-align: center;vertical-align: baseline;">1</td>
					<td style="text-align: center;vertical-align: baseline;">40.00</td>
					<td style="text-align: center;vertical-align: baseline;">-40.00</td>
					<td style="text-align: center;vertical-align: baseline;">0.00</td>
					<td style="text-align: center;vertical-align: baseline;">0.00</td>
					<td style="text-align: center;vertical-align: baseline;">0.00</td>
				</tr> -->
                <tr class="border-top" style="font-weight: 600;">
					<!-- <td ></td> -->
					<td class="center">Total &#x20B9;</td>
					<td style="	padding: 10px 0;text-align: center;vertical-align: baseline;">1</td>
					<td style="text-align: center;">&#8377; <?php echo @$fecting_order_address->sub_total; ?></td>
					<td style="text-align: center;">-<?php echo @$fecting_order_address->discount; ?></td>
					<td style="text-align: center;"><?php echo @$fecting_order_address->total; ?></td>
					<td style="text-align: center;"><?php echo $tax_amount ?></td>
					<td style="text-align: center;"><?php echo @$fecting_order_address->total; ?></td>
				</tr>
                <tr class="border-top">
					<td class="right-center" colspan="5" style="font-size: 18px;padding: 15px 0;" >Grand Total</td>
					<td class="right" colspan="2"  style="font-size: 18px;"><strong>₹ <?php echo @$fecting_order_address->total; ?>/-</strong></td>
				</tr>
				
			</tbody>
		</table>
	</div>
</body>
</html>