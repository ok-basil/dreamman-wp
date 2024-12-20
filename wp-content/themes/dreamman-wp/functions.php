<?php

/**
 * dreamman functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dreamman-wp
 */

require __DIR__ . '/vendor/autoload.php';


if ( ! defined( 'DREAMMAN_WP_THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'DREAMMAN_WP_THEME_VERSION', '1.0.1' );
}

/**
 *
 * Define Paths to directories and files in the theme
 */
require get_template_directory() . '/inc/define-paths.php';
require get_template_directory() . '/inc/template-functions.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dreamman_wp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on dreamman, use a find and replace
		* to change 'dreamman-wp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'dreamman-wp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary Menu', 'dreamman-wp' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'dreamman_wp_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'dreamman_wp_setup' );


add_filter('get_custom_logo', 'custom_logo_output', 10);
function custom_logo_output( $html ){
	$html = str_replace( 'custom-logo-link', 'nav-logo ', $html );
	return $html;
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dreamman_wp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dreamman-wp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dreamman-wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Custom Quick Links', 'dreamman-wp' ),
			'id'            => 'links-1',
			'description'   => esc_html__( 'Add widgets here.', 'dreamman-wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'dreamman_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dreamman_wp_scripts() {

	wp_enqueue_style( 'dreamman-wp-min-style', get_template_directory_uri() . '/style.min.css', array(), DREAMMAN_WP_THEME_VERSION );
	wp_style_add_data( 'dreamman-wp-style', 'rtl', 'replace' );
    wp_enqueue_script( 'dreamman-wp-custom', get_template_directory_uri() . '/js/carousel.js', array(), DREAMMAN_WP_THEME_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'dreamman_wp_scripts' );

/* Admin scripts */


/* Filter the list of editable roles: in /wp-admin/user-new.php page */
function filter_editable_roles($roles) {
    $allowed_roles = array(
        'administrator' => $roles['administrator'],
        'author' => $roles['author']
    );

    return $allowed_roles;
}
add_filter('editable_roles', 'filter_editable_roles');


// Remove "Send Password Reset" action from user list
function remove_send_password_reset_action($actions, $user_object) {
    unset($actions['resetpassword']);
    return $actions;
}
add_filter('user_row_actions', 'remove_send_password_reset_action', 10, 2);
