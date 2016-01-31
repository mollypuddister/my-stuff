<?php get_header(); 

/*
	Template Name: Work
*/
?>

	<main id="fullpage" class="home">
		<div id="controls">
			<a id="section-down"><?php include 'images/arrow.svg';?></a>	
		</div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		<article class="section uno project_post">
			<div class="hero">				
				<a class="hero_link" href="project.php">
					<h1><?php post_title(); ?></h1>
					<h4><?php post_meta(); ?></h4>
					<span class="strip"></span>
				</a>				
			</div>				
		</article>

		<?php endwhile; endif; ?>

		<?php 

			$args = array('post_type' => 'project');
			$the_query = new WP_Query ($args);
		?>
		
	</main>

<?php get_footer(); ?>
