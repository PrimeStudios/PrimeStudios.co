<?php $pageName = 'Showcase';
require_once('../includes/header.php'); ?>
<div class="showcase-container">
	<h1>Testimonials</h1>
	<div class="quotes">
		<div class="quote">
			<p><i class="fas fa-quote-left"></i>The team at Prime Studios is immensely professional and will meet or exceed your expectations! Some of the most reliable and hardworking people that I have had the pleasure in working with!<i class="fas fa-quote-right"></i></p>
			<h2>- Jacob Morgan, Political Director at Morgan Strategies LLC</h2>
		</div>
	</div>
	<h1>Showcase</h1>
	<div class="showcase-all-container">
		<img onclick="Showcase_Actual_One()" src="/assets/img/showcase-1.png" />
		<img onclick="Showcase_Actual_Two()" src="/assets/img/showcase-2.png" />
		<img onclick="Showcase_Actual_Three()" src="/assets/img/showcase-3.png" />
		<img onclick="Showcase_Actual_Four()" src="/assets/img/showcase-4.png" />
		<img onclick="Showcase_Actual_Five()" src="/assets/img/showcase-5.png" />
		<img onclick="Showcase_Actual_Six()" src="/assets/img/showcase-6.png" />
		<img onclick="Showcase_Actual_Seven()" src="/assets/img/showcase-7.png" />
		<img onclick="Showcase_Actual_Eight()" src="/assets/img/showcase-8.png" />
		<img onclick="Showcase_Actual_Nine()" src="/assets/img/showcase-9.png" />
		<img onclick="Showcase_Actual_Ten()" src="/assets/img/showcase-10.png" />
		<img onclick="Showcase_Actual_Eleven()" src="/assets/img/showcase-11.png" />
	</div>
</div>
<span onclick="Showcase_Close()" id="showcase_popup_background" class="showcase-popup-background"></span>
<div id="showcase_popup" class="showcase-popup animated zoomIn">
    <p onclick="Showcase_Close()" class="showcase-popup-close">x</p>
    <img id="showcase_popup_image_one" class="showcase-popup-image" src="/assets/img/showcase-1.png">
    <img id="showcase_popup_image_two" class="showcase-popup-image" src="/assets/img/showcase-2.png">
    <img id="showcase_popup_image_three" class="showcase-popup-image" src="/assets/img/showcase-3.png">
    <img id="showcase_popup_image_four" class="showcase-popup-image" src="/assets/img/showcase-4.png">
    <img id="showcase_popup_image_five" class="showcase-popup-image" src="/assets/img/showcase-5.png">
    <img id="showcase_popup_image_six" class="showcase-popup-image" src="/assets/img/showcase-6.png">
    <img id="showcase_popup_image_seven" class="showcase-popup-image" src="/assets/img/showcase-7.png">
    <img id="showcase_popup_image_eight" class="showcase-popup-image" src="/assets/img/showcase-8.png">
    <img id="showcase_popup_image_nine" class="showcase-popup-image" src="/assets/img/showcase-9.png">
    <img id="showcase_popup_image_ten" class="showcase-popup-image" src="/assets/img/showcase-10.png">
    <img id="showcase_popup_image_eleven" class="showcase-popup-image" src="/assets/img/showcase-11.png">
</div>
<?php require_once('../includes/footer.php'); ?>
