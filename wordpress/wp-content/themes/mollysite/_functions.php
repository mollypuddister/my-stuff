<?php 

function site_setup () {
 
	// reset
	wp_enqueue_style( 'html5-doctor-reset-stylesheet.min', get_template_directory_uri() . '/styles/vendor/html5-doctor-reset-stylesheet.min.css', array(), '1.1', 'all');

	// vendor styles
		//push menu
		wp_enqueue_style( 'style', get_template_directory_uri() . '/styles/vendor/Slide-Push-Menus-master/css/style.css', array(), '1.1', 'all');
		
		// full page scroll
		wp_enqueue_style( 'jquery.fullPage', get_template_directory_uri() . '/styles/vendor/fullPage.js-master/jquery.fullPage.css', array(), '1.1', 'all');

	//styles
	wp_enqueue_style( 'style', get_stylesheet_uri() );


	 
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}

?>