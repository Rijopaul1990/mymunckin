<?php 
	//include topbar page
	include_once('include/topbar.php');
	//delete code

?>
	
 <div class="content-wrapper">
             
            <section class="content"> 
				<div class="panel panel-primary">
					 <div class="panel panel-heading">
					 <i class="fa fa-bars"></i> <?php echo $page_title ?>
						<!--<span class="pull-right"><a href="<?php echo base_url('admin/add_tutorials') ?>" class="btn btn-xs btn-danger">Add New</a></span>-->
                    
                     </div>
                     <?php if ($success = $this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong><?php echo $success; ?></strong> 
                  </div>
                  <?php endif ?>

                  <?php if ($error = $this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong><?php echo $error; ?></strong> 
                  </div>
                  <?php endif ?>
					 <div class="panel-body">
					         <div class="btn-group">
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                             
                               
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#example').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="<?php echo base_url('assets/admin/');?>assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>
                                
                                 <li class="divider"></li>
                                 
                                 <li>
                                    <a href="#" onclick="$('#example').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                                    <img src="<?php echo base_url('assets/admin/');?>assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                 </li>
                              </ul>
                           </div>
					     
					     
						 <table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr>
								<th>Sr no</th>
								<th>Date</th>
								<th>Order Id</th>
								<th>Transction Id</th>
                              
                              	<th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                               
                              	 <th>Amount</th>
                                <th>Status</th>
                               
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
							 if(is_array($all_success_order) || is_object($all_success_order)){
								 $is = 1;
								 foreach($all_success_order as $fac){ 
								//  	$check = $this->AdminModel->AllCount("order_details",array("order_id"=>$fac->order_id,"request"=>"Accept",'type'=>1));
								//  	$check_rejected = $this->AdminModel->AllCount("order_details",array("order_id"=>$fac->order_id,"request"=>"Reject",'type'=>1));
								 	
                                 	?>
									 <tr>
								<td><?php echo $is++; ?></td>
                              	 <td><?php echo $fac->add_date; ?></td>
                              	 <td><?php echo $fac->order_id; ?></td>
                              	 <td><?php echo $fac->transction_id; ?></td>
                               <td><?php echo $fac->first_name." ".$fac->last_name; ?></td>
                               <td><?php echo $fac->email; ?></td>
                               <td><?php echo $fac->number; ?></td>
                               <td><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $fac->total; ?></td>
								<td><?php if($fac->status=="1"){ ?>
									<a class="btn btn-xs btn-munchkin" href="#">Success</a>
								<?php }
								else{ ?>
									<a class="btn btn-xs btn-munchkin" href="#">Failed</a>
								<?php } ?></td>
							
								<td>
                                <a href="<?php echo base_url('admin/view_order/'.$fac->order_id) ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-eye"></i> View Details</a>
                                
                                    </td>
							</tr>
<?php 								 }
								 
							 }
							?>
							
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