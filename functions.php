<?php

/*
 * Theme Name: Alyssa Myers Portfolio
 * Theme URI: N/A
 * Version: 1.0
 * Description: A custom theme for the creative portfolio for Alyssa Myers.
 * Author: Alyssa Myers
 * Author URI: https://amyers.art
*/


	add_theme_support( 'post-thumbnails' );

	/***************/
	/* CUSTOM MENU */
	/***************/	

	/* registers that there is a customer navigation menu in the customization */
	function register_my_menus() 
	{
	  register_nav_menus(
		array(
		  'nav-menu' => __( 'Navigation Menu' )
		)
	  );
	}
	/* adds the class 'plain' to each link in this nav */
	function add_menuclass($ulclass) 
	{
		return preg_replace('/<a /', '<a class="plain"', $ulclass);
	}
	/* adds the toggle-arrow div before the sub-menu */
	function add_menuclass2($ulclass) 
	{
		return preg_replace('/<ul /', '<div class="toggle-arrow arrow-collapsed"></div><ul ', $ulclass);
	}
	add_action( 'init', 'register_my_menus' );
	//add_filter('wp_nav_menu','add_menuclass');
	//add_filter('wp_nav_menu','add_menuclass2');
	/* since the nav lis are floated right, reverses the pages to put in order */
	//add_filter( 'wp_nav_menu_objects', create_function ( '$menu', 'return array_reverse ($menu);' ) );

	/**************/
	/* SAVING CSS */
	/**************/

	function wnt_customizer_css() 
	{
		?>
		<style type="text/css">
		</style>
		
		<script>
			$( document ).ready(function() 
			{
				
			});
		</script>
		<?php
	}
	add_action( 'wp_head', 'wnt_customizer_css' );

	/**************/
	/* CONNECT JS */
	/**************/

	function scripts_main() 
	{ 
		/* register all css */
		wp_register_style( 'style',  get_template_directory_uri() .'/style.css', array(), null, 'all' );
		wp_register_style( 'animate.min',  get_template_directory_uri() .'/animate.min.css', array(), null, 'all' );
		
		/* register all js */
		wp_register_script('jquery.min', get_stylesheet_directory_uri().'/js/jquery.min.js');
		wp_register_script('script', get_stylesheet_directory_uri().'/js/script.js');
		wp_register_script('carousel', get_stylesheet_directory_uri().'/js/owl.carousel.min.js');

		/* call all stylesheets and scripts */
		wp_enqueue_style( 'style' );
		wp_enqueue_script( 'jquery.min' );
		wp_enqueue_style( 'animate.min' );
		wp_enqueue_script( 'script' );
		wp_enqueue_script( 'carousel' );
	}

	/* web fonts */
	function google_fonts() 
	{
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
	}

	function disable_fancybox()
	{
		?>
		<script type="text/javascript">
			var pixelRatio = window.devicePixelRatio || 1;
			if(window.innerWidth < 641 ) 
			{
			  easy_fancybox_handler = null;
			};
			</script>
		<?php
	}

	add_action('wp_enqueue_scripts', 'scripts_main');
	add_action('wp_enqueue_scripts', 'google_fonts');
	//add_action('wp_footer', 'disable_fancybox');

?>