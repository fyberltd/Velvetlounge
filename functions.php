<?php 
    // including stylesheets
	function required_stylesheet(){
		wp_enqueue_style('default_stylesheet', get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts', 'required_stylesheet');

	//jquery
	function update_jQuery(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '3.3.1');
    } 
    add_action('wp_enqueue_scripts', 'update_jQuery');

	//including custom theme css and js
	function custom_js_css(){
		wp_enqueue_script('all_js', get_template_directory_uri() . '/js/all.min.js', 'jquery', '1.0', true);
		wp_enqueue_style('all_css', get_template_directory_uri() . '/css/main.min.css');
		wp_enqueue_script('slick_js', get_template_directory_uri() . '/slick/slick.min.js', '1.8.1', true);
		wp_enqueue_style('slick_theme_css', get_template_directory_uri() . '/slick/slick-theme.css');
		wp_enqueue_style('slick_css', get_template_directory_uri() . '/slick/slick.css');
	}
	add_action('wp_enqueue_scripts', 'custom_js_css');

	//registering nav menus
	function register_theme_menus(){
		register_nav_menus(array(
			'header_nav' => __('Header Navigation'),
			'footer_nav' => __('Footer Navigation')
		));
	}
	add_action('init', 'register_theme_menus'); 

	// adding new image sizes
	add_theme_support( 'post-thumbnails' ); //enable add_image_size() function

	add_image_size( 'gallery_xl', 1300);
	add_image_size( 'gallery_l', 1000);
	add_image_size( 'gallery_m', 700);
	add_image_size( 'gallery_s', 500);
	add_image_size( 'gallery_xs', 380);

	// added to try get the datepicker on the booking page to work on safari. delete if it doesnt work. 
	add_filter( 'wpcf7_support_html5_fallback', '__return_true' );
?>