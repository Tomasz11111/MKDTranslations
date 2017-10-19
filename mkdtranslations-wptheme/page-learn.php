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
		<p class='hidden-lg hidden-sm hidden-md signature-learn slideanim slide'><span class='hidden-lg hidden-sm hidden-md' style='background-color:<?php the_field('color'); ?> !important'><?php $value = get_field ('learn_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?> </span>
			</p>
			<p class='hidden-xs signature signature-learn slideanim slide' style='color:<?php the_field('color'); ?> !important'><?php $value = get_field ('learn_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?> 
			</p>
		</div>
        <div class='col-lg-3 col-md-3 col-sm-6 hidden-xs col-learn col-learn-left col-md-3-to-md-6'>
			<div class='square1-learn slideanim slide'>
				<p class='signature-photomkd'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('learn_photo_text');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></p>
			</div>
		</div>
        <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-lscape-6 col-learn col-learn-left-middle col-md-3-to-md-6'>
            <div class='square2 square-learn square2-learn slideanim slide' style='background-color:<?php the_field('color'); ?>'>
				<h2><span><?php $value = get_field ('learn_left_square_title');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></h2>
				<p class='square-text square-text-learn'><span  class='square-learn--inner-text'><?php $value = get_field ('learn_left_square');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></p>
			</div>
		</div>
		 <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-lscape-6 col-learn col-learn-right-middle col-md-3-to-md-6'>

			<div class='square3 square-learn square3-learn slideanim slide' style='background-color:<?php the_field('color_adjacent1'); ?>'>
				<h2><span><?php $value = get_field ('learn_middle_square_title');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></h2>
				<p class='square-text square-text-learn'><span  class='square-learn--inner-text'><?php $value = get_field ('learn_middle_square');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></p>
			</div>
		</div>
		<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-lscape-6 col-learn col-learn-right col-md-3-to-md-6 '>
			<div class='square4 square-learn square4-learn slideanim slide' style='background-color:<?php the_field('color_adjacent2'); ?>'>
				<h2><span><?php $value = get_field ('learn_right_square_title');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></h2>
				<p class='square-text square-text-learn'><span  class='square-learn--inner-text'><?php $value = get_field ('learn_right_square');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></p>
			</div>
            
		</div>
		<div class='col-lg-12 learn-btn-container hidden-xs'>
			<div class='headline-btn-learn' style='background-color:<?php the_field('color'); ?>'><a href='#how_i_teach'><?php $value = get_field ('read_more');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
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
			<?php if ( have_posts() ): while (have_posts() ) : the_post() ;?><h1 class='section__title text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
            <p class='section__lead sr'><?php $value = get_field ('how_i_teach_section_lead');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty';
				}
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
            <div class='subsection__container-icon'><img src= '<?php $value = get_field ('how_i_teach_icon1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline-learn  text-white subsection__headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			<p class='subsection__text sr'><?php $value = get_field ('how_i_teach_icon_description_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			
        </div>
    	<div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon sr'><img src= '<?php $value = get_field ('how_i_teach_icon2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline-learn text-white icon-headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			<p class='subsection__text sr'><?php $value = get_field ('how_i_teach_icon_description_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src= '<?php $value = get_field ('how_i_teach_icon3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline-learn text-white icon-headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			<p class='subsection__text sr'><?php $value = get_field ('how_i_teach_icon_description_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>.</p>
			
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src= '<?php $value = get_field ('how_i_teach_icon4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline-learn text-white subsection__headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			<p class='subsection__text sr'><?php $value = get_field ('how_i_teach_icon_description_4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src= '<?php $value = get_field ('how_i_teach_icon5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height sr'>
			</div>
            <h4 class='subsection__headline subsection__headline-learn text-white icon-headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			
           <p class='subsection__text sr'><?php $value = get_field ('how_i_teach_icon_description_5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			
        </div>
        <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-4 col-lg-2'>
            <div class='subsection__container-icon'><img src= '<?php $value = get_field ('how_i_teach_icon6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height'>
			</div>
            <h4 class='subsection__headline subsection__headline-learn text-white icon-headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			<p class='subsection__text sr'><?php $value = get_field ('how_i_teach_icon_description_6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			
        </div>
	</div>
</div>

<!-- BELT -->

<div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt' style='background-color:<?php the_field('color'); ?>'><p class='confidentiality slideanim'><?php $value = get_field ('belt_purple');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
		</div>
	</div>
</div>

<!-- PRICING -->

<div class='container' id='learn-polish-pricing'>
	<div class='row'>
		<div class='col-lg-12'><h1 class='section__title text-white sr'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('learn_pricing_title');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h1>
			<p class='section__lead sr'><?php $value = get_field ('learn_pricing_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
		</div>
		<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 learn-pricing-modes'>
            <div class='subsection__container-icon'><img src= '<?php $value = get_field ('learn_pricing_icon_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height sr'>
			</div>
            <div class='icon_title'><h4 class='subsection__headline subsection__headline-learn text-white subsection__headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('learn_pricing_modes_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            
			<?php $value = get_field('learn_pricing_table_left');
			if($value) {
				echo $value;
			}
			else {
				echo 'empty';
			}
			?>
        </div>
		<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 learn-pricing-modes'>
            <div class='subsection__container-icon'><img src= '<?php $value = get_field ('learn_pricing_icon_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height sr'>
			</div>
            <div class='icon_title'><h4 class='subsection__headline subsection__headline-learn text-white subsection__headline-animation sr'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('learn_pricing_modes_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            
			<?php $value = get_field('learn_pricing_table_right');
			if($value) {
				echo $value;
			}
			else {
				echo 'empty';
			}
			?>
        </div>
		


		
	
<!-- BUTTONS -->
		
<div class='col-lg-12 pricing-buttons'>
   
			<div class='btn-learn sr' style='border-color:<?php the_field('color');?>'><a href='<?php $value = get_field('learn_button_1_link');
				if ($value) {
					echo $value; }
				else {
					echo 'empty'; }?>'><?php $value = get_field ('learn_button_1');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a>
			</div>
			<div class='btn-learn-bgfullcolor quick-quote sr' data-target='learn' style='background-color:<?php the_field('color');?>;border-color: <?php the_field('color');?>'><a href='<?php $value = get_field('learn_button_2_link');
				if ($value) {
					echo $value; }
				else {
					echo 'empty'; }?>'><?php $value = get_field ('learn_button_2');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a></div>
        </div>
	</div>
</div>

<!-- TERMS AND CONDITIONS -->

<div class='container hidden' id='learn-terms'>
	<div class='row'>
		<div class='col-lg-12'>
			<?php $value = get_field('learn_termsandconditions');
				if ($value) {
					echo $value; }
				else {
					echo 'empty'; }?>
				</div>
		</div>
</div>
            
<!-- FOOTER -->
        
<?php get_footer();?>