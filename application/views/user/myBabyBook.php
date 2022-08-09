<div class="content-body" style="min-height: 788px;">
   <!-- row -->
   <div class="container-fluid">
      <!-- Add Order -->
      <div class="row">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous">
         <input type="hidden" id="base_url" value="<?php echo base_url();?>">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Milestone Categories</h4>
                  <a href="<?php echo base_url(); ?>Users/albumimagen" class="btn btn-secondary btn-rounded">+Select photos for baby book</a>
                  <a href="javascript:void(0)" class="btn btn-secondary btn-rounded" id="RemoveMulitpleMilestone">-Edit first or last page for baby book</a>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-responsive-sm">
                        <thead>
                           <tr>
                              <th>Baby book</th>
                              <th>Demo</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="<?php echo base_url('assets/'); ?>img/dashboard_2.png" class="img-fluid " alt="price1" style="width:300px"></td>
                                <td><a href="#" class="btn  btn-munchkin album_privew badge badge-danger"  data-toggle="modal" data-target="#album_demo"> <span> View</span></a></td>
                                <td>
                                <?php if(@$select_album->album_id == 1){ ?>
                                                    <span> Baby Book Selected</span>
                                                    <?php } else{ 
                                                    if($check_print_status->print_status != 1){
                                                    ?>
                                <button type="button" data-id="1" class="btn btn-munchkin btn-default selectAlbum album_privew badge badge-danger"><span>Select Baby Book</span></button>
                                <?php } } ?>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo base_url('assets/'); ?>img/dashboard_1.png" class="img-fluid " alt="price1" style="width:300px"></td>
                                <td><a href="#" class="btn  btn-munchkin album_privew badge badge-danger"  data-toggle="modal" data-target="#album_demo2"> <span> View</span></a></td>
                                <td>
                                <?php if(@$select_album->album_id == 2){ ?>
                                                    <span> Baby Book Selected</span>
                                                    <?php } else{ 
                                                    if($check_print_status->print_status != 1){
                                                    ?>
                                <button type="button" data-id="2" class="btn btn-munchkin selectAlbum album_privew badge badge-danger"><span>Select Baby Book</span></button>
                                <?php } } ?>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo base_url('assets/'); ?>img/dashboard_3.png" class="img-fluid " alt="price1" style="width:300px"></td>
                                <td><a href="#" class="btn  btn-munchkin album_privew badge badge-danger"  data-toggle="modal" data-target="#album_demo3"> <span> View</span></a></td>
                                <td>
                                <?php if(@$select_album->album_id == 3){ ?>
                                                    <span> Baby Book Selected</span>
                                                    <?php } else{ 
                                                    if($check_print_status->print_status != 1){
                                                    ?>
                                <button type="button" data-id="3" class="btn btn-munchkin selectAlbum album_privew badge badge-danger"><span>Select Baby Book</span></button>
                                <?php } } ?>
                                </td>
                            </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="<?php echo base_url('assets/user.js'); ?>"></script>
<!-- Modal -->
<div class="modal fade album_preview_css" id="album_demo" tabindex="-1" role="dialog" aria-labelledby="album_demo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="col-lg-12 text-center">
                <h2>Baby Book Preview</h2>
                <div class="wrapper1">
                  <div class="aspect">
                    <div class="aspect-inner">
                      <div class="flipbook" id="flipbook">
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album1.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album2.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album3.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album4.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album5.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album6.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album7.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album8.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album9.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album10.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album11.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album12.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album13.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album14.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album15.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album16.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album17.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album18.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album19.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album20.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album21.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_album22.jpg'); ?>" alt="" /></div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <div class="flip-control">
                    <a href="#" id="prev"> <img src="<?php echo base_url('assets/img/prev.png'); ?>"> </a>
                    <a href="#" id="next"> <img src="<?php echo base_url('assets/img/next.png'); ?>"> </a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade album_preview_css" id="album_demo2" tabindex="-1" role="dialog" aria-labelledby="album_demo2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="col-lg-12 text-center">
                <h2>Baby Book Preview</h2>
                <div class="wrapper1">
                  <div class="aspect">
                    <div class="aspect-inner">
                      <div class="flipbook" id="flipbook2">
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album1.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album2.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album3.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album4.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album5.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album6.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album7.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album8.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album9.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album10.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album11.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album12.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album13.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album14.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album15.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album16.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album17.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album18.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album19.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album20.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album21.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_2album22.jpg'); ?>" alt="" /></div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <div class="flip-control">
                    <a href="#" id="prev2"> <img src="<?php echo base_url('assets/img/prev.png'); ?>"> </a>
                    <a href="#" id="next2"> <img src="<?php echo base_url('assets/img/next.png'); ?>"> </a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade album_preview_css" id="album_demo3" tabindex="-1" role="dialog" aria-labelledby="album_demo3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="col-lg-12 text-center">
                <h2>Baby Book Preview</h2>
                <div class="wrapper1">
                  <div class="aspect">
                    <div class="aspect-inner">
                      <div class="flipbook" id="flipbook3">
                       <div class="page"><img src="<?php echo base_url('assets/images/pre_3album1.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album2.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album3.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album4.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album5.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album6.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album7.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album8.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album9.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album10.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album11.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album12.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album13.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album14.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album15.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album16.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album17.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album18.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album19.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album20.jpg'); ?>"  alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album21.jpg'); ?>" alt="" /></div>
                        <div class="page"><img src="<?php echo base_url('assets/images/pre_3album22.jpg'); ?>" alt="" /></div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <div class="flip-control">
                    <a href="#" id="prev3"> <img src="<?php echo base_url('assets/img/prev.png'); ?>"> </a>
                    <a href="#" id="next3"> <img src="<?php echo base_url('assets/img/next.png'); ?>"> </a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>