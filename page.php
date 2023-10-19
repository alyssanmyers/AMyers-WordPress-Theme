<?php 

/*
 * Theme Name: Alyssa Myers Portfolio
 * Theme URI: N/A
 * Version: 1.0
 * Description: A custom theme for the creative portfolio for Alyssa Myers.
 * Author: Alyssa Myers
 * Author URI: https://amyers.art
*/


get_header();

$page_title = $wp_query->post->post_title;

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

	<main>
        <?php echo the_content(); ?>
	</main>
		
	</div> <!-- end container -->
</div> <!-- end wrapper -->
			
<?php

get_footer();

endwhile; endif; 
?>
