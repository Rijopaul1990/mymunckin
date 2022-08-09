$(document).on("click","#btn_form",function(){
    var child_name   = $("#forurl").val();
    //alert(child_name);
    if(child_name == ""){
        $('#confirm').modal('show');
        return false;
    }else{
         $("form#genrate_url").submit();
  var base_url = $("#base_url").val();
  var due_date = $("#date").val();
  var forurl   = $("forurl").val();
  var dob = $("#date1").val();
  var form = $("form#genrate_url");
   e.preventDefault();
 
    if(form){
      $.ajax({
          url:base_url+"Users/GenrateUrl",
          type:"POST",
           data: form.serialize(),
          success:function(data)
          {
            //alert(data);
            console.log(data);
            var obj = JSON.parse(data);
            if(obj.status == 1){
             // $("#userRegister")[0].reset();
              window.location.href= base_url+"Users/dashboard/";
                //   if(due_date)
                //   {
                //     window.location.href= base_url+"due-date/"+obj.msg;
                //   }
                //   else if(dob)
                //   {
                //     window.location.href=base_url+"date-of-birth/"+obj.msg;
                //   }
                    
          }else{
             

              var obj = JSON.parse(data);
              var setv = '';
              if (obj.name) {
              setv = obj.name;
              }
              if (obj.due_date) {
              setv = obj.due_date;
              }
               if (obj.dob) {
              setv = obj.dob;
              }
             
            if (obj.gender) {
              setv = obj.gender;
              }

            if (obj.msg) {
              setv = obj.msg;
             }
            if (obj.theme) {
              setv = obj.theme;
             }
              

                Command: toastr["error"](setv)
                    toastr.options = {
                      "closeButton": false,
                      "debug": false, 
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
          }
        }
      });
    }

    }
  
});

$(document).on("click","#next_btn_submit",function(){
   // $("btn_form").attr("type","submit");
    //document.getElementsByName("submitform")[0].type = "submit";
    //$("form#genrate_url").submit(function(e){
    $("form#genrate_url").submit();
  var base_url = $("#base_url").val();
  var due_date = $("#date").val();
  //var forurl   = $("forurl").val();
  var dob = $("#date1").val();
  var form = $("form#genrate_url");
   e.preventDefault();
 
    if(form && due_date || dob){
      $.ajax({
          url:base_url+"Users/GenrateUrl",
          type:"POST",
           data: form.serialize(),
          success:function(data)
          {
            //alert(data);
            console.log(data);
            var obj = JSON.parse(data);
            if(obj.status == 1){
                window.location.href= base_url+"Users/dashboard/";
                
             // $("#userRegister")[0].reset();
                //   if(due_date)
                //   {
                //     window.location.href= base_url+"due-date/"+obj.msg;
                //   }
                //   else if(dob)
                //   {
                //     window.location.href=base_url+"date-of-birth/"+obj.msg;
                //   }
                    
          }else{
             

              var obj = JSON.parse(data);
              var setv = '';
              if (obj.name) {
              setv = obj.name;
              }
              if (obj.due_date) {
              setv = obj.due_date;
              }
               if (obj.dob) {
              setv = obj.dob;
              }
             
            if (obj.gender) {
              setv = obj.gender;
              }

            if (obj.msg) {
              setv = obj.msg;
             }
            if (obj.theme) {
              setv = obj.theme;
             }
              

                Command: toastr["error"](setv)
                    toastr.options = {
                      "closeButton": false,
                      "debug": false, 
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
          }
        }
      });
    }


//});
});

$(document).on("click","#btn_change_theme",function(){
    var base_url = $("#base_url").val();
    var theme = $('input[name="theme"]:checked').val();
    
    if(theme){
        $.ajax({
          url : base_url+"Users/ChangeThemeColor",
          method : "POST",
          data : {theme:theme},
          success :function(data)
          {
              var obj = JSON.parse(data);
            if(data == 1){
            
                    Command: toastr["success"]("theme changes successfully")
                    toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
                    setTimeout(function(){
                        window.location.replace(base_url+"Users/dashboard"); 
                            },2000)
          }else{
              var obj = JSON.parse(data);
              var setv = '';
           
             if (obj.msg) {
                  setv = obj.msg;
                  }
            if (obj.first_name) {
              setv = obj.first_name;
              }

                Command: toastr["error"](setv)
                    toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
                    setTimeout(function(){
                        window.location.replace(base_url+"Users/dashboard"); 
                            },2000)
             }
          }
          // }
    });
    }
    
});



//$(document).on("click")
$("form#genrate_url").submit(function(e){
  var base_url = $("#base_url").val();
  var due_date = $("#date").val();
  var forurl   = $("forurl").val();
  var dob = $("#date1").val();
  var form = $(this);
   e.preventDefault();
 
    if(form){
      $.ajax({
          url:base_url+"Users/GenrateUrl",
          type:"POST",
           data: form.serialize(),
          success:function(data)
          {
            //alert(data);
            console.log(data);
            var obj = JSON.parse(data);
            if(obj.status == 1){
             // $("#userRegister")[0].reset();
                //   if(due_date)
                //   {
                //     window.location.href= base_url+"due-date/"+obj.msg;
                //   }
                //   else if(dob)
                //   {
                //     window.location.href=base_url+"date-of-birth/"+obj.msg;
                //   }
                window.location.href= base_url+"Users/dashboard/";
                    
          }else{
             

              var obj = JSON.parse(data);
              var setv = '';
              if (obj.name) {
              setv = obj.name;
              }
              if (obj.due_date) {
              setv = obj.due_date;
              }
               if (obj.dob) {
              setv = obj.dob;
              }
             
            if (obj.gender) {
              setv = obj.gender;
              }

            if (obj.msg) {
              setv = obj.msg;
             }
            if (obj.theme) {
              setv = obj.theme;
             }
              

                Command: toastr["error"](setv)
                    toastr.options = {
                      "closeButton": false,
                      "debug": false, 
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
          }
        }
      });
    }


});
 //date of birth / due date enquiry
  $("form#date_enquiry").submit(function(e) {

    var formData = new FormData(this);
    var base_url = $("#base_url").val();
        e.preventDefault(e);
        if(formData){
            $.ajax({
                url : base_url+'AjaxController/SendDateEnquiry',
                method :"POST",
                data: formData,
                cache:false,
            contentType: false,
            processData: false,
                success :function(res){
                  console.log(res);
                    if(res == 1){
                       $("#date_enquiry")[0].reset();
                       var element = $("#my_text").emojioneArea();
                       element[0].emojioneArea.setText('');
                       Command: toastr["success"]("Message Successfully Added")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass": "toast-top-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                     
// $('html, body').animate({scrollTop:0}, '300');

                    }else{
                         var obj = JSON.parse(res);
                        var setv = '';
              if (obj.email) {
              setv = obj.email;
              }
              if (obj.name) {
              setv = obj.name;
              }
          
              
            if (obj.msg) {
              setv = obj.msg;
             }
            if (obj.comment) {
              setv = obj.comment;
             }
                        Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass": "toast-top-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                    }
                }
            });
        }

    });
  //check url 
  $(document).on("keyup","#forurl",function(){
        var base_url        = $("#base_url").val();
        var child_name      = $("#forurl").val();
        if(child_name){
            $.ajax({
                    url     : base_url+"Users/SuggestChildName",
                    method  : "POST",
                    data    : {val:child_name},
                    success : function(data)
                    {
                         $("#res_data").show();
                        if(data == 2){
                            
                            $("#res_data").html('<span class="available"><i class="fas fa-check-circle"></i></span>');
                             $("#new_url").hide();
                        }
                       else{
                          $("#new_url").show();
                             $("#res_data").html('<span class="available notavailable"><i class="fas fa-times-circle"></i></span>');
                              $("#new_url").html("Suggested Name :-"+ data);
                               
                        }
                    }
            });
        }else{
         $("#new_url").hide();
         $("#res_data").hide();
    }
      
  });
  
  
  
//   $(document).on("keyup","#forurl",function(){
//     var base_url  = $("#base_url").val();
//     var val     = $("#forurl").val();
//     var encodedUrl = val.toString().toLowerCase(); 
//   // replace & with and           
//   encodedUrl = encodedUrl.split(/\&+/).join("-and-")
//   // remove invalid characters 
//   encodedUrl = encodedUrl.split(/[^a-z0-9]/).join("-");       
//   // remove duplicates 
//   encodedUrl = encodedUrl.split(/-+/).join("-");
//   // trim leading & trailing characters 
//   encodedUrl = encodedUrl.trim('-'); 
// //alert(encodedUrl);
//     if(val){
//       $.ajax({
//           url : base_url+"Users/CheckUrl",
//           method : "POST",
//           data :{val:val},
//           success : function(res){
//              var link = base_url+"template/"+encodedUrl;
//               $("#available_url").hide();
//             $("#new_url").show();
//             if(res == 2){
//               $("#new_url").html('<i class="fa fa-check-circle" aria-hidden="true"></i> '+link);
//             }
//             else if(res == 1)
//             {
//               $("#new_url").html('<i class="fa fa-times" aria-hidden="true"></i> '+link);
//             }
//           // $("#new_url").innerHTML();

//           }
//       });
//     }else{
//          $("#new_url").hide();
//     }
   




//   });

//save profile details
$('form#form_profile_details').submit(function(e){
  debugger;
  var formData = new FormData(this);
  var base_url = $("#base_url").val();
  e.preventDefault();
  if(formData)
  {
    $.ajax({
          url : base_url+"Users/SaveProfileSetting",
            method :"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
             beforeSend: function() {
            $("#home_loader").show();
            },
          success :function(data)
          {
              //alert(data);
              var obj = JSON.parse(data);
            if(obj.status == 1){
              $("#changePassword")[0].reset();
                    Command: toastr["success"](obj.msg)
                    toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
                    setTimeout(function(){
                        window.location.replace(base_url+"Users/dashboard"); 
                            },2000)
          }else{
              var obj = JSON.parse(data);
              var setv = '';
           
             if (obj.msg) {
                  setv = obj.msg;
                  }
            if (obj.first_name) {
              setv = obj.first_name;
              }

            if (obj.last_name) {
              setv = obj.last_name;
             }
            if (obj.email) {
              setv = obj.email;
             }
             if (obj.number)
             {
              setv = obj.number;
             }
             if(obj.chlid_name)
             {
              setv = obj.chlid_name;
             }
                Command: toastr["error"](setv)
                    toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
                    setTimeout(function(){
                        window.location.replace(base_url+"Users/dashboard"); 
                            },2000)
             }
          },
           complete: function() {
             $("#home_loader").hide();
    },
          // }
    });
  }

});


//user change password
$('form#changePassword').submit(function(e){
        var form = $(this);
        var base_url = $("#base_url").val();
            e.preventDefault();
            if(form){
                $.ajax({
                    url: base_url+"Users/change_user_password",
                    method :"POST",
                    data: form.serialize(),
                    success :function(data){
                           var obj = JSON.parse(data);
            if(obj.status == 1){
              $("#changePassword")[0].reset();
                    Command: toastr["success"]('Password changed successfully')
                    toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
                    
          }else{
              var obj = JSON.parse(data);
              var setv = '';
           
             if (obj.msg) {
                  setv = obj.msg;
                  }
            if (obj.old_password) {
              setv = obj.old_password;
              }

            if (obj.new_password) {
              setv = obj.new_password;
             }
            if (obj.confirm_password) {
              setv = obj.confirm_password;
             }

                Command: toastr["error"](setv)
                    toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-bottom-right",
                     "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
          }
                    }
                });
            }
        });

$(document).on("click","#load_more",function(){
 // var offset = $(this).data('offset');
  var offset = $("#offset").val();
  var url = $(this).data('url');
  var base_url = $("#base_url").val();
  if(offset){
           $.ajax({
        url: base_url+"Filter/LoadMore",
        data:{offset :offset,url:url},
        method:"POST", 
        beforeSend: function() {
          // $("#show_load_more_data").html("<img src="+base_url+"'assets/loding.gif' />");
              $('#load_more').html('Loading...');
              $("#show_loading_img").show();

        },
        afterSend: function(){
            $("#show_loading_img").hide();
        },
        success :function(data){
            $('#load_more').html('Load More');
         // alert(data);
             var obj = JSON.parse(data);
             if(obj.view == "End Here"){
                 $("#load_more").html("No More Comments Here")
             }else{
                  $('#show_load_more_data').append(obj.view)
             }
             $("#show_loading_img").hide();
            
             $('#load_more').attr('data-offset', obj.offset);
              $('#offset').val(obj.offset);

        }
    })
  }
})



//ADD MILE STONE
 $('#form_add_milestone').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var base_url = $("#base_url").val();
        if(formData){
        $.ajax({
            url : base_url+"Users/AddMilestone",
            method :"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           beforeSend: function() {
        // setting a timeout
            $("#home_loader").show();
           
            },
            success :function(res){
            //   alert(res);
               console.log(res);
                if(res == 1){
                     $("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("Milestone Picture Added Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.href='';
                       // window.location.replace(base_url+"Users/milestones"); 
                            },2000)
                        
                }else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            },
            complete: function() {
             $("#home_loader").hide();
    },
        })

 }
}));

