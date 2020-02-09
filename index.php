<?php
$pageName = 'Home';
$pageLevel = 0;
include('includes/recursivity.php');
include('header.php');
?>
<div class="hero">
	<h1>Prime Studios</h1>
	<p>Quality, affordable development and design services.</p>
	<a onclick="document.getElementById('showcase').scrollIntoView({behavior: 'smooth'})"><i class="fas fa-chevron-down"></i></a>
</div>
<div id="showcase" class="showcase">
	<h2>Showcase</h2>
	<div class="container">
		<img class="showcase-item" src="assets/img/showcase-1.png">
		<img class="showcase-item" src="assets/img/showcase-2.png">
		<img class="showcase-item" src="assets/img/showcase-3.png">
	</div>
	<p class="home-project-list"><a class="home-project-link" href="#">View More Here <span class="hover-left-padding fas fa-arrow-circle-right"></span></a></p>
</div>
<div class="quote">
	<a href="#">
		<button>Request a Quote</button>
	</a>
</div>
<div class="features">
	<div class="card">
		<i class="fas fa-shipping-fast"></i>
		<h3>Fast</h3>
		<p>No one likes waiting. <br /> Our team works diligently to bring you a quality product in a timely matter.</p>
	</div>
	<div class="card">
		<i class="fas fa-user-tie"></i>
		<h3>Professional</h3>
		<p>We are committed to maintaining a professional relationship and producing adept work for our clients.</p>
	</div>
	<div class="card">
		<i class="fas fa-award"></i>
		<h3>Experienced</h3>
		<p>Our team's diverse set of skills allows us to work effectively and collaboratively to ensure a quality end product.</p>
	</div>
</div>
<?php include('footer.php'); ?>
