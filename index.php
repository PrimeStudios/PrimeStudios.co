<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home - Prime Studios</title>
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
		<div class="home-container">
			<div class="home-top">
				<p class="home-top-header">The Most Ambitious Creators</p>
				<p id="down_arrow" onclick="document.getElementById('home_middle').scrollIntoView({behavior: 'smooth'})"><span class="fa fa-angle-double-down"></span></p>
			</div>
			<div id="home_middle" class="home-middle">
				<div class="home-middle-body">
					<p class="home-middle-header">Who Are We?</p>
					<p class="home-middle-text">Here at Prime Studios, we focus on putting the client first. It is our goal to ensure 100% satisfaction of everyone we work with. We strive to privide a professional and effective site to our clients. Collectively we have many years of experience with skills that allow us to preform to the industry's standard and excell in it. The best part is that we do it all together at a competetive yet affordable price so it does not cost our clients an arm and a leg to have a powerful website for whatever their heart desires. See what our clients have to say!</p>
					<div class="home-middle-div">
						<p class="home-middle-header-two">What Do We Offer?</p>
						<div class="home-middle-text-button">
							<a href="web" class="link"><p><span class="fa fa-code"></span></p></a>
							<a href="web" class="link"><p class="home-button-text animated slideInUp">Web Development</p></a>
						</div>
					</div>
					<p class="home-middle-header-three">What Makes Us Reputable?</p>
					<p class="home-middle-text-two">We have plenty of clients that can speak for our work. You can hear from a few below.</p>
					<div id="home_middle_bottom" class="home-middle-bottom">
						<div class="slideshow-container">
							<p id="quote_header">Reviews from our Clients</p>
							<div class="home-arrow-fix">
								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next left" onclick="plusSlides(1)">&#10095;</a>
							</div>
							<div class="quotes animated zoomIn">
								<q>My bakery needed a website and fast. We were ready to grow our online presence and expand our clientele. Overall the employees here are good people and did everything in their power to satisfy my needs. In the end I got more than just a website, I got a way to grow my business with awsome marketing tools.</q>
								<p class="author">- Elaine Miller</p>
								<p class="black"><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span></p>
							</div>
							<div class="quotes hidden animated zoomIn">
								<q>Excellent work. They were very professional and got the job done fast. I'll be sure to come back to them in the future for updates!</q>
								<p class="author">- Tom O'Sullivan</p>
								<p class="black"><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span></p>
							</div>
							<div class="quotes hidden animated zoomIn">
								<q>I struggled getting my business an online presence. They helped me all the way and brought me a product I love.</q>
								<p class="author">- Leo Chen</p>
								<p class="black"><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star gold"></span><span class="fa fa-star-o gold"></span></p>
							</div>
						</div>
						<div class="dot-container">
							<span class="dot active" onclick="currentSlide(1)"></span>
							<span class="dot" onclick="currentSlide(2)"></span>
							<span class="dot" onclick="currentSlide(3)"></span>
						</div>
					</div>
				</div>
				<div class="contact-div">
					<p class="contact-header">Interested in our Services?</p>
					<p class="contact-text"><a class="contact-link" href="contact"><span class="fa fa-mail-forward"></span> Contact Us</a></p>
				</div>
			</div>
		</div>
		<?php require('footer.php') ?>
	</body>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides (n) {
			showSlides(slideIndex += n);
		}

		function currentSlide (n) {
			showSlides(slideIndex = n);
		}
		function showSlides (n) {
			var i;
			var slides = document.getElementsByClassName('quotes');
			var dots = document.getElementsByClassName('dot');
			if (n > slides.length) { slideIndex = 1; }
			if (n < 1) { slideIndex = slides.length; }
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = 'none';
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(' active', '');
			}
			slides[slideIndex - 1].style.display = 'block';
			dots[slideIndex - 1].className += ' active';
		}
	</script>
</html>
