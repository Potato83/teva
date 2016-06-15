<?php
/**
 * Teva functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Teva
 */

if ( ! function_exists( 'teva_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function teva_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Barry Livingston Music, use a find and replace
	 * to change 'barry_livingstone_music' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'teva', get_template_directory() . '/languages' );
	
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'teva' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'teva_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'teva_setup' );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function teva_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'teva' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'teva' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'teva_widgets_init' );

/**
 * Choose EN / FR
 *
 */
// add_filter('template_include','start_buffer_EN',1);
// function start_buffer_EN($template) {
//   ob_start('end_buffer_EN');  
//   return $template;
// }
// function end_buffer_EN($buffer) {
//   return str_replace('<span>English</span>','<span>EN</span>',$buffer);  
// }

// add_filter('template_include','start_buffer_FR',1);
// function start_buffer_FR($template) {
//   ob_start('end_buffer_FR');
//   return $template;
// }
// function end_buffer_FR($buffer) {  
//   return str_replace('<span>Français</span>','<span>FR</span>',$buffer);
// }





