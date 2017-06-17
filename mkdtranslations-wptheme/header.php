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
<!-- Buttons quote and lessons -->
		<p class='btn-navbar btn-navbar-darkblue hidden-xs'><a href='#form-page'><?php $value = get_field('menu_btn_1'); if ($value) {
	echo $value; } else {echo 'empty';} ?></a></p>
		<p class='btn-navbar btn-navbar-purple hidden-xs'><a href='#form-page'><?php $value = get_field('menu_btn_2'); if ($value) {
	echo $value; } else {echo 'empty';} ?></a></p>
		
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
			<p><a href='<?php $value = get_field ('language_switcher_link_cs');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>'>cs</a></p>
			<p><a href='<?php $value = get_field ('language_switcher_link_en');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>'>en</a></p>
		</div>		
<!-- Hamburger icon -->
		<div class='hamburger-container'>
			<div class='hamburger'>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<p class="menutext_hamburger">MENU</p>
			
		</div>
   </div>
</header>