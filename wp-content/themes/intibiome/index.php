<?php
	get_header();
	echo "<main>";
	get_template_part('templates/content-banner');
	get_template_part('templates/content-about-us');
	get_template_part('templates/content-products');
	get_template_part('templates/content-intimate-health');
	get_template_part('templates/content-discoveries');
	echo "</main>";
	get_footer();
?>