<?php $pageName = 'Our History';
$pageLevel = 2;
include('../../includes/recursivity.php');
include('../../header.php'); ?>
	<div id="about" class="smallhero">
		<h1>Prime Studios</h1>
		<h2>Our History</h2> </div>
	<div class="about">
		<div class="about-nav-container">
			<a class="about-nav-link" href="/about">
				<p class="about-nav-button">Introduction</p>
			</a>
			<a class="about-nav-link" href="/about/team">
				<p class="about-nav-button">Our Team</p>
			</a>
			<a class="about-nav-link" href="/about/history">
				<p class="about-nav-button about-nav-active">Our History</p>
			</a>
		</div>
		<div class="about-text-block">
			<div id="timeline">
				<p class="section-description">Milestones On Our Path To Where We Are Today</p>
				<br>
				<div class="history-card-wrapper">
					<div class="history-card history-card-tier-1">
						<div id="head_one" class="head">
							<div class="number-box"> <span>2019</span> </div>
							<h2><span class="small">Prime Studios</span> Our Inception</h2> </div>
						<div class="body">
							<p>Prime Studios officially launched in December of 2019. It is here that our journey started with just one member of our team with a dream to succeed. We got a foundation and basic site down and arranged our packages and services that we would initially offer as we got the company off of it's feet.</p>
						</div>
					</div>
					<div class="history-card history-card-tier-2">
						<div id="head_two" class="head">
							<div class="number-box"> <span>2020</span> </div>
							<h2><span class="small">ONE YEAR</span> DETERMINATION</h2> </div>
						<div class="body">
							<p>Officially opening our doors. Still writing the books of history. We start the year off strong with one goal in mind to obtain as many clients as possible to start building our brand. We also brought a second person onto the team in form of an Operations Director in charge of infrastructure related operations. With this came a new refreshing design for our site.</p>
						</div>
					</div>
					<div class="history-card history-card-tier-3">
						<div id="head_three" class="head">
							<div class="number-box"> <span>20++</span> </div>
							<h2><span class="small">SUCCESS</span> FUTURE STEPS</h2> </div>
						<div class="body">
							<p>Here we look to the future and are looking forward to expanding fast. We have future focuses on more then just web development and marketing advice. We aim to open a data center and expand into many other industries.</p>
						</div>
					</div>
					<div id="circle_hider"> <span id="circle_one"></span> <span id="circle_two"></span> <span id="circle_three"></span> </div>
					<div id="triangle_hider"> <span id="triangle_one"><i class="fa fa-caret-right"></i></span> <span id="triangle_two"><i class="fa fa-caret-left"></i></span> <span id="triangle_three"><i class="fa fa-caret-right"></i></span> </div>
				</div>
			</div>
		</div>
	</div>
	<?php include('../../footer.php'); ?>
