/* --  Hero video plugin coverr.co  --
potrzebne drobne poprawki, jest problem z dostowaniem do całości okna, przy niektórych aspect ratios

*/

jQuery(document).ready(function($) {
    
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
					console.log('dziala');
					$(this).addClass('slide');
				}
			});
		});
	}
	
	function slidesFromLeft() {
		 $(window).scroll(function () {
			$('.slideanim-left').each(function () {
				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();
				if (pos < winTop + 600) {
					console.log('dziala');
					$(this).addClass('slide-left');
				}
			});
		});
	}
	
	slidesFromLeft();
	slidesFromRight();
  		// w tej funkcjo trzeba poprawic dla termsandconditions.html, przez to nie działa przeniesienie do innych stron, bo jest eventprevent default. Więc trzeba coś tu zmienić, albo oddzielny plik.js dla termsandconditions
	function smoothScroll() {
        $('.navigation_right a, .help a, button a, .nav-pills a ').on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== '') {

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
	
/* Swipe for mobile */

	function swipe() {
	   $("#myCarousel").swiperight(function() {  
		  $("#myCarousel").carousel('prev');  
		});  
	   $("#myCarousel").swipeleft(function() {  
		  $("#myCarousel").carousel('next');  
	   });  
	}
	swipe();  

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
                
        //tutaj sprawdzam, czy jest e ogóle w DOMie ten element, dla innych podstron, żeby nie wywalało błędów, być może potrzebne jakieś docelowe bardziej eleganckie rozwiązanie
			if($('.container-fluid').is($services)) {
				if(winoffset > offsetServices.top - 20) {
					console.log('jeje');
				  //delay nie działa z addClass. Zmienić na setTimeout
				   $('.bg-grey .icon-circle').delay(1500).addClass('icon-circle-animate');
					$('.icon-headline').delay(1500).addClass('icon-headline-animation');
					$('.icon-description-text').delay(1500).addClass('icon-headline-animation');
				   }
				else { $('.bg-grey .icon-circle').removeClass('icon-circle-animate');
					  $('.icon-headline').removeClass('icon-headline-animation');
					  $('.icon-description-text').removeClass('icon-headline-animation');
					 }
			}
			if($('.container-fluid').is($process)) {
    
            if(winoffset > offsetProcess.top - 20) {
                $('#process-content .icon-circle').delay(1500).addClass('icon-circle-animate');
                $('#process-content .icon-headline').delay(1500).addClass('icon-headline-animation');
                setTimeout(function() {
                    
                $('.check_empty').addClass('hidden');
                $('.check_full').removeClass('hidden');
                }, 1000);
               //potrzeba skrócić tę funkcję
        	}
            else {
                $('#process-content .icon-circle').removeClass('icon-circle-animate');
                 $('#process-content .icon-headline').removeClass('icon-headline-animation');
                $('.check_empty').removeClass('hidden');
                $('.check_full').addClass('hidden');
                }
        	}
		
        	});
                         
            
                
          
	}
   
    activateIconsAnimation();
    
    function googleMaps() {


        var myCenter = new google.maps.LatLng(50.075881, 14.452943);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 14,
                scrollwheel: true, //trzeba jeszcze dopisać warunek, że dla mobile nie ma scrollwheel
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById('googleMap'), mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    }

    googleMaps();

	
	
	function formShowHide() {
		var $formBtn = $('.btn-grey'),
			$form = $('#form-page');
		$formBtn.on('click', function() {
			console.log('tata');
			$form.toggleClass('hidden');
		});
	}
	formShowHide();
	
		  


	function portfolioImgs() {
		function showDetails() {
			console.log('hide');
			$(this).find('.portfolio-overlay').animate({
				height: '100%'});

			$(this).find('.portfolio-overlay-text').addClass('hidden');
			$(this).find('.portfolio-overlay-text-hover').removeClass('hidden');

		};
		function hideDetails() {
			console.log('hidden');
			$(this).find('.portfolio-overlay').animate({
				height: '20%'});
			$(this).find('.portfolio-overlay-text').removeClass('hidden');
			$(this).find('.portfolio-overlay-text-hover').addClass('hidden');
		}
		/*if(window.screen.width < 768) {
			console.log('hejaaaa');

		 tu dopisać event na komórki

		}
		else */
			$('.pic-square').on('mouseenter', showDetails() );
			$('.pic-square').on('mouseleave', hideDetails() );
		
	}
	portfolioImgs();
	
    function expandPortfolio() {
        $('.morespecialties .btn-teal').find('a').on('click', function() {
            if($('.portfolio-finance-pic').hasClass('hidden')) {
                $('html, body').animate({ scrollTop:  $('.portfolio-tourism-pic').offset().top}, 'slow');
            }
            else {
                $('html, body').animate({ scrollTop:  $('#translation').offset().top }, 'slow');
            }
            $('.portfolio-technical-pic').toggleClass('hidden');
            $('.portfolio-law-pic').toggleClass('hidden');
            $('.portfolio-finance-pic').toggleClass('hidden');
  			//ta funkcja musi być skrócona          
            

        });
    }

	expandPortfolio();

    function hamburger() {
        $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
			$(this).toggleClass('open');
			$('.navigation_right').fadeToggle(1000);
			if($(this).hasClass('open')) {
				var height = $('.navigation_right').height();
				$('.subpage-header').animate({ marginTop: height}, 1000);
			
			}
			else {
				$('.subpage-header').animate({ marginTop: 0}, 1000);
			}
           
			
			});
        };
    
	hamburger();
            
            //ew. zmienić na css animation
            
       
            

    
   
});