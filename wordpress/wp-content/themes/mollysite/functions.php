<?php 


// add_action('publish_page', 'add_custom_field_automatically');
// add_action('publish_post', 'add_custom_field_automatically');

function cf_agency($post_ID) {

	global $wpdb;
	if(!wp_is_post_revision($post_ID)) {

		$cf = get_post_meta( get_the_ID(), 'agency', true );

		if( ! empty( $cf ) ) {
			echo '<div class="tidbit agency"><h5>Agency</h5><p class="tidbit-detail">'. $cf .'</p></div>';
		}

	}
}

function cf_role($post_ID) {

	global $wpdb;
	if(!wp_is_post_revision($post_ID)) {

		$cf = get_post_meta( get_the_ID(), 'my role', true );

		if( ! empty( $cf ) ) {
			echo '<div class="tidbit role"><h5>My Role</h5><p class="tidbit-detail">'. $cf .'</p></div>';
		}

	}
}


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

function acf_image_grid($post_ID) {

	$grid = array();

	foreach( array('image-grid_first', 'image-grid_middle', 'image-grid_last') as $k ) {
		
		$image = get_field('image-grid');
		
		if( $image ) {
			
			$grid[ $k ] = $image;
		}
		
	}

	if( !empty($grid) ) {
		
		echo
			'<figure> 
				<img src="'. $image['url'] .'" alt="'. $image['alt'] .'" />
			</figure>';
	}

}

// function acf_image_grid($post_ID) {
	
// 	$image = get_field('image-grid_first');

// 		if( !empty($image) ) {
// 			echo
// 			'<figure> 
// 				<img src="'. $image['url'] .'" alt="'. $image['alt'] .'" />
// 			</figure>';
// 		}

// }


?>