<?php get_header() ?>

<!-- HERO MODULE -->

<div class='homepage-hero-module'>
    <div class='video-container'>
		
		<div class='headline'>
			<p class='headline-text-big'>Linguistic services <span> by </span> MKDTranslations</p>
            <button class='headline-btn'><a href='#contact'><?php $value = get_field ('hero_btn_left');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a>
			</button>
            <button class='headline-btn'><a href='#about'><span class='btn-text'><?php $value = get_field ('hero_btn_right');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></a>
			</button>
        </div>
        <div class='filter'></div>
        <video autoplay loop class='fillWidth hidden-xs hidden-sm'>
            <source src='<?php echo get_template_directory_uri(); ?>/White-Keyboard/MP4/White-Keyboard.mp4' type='video/mp4' />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src='<?php echo get_template_directory_uri(); ?>/White-Keyboard/WEBM/White-Keyboard.webm' type='video/webm' />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class='poster hidden-md hidden-lg hidden-xl'>
            <img src='<?php echo get_template_directory_uri(); ?>/White-Keyboard/Snapshots/White-Keyboard.jpg'/>
        </div>
    </div>
</div>

<!-- ABOUT SECTION -->

<div class='container-fluid bg-about' style='background-image: url(<?php echo get_template_directory_uri(); ?>/images/about.jpeg)' id='about'>
    <div class='row'>
        <div class='col-lg-5 col-xs-12 about-left'>
            <p class='about-title slideanim-left'><span class='hidden-sm hidden-xs'><?php $value = get_field ('title_right');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</span>
			</p>
            <p class='about-mobile hidden-md hidden-lg hidden-xl'><span><?php $value = get_field ('title_left');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span> <?php $value = get_field ('title_right');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
        </div>
        <div class='col-lg-7 col-xs-12 about-right'>
            <p class='about-title-right hidden-sm hidden-xs slideanim'> <?php $value = get_field ('title_left');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
            <p class='about-main slideanim'> <?php $value = get_field ('about_main_block');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?><span>English</span>, <span>French</span> and <span>Czech</span></p>
			<p class='about-secondary slideanim'><?php $value = get_field ('about_secondary_block');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
            <p class='help hidden-xs hidden-sm'><a href='#services'><span>READ</span> HOW I CAN HELP</a>
			</p>
        </div>
   	</div>
</div>

<!-- MY SOLUTIONS AND SERVICES SECTIONS -->

<div class='container-fluid bg-grey' id='services'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class ='section-title'><?php $value = get_field('services_section_title');
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
<div class='container-fluid bg-grey' id='services_content'>
    <div class='row row-icons'>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service1_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-width'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('services_icon_headline');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='description'><p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service2_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-height'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('service2_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service3_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-width'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('service3_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
				</h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service4_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-height'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('service4_icon_headline');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service5_icon');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' class='icon-set-width'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('service5_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service6_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('service6_icon_headline');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
        </div>
    </div>
</div>

<!-- TRANSLATION SECTION -->

<div class='container-fluid' id='translation'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php $value = get_field ('translation_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></h1>
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
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-tourism-pic pic-square'>
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
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-business-pic pic-square'> <div class='portfolio-overlay'>
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

        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay'>
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
		<div id='myCarousel' class='col-xs-12 carousel slide hidden-sm hidden-lg hidden-xl' data-ride='carousel' data-interval='false'>
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
<!-- Translation buttons --> 
   
        
		<div class='col-lg-12 col-md-12 morespecialties'>
   
			<button class='btn-standard btn-teal hidden-xs'><a><?php $value = get_field ('translation_button');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a>
			</button>
			<button class='btn-teal-bgfullcolor'><a href='<?php $value = get_field('translation_button_2_link');
				if ($value) {
					echo $value; }
				else {
					echo 'empty'; }?>'><?php $value = get_field ('translation_button_2');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a></button>
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
        <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php $value = get_field ('teaching_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></h1>
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
        <div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 french'>
            <div class='outer_bg'>
        		<div class='outer_border'>
					<div class='inner_border'><p><a href='<?php $value = get_field ('teaching_button_left_link');
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
            	</div>
        	</div>
        </div>
        <div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 polish'>
            <div class='outer_bg'>
        		<div class='outer_border'>
            		<div class='inner_border'><p><a href='<?php $value = get_field ('teaching_button_right_link');
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


<!-- CONTACT SECTION -->



<div class='container-fluid' id='form-page'>
	<div class='row'>
		<div class='col-lg-8'>
			<p class='contact-form-lead'><?php $value = get_field('contact_section_lead');
				if($value) {
					echo $value;
				}
				else {
					echo 'empty';}
				?>
			</p>
			<?php if( function_exists( 'iinclude_page' ) ) iinclude_page( $value = get_field('contact_form') ); ?>
        </div>
		<div class='col-lg-4 contact-form-right'>
						 
			<div class='contact-form-right-container'>
			<div class='icon-circle-small'><img src='<?php $value = get_field('contact_icon_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty';} 
				?>' class='icon-set-width-small'>
			</div>
				<?php $value = get_field('contact_icon_content1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty';
				}
				?>
			
		
		
			<div class='icon-circle-small'><img src='<?php $value = get_field('contact_icon_2');
				if ($value) {
					echo $value; 
				}	
				else 	{		
					echo 'empty';} 
					?>' class='icon-set-height-small'> 
			</div>
			<?php $value = get_field('contact_icon_content2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty';
				}
				?>
		
		
			<div class='icon-circle-small'>
				<img src='<?php $value = get_field('contact_icon_3');
					if ($value) {	
						echo $value; 
					}	
					else  	{		
						echo 'empty';}
						?>' class='icon-set-width-small'>
			</div>
			<?php $value = get_field('contact_icon_content3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty';
				}
				?>
				<div class='contact-form-right-container-socialmedia'>
	
			<div class='icon-circle-smallest'>
				<img src='<?php $value = get_field('contact_icon_social_1');
					if ($value) {
						echo $value; 
					}			
						 else   {					
							 echo 'empty';} ?>' class='icon-set-size-smallest'> 
			</div>
			<div class='icon-circle-smallest'>
				<img src='<?php $value = get_field('contact_icon_social_2');
					if ($value) {			
						echo $value; 
					}	
						 else {
							 echo 'empty';} ?>' class='icon-set-size-smallest'> 
			</div>
	
			<div class='icon-circle-smallest'>
				<img src='<?php $value = get_field('contact_icon_social_3');
					if ($value) {			
						echo $value; 
					}			
					 else { 
						 echo 'empty';} ?>' class='icon-set-size-smallest'> 
				</div>
				</div>
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