<?php
$pageName = 'System Administration Services';
$pageLevel = 1;
include('../includes/recursivity.php');
include('../header.php');
?>
<div class="smallhero sysadmin-hero">
	<h1>Prime Studios</h1>
	<h2>System Administration Services</h2>
</div>
<div class="sysadmin-services">
	<p>We provide configuration and management for web servers on both Windows and Linux. We're capable of assisting in data and content migration upon request. Configuration also covers the cost of domain registration if necessary. No matter your needs, don't worry about the technical side of your website - rely on us to do the hard part for you. </p>
	<div class="technologies">
		<img src="../assets/img/technologies/centos.png" />
		<img src="../assets/img/technologies/debian.png" />
		<img src="../assets/img/technologies/fedora.png" />
		<img src="../assets/img/technologies/linux.png" />
		<img src="../assets/img/technologies/ubuntu.png" />
		<img src="../assets/img/technologies/windows.png" />
	</div>
</div>
<div class="quote sysadmin-quote">
	<a href="/contact">
		<button>Request a Quote</button>
	</a>
</div>
<script>
	window.addEventListener('resize', HeaderFix);

	function HeaderFix() {
	    if (window.innerWidth > 1000) {
		    document.getElementById('sysadmin_header').style.fontWeight = '500';
		} else {
			document.getElementById('sysadmin_header').style.fontWeight = '900';
		}
	}
	HeaderFix();
</script>
<?php include('../footer.php'); ?>
