<?php 

add_theme_support(' menus ');

function register_theme_menus() {
	register_nav_menus(
		array(
		'primary-menu' => __('Primary menu'),
		'sidepage-menu' => __('Sidepage menu')
		)
	);
}
add_action('init', 'register_theme_menus');

	function mkd_theme_styles() {
		
		wp_enqueue_style( 'bootstrap_css' , 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style( 'googlenunito_css', 'https://fonts.googleapis.com/css?family=Nunito:300,400,600,900&amp;subset=latin-ext');
		wp_enqueue_style(' googledroid_css', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,400i');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('backgroundvideo_css', get_template_directory_uri() . '/jquery.background-video.css');
		
	}

add_action( 'wp_enqueue_scripts', 'mkd_theme_styles' );

	function mkd_theme_js() {
		
		wp_enqueue_script(' bootstrap_js', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), ''. false);
		wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', false );
		wp_enqueue_script('lazy_js', 'http://cdn.jsdelivr.net/jquery.lazy/1.7.4/jquery.lazy.min.js', array('jquery'), '', false);
		wp_enqueue_script('jquerymobile_js', get_template_directory_uri(). '/js/jquery.mobile.custom.min.js', array('jquery'), '', false);
		wp_enqueue_script('backgroundvideo_js', get_template_directory_uri(). '/js/jquery.background-video.js', array('jquery'), '', false);
		wp_enqueue_script('googlemap_js',		'http://maps.googleapis.com/maps/api/js?key=AIzaSyCKTWa1GvwK0w-D5Y9ca5Or1ZFnLJDzy_Q', array('jquery'), '', false);  
		wp_enqueue_script( 'acf-custom-colors', get_template_directory_uri() . '/js/aw-colors.js', array('jquery'), 'acf-input', '1.0', true );
		wp_enqueue_script('scrollreveal_js', get_template_directory_uri(). '/js/scrollreveal.min.js', '', '', false);
		
	}

add_action( 'wp_enqueue_scripts', 'mkd_theme_js' );

add_filter( 'show_admin_bar', '__return_false' );
		
		?>