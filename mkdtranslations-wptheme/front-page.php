<?php get_header() ?>

<!-- HERO MODULE -->

<div class='homepage-hero-module element-with-video-bg jquery-background-video-wrapper'>
	
		<video class="my-background-video jquery-background-video" loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/White-Keyboard/Snapshots/White-Keyboard.jpg">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/MP4/White-Keyboard.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/WEBM/White-Keyboard.webm" type="video/webm">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/OGV/White-Keyboard.OGV" type="video/ogv">
		</video>
		<div class='container-headline'>
			<p class='container-headline__text-big'><?php the_field ('headline_left');
				?><span> <?php the_field ('headline_middle');
				?> </span><?php the_field ('headline_right');
				?></p>
			
			<div class='headline-btn-container'>
				<div class='headline-btn-subcontainer'>
					<div class='headline-btn bg-belt-green'><a href='#services-intro'><?php the_field('hero_btn_left') ;
				?></a>
					</div>
					<div class='triangle triangle-mobile-blue bg-belt-green hidden-xs'></div>
				</div>
				<div class='headline-btn-subcontainer'>
					
					<div class='headline-btn bg-belt-purple'><a href='#about'><?php the_field('hero_btn_right');
				?></a>
					</div>
					<div class='triangle triangle-mobile-purple bg-belt-purple hidden-xs'></div>
				</div>
				
			</div>
		</div>
				
				
			
        
</div>


<!-- MY SOLUTIONS AND SERVICES SECTIONS -->

<!--services intro -->
<section id='services-intro'>
	
	<div class='container-fluid bg-services lazy' id='solutions-services'>
		<div class='row'>
			<div class=	'col-lg-4 col-md-4 col-sm-4 col-xs-lscape-6 row-col' id='services'>

			<img src='<?php echo get_template_directory_uri()?>/images/mkd_photo_nobg2.png' class='mkd-photo sr lazy' alt='Michał K. Dzieńdziura photo'>
			</div>
			<div class='col-lg-8 col-md-8 col-sm-8 col-xs-12 col-xs-lscape-6'><h1 class =' section__title section__title--front-page-services sr'><span>Michał K.Dzieńdziura</span><?php the_field('services_section_title');
				?>
				</h1>
				<p class='section__lead section__lead--front-page-services sr'><?php the_field ('services_section_lead');
				?>
				</p>
			</div>
		</div>
	</div>
</section>
	<!-- Services content -->
<section id='services-content' class='bg-services'>
	<div class='separator'></div>
   <div class='container-fluid bg-white lazy'>
	   <div class='row'>
		<div class='col-lg-12' id='services_content'>
    
		<div class='col-lg-4 col-md-12 col-sm-12 col-xs-12'>
			<h2 class='services-headlines sr '><span class='bg-headline-home2'><?php the_field('2_columns_headline'); ?></span></h2>
		</div>
		<div class='col-lg-8 hidden-md hidden-sm hidden-xs'>
			<h2 class='services-headlines sr'><span class='bg-headline-home1'><?php the_field('4_columns_headline'); ?></span></h2>
		</div>
	</div>
<!-- Core services -->
    <!--Translations-->    
		<div class='col-xs-12 col-xs-lscape-6 col-md-6 col-sm-6 col-lg-2 col-services col-services__core slideanim-left'>
			<a href='#translation'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-primary sr'><img src='<?php echo get_template_directory_uri(); ?>/images/translation-purple.png' class='subsection__icon--section-services hidden-xs sr ' alt='Icon - translations'><img src='<?php echo get_template_directory_uri(); ?>/images/translation-purple.png' class='subsection__icon--section-services hidden-sm hidden-md hidden-lg' alt='Icon - translations'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services subsection__headline--front-page-services-core sr'><?php the_field ('services_icon_headline');
				
				?></h4>
			
            <p class='subsection__text subsection__text--front-page-services sr'><?php the_field ('service1_icon_description');
				?></p>
				<!--<p class='subsection__text text-white'><a href='#translation'>Read more</a></p>-->
			
			</a>
	</div>
       

		    
	<!-- Teaching -->
		<div class='col-xs-12 col-xs-lscape-6 col-md-6 col-sm-6 col-lg-2 col-services slideanim-left col-services__core'>
			<a href='#teaching'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-primary sr'><img class='subsection__icon--section-services hidden-xs sr' src= '<?php echo get_template_directory_uri(); ?>/images/teaching-purple.png' alt='Icon - language teaching'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/teaching-purple.png' alt='Icon - language teaching'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services subsection__headline--front-page-services-core sr'><?php the_field ('service2_icon_headline');
				?>
				</h4>
			<p class='subsection__text subsection__text--front-page-services sr'><?php the_field ('service2_icon_description');
				?>
				</p>
				<!--<p class='subsection__text text-white'><a href='#teaching'>Read more</a></p>-->
			</a>
		</div>
