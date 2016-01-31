<!DOCTYPE html>

<html>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- <title>Molly Puddister</title> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> -->
	<meta name="viewport" content="width=640, maximum-scale=1, user-scalable=no, target-densitydpi=device-dpi">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<!-- fonts -->
	<link href='https://fonts.googleapis.com/css?family=Mate:400,400italic' rel='stylesheet' type='text/css'>
	
	<!-- styles -->
	
		<!-- vendor styles -->
			<!-- slide push menu -->
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/vendor/Slide-Push-Menus-master/css/style.css">
			
			<!-- full page scroll -->
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/vendor/fullPage.js-master/jquery.fullPage.css" />

		<!-- html5 reset -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/vendor/html5-doctor-reset-stylesheet.min.css">

		<!-- main stylesheet -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!-- modernizr -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<body>

	<header>
		<h3><a id="logo" href="/">Molly Puddister</a></h3>

		<button id="c-button--slide-right" class="menu-toggle" href="#">
			<div class="burger"></div>
		</button>
		
	</header>
	
	<!-- site nav -->
	<nav id="c-menu--slide-right" class="c-menu c-menu--push-right">
		<!-- <button class="c-menu__close close"><img src="images/close.svg" alt="close"></button> -->
		<ul id="menu" class="c-menu__items">
			<li><a class="nav-work" href="index.php">work</a></li>
			<li><a class="nav-about" href="about.php">me</a></li>
		</ul>	
		<div id="meta">
			<p>	Copyright 2016 
				<br/>Designed & Developed 
				<br/>by Molly Puddister
			</p>
		</div>
			
	</nav><!-- /c-menu push-right -->

	<!-- nav open overlay -->
	<div id="c-mask" class="c-mask"></div><!-- /c-mask -->
	