//add_to_cart
$(document).on("click",".add_to_cart",function()
{
    var base_url = $("#base_url").val();
    var p_id     = $(this).data('p_id');
    var p_price  = $(this).data('p_price');
    var p_name   = $(this).data('p_name');
    if(p_id && p_price){
        $.ajax({
                url :base_url+"AjaxController/addToCart",
                method :"POST",
                data:{p_id:p_id,p_price:p_price,p_name:p_name},
                success:function(data)
                {
                    //alert(data);
                        var obj = JSON.parse(data);
                    if(data == 1){
             
                    Command: toastr["success"]("Add To Cart Successfully")
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
                     $("#outer_cart_count").load(' ' +' #innert_cart_count');
                      $("#outer_menu_cart_count").load(' ' +' #innert_menu_cart_count');
                     
                    setTimeout(function(){
                        //$(this).unbind(e);
                        window.location.replace(base_url+"cart"); 
                            },2000)
                        }else
                        {
                               var obj = JSON.parse(data);
              var setv = '';
              if (obj.p_id) {
              setv = obj.p_id;
              }
              if (obj.p_name) {
              setv = obj.p_name;
              }
             
            if (obj.p_price) {
              setv = obj.p_price;
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
//REMOVE CART
$(document).on("click",".removeCart",function(){
   var base_url = $("#base_url").val();
   var p_id = $(this).data('p_id');
    if(p_id){
        $.ajax({
                url : base_url + "AjaxController/removeCart",
                method : "POST",
                data :{p_id:p_id},
                success : function(res){
                     if(res == 1){
                         Command: toastr["success"]("Remove from cart successfully")
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
                        window.location.href= base_url+"cart"; 
                            },2000)
                }else{
                     var obj = JSON.parse(res);
                  var setv = '';
                    if (obj.msg) {
                  setv = obj.msg;
                  }
                   if (obj.p_id) {
                  setv = obj.p_id;
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

//apply coupon code
$(document).on("click","#btn_apply_coupon_code",function(){
   var base_url     = $("#base_url").val();
   var coupon_code  = $("#coupon_code").val(); 
   var sub_total    = $("#sub_total").val();
   if(coupon_code)
   {
    $.ajax({
        url : base_url + "AjaxController/ApplyCouponCode",
        method : "POST",
        data : {coupon_code:coupon_code,sub_total:sub_total},
        success : function(res){
            console.log(res);
            if(res == 1){
                        $("#coupon_form")[0].reset();
                        // window.location.href= base_url+'checkout';
                        $("#coupon_error").html("<p class='text-success'> Coupon Code Applied Successfully</p>");
                       $("#outer_coupon").load('checkout  #inner_coupon');
                      
            }else{
                 var obj = JSON.parse(res);
                  var setv = '';
                    if (obj.msg) {
                  setv = obj.msg;
                  }
                  
            $("#coupon_error").html("<p class='text-error'>"+setv+"</p>");
             
            }
        }
    })    
   }else
   {
        $("#coupon_error").html("<p class='text-error'>Please Enter Coupon Code</p>");
     
       
   }
   
});


//place order

$(document).on("click","#place_order",function(){
   // var coupon_code     = $("#coupon_code").val();
   // var sub_total       = $("#sub_total").val();
    var base_url        = $("#base_url").val();
    var coupon_code_id  = $(this).data('coupon_code_id');
    var subtotal        = $(this).data('sub_total');
    var total           = $(this).data('total');
    var order_id        = $(this).data('order_id');
    var all_transtion_id = $(this).data('all_transtion_id');
    var coupon_amount    = $(this).data('coupon_amount');
    var first_name       = $("#first_name").val();
    var last_name        = $("#last_name").val();
    var number           = $("#number").val();
    var country          = $("#country").val();
    var address         = $("#address").val();
    var state           = $("#state").val();
    var zip_code        = $("#pincode").val();
    var razor_pay_order_id = $(this).data('razor_pay_order_id');
    if($("#checkoutTerms").prop('checked') == true){
        $.ajax({
            url : base_url+"AjaxController/PlaceOrder",
            method :"POST",
            data :{razor_pay_order_id:razor_pay_order_id,coupon_code_id:coupon_code_id,coupon_amount:coupon_amount,order_id:order_id,all_transtion_id:all_transtion_id,subtotal:subtotal,total:total,first_name:first_name,last_name:last_name,number:number,country:country,address:address,state:state,zip_code:zip_code},
            success :function(res){
            //   alert(res);
               console.log(res);
               var obj = JSON.parse(res);
                if(obj.status == 1){ 
                     $("#merchant_total").val(obj.amount);
                     options.amount = obj.amount;
                         Command: toastr["success"]("redirecting to payment gateway...")
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
                       
                       if(obj.package_id == 1){
                        setTimeout(function(){
                          window.location.href= base_url+"order-success"; 
                              },2000)
                       }else{
                         setTimeout(function(){
                        razorpaySubmit("#razorpay-form");
                            },2000)
                          }
                }else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  if (obj.first_name) {
                  setv = obj.first_name;
                  }
                  
                  if (obj.last_name) {
                  setv = obj.last_name;
                  }
                  
                  if (obj.email) {
                  setv = obj.email;
                  }
                  if (obj.number) {
                  setv = obj.number;
                  }
                  if (obj.country) {
                  setv = obj.country;
                  }
                  if (obj.address) {
                  setv = obj.address;
                  }
                  
                
                  
                   if (obj.state) {
                  setv = obj.state;
                  }
                 
                   if (obj.zip_code) {
                  setv = obj.zip_code;
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

    }else
    {
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



 $('#subscriber_from').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var base_url = $("#base_url").val();
        $.ajax({
            url : base_url+"AjaxController/AddSubscriber",
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
                    Command: toastr["success"]("Subscribe Successfully")
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
                  
                  if (obj.which) {
                  setv = obj.which;
                  }
                   if (obj.email) {
                  setv = obj.email;
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

