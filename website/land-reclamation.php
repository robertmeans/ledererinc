<?php $layout_context = "land-reclamation"; ?>
<?php require('_includes/head.php'); ?>
<body>
<div id="top-of-page"></div>
<a href="#" class="back-to-top">Top</a>
<div id="wrapper">
<span onclick="openNav()" class="mobile-toggle"><img src="_images/mobile-nav-icon.png"></span>
<?php require('_includes/nav2.php'); ?>

<section id="land-reclamation">
	<h2>Land Reclamation</h2>
	<span class="intro">
		<p>Land reclamation is the process of restoring an area to its natural state after damage has occured. </p>
		
		

	</span>
<?php require('_includes/footer.php'); ?>
</section><!-- #land-reclamation -->

</div><!-- #wrapper -->

<!-- to pacify active-nav js -->
<section id="services" style="height: 0px; margin: 0px; padding: 0px;"></section>
<section id="safety" style="height: 0px; margin: 0px; padding: 0px;"></section>
<section id="associations" style="height: 0px; margin: 0px; padding: 0px;"></section>
<section id="past-projects" style="height: 0px; margin: 0px; padding: 0px;"></section>
<section id="contact" style="height: 0px; margin: 0px; padding: 0px;"></section>
<!-- end -->
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>