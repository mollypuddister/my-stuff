
	<!-- footer -->
	
	<!-- vendor scripts -->
	<!-- slide push menu -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/Slide-Push-Menus-master/dist/menu.js"></script>
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

	 	slideRightBtn.onclick = function() {
			slideRight.toggle();
	 	};

	</script>

	<!-- full page scroll -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/fullPage.js-master/jquery.fullPage.js"></script>
	<script>

		$(document).ready(function() {
			$.fn.fullpage({
				fixedElements: '#section-down, #section-up'
			});
		});

		$('#section-down').click(function(){
			$.fn.fullpage.moveSectionDown();
		});

		$('#section-up').click(function(){
			$.fn.fullpage.moveSectionUp();
		});

		$(document).ready(function() {
			$('#fullpage').fullpage();
		});

	</script>
	
</body>

</html>