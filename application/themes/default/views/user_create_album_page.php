
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/inner.css"> 
<style>
     .btn-munchkin{
        margin-bottom :15px !important;
    } 
</style>
<main class="login-page dashboard" >
<?php include_once('banner_dashboard.php'); ?>
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
                
                <div class="col-md-12 text-center">
                        <button class="navbar-toggler show-side " type="button">
                            <span class="fa fa-bars "></span>
                            <span class="fa fa-times " style="display:none"></span>
                        </button>  
                     <div class="row">
                        
                          <?php include_once('user_sidebar.php'); ?>
                       
                            <div class="col-lg-9 col-md-12 dash-tabs text-left">
                                <?php if ($success = $this->session->flashdata('success')): ?>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong><?php echo $success; ?></strong> </a>
							</div>
						<?php endif ?>

						<?php if ($error = $this->session->flashdata('error')): ?>
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong><?php echo $error; ?></strong> </a>
							</div>
						<?php endif ?>
                            <div class="tab-content" id="v-pills-tabContent">
                              
                              
                                
                                

                                
                                <div class="tab-pane fade show active" id="v-pills-milestones" role="tabpanel" aria-labelledby="v-pills-milestones-tab">
                                   <span class="title-table ">  First And Last Page</span>
                                   <span class="float-right">
                                        <a class="btn  btn-munchkin" href="<?php echo base_url('Users/albumimage'); ?>"><span><i class="fas fa-plus"></i> Select Photos for album </span></a>
                                        <a class="btn  btn-munchkin" href="<?php echo base_url('Users/album'); ?>"><span><i class="fas fa-undo-alt"></i> Back</span></a>
                                    
                                    </span><hr>
                                
                                <div class="table-responsive">
                                      <table class="table table-borderless booking-order-main-table">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label>#</label>
                                                </td>
                                                <td>
                                                    <label> Album</label>
                                                </td>
                                               
                                                <td>
                                                    <label>Page Type</label>
                                                </td>
                                                <td>
                                                    <label>Action</label>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(is_array($fetch_data) || is_object($fetch_data)){
                                                $i=1;
                                                foreach($fetch_data as $fetch_data){
                                                   
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++; ?>
                                                </td>
                                                <td>
                                                    <p ><?php 
                                                    if($fetch_data->album_id == 1){
                                                        echo "Album 1";
                                                    
                                                    } elseif($fetch_data->album_id == 2){
                                                        echo "Album 2";
                                                    
                                                    }
                                                    elseif($fetch_data->album_id == 3){
                                                        echo "Album 3";
                                                    
                                                    }
                                                    ?> </p>
                                                </td>
                                                <!--<td><input type="number" value="<?php echo $all_milestone->sort_order; ?>" min=0 data-id="<?php echo $all_milestone->id; ?>" class="UpdateSortOrder"></td>-->
                                                   <td>
                                                   <p ><?php 
                                                    if($fetch_data->type == 1){
                                                        echo "First Page";
                                                    
                                                    } elseif($fetch_data->type == 2){
                                                        echo "Last Page";
                                                    
                                                    }
                                                    
                                                    ?> </p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn  text-success" data-toggle="modal" data-target="#edit_miles<?php echo $fetch_data->id; ?>"><i class="fas fa-pen"></i> </a>
                                                    <a href="#" class="btn text-danger RemoveAlbumPage" data-id="<?php echo $fetch_data->id; ?>"> <i class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                            
                                            
                                            <!-- Modals -->
<div class="modal fade " id="edit_miles<?php echo $fetch_data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="add_milesTitle" aria-hidden="true" style=" z-index: 99999999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="  color: #212529;">Edit Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <form class="form_edit_album_page" method="POST" >
                <input type="hidden" name="id" value="<?php echo @$fetch_data->id; ?>">
              <div class="form-row">

                <input type="hidden" class="form-control album_id" name="album_id" value="<?php echo @$select_album->album_id; ?>" id="album_id" >
                   <div class="form-group col-md-12">
                  <label class="labels-mil">Page Type</label>
                    <select class="form-control page_type" name="type" id="">
                        <option value="">Select Page Type</option>
                        <?php foreach($page_type as $key=> $value){ 
                         if($fetch_data->type == $key ){
                        ?>
                        <option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
                        <?php }else{ ?>
                         <option value="<?php echo $key; ?>" ><?php echo $value; ?></option>
                        <?php } } ?>
                        
                    </select>
                
                </div>
                
                 <div class="form-group col-md-12 baby_names" style="display:<?php echo $fetch_data->album_id==3 ||  $fetch_data->album_id==1 ||  $fetch_data->album_id==2 && $fetch_data->type==1?'block':'none'; ?>;" id="baby_name">
                  <label class="labels-mil">Baby Name</label>
                  <div class="custom-file">
                   <input type="text" class="form-control"  name="name" value="<?php echo @$fetch_data->name; ?>"  placeholder="Baby Name">
                  </div>
                </div>
                 <div class="form-group col-md-12 baby_date" style="display:<?php echo $fetch_data->album_id==1 || $fetch_data->album_id==3 && $fetch_data->type==1 ?'block':'none'; ?>;" id="baby_date">
                  <label class="labels-mil">Date</label>
                  <div class="custom-file">
                   <input type="text" class="form-control"  name="date" value="<?php echo @$fetch_data->date; ?>" placeholder="Date">
                  </div>
                </div>
                
                <div class="form-group col-md-12 baby_image" style="display:<?php echo $fetch_data->album_id==1 ||  $fetch_data->album_id==2 || $fetch_data->album_id==3 && $fetch_data->type==1?'block':'none'; ?>;"  id="baby_image">
                  <label class="labels-mil">Add Image</label>
                  <img src="<?php echo base_url(@$fetch_data->img); ?>" height=100 width=100>
                  <div class="custom-file">
                    <input type="file" name="img" class="custom-file-input" >
                    <label class="custom-file-label" >Choose file</label>
                  </div>
                
                </div>
                <div class="form-group col-md-12 baby_image2" style="display:<?php echo  $fetch_data->album_id==3 && $fetch_data->type==1?'block':'none'; ?>;"  id="baby_image2">
                  <label class="labels-mil">Add Image</label>
                  <img src="<?php echo base_url(@$fetch_data->img2); ?>" height=100 width=100>
                  <div class="custom-file">
                    <input type="file" name="img2" class="custom-file-input" >
                    <label class="custom-file-label" >Choose file</label>
                  </div>
                
                </div>
                <div class="form-group col-md-12 description" style="display:<?php echo $fetch_data->album_id==1 && $fetch_data->type==2?'block':'none'; ?>;" id="description">
                  <label class="labels-mil">Small Message</label>
                  <div class="custom-file">
                   <input type="text" class="form-control"  name="description" value="<?php echo @$fetch_data->description; ?>"  placeholder="Small Message">
                  </div>
                </div>
                
              </div>
              <button type="submit" class="btn btn-munchkin "><span>Save</span></button>
            </form>
      </div>
    </div>
  </div>
</div>

                                            <?php } } ?>
                                           
                                           
                                            
                                            
                                        </tbody>
                                    </table>
                                     </div>
                                    
                                        <div class="text-center"><a class="btn  btn-munchkin" data-toggle="modal" data-target="#add_miles"><span>Edit front and last image</span></a>
                                </div>
                                     
                                     
                                
                                </div>
                                
                            </div>

                      
                            
                            </div>
                        </div>
                </div>
            </div>	
        </div>
    </secction>
    
    



    
