<footer id="footer_big">
	<div class="footer-bottom">
		<img class="footer-logo d-none d-sm-none d-md-block d-lg-block d-xl-block" src="assets/img/logo.png">
		<p class="footer-copyright d-none d-sm-none d-md-block d-lg-block d-xl-block">&copy; 2019-<script>document.write(new Date().getFullYear())</script> Prime Studios. All Rights Reserved.</p>
		<p class="footer-copyright-small d-block d-sm-block d-md-none d-lg-none d-xl-none">&copy; <script>document.write(new Date().getFullYear())</script> Prime Studios. All Rights Reserved.</p>
		<p class="footer-privacy"><a class="footer-privacy-link d-none d-sm-none d-md-block d-lg-block d-xl-block" href="privacy">Privacy Policy</a></p>
	</div>
</footer>
<span class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
	<div id="cookie_notice" class="cookie-notice animated slideInUp">
		<p class="cookie-text">We use cookies to personalise content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media. <a class="cookie-link" href="privacy">Learn more</a>.</p>
		<p class="cookie_button" onclick="CookieAgreement()"><span class="fa fa-check"></span> I agree</p>
	</div>
</span>
<script>
	function CookieAgreement() {
		document.cookie = "cookieagreement=yes;"
		document.getElementById("cookie_notice").style.display = "none";
	}
	function getCookie(name) {
		var dc = document.cookie;
		var prefix = name + "=";
		var begin = dc.indexOf("; " + prefix);
		if (begin == -1) {
			begin = dc.indexOf(prefix);
			if (begin != 0) return null;
		}
		else
		{
			begin += 2;
			var end = document.cookie.indexOf(";", begin);
			if (end == -1) {
			end = dc.length;
			}
		}
		return decodeURI(dc.substring(begin + prefix.length, end));
	}
	function CookieAgreed() {
		var Cookieagreement = getCookie("cookieagreement");

		if (Cookieagreement == null) {
			document.getElementById("cookie_notice").style.display = "d-block";
		} else {
			document.getElementById("cookie_notice").style.display = "none";
		}
	}
	CookieAgreed()
</script>