<!DOCTYPE html>
<html>
	<head>
		<!-- Meta Tags -->
		<title><?php echo $pageName;?> - Prime Studios</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta charset="UTF-8">
		<meta name="description" content="Prime Studios is a freelance company focused on building powerful websites for our clients. We strive to provide user-friendly and affordable websites through our service. Whatever your needs, we can fill all your needs with our design team's creativity">
		<meta name="keywords" content="Prime Studios,Web Development,Web Design,Freelancer,Web Freelancer,Web Developer">
		<meta name="robots" content="index, follow">
		<meta name="copyright" content="Prime Studios">
		<meta name="language" content="EN">
		<meta name="author" content="Prime Studios">
		<meta name="creationdate" content="12/01/2019">
		<meta name="distribution" content="global">
		<meta name="rating" content="general">
		<meta http-equiv="X-UA-Compatible" content="IE=edge;" />
		<meta name="msapplication-TileColor" content="#FFA500">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#FFA500">
		<!-- Favicons -->
		<link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
		<link rel="manifest" href="/assets/img/site.webmanifest">
		<link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#8899a6">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<!-- TypeIt -->
		<script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
		<!-- Custom Stylesheet -->
		<link href="/assets/css/styles.css" rel="stylesheet" />
		<link href="/assets/css/animate.css" rel="stylesheet" />
		<link href="/assets/css/checkbox.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
		<!-- Main JavaScript -->
		<script src="/assets/js/main.js"></script>
		<script src="/assets/js/particles.js"></script>
	</head>
	<body>
		<p class="header-announcement"><i class="fas fa-envelope"></i> <a href="mailto:sales@primestudios.co" target="_blank">sales@primestudios.co</a> <b>&nbsp;|&nbsp;</b> <i class="fas fa-phone"></i> <a href="tel:7174957161" target="_blank">+1 (717) 495-7161</a> <b>&nbsp;|&nbsp;</b> <i class="far fa-clock"></i> Mon-Fri 9AM - 5PM</p>
		<div class="header">
			<a class="header-img-link" href="/" title="Home"><img src="/assets/img/logo.png" /></a>
			<h1><a class="header-h1-link" href="/" title="Home">Prime Studios</a></h1>
			<ul>
				<li><a href="/">home</a></li>
				<li><a href="/about">about</a></li>
				<li class="dropdown-trigger">services <i class="fas fa-chevron-down"></i></li>
				<div class="dropdown">
					<img src="/assets/img/triangle_navbar.png" />
					<ul>
						<li><a href="/web">Web Design</a></li>
						<li><a href="/graphic">Graphic Design</a></li>
						<li><a href="/sysadmin">SysAdmin</a></li>
						<li><a href="/opensource">Open Source</a></li>
					</ul>
				</div>
			</ul>
			<h2><a href="/contact">CONTACT</a></h2>
			<h3><i id="mobile_dropdown_toggle" class="fas fa-bars"></i></h3>
			<div onclick="toggleNavbar()" class="mobile-dropdown-toggle"></div>
		</div>
		<div id="mobile_dropdown" class="mobile-dropdown">
			<ul>
				<a href="/"><li>Home</li></a>
				<a href="/about"><li>About</li></a>
				<a href="/web"><li>Web Design</li></a>
				<a href="/graphic"><li>Graphic Design</li></a>
				<a href="/sysadmin"><li>SysAdmin</li></a>
				<a href="/opensource"><li>Open Source</li></a>
				<a href="/contact"><li>Contact</li></a>
			</ul>
		</div>
