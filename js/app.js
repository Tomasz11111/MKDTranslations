

jQuery(document).ready(function($) {
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
  })
  }
	else {
    console.log('takakaka');
  }

}
	
	function lazy() {
        $('.lazy').Lazy();
    };
	lazy();
	
    
					   
		
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
				window.location.hash = '';
            // Make sure this.hash has a value before overriding default behavior*/
            if (this.hash !== '') {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash and scrollTop value
                var hash = this.hash;
					
					 

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - $('.navigation-container').outerHeight()             }, 900, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    
                });
            } // End if
			});
	}
   function runSmoothScroll() {
	    if($('body').is('.home')) {
			smoothScroll('.wordpress-menu a, div a:not(.carousel-control), .headline-btn a, .subsection__text a') //strony z linkami do id w menu
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
				   $('.bg-grey .subsection__container-icon').addClass('subsection__container-icon-animate');
					
				   }
				else { $('.bg-grey .subsection__container-icon').removeClass('subsection__container-icon-animate');
					  
					 }
			}
			if($('.container-fluid').is($process)) {
    
            if(winoffset > offsetProcess.top - 20) {
                $('#process-content .subsection__container-icon').addClass('subsection__container-icon-animate');
                $('#process-content .subsection__headline').addClass('subsection__headline-animation');
                setTimeout(function() {
                    
                $('.check_empty').addClass('hidden');
                $('.check_full').removeClass('hidden');
                }, 1000);
               //potrzeba skrócić tę funkcję
        	}
            else {
                $('#process-content .subsection__container-icon').removeClass('subsection__container-icon-animate');
                 $('#process-content .subsection__headline').removeClass('subsection__headline-animation');
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
			$(this).removeClass('flag');
		}
		
		
		if (window.matchMedia('(max-width: 768px)').matches) {
			
			$('.pic-square').on('tap', function() {
				var $this = $(this);
				if(!($this.is('.flag')) ){
					console.log('hide');
			
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
        $('.morespecialties .btn-blue').find('a').on('click', function() {
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
		menuBarChangeColor();
		highlightActiveLangBtn();
		
		/*hideLanguagesMob();
		hideLanguagesPC();*/
		
		
		function toggleHamburger(){
			/*	if (matchMedia) {
				  var mq = window.matchMedia("(min-width: 992px)");
				  mq.addListener(WidthChangeT);
				  WidthChangeT(mq);
				}*/
/*
				// media query change
				function WidthChangeT(mq) {
				  if (mq.matches) {
					if ($('body').hasClass('home'))  {
					var $trigger = $('#services'),
						offset = $trigger.offset();
				$(window).on('scroll', function() {
					if( ($(window).scrollTop() > offset.top) && !($hamburger.hasClass('flag')) ) {
						openHamburger();
					}
				});
					}
				  }
				
				   else {
					 console.log('qrwa');
					   $hamburger.removeClass('open');
							$menu.addClass('invisible'); 
							$container.removeClass('navigation-container-purple');
					// window width is less than 500px
				  }
					return false
				};*/
			//tutaj tę funkcję trzeba przerobić, else działa,ale z jakiegoś powodu cały czas od nowa odpala funkcje wyżej		
				  
				
				
				$hamburgerContainer.on('click', function() {
						var mq = window.matchMedia('(max-width: 991px)');
	 //dla komórek i małych tabletów 
							if (mq.matches) { //strona główna
						if ( $hamburger.hasClass('open') ) {
							closeHamburgerMobile();
							console.log('closed');
						}
						else {
							openHamburgerMobile();
							console.log('opened');
						}
					}
 //dla reg screens 
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
								$btnsNavbar.addClass('hidden');
								
								
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
	
					
/* dla komórek i małych tabletów	*/	function hideMenuWhenLinked() {
				
					$menu_link.on('click', function() {
					
						$container.removeClass('nav100vh');
						$menu.removeClass('nav100vh').addClass('invisible');
						$hamburger.removeClass('open');
						$switcher.removeClass('language-switcher-mob');
						$menutext.removeClass('hidden');
						$hamburger.find('span').removeClass('bg-white'); // to ewentualnie można połączyć z funkcją hamburgerClose
						
					
						if (window.matchMedia('(min-width: 768px)').matches) {
							$hamburgerContainer.addClass('flex-center-column');
							$btnsNavbar.removeClass('hidden');
						}
						
						
					}); // skrócić
				}
			
		//zmienić nazwę tej funkcji
					function menuBarChangeColor() {
					if((window.matchMedia('(min-width: 992px)').matches) && $('body').hasClass('home') ) {
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
		

	function reduceFont(el) {
		 	var $el = $(el)
		$el.each( function() {
			var elText = $(this).text();
		 if(elText.length > 34) {
				$el.addClass('reduce-font');
			}
		console.log(elText.length);
		});
		
	}
	
		
	reduceFont('.btn-navbar a');
		
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
//ew. można połączyć z funkcją poniżej
	function linkToForm() {
		if(window.matchMedia('(min-width: 768px)').matches) {
			
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

	//funkcja do automatycznego ustalania wysokości elementów w zależności od wysokości innych elementów, do których chcemy porównywać została usunięta
function quickQuoteSet() {
	var trigger = $('.quick-quote'),
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
		flag,
		check,
		flagContent = {'clickedLearn' : false, 'clickedTranslation': false},
		$form_translations = $('#form-translation'),
		$form_lessons = $('#form-lessons')
	;
	myJSON = localStorage.getItem('quickQuote');
	check= JSON.parse(myJSON);
	
	if(check.clickedLearn === true) {
		$form_lessons.removeClass('hidden');
		$('.contact-form-lead-lesson').addClass('underline');
		}
	else if(check.clickedTranslation === true) {
		$form_translations.removeClass('hidden');
		$('.contact-form-lead-translation').addClass('underline');
		}
	flag = flagContent;
	myJSON = JSON.stringify(flag);
	localStorage.setItem('quickQuote', myJSON);
}
quickQuoteGet();

});
           
	
	
	

							   
	
	
