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

?>

<main style="width: 100%; padding: 5% 0 0 0;">
	
	<div style="position: relative;">
		<h1 class="animate__animated animate__fadeInUp intro-header" style="color: rgba(0, 0, 0, 0.5);">Alyssa is a <span style="color: var(--main-color);">versatile creative</span> who has a passion for <span style="color: var(--main-color);">compelling narratives.</span></h1>
		<h3 class="animate__animated animate__fadeInUp intro-body" style="animation-delay: 0.5s;">
			<span class="intro">Experienced in design, animation, and front-end development with a knack for infusing inventive ideas into visual compositions.</span>
		</h3>
		<div class="intro-buttons animate__animated animate__fadeInUp" style="margin: 0 5%; animation-delay: 0.5s;">
			<a href="#portfolio" class="cta-button">View my Work</a>
			<a href="#contact" class="cta-button" style="margin-right: 0;">Get in Touch</a>
		</div>
		
		<div class="filter">
			<img class="filter-img" src="<?php bloginfo('template_url'); ?>/images/filter.svg"/>
			
			
	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
			

$args = array (
			'category_name' => '',
			'post_type' => 'port_pieces',
			'has_password'   => FALSE
		);

		$the_query = new WP_Query( $args );
			
?>

		<ul id="port-cats" class="body-text">
	  <?php 
		$categories = get_categories( [
		  'taxonomy'     => 'category',
		  'type'         => 'post',
		  'child_of'     => 0,
		  'parent'       => '',
		  'orderby'      => 'name',
		  'order'        => 'ASC',
		  'hide_empty'   => 1,
		  'hierarchical' => 1,
		  'exclude'      => '1',
		  'include'      => '',
		  'number'       => 0,
		  'pad_counts'   => false,
		] );
			
		echo '<li class="animate__animated animate__fadeInDown" style="animation-delay: 0s;"><a href="' . get_site_url() . '">All</a></li>';
		
		$count = 1;
			
		if( $categories ) 
		{
			foreach( $categories as $cat )
			{
		?>
		  <li class="animate__animated animate__fadeInDown" style="animation-delay:<?php echo $count += 50 ?>ms">
			<a 
			  href="<?php echo get_category_link($cat->term_id); ?>"
			 >
			  <?php echo $cat->name; ?>
			</a>
		  </li>
	  <?php
		  }
		}
	  ?>
	</ul>
		</div>
		</div>

		<?php if ( $the_query->have_posts() ) : ?>
		<ul id="portfolio" class="anchor">
			
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<?php
			echo '<li>';
				echo '<a href="' . get_the_permalink() . '">';
					echo '<div class="text">';
						echo '<div class="header-display animateTop animate__animated animate__fadeInUp">';
							echo get_the_title()
								. '<br />';
						echo '</div>';
					echo '<h4 class="animate__animated animate__fadeInUp" style="animation-delay: 0.25s;">';
						$categories = get_the_category();
						$count = 0;
						foreach( $categories as $category) 
						{
    						echo $category->name;
							if (++$count >= count($categories) ) { break; }
							echo ", ";
						}
						echo '</h4>';
					echo '</div>';
					echo '<img src="' . get_the_post_thumbnail_url() . '" alt="" />';
				echo '</a>';
			echo '</li>';
			?>
			<?php endwhile; ?>
				
			</ul>
	
		<?php endif;
		endwhile; endif; 
?>
		
	<!--<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="//player.vimeo.com/video/383148532?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="//player.vimeo.com/api/player.js"></script>-->

</main>

</div> <!-- end container -->
</div> <!-- end wrapper -->

<?php

get_footer();

?>