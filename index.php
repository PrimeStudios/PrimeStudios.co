<?php
$pageName = 'Home';
$pageLevel = 0;
include('includes/recursivity.php');
include('header.php');
?>
<div class="hero">
	<h1>prime studios</h1>
	<p>Quality, affordable development and design services.</p>
	<a onclick="document.getElementById('features').scrollIntoView({behavior: 'smooth'})"><i class="fas fa-chevron-down"></i></a>
</div>
<div id="features" class="features">
	<h2>Prime does it different</h2>
	<div class="container">
		<div class="card">
			<i class="fas fa-shipping-fast"></i>
			<h3>Fast</h3>
			<p>No one likes waiting. <br /> Our team works diligently to bring you a quality product in a timely matter.</p>
		</div>
		<div class="card">
			<i class="fas fa-user-tie"></i>
			<h3>Professional</h3>
			<p>We are committed to maintaining a professional relationship and producing adept work for our clients.</p>
		</div>
		<div class="card">
			<i class="fas fa-award"></i>
			<h3>Experienced</h3>
			<p>Our team's diverse set of skills allows us to work effectively and collaboratively to ensure a quality end product.</p>
		</div>
	</div>
</div>
<div class="showcase">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#FFFFFF" fill-opacity="1"
		 d="M0,64L40,85.3C80,107,160,149,240,144C320,139,400,85,480,90.7C560,96,640,160,720,197.3C800,235,880,245,960,229.3C1040,213,1120,171,1200,138.7C1280,107,1360,85,1400,74.7L1440,64L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
		</path>
	</svg>
	<h2>Showcase</h2>
	<div class="container">
		<img
		 onclick="document.getElementById('showcase_popup').style.display = 'block'; document.getElementById('showcase_popup_image_one').style.display = 'block'; document.getElementById('showcase_popup_image_two').style.display = 'none'; document.getElementById('showcase_popup_image_three').style.display = 'none'; document.getElementById('showcase_popup_background').style.display = 'block';"
		 class="showcase-item" src="assets/img/showcase-1.png">
		<img
		 onclick="document.getElementById('showcase_popup').style.display = 'block'; document.getElementById('showcase_popup_image_one').style.display = 'none'; document.getElementById('showcase_popup_image_two').style.display = 'block'; document.getElementById('showcase_popup_image_three').style.display = 'none'; document.getElementById('showcase_popup_background').style.display = 'block';"
		 class="showcase-item" src="assets/img/showcase-2.png">
		<img
		 onclick="document.getElementById('showcase_popup').style.display = 'block'; document.getElementById('showcase_popup_image_one').style.display = 'none'; document.getElementById('showcase_popup_image_two').style.display = 'none'; document.getElementById('showcase_popup_image_three').style.display = 'block'; document.getElementById('showcase_popup_background').style.display = 'block';"
		 class="showcase-item" src="assets/img/showcase-3.png">
	</div>
	<p class="home-project-list"><a class="home-project-link" href="#">view more</a></p>
</div>
<span onclick="document.getElementById('showcase_popup').style.display ='none'; document.getElementById('showcase_popup_background').style.display = 'none';" id="showcase_popup_background" class="showcase-popup-background"></span>
<div id="showcase_popup" class="showcase-popup animated zoomIn">
	<p onclick="document.getElementById('showcase_popup').style.display ='none'; document.getElementById('showcase_popup_background').style.display = 'none';" class="showcase-popup-close">x</p>
	<img id="showcase_popup_image_one" class="showcase-popup-image" src="assets/img/showcase-1.png">
	<img id="showcase_popup_image_two" class="showcase-popup-image" src="assets/img/showcase-2.png">
	<img id="showcase_popup_image_three" class="showcase-popup-image" src="assets/img/showcase-3.png">
</div>
<div class="quote">
	<a href="contact">
		<button>Request a Quote</button>
	</a>
</div>
<script>
	window.addEventListener('resize', HeaderFix);

	function HeaderFix() {
	    if (window.innerWidth > 1000) {
		    document.getElementById('home_header').style.fontWeight = '500';
		} else {
			document.getElementById('home_header').style.fontWeight = '900';
		}
	}
	HeaderFix();
</script>
<?php include('footer.php'); ?>
