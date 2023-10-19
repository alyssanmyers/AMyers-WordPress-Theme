<?php

/*
 * Theme Name: Alyssa Myers Portfolio
 * Theme URI: N/A
 * Version: 1.0
 * Description: A custom theme for the creative portfolio for Alyssa Myers.
 * Author: Alyssa Myers
 * Author URI: https://amyers.art
*/


global $post, $same_cat, $gallery;
$gallery = array();
$post_type = get_post_type( $post );

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<?php if ( get_post_meta( get_the_ID(), 'gallery_data', true ) ) : ?>
    <?php 
	$gallery = get_post_meta( get_the_ID(), 'gallery_data', true );
	/*foreach($gallery as $key => $value)
	{
  	echo $key." has the value ". $value[0];
	}*/
?>
<?php endif; ?>

<main id="single">
			<div id="body" style="overflow: hidden;">
				<!--<div style="width: 100%; height: 500px; background-image: url('<//?php echo get_the_post_thumbnail_url() ?>'); background-size: cover; background-position: center;"></div>-->
				<h2><?php echo get_the_title(); ?></h2>
				<?php echo get_the_content(); ?>
			</div>
			
			<?php if ( get_post_meta( get_the_ID(), 'gallery_data', true ) ) : 
				$gallery = get_post_meta( get_the_ID(), 'gallery_data', true );
			?>
				<ul id="port-images" style="margin-top: 1%;">
				
				<?php foreach($gallery as $key => $value) : 
					  foreach ($value as $i) :
				?>
				<li>
				<a href="<?php echo $i; ?>" target="_blank" class="fancybox">
				<img src="<?php echo $i; ?>" alt="" />
				</a>
				</li>
				<?php endforeach; endforeach; ?>

				</ul>
			<?php endif; ?>
		
		</main>
</div>
</div>

<?php

/************************************/
/* arrows to previous and next post */
/************************************/

/* if news & press (where posts are latest to oldest) */
if ( in_category( 'news-and-press' ) ) :
	$next_post = get_previous_post( $same_cat );
	$prev_post = get_next_post( $same_cat );
else:
	$prev_post = get_previous_post( $same_cat );
	$next_post = get_next_post( $same_cat );
endif;

if( $prev_post ) 
{
	$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
	echo '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="plain arrow prev" style="position: fixed; color: #8E8E8E;">&#10094;</a>';
}

if( $next_post ) 
{
	$next_title = strip_tags(str_replace('"', '', $next_post->post_title));
	echo '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="plain arrow next" style="position: fixed; color: #8E8E8E;">&#10095;</a>';
}

endwhile; endif;

get_footer();

?>