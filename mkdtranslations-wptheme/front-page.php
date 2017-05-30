<?php get_header() ?>

<!-- HERO MODULE -->

<div class='homepage-hero-module element-with-video-bg jquery-background-video-wrapper'>
	
		<video class="my-background-video jquery-background-video" loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/White-Keyboard/Snapshots/White-Keyboard.jpg">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/MP4/White-Keyboard.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/WEBM/White-Keyboard.webm" type="video/webm">
			<source src="<?php echo get_template_directory_uri(); ?>/White-Keyboard/OGV/White-Keyboard.OGV" type="video/ogv">
		</video>
		<div class='headline'>
			<p class='headline-text-big'>Linguistic services <span> by </span> MKDTranslations</p>
			
			<div class='headline-btn-container'>
				<div class='headline-btn-subcontainer'>
					<div class='headline-btn bg-belt-green'><a href='#services'>My solutions and services</a>
					</div>
					<div class='triangle triangle-mobile-blue bg-belt-green'></div>
				</div>
				<div class='headline-btn-subcontainer'>
					
					<div class='headline-btn bg-belt-purple'><a href='#about'>About</a>
					</div>
					<div class='triangle triangle-mobile-purple bg-belt-purple'></div>
				</div>
				
			</div>
		</div>
				
				
				
				<!--<div  class='headline-btn'><a href='#about'><span class='btn-text'><?php $value = get_field ('hero_btn_right');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></a>
				</div>-->
			
        
</div>


<!-- MY SOLUTIONS AND SERVICES SECTIONS -->

