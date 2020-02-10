<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageName; ?> - Prime Studios</title>
		<meta name="title" content="<?php echo $pageName; ?> | Prime Studios">
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
	</head>
	<body>
		<div class="header">
			<img src="<?php echo adjustRecursivity(); ?>assets/img/logo.png">
			<p class="header-title">Prime Studios</p>
			<ul>
				<li <?php if ($pageName=='Home' ) {echo 'class="active"';}?>><a href="/">Home</a></li>
				<li <?php if ($pageName == 'About' || $pageName == 'Our Team' || $pageName == 'Our History') {echo 'class="active"';}?>><a href="/about">About</a></li>
				<li class="header-dropdown-button">Services <i class="fas fa-angle-down"></i></li>
				<div class="header-dropdown">
					<p class="hd-web-design"><a href="#">Web Design</a></p>
					<p class="hd-sys-admin"><a href="#">Sys Admin</a></p>
				</div>
			</ul>
		</div>
