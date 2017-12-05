

jQuery(document).ready(function ($) {
    'use strict';
	// Scroll reveal
	 window.sr = ScrollReveal();
		sr.reveal('.sr');
	if (matchMedia) {
  		var mq = window.matchMedia("(min-width: 768px)");
	  	mq.addListener(WidthChange);
	  	WidthChange(mq);
	}


// media query change
	function WidthChange(mq) {
	  if (mq.matches) {
		$('.my-background-video').bgVideo({
		fullScreen: true,
		showPausePlay: false
		});
	  }


	}
					   
		
	function slides(elementToSlide, classActivatingSlide) {
				
			$(window).scroll(function () {
				$(elementToSlide).each(function () {
					var pos = $(this).offset().top,
						winHeight = window.innerHeight,
					 	winTop = $(window).scrollTop();
					
					if (pos < (winTop + winHeight)) {
						$(this).addClass(classActivatingSlide);
					}
				});
			});
	}
	slides('.slideanim', 'slide' );
	slides('.slideanim-left', 'slide-left');
		
  		
	function smoothScroll(elements) {
      
			var height = $('.navigation-container').outerHeight();
			$(elements).on('click', function (event) {
				
            // Make sure this.hash has a value before overriding default behavior*/
            if (this.hash !== '') {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash and scrollTop value
                var hash = this.hash;
								
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - height }, 900, function () {
                   
                });
            }
				
				// End if
			
			});
	}
   function runSmoothScroll() {
	    
			
			if($('body').is('.home')) {
			smoothScroll('.wordpress-menu a, div a:not(.carousel-control), .headline__link, .subsection__text a') //strony z linkami do id w menu
			}
			else {
				smoothScroll('.headline__link, .nav-pills a');// strony bez linków do id w menu
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

   // GOOGLE MAPS    
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
			
			
			$(this).find('.portfolio-overlay').animate({
				height: '100%'});
		$(this).find('.portfolio-overlay-text').addClass('hidden');
			$(this).find('.portfolio-overlay-text-hover').removeClass('hidden');

		};
		function hideDetails() {
			
			
			$(this).find('.portfolio-overlay').animate({
				height: '20%'});
			$(this).find('.portfolio-overlay-text').removeClass('hidden');
			$(this).find('.portfolio-overlay-text-hover').addClass('hidden');
			$(this).removeClass('flag');
		}
		
		
		if (window.matchMedia('(max-width: 768px)').matches) {
			
			$('.pic-square').on('tap', function() {
				var $this = $(this);
				if(!($this.is('.flag')) ){
					
			
			$this.find('.portfolio-overlay').animate({
				height: '100%'});
		$this.find('.portfolio-overlay-text').addClass('hidden');
			$this.find('.portfolio-overlay-text-hover').removeClass('hidden');
					$this.addClass('flag');
					
				
				
				}
			else
				{
			$this.find('.portfolio-overlay').animate({
				height: '20%'});
			$this.find('.portfolio-overlay-text').removeClass('hidden');
			$this.find('.portfolio-overlay-text-hover').addClass('hidden');
			$this.removeClass('flag');
			return false;
				}
			
			});
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
        $('.btn--translation').find('a').on('click', function() {
            if($('.portfolio-finance-pic').hasClass('hidden')) {
                $('html, body').animate({ scrollTop:  $('.portfolio-tourism-pic').offset().top}, 'slow');
				 $('.portfolio-expandable').removeClass('hidden')
            }
            else {
                $('html, body').animate({ scrollTop:  $('#translation').offset().top }, 'slow');
				$('.portfolio-expandable').addClass('hidden'); 
            }
                                   
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
		highlightActiveLangBtn();
		
		/*hideLanguagesMob();
		hideLanguagesPC();*/
		
		
		function toggleHamburger(){
						  
				
				
				$hamburgerContainer.on('click', function() {
						var mq = window.matchMedia('(max-width: 991px)');
	 //dla komórek i małych tabletów 
							if (mq.matches) { //strona główna
						if ( $hamburger.hasClass('open') ) {
							closeHamburgerMobile();
							
						}
						else {
							openHamburgerMobile();
							
						}
					}
 //dla reg screens 
					else {
						if ( $hamburger.hasClass('open') ) {
							closeHamburger();
							$hamburger.addClass('flag');
							
						}
						else {
							openHamburger();
							
						}
					}
				});
		  
		
			function openHamburgerMobile() {
		
							$hamburger.addClass('open');
							$menutext.addClass('hidden');
							$hamburger.find('span').addClass('bg-white');
							$hamburgerContainer.css('height', '65px');
							
							
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
								$switcher.addClass('language-switcher--mob');
								$btnsNavbar.addClass('hidden');
								
								
							}
							
			}
			function closeHamburgerMobile() {
							$hamburger.removeClass('open');
							$menutext.removeClass('hidden');
							$menu.removeClass('nav100vh').addClass('invisible');
							$hamburger.find('span').removeClass('bg-white');
							$hamburgerContainer.css('height', '100%');
		/* dla podstron*/	if ($('body').is('#sidepage')) {
								var $elementToPickColorFrom = $('.headline-text-sidepages span'),
								newNavBgColor = $elementToPickColorFrom.attr('style');
			
								$container.removeClass('nav100vh');
								$headline.removeClass('hidden');
								$hamburger.find('span').attr('style', newNavBgColor);
							}
							
		/* dla homepage */  else {				
							$container.removeClass('nav100vh').removeClass('navigation-container-dimgray');
							$switcher.removeClass('language-switcher--mob');
							$btnsNavbar.removeClass('hidden');
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
		}
		
		if(window.matchMedia('max-width: 991px').matches) {
			hideMenuWhenLinked() }
	
					
/* dla komórek i małych tabletów	*/
		
		function hideMenuWhenLinked() {
				
					$menu_link.on('click', function() {
					
						$container.removeClass('nav100vh');
						$menu.removeClass('nav100vh').addClass('invisible');
						$hamburger.removeClass('open');
						$switcher.removeClass('language-switcher--mob');
						$menutext.removeClass('hidden');
						$hamburger.find('span').removeClass('bg-white'); // to ewentualnie można połączyć z funkcją hamburgerClose
						
					
						if (window.matchMedia('(min-width: 768px)').matches) {
							$hamburgerContainer.addClass('flex-center-column');
							$btnsNavbar.removeClass('hidden');
						}
						
						
					}); // skrócić
				}
			
		
		

	function reduceFont(el) {
		 	var $el = $(el)
		$el.each( function() {
			var elText = $(this).text();
		 if(elText.length > 34) {
				$el.addClass('reduce-font');
			}
		
		});
		
	}
	
		
	reduceFont('.btn-navbar a');
		
	function highlightActiveLangBtn() {
		var language = $('html').attr('lang'),
			$langBtns = $('.language-switcher p a'),
			pickColor = $('.hamburger span').css('backgroundColor');
		
		$langBtns.each(function() {
		var langSymbol = $(this).text();
		
		if(!(language.indexOf(langSymbol) === -1)) {
			$(this).addClass('language-switcher--is-active');
			$(this).parent().css('backgroundColor', pickColor);
			}
		$langBtns.on('mouseenter', function() {
			$(this).parent().css('backgroundColor', pickColor);
		});
		$langBtns.on('mouseleave', function() {
			if(!($(this).hasClass('language-switcher--is-active') ) ) {
				$(this).parent().css('backgroundColor', '');
			};
		});
		
			
		});
	}
}
//koniec funkcji hamburger

//funkcja otwierająca formularze
	function linkToForm() {
		if(window.matchMedia('(min-width: 768px)').matches) {
			
		var $triggerTranslation = $('.btn-navbar--translation'),
			$triggerLessons = $('.btn-navbar--teaching'),
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
				$('.wpcf7 form').removeClass('sent').css('display', 'block');
				$('.wpcf7-form').find('p').removeClass('hidden');
				$('.wpcf7-response-output').css('display', '');
															
				formToHide.addClass('hidden');
			   }
			else {
				formToShow.addClass('hidden');
			}
			
		}
		
		$lesson_btn.on('click', function(event) {
			event.preventDefault();
			showHideForms($form_lessons, $form_translations);
			$this = $(this);
			underlineWhenActive($form_lessons, $translate_btn);
			});
		
		$translate_btn.on('click', function(event) {
			event.preventDefault();
			showHideForms($form_translations, $form_lessons);
			$this = $(this);
			underlineWhenActive($form_translations, $lesson_btn);
			});
	}
	showHideForm();
 
	function checkUncheck() {
        //funkcja do skrócenia, uogólnienie klas
        $(window).scroll (function() {
             var $process = $('#process'),
                 offsetProcess = $process.offset(),
                 winoffset = $(window).scrollTop();
                
        //tutaj sprawdzam, czy jest e ogóle w DOMie ten element, dla innych podstron, żeby nie wywalało błędów, być może potrzebne jakieś docelowe bardziej eleganckie rozwiązanie
			
			if($('.container-fluid').is($process)) {
    
            if(winoffset > offsetProcess.top - 20) {
                
                setTimeout(function() {
                    
					$('.check_empty').addClass('hidden');
					$('.check_full').removeClass('hidden');
                }, 1000);
               
        	}
            else {
               
                $('.check_empty').removeClass('hidden');
                $('.check_full').addClass('hidden');
                }
        	}
		
        });
                     
            
             
         
	}
	checkUncheck();
   
    
	// funkcja przekierowująca do właściwych formularzy z podstron po naciśnięciu buttona 'quick quote'
function quickQuoteSet() {
	var trigger = $('.btn--quick-quote'),
		flag,
		myJSON,
		$this;
	
	trigger.on('click', function(e) {
		$this = $(this);
		if ($this.data('target') === 'learn') {
					
		flag = {'clickedLearn' : true, 'clickedTranslation' : false};
		}
		else if ($this.data('target') === 'translation') {
		flag = {'clickedLearn' : false, 'clickedTranslation' : true};
		}
		myJSON = JSON.stringify(flag);
		localStorage.setItem("quickQuote", myJSON)
	});
}
	quickQuoteSet();
	
function quickQuoteGet() {
	var myJSON,
		flag = {'clickedLearn' : false, 'clickedTranslation': false},
		check,
		$form_translations = $('#form-translation'),
		$form_lessons = $('#form-lessons')
	;
	myJSON = localStorage.getItem('quickQuote');
	if (!(myJSON === null)) {
		
	check= JSON.parse(myJSON);
	
	if(check.clickedLearn === true) {
		$form_lessons.removeClass('hidden');
		$('.contact-form-lead-lesson').addClass('underline');
		}
	else if(check.clickedTranslation === true) {
		$form_translations.removeClass('hidden');
		$('.contact-form-lead-translation').addClass('underline');
		}
	}
	myJSON = JSON.stringify(flag);
	localStorage.setItem('quickQuote', myJSON);
	
}
quickQuoteGet();

	
	
//Cookie bar
function cookie() {
	function closeCookieBar() {
		$('.cookie-bar__text').find('a').on('click', function(event) {
			event.preventDefault();
			$('.cookie-bar').addClass('hidden');
			var cookieFlag = {mKDcookieSeenAndTurnedOff: true},
				myJSON;
			myJSON = JSON.stringify(cookieFlag);
			localStorage.setItem('mKDcookie', myJSON);
		});
		
		
	}
	function verifyCookie() {
		var myJSON = localStorage.getItem('mKDcookie'),
			cookieFlag;
		
		if(!(myJSON === null)) {
			cookieFlag = JSON.parse(myJSON);
			
			if (cookieFlag.mKDcookieSeenAndTurnedOff === true) {
				
				$('.cookie-bar').addClass('hidden');
			}
		}
		
	
	}
	verifyCookie();
	closeCookieBar();
}
	cookie();
});

           
	
	
	

							   
	
	
