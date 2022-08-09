//USER REGISTRATIONS
$("form#userRegister").submit(function(e){
  //alert(hi);
  var base_url = $("#base_url").val();
  var form = $(this);
   e.preventDefault();
    //alert(base_url);
    if($("#exampleCheck1").prop('checked') == true){
    if(form){
      $.ajax({
          url:base_url+"Login/register",
          type:"POST",
           data: form.serialize(),
          success:function(data)
          {
            //alert(data);
            console.log(data);
             var obj = JSON.parse(data);
            if(obj.status == 1){
              $("#userRegister")[0].reset();
                    Command: toastr["success"]('Registration Successfull. Please Verify Your Email Address')
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
              if (obj.email) {
              setv = obj.email;
              }
              if (obj.password) {
              setv = obj.password;
              }
               if (obj.con_password) {
              setv = obj.con_password;
              }
             
            if (obj.mobile) {
              setv = obj.mobile;
              }

            if (obj.msg) {
              setv = obj.msg;
             }
            if (obj.child_name) {
              setv = obj.child_name;
             }
              if (obj.first_name) {
              setv = obj.first_name;
             }
              if (obj.last_name) {
              setv = obj.last_name;
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
    }else{
         Command: toastr["error"]("Please Enter All Details");
    }
  } else{
    Command: toastr["error"]("Accept terms and conditions")
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


//USER LOGIN WITH USER NAME AND PASSWORD
//$(document).on("click","#UserLogin",function(){
    $('#login_from').submit(function(e){
  var email = $("#useremail").val();
  var password = $("#userpass").val();
  var base_url = $("#base_url").val();
  e.preventDefault();
  if(password && email)
  {
    $.ajax({
      url : base_url+"Login/login",
      type : "POST",
      data :{email:email,password:password},
      success :function(data){
        //alert(res);
        //console.log(data);
                if(data == 1){
                    
                    Command: toastr["success"]('Login Successful')
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                          "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "3000",
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
                        window.location.replace(base_url+"Users"); 
                            },2000)
                            
                    
                    
                  
                }else{
                  var obj = JSON.parse(data);
                  var setv = '';
                  if (obj.email) {
                  setv = obj.email;
                  }
                  if (obj.password) {
                  setv = obj.password;
                  }
                  if (obj.match) {
                  setv = obj.match;
                  }
                   if (obj.exits) {
                  setv = obj.exits;
                  }
                    if (obj.Invalid) {
                  setv = obj.Invalid;
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
         Command: toastr["error"]("Please Fill Details");
    }

});
//forget password hide and show
$(document).on("click","#btn_show_forget_form",function(){
  $("#login_form").hide();
  $("#reset_password_form").show();
});
//forget password hide and show
$(document).on("click","#btn_show_login_form",function(){
  $("#login_form").show();
  $("#reset_password_form").hide();
});

//forget password
$(document).on("click","#user_forget_password",function(){
   var user_email = $("#user_email_forget").val();
   var base_url     = $("#base_url").val();
    if(user_email){
        $.ajax({
          url : base_url+"Login/forgetUserPassword",
          type : "POST",
          data :{user_email:user_email},
          success : function(data)
          {
              console.log(data);
              if(data == 1){
                     $("#user_email_forget").val('');
                    Command: toastr["success"]('Reset Link sent on your register email ID')
                        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": false,
                          "positionClass":"toast-bottom-right",
                          "preventDuplicates": true,
                          "onclick": null,
                          "showDuration": "3000",
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
                  if (obj.user_email) {
                  setv = obj.user_email;
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
    }else{
         Command: toastr["error"]("Please Fill Email Address");
    }
});

       $('form#reset_password_form').submit(function(e){
             var form = $(this);
             var base_url = $("#base_url").val();
            e.preventDefault();
              $.ajax({
      url:base_url+"reset-password/1/2",
      type:"POST",
      data:form.serialize(),
      success:function(data){
        //console.log(data);
          var obj = JSON.parse(data);

        if (obj.status==1) {

            $('form#reset_password_form')[0].reset();
            $('#password').prop('readonly', true);
            $('#con_password').prop('readonly', true);

           Command: toastr["success"](" Your password has been successfully reset. ")

            toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-bottom-right",
              "preventDuplicates": true,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": 0,
              "extendedTimeOut": 0,
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut",
              "tapToDismiss": false
            }

                setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.replace(base_url+"login"); 
                            },2000)

        }else{
          var obj = JSON.parse(data);
          var set_v = '';
          if (obj.password) {
            set_v = obj.password;
          }
          if (obj.con_password) {
            set_v = obj.con_password;
          }
          if (obj.msg) {
            set_v = obj.msg;
          }
         
           Command: toastr["error"](set_v)
                    toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-top-right",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "3000",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
        return false; 
        }
      }

    });
         });
         
         
         
//contact form
$('form#contact_form').submit(function(e){
             var form = $(this);
             var base_url = $("#base_url").val();
            e.preventDefault();
            var first_name = $('input[name="first_name"]').val();
            var last_name = $('input[name="last_name"]').val();
            var contact_number = $('input[name="contact_number"]').val();
            var email = $('input[name="email"]').val();
            var message = $('#message').val();
            
          
             var check_alpha = /^[A-Za-z]+$/;
             var check_numbers = /^[0-9]+$/;
            
            if(first_name ==""){
            	document.getElementById('first_name').style.border = "2px solid red";
            	return false;
            }else{
                if(first_name.match(check_alpha)){
                    document.getElementById('first_name').style.border = "2px solid green";
                }else{
                    	document.getElementById('first_name').style.border = "2px solid red";
            	return false;
                }
            }
            
              if(last_name ==""){
            	document.getElementById('last_name').style.border = "2px solid red";
            	return false;
            }else{
                if(last_name.match(check_alpha)){
                    document.getElementById('last_name').style.border = "2px solid green";
                }else{
                    	document.getElementById('last_name').style.border = "2px solid red";
            	return false;
                }
            }
            
            if(contact_number ==""){
            	document.getElementById('contact_number').style.border = "2px solid red";
            	return false;
            }else{
                if(contact_number.match(check_numbers)){
                    document.getElementById('contact_number').style.border = "2px solid green";
                }else{
                    	document.getElementById('contact_number').style.border = "2px solid red";
            	return false;
                }
            }
            
       
          if(email ==""){
            	document.getElementById('email').style.border = "2px solid red";
            	return false;
            }else{
            	 document.getElementById('email').style.border = "2px solid green";
            }
            
            if(message ==""){
            	document.getElementById('message').style.border = "2px solid red";
            	return false;
            }else{
            	 document.getElementById('message').style.border = "2px solid green";
            }
            
            
              $.ajax({
              url:base_url+"AjaxController/ContactEnquiry",
              type:"POST",
              data:form.serialize(),
             success:function(data){
          var obj = JSON.parse(data);

        if (data==1) {

            $('form#contact_form')[0].reset();
           Command: toastr["success"](" Enquiry Sent Successfully..!!! ")
        }else{
          var obj = JSON.parse(data);
          var set_v = '';
          if (obj.first_name) {
            set_v = obj.first_name;
          }
          if (obj.last_name) {
            set_v = obj.last_name;
          }
          
          if (obj.email) {
            set_v = obj.email;
          }
          if (obj.contact_number) {
            set_v = obj.contact_number;
          }if (obj.message) {
            set_v = obj.message;
          }
          
          if (obj.msg) {
            set_v = obj.msg;
          }
         
           Command: toastr["error"](set_v)
                toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass":"toast-top-right",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "3000",
                      "hideDuration": "1000",
                      "timeOut": "2000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    }
        return false; 
        }
      }

    });
         });
         
         function Check(e) {
            var keyCode = (e.keyCode ? e.keyCode : e.which);
            if (keyCode > 47 && keyCode < 58) {
                e.preventDefault();
            }
        }
        function checkNumber(evt){
             if (evt.which < 48 || evt.which > 57)
                {
                    evt.preventDefault();
                }
                    }