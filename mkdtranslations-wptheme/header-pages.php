   

    
   <!DOCTYPE html>
<html lang='EN'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#terms_sidebar" data-offset="10">
	<header>
    <div class="navigation-container navigation-container-bg">
        <div class="headline-sidepages">
            <p class="headline-text-sidepages">Linguistic services <span> by </span> MKDTranslations</p>
             	
        <div 
			 class="navigation_container">
			<nav class="navigation_right">
			
			<?php 
			
			$defaults = array(
			'container' => false,
			'theme_location' => 'primary-menu')
				;
			wp_nav_menu('defaults');
			?></nav>
			          
         
		
	
            <div id="nav-icon4">
            <span></span>
            <span></span>
            <span></span>
        </div>
	</div>
		</div>
		</div>
          </header>