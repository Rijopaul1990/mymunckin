
   $('#preview_form').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var base_url = $("#base_url").val();
         var temp_id = $("#temp_id").val();
        $.ajax({
            url : base_url+"Users/SubmitPreview",
            method :"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend: function(){
             $("#loading").show();
             $(".row").css("opacity","0.3");
           },
          
            success :function(res){
               //alert(res);
              // console.log(res);
                if(res == 1){
                      html2canvas(document.querySelector('#cont'),
                {
                    scrollX: -window.scrollX,
                    scrollY: -window.scrollY,
                    windowWidth: document.documentElement.offsetWidth,
                    windowHeight: document.documentElement.offsetHeight,
                    allowTaint : true
                }
                ).then(function(canvas) {
                    var dataURL = canvas.toDataURL();
                           if(dataURL){
              $.ajax({
                    type: 'POST',
                    url: base_url+"Users/SaveTemplate",
                    data:{
                     "temp_id" : temp_id,
                      "img":dataURL
                    },
                    success:function(data){
                        console.log(data);
                        if(data == 1){
                             setTimeout(function(){
                        window.location.href= base_url+"Users/share"; 
                            },2000)
                        }
                    }
              });
                    }
                });
                    
                    
                    
                    
                    
                    
        //                 html2canvas($('#cont'), {
        //           //give the div id whose image you want in my case this is #cont
        //       onrendered: function (canvas) {
        //       var img = canvas.toDataURL("image/png",1.0);//here set the image extension and now image data is in var img that will send by our ajax call to our api or server site page
        //     //alert(img);
           
        //   // var base_url = $("#base_url").val();
             
        //       }
        //       });
                        
                        
                        
                }else{
                     var obj = JSON.parse(res);
                  var setv = '';
                  if (obj.temp_id) {
                  setv = obj.temp_id;
                  }
                  
                  if (obj.t_date) {
                  setv = obj.t_date;
                  }
                  
                  if (obj.together_parent_name) {
                  setv = obj.together_parent_name;
                  }
                  if (obj.description) {
                  setv = obj.description;
                  }
                  if (obj.b_name) {
                  setv = obj.b_name;
                  }
                  if (obj.t_time) {
                  setv = obj.t_time;
                  }
                  
                  if (obj.t_day) {
                  setv = obj.t_day;
                  }
                  
                   if (obj.t_month) {
                  setv = obj.t_month;
                  }
                  if (obj.address) {
                  setv = obj.address;
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
             complete: function(){
             $("#loading").hide();
             $(".row").css("opacity","1");
           },
        })

 
}));




//  $(window).load(function(){
     
// //      var canvas=document.getElementById("canvas");
// // var ctx=canvas.getContext("2d");

// // var img=new Image();
// // img.onload=start;
// // img.src= $("#gol_image").attr("src");

// // function start(){
 
// //     canvas.width=200;
// //     canvas.height=200;
// //     ctx.save();
    
// //     ctx.fillStyle="#ff000000";
// //     ctx.fillRect(0,0,canvas.width,canvas.height);
    
// //     ctx.beginPath();
// //     ctx.arc(100,100,100,0,Math.PI*2);
// //     ctx.closePath();
// //     ctx.clip();
// //     ctx.drawImage(img,0,0);
// //     ctx.restore();
// // }
     
     
//           $('#load').click(function(){ //calling this function when Save button pressed
           
       
           
//               html2canvas($('#cont'), {
//                   //give the div id whose image you want in my case this is #cont
//               onrendered: function (canvas) {
//               var img = canvas.toDataURL("image/png",1.0);//here set the image extension and now image data is in var img that will send by our ajax call to our api or server site page
//             //alert(img);
//             var temp_id = $("#temp_id").val();
//             var base_url = $("#base_url").val();
//                     if(img){
//               $.ajax({
//                     type: 'POST',
//                     url: base_url+"Users/SaveTemplate",//path to send this image data to the server site api or file where we will get this data and convert it into a file by base64
//                     data:{
//                      "temp_id" : temp_id,
//                       "img":img
//                     },
//                     success:function(data){
//                         console.log(data);
//                         if(data == 1){
//                              setTimeout(function(){
//                         window.location.href= base_url+"Users/share"; 
//                             },2000)
//                         }
//                     }
//               });
//                     }
//               }
//               });
//           });
//         });