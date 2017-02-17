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
		if (window.matchMedia('(max-width: 768px)').matches) {
		if(!($('.homepage-hero-module').is('.flag')) )
			{
		var height = $(window).height() + 5,
        	unitHeight = parseInt(height) + 'px';
		
			
        $('.homepage-hero-module').css('height', unitHeight);
		$('.homepage-hero-module').addClass('flag');
			}
		}
		else {
			var height = $(window).height() + 5,
        	unitHeight = parseInt(height) + 'px';
		
			
        $('.homepage-hero-module').css('height', unitHeight);
		}
		
		
		
		
		/*$(window).on('scroll', function() {
			
			 unitHeight = parseInt(($(window).height - navBarHeight)) + 'px';
			$('.homepage-hero-module').css('height', unitHeight);
													}*/
										   
    	
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
	/*function showHideLangBtns() {
		var $btnsDiv = $('.choose-language-languages-homepage'),
			windowHeight = $(window).height();
			
		$(window).scroll(function() {			
					if($(window).scrollTop() > windowHeight ) {
				$btnsDiv.addClass('hidden'); 
			}
			else {
				$btnsDiv.removeClass('hidden');
			}
		});
			
		
	};
	showHideLangBtns();*/
	
	function slidesOnLoad() {
		$('.slideanim-onload').load(setInterval(function() {
			$(this).addClass('slide');
		}), 2000);
		$('.slideanim-left-onload').load(function() {
			$(this).addClass('slide-left')});
	}
										 
	
					   
	slidesOnLoad();					   
		
	function slides(elementToSlide, classActivatingSlide) {
				
		$(window).scroll(function () {
			$(elementToSlide).each(function () {
				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();
				console.log(winTop);
				if (pos < winTop + 600) {
					$(this).addClass(classActivatingSlide);
				}
			});
		});
	}
	slides('.slideanim', 'slide' );
	slides('.slideanim-left', 'slide-left');
		
	
	
	
  		// w tej funkcjo trzeba poprawic dla termsandconditions.html, przez to nie działa przeniesienie do innych stron, bo jest eventprevent default. Więc trzeba coś tu zmienić, albo oddzielny plik.js dla termsandconditions
	function smoothScroll() {
        $('.wordpress-menu a, .help a, div a, .nav-pills a ').on('click', function (event) {

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
        //funkcja do skrócenia, uogólnienie klas
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
				  //dopisać opóźnienie np. setTimeout
				   $('.bg-grey .icon-circle').addClass('icon-circle-animate');
					$('.icon-headline').addClass('icon-headline-animation');
					$('.icon-description-text').addClass('icon-headline-animation');
				   }
				else { $('.bg-grey .icon-circle').removeClass('icon-circle-animate');
					  $('.icon-headline').removeClass('icon-headline-animation');
					  $('.icon-description-text').removeClass('icon-headline-animation');
					 }
			}
			if($('.container-fluid').is($process)) {
    
            if(winoffset > offsetProcess.top - 20) {
                $('#process-content .icon-circle').addClass('icon-circle-animate');
                $('#process-content .icon-headline').addClass('icon-headline-animation');
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

		if($('body').hasClass('home')) {
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

    }
	
    googleMaps();

	
	
	function termsShowHide() {
		var $clickBtn = $('.btn-purple'),
			$openDiv = $('#learn-terms');
		$clickBtn.on('click', function(event) {
			event.preventDefault();
			
			$openDiv.toggleClass('hidden');
		});
	}
	termsShowHide();
	
		  


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
		if (window.matchMedia('(max-width: 768px)').matches) {
			
			if($('.portfolio-overlay-text-hover').is('.hidden') )
				{ $('.pic-square').on('tap', showDetails);
				}
			else {
			$('.pic-square').on('tap', hideDetails);
			}
  /* the viewport is at maximum 768 pixels wide */
} else {
  /* the viewport is more than 768 pixels wide */

		/*if(window.screen.width < 768) {
			console.log('hejaaaa');
		 tu dopisać event na komórki
		}
		else */
			$('.pic-square').on('mouseenter', showDetails );
			$('.pic-square').on('mouseleave', hideDetails );
}
		
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
            $('.portfolio-expandable').toggleClass('hidden');                       
        });
    }

	expandPortfolio();
	hamburger();
	//funkcja sterująca paskiem menu i przyciskiem hamburger
    function hamburger() {
		var	$container = $('.navigation-container'), 
			$hamburger = $('.hamburger'),
			$menutext = $('.menutext_hamburger'),
			$menu = $('.wordpress-menu'),
			$switcher = $('.language-switcher'),
			$menu_link = $('ul.menu li a'),
			$headline = $('.headline-text-sidepages');
			
		toggleHamburger();
		hideMenuWhenLinked();
		menuBarChangeColor();
		highlightActiveLangBtn();
		hideLanguagesMob();
		hideLanguagesPC();
		
		
		function toggleHamburger(){
				var $trigger = $('#services');
				$(window).on('scroll', function() {
					if( ($(window).scrollTop() > $trigger.offset().top) && !($hamburger.hasClass('flag')) ) {
						openHamburger();
					}
				});
				
				$hamburger.on('click', function() {

	/* dla komórek */if (window.matchMedia('(max-width: 767px)').matches) { /*strona główna*/
						if ( $hamburger.hasClass('open') ) {
							closeHamburgerMobile();
							console.log('closed');
						}
						else {
							openHamburgerMobile();
							console.log('opened');
						}
					}
					else {
						if ( $hamburger.hasClass('open') ) {
							closeHamburger();
							$hamburger.addClass('flag');
							console.log('closed');
						}
						else {
							openHamburger();
							console.log('opened');
						}
					}
				});
		  }
			function openHamburgerMobile() {
		
							$hamburger.addClass('open');
							$menutext.addClass('hidden');
		/* dla podstron*/	if ($('body').is('#sidepage')) {
			
								$menu.removeClass('invisible').addClass('nav100vh').css('background-color', 'transparent');
								$container.addClass('nav100vh');
								$headline.addClass('hidden');
							}
		/* dla homepage */  else {
								$menu.removeClass('invisible').addClass('nav100vh');
								$container.addClass('nav100vh navigation-container-dimgray');
								$switcher.addClass('hidden');
							}
							
			}
			function closeHamburgerMobile() {
							$hamburger.removeClass('open');
							$menutext.removeClass('hidden');
							$menu.removeClass('nav100vh').addClass('invisible');
		/* dla podstron*/	if ($('body').is('#sidepage')) {
								$container.removeClass('nav100vh');
								$headline.removeClass('hidden');
							}
							
		/* dla homepage */  else {				
							$container.removeClass('nav100vh').removeClass('navigation-container-dimgray');
							$switcher.removeClass('hidden');
							}
			}
							
						
					
					
		/* dla PC */	function openHamburger() {
							$hamburger.addClass('open');
							$menutext.addClass('hidden');
		/* dla podstron*/	if ($('body').is('#sidepage')) {
			
								$menu.removeClass('hidden');
								$headline.addClass('hidden');
								$switcher.removeClass('hidden');
			
							}
		/* dla homepage*/
						else {
								$menu.removeClass('invisible'); 
								$container.addClass('navigation-container-purple');
								
							}
						}
						function closeHamburger() {
							$hamburger.removeClass('open');
							$container.removeClass('navigation-container-purple navigation-container-dimgray');
							$menutext.removeClass('hidden');
							if ($('body').is('#sidepage')) {
			
								$menu.addClass('hidden');
								$switcher.addClass('hidden');
								$headline.removeClass('hidden');
								
			
							}
							else {
								$menu.addClass('invisible');
							}
							
							
							
						}
		
		
					
/* dla komórek	*/	function hideMenuWhenLinked() {
				$menu_link.on('click', function() {
					if (window.matchMedia('(max-width: 767px)').matches) { 
						$container.removeClass('nav100vh navigation-container-dimgray');
						$menu.removeClass('nav100vh').addClass('hidden');
						$hamburger.removeClass('open');
					
					}
				});
			}	
					function menuBarChangeColor() {
					if((window.matchMedia('(min-width: 768px)').matches)) {
					$(window).scroll(function() {
					if( ( $(window).scrollTop() > ($('#services').offset().top ) - 1) ){
						if($hamburger.hasClass('open') ){
						$container.removeClass('navigation-container-purple').addClass('navigation-container-dimgray')
						console.log('szary');
							}
						}
					else {
						$container.removeClass('navigation-container-dimgray');
						if($hamburger.hasClass('open')) {
						$container.addClass('navigation-container-purple');
						console.log('fioletowy');
						}
					}
					});
				}
		
			};
		

	
	function hideLanguagesMob() { 
		var $switcher = $('.language-switcher-homepage'),
			$hamburger = $('.hamburger');
		function hide(){
			$switcher.addClass('hidden');
		}
		function show(){
			$switcher.removeClass('hidden').css('display', 'flex');
		}
				
		if(window.matchMedia ('(max-width: 767px)').matches) {
			$(window).scroll(function() {
				if( $(window).scrollTop() > 10 ){
					hide();
				}
				else if( ($(window).scrollTop() < 10 ) && $hamburger.is('.open') ) {
					hide();
				}
				else {
					show();
				}
			});
			$hamburger.on('click', function() {//czy to potrzebne?
				if($hamburger.is('.open')) {
					hide();
				}
				else {
					show();
				}
				
			});
		}
	}
		function hideLanguagesPC() {
			var $switcher = $('.language-switcher-homepage'),
			$hamburger = $('.hamburger');
		
			if(window.matchMedia ('(min-width: 768px)').matches) {
				$(window).scroll(function() {
					if( ($(window).scrollTop() > 10 ) && !($hamburger.is('.open')) ) {
					$switcher.addClass('hidden');
				}
				else {
					$switcher.removeClass('hidden')
				}
			})
				$hamburger.on('click', function() {
					if($hamburger.is('.open')) {
						$switcher.removeClass('hidden');
					}
				});
				
				
		}
	}
		
	function highlightActiveLangBtn() {
		var language = $('html').attr('lang'),
		$langBtns = $('.language-switcher-homepage p a');
		$langBtns.each(function() {
		langSymbol = $(this).text();
		
		if(!(language.indexOf(langSymbol) === -1)) {
			$(this).css('backgroundColor', 'rgba(76, 19, 59, 0.7)');	
			}
			
		});
	}
}
	//koniec funkcji hamburger
		
	   
		
	function showHideForm() {
		var $lesson_btn = $('.contact-form-lead-lesson'),
			$translate_btn = $('.contact-form-lead-translation'),
			$form_translations = $('#form-translation'),
			$form_lessons = $('#form-lessons');
		
		$lesson_btn.on('click', function() {
			$form_lessons.toggleClass('hidden');
			
		});
		$translate_btn.on('click', function() {
			$form_translations.toggleClass('hidden');
		});
	
	}
	showHideForm();

            
            //ew. zmienić na css animation
});