//Update MILE STONE
 $('.form_edit_profile_details').on('submit',(function(e) {
   debugger;
        e.preventDefault();
        var formData = new FormData(this);
        var base_url = $("#base_url").val();
        $.ajax({
            url : base_url+"Users/AddMilestone",
            method :"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           
            success :function(res){
            //   alert(res);
               console.log(res);
                if(res == 1){
                     //$("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("Milestone Updated Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.replace(base_url+"Users/milestones"); 
                            },2000)
                        
                }else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            }
        })

 
}));
//multiple milestone delete
$(document).on("click","#RemoveMulitpleMilestone",function(){
    var base_url = $("#base_url").val();
   // var m_id     = $(this).data('id');
    var checked = []
        $("input[name='milestone[]']:checked").each(function ()
        {
            checked.push(parseInt($(this).val()));
        });

// alert(checked.length);
    if(checked.length >= 1){
        $.ajax({
            url : base_url +"Users/RemoveMultipleMilestone",
            method :"POST",
            data :{m_id:checked},
            success :function(res){
               // alert(res);
                if(res == 1){
                     //$("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("Picture Deleted")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.href='';
                        //window.location.replace(base_url+"Users/milestones"); 
                            },2000)
                        
                }
                else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            }
        })
    }else{
           Command: toastr["error"]("Please select checkbox")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    }
    
    
});