<!-- Additional services -->
		<div class='col-xs-12 hidden-sm hidden-md hidden-lg slideanim'>
			<h2 class='services-headlines text-teal'><span class='bg-headline-home1'><?php the_field('4_columns_headline'); ?></span></h2>
		</div>
	<div class='hidden-xs hidden-lg col-md-12 col-sm-12 '>
			<h2 class='services-headlines sr'><span class='bg-headline-home1'><?php the_field('4_columns_headline'); ?></span></h2>
		</div>
        <!-- software testing -->
	<div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim col-services__additional'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs sr' src= '<?php echo get_template_directory_uri(); ?>/images/software-blue.png' alt='Icon - software testing'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/software-blue.png' alt='Icon - software testing'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services subsection__headline-animation sr'><span><?php the_field ('service3_icon_headline');
				?>
					</span></h4>
		 
				<p class='subsection__text subsection__text--front-page-services sr'><?php the_field ('service3_icon_description');
				?>
				</p>
		
        </div>
		<!-- style guide -->
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim col-services__additional'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs' src='<?php echo get_template_directory_uri(); ?>/images/glossary-blue.png' alt='Icon - glossary creation'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services sr' src='<?php echo get_template_directory_uri(); ?>/images/glossary-blue.png' alt='Icon - glossary creation'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services icon-headline-animation sr'><span><?php the_field ('service4_icon_headline');
			?>
					</span></h4>
			
            <p class='subsection__text subsection__text--front-page-services sr'><?php the_field ('service4_icon_description');
				?>
				</p>
			</div>
	<!-- Revision -->
		   
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim col-services__additional'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs sr' src='<?php echo get_template_directory_uri(); ?>/images/revision-blue.png' alt='Icon - revisions'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/revision-blue.png' alt='Icon - revisions'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services icon-headline-animation sr'><span><?php the_field ('service5_icon_headline');
				?></span></h4>
			         
				<p class='subsection__text subsection__text--front-page-services sr'><?php the_field ('service5_icon_description');
				?></p>
		
        </div>
	<!-- cultural consultancy -->
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim col-services__additional'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs sr' src = '<?php echo get_template_directory_uri(); ?>/images/cultural-blue.png' alt='Icon - cultural consultancy'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/cultural-blue.png' alt='Icon - cultural consultancy'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services sr'><span><?php the_field ('service6_icon_headline');
			?></span></h4>
			           
				<p class='subsection__text subsection__text--front-page-services sr'><?php the_field ('service6_icon_description');
				?>
				</p>
			
        	</div>
    	</div>
	</div>	
<div class='separator2'></div>
	

</section>


<!-- TRANSLATION SECTION -->

<div class='container-fluid' id='translation'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12 col-translation-mobile'><h1 class='section__title sr'><span class='bg-headline-home1'><?php the_field ('translation_section_title');
			
			?></span></h1>
            <p class='section__lead sr'><?php the_field ('translation_section_lead');
			
			?>
			</p>
        </div>
    </div>
</div>
<div class='container-fluid hidden-xs active-xs-lscape sr' id='photos'>
    <div class='row'>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-tourism-pic pic-square'>
            <div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_1');
			
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_1');
			?>
                </p></div>

        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-business-pic pic-square'> <div class='portfolio-overlay'>
			<p class='portfolio-overlay-text '><?php the_field ('translation_speciality_2');
			?>
			</p>
			<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_2');
			?></p>
			</div>
        </div>

        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay '>
				<p class='portfolio-overlay-text'><?php the_field ('translation_speciality_3');
			?>
				</p>
				<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_3');
			?>
				</p>
			</div>
        </div>
            
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-technical-pic pic-square hidden portfolio-expandable'>
			<div class='portfolio-overlay'>
				<p class='portfolio-overlay-text' ><?php the_field ('translation_speciality_4');
			?>
				</p>
				<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_4');
			?>
				</p>
			</div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-law-pic pic-square hidden portfolio-expandable'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_5');
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_5');
			?></p></div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-finance-pic pic-square hidden portfolio-expandable'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_6');
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_6');
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
			<div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_1');
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_1');
			?>
				</p></div>

			</div>
	 
			 <div class='item portfolio-business-pic pic-square'> <div class='portfolio-overlay'>
					<p class='portfolio-overlay-text'><?php the_field ('translation_speciality_2');
			?>
					</p>
					<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_2');
			?></p>
					</div>
				</div>
			 <div class='item portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay'>
						<p class='portfolio-overlay-text'><?php the_field ('translation_speciality_3');
			?>
						</p>
						<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_3');
			?>
						</p>
					</div>
				</div>
			 <div class='item portfolio-technical-pic pic-square'>
					<div class='portfolio-overlay'>
						<p class='portfolio-overlay-text' ><?php the_field ('translation_speciality_4');
			?>
						</p>
						<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_4');
			?>
						</p>
					</div>
				</div>
			 <div class='item portfolio-law-pic pic-square'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_5');
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_5');
			?></p></div>
				</div>
	 
			 <div class='item portfolio-finance-pic pic-square'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_6');
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_6');
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
   
				<div class='btn-standard btn-blue hidden-xs active-xs-lscape sr'><a><?php the_field ('translation_button');
				?></a>
				</div>
				<div class='btn-blue-bgfullcolor sr'><a href='<?php the_field('translation_button_2_link');
				?>'><?php the_field ('translation_button_2');
				?></a></div>
        	</div>
    	</div>
 </div>
  

 
 <!-- GREEN BELT -->       

