<?php 
    // including stylesheets
	function required_stylesheet(){
		wp_enqueue_style('default_stylesheet', get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts', 'required_stylesheet');

	//jquery
	function update_jQuery(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '3.3.1', true);
    } 
    add_action('wp_enqueue_scripts', 'update_jQuery');

	//including custom theme css and js
	function custom_js_css(){
		wp_enqueue_script('all_js', get_template_directory_uri() . '/js/all.min.js', 'jquery', null, true);
		wp_enqueue_style('all_css', get_template_directory_uri() . '/css/main.min.css');
		wp_localize_script( 'all_js', 'ajax_url', admin_url('admin-ajax.php') );
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

	// add thumbnails to posts
	add_theme_support( 'post-thumbnails' );

	// Create Sidebar
	function wpdocs_theme_slug_widgets_init() {
	    register_sidebar( array(
	        'name'          => __( 'Single Blog Post Sidebar', 'textdomain' ),
	        'id'            => 'single_sidebar',
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</li>',
	        'before_title'  => '<h3 class="widgettitle">',
	        'after_title'   => '</h3>',
	    ) );
	}
	add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

	require get_template_directory() . '/load_more_blogs.php';