<div class='container-fluid' id='services'>
    <div class='row-col'>
		<img src='<?php echo get_template_directory_uri()?>/images/mkd_photo_nobg2.png' class='mkd-photo'>
        <div class='col-lg-12 col-xs-12'><h1 class ='section-title text-teal'><?php $value = get_field('services_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</h1>
            <p class='section-title-lead'><?php $value = get_field ('services_section_lead');
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
<div class='container-fluid' id='services_content'>
    <div class='row row-icons row-icons-services'>
		<div class='col-lg-4 col-md-12 col-sm-12  col-xs-12'>
			<h2 class='services-headlines'><span class='bg-headline-home1'>Core services</span></h2>
		</div>
		<div class='col-lg-8 hidden-md hidden-sm hidden-xs'>
			<h2 class='services-headlines'><span class='bg-headline-home3'>Additional services</span></h2>
		</div>
<!-- Core services -->
        <div class='col-xs-12 col-md-6 col-sm-6 col-lg-2 bg-belt-green col-services slideanim-left'>
            <div class='icon-circle icon-circle-teal'><img src='<?php echo get_template_directory_uri(); ?>/images/translation-white.png' class='icon-set-height hidden-xs'><img class='icon-set-height icon-core1 hidden-sm hidden-md hidden-lg'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation text-white'><?php $value = get_field ('services_icon_headline');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='description'><p class='icon-description-text text-white'><?php $value = get_field ('service1_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
				<p class='icon-description-text text-white'><a href='#translation'>Read more</a></p>
			</div>
        </div>
		    
		
		<div class='col-xs-12 col-md-6 col-sm-6 col-lg-2 bg-belt-green col-services slideanim-left'>
            <div class='icon-circle icon-circle-teal'><img class='icon-set-height' src= '<?php echo get_template_directory_uri(); ?>/images/teaching-white.png'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation text-white'><?php $value = get_field ('service2_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text text-white'><?php $value = get_field ('service2_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</p>
				<p class='icon-description-text text-white'><a href='#teaching'>Read more</a></p>
			</div>
        </div>
<!-- Additional services -->
		<div class='col-xs-12 hidden-sm hidden-md hidden-lg slideanim'>
			<h2 class='services-headlines text-teal'>ADDITIONAL SERVICES</h2>
		</div>
        <div class='col-xs-12 col-sm-6 col-md-3 col-lg-2 bg-belt-blue1 col-services slideanim'>
            <div class='icon-circle icon-circle-teal'><img class='icon-set-height' src= '<?php echo get_template_directory_uri(); ?>/images/software-blue.png'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation'><span class='text-teal'><?php $value = get_field ('service3_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
					</span></h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'><?php $value = get_field ('service3_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</p>
			</div>
        </div>
		
        <div class='col-xs-12 col-sm-6 col-md-3 col-lg-2 bg-belt-blue1 col-services slideanim'>
            <div class='icon-circle icon-circle-teal'><img class='icon-set-height' src='<?php echo get_template_directory_uri(); ?>/images/glossary-blue.png'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation'><span class='text-teal'><?php $value = get_field ('service4_icon_headline');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
					</span></h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'><?php $value = get_field ('service4_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</p>
			</div>
        </div>
        <div class='col-xs-12 col-sm-6 col-md-3 col-lg-2 bg-belt-blue1 col-services slideanim'>
            <div class='icon-circle icon-circle-teal'><img class='icon-set-height' src='<?php echo get_template_directory_uri(); ?>/images/revision-blue.png'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><span class='text-teal'><?php $value = get_field ('service5_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'><?php $value = get_field ('service5_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
        <div class='col-xs-12 col-sm-6 col-md-3 col-lg-2 bg-belt-blue1 col-services slideanim'>
            <div class='icon-circle icon-circle-teal'><img class='icon-set-height' src = '<?php echo get_template_directory_uri(); ?>/images/cultural-blue.png'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><span class='text-teal'><?php $value = get_field ('service6_icon_headline');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
				?></span></h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'><?php $value = get_field ('service6_icon_description');
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
</div>

<!-- TRANSLATION SECTION -->

<div class='container-fluid' id='translation'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12 col-translation-mobile'><h1 class='section-title'><span class='bg-headline-home1'><?php $value = get_field ('translation_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
            <p class='section-title-lead'><?php $value = get_field ('translation_section_lead');
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
<div class='container-fluid hidden-xs' id='photos'>
    <div class='row'>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 portfolio-tourism-pic pic-square'>
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
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 portfolio-business-pic pic-square'> <div class='portfolio-overlay'>
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

        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay '>
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
            
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-technical-pic pic-square hidden portfolio-expandable'>
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
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-law-pic pic-square hidden portfolio-expandable'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_5');
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
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-finance-pic pic-square hidden portfolio-expandable'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_6');
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
		<div id='myCarousel' class='col-xs-12 carousel slide hidden-sm hidden-md hidden-lg hidden-xl' data-ride='carousel' data-interval='false'>
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
   
				<div class='btn-standard btn-blue hidden-xs'><a><?php $value = get_field ('translation_button');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></a>
				</div>
				<div class='btn-blue-bgfullcolor'><a href='<?php $value = get_field('translation_button_2_link');
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
        <div class='col-lg-12 col-xs-12'><h1 class='section-title text-purple'><span class='bg-headline-home2'><?php $value = get_field ('teaching_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
            <p class='section-title-lead'><?php $value = get_field ('teaching_section_lead');
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
<div class='container-fluid' id='learn-language'>
    <div class='row'>
        
		<div class='col-xs-12 col-sm-4 col-md-3 col-md-offset-3 col-lg-3 col-lg-offset-3 square-learn square-polish'>
			
			<p class='signature signature-learn'><a href='<?php $value = get_field ('teaching_button_left_link');
							if ($value) {
								echo $value;
									}
							else {
								echo 'empty'; } ?>'><?php $value = get_field ('teaching_button_left');
							if ($value) {
								echo $value;
							}
							else {
								echo 'empty'; }
					?></a></p>
		
			
		
		</div>
		<div class='col-xs-12 col-sm-4 col-lg-3 square-learn square-french'>
			
			<p class='signature signature-learn'><a href='<?php $value = get_field ('teaching_button_right_link');
							if ($value) {
								echo $value;
									}
							else {
								echo 'empty'; } ?>'><?php $value = get_field ('teaching_button_right');
							if ($value) {
								echo $value;
							}
							else {
								echo 'empty'; }
					?></a></p>
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
		<div class='col-lg-12 col-md-12 col-signature col-signature-about hidden-xs'>
			<p class='signature slideanim'>Michał K.Dzieńdziura - your teacher and translator
			</p>
					
			
		</div>
        <div class='col-lg-3 col-xs-12 col-about hidden-md hidden-sm hidden-lg'>
			<div class='square1 slideanim'>
				<p class='signature hidden-sm hidden-md hidden-lg'><?php $value = get_field ('about_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
			</div>
		</div>
        <div class='col-lg-3 col-md-3 col-sm-9 col-xs-12 col-about'>
            <div class='square-about slideanim'>
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
		 <div class='col-lg-3 col-md-3 col-sm-8 col-offset-sm-1 col-xs-12 col-about col-about-middle'>

			<div class='square-about slideanim'>
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
		<div class='col-lg-3 col-md-3 col-sm-7 col-xs-12 col-about'>
			<div class='square-about slideanim'>
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
			<p class='contact-form-lead slideanim slide'>Book your <span class='contact-form-lead-lesson'>first lesson</span> or request a free quote for <span class='contact-form-lead-translation'>translation</span>
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