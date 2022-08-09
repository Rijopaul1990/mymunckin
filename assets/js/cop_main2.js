      
 var cropperInit = function () {
  'use strict';

  var Cropper = window.Cropper;
  var URL = window.URL || window.webkitURL;
  var container = document.querySelector('.img-container');
  var image = container.getElementsByTagName('img').item(0);
  var download = document.getElementById('download');
  var actions = document.getElementById('actions');
  var options = {
    // aspectRatio: 1 / 1,
    preview: '.img-preview',
  };
  var cropper = new Cropper(image, options);
  var originalImageURL = image.src;
  var uploadedImageType = 'image/jpeg';
  var uploadedImageName = 'cropped.jpg';
  var uploadedImageURL;

  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Buttons
  if (!document.createElement('canvas').getContext) {
    $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
  }

  if (typeof document.createElement('cropper').style.transition === 'undefined') {
    $('button[data-method="rotate"]').prop('disabled', true);
    $('button[data-method="scale"]').prop('disabled', true);
  }

  // Download
//   if (typeof download.download === 'undefined') {
//     download.className += ' disabled';
//     download.title = 'Your browser does not support download';
//   }

  // Methods
  actions.querySelector('.docs-buttons').onclick = function (event) {
    var e = event || window.event;
    var target = e.target || e.srcElement;
    var cropped;
    var result;
    var input;
    var data;

    if (!cropper) {
      return;
    }

    while (target !== this) {
      if (target.getAttribute('data-method')) {
        break;
      }
      target = target.parentNode;
    }

    if (target === this || target.disabled || target.className.indexOf('disabled') > -1) {
      return;
    }

    data = {
      method: target.getAttribute('data-method'),
      target: target.getAttribute('data-target'),
      option: target.getAttribute('data-option') || undefined,
      secondOption: target.getAttribute('data-second-option') || undefined
    };

    cropped = cropper.cropped;

    if (data.method) {
      if (typeof data.target !== 'undefined') {
        input = document.querySelector(data.target);

        if (!target.hasAttribute('data-option') && data.target && input) {
          try {
            data.option = JSON.parse(input.value);
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      switch (data.method) {
        case 'getCroppedCanvas':
          try {
            data.option = JSON.parse(data.option);
          } catch (e) {
            console.log(e.message);
          }

          if (uploadedImageType === 'image/jpeg') {
            if (!data.option) {
              data.option = {};
            }

            data.option.fillColor = '#fff';
          }

          break;
      }

      result = cropper[data.method](data.option, data.secondOption);

      switch (data.method) {
        case 'getCroppedCanvas':
        
          if (result) {
            //   alert('asdasd');
            // Bootstrap's Modal
           // $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

            // if (!download.disabled) {
                //console.log(result.toDataURL(uploadedImageType))
            //   download.download = uploadedImageName;
            //   download.href = result.toDataURL(uploadedImageType);
              //console.log(result.toDataURL(uploadedImageType));
             var img_path =  result.toDataURL(uploadedImageType);
            //  alert(img_path);
             var base_url  = $("#base_url").val();
             var update_id = $("#update_id").val();
                   $.ajax({
                    type: 'POST',
                    url: base_url+"Users/UpdateDigitalAlbum",
                    data:{
                      "img":img_path,
                      "update_id" :update_id
                    },
                     beforeSend: function() {
                        $("#home_loader").show();
                    },
                    success:function(data){
                        var obj = JSON.parse(data);
                        if(obj.status == 1){
                           //  $(".img-cropper").load(location.href,".img-cropper");
                            $('#img-cropper').addClass('d-none');
                            $('#preview_form').removeClass('d-none');
                            
                            $(".my_img_" + update_id).attr("src",obj.imgUrl);
                             $(".my_img_" + update_id).parent().attr("data-img",obj.imgUrl);
                            
                            //window.location.href='';

                        }
                    },
                    complete: function() {
                        $("#home_loader").hide();
                    },
              });
             
             
      
            // }
          }
          break;
      }

      if (typeof result === 'object' && result !== cropper && input) {
        try {
          input.value = JSON.stringify(result);
        } catch (e) {
          console.log(e.message);
        }
      }
    }
  };

};
       