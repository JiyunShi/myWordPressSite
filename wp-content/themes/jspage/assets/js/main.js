
$('body').scrollspy({ target: '.navmenu' });

// When we click on the LI
$("ul.qcontrols li").click(function(){
  // If this isn't already active
  if (!$(this).hasClass("active")) {
    // Remove the class from anything that is active
    $("ul.qcontrols li.active").removeClass("active");
    // And make this active
    $(this).addClass("active");
  }
});


//WOW Scroll Spy
var wow = new WOW({
    //disabled for mobile
    mobile: false
});
wow.init();

jQuery(document).ready(function( $ ) {
    //circle-progress change into wow.js line 146, so the animation can start after wow animation.     

   //Clients carousel Slider
    $('#clients-carousel').owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 500,
        paginationSpeed: 900,
        autoPlay: true,
        pagination : false,
        items : 3,
        itemsCustom : false,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
    });
       $('#menu').click(function(){
       $('#menu').not(this).removeClass("active");
       $(this).toggleClass("active");
      });

  });

  
//ScrollTop
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
  
  
  //jumble effect on h1 frontpage
  $('#editorName').jumble([9,210,195],false,true,false,500);
  
  $('.section-title span').jumble([9,210,195], [255,255,255],true,false,1500);
  
});
