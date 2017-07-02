   

    
   <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#terms_sidebar" data-offset="10" id='sidepage'>
	<header>
		<div class="navigation-container bg-dimgray">
<!--MKD Translations headline to display on page load -->
			<p class="headline-text-sidepages">Linguistic services <span style='background-color:<?php the_field('color'); ?> !important'> by </span> MKDTranslations</p>

<!-- Hamburger menu -->
			<div class='hamburger-container flex-center-column'>
					<div class='hamburger-subcontainer'>
						<div class="hamburger hamburger-sidepages">
						
							
							<span style='background-color:<?php the_field('color'); ?> !important'></span>
							<span style='background-color:<?php the_field('color'); ?> !important'></span>
							<span style='background-color:<?php the_field('color'); ?> !important'></span>
						</div>
						<p class="menutext_hamburger">MENU
						</p>
				</div>
			</div>

<!-- Inner menu container to display only if hamburger icon is clicked-->
			<nav class="wordpress-menu hidden">
				
<!-- Wordpress menu -->
					<?php 

					$defaults = array(
					'container' => false,
					'theme_location' => 'sidepage-menu');
					wp_nav_menu('defaults')
					?>
			</nav>	
	<!-- Language switchers -->
					<div class='language-switcher hidden'>
						<p style='border-color:<?php the_field('color')?>'><a style='color:<?php the_field('color')?>' href='<?php $value = get_field ('language_switcher_link_cs');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>'>cs</a></p>
						<p style='border-color:<?php the_field('color')?>'><a style='color:<?php the_field('color')?>' href='<?php $value = get_field ('language_switcher_link_en');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>'>en</a></p>
					</div>		
		</div>
	
	</header>