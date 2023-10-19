<?php

/*
 * Theme Name: Alyssa Myers Portfolio
 * Theme URI: N/A
 * Version: 1.0
 * Description: A custom theme for the creative portfolio for Alyssa Myers.
 * Author: Alyssa Myers
 * Author URI: https://amyers.art
*/


?>
	<!-------------------------------->
	<!--      Footer Section        -->
	<!-------------------------------->

	<footer class="body-text">
		
	<?php echo wp_footer(); ?>
		
		<div id="footer-info">
			&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'title'); ?>. All Rights Reserved.
			<br>
			Site Designed &amp; Developed by Alyssa N. Myers.
			<br>
			<a href="mailto:alyssa@alyssanmyers.com" class="plain">Contact</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php get_site_url(); ?>/AlyssaMyers-Resume.pdf" class="plain" target="_blank">R&eacute;sum&eacute;</a>
		</div>
		<!--
		<ul>
			<li><a href="//facebook.com/alyssa.myers.90" target="_blank"><img src="<//?php bloginfo('template_url'); ?>/images/facebook.png" alt="Facebook" /></a></li>
			<li><a href="//twitter.com/alyssanmyers" target="_blank"><img src="<//?php bloginfo('template_url'); ?>/images/twitter.png" alt="Twitter" /></a></li>
			<li><a href="//www.instagram.com/lyssicole/" target="_blank"><img src="<//?php bloginfo('template_url'); ?>/images/instagram.png" alt="Instagram" /></a></li>
			<li><a href="//www.linkedin.com/in/alyssanmyers" target="_blank"><img src="<//?php bloginfo('template_url'); ?>/images/linkedin.png" alt="LinkedIn" /></a></li>
			<li><a href="//github.com/alyssanmyers" target="_blank"><img src="<//?php bloginfo('template_url'); ?>/images/github.png" alt="Github" /></a></li>
			<li><a href="mailto:alyssa@alyssanmyers.com"><img src="<//?php bloginfo('template_url'); ?>/images/email.png" alt="Email me!" /></a></li>
		</ul>
		-->
	</footer>

</body>
</html>