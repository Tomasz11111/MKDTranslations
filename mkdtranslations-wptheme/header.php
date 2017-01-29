<!DOCTYPE html>
<html lang='EN'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   

    
    <!--<script src="jquery.lazyload.js"></script>-->
    
   

    <title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<header><div class="navigation-container">
		<div class='choose-language-languages-homepage'>
			<p><a href='http://mkdtranslations.com/wordpress/cs/domovska/'>cz</a></p>
			<p><a href='http://mkdtranslations.com/wordpress/en/home/'>en</a></p>
			<p><a href='http://mkdtranslations.com/wordpress/pl/glowna/'>pl</a></p>
		</div>
        <nav class="navigation_right">
			<?php 
			
			$defaults = array(
			'container' => false,
			'theme_location' => 'primary-menu')
				;
			wp_nav_menu('defaults');
			?>
		
            </nav>
            <div id="nav-icon4">
            <span></span>
            <span></span>
            <span></span>
			<p class="menutext_hamburger">MENU</p>
        </div>
            </div>
</header>