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
<div class='container-fluid bg-learn' id='about'>
    <div class='row'>
		
		<div class='col-lg-12 col-signature hidden-xs'>
		<p class='signature signature-learn slideanim slide'><?php $value = get_field ('learn_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?> 
			</p>
		</div>
        <div class='col-lg-3 col-md-6 col-xs-12 col-about'>
			<div class='square1-learn slideanim slide'>
				<p class='signature hidden-sm hidden-md hidden-lg'><?php $value = get_field ('learn_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>
			</p>
			</div>
		</div>
        <div class='col-lg-3 col-md-6 col-xs-12 col-about'>
            <div class='square2 square2-learn slideanim slide'>
				<h2>Experience</h2>
				<p class='square-text square-text-learn'><?php $value = get_field ('learn_left_square');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
		</div>
		 <div class='col-lg-3 col-md-6 col-xs-12 col-about'>

			<div class='square3 square3-learn slideanim slide'>
				<h2>All levels</h2>
				<p class='square-text square-text-learn'><?php $value = get_field ('learn_middle_square');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
		</div>
		<div class='col-lg-3 col-md-6 col-xs-12 col-about '>
			<div class='square4 square4-learn slideanim slide'>
				<h2>Flexibility</h2>
				<p class='square-text square-text-learn'><?php $value = get_field ('learn_right_square');
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
 <div class='container-fluid bg-grey' id='how_i_teach'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'>
			<?php if ( have_posts() ): while (have_posts() ) : the_post() ;?><h1 class='section-title text-purple'><?php $value = get_field ('how_i_teach_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></h1>
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
        <div class='col-xs-12 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php echo get_template_directory_uri(); ?>/images/pin.png' alt="" class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
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
    	<div class='col	-xs-12 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php echo get_template_directory_uri(); ?>/images/group.png' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
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
        <div class='col-xs-12 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php echo get_template_directory_uri(); ?>/images/onlinelesson.png' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
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
        <div class='col-xs-12 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php echo get_template_directory_uri(); ?>/images/online.png' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
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
        <div class='col-xs-12 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php echo get_template_directory_uri(); ?>/images/progress.png' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
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
        <div class='col-xs-12 col-md-4 col-lg-2'>
            <div class='icon-circle'><img src= '<?php echo get_template_directory_uri(); ?>/images/books.png' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
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
<div class='container' id='learn-polish-pricing'>
	<div class='row'>
		<div class='col-lg-12'><h1 class='section-title text-purple'>Pricing</h1>
			<p class='section-title-lead'>Choose a  payment plan that works for you.</p>
		</div>
		<div class='col-lg-12'>
			<p class='learn-pricing-section'><?php $value = get_field ('learn_pricing_modes_1');
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
		<div class='col-lg-12'><p class='learn-pricing-section'><?php $value = get_field ('learn_pricing_modes_2');
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
	

<div class='col-lg-12 morespecialties'>
   
			<div class='btn-purple'><a href=''><?php $value = get_field ('learn_button_1');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></a>
			</div>
			<div class='btn-purple-bgfullcolor'><a href='<?php $value = get_field('learn_button_2_link');
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
            

        
<?php get_footer();?>