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
<div class='container-fluid bg-learn' id='about' style='background-image: url(<?php $value = get_field ('learn_bg_image');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>)'>
    <div class='row'>
		
		<div class='col-lg-12 col-xs-12 col-signature col-signature-learn '>
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
        <div class='col-lg-3 col-md-3 col-sm-6 hidden-xs col-learn col-learn-left'>
			<div class='square1-learn slideanim slide'>
				<p class='signature-photomkd'><span style='background-color:<?php the_field('color'); ?>'>Michał K.Dzieńdziura
					</span></p>
			</div>
		</div>
        <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-learn col-learn-left-middle'>
            <div class='square2 square-learn square2-learn slideanim slide' style='background-color:<?php the_field('color'); ?>'>
				<h2><span>Experience</span></h2>
				<p class='square-text square-text-learn'><span><?php $value = get_field ('learn_left_square');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></p>
			</div>
		</div>
		 <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-learn col-learn-right-middle'>

			<div class='square3 square-learn square3-learn slideanim slide' style='background-color:<?php the_field('color_adjacent1'); ?>'>
				<h2><span>All levels</span></h2>
				<p class='square-text square-text-learn'><span><?php $value = get_field ('learn_middle_square');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></p>
			</div>
		</div>
		<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 col-learn col-learn-right '>
			<div class='square4 square-learn square4-learn slideanim slide' style='background-color:<?php the_field('color_adjacent2'); ?>'>
				<h2><span>Flexibility</span></h2>
				<p class='square-text square-text-learn'><span><?php $value = get_field ('learn_right_square');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
					?></span></p>
			</div>
            
		</div>
		<div class='col-lg-12 learn-btn-container hidden-xs'>
			<div class='headline-btn headline-btn-learn' style='background-color:<?php the_field('color'); ?>'><a href='#how_i_teach'>Read more</a>
			</div>
			<div class='triangle-learn' style='background-color:<?php the_field('color'); ?>'></div>
		</div>
		
   	</div>
</div>

<!-- HOW I TEACH -->

 <div class='container-fluid bg-grey' id='how_i_teach'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'>
			<?php if ( have_posts() ): while (have_posts() ) : the_post() ;?><h1 class='section-title text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span></h1>
            <p class='section-title-lead'><?php $value = get_field ('how_i_teach_section_lead');
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
        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php $value = get_field ('how_i_teach_icon1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline text-white icon-headline-animation'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
    	<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php $value = get_field ('how_i_teach_icon2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-learn text-white icon-headline-animation'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php $value = get_field ('how_i_teach_icon3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-learn text-white icon-headline-animation'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>.</p>
			</div>
        </div>
        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php $value = get_field ('how_i_teach_icon4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-learn text-white icon-headline-animation'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php $value = get_field ('how_i_teach_icon5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-learn text-white icon-headline-animation'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php $value = get_field ('how_i_teach_icon6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' alt="" class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-learn text-white icon-headline-animation'><span style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('how_i_teach_icon_headline_6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			</div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_6');
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

<!-- BELT -->

<div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt bg-belt-learn' style='background-color:<?php the_field('color'); ?>'><p class='confidentiality slideanim'><?php $value = get_field ('belt_purple');
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
		<div class='col-lg-12'><h1 class='section-title text-white'><span class='bg-headline-home1' style='background-color:<?php the_field('color'); ?>'>Pricing</span></h1>
			<p class='section-title-lead'>Choose a  payment plan that works for you.</p>
		</div>
		<div class='col-lg-12'>
			<p class='learn-pricing-section' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('learn_pricing_modes_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p></div>
		<div class='col-lg-4'>
			<h3>Slow-paced</h3>
			<?php $value = get_field('table_slow_pace');
			if($value) {
				echo $value;
			}
			else {
				echo 'empty';
			}
			?>
			</div>
		<div class='col-lg-4'>
		<h3>Standard</h3>
		<?php $value = get_field('table_standard');
			if($value) {
				echo $value;
			}
			else {
				echo 'empty';
			}
			?>
		</div>
		<div class='col-lg-4'>
		<h3>Intensive</h3>
			<?php $value = get_field('table_intensive');
			if($value) {
				echo $value;
			}
			else {
				echo 'empty';
			}
			?>
		</div>
		<div class='col-lg-12'><p class='learn-pricing-section' style='background-color:<?php the_field('color'); ?>'><?php $value = get_field ('learn_pricing_modes_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p></div>
		<div class='col-lg-4'>
			<h3>Slow-paced</h3>
			<?php $value = get_field('table_2nd_line_slow_pace');
			if($value) {
				echo $value;
			}
			else {
				echo 'empty';
			}
			?>
			
			</div>
		<div class='col-lg-4'>
		<h3>Standard</h3>
		<?php $value = get_field('table_2nd_line_standard');
			if($value) {
				echo $value;
			}
			else {
				echo 'empty';
			}
			?>
		</div>
		<div class='col-lg-4'>
		<h3>Intensive</h3>
			<?php $value = get_field('table_2nd_line_intensive');
			if($value) {
				echo $value;
			}
			else {
				echo 'empty';
			}
			?>
		</div>
	
<!-- BUTTONS -->
		
<div class='col-lg-12 morespecialties'>
   
			<div class='btn-learn' style='border-color:<?php the_field('color');?>'><a href=''><?php $value = get_field ('learn_button_1');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a>
			</div>
			<div class='btn-learn-bgfullcolor' style='background-color:<?php the_field('color');?>;border-color: <?php the_field('color');?>'><a href='<?php $value = get_field('learn_button_2_link');
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