<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Sail&display=swap" rel="stylesheet">


<?php include_once('banner_dashboard.php'); ?>
    
<link href="<?php echo base_url('assets/'); ?>css/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

<link rel="stylesheet" href="<?php echo base_url('assets/img-editor/styles.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/album/album3.css'); ?>">
<?php if($check_print_status->print_status != 1) 
    {
 include('user_album_widget.php');
    }
 ?> 
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">

       
<section id="albumm" class="main_cart_div">
   <div class="text-center mb-5 position-relative" style="z-index:0;">
     <a href="<?php echo base_url('Users/album'); ?>" class="btn btn-munchkin "><span><i class="fa fa-reply"></i> Back </span></a>
   <?php if($check_print_status->print_status != 1 && $check_ultimate >= 1) 
    { ?>
     <a href="#" class="btn btn-munchkin " data-toggle="modal" data-target="#print"><span><i class="fas fa-print"></i> Ready to print </span></a>
    <?php } ?>
     </div>
    <div id="mybook">
      
        <div class="second">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/front-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <div class="content">
                        <h2> Welcoming  </h2> 
                        <h2> <?php echo @$first_page->name; ?> </h2>
                        <span > <?php echo @$first_page->date; ?></span>  
                    </div>
                    
                    <ul> 
                      
                        <li>
                        <?php if(@$first_page->img){ ?>
                            <div class="" ><img src="<?php echo base_url($first_page->img); ?>"  class="edit"> </div>
                        <?php }else{ ?>
                        <div class=" placeholder_div"  >
                            <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                                        <?php } ?>
                    </li>
                       
                       
                        <li> <?php if(@$first_page->img2){ ?>
                            <div class="" ><img src="<?php echo base_url($first_page->img2); ?>"  class="edit"> </div>
                          
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        <img src="<?php echo base_url('assets/'); ?>images3/lion.png" class="laugh"> </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="third">
            <div class="main-bg">

                <img src="<?php echo base_url('assets/'); ?>images3/l1-bg.png" class="bg-image">   
                <div class="top-sec">
                    <h2> Baby Shower</h2>
                </div>
            </div>
        </div>
        
        <div class="forth">
            <div class="main-bg"> 
                <img src="<?php echo base_url('assets/'); ?>images3/r1-bg.jpg" class="bg-image">  
                <div class="top-sec">
                    <ul>
                       
                        <li >
                            <?php if($baby_shower1){ ?>
                            <div class="edit_img  " style="height:100%;" data-id="<?php echo @$baby_shower1->id; ?>" data-img="<?php echo base_url(@$baby_shower1->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower1->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li >
                            <?php if($baby_shower2){ ?>
                            <div class="edit_img  " style="height:100%;" data-id="<?php echo @$baby_shower2->id; ?>" data-img="<?php echo base_url(@$baby_shower2->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower2->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                       
                   
                    </ul>
                    <!--<h2 class="content"> Baby (name) a little bit of heaven sent down to Earth. </h2>-->
                    <ul class="second">
                        
                        <li >
                            <?php if($baby_shower3){ ?>
                            <div class="edit_img  " style="height:100%;" data-id="<?php echo @$baby_shower3->id; ?>" data-img="<?php echo base_url(@$baby_shower3->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower3->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li >
                            <?php if($baby_shower4){ ?>
                            <div class="edit_img  " style="height:100%;" data-id="<?php echo @$baby_shower4->id; ?>" data-img="<?php echo base_url(@$baby_shower4->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower4->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
   
        </div>
        
        <div class="fifth">
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images3/l2-bg.jpg" class="bg-image">   
                    <div class="top-sec">
                        <h2> Mom & Dad</h2>
                       <?php if(@$mom_dad1){ ?>
                            <div class="edit_img " data-id="<?php echo @$mom_dad1->id; ?>" data-img="<?php echo base_url(@$mom_dad1->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad1->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                                        <div class="edit_img placeholder_div"  >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                    </div>
                </div>
        </div>
        
        
          <div class="sixth">
            <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/'); ?>images3/r2-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <ul>
                       
                        <li>
                        <?php if(@$mom_dad2){ ?>
                            <div class="edit_img " style="height:100%;" data-id="<?php echo @$mom_dad2->id; ?>" data-img="<?php echo base_url(@$mom_dad2->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad2->img); ?>" class="edit">
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="height:100%;">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad4){ ?>
                            <div class="edit_img " style="height:100%;" data-id="<?php echo @$mom_dad4->id; ?>" data-img="<?php echo base_url(@$mom_dad4->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad4->img); ?>" class="edit">
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="height:100%;">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                        
                   
                    </ul>
                    <ul class="second">
                        
                    <li>
                        <?php if(@$mom_dad3){ ?>
                            <div class="edit_img " style="height:100%;" data-id="<?php echo @$mom_dad3->id; ?>" data-img="<?php echo base_url(@$mom_dad3->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad3->img); ?>" class="edit">
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="height:100%;">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad5){ ?>
                            <div class="edit_img " style="height:100%;" data-id="<?php echo @$mom_dad5->id; ?>" data-img="<?php echo base_url(@$mom_dad5->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad5->img); ?>" class="edit">
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="height:100%;">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                    </ul>
                </div>
            </div>
       
        </div>
         <div class="seventh">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/l3-bg.jpg" class="bg-image">
        
                <div class="section">
                    
                <div class="left-sec">
                <?php if(@$baby_arrival){ ?>
                        <div class="edit_img" data-id="<?php echo @$baby_arrival->id; ?>" data-img="<?php echo base_url(@$baby_arrival->img); ?>"  >
                            <img src="<?php echo base_url($baby_arrival->img); ?>" class=" edit">  </div>  
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" >
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
               </div> 
            
                    
                    <div class="right-sec">
                        <div class="title-bot">
                            <h3>Baby <br> Arrival    </h3>
                            <!--<p>30 APRIL 2021    </p>-->
                            <img src="<?php echo base_url('assets/'); ?>images3/ele.png" />
                        </div>
                        
                    </div>
                </div>  
            </div>
           
        </div>
        
        <div class="eighth">
            <div class="main-bg"> 
                <img src="<?php echo base_url('assets/'); ?>images3/r2-bg.jpg" class="bg-image">
                <div class="top-sec">
                     <ul>
                      
                        <li>
                        <?php if(@$baby_arrival2){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival2->id; ?>" data-img="<?php echo base_url(@$baby_arrival2->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival2->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="  height: 100%;">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>

                        <li>
                        <?php if(@$baby_arrival3){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival3->id; ?>" data-img="<?php echo base_url(@$baby_arrival3->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival3->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="  height: 100%;">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$baby_arrival4){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival4->id; ?>" data-img="<?php echo base_url(@$baby_arrival4->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival4->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="  height: 100%;">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$baby_arrival5){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival5->id; ?>" data-img="<?php echo base_url(@$baby_arrival5->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival5->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="  height: 100%;">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                       
                    </ul>

                </div>
            </div>
       
            
        </div>
        
         <div class="ninth">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/l4-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <h2> Welcome Home  </h2>
                    <ul>
                          
                              
                                <li> 
                                <?php if(@$welcome_home1){ ?>
                                <div class="edit_img " data-id="<?php echo @$welcome_home1->id; ?>" data-img="<?php echo base_url(@$welcome_home1->img); ?>" >
                                    <img src="<?php echo base_url(@$welcome_home1->img); ?>" class="edit">  </div>
                                    <?php }else{ ?>
                            <div class="edit_img placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                                </li>
                               
                        
                                <li> 
                                <?php if(@$welcome_home2){ ?>
                                <div class="edit_img " data-id="<?php echo @$welcome_home2->id; ?>" data-img="<?php echo base_url(@$welcome_home2->img); ?>" >
                                    <img src="<?php echo base_url(@$welcome_home2->img); ?>" class="edit">  </div>
                                    <?php }else{ ?>
                            <div class="edit_img placeholder_div">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                                </li>
                                
                         <img src="<?php echo base_url('assets/'); ?>images3/horse.png" class="horse"> 
                    </ul>
                </div>
            </div>
        </div>
        
         <div class="tenth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/r4-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    
                    <ul>
                        
                       <li> 
                       <?php if(@$welcome_home3){ ?>
                       <div class="edit_img h-100" data-id="<?php echo @$welcome_home3->id; ?>" data-img="<?php echo base_url(@$welcome_home3->img); ?>">
                           <img src="<?php echo base_url(@$welcome_home3->img); ?>" class="edit">  </div>
                           <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li> 
                       <?php if(@$welcome_home4){ ?>
                       <div class="edit_img h-100" data-id="<?php echo @$welcome_home4->id; ?>" data-img="<?php echo base_url(@$welcome_home4->img); ?>">
                           <img src="<?php echo base_url(@$welcome_home4->img); ?>" class="edit">  </div>
                           <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                       
                        <li> 
                       <?php if(@$welcome_home5){ ?>
                       <div class="edit_img h-100" data-id="<?php echo @$welcome_home5->id; ?>" data-img="<?php echo base_url(@$welcome_home5->img); ?>">
                           <img src="<?php echo base_url(@$welcome_home5->img); ?>" class="edit">  </div>
                           <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                       
                      
                       
                        
                   
                    </ul>
                </div>
            </div> 
             
             
       
        </div>
        <div class="eleven">
            
            <div class="main-bg"> 
                <img src="<?php echo base_url('assets/'); ?>images3/l5-bg.jpg" class="bg-image">
                <div class="top-sec"> 
                <div class="title-bot">
                        <h3> First Smile </h3> 
                    </div>
                    <?php if(@$first_smile){ ?>
                    <div class="edit_img" data-id="<?php echo @$first_smile->id; ?>" data-img="<?php echo base_url(@$first_smile->img); ?>">
                        <img src="<?php echo base_url(@$first_smile->img); ?>" class="baby-img edit">     </div> 
                        <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="baby-img img-fluid">
                            </div>
                               <?php } ?>  
                </div>
            </div>
        </div>
        <div class="twelve">
            
                <img src="<?php echo base_url('assets/'); ?>images3/l2-bg.jpg" class="bg-image">
            <div class="main-bg">
                <div class="top-sec">
                    <ul>
                       
                        <li>
                        <?php if(@$first_smile2){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile2->id; ?>" data-img="<?php echo base_url(@$first_smile2->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile2->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$first_smile3){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile3->id; ?>" data-img="<?php echo base_url(@$first_smile3->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile3->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$first_smile4){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile4->id; ?>" data-img="<?php echo base_url(@$first_smile4->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile4->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$first_smile5){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile5->id; ?>" data-img="<?php echo base_url(@$first_smile5->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile5->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="thirteen">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/l6-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <div class="content">
                        <h2> Nothing like a <span> laugh</span></h2> 
                    </div>
                    <ul>
                       
                        <li>
                        <?php if(@$laugh1){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh1->id; ?>" data-img="<?php echo base_url(@$laugh1->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh1->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        <!--<p>For all the things my hands have held thebest by far is you.</p>-->
                    </li>
                        
                        <li>
                        <?php if(@$laugh2){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh2->id; ?>" data-img="<?php echo base_url(@$laugh2->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh2->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
            </div>
            
               <div class="forthteen">
        
                   <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images3/r6-bg.jpg" class="bg-image"> 
                        <div class="top-sec">
                            <ul>
                               
                        <li>
                        <?php if(@$laugh3){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$laugh3->id; ?>" data-img="<?php echo base_url(@$laugh3->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh3->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        </li>
                        <li>
                        <?php if(@$laugh4){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$laugh4->id; ?>" data-img="<?php echo base_url(@$laugh4->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh4->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        </li>
                        <li>
                        <?php if(@$laugh5){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$laugh5->id; ?>" data-img="<?php echo base_url(@$laugh5->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh5->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        </li>
                      
                                

                            </ul>
                        </div>
                    </div>
            </div>
            
             <div class="fifteen">
                <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/images3/l5-bg.jpg'); ?>" class="bg-image">
                    <div class="top-sec"> 
                    <div class="title-bot">
                            <h2> Food </h2> 
                        </div>
                      
                        <?php if(@$foody){ ?>
                      
                            <div class="edit_img" data-id="<?php echo @$foody->id; ?>" data-img="<?php echo base_url(@$foody->img); ?>"  >
                            <img src="<?php echo base_url(@$foody->img); ?>" class="baby-img edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                    </div>
                </div>
                    
            </div>   
             <div class="sixteen">
               <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/images3/r2-bg.jpg'); ?>" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                             
                        <li>
                        <?php if(@$foody2){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$foody2->id; ?>" data-img="<?php echo base_url(@$foody2->img); ?>"  >
                            <img src="<?php echo base_url(@$foody2->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$foody4){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$foody4->id; ?>" data-img="<?php echo base_url(@$foody4->img); ?>"  >
                            <img src="<?php echo base_url(@$foody4->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                                
                             
                       
                        </ul>
                        <ul class="second">
                               
                        <li>
                        <?php if(@$foody3){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$foody3->id; ?>" data-img="<?php echo base_url(@$foody3->img); ?>"  >
                            <img src="<?php echo base_url(@$foody3->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$foody5){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$foody5->id; ?>" data-img="<?php echo base_url(@$foody5->img); ?>"  >
                            <img src="<?php echo base_url(@$foody5->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                                
                        </ul>
                    </div>
                </div>
            </div>
            
              <div class="seventeen">
                  
                   <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images3/l7-bg.jpg" class="bg-image">
                        <div class="section">
                            <div class="right-sec">
                                <div class="title-bot">
                                    <!--<p>There are two lasting bequests we can give our children. One is roots. The other is wings.</p>-->
                                    <img src="<?php echo base_url('assets/'); ?>images3/lion1.png">
                                </div>
                            </div>
                             <div class="left-sec"><h3>Sitting    </h3>
                               
                                   <?php if(@$sitting1){ ?>
                      
                            <div class="edit_img" data-id="<?php echo @$sitting1->id; ?>" data-img="<?php echo base_url(@$sitting1->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting1->img); ?>" class=" edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                            </div> 
                        </div>  
                    </div>
                </div>
            
               <div class="eighteen">
                   
                 <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/'); ?>images3/r7-bg.jpg" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                           
                             
                        <li>
                        <?php if($sitting2){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$sitting2->id; ?>" data-img="<?php echo base_url(@$sitting2->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting2->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if($sitting4){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$sitting4->id; ?>" data-img="<?php echo base_url(@$sitting4->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting4->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        
                       
                        </ul>
                        <ul class="second">
                        <li>
                        <?php if($sitting3){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$sitting3->id; ?>" data-img="<?php echo base_url(@$sitting3->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting3->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if($sitting5){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$sitting5->id; ?>" data-img="<?php echo base_url(@$sitting5->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting5->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            
               <div class="ninteen">
                   
                    <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images3/l8-bg.jpg" class="bg-image">
                
                        <div class="section">
                            <div class="left-sec">
                              
                                <?php if(@$birthday){ ?>
                      
                            <div class="edit_img" data-id="<?php echo @$birthday->id; ?>" data-img="<?php echo base_url(@$birthday->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday->img); ?>" class=" edit" >
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" >
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                                <ul>
                                    <li><img src="<?php echo base_url('assets/'); ?>images3/giraffe.png" ></li>
                                    <li><img src="<?php echo base_url('assets/'); ?>images3/hipp.png" ></li>
                                </ul>
                            </div> 
                            <div class="right-sec">                
                            </div>
                        </div>  
                    </div>
                </div>
             <div class="twenty">
                   <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images3/r8-bg.jpg" class="bg-image"> 
                        <div class="top-sec">
                            <ul>
                               
                               
                        <li>
                        <?php if(@$birthday2){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$birthday2->id; ?>" data-img="<?php echo base_url(@$birthday2->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday2->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$birthday4){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$birthday4->id; ?>" data-img="<?php echo base_url(@$birthday4->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday4->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                           
                            </ul>
                            <ul class="second">
                            <li>
                        <?php if(@$birthday3){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$birthday3->id; ?>" data-img="<?php echo base_url(@$birthday3->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday3->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$birthday5){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$birthday5->id; ?>" data-img="<?php echo base_url(@$birthday5->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday5->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                            </ul>
                        </div>
                
                
                    </div>

            </div>
            
             <div class="twenty_one">
                 
                <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/'); ?>images3/l10-bg.jpg" class="bg-image">  
                    <div class="top-sec">
                        <ul class="second">
                         
                            
                            
                                <li>
                                <?php if(@$standing){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing->id; ?>" data-img="<?php echo base_url(@$standing->img); ?>"  >
                            <img src="<?php echo base_url(@$standing->img); ?>" class=" edit" >
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                            </li>
                        
                            <div class="content">
                                <h2> Standing <span>Crawling</span> </h2>
                            </div>
                        </ul>
                        <ul class="first">
                            
                           
                        <li>
                        <?php if(@$standing2){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing2->id; ?>" data-img="<?php echo base_url(@$standing2->img); ?>"  >
                            <img src="<?php echo base_url(@$standing2->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$standing3){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing3->id; ?>" data-img="<?php echo base_url(@$standing3->img); ?>"  >
                            <img src="<?php echo base_url(@$standing3->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                        </ul>
                    </div>
                </div>
            </div>
             <div class="twenty_two">
             
                 <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images3/r10-bg.jpg" class="bg-image"> 
                    <div class="top-sec">
                        <ul>
                            
                           
                        <li>
                        <?php if(@$standing4){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing4->id; ?>" data-img="<?php echo base_url(@$standing4->img); ?>"  >
                            <img src="<?php echo base_url(@$standing4->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$standing5){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing5->id; ?>" data-img="<?php echo base_url(@$standing5->img); ?>"  >
                            <img src="<?php echo base_url(@$standing5->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        </ul>
                        
                    </div>
            
            
                </div>
            </div>
        
        <div class="first">
                <div class="main-bg">

                    <img src="<?php echo base_url('assets/'); ?>images3/back-bg.png" class="bg-image">   
                        <div class="top-sec">
                            <img src="<?php echo base_url('assets/'); ?>images2/logo.png" class="logo">
                        </div>
                    </div>
               
                
        </div>
    </div>
</section>




	<div class="owl-carousel owl-theme" id="mobile_album">
        <div class="item">
          <div class="second">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/front-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <div class="content">
                        <h2> Welcoming  </h2> 
                        <h2> <?php echo @$first_page->name; ?> </h2>
                        <span > <?php echo @$first_page->date; ?></span>  
                    </div>
                    
                    <ul>
                      
                        <li>  <?php if(@$first_page->img){ ?>
                            <div class="" ><img src="<?php echo base_url($first_page->img); ?>"  class="edit"> </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                       
                      
                        <li>
                        <?php if(@$first_page->img2){ ?>    
                        <div class="" ><img src="<?php echo base_url($first_page->img2); ?>"  class="edit"> </div>
                        <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        <img src="<?php echo base_url('assets/'); ?>images3/lion.png" class="laugh"> </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="item">
          <div class="third">
            <div class="main-bg">

                <img src="<?php echo base_url('assets/'); ?>images3/l1-bg.png" class="bg-image">   
                <div class="top-sec">
                    <h2> Baby Shower </h2>
                </div>
            </div>
        </div>
        </div>
        
        <div class="item">
        
         <div class="forth">
            <div class="main-bg"> 
                <img src="<?php echo base_url('assets/'); ?>images3/r1-bg.jpg" class="bg-image">  
                <div class="top-sec">
                    <ul>
                       
                        <li >
                            <?php if($baby_shower1){ ?>
                            <div class="edit_img  " style="height:100%;" data-id="<?php echo @$baby_shower1->id; ?>" data-img="<?php echo base_url(@$baby_shower1->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower1->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li >
                            <?php if($baby_shower2){ ?>
                            <div class="edit_img  " style="height:100%;" data-id="<?php echo @$baby_shower2->id; ?>" data-img="<?php echo base_url(@$baby_shower2->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower2->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                   
                    </ul>
                    <!--<h2 class="content"> Baby (name) a little bit of heaven sent down to Earth. </h2>-->
                    <ul class="second">
                    <li >
                            <?php if($baby_shower3){ ?>
                            <div class="edit_img  " style="height:100%;" data-id="<?php echo @$baby_shower3->id; ?>" data-img="<?php echo base_url(@$baby_shower3->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower3->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                        <li >
                            <?php if($baby_shower4){ ?>
                            <div class="edit_img  " style="height:100%;" data-id="<?php echo @$baby_shower4->id; ?>" data-img="<?php echo base_url(@$baby_shower4->img); ?>"  >
                                <img src="<?php echo base_url(@$baby_shower4->img); ?>" class="edit" >
                            </div>
                            <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
   
        </div>
        </div>
        <div class="item">
          
         <div class="fifth">
               <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images3/l2-bg.jpg" class="bg-image">   
                    <div class="top-sec">
                        <h2> Mom & Dad</h2>
                       <?php if(@$mom_dad1){ ?>
                            <div class="edit_img" data-id="<?php echo @$mom_dad1->id; ?>" data-img="<?php echo base_url(@$mom_dad1->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad1->img); ?>" class="edit" > </div>
                                <?php }else{ ?>
                                        <div class=" placeholder_div"  >
                                        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                                    </div>
                                        <?php } ?>
                    </div>
                </div>
        </div>
        </div>
        <div class="item">
        
          <div class="sixth">
            <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/'); ?>images3/r2-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <ul>
                       
                    <li>
                        <?php if(@$mom_dad2){ ?>
                            <div class="edit_img " style="height:100%;" data-id="<?php echo @$mom_dad2->id; ?>" data-img="<?php echo base_url(@$mom_dad2->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad2->img); ?>" class="edit">
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="height:100%;">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad4){ ?>
                            <div class="edit_img " style="height:100%;" data-id="<?php echo @$mom_dad4->id; ?>" data-img="<?php echo base_url(@$mom_dad4->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad4->img); ?>" class="edit">
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="height:100%;">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                   
                    </ul>
                    <ul class="second">
                        
                    <li>
                        <?php if(@$mom_dad3){ ?>
                            <div class="edit_img " style="height:100%;" data-id="<?php echo @$mom_dad3->id; ?>" data-img="<?php echo base_url(@$mom_dad3->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad3->img); ?>" class="edit">
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="height:100%;">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$mom_dad5){ ?>
                            <div class="edit_img " style="height:100%;" data-id="<?php echo @$mom_dad5->id; ?>" data-img="<?php echo base_url(@$mom_dad5->img); ?>"  >
                                <img src="<?php echo base_url(@$mom_dad5->img); ?>" class="edit">
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="height:100%;">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                    </ul>
                </div>
            </div>
       
        </div>
        </div>
        <div class="item">
          <div class="seventh">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/l3-bg.jpg" class="bg-image">
        
                <div class="section">
                   
                <div class="left-sec">
                <?php if(@$baby_arrival){ ?>
                        <div class="edit_img" data-id="<?php echo @$baby_arrival->id; ?>" data-img="<?php echo base_url(@$baby_arrival->img); ?>"  >
                            <img src="<?php echo base_url($baby_arrival->img); ?>" class=" edit">  </div>  
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div" >
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
               </div> 
            
                    
                    <div class="right-sec">
                        <div class="title-bot">
                            <h3>Baby <br> Arrival    </h3>
                            <!--<p>30 APRIL 2021    </p>-->
                            <img src="<?php echo base_url('assets/'); ?>images3/ele.png" />
                        </div>
                        
                    </div>
                </div>  
            </div>
           
        </div>
        </div>
        
        <div class="item">
        <div class="eighth">
            <div class="main-bg"> 
                <img src="<?php echo base_url('assets/'); ?>images3/r2-bg.jpg" class="bg-image">
                <div class="top-sec">
                     <ul>
                     
                     <li>
                        <?php if(@$baby_arrival2){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival2->id; ?>" data-img="<?php echo base_url(@$baby_arrival2->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival2->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="  height: 100%;">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>

                        <li>
                        <?php if(@$baby_arrival3){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival3->id; ?>" data-img="<?php echo base_url(@$baby_arrival3->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival3->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="  height: 100%;">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$baby_arrival4){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival4->id; ?>" data-img="<?php echo base_url(@$baby_arrival4->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival4->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="  height: 100%;">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$baby_arrival5){ ?>
                            <div class="edit_img" style="  height: 100%;" data-id="<?php echo @$baby_arrival5->id; ?>" data-img="<?php echo base_url(@$baby_arrival5->img); ?>"  ><img src="<?php echo base_url(@$baby_arrival5->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div"  style="  height: 100%;">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                    </ul>

                </div>
            </div>
       
            
        </div>
        </div>
        <div class="item">
         <div class="ninth">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/l4-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <h2> Welcome Home  </h2>
                    <ul>
                    <li> 
                                <?php if(@$welcome_home1){ ?>
                                <div class="edit_img " data-id="<?php echo @$welcome_home1->id; ?>" data-img="<?php echo base_url(@$welcome_home1->img); ?>" >
                                    <img src="<?php echo base_url(@$welcome_home1->img); ?>" class="edit">  </div>
                                    <?php }else{ ?>
                            <div class="edit_img placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                                </li>
                               
                        
                                <li> 
                                <?php if(@$welcome_home2){ ?>
                                <div class="edit_img " data-id="<?php echo @$welcome_home2->id; ?>" data-img="<?php echo base_url(@$welcome_home2->img); ?>" >
                                    <img src="<?php echo base_url(@$welcome_home2->img); ?>" class="edit">  </div>
                                    <?php }else{ ?>
                            <div class="edit_img placeholder_div">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                                </li>
                                
                         <img src="<?php echo base_url('assets/'); ?>images3/horse.png" class="horse"> 
                    </ul>
                </div>
            </div>
        </div>
        </div>
        
        <div class="item">
         <div class="tenth">
            <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/r4-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    
                    <ul>
                             
                       <li> 
                       <?php if(@$welcome_home3){ ?>
                       <div class="edit_img h-100" data-id="<?php echo @$welcome_home3->id; ?>" data-img="<?php echo base_url(@$welcome_home3->img); ?>">
                           <img src="<?php echo base_url(@$welcome_home3->img); ?>" class="edit">  </div>
                           <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li> 
                       <?php if(@$welcome_home4){ ?>
                       <div class="edit_img h-100" data-id="<?php echo @$welcome_home4->id; ?>" data-img="<?php echo base_url(@$welcome_home4->img); ?>">
                           <img src="<?php echo base_url(@$welcome_home4->img); ?>" class="edit">  </div>
                           <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                       
                        <li> 
                       <?php if(@$welcome_home5){ ?>
                       <div class="edit_img h-100" data-id="<?php echo @$welcome_home5->id; ?>" data-img="<?php echo base_url(@$welcome_home5->img); ?>">
                           <img src="<?php echo base_url(@$welcome_home5->img); ?>" class="edit">  </div>
                           <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                       
                   
                    </ul>
                </div>
            </div> 
             
             
       
        </div>
        </div>
        <div class="item">
           <div class="eleven">
            
            <div class="main-bg"> 
                <img src="<?php echo base_url('assets/'); ?>images3/l5-bg.jpg" class="bg-image">
                <div class="top-sec"> 
                <div class="title-bot">
                        <h3> First Smile </h3> 
                    </div>
                    <?php if(@$first_smile){ ?>
                    <div class="edit_img" data-id="<?php echo @$first_smile->id; ?>" data-img="<?php echo base_url(@$first_smile->img); ?>">
                        <img src="<?php echo base_url(@$first_smile->img); ?>" class="baby-img edit">     </div> 
                        <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="baby-img img-fluid">
                            </div>
                               <?php } ?>  
                </div>
            </div>
        </div>
        </div>
        <div class="item">
           <div class="twelve">
            
                <img src="<?php echo base_url('assets/'); ?>images3/l2-bg.jpg" class="bg-image">
            <div class="main-bg">
                <div class="top-sec">
                    <ul>
                    <li>
                        <?php if(@$first_smile2){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile2->id; ?>" data-img="<?php echo base_url(@$first_smile2->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile2->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$first_smile3){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile3->id; ?>" data-img="<?php echo base_url(@$first_smile3->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile3->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$first_smile4){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile4->id; ?>" data-img="<?php echo base_url(@$first_smile4->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile4->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                        <li>
                        <?php if(@$first_smile5){ ?>
                            <div class="edit_img" data-id="<?php echo @$first_smile5->id; ?>" data-img="<?php echo base_url(@$first_smile5->img); ?>"  >
                            <img src="<?php echo base_url(@$first_smile5->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>  
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
            
        </div>
        
        
        <div class="item">
            <div class="thirteen">
           <div class="main-bg">
                <img src="<?php echo base_url('assets/'); ?>images3/l6-bg.jpg" class="bg-image">   
                <div class="top-sec">
                    <div class="content">
                        <h2> Nothing like a <span> laugh</span></h2> 
                    </div>
                    <ul>
                        
                    <li>
                        <?php if(@$laugh1){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh1->id; ?>" data-img="<?php echo base_url(@$laugh1->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh1->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        <!--<p>For all the things my hands have held thebest by far is you.</p>-->
                    </li>
                        
                        <li>
                        <?php if(@$laugh2){ ?>
                            <div class="edit_img" data-id="<?php echo @$laugh2->id; ?>" data-img="<?php echo base_url(@$laugh2->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh2->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        </li>
                        
                    </ul>
                </div>
            </div>
            </div>
        </div>
            
            
        <div class="item">
              <div class="forthteen">
        
                   <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images3/r6-bg.jpg" class="bg-image"> 
                        <div class="top-sec">
                            <ul>
                                               
                        <li>
                        <?php if(@$laugh3){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$laugh3->id; ?>" data-img="<?php echo base_url(@$laugh3->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh3->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        </li>
                        <li>
                        <?php if(@$laugh4){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$laugh4->id; ?>" data-img="<?php echo base_url(@$laugh4->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh4->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        </li>
                        <li>
                        <?php if(@$laugh5){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$laugh5->id; ?>" data-img="<?php echo base_url(@$laugh5->img); ?>"  >
                            <img src="<?php echo base_url(@$laugh5->img); ?>" class="edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img  placeholder_div">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?> 
                        </li>
                      
                                

                            </ul>
                        </div>
                    </div>
            </div>
        </div>
            
        <div class="item">
           <div class="fifteen">
                <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/images3/l5-bg.jpg'); ?>" class="bg-image">
                    <div class="top-sec"> 
                    <div class="title-bot">
                            <h2> Food </h2> 
                        </div>
                      
                        <?php if(@$foody){ ?>
                      
                            <div class="edit_img" data-id="<?php echo @$foody->id; ?>" data-img="<?php echo base_url(@$foody->img); ?>"  >
                            <img src="<?php echo base_url(@$foody->img); ?>" class="baby-img edit" > </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                    </div>
                </div>
                    
            </div>  
        </div>
        
        <div class="item">
        <div class="sixteen">
               <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/images3/r2-bg.jpg'); ?>" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                                  
                        <li>
                        <?php if(@$foody2){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$foody2->id; ?>" data-img="<?php echo base_url(@$foody2->img); ?>"  >
                            <img src="<?php echo base_url(@$foody2->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$foody4){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$foody4->id; ?>" data-img="<?php echo base_url(@$foody4->img); ?>"  >
                            <img src="<?php echo base_url(@$foody4->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                                
                             
                       
                        </ul>
                        <ul class="second">
                                  
                        <li>
                        <?php if(@$foody3){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$foody3->id; ?>" data-img="<?php echo base_url(@$foody3->img); ?>"  >
                            <img src="<?php echo base_url(@$foody3->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$foody5){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$foody5->id; ?>" data-img="<?php echo base_url(@$foody5->img); ?>"  >
                            <img src="<?php echo base_url(@$foody5->img); ?>" class="edit" > 
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img h-100 placeholder_div">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                                
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="item">
             
            <div class="seventeen">
                  
                   <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images3/l7-bg.jpg" class="bg-image">
                        <div class="section">
                            <div class="right-sec">
                                <div class="title-bot">
                                    <!--<p>There are two lasting bequests we can give our children. One is roots. The other is wings.</p>-->
                                    <img src="<?php echo base_url('assets/'); ?>images3/lion1.png">
                                </div>
                            </div>
                             <div class="left-sec"><h3>Sitting    </h3>
                               
                                   <?php if(@$sitting1){ ?>
                      
                            <div class="edit_img" data-id="<?php echo @$sitting1->id; ?>" data-img="<?php echo base_url(@$sitting1->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting1->img); ?>" class=" edit" >
                            </div>
                            <?php }else{ ?>
                            <div class="edit_img placeholder_div">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                            </div> 
                        </div>  
                    </div>
                </div>
        </div>
            
        <div class="item">
          <div class="eighteen">
                   
                 <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/'); ?>images3/r7-bg.jpg" class="bg-image">   
                    <div class="top-sec">
                        <ul>
                           
                         <li>
                        <?php if($sitting2){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$sitting2->id; ?>" data-img="<?php echo base_url(@$sitting2->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting2->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                         <li>
                        <?php if($sitting4){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$sitting4->id; ?>" data-img="<?php echo base_url(@$sitting4->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting4->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                       
                        </ul>
                        <ul class="second">
                             <li>
                        <?php if($sitting3){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$sitting3->id; ?>" data-img="<?php echo base_url(@$sitting3->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting3->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                         <li>
                        <?php if($sitting5){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$sitting5->id; ?>" data-img="<?php echo base_url(@$sitting5->img); ?>"  >
                            <img src="<?php echo base_url(@$sitting5->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="item">
          
               <div class="ninteen">
                   
                    <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images3/l8-bg.jpg" class="bg-image">
                
                        <div class="section">
                            <div class="left-sec">
                              
                                <?php if(@$birthday){ ?>
                      
                            <div class="edit_img" data-id="<?php echo @$birthday->id; ?>" data-img="<?php echo base_url(@$birthday->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday->img); ?>" class=" edit" >
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" >
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                                <ul>
                                    <li><img src="<?php echo base_url('assets/'); ?>images3/giraffe.png" ></li>
                                    <li><img src="<?php echo base_url('assets/'); ?>images3/hipp.png" ></li>
                                </ul>
                            </div> 
                            <div class="right-sec">                
                            </div>
                        </div>  
                    </div>
                </div>
        </div>
            
        <div class="item">
              <div class="twenty">
                   <div class="main-bg">
                        <img src="<?php echo base_url('assets/'); ?>images3/r8-bg.jpg" class="bg-image"> 
                        <div class="top-sec">
                            <ul>
                               
                            <li>
                        <?php if(@$birthday2){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$birthday2->id; ?>" data-img="<?php echo base_url(@$birthday2->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday2->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$birthday4){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$birthday4->id; ?>" data-img="<?php echo base_url(@$birthday4->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday4->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                           
                            </ul>
                            <ul class="second">
                            <li>
                        <?php if(@$birthday3){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$birthday3->id; ?>" data-img="<?php echo base_url(@$birthday3->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday3->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$birthday5){ ?>
                            <div class="edit_img" style="height:100%;" data-id="<?php echo @$birthday5->id; ?>" data-img="<?php echo base_url(@$birthday5->img); ?>"  >
                            <img src="<?php echo base_url(@$birthday5->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                            </ul>
                        </div>
                
                
                    </div>

            </div>
        </div>
            
            
        <div class="item">
            <div class="twenty_one">
                 
                <div class="main-bg"> 
                    <img src="<?php echo base_url('assets/'); ?>images3/l10-bg.jpg" class="bg-image">  
                    <div class="top-sec">
                        <ul class="second">
                         
                            
                        <li>
                                <?php if(@$standing){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing->id; ?>" data-img="<?php echo base_url(@$standing->img); ?>"  >
                            <img src="<?php echo base_url(@$standing->img); ?>" class=" edit" >
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img placeholder_div" style="height:100%;">
                               <img src="<?php echo base_url('assets/1.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                            </li>
                            <div class="content">
                                <h2> Standing <span>Crawling</span> </h2>
                            </div>
                        </ul>
                        <ul class="first">
                            
                                
                        <li>
                        <?php if(@$standing2){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing2->id; ?>" data-img="<?php echo base_url(@$standing2->img); ?>"  >
                            <img src="<?php echo base_url(@$standing2->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/2.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$standing4){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing4->id; ?>" data-img="<?php echo base_url(@$standing4->img); ?>"  >
                            <img src="<?php echo base_url(@$standing4->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/4.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="item">
            <div class="twenty_two">
             
                 <div class="main-bg">
                    <img src="<?php echo base_url('assets/'); ?>images3/r10-bg.jpg" class="bg-image"> 
                    <div class="top-sec">
                        <ul>
                            
                              
                        <li>
                        <?php if(@$standing3){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing3->id; ?>" data-img="<?php echo base_url(@$standing3->img); ?>"  >
                            <img src="<?php echo base_url(@$standing3->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/3.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        <li>
                        <?php if(@$standing5){ ?>
                            <div class="edit_img h-100" data-id="<?php echo @$standing5->id; ?>" data-img="<?php echo base_url(@$standing5->img); ?>"  >
                            <img src="<?php echo base_url(@$standing5->img); ?>" class="edit" > 
                            </div>
                            <?php } else{ ?>
                            <div class="edit_img h-100 placeholder_div" >
                               <img src="<?php echo base_url('assets/5.jpg'); ?>" class="img-fluid">
                            </div>
                               <?php } ?>
                        </li>
                        </ul>
                        
                    </div>
            
            
                </div>
            </div>
        </div>
        
        
        <div class="item">
            <div class="first">
                <div class="main-bg">

                <img src="<?php echo base_url('assets/'); ?>images3/back-bg.png" class="bg-image">   
                    <div class="top-sec">
                        <img src="<?php echo base_url('assets/'); ?>images2/logo.png" class="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    

 <div class="pixie" data-scroll-section >
     <div class="text-center" id="summer_loader" style="display:none;">
         <span class="fa fa-spinner fa-spin fa-3x"></span>
         <p class="font-weight-bold ml-2">Saving Image </p>
         </div>
            <div class="some-container">
                <pixie-editor></pixie-editor>
            </div>
        </div>
      
	<script src="<?php echo base_url('assets/'); ?>js/TweenMax.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/turn.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/slick.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/aos.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/main.js"></script>

<script> window.jQuery || document.write('<script src="<?php echo base_url('assets/'); ?>js/jquery-2.1.0.min.js"><\/script>') </script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>


<script src="<?php echo base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/jquery.booklet.latest.min.js"></script>
 <script src="<?php echo base_url('assets/img-editor/scripts.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/user.js'); ?>"></script>
 <script>

var id;
var did;
var pixie = new Pixie({
    //  textureSize: 8000,
    baseUrl: '<?php echo base_url(); ?>',
    crossOrigin: true,
    onSave: function(data, name) {
        $.ajax({
        url :"<?php echo base_url('Users/EditImage'); ?>",
        method : "POST",
        data :{ img :data,name:name,id:id },
        beforeSend: function() {
        $("#summer_loader").show();
             },
           
        success:function(res){
        //alert(res);
          setTimeout(function(){
                        //$(this).unbind(e);
                      // window.location.replace(base_url+"Users/createpage"); 
                        // window.location.href='';
                        
                        $(".third").load(location.href + " .third");
                         $(".forth").load(location.href + " .forth");
                         $(".fifth").load(location.href + " .fifth");
                          $(".sixth").load(location.href + " .sixth");
                          $(".seventh").load(location.href + " .seventh");
                          $(".eighth").load(location.href + " .eighth");
                          $(".ninth").load(location.href + " .ninth");
                          $(".tenth").load(location.href + " .tenth");
                          $(".eleven").load(location.href + " .eleven");
                          $(".twelve").load(location.href + " .twelve");
                          $(".thirteen").load(location.href + " .thirteen");
                          $(".forthteen").load(location.href + " .forthteen");
                           $(".fifteen").load(location.href + " .fifteen");
                            $(".sixteen").load(location.href + " .sixteen");
                             $(".seventeen").load(location.href + " .seventeen");
                              $(".eighteen").load(location.href + " .eighteen");
                               $(".ninteen").load(location.href + " .ninteen");
                                $(".twenty").load(location.href + " .twenty");
                                 $(".twenty_one").load(location.href + " .twenty_one");
                                  $(".twenty_two").load(location.href + " .twenty_two");
                          
                          
                            },2000);
                           pixie.close();
        },
         complete: function() {
             $("#summer_loader").hide();
            },  
        
        })
    },
 
    ui: {      
        visible: false, // whether pixie is visible initially
        mode: 'overlay',
        toolbar: {
        leftItems: [
        {
            type: 'image',
            src: "<?php echo base_url('assets/img/logo.png'); ?>",
            showInCompactMode: true,
        },
        ]
        }
    },      
});
$(document).on("click",".edit_img",function(){
    var img = $(this).data('img');
    did = $(this).data('id');
    pixie.openEditorWithImage($(this).data('img'));
    id = did;
   
});

</script>

<script>
    $(function() {
        $('#mybook').booklet({
             width: 1000,
            pagePadding: 0,
            height: 400,
            arrows: true,
            pageNumbers: false,
            shadows: false,
                closed: true,
            autoCenter: true,
        });
        
    });

   $('.custom-goto').click(function(e){
       var page_id = $(this).data('id');
       //alert(page_id);
        e.preventDefault();
        $('#mybook').booklet("gotopage", page_id);
    });
    
$('#mobile_album').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    navText: ["<img src='<?php echo base_url('assets/'); ?>img/prev.png'>","<img src='<?php echo base_url('assets/'); ?>img/next.png'>"],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1  
        },
        1000:{
            items:1
        }
    }
})
    
//  $(function() {
//     $( ".draggable" ).draggable();
//  });
 

</script>

