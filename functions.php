<?php 
	declare(strict_types = 1); 

	/**
	 * Decade Functions & Definition
	 * 
	 * @link https://developer.wordpress.org/themes/basics/theme-functions/
	 * @package Decade
	 * 
	 */

	 if (!function_exists('decade_support')):
		function decade_support(){

			// enqueue editor styles
			add_editor_style( 'style.css');

			// make theme available for translation
			load_theme_textdomain( 'decade');
		}

	endif;

	add_action('after_setup_theme', 'decade_support');

	if(! function_exists('decade_styles')):

		// enqueue styles
		function decade_styles(){
			//Register theme stylesheet
			wp_register_style( 
				'decade-style', get_stylesheet_directory_uri() . 'style.css', 
				array(), 
				wp_get_theme()->get('Version') 
		);

		//enqueue theme stylesheet
		wp_enqueue_style( 'decade-styles');

		}
	endif;
	
	add_action( 'wp_enqueue_scripts', 'decade_styles');
?>