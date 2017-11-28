<?php
// Exit if accessed directly
if ( !defined('ABSPATH') ) exit;

/**
 * Define some constants for easy development
 * 
 * @since 1.0
 */
if (!defined('MCS_PREFIX_VERSION')) 	define( 'MCS_PREFIX_VERSION'	, '1.0' );
if (!defined('MCS_PREFIX_BASE_PATH')) 	define( 'MCS_PREFIX_BASE_PATH'	, get_template_directory_uri() 	. '/');				// Parent theme folder
if (!defined('MCS_PREFIX_IMG_PATH')) 	define( 'MCS_PREFIX_IMG_PATH'	, get_template_directory_uri() 	. '/assets/img/'); 	// Parent theme images folder

/**
 * Theme basics
 *
 * @since 	1.0
 */
// add_theme_support( 'post-thumbnails' );			// Enable support for Post Thumbnails on posts and pages.
// add_theme_support( 'title-tag' );				// Let WordPress manage the document title.
// load_theme_textdomain( 'beforeimarry' );		// Make theme available for translation.
// add_theme_support( 'automatic-feed-links' );	// Add default posts and comments RSS feed links to head.
// show_admin_bar(false);							// Disable Admin Bar

/**
 * Add custom image sizes
 *
 * @since 	1.0
 */
//add_image_size( 'homepage-featured-image', 730, 350, true );

/**
 * Load CSS and JS the right way
 *
 * @since	1.0
 * @refer	https://developer.wordpress.org/reference/functions/wp_enqueue_style/#comment-340
 */
function mcs_prefixload_css_and_js() {
    // Load Boostrap CSS
	wp_enqueue_style( 'bootstrap-css', MCS_PREFIX_BASE_PATH . '/includes/bootstrap4/css/bootstrap.min.css' );

	// Load style.css
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	// Load Popper JS - Enable for Modal windows and tooltips
	// wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), null, true);
	
	// Load Boostrap JS
	wp_enqueue_script( 'bootstrap-js', MCS_PREFIX_BASE_PATH . '/includes/bootstrap4/js/bootstrap.min.js', array('jquery'), MCS_PREFIX_VERSION, true);
	
	// Load Google Fonts
	// wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700', array(), null, 'all');
	
	// Load Theme JS
	// wp_enqueue_script( 'iap-js', MCS_PREFIX_BASE_PATH . 'assets/js/main.js', array('jquery'), MCS_PREFIX_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'mcs_prefixload_css_and_js' );

/**
 * Register navigational menus
 *
 * @since	1.0
 * @refer	https://codex.wordpress.org/Navigation_Menus
 */
function mcs_prefixregister_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
    )
  );
}
add_action( 'init', 'mcs_prefixregister_menus' );

/**
 * Register WordPress widgets
 *
 * Use these in theme as <?php dynamic_sidebar( 'footer-widget-1' ); ?>
 * @since	1.0
 */
function mcs_prefixwidgets_init() {
	
	// Sidebar
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'mcstextdomain' ),
        'id' => 'main-sidebar',
        'description' => __( 'Widgets in this area will be shown on the sidebar.', 'mcstextdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
	// Footer Widget 1
    register_sidebar( array(
        'name' => __( 'Footer Widget 1', 'mcstextdomain' ),
        'id' => 'footer-widget-1',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'mcstextdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
	// Footer Widget 2
    register_sidebar( array(
        'name' => __( 'Footer Widget 2', 'mcstextdomain' ),
        'id' => 'footer-widget-2',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'mcstextdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
	// Footer Widget 3
    register_sidebar( array(
        'name' => __( 'Footer Widget 3', 'mcstextdomain' ),
        'id' => 'footer-widget-3',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'mcstextdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
	// Footer Widget 4
    register_sidebar( array(
        'name' => __( 'Footer Widget 4', 'mcstextdomain' ),
        'id' => 'footer-widget-4',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'mcstextdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
	
}
add_action( 'widgets_init', 'mcs_prefixwidgets_init' );