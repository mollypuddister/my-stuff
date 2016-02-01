<?php get_header(); ?>

	<main class="project_page">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article id="<?php echo $post->post_name;?>" class="uno">
				<header>		
					<div class="container slim title">
						<h1><?php the_title(); ?></h1>
						<h4><?php echo get_post_meta($post->ID, 'year', true); ?></h4>
					</div>				
				</header>
				
				<section class="text">
					<div class="container slim">

							<!-- paragraph copy -->
							<?php the_content(); ?>

						<aside>

							<!-- tidbit agency -->
							<?php cf_agency(); ?>


							<!-- tidbit role -->
							<?php cf_role(); ?>
							
						</aside>

					</div>

				</section>

				<?php acf_image(); ?>

				<?php acf_image_mat(); ?>


				<section class="photo-grid">
					
					<?php acf_image_grid(); ?>
					
				</section>

				<section class="text">
					<div class="container slim">
						<p>
							My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?
						</p>
					</div>
				</section>

				<section>
					<img src="http://lorempixel.com/1240/800/abstract/">
				</section>

				<section class="next dos">
					<a class="next_link" href="">
						<div class="container slim">
							<h4>on to the next one</h4>
							<h2>project words</h2>
						</div>
					</a>
				</section>

			</article>

		<?php endwhile; endif; ?>
		

	</main>

<?php get_footer(); ?>