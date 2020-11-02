$(document).ready(function(){

})

 $(document).ready(function () {
  // reference for main items
  var slider = $('#slider');
  // reference for thumbnail items
  var thumbnailSlider = $('#thumbnailSlider');
  //transition time in ms
  var duration = 500;

  // carousel function for main slider
  slider.owlCarousel({
   loop:false,
   nav:false,
   items:1
  }).on('changed.owl.carousel', function (e) {
   //On change of main item to trigger thumbnail item
   thumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });

  // carousel function for thumbnail slider
  thumbnailSlider.owlCarousel({
   loop:false,
   left:true, //to display the thumbnail item in center
   nav:false,
   responsive:{
    0:{
     items:3
    },
    600:{
     items:3
    },
    1000:{
     items:3
    }
   }
  }).on('click', '.owl-item', function () {
   // On click of thumbnail items to trigger same main item
   slider.trigger('to.owl.carousel', [$(this).index(), duration, true]);

  }).on('changed.owl.carousel', function (e) {
   // On change of thumbnail item to trigger main item
   slider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });


  //These two are navigation for main items
  $('.slider-right').click(function() {
   slider.trigger('next.owl.carousel');
  });
  $('.slider-left').click(function() {
   slider.trigger('prev.owl.carousel');
  });
 });


$(document).ready(function () {
$('.navbar .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(200);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(10)
    });
});

$('.navbar .dmenu-2').hover(function () {
    $(this).find('.sm-menu-2').first().stop(true, true).slideDown(200);
    $(this).css({"display" : "block"});
}, function () {
     $(this).css({"display" : "block"});
    $(this).find('.sm-menu-2').first().stop(true, true).slideUp(10);
});



$(document).ready(function() {
      var owl = $('#gallery .owl-carousel');
      owl.owlCarousel({
        loop:true,
        rtl:true,
      // dots:false,
      margin:0,
      autoplay:true,
      slideTransition: 'linear',
      autoplayTimeout: 3000,
      autoplaySpeed: 3000,
      fluidSpeed:true,
      autoplayHoverPause:true,
      nav:true,
      navText : ["",""],
        responsive: {
          0: {
            items: 1
          },
          800: {
            items: 2
          },
          1000: {
            items: 2
          }
        }
      })
})

$(document).ready(function() {
      var owl = $('#floorplan .owl-carousel');
      owl.owlCarousel({
        loop:true,
        rtl:true,
      // dots:false,
      margin:0,
      autoplay:true,
      slideTransition: 'linear',
      autoplayTimeout: 3000,
      autoplaySpeed: 3000,
      fluidSpeed:true,
      autoplayHoverPause:true,
      nav:true,
      navText : ["",""],
        responsive: {
          0: {
            items: 1
          },
          800: {
            items: 2
          },
          1000: {
            items: 2
          }
        }
      })
})

$(document).ready(function(){
	// Magnifiy Popup 

	$(".image-popup").magnificPopup({
        type : 'image',
        // gallery : {enabled : true},
        removalDelay : 500,
        callbacks: {
        beforeOpen: function() {
          		// just a hack that adds mfp-anim class to markup 
           		this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
           		this.st.mainClass = this.st.el.attr('data-effect');
        	}
      	},
      	closeOnContentClick: true,
      	midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      })
 
})

$(function(){
   $(".box-enquiry").hide();
      $(".slide-toggle").click(function(){
          $(".box-enquiry").animate({
              width: "toggle"
          });
      });
})

$(document).ready(function() {
  var offset=300, // At what pixels show Back to Top Button
  scrollDuration=1100; // Duration of scrolling to top
      $(window).scroll(function() {
      if ($(this).scrollTop() > offset) {
              $('.top').fadeIn(800); // Time(in Milliseconds) of appearing of the Button when scrolling down.
              } else {
      $('.top').fadeOut(500); // Time(in Milliseconds) of disappearing of Button when scrolling up.
      }
  });

  // Smooth animation when scrolling
  $('.top').click(function(event) {
  event.preventDefault();
          $('html, body').animate({
          scrollTop:0}, scrollDuration);
     })
  });