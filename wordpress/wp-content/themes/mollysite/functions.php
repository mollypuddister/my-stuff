<?php 

// ----- menu -----
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

	// Cleanup WP Menu html
	add_filter('nav_menu_css_class', 'css_attributes_filter', 100, 1);
	add_filter('nav_menu_item_id', 'css_attributes_filter', 100, 1);
	add_filter('page_css_class', 'css_attributes_filter', 100, 1);
	function css_attributes_filter($var) {
		return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
	}


// ----- custom fields ----- 
	//tidbit agency
	function cf_agency($post_ID) {

		global $wpdb;
		if(!wp_is_post_revision($post_ID)) {

			$cf = get_post_meta( get_the_ID(), 'agency', true );

			if( ! empty( $cf ) ) {
				echo '<div class="tidbit agency"><h5>Agency</h5><p class="tidbit-detail">'. $cf .'</p></div>';
			}

		}
	}

	//tidbit role
	function cf_role($post_ID) {

		global $wpdb;
		if(!wp_is_post_revision($post_ID)) {

			$cf = get_post_meta( get_the_ID(), 'my role', true );

			if( ! empty( $cf ) ) {
				echo '<div class="tidbit role"><h5>My Role</h5><p class="tidbit-detail">'. $cf .'</p></div>';
			}

		}
	}

	//tidbit agency
	function cf_awards($post_ID) {

		global $wpdb;
		if(!wp_is_post_revision($post_ID)) {

			$cf = get_post_meta( get_the_ID(), 'awards', true );

			if( ! empty( $cf ) ) {
				echo '<div class="tidbit awards"><h5>Awards</h5><p class="tidbit-detail">'. $cf .'</p></div>';
			}

		}
	}

	//regular image - fits into container
	function acf_image($post_ID) {
		
		$image = get_field('image');

			if( !empty($image) ) {
				echo
				'<section>
					<div class="container">
						<img src="'. $image['url'] .'" alt="'. $image['alt'] .'" />
					</div>
				</section>';
			}

	}

		//mobile only image
		function acf_image_mobile($post_ID) {
		
		$image = get_field('image-mobile');

			if( !empty($image) ) {
				echo
				'<section>
					<div class="container">
						<img src="'. $image['url'] .'" alt="'. $image['alt'] .'" />
					</div>
				</section>';
			}

		}

		//desktop only image
		function acf_image_desktop($post_ID) {
		
		$image = get_field('image-desktop');

			if( !empty($image) ) {
				echo
				'<section>
					<div class="container">
						<img src="'. $image['url'] .'" alt="'. $image['alt'] .'" />
					</div>
				</section>';
			}

		}

	// matted image - has background
	function acf_image_mat($post_ID) {
		
		$image = get_field('image-mat');

			if( !empty($image) ) {
				echo
				'<section class="photo-mat">
					<div class="container">
						<img src="'. $image['url'] .'" alt="'. $image['alt'] .'" />
					</div>
				</section>';
			}

	}

	// full width image
	function acf_image_full($post_ID) {
		
		$image = get_field('image-full');

			if( !empty($image) ) {
				echo
				'<section>
					<img src="'. $image['url'] .'" alt="'. $image['alt'] .'" />
				</section>';
			}

	}

	// text
	function acf_text($post_ID) {
		
		$body_copy = get_field('text');

			if( !empty($body_copy) ) {
				echo
				'<section class="text">
						<div class="container slim">
							<p>'. $body_copy .'</p>
						</div>
					</section>';
			}

	}

	


?>