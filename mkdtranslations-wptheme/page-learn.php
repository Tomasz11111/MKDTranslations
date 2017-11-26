<?php 
/*
    Template Name: Learn
*/
?>
<?php
if ( is_home() ) :
	get_header();
else :
	get_header( 'pages' );
endif;
?>
<div class='container-fluid bg-fullpage bg-fullpage--page-learn' id='about'>
    <div class='row'>
		
		<div class='col-lg-12 col-xs-12 col-xs-lscape-6 col-signature col-signature-learn '>
		<p class='hidden-lg hidden-sm hidden-md signature-learn slideanim slide'><span class='hidden-lg hidden-sm hidden-md'><?php the_field('learn_headline'); ?> </span>
			</p>
			<p class='hidden-xs signature signature-learn slideanim slide' style='color:<?php the_field('color'); ?> !important'><?php the_field ('learn_headline');
				?> 
			</p>
		</div>
        <div class='col-lg-3 col-md-3 col-sm-6 hidden-xs col-learn col-learn-left col-md-3-to-md-6'>
			<div class='square square1-learn slideanim slide'>
				<p class='signature-photomkd'><span style='background-color:<?php the_field('color'); ?>'><?php the_field('learn_photo_text');
				?></span></p>
			</div>
		</div>
        <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-lscape-6 col-learn col-learn-left-middle col-md-3-to-md-6'>
            <div class='square square2 square-learn square2-learn slideanim slide'>
				<h2 class='square__title--learn'><?php the_field('learn_left_square_title');
				?></h2>
				<p class='square__text square__text--learn'><?php the_field ('learn_left_square');
					?></p>
			</div>
		</div>
		 <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-lscape-6 col-learn col-learn-right-middle col-md-3-to-md-6'>

			<div class='square square3 square-learn square3-learn slideanim slide'>
				<h2 class='square__title--learn'><?php the_field('learn_middle_square_title');
				?></h2>
				<p class='square__text square__text--learn'><?php the_field ('learn_middle_square');
				?></p>
			</div>
		</div>
		<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-lscape-6 col-learn col-learn-right col-md-3-to-md-6 '>
			<div class='square square4 square-learn square4-learn slideanim slide'>
				<h2 class='square__title--learn'><?php the_field ('learn_right_square_title');
					?></h2>
				<p class='square__text square__text--learn'><?php the_field ('learn_right_square');
				?></p>
			</div>
            
		</div>
		<div class='col-lg-12 learn-btn-container hidden-xs'>
			<div class='headline__btn headline__btn--learn' style='background-color:<?php the_field('color'); ?>'><a href='#how_i_teach' class='headline__link'><?php the_field ('read_more');
			?></a>
			</div>
			<div class='triangle-learn' style='background-color:<?php the_field('color'); ?>'></div>
		</div>
		
   	</div>
</div>

<!-- HOW I TEACH -->

 <div class='container-fluid bg-grey' id='how_i_teach'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'>
			<?php if ( have_posts() ): while (have_posts() ) : the_post() ;?><h1 class='section__title text-white sr'><span class='bg-headline-learn'><?php the_field ('how_i_teach_section_title');
			?></span></h1>
            <p class='section__lead sr'><?php the_field ('how_i_teach_section_lead');
				?>
			</p>
			<?php endwhile; else: ?>
				<?php endif; ?>
        </div>
    </div>
