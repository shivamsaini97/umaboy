

// $(window).on( "load", function() {
//     setTimeout(function() {
//         $('#pop-up').show();
//     }, 500);
//     $('body, html').css("overflow-y","hidden");
// });

// $('.close-form').click(function() {
//     $('#pop-up').hide();
//     $('body, html').css("overflow-y","unset");

// })
$(document).ready(function() { 
    $('#pop-up').fadeIn(1000); 
       
  });
  $( ".close-form" ).click(function() {
    $( "#pop-up" ).css("display", "none");
  });

  $(function() {
    'use strict'; // Start of use strict
   
    /*------------------------------------------------------------------
    Navigation Hover effect
    ------------------------------------------------------------------*/
    $('ul.navbar-nav li.dropdown').hover(function() {
        $(this).find('.sub-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.sub-menu').stop(true, true).delay(200).fadeOut(500);
    });

     //MobileMenu Activated
    $('.mainmenu-area nav').meanmenu();

    /*--------------------------
    scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*--------------------------
    Gallery
    ---------------------------- */	
    $('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
	});
		
	/*------------------------------------------------------------------
    Owl Carousel for Service Details Slider
	------------------------------------------------------------------*/
    var owl = $("#single-services");
    owl.owlCarousel({
        nav: true,
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 1
            },
            600: {
                items: 1
            },
            700: {
                items: 1
            },
            1000: {
                items: 1
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            }
        }
    });
	/*------------------------------------------------------------------
    Owl Carousel for Testimonials
	------------------------------------------------------------------*/
    var owl = $("#testimonial");
    owl.owlCarousel({
        nav: true,
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 1
            },
            600: {
                items: 1
            },
            700: {
                items: 1
            },
            1000: {
                items: 1
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            }
        }
    });
	$(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
/*---------------------------------------------------------------------
		Magnific Popup 
    ------------------------------------------------------------------------*/
    if ($('.front-gallery, .gallery-section').length) {

        $('.front-gallery, .gallery-section').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by sbtechnosoft</small>';
                }
            }
        });
    }
    if ($('.image-popup-no-margins').length) {

        $('.image-popup-no-margins').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom',
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300
            }
        });
    }
	/*------------------------------------------------------------------
    FAQ
    ------------------------------------------------------------------*/
	if($('.fp-accordion').length){		
		
		$( '.fp-accordion' ).on( 'click', 'h2, .icons', function() {
			var $faq = $( this ).closest( '.fp-accordion' );

			$faq.find( '.toggle-content' ).slideToggle( 500, function() {
				$faq.toggleClass( 'active' );
			} );
		} );
		}	
    /*---------------------------------------------------------------------
    Gallery Post Hove Effect for Caption Script
    ------------------------------------------------------------------------*/
    function gallery_hover() {

        if ($(".gallery-caption img").length) {
            $(".gallery-caption img").on('mouseover', function() {
                var img_width = $(".gallery-caption img").width();
                var img_height = $(".gallery-caption img").height();
                $(".gallery-caption .blur").css({
                    "height": img_height,
                    "width": img_width
                });
            });
        }
    }
    gallery_hover();
    /*---------------------------------------------------------------------
    Image Filter Script 
    ------------------------------------------------------------------------*/
    var $container = $('.portfolioContainer');

    if ($('.portfolioFilter').length) {
        $('.portfolioFilter a').on('click', function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    }   
    /*------------------------------------------------------------------
    Header Navigation
    ------------------------------------------------------------------*/
    if ($(window).width() > 767) {
        $('ul.navbar-nav li.dropdown').on('hover', function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    }
});

/*------------------------------------------------------------------
WOW
------------------------------------------------------------------*/
wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();
/*------------------------------------------------------------------
 Loader 
------------------------------------------------------------------*/
jQuery(window).on("load scroll", function() {
    'use strict'; // Start of use strict
    // Loader 
     $("#dvLoading").fadeOut("fast");
	 // map zooming 	 
        $('.google-map').on('click', function() {
            $('.google-map').find('iframe').css("pointer-events", "auto");
        });
    //Animation Numbers	 
    jQuery('.animateNumber').each(function() {
        var num = jQuery(this).attr('data-num');
        var top = jQuery(document).scrollTop() + (jQuery(window).height());
        var pos_top = jQuery(this).offset().top;
        if (top > pos_top && !jQuery(this).hasClass('active')) {
            jQuery(this).addClass('active').animateNumber({
                number: num
            }, 2000);
        }
    });
});

/*------------------------------------------------------------------
Count Down
------------------------------------------------------------------*/
if ($(".count-down").length) {
    var year = parseInt($(".count-down").attr("data-countdown-year"), 10);
    var month = parseInt($(".count-down").attr("data-countdown-month"), 3) - 1;
    var day = parseInt($(".count-down").attr("data-countdown-day"), 10);
    $(".count-down").countdown({
        until: new Date(year, month, day),
        padZeroes: true
    });
}


$("#contact-form").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      tel: {
        required: true,
        minlength: 10
      }
    },
    messages: {
      name: "Please enter your name",
      tel: {
        required: "Please provide a valid number"
      },
      email: "Please enter a valid email address"
    },
    submitHandler: function (form) {
      form.submit();
    }
  });
  
//   $("#get-form").validate({
//     rules: {
//       name: "required",
//       email: {
//         required: true,
//         email: true
//       },
//       tel: {
//         required: true,
//         minlength: 10
//       }
//     },
//     messages: {
//       name: "Please enter your name",
//       tel: {
//         required: "Please provide a valid number"
//       },
//       email: "Please enter a valid email address"
//     },
//     submitHandler: function (form) {
//       form.submit();
//     }
//   });
  
//   $('.button').click(function () {
//     $('#modal').removeClass('d-none');
//   });
  
//   $('.close').click(function () {
//     $('#modal').addClass('d-none');
//   })




$(window).on( "load", function() {
    setTimeout(function() {
        $('#pop-up').show();
    }, 500);
});

$('.close-form').click(function() {
    $('#pop-up').hide()
})


$("#contact_form").validate({
    rules: {
        name: "required",
        email: {
            required: true,
            email: true
        },
        tel: {
            required: true,
            minlength: 10
        }
    
    },
    messages: {
        name: "Please enter your name",
        tel: {
            required: "Please provide a valid number"
        },
        email: "Please enter a valid email address"
    },
    submitHandler: function (form) {
        form.submit();
    }
});
$('input[type=tel]').keydown(function(event) {
    if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true) ||
        (event.keyCode >= 35 && event.keyCode <= 39)) {
        return;
    } else {
        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
            event.preventDefault();
        }
    }
});