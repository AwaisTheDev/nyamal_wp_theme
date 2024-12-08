<?php
/**
 * Nyamal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nyamal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nyamal_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Nyamal, use a find and replace
		* to change 'nyamal' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nyamal', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'nyamal' ),
		)
	);

	register_nav_menus(
		array(
			'footer-menu-1' => esc_html__( 'Footer Menu 1', 'nyamal' ),
		)
	);

	register_nav_menus(
		array(
			'footer-menu-2' => esc_html__( 'Footer Menu 2', 'nyamal' ),
		)
	);
	register_nav_menus(
		array(
			'footer-menu-3' => esc_html__( 'Footer Menu 3', 'nyamal' ),
		)
	);
	register_nav_menus(
		array(
			'footer-menu-4' => esc_html__( 'Footer Menu 4', 'nyamal' ),
		)
	);
	register_nav_menus(
		array(
			'footer-menu-5' => esc_html__( 'Footer Menu 5', 'nyamal' ),
		)
	);

	register_nav_menus(
		array(
			'footer-menu-6' => esc_html__( 'Footer Menu 6', 'nyamal' ),
		)
	);

	register_nav_menus(
		array(
			'footer-bottom' => esc_html__( 'Footer Bottom', 'nyamal' ),
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
			'nyamal_custom_background_args',
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
add_action( 'after_setup_theme', 'nyamal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nyamal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nyamal_content_width', 640 );
}
add_action( 'after_setup_theme', 'nyamal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nyamal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nyamal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nyamal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nyamal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nyamal_scripts() {
	wp_enqueue_style( 'nyamal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'nyamal-modal-video', "https://cdn.jsdelivr.net/npm/modal-video@2.4.8/css/modal-video.min.css", array(), _S_VERSION );
	wp_enqueue_style( 'nyamal-swiper-slider', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css", array(), _S_VERSION );
	wp_style_add_data( 'nyamal-style', 'rtl', 'replace' );
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'modal-video', get_template_directory_uri() . '/js/thirdparty/modal-video.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nyamal-swpier-slider', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'nyamal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nyamal-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nyamal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// Add dropdown icon
function add_fontawesome_dropdown_icon($item_output, $item, $depth, $args) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $item_output .= '<i class="fas fa-chevron-down dropdown-icon"></i>';
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_fontawesome_dropdown_icon', 10, 4);


//disable gravity forms css
add_filter( 'gform_disable_form_theme_css', '__return_true' );
add_filter( 'gform_disable_form_legacy_css', '__return_true' );

