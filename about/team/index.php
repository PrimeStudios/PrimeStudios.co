<?php $pageName = 'About';
require_once('../../includes/header.php'); ?>
<div class="about-container">
	<div class="about-navbar">
		<a href="/about"><p>Introduction</p></a>
		<a href="/about/team"><p class="about-active">Our Team</p></a>
		<a href="/about/history"><p>Our History</p></a>
	</div>
	<div class="about-content-two">
		<h1>Get to Meet Our Team</h1>
		<h2>Executive Management</h2>
		<div class="about-staff-container">
			<div class="about-staff-div">
				<img src="/assets/img/ceo.png" />
				<p>Michael Rizzuto<br />CEO</p>
			</div>
			<div class="about-staff-div staff-padding">
				<img src="/assets/img/cio.png" />
				<p>Jack Conley<br />CIO</p>
			</div>
		</div>
	</div>
</div>
<?php require_once('../../includes/footer.php'); ?>
