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
        <nav class="navigation_right">
			<?php 
			
			$defaults = array(
			'container' => false,
			'theme_location' => 'primary-menu')
				;
			wp_nav_menu('defaults');
			?>
		<!--
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#translation">translation ></a></li>
                <li><a href="#process">translation process</a></li>
				<li><a href="#pricing">pricing</a></li>
					
                <li><a href="#teaching">teaching ></a></li>
                <li><a href="#how_i_teach">how I teach</a></li>
				 <li><a href="learnfrench.html">learn French</a></li>
				 <li><a href="learnpolish.html">learn Polish</a></li>
				<li><a href="termsandconditions.html">terms and condtions</a></li>
                <li><a href="#blog">blog</a></li>
                <li><a href="#contact">contact</a></li>

            </ul>-->
            </nav>
            <div id="nav-icon4">
            <span></span>
            <span></span>
            <span></span>
        </div>
            </div>
</header>