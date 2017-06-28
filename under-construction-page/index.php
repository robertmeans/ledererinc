<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lederer, Inc - Proactive Restoratoin for the Future</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="_scripts/custom-modernizr.js?<?php echo time(); ?>"></script>
	<link rel="stylesheet" href="styles.css?<?php echo time(); ?>">	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">

</head>
<body onload="document.forms[0].name.focus();">
<div id="bg-div-one">
  <img src="_images/under-construction-opacity.png" alt="Under Construction">
</div>
<div id="wrapper">
<header>
	<h1>Lederer, Inc <span class="subheader">- Formerly CDL Habitat Restoration</span></h1>
	<img src="_images/under-construction.png" alt="Under Construction">
</header>
<section id="left-side">

<h2>Proactive Restoration for the Future</h2>
	<ul>
	<li>Monitoring- pre-disturbance, vegetation and wildlife</li>
	<li>Planning- area specific prescription</li>
	<li>Soil Management- soil testing, mapping, amendments, fertilizer, managment</li>
	<li>Weed Control- invasive species, mowing, herbicide application</li>
	<li>Erosion Control- straw mulch, erosion blankets, straw waddles, silt fence</li>
  <li>Re-Vegetation- ground preparation, drill seeding, broadcast seeding, and nursery plants</li>
  <li>Supplemental water</li>
  <li>Analysis- site conditions, weather station</li>
  <li>Reporting- Well specific, GIS mapping, database management</li>
	</ul>

</section>
<section id="right-side">
	<p>While our Website is under construction please feel free to contact us for more information.</p>
    <form action="mail-to-me.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
        
    <ul>
        <li>
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" tabindex="10" />
        </li>
        <li>
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" tabindex="20" />
        </li>
        <li>
          <label class="text" for="comments">Comments</label>
          <textarea name="comments" id="comments" tabindex="30"></textarea>
        </li>
        <li>
            <input id="send" type="submit" value="Send" tabindex="40" />
        </li>
        
    </ul> 
    
    </form>

</section>

<?php include '_includes/footer.php' ?>

</div><!-- #wrapper -->

<script type="text/javascript" src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>