//single milestone delete old code
$(document).on("click",".RemoveMilestone",function(){
    var base_url = $("#base_url").val();
    var m_id     = $(this).data('id');
    
    if(m_id){
        $.ajax({
            url : base_url +"Users/RemoveMilestone",
            method :"POST",
            data :{m_id:m_id},
            success :function(res){
                if(res == 1){
                     //$("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("Milestone Deleted Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.href='';
                        //window.location.replace(base_url+"Users/milestones"); 
                            },2000)
                        
                }
                else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            }
        })
    }
    
    
});


$(document).on("click",".UpdateForAlbum",function(){
    var base_url = $("#base_url").val();
    var m_id     = $(this).data('id');
    
    if(m_id){
        $.ajax({
           //url : base_url + "Users/UpdateAlbumStatus" ,
           url : base_url + "Users/UpdateAlbum" ,
           method : "POST",
           data :{m_id:m_id},
           success : function(res){
               if(res == 1){
                     //$("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("Status Updated Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                        
                        
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
                          
                          
                            },2000)
                             //   $("#albumm").load(location.href + " #mybook");
                                // setTimeout(function(){
                                //     $('#mybook').booklet({
                                //          width: 1000,
                                //         pagePadding: 0,
                                //         height: 400,
                                //         arrows: true,
                                //         pageNumbers: false,
                                //         shadows: false,
                                //             closed: true,
                                //         autoCenter: true,
                                //     });
                                // },200)
                            // $("#albumm").load(location.href + " #albumm");
                            //  $("#js_load").load(location.href + " #js_load");
                        
                }else{
                    var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        //window.location.replace(base_url+"Users/createpage"); 
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
                            },2000)
                }
           }
        });
    }
})
//UpdateSortOrder
$(document).on("change",".UpdateSortOrder",function(){
    var base_url = $("#base_url").val();
    var m_id     = $(this).data('id');
    var sort_order = $(this).val();
    
    if(m_id){
        $.ajax({
           url : base_url + "Users/UpdateSortOrder" ,
           method : "POST",
           data :{id:m_id,sort_order:sort_order},
           success : function(res){
              // alert(res);
               if(res == 1){
                     //$("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("Record Updated Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        //window.location.replace(base_url+"Users/createpage"); 
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
                            },2000)
                         //   $(".main_cart_div").load(location.href + " .main_cart_div");
                        
                }else{
                    var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                }
           }
        });
    }
})


