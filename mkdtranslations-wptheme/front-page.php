<?php get_header() ?>

<!-- HERO MODULE -->

<div class='homepage-hero-module element-with-video-bg jquery-background-video-wrapper'>
	
		<video class="my-background-video jquery-background-video" loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/White-Keyboard/Snapshots/White-Keyboard.jpg">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/MP4/White-Keyboard.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/WEBM/White-Keyboard.webm" type="video/webm">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/OGV/White-Keyboard.OGV" type="video/ogv">
		</video>
		<div class='container-headline'>
			<p class='container-headline__text-big'>Linguistic services <span> by </span> MKDTranslations</p>
			
			<div class='headline-btn-container'>
				<div class='headline-btn-subcontainer'>
					<div class='headline-btn bg-belt-green'><a href='#services'><?php $value = get_field ('hero_btn_left');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></a>
					</div>
					<div class='triangle triangle-mobile-blue bg-belt-green hidden-xs'></div>
				</div>
				<div class='headline-btn-subcontainer'>
					
					<div class='headline-btn bg-belt-purple'><a href='#about'><?php $value = get_field ('hero_btn_right');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></a>
					</div>
					<div class='triangle triangle-mobile-purple bg-belt-purple hidden-xs'></div>
				</div>
				
			</div>
		</div>
				
				
			
        
</div>


<!-- MY SOLUTIONS AND SERVICES SECTIONS -->

