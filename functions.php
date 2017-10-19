<?php
// Exit if accessed directly
if ( !defined('ABSPATH') ) exit;

/**
 * Define some constants for easy development
 * 
 * @since 1.0
 */
if (!defined('FR_BASE_PATH')) 	define( 'FR_BASE_PATH'	, get_template_directory_uri() 	. '/');
if (!defined('FR_VERSION')) 	define( 'FR_VERSION'	, '1.0' );

/**
 * Load CSS and JS the right way
 *
 * @since	1.0
 * @refer	https://developer.wordpress.org/reference/functions/wp_enqueue_style/#comment-340
 */
function firerooster_load_css_and_js() {
    // Load Boostrap CSS
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/includes/bootstrap4/css/bootstrap.min.css' );

	// Load style.css
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	// Load Boostrap JS
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/includes/bootstrap4/js/bootstrap.min.js', array('jquery'), FR_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'firerooster_load_css_and_js' );

/**
 * Register navigational menus
 *
 * @since	1.0
 * @refer	https://codex.wordpress.org/Navigation_Menus
 */
function firerooster_register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
    )
  );
}
add_action( 'init', 'firerooster_register_menus' );

/**
 * Register WordPress widgets
 *
 * @since	1.0
 */
function firerooster_widgets_init() {
	
	// Footer Widget 1
    register_sidebar( array(
        'name' => __( 'Footer Widget 1', 'firerooster' ),
        'id' => 'footer-widget-1',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'firerooster' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
	// Footer Widget 2
    register_sidebar( array(
        'name' => __( 'Footer Widget 2', 'firerooster' ),
        'id' => 'footer-widget-2',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'firerooster' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
	// Footer Widget 3
    register_sidebar( array(
        'name' => __( 'Footer Widget 3', 'firerooster' ),
        'id' => 'footer-widget-3',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'firerooster' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
	// Footer Widget 4
    register_sidebar( array(
        'name' => __( 'Footer Widget 4', 'firerooster' ),
        'id' => 'footer-widget-4',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'firerooster' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
}
add_action( 'widgets_init', 'firerooster_widgets_init' );

/**
 * Add custom image sizes
 *
 * @since 	1.0
 */
//add_image_size( 'homepage-featured-image', 730, 350, true );