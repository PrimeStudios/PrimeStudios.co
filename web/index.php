<?php
$pageName = 'Web Services';
$pageLevel = 1;
include('../includes/recursivity.php');
include('../header.php');
?>
<div id="services" class="smallhero web-hero">
	<h1>Prime Studios</h1>
	<h2>Web Development Services</h2>
</div>
<div class="web-services">
	<p>Prime Studios offers a variety of web services to our clients. Our team has been working in the industry for several years and will ensure a high quality product. We utilize modern technologies and custom frameworks to provide a unique product to our consumers.</p>
	<p>We don't have set plans or pricing, our team works tailored to your needs. No matter how simple or complex your next project, we got you covered.</p>
	<div class="technologies">
		<img src="../assets/img/technologies/bootstrap.png" />
		<img src="../assets/img/technologies/css.png" />
		<img src="../assets/img/technologies/foundation.png" />
		<img src="../assets/img/technologies/html.png" />
		<img src="../assets/img/technologies/javascript.png" />
		<img src="../assets/img/technologies/jquery.png" />
		<img src="../assets/img/technologies/mysql.png" />
		<img src="../assets/img/technologies/nodejs.png" />
		<img src="../assets/img/technologies/php.png" />
		<img src="../assets/img/technologies/uikit.png" />
	</div>
</div>
<div class="showcase web-showcase">
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
	<p class="home-project-list"><a class="home-project-link" href="#">view more</a></p>
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
<div class="quote web-quote">
	<a href="/contact">
		<button>Request a Quote</button>
	</a>
</div>
<?php include('../footer.php'); ?>
