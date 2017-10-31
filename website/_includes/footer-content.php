<?php
	function ewd_copyright($startYear) {
		$currentYear = date('Y');
		if ($startYear < $currentYear) {
			$currentYear = date('y');
			return "&copy; $startYear&ndash;$currentYear";
		} else {
			return "&copy; $startYear";
		}
	}
?>
<h3>Additional Information</h3>
	<a class="additional-info" href="hydro-mulching.php">Hydro-mulching</a><br />
	<a class="additional-info" href="land-reclamation.php">Land Reclamation</a><br />
	<a class="additional-info" href="erosion-control.php">Erosion Control</a>
	
	<p class="copyright"><?= ewd_copyright(2017); ?> Lederer, Inc. | <a class="footer-link" href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>