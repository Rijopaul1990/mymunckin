
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 
<style>
    .notavailable{
        color:red !important;
    }
</style>
<main class="signup-page welcome" >


    <section class="banner" id="price">
        <div class="background-icons4">
             <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud" alt="cloud"/> 
            <img src="<?php echo base_url('assets/') ?>img/icons/login-cloud.svg" class="img-fluid login-cloud1" alt="cloud"/>
        </div>
        <div class="container">
            <div class="row bgg">
                
                <div class="col-lg-10 col-12 align-self-center text-center m-auto">
                     <div class="background-icons4">
                        <img src="<?php echo base_url('assets/') ?>img/icons/about1.svg" class="img-fluid price1" alt="price1" >
                        <img src="<?php echo base_url('assets/') ?>img/icons/about2.svg" class="img-fluid price2" alt="price2" >
                        <img src="<?php echo base_url('assets/') ?>img/icons/price3.svg" class="img-fluid price3" alt="price3" >
                        <img src="<?php echo base_url('assets/') ?>img/icons/price2.svg" class="img-fluid price4" alt="price3" >
                    </div>	
                    
                    <h1>Welcome to MyMunchkin</h1>
                    <p class="welcome-content">Fill the form below to proceed</p>
                    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
                    <form id="genrate_url">
                       

                          <div class="form-group">
                            <label for="date">Baby Due Date</label>
                           
                            <input type="month" name="due_date" value="<?php echo @$genrate_url->due_date; ?>" class="form-control common_class" id="date"  data-id="duedate" placeholder="DD/MM/YYY" min="<?php echo date("Y-m-d"); ?>">
                          </div>
                          <p class="or">OR</p>
                          <div class="form-group">
                            <label for="date1">Date Of Birth</label>
                            <input type="month" name="dob" value="<?php echo @$genrate_url->dob; ?>" class="form-control common_class"  data-id="dateofdate" id="date1" placeholder="DD/MM/YYY">
                          </div>
                            <div class="form-group" id="name">
                            <label for="forurl">Create Your URL</label>
                            <div class="position-relative suggest_name">
                            <input type="text" name="name" value="" class="form-control" id="forurl" placeholder="Enter your baby name">
                            <div id="res_data">
                            <!--<span class="available"><i class="fas fa-check-circle"></i></span>-->
                            </div>
                            </div>
                            <span id="new_url"></span>

                          </div>
                          
                          <div class="form-group radio" id="gender">
                            <p >Select Gender</p>
                               <div class="row">
                                <div class="col">
                                    <input type="radio" id="girl" name="gender" value="girl" <?php echo @$genrate_url->gender == "girl"?"checked":''; ?>>
                                    <label for="girl">GIRL</label>
                                </div>
                                <div class="col">
                                    <input type="radio" id="boy" name="gender" value="boy" <?php echo @$genrate_url->gender == "boy"?"checked":''; ?>>
                                    <label for="boy">BOY</label><br>
                                </div>
                              </div>
                          </div>
                          <div class="form-group theme">
                            <p>Select Theme</p>
                                <div class="row">
                                    <div class="col">
                                        <input type="radio" id="t1" name="theme" value="#ffbcc1" <?php echo @$genrate_url->theme == "#ffbcc1"?"checked":''; ?>>
                                        <label for="t1" class="t1"></label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" id="t2" name="theme" value="#35D8E3" <?php echo @$genrate_url->theme == "#35D8E3"?"checked":''; ?>>
                                        <label for="t2" class="t2"></label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" id="t3" name="theme" value="#9494FE" <?php echo @$genrate_url->theme == "#9494FE"?"checked":''; ?>>
                                        <label for="t3" class="t3"></label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" id="t4" name="theme" value="#e1beff" <?php echo @$genrate_url->theme == "#e1beff"?"checked":''; ?>>
                                        <label for="t4" class="t4"></label>
                                    </div>
                                    <!--<div class="col">-->
                                    <!--    <button type="button" # data-toggle="modal" data-target="#chose-color">-->
                                    <!--      + <br>Select Custom-->
                                    <!--    </button>-->
                                      
                                    <!--</div>-->
                                  </div>
                                  <br>
                          </div>
                        
                        <button type="button" id="btn_form" name="submitform" class="btn btn-munchkin"><span>CONTINUE</span></button>
                    </form>
                    

                </div>
            </div>	
        </div>
    </secction>

</main>


<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Confirm </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
         <div class="row ">
             <p class="px-4">Welcome onboard. We request you to visit the dashboard to update your munchkins date of birth once he / she has arrived 😊.</p>
            <p class="px-4 d-none">I created MyMunchkin to make baby booking as easy as responding to an e-mail and as fun as talking to a girlfriend. With MyMunchkin,
            all you have to do is register online and we will walk you through the rest. You're expecting? Then please register while you're pregnant 
            and get a head start on making those memories last a lifetime.</p>
          </div>
            <a href="<?php echo base_url('Users'); ?>" class="btn btn-munchkin mt-4"><span>Cancel</span></a>
            <a href="javascript:void(0);" id="next_btn_submit" class="btn btn-munchkin mt-4"><span>Next</span></a>
      </div>
    </div>
  </div>
</div>
    

<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/user.js'); ?>"></script>
<script>
  $(document).on("change",".common_class",function(){
    var duedate = $(this).data('id');
      if(duedate == "duedate"){
        $("#name").hide();
        $("#gender").hide();
      }else{
        $("#name").show();
        $("#gender").show();
      }
  });
    //trigger when form is submitted
// $("#genrate_url").submit(function(e){
//     $('#confirm').modal('show');
//     return false;
// });

</script>
