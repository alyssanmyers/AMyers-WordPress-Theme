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
<!DOCTYPE HTML>
<html>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="author" content="Alyssa Myers">
<meta name="description" content="<?php bloginfo( 'description' );?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
	<?php bloginfo( 'name' );
        if ( !is_front_page() && is_category() ) :
            echo '&mdash;' . ucfirst(get_queried_object()->slug);
		elseif ( !is_front_page() ) : 
			echo '&mdash;' . get_the_title();
		elseif ( is_404() ) :
			echo '&mdash;' . 'Page Not Found!';
		endif; 
	?>
</title>

<?php
	wp_head();
?>

</head>

<body>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	
	?>
	<?php endwhile; endif; ?>
		
		<div class="burger-menu"><ul><li></li><li></li><li></li></ul>
			<img class="close-button" src="<?php bloginfo('template_url'); ?>/images/close.svg"/>
		</div>	
	
		<nav class="header-display">
			
			<a href="<?php echo get_site_url(); ?>">
			<img id ="logo" src="<?php bloginfo('template_url'); ?>/images/amyers_logo.svg" alt="Alyssa Myers Logo" />
			</a>
			
			<!--<div style="display: flex; text-align: center; height: 100%; padding: 0;">
				
			</div>-->
			
			<ul style="float: left;" class="name">
				<li>
					<h2 class="header-name">Alyssa Myers</h2>
					&nbsp;&nbsp;&nbsp;
					<h3 class="title">Creative Developer</h3>
				</li>
			</ul>
			
			<ul class="navigation">
				<?php 					 
						$args = array(
									'theme_location'  => 'nav-menu',
									'menu'            => '',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap' 	  => '%3$s',
									'depth'           => 0,
									'walker'          => '',
									'add_li_class'  => 'animate__animated animate__fadeInDown'
								);
						wp_nav_menu( $args );
		
					?>
				<li class="social">
					<a href="//linkedin.com/in/alyssanmyers" class="social" target="_blank">
						<img class="social-icon first" src="<?php bloginfo('template_url'); ?>/images/linkedin.svg" alt="Linkedin" />
					</a>
					<a href="//github.com/alyssanmyers" class="social" target="_blank">
						<img class="social-icon" src="<?php bloginfo('template_url'); ?>/images/github.svg" alt="github" />
					</a>
					<a href="mailto:alyssa@alyssanmyers.com" class="social">
						<img class="social-icon" src="<?php bloginfo('template_url'); ?>/images/email.svg" alt="github" />
					</a>
				</li>
			</ul>
		
		</nav>
	
		<div id="wrapper">
		<div id="container">