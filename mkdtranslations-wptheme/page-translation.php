<?php 
/*
    Template Name: Translation
*/
?>
<?php
if ( is_home() ) :
	get_header();
else :
	get_header( 'pages' );
endif;
?>
<div class="container-fluid" id="terms_title">
            <div class="row">
    <div class="col-lg-12 col-xs-12 subpage-header subpage-header-translation"><p class="subpage-header-title"><span><?php the_title() ?></span></p>
                
            </div>
         </div>
    </div>
 <div class='container-fluid' id='translation'>
	 <div class='row-col'>
            
				

        <div class='col-lg-12 col-xs-12'><h1 class='section__title text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php the_field ('translation_section_title');
			?></span></h1>
            <p class='section__lead'>
				 <?php if ( have_posts() ): while (have_posts() ) : the_post() ;?>
				<?php the_field ('translation_section_lead');
				?>
			</p>
        </div>
    </div>
</div>
<div class='container-fluid hidden-xs active-xs-lscape' id='photos'>
    <div class='row'>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 col-xs-lscape-4 portfolio-tourism-pic pic-square'>
            <div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_1');
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_1');
			?>
                </p></div>

        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 col-xs-lscape-4 portfolio-business-pic pic-square'> <div class='portfolio-overlay'>
			<p class='portfolio-overlay-text'><?php the_field ('translation_speciality_2');
			?>
			</p>
			<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_2');
			?></p>
			</div>
        </div>

        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 col-xs-lscape-4 portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay'>
				<p class='portfolio-overlay-text'><?php the_field ('translation_speciality_3');
			?>
				</p>
				<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_3');
			?>
				</p>
			</div>
        </div>
            
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 col-xs-lscape-4 portfolio-technical-pic pic-square sr'>
			<div class='portfolio-overlay'>
				<p class='portfolio-overlay-text' ><?php the_field ('translation_speciality_4');
			?>
				</p>
				<p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_4');
			?>
				</p>
			</div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 col-xs-lscape-4 portfolio-law-pic pic-square sr'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_5');
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_5');
			?></p></div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 col-xs-lscape-4 portfolio-finance-pic pic-square sr'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php the_field ('translation_speciality_6');
			?></p><p class='hidden portfolio-overlay-text-hover'><?php the_field ('translation_speciality_examples_6');
			?></p></div>
        </div>
	</div>
</div>

<!-- Carousel for mobile version -->

<div class='container-fluid'>
	<div class='row'>
		<div id='myCarousel' class='col-xs-12 carousel slide hidden-xs-lscape hidden-sm hidden-md hidden-lg' data-ride='carousel' data-interval='false'>
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
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style='background-color:<?php the_field('color'); ?>'></span>
				<span class="sr-only">Previous</span>
		  	</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style='background-color:<?php the_field('color'); ?>'></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

  
<!-- TRANSLATION PROCESS SECTION -->

 <div class='container-fluid bg-grey' id='process'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class='section__title text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php the_field ('process_section_title');
			?></span></h1>
            <p class='section__lead sr'><?php the_field ('process_section_lead');
			?></p>
        </div>
    </div>
</div>
<div class='container-fluid bg-grey padding' id='process-content'>
    <div class='row'>
        <div class='col-lg-2'></div>
        <div class='col-lg-4 col-md-6 col-sm-6'>
            <div class='subsection__container-icon icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/standards-blue.png' class='icon-set-height sr' alt='icon - standards'>
			</div>
            
				<h4 class='subsection__headline text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php the_field('process_icon_headline_1');
				?>
					</span></h4>
			
            <?php the_field('test1001');
				?>
            
        </div>
		<div class='col-lg-4 col-md-6 col-sm-6'>
			<div class='subsection__container-icon icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/guidelines-blue.png' class='icon-set-height sr' alt='icon - guidelines'>
			</div>
            <h4 class='subsection__headline text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php the_field('process_icon_headline_2');
				?>
					</span></h4>
			
			<?php the_field('test1000');
				?>
		</div>
        
        <div class='col-lg-2'></div>
        
    </div>
</div>
  <!-- GREEN BELT -->       

<div class='container-fluid'>
    <div class='row'>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt bg-belt-green'><p class='confidentiality slideanim'><?php the_field ('belt_green');
			?>
				
				
</p>
		</div>
    </div>
</div>   
  <!-- PRICING SECTION -->

<div class='container-fluid' id='pricing'>
        
           
    <div class='row'>
        <div class='col-lg-12 col-xs-12'><h1 class='section__title section__title--translations-pricing text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php the_field('pricing_section_title');
			?></span></h1>
                
            </div>
          
        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>    
    
            <div class='subsection__container-icon icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/pricingpolicy-blue.png' class='icon-set-height sr' alt="Icon - pricing policy">
			</div>
            <div class='icon_title'><h4 class='subsection__headline icon-headline-animation text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php the_field('pricing_icon_headline_1');
				?></span></h4>
			</div>
            <div class='description'><p class='subsection__text sr'><?php the_field('pricing_icon_text_1');
				?></p>
			</div>
         </div>
         <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>
            <div class='subsection__container-icon icon-circle-teal '><img src='<?php echo get_template_directory_uri()?>/images/discount-blue.png' class='icon-set-height sr' alt='icon - discount'>
			</div>
            <div class='icon_title'><h4 class='subsection__headline icon-headline-animation text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php the_field('pricing_icon_headline_2');
				?></span></h4>
			</div>
            <div class='description'><p class='subsection__text sr'><?php the_field('pricing_icon_text_2');
				?></p>
			</div>
       </div>
       <div class='col-lg-4 col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-xs-12'>
            <div class='subsection__container-icon icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/payment-blue.png' class='icon-set-height sr' alt='icon - payment methods'>
		   </div>
            <div class='icon_title'><h4 class='subsection__headline subsection__headline-animation text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php the_field('pricing_icon_headline_3');
				?></span></h4>
		   </div>
           <div class='description'><p class='subsection__text sr'><?php the_field('pricing_icon_text_3');
				?></p>
		   </div>
                 <div class='payments_methods_flex sr'>
                 	<img src='<?php echo get_template_directory_uri()?>/images/PayPal.svg' alt='PayPal logo'><img src='<?php echo get_template_directory_uri()?>/images/Skrill_small.png' alt='Skrill logo'>
		   </div>
		</div>
		
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-container btn-container--sidepage'>
			<div class='btn btn--blue sr'><a href='<?php the_field('pricing_button_left_link');
				?>'><?php the_field ('pricing_button_left');
				?></a>
			</div>
            <div class='btn btn--blue-full btn--quick-quote sr' data-target='translation'><a href='<?php the_field('pricing_button_right_link');
				?>'><?php the_field ('pricing_button_right');
				?></a>
			</div>
       
					 
				
				<?php endwhile; else: ?>
					<?php endif; ?>
		    </div>
       </div>
</div>      

  
    


<?php get_footer();?>