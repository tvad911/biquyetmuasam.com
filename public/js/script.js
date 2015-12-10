(function($) {
"use strict";

/* ==============================================
TABBED HOVER -->
=============================================== */
  
  $('.nav-pills > li ').hover( function(){
    if($(this).hasClass('hoverblock'))
      return;
      else
      $(this).find('a').tab('show');
  });

  $('.nav-tabs > li').find('a').click( function(){
    $(this).parent()
      .siblings().addClass('hoverblock');
  });

  $(document).ready(function(){
      $('.topbarhover').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
      }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
      });  
  });

  $(".ddd").on("click", function () {
      var $button = $(this);
      var $input = $button.closest('.sp-quantity').find("input.quntity-input");
      
      $input.val(function(i, value) {
          return +value + (1 * +$button.data('multi'));
      });
  });

/* ==============================================
MENU HOVER -->
=============================================== */

    jQuery('.hovermenu .dropdown').hover(function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });

/* ==============================================
MENU CLICKABLE for HORIZONTAL -->
=============================================== */

  $('.clickablemenu .dropdown').click('show.bs.dropdown', function(e){
    var $dropdown = $(this).find('.dropdown-menu');
      var orig_margin_top = parseInt($dropdown.css('margin-top'));
      $dropdown.css({'margin-top': (orig_margin_top + 65) + 'px', opacity: 0}).animate({'margin-top': orig_margin_top + 'px', opacity: 1}, 420, function(){
        $(this).css({'margin-top':''});
    });
  });

/* ==============================================
MENU CLICKABLE for VERTICAL -->
=============================================== */

  $('.verticalmenu .dropdown').click('show.bs.dropdown', function(e){
    var $dropdown = $(this).find('.dropdown-menu');
      var orig_margin_top = parseInt("1", 10);
      $dropdown.css({'margin-left': (orig_margin_top + 65) + 'px', opacity: 0}).animate({'margin-left': orig_margin_top + 'px', opacity: 1}, 420, function(){
         $(this).css({'margin-left':''});
    });
  });

/* ==============================================
TOOLTIP -->
=============================================== */

  $('body').tooltip({
    selector: "[data-tooltip=tooltip]",
    container: "body"
  });

/* ==============================================
CAROUSEL -->
=============================================== */

    $('#owl-sidebar').owlCarousel({
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('#owl-home').owlCarousel({
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('#owl-featured').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('#owl-recent-second').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
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
    })
    $('#owl-featured-second').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
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
    })
    $('#owl-recent').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('#owl-blog').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
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
    })
    $('#owl-testi').owlCarousel({
        loop:true,
        margin:15,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })

/* ==============================================
LOADER -->
=============================================== */

    $(window).load(function() {
        $('#loader').delay(300).fadeOut('slow');
        $('#loader-container').delay(200).fadeOut('slow');
        $('body').delay(300).css({'overflow':'visible'});
    })

/* ==============================================
ANIMATION -->
=============================================== */

    new WOW({
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
    }).init();
    
/* ==============================================
BACK TOP -->
=============================================== */

    jQuery(window).scroll(function(){
    if (jQuery(this).scrollTop() > 1) {
    jQuery('.backtotop').css({bottom:"25px"});
    } else {
    jQuery('.backtotop').css({bottom:"-100px"});
    }
    });
    jQuery('.backtotop').click(function(){
    jQuery('html, body').animate({scrollTop: '0px'}, 800);
    return false;
    });
    
})(jQuery);