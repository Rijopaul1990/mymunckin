
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/inner.css"> 
<style>

    .form-group.theme input:checked + label {
    border: 1px solid #f9f9f9 !important;
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
                    
                    <h1>Change Theme Color</h1>
                    <!--<p class="welcome-content">Change Theme here</p>-->
                    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
                    <form >
                       
                            <?php if($genrate_url->due_date){ ?>
                          <div class="form-group">
                            <label for="date">Baby Due Date</label>
                            <input type="month"  value="<?php echo @$genrate_url->due_date; ?>" class="form-control"   readonly>
                          </div>
                          <?php } elseif($genrate_url->dob){ ?>
                          
                          <div class="form-group">
                            <label for="date1">Date Of Birth</label>
                            <input type="month" value="<?php echo @$genrate_url->dob; ?>" class="form-control"   readonly>
                          </div>
                          <?php } ?>
                            <div class="form-group">
                            <label for="forurl">Create Your URL</label>
                            <div class="position-relative">
                            <input type="text" name="name" value="<?php echo base_url($genrate_link); ?>" class="form-control" id="forurl" placeholder="Enter your baby name" readonly>
                           
                            </div>
                            <span id="new_url"></span>

                          </div>
                          <?php if(@$genrate_url->gender){ ?>
                          <div class="form-group radio">
                            <p >Select Gender</p>
                               <div class="row">
                                <div class="col">
                                    <input type="radio" id="girl" name="gender" value="girl" <?php echo @$genrate_url->gender == "girl"?"checked":''; ?> disabled>
                                    <label for="girl">GIRL</label>
                                </div>
                                <div class="col">
                                    <input type="radio" id="boy" name="gender" value="boy" <?php echo @$genrate_url->gender == "boy"?"checked":''; ?> disabled>
                                    <label for="boy">BOY</label><br>
                                </div>
                              </div>
                          </div>
                          <?php } ?>
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

                                  </div>
                                  <br>
                          </div>
                        
                        <button type="button" id="btn_change_theme" name="submitform" class="btn btn-munchkin"><span>Change Theme</span></button>
                    </form>
                    

                </div>
            </div>	
        </div>
    </secction>

</main>



<?php include('include/footer.php') ?>
<script src="<?php echo base_url('assets/user.js'); ?>"></script>
<script>
    //trigger when form is submitted
// $("#genrate_url").submit(function(e){
//     $('#confirm').modal('show');
//     return false;
// });

</script>
