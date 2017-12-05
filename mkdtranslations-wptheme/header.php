<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

   

    <title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<header>

<!-- NAVIGATION -->
	<div class="navigation-container">
<!-- Slogan for medium and large screens only -->
		
		<p class='slogan hidden-xs hidden-sm'><?php the_field ('header_slogan_first');
				?> <span><?php the_field ('header_slogan_middle');
				?></span> <?php the_field ('header_slogan_last');
				?></p>
<!-- Buttons quote and lessons -->
		<p class='btn-navbar btn-navbar--translation hidden-xs'><a href='#form-page'><?php the_field('menu_btn_1') ?></a></p>
		<p class='btn-navbar btn-navbar--teaching hidden-xs'><a href='#form-page'><?php the_field('menu_btn_2') ?></a></p>
		
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
		<div class='language-switcher language-switcher--homepage'>
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
		<div class='hamburger-container flex-center-column'>
			<div class='hamburger-subcontainer'>
				<div class='hamburger'>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<p class="menutext_hamburger">MENU</p>
			</div>
			
		</div>
   </div>
	<div class='cookie-bar'>
			<p class='cookie-bar__text'><?php the_field('cookie_bar'); ?> <a class='cookie-bar__link'><?php the_field('cookie_bar_link'); ?></a></p>
			
			
			
	</div> 
</header>