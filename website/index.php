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

<?php require('_includes/footer.php'); ?><!-- includes #contact -->

</div><!-- #wrapper -->

<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>