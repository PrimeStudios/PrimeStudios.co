<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Contact Us - Prime Studios</title>
		<meta name="description" content="Prime Studios is a freelance company focused on building powerful websites for our clients. We strive to provide user friendly and affordable websites through our service. Whether you want a wordpress site or a site made from scratch, we can fill all your needs with our design team's creativity."/>
		<meta name="keywords" content="Prime Studios,Web Development,Web Design,Freelancer,Web Freelancer,Web Developer">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="assets/js/pace.js"></script>
	</head>
	<body>
		<?php require('header.php') ?>
		<div class="contact-container">
			<p class="contact-page-header">Contact</p>
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
				<span class="contact-title">Comment:</span><br>
				<input type="text" name="comment" size="50"><br><br>
				<input type="submit" value="Send">
				</form>
			</div>
		</div>
		<?php require('footer.php') ?>
	</body>
	<script>
		if (document.documentMode || /Edge/.test(navigator.userAgent)) {
			document.getElementById("contact_form").style.marginBottom = "0";
		}
	</script>
</html>