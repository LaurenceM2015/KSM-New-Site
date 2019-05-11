(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 56)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

})(jQuery); // End of use strict

// PARALLAX BACKGROUND IMAGE WITH JAVASCRIPT

const paralaxBkgimgJS = document.getElementById("paralaxBkgimgJS");


  window.addEventListener("scroll", function(){
    let offset = window.pageYOffset;
    paralaxBkgimgJS.style.backgroundPositionY = offset * 
    0.7 + "px";
    
   // console.log('offset: ' + offset);
   // console.log('offset * 0.7' + offset * 07);

  })

  // PARALLAX AFFECT WITH JQUERY

  // check for the window scroll 
  $(window).scroll(function(){
    parallax();
  })


  // PARALLAX FUNCTION 

  function parallax() {
    // track the screen scrolling 
    var wScroll = $(window).scrollTop();
    //console.log(wScroll);

    // select the bkg parrallax 

    $('.parallex--bg-js').css('background-position', 'fixed ' +(wScroll * 0.75)+'px')

    $('.parallex--box-js').css('top', (wScroll *0.25)+'px')


  }