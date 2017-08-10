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
            
				

        <div class='col-lg-12 col-xs-12'><h1 class='section__title text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('translation_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
            <p class='section__lead'>
				 <?php if ( have_posts() ): while (have_posts() ) : the_post() ;?>
				<?php $value = get_field ('translation_section_lead');
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

        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay'>
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
            
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 portfolio-technical-pic pic-square'>
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
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 portfolio-law-pic pic-square '><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_5');
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
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 portfolio-finance-pic pic-square '><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_6');
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
		<div id='myCarousel' class='col-xs-12 carousel slide hidden-sm hidden-md hidden-lg' data-ride='carousel' data-interval='false'>
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
        <div class='col-lg-12 col-xs-12'><h1 class='section__title text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('process_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
            <p class='section__lead'><?php $value = get_field ('process_section_lead');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
			?></p>
        </div>
    </div>
</div>
<div class='container-fluid bg-grey padding' id='process-content'>
    <div class='row'>
        <div class='col-lg-2'></div>
        <div class='col-lg-4 col-md-6 col-sm-6'>
            <div class='icon-circle icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/standards-blue.png' class='icon-set-height'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field('process_icon_headline_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
					</span></h4>
			</div>
            <?php $value = get_field('test1001');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
			?>
            
        </div>
		<div class='col-lg-4 col-md-6 col-sm-6'>
			<div class='icon-circle icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/guidelines-blue.png' class='icon-set-height'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field('process_icon_headline_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
					</span></h4>
			</div>
			<?php $value = get_field('test1000');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
		</div>
        
        <div class='col-lg-2'></div>
        
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
			?>
				
				
</p>
		</div>
    </div>
</div>   
  <!-- PRICING SECTION -->

<div class='container-fluid' id='pricing'>
        
           
    <div class='row'>
        <div class='col-lg-12 col-xs-12'><h1 class='section__title section__title--translations-pricing text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field('pricing_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
                
            </div>
          
        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>    
    
            <div class='icon-circle icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/pricingpolicy-blue.png' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field('pricing_icon_headline_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field('pricing_icon_text_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
         </div>
         <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>
            <div class='icon-circle icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/discount-blue.png' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field('pricing_icon_headline_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field('pricing_icon_text_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
       </div>
       <div class='col-lg-4 col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-xs-12'>
            <div class='icon-circle icon-circle-teal'><img src='<?php echo get_template_directory_uri()?>/images/payment-blue.png' class='icon-set-height'>
		   </div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field('pricing_icon_headline_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
		   </div>
           <div class='description'><p class='icon-description-text'><?php $value = get_field('pricing_icon_text_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
		   </div>
                 <div class='payments_methods_flex'>
                 	<img src='<?php echo get_template_directory_uri()?>/images/PayPal.svg' alt='PayPal logo'><img src='<?php echo get_template_directory_uri()?>/images/Skrill_small.png' alt='Skrill logo'>
		   </div>
		</div>
		
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 pricing-buttons'>
			<div class='btn-standard btn-blue'><a href='<?php $value = get_field('pricing_button_left_link');
				if ($value) {
					echo $value; }
				else {
					echo 'empty'; }?>'><?php $value = get_field ('pricing_button_left');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></a>
			</div>
            <div class='btn-learn-bgfullcolor' style='background-color:<?php the_field('color');?>;border-color: <?php the_field('color');?>'><a href='<?php $value = get_field('pricing_button_right_link');
				if ($value) {
					echo $value; }
				else {
					echo 'empty'; }?>'><?php $value = get_field ('pricing_button_right');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></a>
			</div>
       
					 
				
				<?php endwhile; else: ?>
					<?php endif; ?>
		    </div>
       </div>
</div>      

  
    


<?php get_footer();?>