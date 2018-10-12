<?php
/**
 * Theme Setup.
 */
function kdtechs_setup() {
	// Textdomain
	load_theme_textdomain('kdtechs');

	// Add Theme Support
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-fields');
	add_theme_support('html5', array(
		'gallery',
		'caption'
	));
}
add_action('after_setup_theme', 'kdtechs_setup');

/**
 * Enqueue scripts and styles.
 */
function kdtechs_scripts() {
	wp_enqueue_style('kdtechs-reset', get_theme_file_uri('/assets/css/reset.css'), array(), '1.0');
	wp_enqueue_style('kdtechs-font', get_theme_file_uri('/assets/css/fonts.css'), array(), '1.0');
	wp_enqueue_style('kdtechs-swiper', get_theme_file_uri('/assets/css/swiper.min.css'), array(), '4.4.1');
	wp_enqueue_style('kdtechs-style', get_stylesheet_uri());
	wp_enqueue_style('kdtechs-main', get_theme_file_uri('/assets/css/kdtechs.css'), array('kdtechs-style'), '1.0');
	wp_enqueue_script('kdtechs-jquery', get_theme_file_uri('/assets/js/jquery.min.js'), array(), '3.3.1');
	wp_enqueue_script('kdtechs-swiper', get_theme_file_uri('/assets/js/swiper.min.js'), array(), '4.4.1');
}
add_action('wp_enqueue_scripts', 'kdtechs_scripts');

/**
 * Register Nav Menu
 */
register_nav_menus(array(
	'main'	=>	__('Main Menu', 'kdtechs')
));

/**
 * Custom Post Type
 */
function kdtechs_customer() {
	$label = array(
		'name'					=>	'Customers',
		'singular_name'			=>	'Customer'
	);

	$args = array(
		'labels'				=>	$label,
		'description'			=>	'',
		'supports'				=>	array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields'
		),
		'taxonomies'			=>	array(),
		'hierarchical'			=>	false,
		'public'				=>	true,
		'show_ui'				=>	true,
		'show_in_menu'			=>	true,
		'show_in_nav_menus'		=>	true,
		'show_in_admin_bar'		=>	true,
		'menu_position'			=>	5,
		'menu-icon'				=>	'',
		'can_export'			=>	true,
		'has_archive'			=>	true,
		'exclude_from_search'	=>	false,
		'publicly_queryable'	=>	true,
		'capability_type'		=>	'post'
	);

	register_post_type('customer', $args);
}
add_action('init', 'kdtechs_customer');

function kdtechs_function() {
	$label = array(
		'name'					=>	'Functions',
		'singular_name'			=>	'Function'
	);

	$args = array(
		'labels'				=>	$label,
		'description'			=>	'',
		'supports'				=>	array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields'
		),
		'taxonomies'			=>	array(),
		'hierarchical'			=>	false,
		'public'				=>	true,
		'show_ui'				=>	true,
		'show_in_menu'			=>	true,
		'show_in_nav_menus'		=>	true,
		'show_in_admin_bar'		=>	true,
		'menu_position'			=>	5,
		'menu-icon'				=>	'',
		'can_export'			=>	true,
		'has_archive'			=>	true,
		'exclude_from_search'	=>	false,
		'publicly_queryable'	=>	true,
		'capability_type'		=>	'post'
	);

	register_post_type('function', $args);
}
add_action('init', 'kdtechs_function');

/**
 * Theme option
 */
if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme options', // Title hiển thị khi truy cập vào Options page
		'menu_title'	=> 'Theme options', // Tên menu hiển thị ở khu vực admin
		'menu_slug' 	=> 'theme-settings', // Url hiển thị trên đường dẫn của options page
		'capability'	=> 'edit_posts',
		'redirect'	=> false
	));
}