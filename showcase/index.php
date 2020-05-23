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
			<p class="showcase-title"><b>what do our clients say</b></p>
			<div class="quote-person-group">
				<span id="quote_one" class="animated zoomIn">
					<p class="quote-positioner"><span class="quote-left-img fas fa-quote-right"></span>&nbsp;<span class="quote-actual">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>&nbsp;<span class="quote-right-img fas fa-quote-left"></span></p>
					<p class="quote-person"><span style="color: #1E90FF;"><b>- Lorem Ipsum</b></span></p>
					<p class="quote-person"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
				</span>
				<span id="quote_two" class="hidden animated zoomIn">
					<p class="quote-positioner"><span class="quote-left-img fas fa-quote-right"></span>&nbsp;<span class="quote-actual">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>&nbsp;<span class="quote-right-img fas fa-quote-left"></span></p>
					<p class="quote-person"><span style="color: #1E90FF;"><b>- Lorem Ipsum</b></span></p>
					<p class="quote-person"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
				</span>
				<span id="quote_three" class="hidden animated zoomIn">
					<p class="quote-positioner"><span class="quote-left-img fas fa-quote-right"></span>&nbsp;<span class="quote-actual">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>&nbsp;<span class="quote-right-img fas fa-quote-left"></span></p>
					<p class="quote-person"><span style="color: #1E90FF;"><b>- Lorem Ipsum</b></span></p>
					<p class="quote-person"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
				</span>
				<p class="quote-selector">
					<span onclick="Quote_Selector_One()" id="quote_one_chose" class="hover fas fa-circle"></span><span onclick="Quote_Selector_One()" id="quote_one_not" class="hover far fa-circle hidden"></span>
					<span onclick="Quote_Selector_Two()" id="quote_two_chose" class="hover fas fa-circle hidden"></span><span onclick="Quote_Selector_Two()" id="quote_two_not" class="hover far fa-circle"></span>
					<span onclick="Quote_Selector_Three()" id="quote_three_chose" class="hover fas fa-circle hidden"></span><span onclick="Quote_Selector_Three()" id="quote_three_not" class="hover far fa-circle"></span>
				</p>
			</div>
			<p class="showcase-title"><b>below you can find all of the projects we have worked on so far.</b></p>
			<div class="container">
				<img onclick="Showcase_Actual_One()" class="showcase-item" src="../assets/img/showcase-1.png">
				<img onclick="Showcase_Actual_Two()" class="showcase-item" src="../assets/img/showcase-2.png">
				<img onclick="Showcase_Actual_Three()" class="showcase-item" src="../assets/img/showcase-3.png">
			</div>
			<div class="container">
				<img onclick="Showcase_Actual_Four()" class="showcase-item" src="../assets/img/showcase-4.png">
				<img onclick="Showcase_Actual_Five()" class="showcase-item" src="../assets/img/showcase-5.png">
				<img onclick="Showcase_Actual_Six()" class="showcase-item" src="../assets/img/showcase-6.png">
			</div>
			<div class="container">
				<img onclick="Showcase_Actual_Seven()" class="showcase-item" src="../assets/img/showcase-7.png">
				<img onclick="Showcase_Actual_Eight()" class="showcase-item" src="../assets/img/showcase-8.png">
			</div>
		</div>
	</div>
	<span onclick="Showcase_Close()" id="showcase_popup_background" class="showcase-popup-background"></span>
	<div id="showcase_popup" class="showcase-popup animated zoomIn">
		<p onclick="Showcase_Close()" class="showcase-popup-close">x</p>
		<img id="showcase_popup_image_one" class="showcase-popup-image" src="../assets/img/showcase-1.png">
		<img id="showcase_popup_image_two" class="showcase-popup-image" src="../assets/img/showcase-2.png">
		<img id="showcase_popup_image_three" class="showcase-popup-image" src="../assets/img/showcase-3.png">
		<img id="showcase_popup_image_four" class="showcase-popup-image" src="../assets/img/showcase-4.png">
		<img id="showcase_popup_image_five" class="showcase-popup-image" src="../assets/img/showcase-5.png">
		<img id="showcase_popup_image_six" class="showcase-popup-image" src="../assets/img/showcase-6.png">
		<img id="showcase_popup_image_seven" class="showcase-popup-image" src="../assets/img/showcase-7.png">
		<img id="showcase_popup_image_eight" class="showcase-popup-image" src="../assets/img/showcase-8.png">
	</div>
	<?php include('../footer.php'); ?>
