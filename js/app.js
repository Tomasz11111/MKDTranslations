$(document).ready(function() {
    
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function () {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });


    function scaleVideoContainer() {

        var height = $(window).height() + 5;
        var unitHeight = parseInt(height) + 'px';
        $('.homepage-hero-module').css('height', unitHeight);

    }

    function initBannerVideoSize(element) {

        $(element).each(function () {
            $(this).data('height', $(this).height());
            $(this).data('width', $(this).width());
        });

        scaleBannerVideoSize(element);

    }

    function scaleBannerVideoSize(element) {

        var windowWidth = $(window).width(),
            windowHeight = $(window).height() + 5,
            videoWidth,
            videoHeight;

        console.log(windowHeight);

        $(element).each(function () {
            var videoAspectRatio = $(this).data('height') / $(this).data('width');

            $(this).width(windowWidth);

            if (windowWidth < 1000) {
                videoHeight = windowHeight;
                videoWidth = videoHeight / videoAspectRatio;
                $(this).css({'margin-top': 0, 'margin-left': -(videoWidth - windowWidth) / 2 + 'px'});

                $(this).width(videoWidth).height(videoHeight);
            }

            $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
        });
    };

function slidesFromRight() {
    

    $(window).scroll(function () {
        $('.slideanim').each(function () {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                console.log("dziala");
                $(this).addClass('slide');
            }
        });
    });
}
slidesFromRight();
  // w tej funkcjo trzeba poprawic dla termsandconditions.html, przez to nie działa przeniesienie do innych stron, bo jest eventprevent default. Więc trzeba coś tu zmienić, albo oddzielny plik.js dla termsandconditions
function smoothScroll() {
        $(".navigation_right a, .help a, button a, .nav-pills a ").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    };
    smoothScroll();
/*

   function spyBgColor() {
        var $trigger = $('#myNavbar').find('a');
        $trigger.on('click', function (e) {
            $('#myNavbar').find('a').not($(this)).css('backgroundColor', 'white').css('backgroundImage', '').css('color', "#333");
            var hrefValue = $(this).attr('href');
            console.log(hrefValue);
            var scrollTarget = $(hrefValue);
            console.log(scrollTarget);
            var targetBgColor = scrollTarget.css('backgroundColor');
            console.log(targetBgColor);
            var targetBgImage = scrollTarget.css('backgroundImage');
            var targetFontColor = scrollTarget.css('color');
            console.log(targetFontColor);
            $(this).css('backgroundColor', targetBgColor).css('color', targetFontColor).css('backgroundImage', targetBgImage);


            $('nav').css('border', '0');


        })
    };

    spyBgColor();


*/
    function changeBgColorParis() {
        $('.french .inner_border').on('mouseenter', function() {
            $('.french .outer_border').css('background-color', 'rgba(255, 255, 255, 0.1)');
        });
         $('.french .inner_border').on('mouseleave', function() {
            $('.french .outer_border').css('background-color', 'rgba(0, 0, 0, 0.2)');
        });
    }
    function changeBgcolorCracow() {
        $('.polish .inner_border').on('mouseenter', function() {
            $('.polish .outer_border').css('background-color', 'rgba(255, 255, 255, 0.1)');
        });
         $('.polish .inner_border').on('mouseleave', function() {
            $('.polish .outer_border').css('background-color', 'rgba(0, 0, 0, 0.2)');
        });
    };
    changeBgColorParis();
    changeBgcolorCracow();

    function activateIconsAnimation() {
        
        $(window).scroll (function() {
             var $services = $('#services'),
                offsetServices = $services.offset(),
                $process = $('#process'),
                offsetProcess = $process.offset(),
                $howiTeach = $('#how_i_teach'),
                offsetHowiTeach = $howiTeach.offset(),
                winoffset = $(window).scrollTop();
                
        //tutaj sprawdzam, czy jest e ogóle w DOMie ten element, dla innych podstron, żeby nie wywalało błędów
    if($('.container-fluid').is($services)) {
        if(winoffset > offsetServices.top - 20) {
            console.log('jeje');
           
           $('.bg-grey .icon_circle').delay(1500).addClass('icon_circle_animate');
            $('.icon_title_text').delay(1500).addClass('icon_title_text_animation');
            $('.icon_description_text').delay(1500).addClass('icon_title_text_animation');
           }
        else { $('.bg-grey .icon_circle').removeClass('icon_circle_animate');
              $('.icon_title_text').removeClass('icon_title_text_animation');
              $('.icon_description_text').removeClass('icon_title_text_animation');
             }
    
            if(winoffset > offsetProcess.top - 20) {
                $('#process-content .icon_circle').delay(1500).addClass('icon_circle_animate');
                $('#process-content .icon_title_text').delay(1500).addClass('icon_title_text_animation');
                setTimeout(function() {
                    
                $('.check_empty').addClass('hidden');
                $('.check_full').removeClass('hidden');
                }, 1000);
               //jakąś pętlą to tu zrobić 
        }
            else {
                $('#process-content .icon_circle').removeClass('icon_circle_animate');
                 $('#process-content .icon_title_text').removeClass('icon_title_text_animation');
                $('.check_empty').removeClass('hidden');
                $('.check_full').addClass('hidden');
                }
        }
        });
            /*
           if(winoffset > offsetHowiTeach.top - 20) { 
            $('#how_i_teach_icons  .icon_circle').delay(1500).addClass('icon_circle_animate_purple');
            $('#how_i_teach_icons .icon_title_text').delay(1500).addClass('icon_title_text_animation');
            $('#how_i_teach_icons .icon_description_text').delay(1500).addClass('icon_title_text_animation');
           }
        else { $('#how_i_teach_icons  .icon_circle').removeClass('icon_circle_animate_purple');
              $('#how_i_teach_icons .icon_title_text');
              $('#how_i_teach_icons .icon_description_text');
             }*/
    
                
            
                
          
}
   
    activateIconsAnimation();
    
    /*function googleMaps() {


        var myCenter = new google.maps.LatLng(50.075881, 14.452943);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 14,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    }

    googleMaps();*/