</main>
<?php include("include/footer.php") ?>





<!-- Modal -->
<div class="modal fade dashboard-color" id="add_miles" tabindex="-1" role="dialog" aria-labelledby="add_milesTitle" aria-hidden="true" style=" z-index: 99999999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <form id="form_add_album_page" method="POST">
              <div class="form-row ">
                <!--<div class="form-group col-md-12">-->
                <!--  <label class="labels-mil">Album</label>-->
                <!--    <select class="form-control album_id" name="album_id" id="album_id">-->
                <!--        <option value="">Select Album</option>-->
                <!--        <?php foreach($all_album as $key=> $value){ ?>-->
                <!--        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>-->
                <!--        <?php } ?>-->
                        
                <!--    </select>-->
                
                <!--</div>-->
                 <input type="hidden" class="form-control album_id" name="album_id" value="<?php echo @$select_album->album_id; ?>" id="album_id" >
                <div class="form-group col-md-12">
                  <label class="labels-mil">Page Type</label>
                    <select class="form-control page_type" name="type" id="">
                        <option value="">Select Page Type</option>
                        <?php foreach($page_type as $key=> $value){ ?>
                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                        
                    </select>
                
                </div>
                 <div class="form-group col-md-12 baby_names" style="display:none;" id="baby_name">
                  <label class="labels-mil">Baby Name</label>
                  <div class="custom-file">
                   <input type="text" class="form-control"  name="name"  placeholder="Baby Name">
                  </div>
                </div> 
                 <div class="form-group col-md-12 baby_date" style="display:none;" id="baby_date">
                  <label class="labels-mil">Date</label>
                  <div class="custom-file">
                   <input type="text" class="form-control"  name="date"  placeholder="Date">
                  </div>
                </div>
                
                <div class="form-group col-md-12 baby_image" style="display:none;" id="baby_image">
                  <label class="labels-mil">Add Image</label>
                  <div class="custom-file">
                    <input type="file" name="img" class="custom-file-input" >
                    <label class="custom-file-label" >Choose file</label>
                  </div>
                 
                </div>
                
                 <div class="form-group col-md-12 baby_image2" style="display:none;" id="baby_image2">
                  <label class="labels-mil">Add Image 2</label>
                  <div class="custom-file">
                    <input type="file" name="img2" class="custom-file-input" >
                    <label class="custom-file-label" >Choose file</label>
                  </div>
                 
                </div>
                
                <div class="form-group col-md-12 description" style="display:none;" id="description">
                  <label class="labels-mil">Small Message</label>
                  <div class="custom-file">
                   <input type="text" class="form-control"  name="description"  placeholder="Small Message">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-munchkin "><span>Add</span></button>
            </form>
      </div>
    </div>
  </div>
</div>



<script src="<?php echo base_url('assets/user.js'); ?>"></script>
<script>
$(document).on("change",".page_type",function(){
    var page_type = $(this).val();
    var album_id = $(".album_id").val();
    
  //alert(album_id);
    if(page_type && album_id){
        if(album_id == 1 &&  page_type == 1){
            $(".baby_date").show();
            $(".baby_image").show();
            $(".baby_names").show();
             $(".description").hide();
             $(".baby_image2").hide();
        }else if(album_id == 1 &&  page_type == 2){
            $(".baby_date").hide();
            $(".baby_image").hide();
            $(".baby_names").hide();
             $(".description").show();
             $(".baby_image2").hide();
        }else if(album_id == 2 &&  page_type == 1){
            $(".baby_date").hide();
            $(".baby_image").show();
            $(".baby_name").show();
             $(".description").hide();
             $(".baby_image2").hide();
        }else if(album_id == 2 &&  page_type == 2){
            $(".baby_date").hide();
            $(".baby_image").hide();
            $(".baby_names").hide();
             $(".description").hide();
             $(".baby_image2").hide();
        }else if(album_id == 3 &&  page_type == 1){
              $(".baby_date").show();
            $(".baby_image").show();
            $(".baby_names").show();
             $(".description").hide();
             $(".baby_image2").show();
        }
        else if(album_id == 3 &&  page_type == 2){
              $(".baby_date").hide();
            $(".baby_image").hide();
            $(".baby_names").hide();
             $(".description").hide();
             $(".baby_image2").hide();
        }
    }
    
})
</script>

<Style>
.add_miles .labels-mil {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}
.modal-open .modal-backdrop.show {
    z-index:9999;
}
.modal-open .dash-tabs:after {
    content: '';
    position: absolute;
    background: #000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    transition: opacity .15s linear;
    opacity: 0.5;
    z-index: 99999;
}
.modal-open .side-menu:after {
    content: '';
    position: absolute;
    background: #000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    transition: opacity .15s linear;
    opacity: 0.5;
    z-index: 99999;
}
.login-page .banner .form-control {
    color: #495057 !important;
    padding: .375rem .75rem !important;
    border-radius: .25rem !important;
    font-size: 1rem !important;
    width: 100% !important;
}
.dashboard-color label {
    font-size: 14px;
    font-weight: 700;
    color: #4D1818;
}

.select_album_image input{
    width: 50%;
    text-align: center;
    color: #4D1818;
    border-radius: 10px;
    font-size: 14px;
    background: #0393EB12;
    border: none;
    box-shadow: none;
    outline: none;
}
.select_album_image .update_image input{
    display:none;
}
.select_album_image .update_image span{
    width: 25px;
    height: 25px;
    font-size: 12px;
    border: 1px solid;
    display: inline-flex;
    align-items: center;
    justify-content: center; 
}

.select_album_image .update_image span i{
    display: none;
}
.select_album_image .update_image input:checked + span i {
  display: block;
}
</Style>



