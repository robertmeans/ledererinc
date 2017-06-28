<nav id="main-nav">
	<ul>


		<!-- <li class="full-height lederer-nav-logo">
	      <a href="#" class="no-active-nav back-to-top2">
	        <img class="nav-logo" src="_images/Lederer-Inc-Logo.jpg" alt="Lederer, Inc. Logo">
	      </a>
	    </li> -->



		<!-- <li class="lederer-logo"><a class="logo-link" href="#top-of-page"><img src="_images/Lederer-Inc-Logo.jpg"></a></li> -->

		<li class="logo-placeholder"></li>
		<li><a href="index.php">Home</a></li>
		<!-- <li class="lederer-nav-logo">
			<a class="nav-logo" href="index.php#top-of-page"><img src="_images/Lederer-Inc-Logo.jpg"></a>
		</li> -->

		<li><a href="index.php#services">Services</a></li>
		<li><a href="index.php#safety">Safety</a></li>
		<li><a href="index.php#associations">Associations</a></li>
		<li><a href="past-projects.php" <?php if ($layout_context == "past-projects") { echo "class=\"active-nav-stay\"";} ?>>Past Projects</a></li>
		<li><a href="about.php" <?php if ($layout_context == "about") { echo "class=\"active-nav-stay\"";} ?>>About</a></li>
		<li><a href="index.php#contact">Contact</a></li>
	</ul>
</nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <li><a href="index.php">Home</a></li>
  <a href="index.php#services">Services</a>
  <a href="index.php#safety">Safety</a>
  <a href="past-projects.php" <?php if ($layout_context == "past-projects") { echo "class=\"active-nav-stay\"";} ?>>Past Projects</a>
  <a href="about.php" <?php if ($layout_context == "about") { echo "class=\"active-nav-stay\"";} ?>>About</a>
  <a href="index.php#contact">Contact</a>
</div>