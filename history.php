<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>History - Prime Studios</title>
		<meta name="description" content="Prime Studios is a freelance company focused on building powerful websites for our clients. We strive to provide user friendly and affordable websites through our service. Whether you want a wordpress site or a site made from scratch, we can fill all your needs with our design team's creativity."/>
		<meta name="keywords" content="Prime Studios,Web Development,Web Design,Freelancer,Web Freelancer,Web Developer">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="assets/js/pace.js"></script>
	</head>
	<body>
		<?php require('header.php') ?>
		<div class="history-container">
			<p class="history-header">Our History</p>
			<div id="timeline">
				<p class="section-description">Milestones On Our Path To Where We Are Today</p>
				<hr id="time_divider">
				<div class="history-card-wrapper">
					<div class="history-card history-card-tier-1">
						<div id="head_one" class="head">
							<div class="number-box">
								<span>2019</span>
							</div>
							<h2><span class="small">Prime Studios</span> Our Inception</h2>
						</div>
						<div class="body">
							<p>Prime Studios officially launched in December of 2019. It is here that our journey started with just two members of our team with a dream to succeed. We got a foundation and basic site down and arranged our packages and services that we would initially offer as we got the company off of it's feet.</p>
						</div>
					</div>
					<div class="history-card history-card-tier-2">
						<div id="head_two" class="head">
							<div class="number-box">
								<span>2020</span>
							</div>
							<h2><span class="small">ONE YEAR</span> DETERMINATION</h2>
						</div>
						<div class="body">
							<p>Offically opening our doors. Still writing the books of history. We start the year of strong and obtain as many clients as possible to start building our brand.</p>
						</div>
					</div>
					<div class="history-card history-card-tier-3">
						<div id="head_three" class="head">
							<div class="number-box">
								<span>20++</span>
						</div>
							<h2><span class="small">SUCCESS</span> FUTURE STEPS</h2>
						</div>
						<div class="body">
							<p>Here we look to the future and are looking forward to expanding fast. We have future focuses on more then just web development and marketing advice. We aim to open a data center and expand into many other industries.</p>
						</div>
					</div>
					<!--
					<div class="history-card history-card-tier-4">
						<div id="head_four" class="head">
							<div class="number-box">
								<span></span>
							</div>
							<h2><span class="small"></span></h2>
						</div>
						<div class="body">
							<p></p>
							</div>
					</div>
					<div class="history-card history-card-tier-5">
						<div id="head_five" class="head">
							<div class="number-box">
								<span></span>
							</div>
							<h2><span class="small"></span></h2>
						</div>
						<div class="body">
							<p></p>
						</div>
					</div>
					<div class="history-card history-card-tier-6">
						<div id="head_six" class="head">
							<div class="number-box">
								<span></span>
							</div>
							<h2><span class="small"></span></h2>
							</div>
						<div class="body">
							<p></p>
						</div>
					</div>
					-->
					<div id="circle_hider">
						<span id="circle_one"></span>
						<span id="circle_two"></span>
						<span id="circle_three"></span>
						<!-- <span id="circle_four"></span>
						<span id="circle_five"></span>
						<span id="circle_six"></span> -->
					</div>
					<div id="triangle_hider">
						<span id="triangle_one"><i class="fa fa-caret-right"></i></span>
						<span id="triangle_two"><i class="fa fa-caret-left"></i></span>
						<span id="triangle_three"><i class="fa fa-caret-right"></i></span>
						<!-- <span id="triangle_four"><i class="fa fa-caret-left"></i></span>
						<span id="triangle_five"><i class="fa fa-caret-right"></i></span>
						<span id="triangle_six"><i class="fa fa-caret-left"></i></span> -->
					</div>
				</div>
			</div>
			<br>
		</div>
		<?php require('footer.php') ?>
	</body>
	<script>
		if (document.documentMode || /Edge/.test(navigator.userAgent)) {
			document.getElementById("triangle_one").style.display = "none";
			document.getElementById("triangle_two").style.display = "none";
			document.getElementById("triangle_three").style.display = "none";
		}
		function TriangleFix() {
			if ($(window).width() < 1200) {
				document.getElementById("triangle_one").style.display = "none";
				document.getElementById("triangle_two").style.display = "none";
				document.getElementById("triangle_three").style.display = "none";
				document.getElementById("circle_one").style.display = "none";
				document.getElementById("circle_two").style.display = "none";
				document.getElementById("circle_three").style.display = "none";
			} else {
				document.getElementById("triangle_one").style.display = "block";
				document.getElementById("triangle_two").style.display = "block";
				document.getElementById("triangle_three").style.display = "block";
				document.getElementById("circle_one").style.display = "block";
				document.getElementById("circle_two").style.display = "block";
				document.getElementById("circle_three").style.display = "block";
			}
		}
		TriangleFix();
		$(window).on('resize', function() {
			if ($(window).width() < 1200) {
				document.getElementById("triangle_one").style.display = "none";
				document.getElementById("triangle_two").style.display = "none";
				document.getElementById("triangle_three").style.display = "none";
				document.getElementById("circle_one").style.display = "none";
				document.getElementById("circle_two").style.display = "none";
				document.getElementById("circle_three").style.display = "none";
			} else {
				document.getElementById("triangle_one").style.display = "block";
				document.getElementById("triangle_two").style.display = "block";
				document.getElementById("triangle_three").style.display = "block";
				document.getElementById("circle_one").style.display = "block";
				document.getElementById("circle_two").style.display = "block";
				document.getElementById("circle_three").style.display = "block";
			}
		});
	</script>
</html>