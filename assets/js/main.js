AOS.init({
      duration:2000,

})
base_url = $("#base_url").val();
$('#course-banner').owlCarousel({
  loop:true,
  margin:30,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});
$('#create-second').owlCarousel({
  loop:true,
  margin:20,
  autoplay: true,
  nav:false,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
});

$('#template').owlCarousel({
  loop:true,
  margin:20,
  autoplay: true,
  nav:true,
  navText: ["<img src='"+base_url+"assets/img/prev.png'>","<img src='"+base_url+"assets/img/next.png'>"],
  dots:false,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
});

$('#cong-template').owlCarousel({
  loop:true,
  margin:40,
  autoplay: true,
  nav:true,
  navText: ["<img src='"+base_url+"assets/img/prev.png'>","<img src='"+base_url+"assets/img/next.png'>"],
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});
$('#cong-template2').owlCarousel({
  loop:true,
  margin:40,
  autoplay: true,
  nav:true,
  navText: ["<img src='"+base_url+"assets/img/prev.png'>","<img src='"+base_url+"assets/img/next.png'>"],
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});


$('#mob-package').owlCarousel({
  loop: false,
//   margin: 40,
  nav: false,
  autoplay: false,
  center:true,
  autoplayHoverPause: false,
  responsive: {
    0: {
      items: 1,
    margin: -150,
    },
    760: {
      items: 2,
        center:false,
        margin: 30,
    },
    1000: {
      items: 3,
        center:false,
        margin: 30,
    }
  }

});

$('#blog-box').owlCarousel({
  loop:false,
  margin:30,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});


$(".show-side, .menuoverlay").click(function () {
        $(".show-side .fa-bars").toggle();
        $(".show-side .fa-times").toggle();
        $(".side-menu .nav-link").toggleClass("showMenu");
        // $(".menuoverlay").toggle();
        $("#sidebar-wrapper").toggleClass("showMenu");
        // $("body").toggleClass("overflow-hidden");
        // $(".firstMenu").toggleClass("backgroundVar");
    });

$(".side-menu .nav-link").click(function () {
        $("#sidebar-wrapper").toggleClass("showMenu");
        $(".show-side .fa-bars").toggle();
        $(".show-side .fa-times").toggle();
    });
    
if ( $('#banner').length ) {
  $("#banner").mousemove(function(e) {
    // parallaxIt(e, ".kid-img", -30);
    parallaxIt(e, ".background-icons img", -100);
  });
  
  function parallaxIt(e, target, movement) {
    var $this = $("#banner");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
  
    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }
}
if ( $('#about').length ) {
  $("#about").mousemove(function(e) {
    // parallaxIt(e, ".kid-img", -30);
    parallaxIt(e, ".background-icons1 img", -100);
  });
  
  function parallaxIt(e, target, movement) {
    var $this = $("#about");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
  
    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }
}
if ( $('#how').length ) {
  $("#how").mousemove(function(e) {
    // parallaxIt(e, ".kid-img", -30);
    parallaxIt(e, ".background-icons2 img", -100);
  });
  
  function parallaxIt(e, target, movement) {
    var $this = $("#how");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
  
    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }
}
if ( $('#create-second-icons').length ) {
  $("#create-second-icons").mousemove(function(e) {
    // parallaxIt(e, ".kid-img", -30);
    parallaxIt(e, ".background-icons3 img", -100);
  });
  
  function parallaxIt(e, target, movement) {
    var $this = $("#create-second-icons");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
  
    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }
}
if ( $('#price').length ) {
  $("#price").mousemove(function(e) {
    // parallaxIt(e, ".kid-img", -30);
    parallaxIt(e, ".background-icons4 img", -100);
  });
  
  function parallaxIt(e, target, movement) {
    var $this = $("#price");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
  
    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }
}
if ( $('#customer').length ) {
  $("#customer").mousemove(function(e) {
    // parallaxIt(e, ".kid-img", -30);
    parallaxIt(e, ".background-icons5 img", -100);
  });
  
  function parallaxIt(e, target, movement) {
    var $this = $("#customer");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
  
    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }
}
if ( $('#blog').length ) {
  $("#blog").mousemove(function(e) {
    // parallaxIt(e, ".kid-img", -30);
    parallaxIt(e, ".background-icons6 img", -100);
  });
  
  function parallaxIt(e, target, movement) {
    var $this = $("#blog");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
  
    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }
}
if ( $('#announcement').length ) {
  $("#announcement").mousemove(function(e) {
    // parallaxIt(e, ".kid-img", -30);
    parallaxIt(e, ".background-icons7 img", -100);
  });
  
  function parallaxIt(e, target, movement) {
    var $this = $("#announcement");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
  
    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }
}

// $(document).ready(function() {
//   $(window).scroll(function() {
//     if ($(document).scrollTop() > 10) {
//       $("header").addClass("sticky");
//     } else {
//       $("header").removeClass("sticky");
//     }
//   });
// });


$("#navbarSupportedContent").click(function(){
  $(".navbar-collapse").toggleClass("kk");
  $(".cross").toggleClass("cross-blk");
  $(".navbar-toggler-icon").toggle();
});

// var oTurn = $("#flipbook").turn({
//     width: 1000,
//     height: 300,
//     autoCenter: true,
//     next:true
// });

$(".edit_dash input").prop('disabled', true);
$(".edit_dash .edit").click(function(){
    $(".edit_dash input").prop('disabled', false);
});

$(".edit_dash .btn-munchkin").prop('disabled', true);
$(".edit_dash .edit").click(function(){
    $(".edit_dash .btn-munchkin").prop('disabled', false);
});



$("#album-preview").click(function(){
  $(".album-preview").addClass("show");

});
$(document).ready(function(){
    $('.dashboard .custom-file-input').change(function(e){
        var fileName = e.target.files[0].name;
        console.log(fileName);
        $(".custom-file-label").html(fileName);
    });
});
