<div class="header-container">
	<a title="Home" class="home-link" href="/"><p class="header-title">Prime Studios</p></a>
	<a id="header_menu_open" class="header-menu-toggle-link" onclick="document.getElementById('header_dropdown').style.height = '21vh'; document.getElementById('header_menu_open').style.display = 'none'; document.getElementById('header_menu_close').style.display = 'block'"><p class="header-menu-toggle"><span class="fa fa-bars"></span></p></a>
	<a id="header_menu_close" class="header-menu-toggle-link hidden" onclick="document.getElementById('header_dropdown').style.height = '0vh'; document.getElementById('header_menu_open').style.display = 'block'; document.getElementById('header_menu_close').style.display = 'none'"><p class="header-menu-toggle"><span class="fa fa-times"></span></p></a>
</div>
<div id="header_dropdown" class="header-dropdown">
	<p id="header_dropdown_title_one" class="header-dropdown-title">Services</p>
	<ul class="header-dropdown-text-position-one">
		<li class="header-dropdown-text"><a class="header-dropdown-link" href="web">Web Design</a></li>
	</ul>
	<p id="header_dropdown_title_two" class="header-dropdown-title">Information</p>
	<ul class="header-dropdown-text-position-two">
		<li class="header-dropdown-text"><a class="header-dropdown-link" href="history">Our History</a></li>
		<li class="header-dropdown-text"><a class="header-dropdown-link" href="employment">Employment</a></li>
		<li class="header-dropdown-text"><a class="header-dropdown-link" href="team">Our Team</a></li>
		<li class="header-dropdown-text"><a class="header-dropdown-link" href="contact">Contact Us</a></li>
	</ul>
</div>
<span class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
	<button onclick="scrollTopFunction()" id="TopBtn" title="Top" class="animated slideInRight">&#9650;</button>
</span>
<!--
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e0a36cc7e39ea1242a26069/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
-->
<script>
	function isInView(elem){
		return $(elem).offset().top - $(window).scrollTop() < $(elem).height();
	}
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
			document.getElementById("TopBtn").style.display = "block";
		} else {
			document.getElementById("TopBtn").style.display = "none";
		}
	}
	function scrollTopFunction() {
		window.scrollTo({top: 0, behavior: 'smooth'});
	}
	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			document.getElementById("TopBtn").style.marginBottom = "7vh";
		} else {
			document.getElementById("TopBtn").style.marginBottom = "0";
		}
	});
	function onElementHeightChange(elm, callback){
	    var lastHeight = elm.clientHeight, newHeight;
	    (function run(){
	        newHeight = elm.clientHeight;
	        if( lastHeight != newHeight )
	            callback();
	        lastHeight = newHeight;

	        if( elm.onElementHeightChangeTimer )
	            clearTimeout(elm.onElementHeightChangeTimer);

	        elm.onElementHeightChangeTimer = setTimeout(run, 200);
	    })();
	}
	onElementHeightChange(document.body, function(){
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			document.getElementById("TopBtn").style.marginBottom = "7vh";
		} else {
			document.getElementById("TopBtn").style.marginBottom = "0";
		}
	});
</script>
