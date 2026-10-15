/* =====================================================
Template Name   : Nutrixo
Description     : Nutrition, Diet and Recipe HTML5 Template
Author          : Themesland
Version         : 1.3
=======================================================*/

(function ($) {
    "use strict";


    // multi level dropdown menu
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass('show');
        });
        return false;
    });
    

    //Header Search
    if ($('.search-box-outer').length) {
        $('.search-box-outer').on('click', function () {
            $('body').addClass('search-active');
        });
        $('.close-search').on('click', function () {
            $('body').removeClass('search-active');
        });
    }



    // data-background    
    $(document).on('ready', function () {
        $("[data-background]").each(function () {
            $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
        });
    });


    // wow init
    new WOW().init();


    // hero slider
    $('.hero-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: -1,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
        items: 1,
        navText: [
            "<i class='far fa-long-arrow-left'></i>",
            "<i class='far fa-long-arrow-right'></i>"
        ],
    });

    $('.hero-slider').on('change.owl.carousel', function (event) {
        new WOW().init();
    });



    // hero slider 2
    $('.hero-slider2').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: -1,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
        items: 1,
        navText: [
            "<i class='fal fa-long-arrow-left'></i>",
            "<i class='fal fa-long-arrow-right'></i>"
        ],
    });

    $('.hero-slider2').on('change.owl.carousel', function (event) {
        new WOW().init();
    });


    // partner-slider
    $('.partner-slider').owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        navText: [
            "<i class='icofont-long-arrow-left'></i>",
            "<i class='icofont-long-arrow-right'></i>"
        ],
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });


    // testimonial-slider
    $('.testimonial-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        navText: [
            "<i class='icofont-long-arrow-left'></i>",
            "<i class='icofont-long-arrow-right'></i>"
        ],
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });


    // case-slider
    $('.case-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: [
            "<i class='far fa-long-arrow-left'></i>",
            "<i class='far fa-long-arrow-right'></i>"
        ],
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });



    // preloader
    $(window).on('load', function () {
        $(".preloader").fadeOut("slow");
    });


    // fun fact counter
    $('.counter').countTo();
    $('.counter-box').appear(function () {
        $('.counter').countTo();
    }, {
        accY: -100
    });


    // progress bar
    $(document).ready(function () {
        var progressBar = $('.progress');
        if (progressBar.length) {
            progressBar.each(function () {
                var Self = $(this);
                Self.appear(function () {
                    var progressValue = Self.data('value');
                    Self.find('.progress-bar').animate({
                        width: progressValue + '%'
                    }, 1000);
                });
            })
        }
    });


    // magnific popup init
    $(".popup-gallery").magnificPopup({
        delegate: '.popup-img',
        type: 'image',
        gallery: {
            enabled: true
        },
    });

    $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });



    // scroll to top
    $(window).scroll(function () {

        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            $("#scroll-top").fadeIn('slow');
        } else {
            $("#scroll-top").fadeOut('slow');
        }
    });

    $("#scroll-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });


    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass("fixed-top");
        } else {
            $('.navbar').removeClass("fixed-top");
        }
    });


    // countdown
    if ($('#countdown').length) {
      $("#countdown").countdown("2025/11/30", function (event) {
        const jours = event.offset.totalDays;
        const heures = event.offset.hours;
        const minutes = event.offset.minutes;
        const secondes = event.offset.seconds;

        $(this).html(
          '<div class="row text-center">' +
            '<div class="col countdown-single">' +
            '<h2 class="mb-0">' +
            jours +
            "</h2>" +
            '<h5 class="mb-0">' +
            (jours > 1 ? "jours" : "jour") +
            "</h5>" +
            "</div>" +
            '<div class="col countdown-single">' +
            '<h2 class="mb-0">' +
            heures +
            "</h2>" +
            '<h5 class="mb-0">' +
            (heures > 1 ? "heures" : "heure") +
            "</h5>" +
            "</div>" +
            '<div class="col countdown-single">' +
            '<h2 class="mb-0">' +
            minutes +
            "</h2>" +
            '<h5 class="mb-0">' +
            (minutes > 1 ? "minutes" : "minute") +
            "</h5>" +
            "</div>" +
            '<div class="col countdown-single">' +
            '<h2 class="mb-0">' +
            secondes +
            "</h2>" +
            '<h5 class="mb-0">' +
            (secondes > 1 ? "secondes" : "seconde") +
            "</h5>" +
            "</div>" +
            "</div>"
        );
      });

    }


    // project filter
    $(window).on('load', function () {
        if( $(".filter-box").children().length > 0 ) {
            $(".filter-box").isotope({
                itemSelector: '.filter-item',
                masonry: {
                  columnWidth: 1
                },
            });

            $('.filter-btns').on( 'click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $(".filter-box").isotope({ filter: filterValue });
            });

            $(".filter-btns button").each(function(){
                $(this).on("click", function(){
                    $(this).siblings("button.active").removeClass("active"); 
                    $(this).addClass("active");
                });
            });
        }
    });


    // copywrite date
    let date= new Date().getFullYear();
    $("#date").html(date);



    // price range slider
	if($(".price-range").length){
        $( ".price-range" ).slider({
            range: true,
            min: 0,
            max: 999,
            values: [ 100, 500 ],
            slide: function( event, ui ){$( "#price-amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );}
        });
        $( "#price-amount" ).val( "$" + $( ".price-range" ).slider( "values", 0 ) + " - $" + $( ".price-range" ).slider( "values", 1 ) );
    }


    //cart quantity
    $(".plus-btn").on("click", function () {
        var i = $(this).closest(".cart-qty").children(".quantity").get(0).value++,
            c = $(this).closest(".cart-qty").children(".minus-btn");
        i > 0 && c.removeAttr("disabled");
    }),
    $(".minus-btn").on("click", function () {
        2 == $(this).closest(".cart-qty").children(".quantity").get(0).value-- && $(this).attr("disabled", "disabled");
    })


    // flexslider
    if ($('.flexslider-thumbnails').length) {
    $('.flexslider-thumbnails').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function (slider) {
            slider.find('.flex-prev').attr('aria-label', 'Photo précédente');
            slider.find('.flex-next').attr('aria-label', 'Photo suivante');
        }
     });
    }




})(jQuery);










