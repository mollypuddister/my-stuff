<?php
/*
Template Name: Home/Work Page
*/

//Display the header
//get_header();
//?>

<?php require 'includes/head.php';?>	

<body id="home">
	
	<?php require 'includes/header.php';?>
	<?php require 'includes/nav.php';?>
	
	<div id="controls">
		<a id="section-down"><?php require 'images/arrow.svg';?></a>	
	</div>

	<main id="fullpage">
		
		<article class="section uno project_post">
			<div class="hero">				
				<a class="hero_link" href="project.php">
					<h1>project tall</h1>
					<h4>2014</h4>
					<span class="strip"></span>
				</a>				
			</div>				
		</article>
		<article class="section dos project_post">
			<div class="hero">				
				<a class="hero_link" href="project.php">
					<h1>project dos</h1>
					<h4>2014</h4>
					<span class="strip"></span>
				</a>				
			</div>				
		</article>
		<article class="section tres project_post">
			<div class="hero">				
				<a class="hero_link" href="project.php">
					<h1>project tres</h1>
					<h4>2014</h4>
					<span class="strip"></span>
				</a>				
			</div>				
		</article>
		
	</main>


	<?php require 'includes/scripts.php';?>	

</body>

</html>