function pricingShowHide() {
    var $closeBtn = $('.closing'), 
        $showBtn = $('.process-buttons-pricing'),
        $pricingSection = $('#pricing'),
        $processContent = $('#process-content'),
        $process = $('#process');
    $showBtn.on('click', function() {

        $pricingSection.removeClass('hidden');
        $processContent.addClass('hidden');
        $('html, body').animate({
            scrollTop: $pricingSection.offset().top
                    }, 900);
    });

    $closeBtn.on('click', function() {
        console.log('ok');
        $pricingSection.addClass('hidden');
        $processContent.removeClass('hidden');
         $('html, body').animate({
            scrollTop: $process.offset().top
                    }, 900);
    });
    }

pricingShowHide();
/*
function termsAndConditionsBtn() {
var principles = $('#principles');
    principles.mouseover(function() {

    $('#terms-btn').fadeIn();
    });

};
termsAndConditionsBtn();

    function termsAndConditionsShowHide() {
        var $principles = $('#principles'), $terms_btn = $('#terms-btn'), $terms_conditions = $('#terms_conditions'), $closing = $('.closing');
        $terms_btn.on('click', function() {
            $principles.addClass('hidden');
            $terms_conditions.removeClass('hidden');


        });
        $closing.on('click', function() {
            $principles.removeClass('hidden');
            $terms_conditions.addClass('hidden');
        })
    }
    termsAndConditionsShowHide();
function fullPage() {
    $('#fullpage').fullpage({
        navigation: false,
        scrollBar: true,
        sectionSelector: '.page',
        slideSelector: '.horizontal_page',
        fitToSectionDelay: 700,
        responsiveWidth: 756,




    });

}


    function adjustNavColor() {
        $(window).scroll(function() {
            console.log($(window).scrollTop());
        var $menu = $('nav a'), viewportHeight = window.innerHeight, scrollPosition = $(window).scrollTop(), offsetPortfolio = $('#portfolio').offset(), offsetTeaching = $('#teaching2').offset(); offsetContact = $('#contact2').offset();
        console.log(viewportHeight, scrollPosition, $menu);
        if ((scrollPosition > (2 * viewportHeight)) && (scrollPosition < (3 * viewportHeight))) {
            console.log('diaala');
           $menu.addClass('text-teal');
        }
            else if
                (scrollPosition >= offsetPortfolio.top && scrollPosition <= offsetPortfolio.top + viewportHeight) {
                    $menu.addClass('text-grey');
                     
                }
            
            else if
                (scrollPosition >= offsetTeaching.top && scrollPosition <= offsetTeaching.top + viewportHeight) {
                    $menu.addClass('text-red');
                }
            else if 
                (scrollPosition >= offsetContact.top && scrollPosition <= offsetContact.top + viewportHeight) {
                    $menu.addClass('text-orange');
                }
            
            else {
                $menu.removeClass('text-teal');
                $menu.removeClass('text-grey');
                $menu.removeClass('text-red');
                $menu.removeClass('text-orange');
            }
    });/można tu funkcję dl portfolio, teaching i contact zrobić
    };
adjustNavColor();
*/
function portfolioImgs() {
    $('.pic_square').on('mouseenter', function() {
        console.log('ok');
        $(this).find('.pic_overlaytext').animate({
            height: "100%"});

        $(this).find('.pic_overlaytext_title').addClass('hidden');
        $(this).find('.pic_overlaytext_hover').removeClass('hidden');

    });
    $('.pic_square').on('mouseleave', function() {
        console.log('ok');
        $(this).find('.pic_overlaytext').animate({
            height: "20%"});
        $(this).find('.pic_overlaytext_title').removeClass('hidden');
        $(this).find('.pic_overlaytext_hover').addClass('hidden');

    });
    }
    function expandPortfolio() {
        $('.morespecialties').find('a').on('click', function() {
            if($('.pic6').hasClass('hidden')) {
                $('html, body').animate({ scrollTop:  $('.pic1').offset().top}, 'slow');
            }
            else {
                $('html, body').animate({ scrollTop:  $('#translation').offset().top }, 'slow');
            }
            $('.pic6').toggleClass('hidden');
            $('.pic7').toggleClass('hidden');
            $('.pic8').toggleClass('hidden');
            
            

        });
    }

portfolioImgs();
expandPortfolio();
    function hamburger() {
        $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
            $(this).toggleClass('open');
        });
    };
    hamburger();
    function menuExpand() {
        $('#nav-icon4').on('click', function() {
            console.log('ok');
            $('.navigation_right').toggle(1000);
            $('.headline_sidepages p').toggleClass('puopu-r1-sidepages_animated');
            window.setTimeout(function() {
           $('.headline_sidepages').toggleClass('changeWidth');
        }, 1000);
             $('#nav-icon4 span').toggleClass('bg-white');
});
            
           
            //zmienić na css animation
            
            
            

    }
    menuExpand();
});