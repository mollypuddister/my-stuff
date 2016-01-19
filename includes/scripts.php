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

	 	slideRightBtn.onclick = function() {
			slideRight.toggle();
	 	};

	</script>

	<!-- full page scroll -->
	<script type="text/javascript" src="js/vendor/fullPage.js-master/jquery.fullPage.js"></script>
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
		
		$('#fullpage').on('slid', '', checkitem);  // on caroussel move

		$(document).ready(function(){               // on document ready
		    checkitem();
		});

		function checkitem(){                   // check function
		  var $this = 		$('#fullpage');
		  var $controls = 	$('#controls');
		  var $up = 		$('#section-up');
		  var $down = 		$('#section-down');
		  
			if($('.fullpage-wrapper article:first').hasClass('active')) {
				$up.hide();

			} else if($('.fullpage-wrapper article:last-child').hasClass('active')) {
				$down.hide();
			}
			// } else {
			// 	$controls.children.show();
			// } 
		}


	</script>