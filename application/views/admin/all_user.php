<?php 
	//include topbar page
	include_once('include/topbar.php');

?>
	
 <div class="content-wrapper">
             
            <section class="content"> 
				<div class="panel panel-primary">
					 <div class="panel panel-heading">
						<i class="fa fa-users"></i>  User All
						 <!--<span class="pull-right"><a href="add-testimonial.php" class="btn btn-xs btn-danger">Export To Excel</a></span> -->
					 </div>
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
								<th>Full Name</th>
								<th>Email</th>
								<th>Number</th>
								<th>Status</th>
								<th>Email Verification</th>
								<th>Package</th>
								<th>Expiry Date</th>
								<th>Download Album Image</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
							
							 if(is_array($all_user) || is_object($all_user)){
								 $is = 1;
								 foreach($all_user as $fac){ 
                                    $print_request = $this->AdminModel->fs("album_selected",array('u_id'=>@$fac->id,'print_status'=>1));
                                    $get_package = $this->AdminModel->fs_desc("order_address",array("status"=>1,"payment_status"=>"success","u_id"=>$fac->id),"id");
								    $order_details = $this->AdminModel->fs("order_details",array('u_id'=>@$fac->id,'order_id'=>$get_package->order_id));
								     $package_name = $this->AdminModel->fs("pricing",array('id'=>@$order_details->p_id,));
								     $genrate_url =  $this->AdminModel->fs("genrate_url",array('u_id'=>@$fac->id));
								 	?>
									 <tr>
								<td><?php echo $is++; ?></td>
							
								<td><?php echo $fac->first_name." ".$fac->last_name; ?></td>
							
									<td><?php echo $fac->email; ?></td>
							        <td><?php echo $fac->number; ?></td>
								
							<td><?php if($fac->status=="1"){ ?>
									<a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/User/UpdateUser/'.$fac->id) ?>">Active</a>
								<?php }
								else{ ?>
									<a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/User/UpdateUser/'.$fac->id) ?>">Blocked</a>
								<?php } ?></td>
								
							
								<td><?php if($fac->is_verify=="1"){ ?>
									<a class="btn btn-xs btn-munchkin" href="#">Complete</a>
								<?php }
								else{ ?>
									<a class="btn btn-xs btn-munchkin" href="#">Pending</a>
								<?php } ?></td>
								<td><?php if($genrate_url){ ?>
								    <?php echo $package_name->name?$package_name->name:"Free Trial"; ?>
								        <?php } ?>
								    </td>
								<td><?php echo @$genrate_url->expiry_date; ?></td>
								<td>
								    <?php if($print_request){ ?>
								    <a href="<?php echo base_url('admin/User/DownloadAlbumImage/'.$fac->id) ?>"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
								       
								    <?php echo " Print Request For Album ".$print_request->album_id; } ?>
								</td>
								<td>
                                         <a href="<?php echo base_url('admin/view_user/'.$fac->id) ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-eye"></i> view</a>
									</td>

									
							</tr>
<?php 								 }
								 
							 }
							   if(isset($_POST['submit'])){
							 	include_once 'contact_reply.php';
							 	
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