<?php
$pageName = '404';
$pageLevel = 1;
include('../includes/recursivity.php');
include('../header.php');
?>
<style>

</style>
<div class="notfound">
	<p class="notfound-heading">Page Not Found</p>
	<p class="notfound-description">We couldn't find the requested resource. Try heading <a href="/">back to home</a>.</p>
		<img src="../assets/img/404-not-found.svg"/>
</div>
<?php include('../footer.php'); ?>
