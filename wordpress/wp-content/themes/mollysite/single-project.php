<?php get_header(); ?>

	<main class="project_page">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php $custom_class = get_post_meta($post->ID, 'post-class'); ?>

			<article id="<?php echo $post->post_name;?>" <?php post_class($custom_class); ?>>
				<header>		
					<div class="container slim title">
						<h1><?php the_title(); ?></h1>
						<h4><?php echo get_post_meta($post->ID, 'year', true); ?></h4>
					</div>				
				</header>
				
				<section class="text">
					<div class="container slim">

							<?php the_content(); ?>

						<aside>

							<?php cf_agency(); /* tidbit agency */ ?>

							<?php cf_role(); /* tidbit role */ ?>
							
						</aside>

					</div>

				</section>

				<?php acf_image(); /* regular image */ ?>

				<?php acf_image_mat(); /* matted image */ ?>


				<section class="photo-grid">
					<?php /* photo grid - 1st image */

						$image = get_field('image-grid_first');

						if( !empty($image) ): ?>
						<figure> 
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</figure>
					<?php endif; ?>

					<?php /* photo grid - 2nd image */

						$image = get_field('image-grid_middle');

						if( !empty($image) ): ?>
						<figure> 
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</figure>
					<?php endif; ?>

					<?php /* photo grid - 3rd image */

						$image = get_field('image-grid_last');

						if( !empty($image) ): ?>
						<figure> 
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</figure>
					<?php endif; ?>
					
				</section>


				<?php acf_text(); /* body copy */ ?>

				<?php acf_image_full(); /* full width photo */ ?>
				
				

			</article>

		<?php endwhile; endif; ?>	

		<?php /* next post */		
			
			$custom_class = get_post_meta($post->ID, 'post-class');
			$next_post = get_next_post();

			if( get_adjacent_post(false, '', false) ) { 

				$next_title = strip_tags(str_replace('"', '', $next_post->post_title));

					echo 
					'<section class="next '. get_post_meta($next_post->ID,'post-class',true) .'">
					

						<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="next_link">
							<div class="container slim">
								<h4>on to the next one</h4>
								<h2>'. $next_title . '</h2>
							</div>
						</a>

					</section>';

			} else { 
				$last = new WP_Query('posts_per_page=1&order=ASC&post_type=project'); $last->the_post();

					echo '<section class="next '. get_post_meta($post->ID,'post-class',true) .'">
					

						<a rel="next" href="' . get_permalink() . '" title="'. $post->post_title .'" class="next_link">
							<div class="container slim">
								<h4>on to the next one</h4>
								<h2>'. $post->post_title . '</h2>
							</div>
						</a>

					</section>';

				wp_reset_query();
			};

		?>	

	</main>

<?php get_footer(); ?>