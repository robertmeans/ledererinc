<?php $layout_context = "homepage"; ?>
<?php require('_includes/head.php'); ?>
<body>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-home"></i></a>
<div id="wrapper">
<?php require('_includes/nav.php'); ?>
<a href="#"><img class="lederer-hero-logo" src="_images/Lederer-Inc-Logo.jpg"></a>
<section id="hero">

	<div id="hero-overlay">
		<p>Ready to serve with:</p>
		<p>Proactive Restoration for the Future</p>
	</div>
</section>
<?php require('_includes/services.php'); ?>
<?php require('_includes/safety.php'); ?>
<?php require('_includes/associations.php'); ?>
<!-- to pacify active-nav js -->
<section id="past-projects" style="height: 0px;"></section>
<section id="about" style="height: 0px;"></section>
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