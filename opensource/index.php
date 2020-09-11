<?php $pageName = 'Open Source';
require_once('../includes/header.php'); ?>
<div class="service-container">
	<div class="other-hero-container">
		<div class="overlay-bg">
			<h1>Open Source (WIP)</h1>
		</div>
	</div>
	<div class="breadcromb">
		<p id="os-breadcromb"><a href="/"><i class="fas fa-home"></i> Home</a> / <b>Open Source</b></p>
	</div>
	<div class="opensource-container">
		<div class="opensource-navbar">
			<p onclick="OS_Steam_Group_Count_Button()">SteamGroup Count JS</p>
			<div class="project-links-container">
				<h2><a href="https://github.com/PrimeStudios/Steam-Group-Members-JS" target="_blank"><i class="fab fa-github"></i></a></h2>
				<h2><a href="https://github.com/PrimeStudios/Steam-Group-Members-JS/archive/master.zip" target="_blank"><i class="fas fa-download"></i></a></h2>
			</div>
			<p onclick="OS_Discord_Webhooks_Button()">Discord Webhooks</p>
			<div class="project-links-container">
				<h2><a href="https://github.com/PrimeStudios/Discord-Webhooks" target="_blank"><i class="fab fa-github"></i></a></h2>
				<h2><a href="https://github.com/PrimeStudios/Discord-Webhooks/archive/master.zip" target="_blank"><i class="fas fa-download"></i></a></h2>
			</div>
			<p onclick="OS_Contact_API_Button()">Contact API</p>
			<div class="project-links-container">
				<h2><a href="https://github.com/PrimeStudios/Contact-API" target="_blank"><i class="fab fa-github"></i></a></h2>
				<h2><a href="https://github.com/PrimeStudios/Contact-API/archive/master.zip" target="_blank"><i class="fas fa-download"></i></a></h2>
			</div>
			<p onclick="OS_Website_Button()">Website</p>
			<div class="project-links-container">
				<h2><a href="https://github.com/PrimeStudios/PrimeStudios.co" target="_blank"><i class="fab fa-github"></i></a></h2>
				<h2><a href="https://github.com/PrimeStudios/PrimeStudios.co/archive/master.zip" target="_blank"><i class="fas fa-download"></i></a></h2>
			</div>
		</div>
		<div class="opensource-content">
			<div id="os-landing">
				<h1>Open Source</h1>
				<img class="os-img" src="/assets/img/opensource.png" />
				<p>Here you can find our open-source projects to use at your discretion. Use the navbar to the left to view projects and get a quick read on what they are about as well as related links. We ask that credit be given for using portions/entire projects if they are republished.</p>
			</div>
			<div id="os-sgc" class="animated fadeIn hidden">
				<h1>Steam Group Count JS</h1>
				<h2>1 / 28 / 2020</h2>
				<p>A simple JavaScript example for displaying a Steam Group's member count on your site using the Fetch API and Abdolence's X2JS Library.</p>
				<a href="https://www.codefactor.io/repository/github/primestudios/steam-group-members-js" target="_blank">
					<img src="https://camo.githubusercontent.com/e93dd77c12879b7a52f5aa720e7b894dd268ef0a/68747470733a2f2f7777772e636f6465666163746f722e696f2f7265706f7369746f72792f6769746875622f7072696d6573747564696f732f737465616d2d67726f75702d6d656d626572732d6a732f6261646765" />
				</a>
			</div>
			<div id="os-discord" class="animated fadeIn hidden">
				<h1>Discord Webhooks</h1>
				<h2>2 / 8 / 2020</h2>
				<p>This repository contains JSON Payloads for HTTP POST requests to their respective Discord Webhook embeds.</p>
			</div>
			<div id="os-contact" class="animated fadeIn hidden">
				<h1>Contact API</h1>
				<h2>2 / 12 / 2020</h2>
				<p>A Node.js application that handles contact inquires made on the Prime Studios Contact Page using Express.js and request-promise.</p>
				<a href="https://www.codefactor.io/repository/github/primestudios/contact-api" target="_blank">
					<img src="https://camo.githubusercontent.com/f18dce82dc41957f3a1c135cb8ed3c0c6a470627/68747470733a2f2f7777772e636f6465666163746f722e696f2f7265706f7369746f72792f6769746875622f7072696d6573747564696f732f636f6e746163742d6170692f6261646765" />
				</a>
			</div>
			<div id="os-website" class="animated fadeIn hidden">
				<h1>Website</h1>
				<h2>1 / 17 / 2020</h2>
				<p>This repository contains the project files for Prime Studios' Website. We've made the very site you see before you public to use as referrence and also as a testimonial to our work. Enjoy seeing first hand what the product we bring to you looks like and see how we do things.</p>
				<a href="https://app.codacy.com/gh/PrimeStudios/PrimeStudios.co/dashboard" target="_blank">
					<img src="https://camo.githubusercontent.com/409a3ac2b1c877b76353c0fd00729afb81806741/68747470733a2f2f6170692e636f646163792e636f6d2f70726f6a6563742f62616467652f47726164652f3063653936363930363938303435313639373131623562656639376530326639" />
				</a>
				<a href="https://www.codefactor.io/repository/github/primestudios/primestudios.co" target="_blank">
					<img src="https://camo.githubusercontent.com/9c31c97a1a430e4dcbded57acecb7dc44e5a8140/68747470733a2f2f7777772e636f6465666163746f722e696f2f7265706f7369746f72792f6769746875622f7072696d6573747564696f732f7072696d6573747564696f732e636f2f6261646765" />
				</a>
			</div>
		</div>
	</div>
</div>
<?php require_once('../includes/footer.php'); ?>
