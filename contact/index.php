<?php $pageName = 'Contact';
require_once('../includes/header.php'); ?>
<div class="contact-container">
	<div class="other-hero-container">
		<div class="overlay-bg">
			<h1>Contact</h1>
		</div>
	</div>
	<div class="breadcromb">
		<p><a href="/"><i class="fas fa-home"></i> Home</a> / <b>Contact</b></p>
	</div>
	<h1>Get in touch with us</h1>
	<img src="/assets/img/contact.svg" />
	<p>Are you interested in our services? Looking for a quote or just looking into us a little bit more? Feel free to shoot us an email at <b title="Copy to Clipboard" onclick="copyemail()" style="cursor: pointer;">sales@primestudios.co</b> and we will respond to you within one business day!</p>
	<h2>Our Pricing</h2>
	<div class="price-container">
		<div class="price-box">
			<ul>
				<li><b class="upscale">Basic</b></li>
				<li class="desc">Perfect for the small business seeking a low-cost online identity</li>
				<li class="price">$<b class="upscale-two">750+</b> USD</li>
				<li class="point top"><i class="fas fa-check"></i> 5-10 Static Pages</li>
				<li class="point"><i class="fas fa-check"></i> Delivered in seven business days</li>
				<li class="point"><i class="fas fa-check"></i> Fully Responsive</li>
				<li class="point"><i class="fas fa-check"></i> Setup, Domian, and Hosting</li>
				<li class="point"><i class="fas fa-check"></i> 9AM-5PM Technical Support</li>
				<li class="point bottom"><i class="fas fa-check"></i> Free SSL</li>
			</ul>
		</div>
		<div class="price-box">
			<ul>
				<li><b class="upscale">Large</b></li>
				<li class="desc">Ideal for seeking labor for large applications and projects</li>
				<li class="price">$<b class="upscale-two">3,000+</b> USD</li>
				<li class="point top"><i class="fas fa-check"></i> Basic Package Benfits</li>
				<li class="point"><i class="fas fa-check"></i> E-Commerce</li>
				<li class="point"><i class="fas fa-check"></i> Future Updates</li>
				<li class="point"><i class="fas fa-check"></i> 24/7 Technical Support</li>
				<li class="point"><i class="fas fa-check"></i> All Services Included</li>
				<li class="point bottom"><i class="fas fa-check"></i> Adaptable To Needs</li>
			</ul>
		</div>
	</div>
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
		<br />
		<input type="text" name="name" required>
		<br />
		<br />
		<span class="contact-title"><i class="fas fa-envelope"></i> email address</span>
		<br />
		<br />
		<input type="email" name="_replyto" required>
		<br />
		<br />
		<span class="contact-title"><i class="fas fa-comments"></i> comments</span>
		<br />
		<br />
		<textarea type="text" name="comment" required></textarea>
		<br />
		<br />
		<span class="contact-title"><i class="fas fa-money-bill-wave"></i> budget</span>
		<br />
		<br />
		<input type="number" name="budget" required>
		<br />
		<br />
		<span class="contact-title"><i class="fas fa-list"></i> requirements:</span><br><br>
		<br />
		<div class="pretty p-default p-curve p-thick p-smooth">
			<input id="webdesign" type="checkbox" name="webdesign" size="50">
			<div class="state p-warning">
				<label for="webdesign">Web Design</label>
			</div>
		</div>
		<br />
		<br />
		<div class="pretty p-default p-curve p-thick p-smooth">
			<input id="graphic" type="checkbox" name="graphic" size="50">
			<div class="state p-warning">
				<label for="graphic">Graphic Design</label>
			</div>
		</div>
		<br />
		<br />
		<div class="pretty p-default p-curve p-thick p-smooth">
			<input id="sysadmin" type="checkbox" name="sysadmin" size="50">
			<div class="state p-warning">
				<label for="sysadmin">SysAdmin</label>
			</div>
		</div>
		<br />
		<br />
		<div class="pretty p-default p-curve p-thick p-smooth">
			<input id="seo" type="checkbox" name="seo" size="50">
			<div class="state p-warning">
				<label for="seo">SEO</label>
			</div>
		</div>
		<br />
		<br />
		<div class="pretty p-default p-curve p-thick p-smooth">
			<input id="other" type="checkbox" name="other" size="50">
			<div class="state p-warning">
				<label for="other">Other (Put in comments)</label>
			</div>
		</div>
		<br />
		<br />
		<input type="submit" value="Send">
	</form>
</div>
<?php require_once('../includes/footer.php'); ?>
