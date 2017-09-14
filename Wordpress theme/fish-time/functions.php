<?php 

	function fish_time_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',array(),null);
	  	wp_enqueue_style( 'index', get_template_directory_uri() . '/assets/css/index.css',array(),null);
	  	wp_enqueue_style( 'rolls', get_template_directory_uri() . '/assets/css/rolls.css',array(),null);
	  	wp_enqueue_style( 'order', get_template_directory_uri() . '/assets/css/order.css',array(),null);
	  	wp_enqueue_style( 'select', get_template_directory_uri() . '/assets/plugins/Select2/select2.min.css',array(),null);
	  	wp_enqueue_style( 'media-style', get_template_directory_uri() . '/assets/css/media.css',array(),null);
	};
	add_action( 'wp_enqueue_scripts', 'fish_time_styles' );

	function fish_time_scripts() {
	  	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery/jquery.min.js',array( 'jquery' ));
	  	wp_enqueue_script( 'select', get_template_directory_uri() . '/assets/plugins/Select2/select2.full.min.js',array( 'jquery' ));
	  	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js',array( 'jquery' ));
	};
	add_action( 'wp_enqueue_scripts', 'fish_time_scripts' );

	add_theme_support( 'post-thumbnails' );

?>