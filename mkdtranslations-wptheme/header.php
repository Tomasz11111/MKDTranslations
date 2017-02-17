<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   

    
    <!--<script src="jquery.lazyload.js"></script>-->
    
   

    <title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<header>
	<div class="navigation-container">

<!-- Wordpress menu-->
        <nav class="wordpress-menu invisible">
			<?php 
			
			$defaults = array(
			'container' => false,
			'theme_location' => 'primary-menu')
				;
			wp_nav_menu('defaults');
			?>
		
        </nav>
<!-- language switchers -->
		<div class='language-switcher language-switcher-homepage'>
			<p><a href='http://mkdtranslations.com/wordpress/cs/domovska/'>cs</a></p>
			<p><a href='http://mkdtranslations.com/wordpress/en/home/'>en</a></p>
			<p><a href='http://mkdtranslations.com/wordpress/pl/glowna/'>pl</a></p>
		</div>		
<!-- Hamburger icon -->
        <div class='hamburger'>
            <span></span>
            <span></span>
            <span></span>
			<p class="menutext_hamburger">MENU</p>
        </div>
   </div>
</header>