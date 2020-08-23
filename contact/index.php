<?php $pageName = 'Contact';
require_once('../includes/header.php'); ?>
<div class="contact-container">
	<h1>Contact Us</h1>
	<img src="/assets/img/contact.svg" />
	<p>Are you interested in our services? Looking for a quote to just looking into us a little bit more? Feel free to shoot us an email at <b title="Copy to Clipboard" onclick="copyemail()" style="cursor: pointer;">sales@primestudios.co</b> and we will respond to you within one business day!</p>
	<h2>Our Schedule</h2>
	<table>
		<tr class="package-header-table">
			<th class="package-header-th">Monday</th>
			<th class="package-header-th">Tuesday</th>
			<th class="package-header-th">Wednesday</th>
			<th class="package-header-th">Thursday</th>
			<th class="package-header-th">Friday</th>
		</tr>
		<tr class="package-table-white">
			<th>9AM-5PM EST</th>
			<th>9AM-5PM EST</th>
			<th>9AM-5PM EST</th>
			<th>9AM-5PM EST</th>
			<th>9AM-5PM EST</th>
		</tr>
  	</table>
	<form action="https://formspree.io/mnqgyooe" method="POST">
		<span class="contact-title"><i class="fas fa-user-tag"></i> name</span>
		<br />
		<input type="text" name="name">
		<br />
		<span class="contact-title"><i class="fas fa-envelope"></i> email address</span>
		<br />
		<input type="email" name="_replyto">
		<br />
		<span class="contact-title"><i class="fas fa-comments"></i> comments</span>
		<br />
		<input type="text" name="comment">
		<br />
		<span class="contact-title"><i class="fas fa-money-bill-wave"></i> budget</span>
		<br />
		<input type="number" name="budget">
		<br />
		<input type="submit" value="Send">
	</form>
</div>
<?php require_once('../includes/footer.php'); ?>
