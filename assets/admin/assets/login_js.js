//Validated user name
$(document).on('click','#login_btn',function(){
	   var luns 	= $('#login_user_name').val();
	   var lup    	= $('#login_user_password').val();
	   var base_url = $('#base_url').val(); 
	   if(luns !=="" && lup !==""){
		$.ajax({
			url: base_url+'admin/checkusername',
			type:'POST',
			data:{flun:luns},
			success:function(res){ 
				//	alert(res);
					console.log(res);
				if(res==1){
					// Add Class
					$('#login_user_name').removeClass('input_error').addClass('input_success');
					$('#login_user_password').show().focus();
							
					$.ajax({
					url: base_url+'admin/login',
					type:'POST',
					data:{luns:luns,lup:lup},
					success:function(rd){ 
			//	alert(rd)
				console.log(rd);
				if(rd==1){
					 					
					//Add Class
					$('#login_user_password').removeClass('input_error').addClass('input_success'); 
					
					//Set Value
					$('.user_title').html('Checking... Please Wait').css("color", "#45bf1f");
					
					//Send on page
					setTimeout(function(){
						$('.user_title').html('Welcome to Admin').css("color", "#45bf1f");
						 window.location.href=base_url+'admin';
					},1000);
					 
			    }else if(rd==0){
					
					//Add Class
					$('#login_user_password').removeClass('input_success').addClass('input_error');
					
					//Set Value
					$('.user_title').html('Admin Login Panel').css("color", "#fff");
				    
			    }else{
					console.log(rd);
				}
			}
		});
			    }else if(res==2){
					
					// Add Class
					$('#login_user_name').removeClass('input_success').addClass('input_error');
					
					//Set Value
					$('.user_title').html('Admin Login Panel').css("color", "#fff");
				    
			    }else{
					console.log(res);
				}
			}
		});
	}
 
	return false;
});
 
//Validated user name & Password
// $(document).on('click','#login_btn',function(){
// 	var lup    = $('#login_user_password').val();
// 	var lun    = $('#login_user_name').val();
// 	var base_url = $('#base_url').val();
// 	if(lun !=="" && lup !==""){
		
// 		$.ajax({
// 			url: base_url+'admin/login',
// 			type:'POST',
// 			data:{lun:lun,lup:lup},
// 			success:function(rd){ 
// 				alert(rd)
// 				console.log(rd);
// 				if(rd==1){
					 					
// 					//Add Class
// 					$('#login_user_password').removeClass('input_error').addClass('input_success'); 
					
// 					//Set Value
// 					$('.user_title').html('Checking... Please Wait').css("color", "#45bf1f");
					
// 					//Send on page
// 					setTimeout(function(){
// 						$('.user_title').html('Welcome to Admin').css("color", "#45bf1f");
// 						 window.location.href=base_url+'admin';
// 					},1000);
					 
// 			    }else if(rd==0){
					
// 					//Add Class
// 					$('#login_user_password').removeClass('input_success').addClass('input_error');
					
// 					//Set Value
// 					$('.user_title').html('Admin Login Panel').css("color", "#fff");
				    
// 			    }else{
// 					console.log(rd);
// 				}
// 			}
// 		});
// 	}
	
// 	return false;
	
	
// });

//Validated Logout
$(document).on('click','#logout',function(){
	$.ajax({
			url:'ajax_to_php/admin_login.php',
			type:'POST',
			data:{logout:'Yes'},
			success:function(rd){ 
			  if(rd==1){
				  window.location.href='index.php';
			  }else{
				  console.log(rd);
			  }
			   
			}
	});
	return false;
});


function show_login_form(){
	$('.chrp').hide();
	$('#login_user_name').focus();
	$('.login_bg').show();
}