<div class='container-fluid'>
    <div class='row'>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt bg-belt-green'><p class='confidentiality slideanim'><?php the_field ('belt_green');
			?></p>
		</div>
    </div>
</div>

<!-- TEACHING SECTION -->

<div class='container-fluid lazy' id='teaching'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12 learn-polish'><h1 class='section__title section__title--front-page-teaching text-purple sr'><span class='bg-headline-home2'><?php the_field ('teaching_section_title');
			?></span></h1>
            <p class='section__lead section__lead--front-page-teaching sr'><?php the_field ('teaching_section_lead');
				?>
			</p>
              			
			<p class='button-teaching sr'><a href='<?php the_field ('teaching_button_link');
							?>'><?php the_field ('teaching_button');
				?></a>
			</p>
		
			
		
		</div>
	</div>
</div>



<!-- PURPLE BELT -->

<div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt bg-belt-purple'><p class='confidentiality slideanim'><?php the_field ('belt_purple');
			
			?></p>
		</div>
	</div>
</div>


<!-- ABOUT SECTION -->

<div class='container-fluid bg-about lazy' id='about'>
    <div class='row'>
		<div class='col-lg-12 col-md-12 col-signature col-signature-about hidden-xs active-xs-lscape col-xs-lscape-12'>
			<p class='signature slideanim'><?php the_field ('about_title');
			?>
			</p>
					
			
		</div>
        <div class='col-lg-3 col-xs-12 col-xs-lscape-6 col-about hidden-md hidden-sm hidden-lg'>
			<div class='square1 slideanim'>
				<p class='signature hidden-xs-lscape hidden-sm hidden-md hidden-lg'><?php the_field ('about_title');
			?>
			</p>
			</div>
		</div>
        <div class='col-lg-3 col-md-3 col-sm-9 col-xs-12 col-xs-lscape-6 col-about'>
            <div class='square2-about square-about slideanim'>
				<h2 class='about-headlines' style='background-color:<?php the_field('color')?>'><?php the_field ('about_left_box_title');
			?></h2>
				<p class='square-text'><?php the_field ('about_left_box_content');
			?></p>
			</div>
		</div>
		 <div class='col-lg-3 col-md-3 col-sm-8 col-offset-sm-1 col-xs-12 col-xs-lscape-6 col-about col-about-middle'>

			<div class='square3-about square-about slideanim'>
				<h2 class='about-headlines' style='background-color:<?php the_field('color_adjacent1')?>'><?php the_field ('about_middle_box_title');
			?></h2>
				<p class='square-text'><?php the_field ('about_middle_box_content');
			?> </p>
			</div>
		</div>
		<div class='col-lg-3 col-md-3 col-sm-7 col-xs-12 col-xs-lscape-6 col-about'>
			<div class='square4-about square-about slideanim'>
				<h2 class='about-headlines' style='background-color:<?php the_field('color_adjacent2')?>'><?php the_field ('about_right_box_title');
			?></h2>
				<p class='square-text'><?php the_field ('about_right_box_content');
			?></p>
			</div>
            
		</div>
		
   	</div>
</div>


<!-- CONTACT SECTION -->



<div class='container-fluid' id='form-page'>
	<div class='row'>
		<div class='col-lg-12'>
			<p class='contact-form-lead slideanim slide '><?php the_field ('contact_headline_1st_part');
			?>
			<a  class='contact-form-lead-lesson'><?php the_field ('contact_headline_1st_link');
			?></a> <?php the_field ('contact_headline_2nd_part');
			?>  <a  class='contact-form-lead-translation'><?php the_field ('contact_headline_2nd_link');
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