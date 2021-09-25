<?php
/**
 * dina-photography functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dina-photography
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.2.5' );
}

if ( ! function_exists( 'dina-photography_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dina_photography_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dina-photography, use a find and replace
		 * to change 'dina-photography' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dina-photography', get_template_directory() . '/languages' );

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
            'header-main-menu' => esc_html__( 'Header Main', 'dina-photography' ),
            'header-secondary-menu' => esc_html__( 'Header Secondary', 'dina-photography' ),
            'footer-photography' => esc_html__( 'Footer Photo', 'dina-photography' ),
            'footer-about' => esc_html__( 'Footer About', 'dina-photography' )
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
	}
endif;
add_action( 'after_setup_theme', 'dina_photography_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dina_photography_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dina-photography_content_width', 640 );
}
add_action( 'after_setup_theme', 'dina_photography_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dina_photography_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dina-photography' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dina-photography' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dina_photography_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function dina_photography_scripts() {
  wp_enqueue_style( 'dina-photography-google-font', 'https://fonts.googleapis.com/css2?family=Spartan:wght@500;700&display=swap', [], null );
  wp_enqueue_style( 'dina-photography-style', get_stylesheet_uri(), [], _S_VERSION );

  wp_enqueue_script( 'dina-photography-main-script', get_theme_file_uri( '/js/main.js' ), [ 'jquery' ], _S_VERSION );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}

add_action( 'wp_enqueue_scripts', 'dina_photography_scripts', 999 );

require_once __DIR__ . '/inc/menu-walker.php';

/**
 * Remove Content edit box from Flexible page
 */

//add_action('admin_init', 'remove_content_page');

function remove_editor()
{

  if (isset($_GET['post'])) {
    $id = $_GET['post'];
    $template = get_post_meta($id, '_wp_page_template', true);

    if ($template == 'flexible.php' || $template == 'portfolio.php') {
      remove_post_type_support('page', 'editor');
    }
  }
}

add_action('init', 'remove_editor');

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Options page
 */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title' 	=> 'Theme General Settings',
      'menu_title'	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
  ));
}
