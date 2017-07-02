<?php $layout_context = "homepage"; ?>
<?php require('_includes/head.php'); ?>
<body>
<div id="top-of-page"></div>
<a href="#" class="back-to-top">Top</a>
<div id="wrapper">

<span onclick="openNav()" class="mobile-toggle"><img src="_images/mobile-nav-icon.png"></span>

<?php require('_includes/nav.php'); ?>
<img class="lederer-hero-logo" src="_images/Lederer-Inc-Logo.jpg">
<section id="hero">

	<div id="hero-overlay">
		<span class="position-overlay-text">
			<p>Ready to serve with:</p>
			<ul>
				<li>Pre-disturbance Monitoring</li>
				<li>Soil Sampling</li>
				<li>Ground Preparation</li>
			</ul>
			<ul>
				<li>Seeding</li>
				<li>Mulching</li>
				<li>Monitoring/Data Collection</li>
			</ul>	
		</span>
			<p class="cursive">Proactive Restoration for the Future</p>
	</div>
</section>
<?php require('_includes/services.php'); ?>
<?php require('_includes/safety.php'); ?>
<?php require('_includes/associations.php'); ?>
<!-- to pacify active-nav js -->
<section id="past-projects" style="height: 0px; margin: 0px; padding: 0px;"></section>
<section id="about" style="height: 0px; margin: 0px; padding: 0px;"></section>
<!-- end -->
<section id="contact">
  <script>
    function recaptchaCallback() {
        $('#confirm').addClass('display');
        $('#send').removeAttr('disabled');
        $('#send').removeClass('display');
    };
  </script>
	<h2>Contact</h2>
	<div id="contact-form">
		<div class="left-side">
			<p>5786 South Garland Way</p>
			<p>Littleton, CO 80123</p>
			<p>&nbsp;</p>
			<p>Phone: 303.941.7817</p>
			<p>Fax: 303.973.9358</p>
		</div>
		<div class="right-side">
		<?php require('_includes/contact-form-processing.php'); ?>
		    
	    </div>
	</div>
	<footer>	
		<p><?= ewd_copyright(2017); ?> Lederer, Inc. | <a class="footer-link" href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
	</footer>
</section><!-- #contact -->

</div><!-- #wrapper -->

<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>