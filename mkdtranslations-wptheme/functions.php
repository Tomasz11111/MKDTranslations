<?php 

add_theme_support(' menus ');

function register_theme_menus() {
	register_nav_menus(
		array(
		'primary-menu' => __('Primary menu')
		
		)
	);
}
add_action('init', 'register_theme_menus');

	function mkd_theme_styles() {
		
		wp_enqueue_style('bootstrap_css' , 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('googlenunito_css', 'https://fonts.googleapis.com/css?family=Nunito:300,400,600,900&amp;subset=latin-ext');
		wp_enqueue_style('googlesourceserif_css', 'https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600');
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
		wp_enqueue_script('scrollreveal_js', get_template_directory_uri(). '/js/scrollreveal.min.js', '', '', false);
		
	}

add_action( 'wp_enqueue_scripts', 'mkd_theme_js' );

add_action( 'wp_footer', 'mycustom_wp_footer' );
 
	function mycustom_wp_footer() {
		?>
		<script type="text/javascript">
			document.addEventListener("DOMContentLoaded", function(event) {
				var wpcf7elm = document.querySelectorAll('div.wpcf7');
				console.log(wpcf7elm);
				for (var i=0; i < wpcf7elm.length; i++) {
					
					wpcf7elm[i].addEventListener( 'wpcf7mailsent', function(event){
						console.log('tak');

								var $this = event.target,
									defaultOutput,
									paragraphs = $this.getElementsByTagName('p'),
									formContainer = $this.parentElement;
						

							for(var i = 0; i < paragraphs.length; i++) {
									paragraphs[i].classList.add('hidden');
							}
						var rspMsg = $this.lastChild;
						setTimeout(function() {
							rspMsg.style.display = 'none';
							formContainer.classList.add('hidden');
						}, 2500);






					},false);
				}
			});
				
				
			
		</script>
		<?php
	}
	

add_filter( 'show_admin_bar', '__return_false' );
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
		
		?>