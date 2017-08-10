

jQuery(document).ready(function($) {
    
	
    $('.my-background-video').bgVideo({
	fullScreen: true,
	showPausePlay: true
	});

    
					   
		
	function slides(elementToSlide, classActivatingSlide) {
				
			$(window).scroll(function () {
				$(elementToSlide).each(function () {
					var pos = $(this).offset().top;
						winHeight = window.innerHeight,
					 	winTop = $(window).scrollTop();
					console.log(winTop);
					if (pos < (winTop + winHeight)) {
						$(this).addClass(classActivatingSlide);
					}
				});
			});
	}
	slides('.slideanim', 'slide' );
	slides('.slideanim-left', 'slide-left');
		
	
	
	
  		// w tej funkcjo trzeba poprawic dla termsandconditions.html, przez to nie działa przeniesienie do innych stron, bo jest eventprevent default. Więc trzeba coś tu zmienić, albo oddzielny plik.js dla termsandconditions
	function smoothScroll(elements) {
        //if($('body').is('.home')) {
			$(elements).on('click', function (event) {
				
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
	}
   function runSmoothScroll() {
	    if($('body').is('.home')) {
			smoothScroll('.wordpress-menu a, div a, .headline-btn a, .icon-description-text a') //strony z linkami do id w menu
		}
		else {
			smoothScroll('.headline-btn-learn a, .nav-pills a');// strony bez linków do id w menu
		}
   }
		runSmoothScroll();
   
	
	
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
        $('.morespecialties .btn-blue').find('a').on('click', function() {
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
			$hamburgerContainer = $('.hamburger-container'),
			$hamburger = $('.hamburger'),
			$menutext = $('.menutext_hamburger'),
			$menu = $('.wordpress-menu'),
			$switcher = $('.language-switcher'),
			$menu_link = $('ul.menu li a'),
			$headline = $('.navigation-container__headline-text-sidepages'),
			$btnsNavbar = $('.btn-navbar');
			
		toggleHamburger();
		hideMenuWhenLinked();
		menuBarChangeColor();
		highlightActiveLangBtn();
		
		/*hideLanguagesMob();
		hideLanguagesPC();*/
		
		function setNavBgMobile() {
			
		}
		function toggleHamburger(){
				
				if((window.matchMedia ('(min-width: 768px)').matches) && $('body').hasClass('home') ) {
					var $trigger = $('#services'),
						offset = $trigger.offset();
				$(window).on('scroll', function() {
					if( ($(window).scrollTop() > offset.top) && !($hamburger.hasClass('flag')) ) {
						openHamburger();
					}
				});
				}
				
				$hamburgerContainer.on('click', function() {

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
/* dla reg screens */else {
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
							$hamburger.find('span').addClass('bg-white');
							$hamburgerContainer.removeClass('flex-center-column');
							
		/* dla podstron*/	if ($('body').is('#sidepage')) {
								
							var $elementToPickColorFrom = $('.navigation-container__headline-text-sidepages span'),
								newNavBgColor = $elementToPickColorFrom.attr('style');
			
								$menu.removeClass('invisible hidden').addClass('nav100vh');
								$menu.attr('style', newNavBgColor);
								$container.addClass('nav100vh');
								$headline.addClass('hidden');
								$hamburger.find('span').attr('style', '');
								
							}
		/* dla homepage */  else {
								$menu.removeClass('invisible').addClass('nav100vh');
								$container.addClass('nav100vh');
								$switcher.addClass('language-switcher-mob');
								
							}
							
			}
			function closeHamburgerMobile() {
							$hamburger.removeClass('open');
							$menutext.removeClass('hidden');
							$menu.removeClass('nav100vh').addClass('invisible');
							$hamburger.find('span').removeClass('bg-white');
							$hamburgerContainer.addClass('flex-center-column');
		/* dla podstron*/	if ($('body').is('#sidepage')) {
								var $elementToPickColorFrom = $('.headline-text-sidepages span'),
								newNavBgColor = $elementToPickColorFrom.attr('style');
			
								$container.removeClass('nav100vh');
								$headline.removeClass('hidden');
								$hamburger.find('span').attr('style', newNavBgColor);
							}
							
		/* dla homepage */  else {				
							$container.removeClass('nav100vh').removeClass('navigation-container-dimgray');
							$switcher.removeClass('language-switcher-mob');
							}
			}
							
						
					
					
		/* dla PC */	function openHamburger() {
							$hamburger.addClass('open');
							/*$menutext.addClass('hidden');*/
		/* dla podstron*/	if ($('body').is('#sidepage')) {
														
								$menu.removeClass('hidden');
								$headline.addClass('hidden');
								$switcher.removeClass('hidden');
								
			
							}
		/* dla homepage*/
						else {
								$menu.removeClass('invisible'); 
								$container.addClass('navigation-container-purple');
								$btnsNavbar.addClass('hidden');
								
							}
						}
						function closeHamburger() {
							$hamburger.removeClass('open');
							$container.removeClass('navigation-container-purple navigation-container-dimgray');
							/*$menutext.removeClass('hidden');*/
							if ($('body').is('#sidepage')) {
			
								$menu.addClass('hidden');
								$switcher.addClass('hidden');
								$headline.removeClass('hidden');
								
			
							}
							else {
								$menu.addClass('invisible');
								$btnsNavbar.removeClass('hidden');
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
					if((window.matchMedia('(min-width: 768px)').matches) && $('body').hasClass('home') ) {
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
		

	
		
	function highlightActiveLangBtn() {
		var language = $('html').attr('lang'),
		$langBtns = $('.language-switcher p a'),
		pickColor = $('.hamburger span').css('backgroundColor');
		console.log(pickColor);
		$langBtns.each(function() {
		langSymbol = $(this).text();
		
		if(!(language.indexOf(langSymbol) === -1)) {
			$(this).addClass('language-switcher-active');
			$(this).parent().css('backgroundColor', pickColor);
			}
		$langBtns.on('mouseenter', function() {
			$(this).parent().css('backgroundColor', pickColor);
		});
		$langBtns.on('mouseleave', function() {
			if(!($(this).hasClass('language-switcher-active') ) ) {
				$(this).parent().css('backgroundColor', '');
			};
		});
		
			
		});
	}
}
	//koniec funkcji hamburger
		
	function linkToForm() {
		var $triggerTranslation = $('.btn-navbar-darkblue'),
			$triggerLessons = $('.btn-navbar-purple'),
			$formTranslations = $('#form-translation'),
			$formLessons = $('#form-lessons');
		
			$triggerTranslation.on('click', function() {
				$formTranslations.removeClass('hidden');
				if(!($triggerLessons.hasClass('hidden')) ) {
				   $formLessons.addClass('hidden')};
			});
			$triggerLessons.on('click', function() {
				$formLessons.removeClass('hidden');
				if(!($triggerTranslation.hasClass('hidden')) ) {
				   $formTranslations.addClass('hidden')};
			});
	} 
	
	linkToForm();
		
	function showHideForm() {
		var $lesson_btn = $('.contact-form-lead-lesson'),
			$translate_btn = $('.contact-form-lead-translation'),
			$form_translations = $('#form-translation'),
			$form_lessons = $('#form-lessons'),
			$this; 
			
		function underlineWhenActive(el1, el2) {
				if(!(el1.hasClass('hidden') ) ) {
				$this.addClass('underline');
				el2.removeClass('underline');
					
			}
			else 
				{
					$this.removeClass('underline');
				}
					
		}
		function showHideForms(formToShow, formToHide) {
			if(formToShow.hasClass('hidden') ) {
			   formToShow.removeClass('hidden');
				formToHide.addClass('hidden');
			   }
			else {
				formToShow.addClass('hidden');
			}
			
		}
		
		$lesson_btn.on('click', function() {
			showHideForms($form_lessons, $form_translations);
			$this = $(this);
			underlineWhenActive($form_lessons, $translate_btn)});
		
		$translate_btn.on('click', function() {
			showHideForms($form_translations, $form_lessons);
			$this = $(this);
			underlineWhenActive($form_translations, $lesson_btn)});
	}
	showHideForm();

	//funkcja do automatycznego ustalania wysokości elementów w zależności od wysokości innych elementów, do których chcemy porównywa
	
	function elSetHeight(el1Selector, el2Selector, el3Selector, el4Selector, el5Selector, el6Selector) {
		var $el1 = $(el1Selector),
			$el2 = $(el2Selector),
			$el3 = $(el3Selector),
			$el4 = $(el4Selector),
			$el5 = $(el5Selector),
			$el6 = $(el6Selector),
			$h2 = $el1.prev();
			highestEl = findHighestEl() + $h2.outerHeight(true);
		console.log(highestEl);
		console.log($h2);
			
		function findHighestEl() {
				
			return Math.max($el1.outerHeight(), $el2.outerHeight(), $el3.outerHeight());
		}
		$el4.height(highestEl);
		$el5.height(highestEl);
		$el6.height(highestEl);
	
	}
	
	if(window.matchMedia ('(max-width: 767px)').matches) { 
	elSetHeight('.square2 p', '.square3 p', '.square4 p', '.square2', '.square3', '.square4');
	elSetHeight('.square2-about p', '.square3-about p', '.square4-about p', '.square2-about', '.square3-about', '.square4-about')
	}
            //ew. zmienić na css animation
	
	
	

							   
	
	
});