//ADD MILE STONE
 $('#form_add_album_page').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var base_url = $("#base_url").val();
        $.ajax({
            url : base_url+"Users/AddAlbumFirstPage",
            method :"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           
            success :function(res){
            //   alert(res);
               console.log(res);
                if(res == 1){
                     $("#form_add_album_page")[0].reset();
                    Command: toastr["success"]("Record Add Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.replace(base_url+"Users/createpage"); 
                            },2000)
                        
                }else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.album_id) {
                  setv = obj.album_id;
                  }
                   if (obj.type) {
                  setv = obj.type;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            }
        })

 
}));


//ADD MILE STONE
 $('.form_edit_album_page').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var base_url = $("#base_url").val();
        $.ajax({
            url : base_url+"Users/AddAlbumFirstPage",
            method :"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           
            success :function(res){
            //   alert(res);
               console.log(res);
                if(res == 1){
                     $(".form_edit_album_page")[0].reset();
                    Command: toastr["success"]("Record Add Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.replace(base_url+"Users/createpage"); 
                            },2000)
                        
                }else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.album_id) {
                  setv = obj.album_id;
                  }
                   if (obj.type) {
                  setv = obj.type;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            }
        })

 
}));


$(document).on("click",".RemoveAlbumPage",function(){
    var base_url = $("#base_url").val();
    var m_id     = $(this).data('id');
    
    if(m_id){
        $.ajax({
            url : base_url +"Users/RemoveAlbumPage",
            method :"POST",
            data :{id:m_id},
            success :function(res){
                if(res == 1){
                     //$("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("Record Deleted Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.replace(base_url+"Users/createpage"); 
                            },2000)
                        
                }
                else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            }
        })
    }
    
    
});