<div class='container-fluid bg-fullpage bg-fullpage--solutions-and-services' id='solutions-services'>
	<div class='row'>
		<div class=	'col-lg-12 row-col' id='services'>
    	
		<img src='<?php echo get_template_directory_uri()?>/images/mkd_photo_nobg2.png' class='mkd-photo sr'>
        <div class='col-lg-12 col-xs-12'><h1 class =' section__title section__title--front-page-services sr'><?php $value = get_field('services_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</h1>
            <p class='section__lead section__lead--front-page-services sr'><?php $value = get_field ('services_section_lead');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
        </div>
    </div>
</div>
<div class='col-lg-12' id='services_content'>
    
		<div class='col-lg-4 col-md-12 col-sm-12 col-xs-12'>
			<h2 class='services-headlines sr '><span class='bg-headline-home2'><?php $value = get_field('2_columns_headline'); if ($value) { echo $value;} else { echo 'empty'; } ?></span></h2>
		</div>
		<div class='col-lg-8 hidden-md hidden-sm hidden-xs'>
			<h2 class='services-headlines sr'><span class='bg-headline-home1'><?php $value = get_field('4_columns_headline'); if ($value) { echo $value;} else { echo 'empty'; } ?></span></h2>
		</div>
<!-- Core services -->
        <div class='col-xs-12 col-xs-lscape-6 col-md-6 col-sm-6 col-lg-2 col-services slideanim-left'>
			<a href='#translation'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-primary sr'><img src='<?php echo get_template_directory_uri(); ?>/images/translation-white.png' class='subsection__icon--section-services hidden-xs sr'><img src='<?php echo get_template_directory_uri(); ?>/images/translation-blue.png' class='subsection__icon--section-services hidden-sm hidden-md hidden-lg'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services sr'><?php $value = get_field ('services_icon_headline');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			
            <p class='subsection__text subsection__text--front-page-services sr'><?php $value = get_field ('service1_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
				<!--<p class='subsection__text text-white'><a href='#translation'>Read more</a></p>-->
			
			</a>
        </div>
		    
		
		<div class='col-xs-12 col-xs-lscape-6 col-md-6 col-sm-6 col-lg-2 col-services slideanim-left'>
			<a href='#teaching'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-primary sr'><img class='subsection__icon--section-services hidden-xs' src= '<?php echo get_template_directory_uri(); ?>/images/teaching-white.png' class='sr'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/teaching-blue.png'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services sr'><?php $value = get_field ('service2_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</h4>
			<p class='subsection__text subsection__text--front-page-services sr'><?php $value = get_field ('service2_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</p>
				<!--<p class='subsection__text text-white'><a href='#teaching'>Read more</a></p>-->
			</a>
		</div>
<!-- Additional services -->
		<div class='col-xs-12 hidden-sm hidden-md hidden-lg slideanim'>
			<h2 class='services-headlines text-teal'><span class='bg-headline-home1'><?php $value = get_field('4_columns_headline'); if ($value) { echo $value;} else { echo 'empty'; } ?></span></h2>
		</div>
	<div class='hidden-xs hidden-lg col-md-12 col-sm-12 '>
			<h2 class='services-headlines sr'><span class='bg-headline-home1'><?php $value = get_field('4_columns_headline'); if ($value) { echo $value;} else { echo 'empty'; } ?></span></h2>
		</div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs sr' src= '<?php echo get_template_directory_uri(); ?>/images/software-white.png'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/software-blue.png'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services subsection__headline-animation sr'><span><?php $value = get_field ('service3_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
					</span></h4>
		 
				<p class='subsection__text subsection__text--front-page-services sr'><?php $value = get_field ('service3_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</p>
		
        </div>
		
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs' src='<?php echo get_template_directory_uri(); ?>/images/glossary-white.png'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services sr' src='<?php echo get_template_directory_uri(); ?>/images/glossary-blue.png'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services icon-headline-animation sr'><span><?php $value = get_field ('service4_icon_headline');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
					</span></h4>
			
            <p class='subsection__text subsection__text--front-page-services sr'><?php $value = get_field ('service4_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</p>
			</div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs sr' src='<?php echo get_template_directory_uri(); ?>/images/revision-white.png'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/revision-blue.png'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services icon-headline-animation sr'><span><?php $value = get_field ('service5_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			         
				<p class='subsection__text subsection__text--front-page-services sr'><?php $value = get_field ('service5_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
		
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs sr' src = '<?php echo get_template_directory_uri(); ?>/images/cultural-white.png'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/cultural-blue.png'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services sr'><span><?php $value = get_field ('service6_icon_headline');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
				?></span></h4>
			           
				<p class='subsection__text subsection__text--front-page-services sr'><?php $value = get_field ('service6_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</p>
			
        	</div>
    	</div>

</div>

<!-- TRANSLATION SECTION -->

<div class='container-fluid' id='translation'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12 col-translation-mobile'><h1 class='section__title sr'><span class='bg-headline-home1'><?php $value = get_field ('translation_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
            <p class='section__lead sr'><?php $value = get_field ('translation_section_lead');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
        </div>
    </div>
</div>
<div class='container-fluid hidden-xs active-xs-lscape sr' id='photos'>
    <div class='row'>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-tourism-pic pic-square'>
            <div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_1');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p><p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_1');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
                </p></div>

        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-business-pic pic-square'> <div class='portfolio-overlay'>
			<p class='portfolio-overlay-text '><?php $value = get_field ('translation_speciality_2');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
			<p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_2');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
			</div>
        </div>

        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay '>
				<p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_3');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p>
				<p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_3');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p>
			</div>
        </div>
            
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-lscape-4 portfolio-technical-pic pic-square hidden portfolio-expandable'>
			<div class='portfolio-overlay'>
				<p class='portfolio-overlay-text' ><?php $value = get_field ('translation_speciality_4');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p>
				<p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_4');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p>
			</div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-lscape-4 portfolio-law-pic pic-square hidden portfolio-expandable'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_5');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p><p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_5');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p></div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-lscape-4 portfolio-finance-pic pic-square hidden portfolio-expandable'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_6');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p><p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_6');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p></div>
        </div>
	</div>
</div>

<!-- Carousel for mobile version -->

<div class='container-fluid'>
	<div class='row'>
		<div id='myCarousel' class='col-xs-12 carousel slide hidden-xs-lscape hidden-sm hidden-md hidden-lg hidden-xl' data-ride='carousel' data-interval='false'>
			<div class='carousel-inner' role='listbox'>
			<div class='item active portfolio-tourism-pic pic-square'>
			<div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_1');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p><p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_1');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p></div>

			</div>
	 
			 <div class='item portfolio-business-pic pic-square'> <div class='portfolio-overlay'>
					<p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_2');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
					</p>
					<p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_2');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
					</div>
				</div>
			 <div class='item portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay'>
						<p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_3');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
						</p>
						<p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_3');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
						</p>
					</div>
				</div>
			 <div class='item portfolio-technical-pic pic-square'>
					<div class='portfolio-overlay'>
						<p class='portfolio-overlay-text' ><?php $value = get_field ('translation_speciality_4');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
						</p>
						<p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_4');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
						</p>
					</div>
				</div>
			 <div class='item portfolio-law-pic pic-square'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_5');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p><p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_5');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p></div>
				</div>
	 
			 <div class='item portfolio-finance-pic pic-square'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_6');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p><p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_6');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p></div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
		  	</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

<!-- Translation buttons --> 

   <div class='container-fluid'>
	   <div class='row'>
        
			<div class='col-lg-12 col-md-12 morespecialties'>
   
				<div class='btn-standard btn-blue hidden-xs active-xs-lscape sr'><a><?php $value = get_field ('translation_button');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></a>
				</div>
				<div class='btn-blue-bgfullcolor sr'><a href='<?php $value = get_field('translation_button_2_link');
					if ($value) {
						echo $value; }
					else {
						echo 'empty'; }?>'><?php $value = get_field ('translation_button_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></a></div>
        	</div>
    	</div>
 </div>
  

 
 <!-- GREEN BELT -->       

<div class='container-fluid'>
    <div class='row'>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt bg-belt-green'><p class='confidentiality slideanim'><?php $value = get_field ('belt_green');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
		</div>
    </div>
</div>

<!-- TEACHING SECTION -->

<div class='container-fluid' id='teaching'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12 learn-polish'><h1 class='section__title section__title--front-page-teaching text-purple sr'><span class='bg-headline-home2'><?php $value = get_field ('teaching_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
            <p class='section__lead section__lead--front-page-teaching sr'><?php $value = get_field ('teaching_section_lead');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
			</p>
              			
			<p class='button-teaching sr'><a href='<?php $value = get_field ('teaching_button_link');
							if ($value) {
								echo $value;
									}
							else {
								echo 'empty'; } ?>'><?php $value = get_field ('teaching_button');
							if ($value) {
								echo $value;
							}
							else {
								echo 'empty'; }
					?></a>
			</p>
		
			
		
		</div>
	</div>
</div>



<!-- PURPLE BELT -->

<div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt bg-belt-purple'><p class='confidentiality slideanim'><?php $value = get_field ('belt_purple');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
		</div>
	</div>
</div>


<!-- ABOUT SECTION -->

<div class='container-fluid bg-about' id='about'>
    <div class='row'>
		<div class='col-lg-12 col-md-12 col-signature col-signature-about hidden-xs active-xs-lscape col-xs-lscape-12'>
			<p class='signature slideanim'><?php $value = get_field ('about_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
					
			
		</div>
        <div class='col-lg-3 col-xs-12 col-xs-lscape-6 col-about hidden-md hidden-sm hidden-lg'>
			<div class='square1 slideanim'>
				<p class='signature hidden-xs-lscape hidden-sm hidden-md hidden-lg'><?php $value = get_field ('about_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
			</div>
		</div>
        <div class='col-lg-3 col-md-3 col-sm-9 col-xs-12 col-xs-lscape-6 col-about'>
            <div class='square2-about square-about slideanim'>
				<h2 class='about-headlines' style='background-color:<?php the_field('color')?>'><?php $value = get_field ('about_left_box_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></h2>
				<p class='square-text'><?php $value = get_field ('about_left_box_content');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
			</div>
		</div>
		 <div class='col-lg-3 col-md-3 col-sm-8 col-offset-sm-1 col-xs-12 col-xs-lscape-6 col-about col-about-middle'>

			<div class='square3-about square-about slideanim'>
				<h2 class='about-headlines' style='background-color:<?php the_field('color_adjacent1')?>'><?php $value = get_field ('about_middle_box_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></h2>
				<p class='square-text'><?php $value = get_field ('about_middle_box_content');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?> </p>
			</div>
		</div>
		<div class='col-lg-3 col-md-3 col-sm-7 col-xs-12 col-xs-lscape-6 col-about'>
			<div class='square4-about square-about slideanim'>
				<h2 class='about-headlines' style='background-color:<?php the_field('color_adjacent2')?>'><?php $value = get_field ('about_right_box_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></h2>
				<p class='square-text'><?php $value = get_field ('about_right_box_content');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
			</div>
            
		</div>
		
   	</div>
</div>


<!-- CONTACT SECTION -->



<div class='container-fluid' id='form-page'>
	<div class='row'>
		<div class='col-lg-12'>
			<p class='contact-form-lead slideanim slide '><?php $value = get_field ('contact_headline_1st_part');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			<a  class='contact-form-lead-lesson'><?php $value = get_field ('contact_headline_1st_link');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a> <?php $value = get_field ('contact_headline_2nd_part');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>  <a  class='contact-form-lead-translation'><?php $value = get_field ('contact_headline_2nd_link');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a>
			</p>
		</div>
		<div class='col-lg-12'>
			<div id='form-translation' class=' hidden'><?php if( function_exists( 'iinclude_page' ) ) iinclude_page( $value = get_field('contact_form') ); ?>
        	</div>
		</div>
		<div class='col-lg-12'>
			<div id='form-lessons' class= 'hidden'>		
				<?php if( function_exists( 'iinclude_page' ) ) iinclude_page( $value = get_field('contact_form_languages') ); ?>
			</div>
		</div>
		
				
	</div>
</div>

<!-- Google Map -->

<div class='container-fluid'>
	<div class='row'>
		<div class='col-lg-12'>
			<div id='googleMap'></div>
		</div>
	</div>
</div>



	
    
<?php get_footer();?>