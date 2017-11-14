<?php
/**
 * StarterPistol functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StarterPistol
 */

if ( ! function_exists( 'starterpistol_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starterpistol_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on StarterPistol, use a find and replace
	 * to change 'starterpistol' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starterpistol', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'starterpistol' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'starterpistol_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'starterpistol_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starterpistol_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starterpistol_content_width', 640 );
}
add_action( 'after_setup_theme', 'starterpistol_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starterpistol_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starterpistol' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starterpistol' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'starterpistol_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starterpistol_scripts() {
	wp_enqueue_style( 'starterpistol-style', get_stylesheet_uri() );

	wp_enqueue_script( 'starterpistol-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'starterpistol-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starterpistol_scripts' );

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

// Custom Functions
define('WPCF7_AUTOP', false );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar 1',
		'id'            => 'sidebar_1',
		'before_widget' => '<div class="sidebar--one">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Sidebar 2',
		'id'            => 'sidebar_2',
		'before_widget' => '<div class="sidebar--two">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Sidebar 3',
		'id'            => 'sidebar_3',
		'before_widget' => '<div class="sidebar--three">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Widget 1',
		'id'            => 'footer_widget_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p class="footer__widget-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Widget 2',
		'id'            => 'footer_widget_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p class="footer__widget-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Widget 3',
		'id'            => 'footer_widget_3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p class="footer__widget-title">',
		'after_title'   => '</p>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

// Add pagination with 1,2,3 numbers to the "Posts In Page" plugin.

class ICPagePosts_Paginate_With_Numbers {

	public function __construct( ) {
		add_filter('posts_in_page_results', array( &$this, 'get_wp_query' ));
		add_filter('posts_in_page_paginate', array( &$this, 'paginate_links' ));
	}

	public function get_wp_query($posts){
		$this->posts = $posts;
		return $posts;
	}

	public function paginate_links($html){
		$obj = get_queried_object();
		$posts = $this->posts;

		if (is_archive() || is_tax()) {
			if ($obj->taxonomy == 'tag'){ $obj->taxonomy = 'post_tag'; }
			$page_url = get_term_link($obj);
		} elseif(is_post_type_archive() ) {
			$page_url = get_post_type_archive_link( get_query_var('post_type') );
		} else {
			$page_url = get_permalink( $obj->ID );
		}

		$page = isset( $_GET['page'] ) ? $_GET['page'] : 1;
		$total_pages = $posts->max_num_pages;
		$per_page = $posts->query_vars['posts_per_page'];
		$curr_page = ( isset( $posts->query_vars['paged'] ) && $posts->query_vars['paged'] > 0	) ? $posts->query_vars['paged'] : 1;
		$prev = ( $curr_page && $curr_page > 1 ) ? '<li><a href="'.$page_url.'?page='. ( $curr_page-1 ).'">Previous</a></li>' : '';
		$next = ( $curr_page && $curr_page < $total_pages ) ? '<li><a href="'.$page_url.'?page='. ( $curr_page+1 ).'">Next</a></li>' : '';
		$numbers = '';
		for ($i = ($curr_page - 2); $i < ($curr_page + 3); $i++){
			if ($i == $curr_page) {
				$numbers .= '<li class="current">' . $i . '</li>';
			} elseif ($i < 1) {
				//do nothing because there are no links before page 1
			} elseif ($i > $total_pages) {
				//do nothing. we don't want to paginate pages that don't exist.
			} else {
			 	$numbers .= '<li><a href="'.$page_url.'?page='. $i .'">' . $i . '</a></li>';
			}
		}
		return '<ul>' . $prev . $numbers . $next . '</ul>';
	}
}
new ICPagePosts_Paginate_With_Numbers();

// Custom Post Formats
add_action( 'after_setup_theme', 'childtheme_formats', 11 );
function childtheme_formats(){
     add_theme_support( 'post-formats', array( 'default', 'aside', 'gallery', 'audio', 'image', 'video' ) );
}

// Renaming Posts Formats
add_filter( 'gettext_with_context', 'rename_post_formats', 10, 4 );

function rename_post_formats( $translation, $text, $context, $domain ) {

    $names = array(
        'Audio'  => 'Album',
        'Aside' => 'Artist',
        'Gallery' => 'Merchandise',
    );
    
    if ( $context == 'Post format' ) {
        $translation = str_replace( array_keys( $names ), array_values( $names ), $text );
    }
    
    return $translation;
}

// Custom Post Types
function create_posttype() {
 
    register_post_type( 'websites',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Websites' ),
                'singular_name' => __( 'Website' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'websites'),
        )
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// Removes unwanted paragraph tags in Advanced Custom Fields Wysiwyg
function the_field_without_wpautop( $field_name ) {
	
	remove_filter('acf_the_content', 'wpautop');
	
	the_field( $field_name );
	
	add_filter('acf_the_content', 'wpautop');
	
}