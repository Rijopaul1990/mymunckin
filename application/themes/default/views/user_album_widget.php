<style>
    .milestone_tab span.title-table {
    font-weight: 700;
    font-size: 22px;
    color: #4D1818;
}
.milestone_tab hr {
    width: 60px;
    height: 2px;
    margin: 5px 0;
    background: #FF721D;
    border-radius: 28px;
}
.milestone_tab .tag_linee {
    margin-bottom:10px ;
    font-weight:600;
    text-transform: capitalize;
}
.milestone_tab .tag_linee span {
color:#ff721d;
}
.milestone_tab .select_album_image input {
    width: 50%;
    text-align: center;
    color: #4D1818;
    border-radius: 10px;
    font-size: 14px;
    height: 40px;
    background: #0393EB12;
    border: none;
    box-shadow: none;
    outline: none;
}

.milestone_tab {
    width: 26%;
    position: absolute;
    left: -26%;
    transition: 0.5s all;
    z-index: 99;
    background: white;
    box-shadow: 0 0 10px #ff721d;
    /*border:1px solid #ff721d;*/
    padding: 10px 0 0px 10px;
    border-radius: 0 20px 20px 0;
}
.milestone_tab.mill_open{
    left:0;
}
.milestone_tab  .select_album_image .update_image input {
    display: none;
}
.milestone_tab .select_album_image .update_image span i {
    display: none;
}
.milestone_tab .select_album_image .update_image input:checked + span i {
    display: block;
}
.milestone_tab .select_album_image .update_image span {
    width: 25px;
    height: 25px;
    font-size: 12px;
    border: 1px solid;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.milestone_tab .card{
    border:none;
}
.milestone_tab .card .card-header{
    padding: 15px 0;
    background: transparent;
}
.milestone_tab .card-body {
    padding: 0;
}
.milestone_tab .card .card-header button{
    width:100%;
    text-align:left;    
    padding:  0;
    box-shadow: none;
    text-decoration: none;
    color: #111;
    font-weight: 700;
}
.milestone_tab #accordion {
    height: 500px;
    overflow-y: auto;
}
.milestone_tab .card-header button:after {
    transform: rotate(180deg);
    content: "\f0d7";
    font-family: "Font Awesome 5 Free";
    font-weight: 900; 
    position: absolute;
    transition: 0.3s;
    right: 20px;
    color: #111;
    font-size: 18px;
    top: 12px;
}
.milestone_tab .card-header button.collapsed:after {
    transform: rotate(0deg);
    transition: 0.3s;
}
.milestone_tab  .milestone_tab_btn{
    position: absolute;
    right: -42px;
    top: 70px;
    background: #ff721d;
    width: 42px;
    border-radius: 0 10px 10px 0;
    height: 42px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
}
.milestone_tab td:first-child{
    text-align:left;
}
.milestone_tab td label {
    font-weight: 700;
}
.milestone_tab td img {
    height: 80px;
}
.milestone_tab td {
    vertical-align: middle;
    padding: 10px 0 0;
    text-align:center;
}
input[type=number].UpdateSortOrder::-webkit-inner-spin-button, 
input[type=number].UpdateSortOrder::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
<div class="milestone_tab mill_open">
    <span class="title-table ">Select  Baby Book Image</span><hr>
    <?php 
        $check = $this->AdminModel->AllCount("milestone",array("status"=>1,'u_id'=>$this->session->userdata['userdetail']['id']));
        if($check >=1){       
    ?>
    
    <p class="tag_linee"><span>Note : </span>choose 5 images from each milestone for baby book</p>
    <?php } else { ?>
    <p class="tag_linee"><span>Note : </span>Please add images in milestone section from admin 
    <?php }?>
     </p><a href="<?php echo base_url('Users/milestones'); ?>" class="btn btn-munchkin " style=" min-width: 80px;"><span>Add Image</span></a>
    
    <div id="accordion">
        <?php 
        if(is_array($milestone_category) || is_object($milestone_category)){
            $i=0;
            foreach($milestone_category as $mile_category){
                $fetch_milestone_image = $this->AdminModel->all_fetch("milestone",array("status"=>1,'m_id'=>$mile_category->id,'u_id'=>$this->session->userdata['userdetail']['id']));
            if(count($fetch_milestone_image) >= 1){
        ?>
      <div class="card">
        <div class="card-header" id="headingOne<?php echo $mile_category->id; ?>">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed custom-goto" id="custom-goto" data-id="<?php echo $i+=2 ?>" data-toggle="collapse" data-target="#collapseOne<?php echo $mile_category->id; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $mile_category->id; ?>">
              <?php echo $mile_category->name; ?>
            </button>
          </h5>
        </div>
    
        <div id="collapseOne<?php echo $mile_category->id; ?>" class="collapse " aria-labelledby="headingOne<?php echo $mile_category->id; ?>" data-parent="#accordion">
              <div class="card-body">
                <table class="table table-borderless  select_album_image">
                    <thead>
                        <tr>
                            <td width="40%">
                                <label>Image</label>
                            </td>
                            <td>
                                <label>Sort Order</label>
                            </td>
                            <td width="35%">
                                <label>Select Images</label>
                            </td>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(is_array($fetch_milestone_image) || is_object($fetch_milestone_image)){
                            foreach($fetch_milestone_image as $f_m_img){
                        ?>
                        <tr>
                            <td>
                                <img src="<?php echo base_url($f_m_img->img); ?>" class="img-fluid " alt="price1">
                            </td>
                            <td><input type="number" value="<?php echo $f_m_img->sort_order; ?>" min=0 data-id="<?php echo $f_m_img->id; ?>" class="UpdateSortOrder"></td>
                                              
                           <td>
                            <label class="update_image">  
                                 <input type="checkbox" data-id="<?php echo $f_m_img->id; ?>" class="UpdateForAlbum" <?php echo $f_m_img->status_for_album==1 ?'checked':' '; ?>>
                                 <span class="btn  text-success"><i class="fas fa-check"></i></span>
                            </label>
                            </td>
                        </tr>
                        <?php } } ?>
                        

                    </tbody>
                </table>
              </div>
        </div>
      </div>
      <?php } } } ?>
      
      
    </div>
<div class="milestone_tab_btn">
    <i class="fas fa-cog"></i>
</div>
</div>      
    <script>
         $(".milestone_tab_btn").click(function(){
  $(".milestone_tab").toggleClass("mill_open");
});
    </script>  
    
    
    
<!-- Modal -->
<div class="modal fade" id="print" tabindex="-1" role="dialog" aria-labelledby="print1" aria-hidden="true" style="z-index: 999999999; ">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="print1">Ready to print </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
         <div class="row ">
            <p class="px-4">I created MyMunchkin to make baby booking as easy as responding to an e-mail and as fun as talking to a girlfriend. With MyMunchkin,
            all you have to do is register online and we will walk you through the rest. You're expecting? Then please register while you're pregnant 
            and get a head start on making those memories last a lifetime.</p>
          </div>
            <a  data-dismiss="modal" class="btn btn-munchkin mt-4"><span>Cancel</span></a>
            <a href="javascript:void(0);" id="print_request" data-type="print" class="btn btn-munchkin mt-4"><span>Print</span></a>
      </div>
    </div>
  </div>
</div>

      