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
		
	<div id="contact">
	<div id="contact-container">
	<h2>Tell Me About Your Next Project</h2>
	<p>Please don't hesitate to get in touch&mdash;I'd love to explore the creative possibilities we can achieve together!</p>
	<?php echo do_shortcode('[simpleform]'); ?>
		<!-- wp:simpleform/form-selector {"formId":"1","optionNew":"d-none","formOptions":"visible"} /-->
	</div></div>
		
		<div id="footer-info">
			<h5>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'title'); ?>. All Rights Reserved.
			<br>
			Site Designed &amp; Developed by Alyssa N. Myers.
			</h5>
		</div>
		
		<ul class="social">
            <li><a href="//linkedin.com/in/alyssanmyers" class="social" target="_blank">
                <img class="social-icon first" src="<?php bloginfo('template_url'); ?>/images/linkedin.svg" alt="Linkedin" />
            </a></li>
            <li><a href="//github.com/alyssanmyers" class="social" target="_blank">
                <img class="social-icon" src="<?php bloginfo('template_url'); ?>/images/github.svg" alt="github" />
            </a></li>
            <li><a href="mailto:alyssa@alyssanmyers.com" class="social">
                <img class="social-icon" src="<?php bloginfo('template_url'); ?>/images/email.svg" alt="github" />
            </a></li>
        </ul>
		
	</footer>

</body>
</html>