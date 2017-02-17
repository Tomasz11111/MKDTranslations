   

    
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
			<p class="headline-text-sidepages">Linguistic services <span> by </span> MKDTranslations</p>

<!-- Hamburger menu -->
			<div class="hamburger hamburger-sidepages">
					<span></span>
					<span></span>
					<span></span>
					<p class="menutext_hamburger menutext_hamburger-sidepages">MENU</p>
			</div>

<!-- Inner menu container to display only if hamburger icon is clicked-->
			<nav class="wordpress-menu hidden">
				
<!-- Wordpress menu -->
					<?php 

					$defaults = array(
					'container' => false,
					'theme_location' => 'sidepage-menu');
					wp_nav_menu('defaults');
					?>
			</nav>	
	<!-- Language switchers -->
					<div class='language-switcher hidden'>
						<p><a href='http://mkdtranslations.com/wordpress/cs/domovska/'>cz</a></p>
						<p><a href='http://mkdtranslations.com/wordpress/en/home/'>en</a></p>
						<p><a href='http://mkdtranslations.com/wordpress/pl/glowna/'>pl</a></p>
					</div>		
		</div>
	
	</header>