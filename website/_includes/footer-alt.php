	<footer id="alt">
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
		<p><?= ewd_copyright(2017); ?> Lederer, Inc. | <a class="footer-link" href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
	</footer>
	