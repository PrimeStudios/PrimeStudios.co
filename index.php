<?php $pageName = 'Home';
require_once('includes/header.php'); ?>
<div class="home-container">
	<div class="home-hero">
		<div id="particles-js"></div>
		<div class="typeit-container">
			<h1>We Create</h1>
			<h1><i><span id="typewriter"></span></i></h1>
			<script>
				new TypeIt("#typewriter", {
				    speed: 100,
				    deleteSpeed: 100,
				    loop: true,
				    waitUntilVisible: true
				})
				    .type("WEBSITES")
				    .pause(1000)
				    .delete(8)
				    .type("APPLICATIONS")
				    .pause(1000)
				    .delete(12)
				    .type("PRODUCTS")
				    .pause(1000)
				    .go();
			</script>
			<h1>That Work</h1>
			<p onclick="Down_Arrow()">Learn More <i class="fas fa-chevron-down"></i></p>
		</div>
		<img src="/assets/img/adaptative.png" />
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
 	 	<path fill="#ff9900" fill-opacity="1" d="M0,192L48,176C96,160,192,128,288,128C384,128,480,160,576,149.3C672,139,768,85,864,96C960,107,1056,181,1152,181.3C1248,181,1344,107,1392,69.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
	</svg>
	<div id="home_about" class="home-about">
		<div class="home-about-content">
			<h1>Prime does it different</h1>
			<div class="keypoints-container">
				<div class="keypoint-container kp-padding">
					<i class="fas fa-shipping-fast"></i>
					<h3>Fast</h3>
					<p>No one likes waiting.
					<br /> Our team works diligently to bring you a quality product in a timely matter.</p>
				</div>
				<div class="keypoint-container kp-padding">
					<i class="fas fa-user-tie"></i>
					<h3>Professional</h3>
					<p>We are committed to maintaining a professional relationship and producing adept work for our clients.</p>
				</div>
				<div class="keypoint-container kp-padding-two">
					<i class="fas fa-award"></i>
					<h3>Experienced</h3>
					<p>Our team's diverse set of skills allows us to work effectively and collaboratively to ensure a quality end product.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="home-showcase">
		<h1>Showcase</h1>
		<div class="showcase-container">
			<img src="/assets/img/showcase-11.png" />
			<img src="/assets/img/showcase-11.png" />
			<img src="/assets/img/showcase-11.png" />	
		</div>
		<p><a href="/">view more</a></p>
	</div>
	<div class="home-contact">
		<h1>Interested in our services?</h1>
		<p><a href="/">Request a Quote</a></p>
	</div>
</div>
<script>
particlesJS('particles-js',
 {
  "particles": {
    "number": {
      "value": 6,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#1b1e34"
    },
    "shape": {
      "type": "polygon",
      "stroke": {
        "width": 0,
        "color": "#000"
      },
      "polygon": {
        "nb_sides": 6
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 160,
      "random": false,
      "anim": {
        "enable": true,
        "speed": 10,
        "size_min": 40,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 200,
      "color": "#ffffff",
      "opacity": 1,
      "width": 2
    },
    "move": {
      "enable": true,
      "speed": 8,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "grab"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
);
</script>
<?php require_once('includes/footer.php'); ?>
