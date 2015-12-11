<!DOCTYPE html>

<html>

<?php require 'includes/head.php';?>

<body class="home">
		

	<header>
		<a id="logo">Molly Puddister</a>

		<!-- <div class="c-buttons">		 -->
			<button id="c-button--slide-right" class="menu-toggle" href="#">
				<div class="burger"></div>
			</button>			   
		<!-- </div> -->
				
	</header>

	
	<main id="fullpage">
		
		<article class="section">
			<div class="container project">				
				<a href="projects/project.php">
					<h1>contest</h1>
					<h3>2014</h3>
					<span class="strip"></span>
				</a>				
			</div>				
		</article>
		<article class="section">
			<div class="container project">				
				<a href="projects/project.php">
					<h1>another one</h1>
					<h3>2014</h3>
					<span class="strip"></span>
				</a>				
			</div>				
		</article>
	</main>


	<?php require 'includes/nav.php';?>

	<!-- vendor scripts -->
		<!-- slide push menu -->
		<script src="js/vendor/Slide-Push-Menus-master/dist/menu.js"></script>
		<script>
		
			/**
			* Slide right instantiation and action.
			*/
			var slideRight = new Menu({
				//wrapper: '#o-wrapper',
				type: 'slide-right',
				menuOpenerClass: '.menu-toggle',
				maskId: '#c-mask'
			});

			var slideRightBtn = document.querySelector('#c-button--slide-right');

			slideRightBtn.addEventListener('click', function(e) {
				e.preventDefault;
				slideRight.open();
		 	});

		</script>

		<!-- full page scroll -->
		<script type="text/javascript" src="js/vendor/fullPage.js-master/articljquery.fullPage.js"></script>

		<script>
		$(document).ready(function() {
			$('#fullpage').fullpage();
		});
		</script>

</body>

</html>
