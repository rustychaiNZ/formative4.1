<?php // Do not close the php tag as it can cause some errors

// Load stylesheet
function load_css(){
	// Bootstrap CSS
	wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all');
	wp_enqueue_style('bootstrap');
	// Custom CSS
	wp_register_style('main',get_template_directory_uri() . '/css/main.css',array(),false,'all');
	wp_enqueue_style('main');
}

// Hook
add_action('wp_enqueue_scripts','load_css');

// Load Jquery
function include_jquery(){
	// Makes sure that jquery isn't being loaded in by anything else
	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
	
	add_action('wp_enqueue_scripts', 'jquery');
}

// Hook 
add_action('wp_enqueue_scripts', 'include_jquery');

// Load JavaScript
function load_js(){
	// *--- Bootstrap requirements ---*
	// wp_enqueue_scripts('jquery');
	wp_register_script('bootstrapjs',get_template_directory_uri() . '/js/bootstrap.min.js','jquery',false,true);
	wp_enqueue_script('bootstrapjs');
	// Custom JS
	wp_register_script('customjs',get_template_directory_uri() . '/js/scripts.js','',1,true);
	wp_enqueue_script('customjs');
}

// Hook
add_action('wp_enqueue_scripts','load_js');

// Theme support 
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Register nav walker class_alias
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function theme_setup(){
// Menus
	register_nav_menus(
		array(
			// location of menu => What it is called on wordpress customise
			'primary' => __('Primary Menu', 'smokeFreeTheme'),
			'mobile-menu' => 'Mobile Menu Location',
			'footer-menu' => 'Footer Menu Location',
			'social-menu' => 'Social media menu controls'
		)
	);
}

// Register sidebars
function my_sidebars(){
	register_sidebar(
		array(
			'name' => 'Store Sidebar',
			'id' => 'store-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);
}

// Hook
add_action('widgets_init', 'my_sidebars');


// Controls the size of the images rendered in the browser
// ('nameOfImageSize', verticle px, horizontal px, croppedByWordpress)
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, false);

// Header image
register_default_headers( array(
	'defaultImage' => array(
		'url' => get_template_directory_uri() . '/images/fillerHeader.png',
		'thumbnail_url' => get_template_directory_uri() . '/images/fillerHeader.png',
		'description' => __('The default image for the custom header.', 'smokeFreeTheme')
	)
));
$customHeaderDefaults = array(
	'width' => 1920,
	'height' => 1080,
	'default-image' => get_template_directory_uri() . '/images/fillerHeader.png'
);
add_theme_support('custom-header', $customHeaderDefaults);


add_action('after_setup_theme', 'theme_setup');

// Custom logo
function smokeFreeTheme_custom_logo(){
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'smokeFreeTheme_custom_logo' );

//customize API
require_once get_template_directory() . '/customizer.php';