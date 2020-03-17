<?php $pageName = 'Showcase';
$pageLevel = 1;
include('../includes/recursivity.php');
include('../header.php'); ?>
	<div class="smallhero full_showcase-hero">
		<h1>Prime Studios</h1>
		<h2>Full Showcase</h2>
	</div>
	<div class="showcase">
		<div class="full_showcase">
			<p class="showcase-title"><b>below you can find all of the projects we have worked on so far.</b></p>
			<div class="container">
				<img
				 onclick="document.getElementById('showcase_popup').classList.remove('zoomOut'); document.getElementById('showcase_popup').style.display = 'block'; document.getElementById('showcase_popup_image_one').style.display = 'block'; document.getElementById('showcase_popup_image_two').style.display = 'none'; document.getElementById('showcase_popup_image_three').style.display = 'none'; document.getElementById('showcase_popup_background').style.display = 'block';"
				 class="showcase-item" src="../assets/img/showcase-1.png">
				<img
				 onclick="document.getElementById('showcase_popup').classList.remove('zoomOut'); document.getElementById('showcase_popup').style.display = 'block'; document.getElementById('showcase_popup_image_one').style.display = 'none'; document.getElementById('showcase_popup_image_two').style.display = 'block'; document.getElementById('showcase_popup_image_three').style.display = 'none'; document.getElementById('showcase_popup_background').style.display = 'block';"
				 class="showcase-item" src="../assets/img/showcase-2.png">
				<img
				 onclick="document.getElementById('showcase_popup').classList.remove('zoomOut'); document.getElementById('showcase_popup').style.display = 'block'; document.getElementById('showcase_popup_image_one').style.display = 'none'; document.getElementById('showcase_popup_image_two').style.display = 'none'; document.getElementById('showcase_popup_image_three').style.display = 'block'; document.getElementById('showcase_popup_background').style.display = 'block';"
				 class="showcase-item" src="../assets/img/showcase-3.png">
			</div>
		</div>
	</div>
	<span
	 onclick="document.getElementById('showcase_popup').classList.add('zoomOut'); document.getElementById('showcase_popup_background').style.display = 'none'; setTimeout(function() {document.getElementById('showcase_popup').style.display ='none';}, 300);"
	 id="showcase_popup_background" class="showcase-popup-background"></span>
	<div id="showcase_popup" class="showcase-popup animated zoomIn">
		<p
		 onclick="document.getElementById('showcase_popup').classList.add('zoomOut'); document.getElementById('showcase_popup_background').style.display = 'none'; setTimeout(function() {document.getElementById('showcase_popup').style.display ='none';}, 300);"
		 class="showcase-popup-close">x</p>
		<img id="showcase_popup_image_one" class="showcase-popup-image" src="../assets/img/showcase-1.png">
		<img id="showcase_popup_image_two" class="showcase-popup-image" src="../assets/img/showcase-2.png">
		<img id="showcase_popup_image_three" class="showcase-popup-image" src="../assets/img/showcase-3.png">
	</div>
<?php include('../footer.php'); ?>