</div>
<div class='container-fluid bg-grey' id='how_i_teach_icons'>
    <div class='row row-icons'>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src='<?php echo get_template_directory_uri(); ?>/images/pin-red.png' alt="Icon - Convenient location" class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline--learn  text-white subsection__headline-animation sr'><span><?php the_field ('how_i_teach_icon_headline_1');
				?></span></h4>
			<p class='subsection__text sr'><?php the_field ('how_i_teach_icon_description_1');
				?></p>
			
        </div>
    	<div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon sr'><img src='<?php echo get_template_directory_uri(); ?>/images/group-red.png' alt="Icon - Individual or group courses" class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline--learn text-white icon-headline-animation sr'><span><?php the_field ('how_i_teach_icon_headline_2');
				?></span></h4>
			<p class='subsection__text sr'><?php the_field ('how_i_teach_icon_description_2');
				?></p>
			
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src='<?php echo get_template_directory_uri(); ?>/images/onlinelesson-red.png' alt='Icon - online classes' class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline--learn text-white icon-headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php the_field ('how_i_teach_icon_headline_3');
				?></span></h4>
			<p class='subsection__text sr'><?php the_field ('how_i_teach_icon_description_3');
				?>.</p>
			
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src= '<?php echo get_template_directory_uri(); ?>/images/online-red.png'  alt='Icon - online tools' class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline--learn text-white subsection__headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php the_field ('how_i_teach_icon_headline_4');
				?></span></h4>
			<p class='subsection__text sr'><?php the_field ('how_i_teach_icon_description_4');
				?></p>
			
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src='<?php echo get_template_directory_uri(); ?>/images/progress-red.png' alt='Icon - regular progress assesment' class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline--learn text-white icon-headline-animation sr'><span><?php the_field ('how_i_teach_icon_headline_5');
				?></span></h4>
			
           <p class='subsection__text sr'><?php the_field ('how_i_teach_icon_description_5');
				?></p>
			
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src='<?php echo get_template_directory_uri(); ?>/images/books-red.png'  alt='Icon - Various coursebooks' class='icon-set-height'>
			</div>
            <h4 class='subsection__headline subsection__headline--learn text-white icon-headline-animation sr'><span><?php the_field ('how_i_teach_icon_headline_6');
				?></span></h4>
			<p class='subsection__text sr'><?php the_field ('how_i_teach_icon_description_6');
				?></p>
			
        </div>
	</div>
</div>

<!-- BELT -->

<div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 belt belt--teaching-page'><p class='belt__text slideanim'><?php the_field ('belt_purple');
			?></p>
		</div>
	</div>
</div>

<!-- PRICING -->

<div class='container' id='learn-polish-pricing'>
	<div class='row'>
		<div class='col-lg-12'><h1 class='section__title text-white sr'><span class='bg-headline-learn'><?php the_field('learn_pricing_title');
				
				?></span></h1>
			<p class='section__lead sr'><?php the_field('learn_pricing_headline');
				
				?></p>
		</div>
		<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 learn-pricing-modes'>
            <div class='subsection__container-icon'><img src= '<?php echo get_template_directory_uri(); ?>/images/lessons_stationary_red.png'  alt='Icon - prices stationary lessons' class='icon-set-height sr'> 
			</div>
            <div class='icon_title'><h4 class='subsection__headline subsection__headline--learn text-white subsection__headline-animation sr'><span><?php the_field ('learn_pricing_modes_1');
				?></span></h4>
			</div>
            
			<?php the_field('learn_pricing_table_left');
			?>
        </div>
		<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 learn-pricing-modes'>
            <div class='subsection__container-icon'><img src= '<?php echo get_template_directory_uri(); ?>/images/lessons_city_red.png'  alt='Icon - prices lessons city' class='icon-set-height sr'>
			</div>
            <div class='icon_title'><h4 class='subsection__headline subsection__headline--learn text-white subsection__headline-animation sr'><span><?php the_field ('learn_pricing_modes_2');
				?></span></h4>
			</div>
            
			<?php the_field('learn_pricing_table_right');
			?>
        </div>
		


		
	
<!-- BUTTONS -->
		
<div class='col-lg-12 btn-container btn-container--sidepage'>
   
			<div class='btn btn--red sr'><a href='<?php the_field('learn_button_1_link');
				?>'><?php the_field ('learn_button_1');
			?></a>
			</div>
			<div class='btn btn--red-full btn--quick-quote sr' data-target='learn'><a href='<?php the_field('learn_button_2_link');
				?>'><?php the_field ('learn_button_2');
			?></a></div>
        </div>
	</div>
</div>

<!-- TERMS AND CONDITIONS -->

<div class='container hidden' id='learn-terms'>
	<div class='row'>
		<div class='col-lg-12'>
			<?php the_field('learn_termsandconditions');
				?>
				</div>
		</div>
</div>
            
<!-- FOOTER -->
        
<?php get_footer();?>