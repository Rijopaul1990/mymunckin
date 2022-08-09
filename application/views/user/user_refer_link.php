<style>
     .btn-munchkin{
        margin-bottom :15px !important;
    } 

    .notavailable{
        color:red !important;
    }
   
    div#res_data {
    position: absolute;
    right: 12%;
    top: 50%;
    transform: translateY(-45%);
    }
    div#res_data .fa-check-circle {
        color: #28a745!important;
    }
    #new_url{
        color: #4b1616;
    }

    ul#social_share li {
        display: inline-block;
        margin: 0 5px;
    }

    ul#social_share a {
        text-decoration: none;
        color: #fff;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        
        width: 35px;
        height: 35px;
        display: flex;
        font-size: 18px
        
    }

    ul#social_share a.fb {
        background: #3b5998;
    }


    ul#social_share a.wt {
        background: #25D366;
    }

    ul#social_share a.tw {
        background: #00acee;
    }
</style>
<div class="content-body" style="min-height: 788px;">
   <!-- row -->
   <div class="container-fluid">
      <!-- Add Order -->
      <div class="row">
         <div class="col-xl-9 col-lg-9">
            <div class="card">
               <div class="card-body">
                  <div class="basic-form">
                     <form>
                        <h3>Update/Share Webpage</h3>
                        <div class="form-group row" style="padding-top:10px;">
                           <div class="col-sm-10">
                              <button type="button" class="btn btn-primary">
                              <a href="<?php echo base_url(@$genrate_link); ?>" target="_blank" class=""><span>Go to webpage</span></a>
                              </button>
                           </div>
                           <div class="col-sm-12" style="padding-top:20px;">
                              <label>Current Webpage</label>
                              <input type="text" value="<?php echo base_url(@$genrate_link); ?>" class="form-control" placeholder="">
                           </div>
                        </div>
                        <?php if($check_this_url->due_date){ ?>
                            <div class="form-group col-md-12">
                                      <label for="url" >Update your Webpage</label>
                                      <div class="position-relative">
                                      <input type="text" class="form-control " name="name"  id="forurl" placeholder="Enter your baby name" title="You can use your Child’s name as your webpage name">
                                       <div id="res_data">
                                       
                                        </div>
                                        </div>
                                        
                                        <span id="new_url"></span>
                                    </div>
                        <?php } ?>
                        <div class="form-group row">
                           <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Share</button>
                           </div>
                        </div>
                        <ul id="social_share" style="">
                            <li>
                                <a href="http://www.facebook.com/sharer.php?u=http://localhost/Mymunchkin/db/ivanshi" target="_blank" class="fb"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=&amp;text=http://localhost/Mymunchkin/db/ivanshi" target="_blank" class="wt"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="http://twitter.com/share?url=http://localhost/Mymunchkin/db/ivanshi&amp;text=My Munchkin &amp;hashtags=My_Munchkin" target="_blank" class="tw"><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>