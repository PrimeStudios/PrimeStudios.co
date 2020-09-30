<?php $pageName = 'Home';
require_once('includes/header.php'); ?>
<div class="home-container">
    <div class="home-hero">
        <div id="particles-js"></div>
        <div class="typeit-container">
            <h1>We Create</h1>
            <h1><i><span id="typewriter"></span></i></h1>
            <h1>That Work</h1>
            <p onclick="Down_Arrow()">Learn More <i class="fas fa-chevron-down"></i></p>
        </div>
        <img src="/assets/img/adaptative.png" />
    </div>
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
                <div class="keypoint-container kp-padding-two">
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
        <div class="home-showcase-container">
            <img onclick="Showcase_Home_One()" src="/assets/img/showcase-11.png" />
            <img onclick="Showcase_Home_Two()" src="/assets/img/showcase-4.png" />
            <img onclick="Showcase_Home_Three()" src="/assets/img/showcase-10.png" />
        </div>
        <p><a href="/showcase">view more</a></p>
    </div>
    <div class="home-contact">
        <img src="/assets/img/contact.png" />
        <h1>Interested in our services?</h1>
        <p><a href="/contact">Request a Quote</a></p>
    </div>
</div>
<span onclick="Showcase_Close()" id="showcase_popup_background" class="showcase-popup-background"></span>
<div id="showcase_popup" class="showcase-popup animated zoomIn">
    <p onclick="Showcase_Close()" class="showcase-popup-close">x</p>
    <img id="showcase_popup_image_one" class="showcase-popup-image" src="/assets/img/showcase-11.png">
    <img id="showcase_popup_image_two" class="showcase-popup-image" src="/assets/img/showcase-4.png">
    <img id="showcase_popup_image_three" class="showcase-popup-image" src="/assets/img/showcase-10.png">
</div>
<?php require_once('includes/footer.php'); ?>
