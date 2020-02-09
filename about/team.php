<?php
$pageName = 'Our History';
$pageLevel = 1;
include('../includes/recursivity.php');
include('../header.php');
?>
<div class="smallhero">
	<h1>Prime Studios</h1>
	<h2>Our Team</h2>
</div>
<div class="about">
	<div class="about-nav-container">
		<a class="about-nav-link" href="../about"><p class="about-nav-button">Introduction</p></a>
		<a class="about-nav-link" href="team"><p class="about-nav-button about-nav-active">Our Team</p></a>
		<a class="about-nav-link" href="history"><p class="about-nav-button">Our History</p></a>
	</div>
	<div class="about-text-block">
		<p class="team-header">The staff team that makes this business run.</p>
		<div class="company-director">
			<p class="employee-image"><span class="fa fa-user"></span></p>
			<p class="employee-name"><b>Michael R.</b></p>
			<p class="employee-desc">Company Director</p>
			<p class="employee-contact"><a class="link" title="Email" href="mailto:mrizzuto@encryptedlaser.com" target="_blank"><span class="fa fa-envelope"></span></a></p>
		</div>
		<div class="operations-director">
			<p class="employee-image"><span class="fa fa-user"></span></p>
			<p class="employee-name"><b>Jack C.</b></p>
			<p class="employee-desc">Company Director</p>
			<p class="employee-contact"><a class="link" title="Email" href="mailto:jconley@primestudios.co" target="_blank"><span class="fa fa-envelope"></span></a></p>
		</div>
		<div class="company-coder">
			<p class="employee-image"><span class="fa fa-user"></span></p>
			<p class="employee-name"><b>Steven D.</b></p>
			<p class="employee-desc">Web Technician</p>
		</div>
		<div class="company-gfx">
			<p class="employee-image"><span class="fa fa-user"></span></p>
			<p class="employee-name"><b>Leo C.</b></p>
			<p class="employee-desc">Graphics Designer</p>
		</div>
	</div>
</div>
<?php include('../footer.php'); ?>