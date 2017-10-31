<?php switch ($layout_context) {
case 'homepage': // includes #contact otherwise does not ?>
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
	<?php require('_includes/footer-content.php'); ?>
</footer>
</section><!-- #contact -->
<?php
    break;
default: ?>
<footer>	
	<?php require('_includes/footer-content.php'); ?>
</footer>
<?php
    break;
	}
?>	















	