<!DOCTYPE html>

<html>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php wp_title(''); ?></title>
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


	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('siteurl'); ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('siteurl'); ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('siteurl'); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('siteurl'); ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('siteurl'); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('siteurl'); ?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#56fce5">
	<meta name="msapplication-TileImage" content="<?php bloginfo('siteurl'); ?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#56fce5">

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!-- modernizr -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	<style>
		.js #fouc {display: none; }
	</style>
	<script>
		document.documentElement.className = 'js';
	</script>


<body>

	<header>
		<h3><a id="logo" href="<?php echo site_url( '/' ); ?>">Molly Puddister</a></h3>
		<p id="tagline">A collection of my best work.</p>


		<button id="c-button--slide-right" class="menu-toggle" href="#">
			<div class="burger"></div>
		</button>
		
	</header>

	
	<nav id="c-menu--slide-right" class="c-menu c-menu--push-right">
		
		<?php wp_nav_menu( array(
			'menu'		=> 'Header Nav', 
			'container' => '',
			'items_wrap'=> '<ul id="menu" class="c-menu__items">%3$s</ul>'

		)); ?>

		<div id="meta">
			<p>Website design and development <span>&#169;</span> 2016 Molly Puddister</p>
		</div>
			
	</nav><!-- /c-menu push-right -->

	<!-- nav open overlay -->
	<div id="c-mask" class="c-mask"></div><!-- /c-mask -->
	