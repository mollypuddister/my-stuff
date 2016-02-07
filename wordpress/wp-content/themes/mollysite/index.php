<?php get_header(); 

/*
	Template Name: Home/Work Page
*/

?>
	
	<div id="controls">
		<a id="section-down"><?php include '../images/arrow.svg'; ?></a>
	</div>

	<main id="fullpage" class="home">		
		
		<?php 
			$args = array('post_type' => 'project');
			$the_query = new WP_Query ($args);
		?>

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<article id="<?php echo $post->post_name;?>" class="section project_post">
			<div class="hero">				
				<a class="hero_link" href="<?php the_permalink(); ?>">
					<h1><?php the_title(); ?></h1>
					<h4><?php echo get_post_meta($post->ID, 'year', true); ?></h4>
					<!-- <span class="strip"></span> -->
				</a>				
			</div>	
		
		</article>

		<?php endwhile; endif; ?>
		
		
	</main>

<?php get_footer(); ?>