<?php 

add_theme_support(' menus ');

function register_theme_menus() {
	register_nav_menus(
		array(
		'primary-menu' => __('Primary menu'),
		'footer-menu' => __('Footer menu')
		)
	);
}
add_action('init', 'register_theme_menus');

	function mkd_theme_styles() {
		
		wp_enqueue_style( 'bootstrap_css' , 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style( 'googlelato_css', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900');
		wp_enqueue_style(' googledroid_css', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,400i');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	}

add_action( 'wp_enqueue_scripts', 'mkd_theme_styles' );

	function mkd_theme_js() {
		
		wp_enqueue_script(' bootstrap_js', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), ''. false);
		wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', false );
	}
add_action( 'wp_enqueue_scripts', 'mkd_theme_js' );
		
		?>