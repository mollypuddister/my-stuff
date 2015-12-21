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
	<script type="text/javascript" src="js/vendor/fullPage.js-master/jquery.fullPage.js"></script>

	<script>
	$(document).ready(function() {
		$('#fullpage').fullpage();
	});
	</script>