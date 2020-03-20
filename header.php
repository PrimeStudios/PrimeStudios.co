<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title><?php echo $pageName; ?> - Prime Studios</title>
		<meta name="title" content="<?php echo $pageName; ?> - Prime Studios">
		<meta name="description" content="Prime Studios is a freelance company focused on building powerful websites for our clients. We strive to provide user-friendly and affordable websites through our service. Whatever your needs, we can fill all your needs with our design team's creativity.">
		<meta name="keywords" content="Prime Studios,Web Development,Web Design,Freelancer,Web Freelancer,Web Developer">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">
		<meta name="author" content="PrimeStudios">
		<link rel="icon" type="image/x-icon" href="<?php echo adjustRecursivity(); ?>assets/img/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" />
		<link rel="stylesheet" href="<?php echo adjustRecursivity(); ?>assets/css/styles.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo adjustRecursivity(); ?>assets/css/animate.css">
		<script src="<?php echo adjustRecursivity(); ?>assets/js/main.js"></script>;
	</head>

	<body>
		<span class="header-container">
			<div class="header">
				<div class="left">
					<a href="/"><img src="<?php echo adjustRecursivity(); ?>assets/img/logo.png" />
						<h1>prime studios</h1>
					</a>
				</div>
				<div id="right" class="right">
					<a <?php if ($pageName=='Home') {echo 'class="active"';}?>href="/">
						<p <?php if ($pageName=='Home') {echo 'style="font-weight: bold;"';}?> id="home_header">Home</p>
					</a>
					<a <?php if ($pageName == 'About' || $pageName == 'Our Team' || $pageName == 'Our History') {echo 'class="active"';}?>href="/about">
						<p <?php if ($pageName == 'About' || $pageName == 'Our Team' || $pageName == 'Our History') {echo 'style="font-weight: bold;"';}?> id="about_header">About</p>
					</a>
					<a class="<?php if ($pageName == 'Web Services' || $pageName == 'System Administration Services' || $pageName == 'Open Source') {echo 'active ';}?>services">
						<p <?php if ($pageName == 'Web Services' || $pageName == 'System Administration Services' || $pageName == 'Open Source') {echo 'style="font-weight: bold;"';}?>>Services <span class="fas fa-caret-down"></span></p>
						<div class="idvservices">
							<a href="/web">
								<p <?php if ($pageName=='Web Services' ) {echo 'style="font-weight: bold;"';}?> id="web_header">Web Services</p>
							</a>
							<a href="/sysadmin">
								<p <?php if ($pageName=='System Administration Services' ) {echo 'style="font-weight: bold;"';}?> id="sysadmin_header">System Administration Services</p>
							</a>
							<a href="/open-source">
								<p <?php if ($pageName=='Open Source' ) {echo 'style="font-weight: bold;"';}?> id="open_source_header">Open Source</p>
							</a>
						</div>
					</a>
				</div>
				<p id="open_header" class="header-bars" onclick="document.getElementById('right').style.display = 'initial'; document.getElementById('open_header').style.display = 'none'; document.getElementById('close_header').style.display = 'block';"><span class="bars-border"><i class="fas fa-bars"></i></span></p>
				<p id="close_header" class="header-bars hidden" onclick="document.getElementById('right').style.display = 'none'; document.getElementById('open_header').style.display = 'block'; document.getElementById('close_header').style.display = 'none';"><span class="bars-border-two"><i class="fas fa-times"></i></span></p>
			</div>
			<div class="browser-support-banner">
				<p><i class="fas fa-exclamation-triangle"></i> This site does not fully provide support for your browser.</p>
			</div>
		</span>
