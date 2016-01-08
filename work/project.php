<?php require '../includes/projects-head.php';?>

<body class="project">
	
	<?php require '../includes/header.php';?>

	<main>

		<article>
			<header>		
				<div class="container title">
					<h1>contest</h1>
					<h3>2014</h3>
				</div>				
			</header>
			
			<section class="container">
				<p>
					My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?
				</p>

				<aside>
					<div class="tidbit agency">
						<h4>Agency</h4>
						<p class="tidbit-detail">Visible Media Inc.</p>
					</div>

					<div class="tidbit role">
						<h4>Role</h4>
						<p  class="tidbit-detail">UI UX, Project Management</p>
					</div>
					
				</aside>



			</section>

		</article>
		
		<!-- <article>
			<header>
				<div class="hero">
					<img src="http://lorempixel.com/1240/800/abstract/" alt="">	
				</div>
				<div class="title">
					<h1>contest</h1>
					<h3>2014</h3>
				</div>
			</header>	
				
			</div>				
		</article> -->

	</main>


	<?php require '../includes/nav.php';?>

	<!-- vendor scripts -->
	<!-- slide push menu -->
	<script src="../js/vendor/Slide-Push-Menus-master/dist/menu.js"></script>
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
	<script type="text/javascript" src="../js/vendor/fullPage.js-master/jquery.fullPage.js"></script>

	<script>
	$(document).ready(function() {
		$('#fullpage').fullpage();
	});
	</script>

</body>

</html>
