<?php $pageName = 'Open Source';
require_once('../includes/header.php'); ?>
<div class="service-container">
	<div class="other-hero-container">
		<div class="overlay-bg">
			<h1>Open Source (WIP)</h1>
		</div>
	</div>
	<div class="breadcromb">
		<p><a href="/"><i class="fas fa-home"></i> Home</a> / <b>Open Source</b></p>
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
				<img src="/assets/img/opensource.png" />
				<p>Here you can find our open-source projects to use at your discretion. Use the navbar to the left to view projects and get a quick read on what they are about as well as related links. We ask that credit be given for using portions/entire projects if they are republished.</p>
			</div>
			<div id="os-sgc" class="animated fadeIn hidden">
				<h1>Steam Group Count JS</h1>
				<h2>1 / 28 / 2020</h2>
				<p>A simple JavaScript example for displaying a Steam Group's member count on your site using the Fetch API and Abdolence's X2JS Library.</p>
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
			</div>
			<div id="os-website" class="animated fadeIn hidden">
				<h1>Website</h1>
				<h2>1 / 17 / 2020</h2>
				<p>This repository contains the project files for Prime Studios' Website.</p>
			</div>
		</div>
	</div>
</div>
<?php require_once('../includes/footer.php'); ?>
