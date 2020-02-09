<?php
$pageName = 'About';
$pageLevel = 1;
include('../includes/recursivity.php');
include('../header.php');
?>
<div class="smallhero">
	<h1>Prime Studios</h1>
	<h2>About</h2>
</div>
<div class="about">
	<div class="about-nav-container">
		<a class="about-nav-link" href="../about"><p class="about-nav-button about-nav-active">Introduction</p></a>
		<a class="about-nav-link" href="team"><p class="about-nav-button">Our Team</p></a>
		<a class="about-nav-link" href="history"><p class="about-nav-button">Our History</p></a>
	</div>
	<div class="about-text-block main">
		<h1>Who we are</h1>
		<p>At Prime Studios, we focus on putting the client first. We strive to deliver a professional and adept product to our clients. Our team has many years of experience and skills that allow us to preform to the industry's standard - and excel in it.</p>
		<h1>Our Strategy</h1>
		<p>Throughout our operations, we are committed to maintaining a professional relationship with our clients. We understand that those who work with us put the future of their projects in our hands - and we intend to safeguard it.</p>
	</div>
</div>
<?php include('../footer.php'); ?>
