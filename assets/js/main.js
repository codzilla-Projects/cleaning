/*
*
* JS Script
* @ThemeEaster
*/

(function($){ "use strict";

    /* ======= Preloader ======= */
    $(window).on('load', function() {
        $('body').addClass('loaded');
    });

$(document).ready(function() {

    /* ======= Header ======= */
    var primaryHeader = $('.primary-header'),
        headerClone = primaryHeader.clone();
    $('.header').after('<div class="sticky-header"></div>');
    $('.sticky-header').html(headerClone);
    var headerSelector = document.querySelector(".sticky-header");
    var triggerPoint = $('.header').height();
    var yOffset = 0;

    $(window).on('scroll', function () {
        yOffset = $(window).scrollTop();
        if (yOffset >= triggerPoint) {
            $('.sticky-header').addClass('sticky-fixed-top');
        } else {
            $('.sticky-header').removeClass('sticky-fixed-top');
        }
    });

    if ($('.primary-header').length) {
        $('.header .primary-header .burger-menu').on("click", function () {
            $(this).toggleClass('menu-open');
            $('.header .header-menu-wrap').slideToggle(300);
        });

        $('.sticky-header .primary-header .burger-menu').on("click", function () {
            $(this).toggleClass('menu-open');
            $('.sticky-header .header-menu-wrap').slideToggle(300);
        });
    }

    $('.header-menu-wrap ul li:has(ul)').each(function () {
        $(this).append('<span class="dropdown-plus"></span>');
        $(this).addClass('dropdown_menu');
    });

    $('.header-menu-wrap .dropdown-plus').on("click", function () {
        $(this).prev('ul').slideToggle(300);
        $(this,).toggleClass('dropdown-open');
        $('.header-menu-wrap ul li:has(ul)').toggleClass('dropdown-open');
    });

    $('.header-menu-wrap .dropdown_menu a').append('<span></span>');

    // Responsive Classes
    function responsiveClasses() {
        var body = $('body');
        if ($(window).width() < 992) {
            body.removeClass('viewport-lg');
            body.addClass('viewport-sm');
        } else {
            body.removeClass('viewport-sm');
            body.addClass('viewport-lg');
        }
    }

    // Header BTN Effect
    $('.header-btn').on('mouseenter', function (e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({top: relY, left: relX})
    }).on('mouseout', function (e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({top: relY, left: relX})
    });

    /* Smooth Scrolling */
    $('a[href*="#"]').smoothscroll({
        duration:  400
    });

    /* Scroll to Top */
    var scrollTop = $("#scroll-top");
    $(window).on('scroll', function () {
        var topPos = $(this).scrollTop();
        if (topPos > 100) {
            $('#scrollup').removeClass('hide');
            $('#scrollup').addClass('show');

        } else {
            $('#scrollup').removeClass('show');
            $('#scrollup').addClass('hide');
        }
    });

    /* Click event to scroll to top */
    $(scrollTop).on("click", function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    /* ======= Main Slider ======= */
    $('#main-slider').on('init', function(e, slick) {
        var $firstAnimatingElements = $('div.single-slide:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });
    $('#main-slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
              var $animatingElements = $('div.single-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
              doAnimations($animatingElements);
    });
    $('#main-slider').slick({
       autoplay: true,
       autoplaySpeed: 10000,
       dots: true,
       fade: true,
       prevArrow: '<div class="slick-prev"><i class="ti-angle-left"></i></div>',
            nextArrow: '<div class="slick-next"><i class="ti-angle-right"></i></div>'
    });
    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }

    /* ======= Button Effect ======= */
    $('.default-btn').on('mouseenter', function (e) {
        var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
        $(this).find('span').css({top: relY, left: relX})
    }).on('mouseout', function (e) {
        var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
        $(this).find('span').css({top: relY, left: relX})
    });


    /* ======= WOW Active ======= */
    new WOW().init();

    $('select').niceSelect();
$('.popup-youtube').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: "auto",
        closeBtnInside: false
    });
    /* ======= Projects ======= */
    $('.project-carousel').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 7,
        slidesToScroll: 7,
        prevArrow: '<i class="ti-angle-left left"></i>',
        nextArrow: '<i class="ti-angle-right right"></i>',
        infinite: true,
        dots: true,
        pauseOnFocus: false,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 6,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 42,
                    slidesToScroll: 42
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

     /* ======= Faq Accordion ======= */
    $('.collapse').on('shown.bs.collapse',function(){
        $(".collapse.show").parent().addClass('active-acc');
    });
    $('.collapse').on('hidden.bs.collapse',function(){
        $(".collapse").parent().removeClass('active-acc');
    });


});


$(function(){
  $('.dropdown-toggle').click(
    function(){
      if ($(this).next().is(':visible')) {
        location.href = $(this).attr('href');;
      }
     });
  });
             
$(window).on('scroll',function(){if($(this).scrollTop()>10){$('[data-src]').each(function(){$(this).attr('src',$(this).data('src'));$(this).removeAttr('data-src')})}});
$(window).on('scroll',function(){if($(this).scrollTop()>10){$('[data-source]').each(function(){$(this).attr('style',$(this).data('source'));$(this).removeAttr('data-source')})}});

})(jQuery);
