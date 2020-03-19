<?php $pageName = 'Contact';
$pageLevel = 1;
include('../includes/recursivity.php');
include('../header.php'); ?>
	<div class="smallhero">
		<h1>Prime Studios</h1>
		<h2>Contact</h2> </div>
	<div class="contact">
		<div class="contact-container">
			<div class="contact-top"> <img src="../assets/img/contact.svg" />
				<p class="contact-page-text">Are you interested in our services? Looking for a quote to just looking into us a little bit more? Feel free to shoot us an email at <b title="Copy to Clipboard" onclick="copyemail()" style="cursor: pointer;">sales@primestudios.co</b> and we will respond to you within one business day!</p>
			</div>
			<p id="business_hours_header" class="business-hours-header">business hours</p>
			<table id="contact_table" style="height: 2vh; margin-bottom: 2vh;">
				<tr class="package-header-table">
					<th>Monday</th>
					<th>Tuesday</th>
					<th>Wednesday</th>
					<th>Thursday</th>
					<th>Friday</th>
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
				<form id="contactform" enctype="text/plain" action="../includes/contact.php" method="get"> <span class="contact-title"><i class="fas fa-user-tag"></i>name</span>
					<input type="text" name="name">
					<br> <span class="contact-title"><i class="fas fa-envelope"></i>email address</span>
					<input type="text" name="email">
					<br> <span class="contact-title"><i class="fas fa-money-bill-wave"></i>budget</span>
					<input type="number" name="budget" size="50" min="0">
					<br> <span class="contact-title"><i class="fas fa-comments"></i>comments</span>
					<input type="text" name="comments" size="50">
					<br>
					<input type="submit" value="submit" class="contact-submit">
			</form>
			</div>
		</div>
	</div>
	<?php include('../footer.php'); ?>
