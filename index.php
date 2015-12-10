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


	<main>
		
		<article>
			<div class="container project">				
				<a href="projects/project.php">
					<h1>contest</h1>
					<h3>2014</h3>
					<span class="strip"></span>
				</a>				
			</div>				
		</article>
	</main>




	<nav id="c-menu--slide-right" class="c-menu c-menu--push-right">
		<button class="c-menu__close close"><img src="images/close.svg" alt="Close"></button>
		<ul id="menu" class="c-menu__items">
			<li><a class="nav-work" href="/">Work</a></li>
			<li><a class="nav-me" href="/about">Me</a></li>
		</ul>		
	</nav><!-- /c-menu push-right -->


	<div id="c-mask" class="c-mask"></div><!-- /c-mask -->


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

</body>

</html>
