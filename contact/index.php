<?php
$pageName = 'Contact';
$pageLevel = 1;
include('../includes/recursivity.php');
include('../header.php');
?>
<div class="smallhero">
	<h1>Prime Studios</h1>
	<h2>Contact</h2>
</div>
<div class="contact">
	<div class="contact-container">
		<p class="contact-page-text">Are you interested in our services? Looking for a quote to just looking into us a little bit more? Feel free to shoot us an email at <b>sales@primestudios.co</b> and we will respond to you within one business day!</p>
		<p class="business-hours-header"><i><b>Business Hours</b></i></p>
		<table style="height: 2vh; margin-bottom: 2vh;">
		  	<tr class="package-header-table">
			    <th><b>Mon</b></th>
			    <th><b>Tue</b></th>
			    <th><b>Wed</b></th>
			    <th><b>Thu</b></th>
			    <th><b>Fri</b></th>
		  	</tr>
		  	<tr class="package-table-white">
			    <th>9AM-5PM EST</th>
			    <th>9AM-5PM EST</th>
			    <th>9AM-5PM EST</th>
			    <th>9AM-5PM EST</th>
			    <th>9AM-5PM EST</th>
		  	</tr>
		</table>
		<div id="contact_form" class="contact-form">
			<form action="mailto:sales@primestudios.co" method="post" enctype="text/plain" target="_blank">
			<span class="contact-title">Name:</span><br>
			<input type="text" name="name"><br>
			<span class="contact-title">E-mail:</span><br>
			<input type="text" name="email"><br>
			<span class="contact-title">Requirements:</span><br>
			<input type="text" name="comment" size="50"><br>
			<span class="contact-title">Budget:</span><br>
			<input type="number" name="budget" size="50"><br>
			<span class="contact-title">Comments:</span><br>
			<input type="text" name="budget" size="50"><br><br>
			<input type="submit" value="Send">
			</form>
		</div>
	</div>
</div>
<?php include('../footer.php'); ?>
