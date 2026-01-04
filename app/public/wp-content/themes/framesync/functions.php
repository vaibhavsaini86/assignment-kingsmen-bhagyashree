<?php
/**
 * Framesync functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package framesync
 */

if ( ! defined( '_V_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_V_VERSION', '1.0.0' );
}

// framesync's includes directory.
$framesync_inc_dir = 'inc';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function framesync_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'framesync_content_width', 640 );
}

add_action( 'after_setup_theme', 'framesync_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function framesync_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'framesync' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'framesync' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'framesync_widgets_init' );

// Remove paragraph tag from the form.
add_filter('wpcf7_autop_or_not', '__return_false');

// Array of files to include.
$framesync_includes = array(
	'/search.php',                          // Search supports.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/meta.php',							// Dynamic Meta Tags.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/menu.php',							// Dynamic navigation with shortcode.
	'/shortcode.php',						// Dynamic custom elements with shortcode.
);

// Include files.
foreach ( $framesync_includes as $file ) {
	require_once get_theme_file_path( $framesync_inc_dir . $file );
}
function framesync_enqueue_fontawesome() {
  wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
    [],
    '6.5.1'
  );
}
add_action('wp_enqueue_scripts', 'framesync_enqueue_fontawesome');

function menu_enqueue_scripts() {
    // Enqueue your custom mobile menu JS
    wp_enqueue_script(
        'mobile-menu-script',
        get_template_directory_uri() . '/js/menu.js',
        array(),    // dependencies (empty if none)
        '1.0',
        true        // load in footer
    );
}
add_action('wp_enqueue_scripts', 'menu_enqueue_scripts');