$(document).on("click",".selectAlbum",function(){
    var id = $(this).data('id') ;
    var base_url = $("#base_url").val();
    
    if(id){
          $.ajax({
            url : base_url +"Users/selectAlbum",
            method :"POST",
            data :{id:id},
            success :function(res){
                if(res == 1){
                     //$("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("One Album Selected Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.replace(base_url+"Users/albumn"); 
                            },2000)
                        
                }
                else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            }
        })
        
    }
    
});
 $(document).on("click","#btn_submit_generate_url",function(){
       var base_url = $("#base_url").val();
       var name     = $("#forurl").val();
       if(name){
           $.ajax({
               url    :  base_url + "Users/updatelink",
               method : "POST",
               data   : {name:name},
               success : function(res){
                   if(res == 1){
                        Command: toastr["success"]("Url Updated Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.replace(base_url+"Users/referlink"); 
                            },2000)
                   }else{
                        var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                   }
               }
           });
       }
       
    });

//print status
$(document).on("click","#print_request",function(){
    var base_url = $("#base_url").val();
    var print    = $(this).data('type');
    if(print){
         $.ajax({
               url    :  base_url + "Users/PrintRequest",
               method : "POST",
               data   : {print:print},
               success : function(res){
                   if(res == 1){
                        Command: toastr["success"]("Print Request Submit Successfully")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.href='';
                            },2000)
                   }else{
                        var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                   }
               }
           });
    }
    
})

//delete digital bbok
//multiple milestone delete
$(document).on("click","#RemoveMulitpleDigitalBook",function(){
    var base_url = $("#base_url").val();
   // var m_id     = $(this).data('id');
    var checked = []
        $("input[name='digitalbook[]']:checked").each(function ()
        {
            checked.push(parseInt($(this).val()));
        });

// alert(checked.length);
    if(checked.length >= 1){
        $.ajax({
            url : base_url +"Users/RemoveMulitpleDigitalBook",
            method :"POST",
            data :{m_id:checked},
            success :function(res){
               // alert(res);
                if(res == 1){
                     //$("#form_add_milestone")[0].reset();
                    Command: toastr["success"]("Picture Deleted")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                         setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.href='';
                        //window.location.replace(base_url+"Users/milestones"); 
                            },2000)
                        
                }
                else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  
                  if (obj.m_id) {
                  setv = obj.m_id;
                  }
                  
                   
                  if (obj.msg) {
                  setv = obj.msg;
                  }
    
                  Command: toastr["error"](setv)
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    
                }
            }
        })
    }else{
           Command: toastr["error"]("Please select checkbox")
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                         "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "300",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
    }
    
    
});
$(document).on("click",".update_text_data",function(){
    var base_url = $("#base_url").val() ;
   // var id       = $(this).data('id');
   var id = $("#update_id").val();
   // var text_data = $(".text-data-"+id).val();
    var text_data = CKEDITOR.instances.editor1.getData();
        if(id)
        {
             $.ajax({
            url : base_url +"Users/updateDigitalData",
            method :"POST",
            data :{text_data:text_data,id:id},
            success :function(res){
                if(res)
                {
                    
                    Command: toastr["success"]("Image caption save successfully");
                    $('#modalAddBrand').modal('hide');

                    // setTimeout(() => {
                    //         location.reload();
                    // }, 3000); 
                }else{
                     Command: toastr["error"]("please try again");
                }
            },
        });
            
        }
});











