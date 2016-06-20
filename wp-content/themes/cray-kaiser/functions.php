<?php
/**
 * cray-kaiser functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cray-kaiser
 */

if ( ! function_exists( 'cray_kaiser_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cray_kaiser_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cray-kaiser, use a find and replace
	 * to change 'cray-kaiser' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'cray-kaiser', get_template_directory() . '/languages' );

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
	add_image_size( 'featured-thumb', 580, 340, true );
	add_image_size( 'featured-thumb-single', 890, 455, true );
	add_image_size( 'team-thumb', 295, 295, true );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'cray-kaiser' ),
	) );
	
	function register_secondary_menu() {
		register_nav_menu('secondary-menu',__( 'Top (Secondary) Menu' ));
	}
	add_action( 'init', 'register_secondary_menu' );
	
	function register_footer_menu() {
		register_nav_menu('footer-menu',__( 'Footer Menu' ));
	}
	add_action( 'init', 'register_footer_menu' );

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
	
}
endif;
add_action( 'after_setup_theme', 'cray_kaiser_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cray_kaiser_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cray_kaiser_content_width', 640 );
}
add_action( 'after_setup_theme', 'cray_kaiser_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cray_kaiser_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cray-kaiser' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cray_kaiser_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cray_kaiser_scripts() {
	
  wp_enqueue_style( 'base-style', get_template_directory_uri() . '/assets/css/underscores.css' );

  wp_enqueue_style( 'cray-kaiser-style', get_template_directory_uri() . '/assets/css/craykaiser.css' );

  wp_enqueue_script( 'jquery' );
  
	//wp_enqueue_script( 'cray-kaiser-jquery', get_template_directory_uri() . '/assets/js/jquery.1.11.3.min.js', array(), '', true );
	
	wp_enqueue_script( 'cray-kaiser-flexnav', get_template_directory_uri() . '/assets/js/jquery.flexnav.min.js', array(), '', true );

	wp_enqueue_script( 'cray-kaiser-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'cray-kaiser-main', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );
	
	wp_enqueue_script( 'cray-kaiser-team-hovers', get_template_directory_uri() . '/assets/js/team-hovers.js', array( 'jquery' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cray_kaiser_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//======================================================

// Remove Emoji Script
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//======================================================

// Add Page Slug to Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
add_filter( 'body_class', 'add_slug_body_class' );

//======================================================

// Add category nicenames in body and post class
add_filter('body_class','body_class_section');

function body_class_section($classes) {
    global $wpdb, $post;
    if (is_page()) {
        if ($post->post_parent) {
            $parent  = end(get_post_ancestors($current_page_id));
        } else {
            $parent = $post->ID;
        }
        $post_data = get_post($parent, ARRAY_A);
        $classes[] = 'parent-' . $post_data['post_name'];
    }
    return $classes;
}

//======================================================

// Add 'first' and 'last' classes to menu items

add_filter( 'wp_nav_menu_objects', 'tgm_filter_menu_class', 10, 2 );
/**
 * Filters the first and last nav menu objects in your menus
 * to add custom classes.
 *
 * This also supports nested menus.
 *
 * @since 1.0.0
 *
 * @param array $objects   An array of nav menu objects.
 * @param object $args     Nav menu object args.
 * @return object $objects Amended array of nav menu objects with new class.
 */
function tgm_filter_menu_class( $objects, $args ) {

    // Add first/last classes to nested menu items.
    $ids        = array();
    $parent_ids = array();
    $top_ids    = array();
    foreach ( $objects as $i => $object ) {
        // If there is no menu item parent, store the ID and skip over the object.
        if ( 0 == $object->menu_item_parent ) {
            $top_ids[$i] = $object;
            continue;
        }

        // Add first item class to nested menus.
        if ( ! in_array( $object->menu_item_parent, $ids ) ) {
            $objects[$i]->classes[] = 'first';
            $ids[]                  = $object->menu_item_parent;
        }

        // If we have just added the first menu item class, skip over adding the ID.
        if ( in_array( 'first', $object->classes ) ) {
            continue;
        }

        // Store the menu parent IDs in an array.
        $parent_ids[$i] = $object->menu_item_parent;
    }

    // Remove any duplicate values and pull out the last menu item.
    $sanitized_parent_ids = array_unique( array_reverse( $parent_ids, true ) );

    // Loop through the IDs and add the last menu item class to the appropriate objects.
    foreach ( $sanitized_parent_ids as $i => $id ) {
        $objects[$i]->classes[] = 'last';
    }

    // Finish it off by adding classes to the top level menu items.
    $objects[1]->classes[] = 'first'; // We can be assured 1 will be the first item in the menu. :-)
    $objects[end( array_keys( $top_ids ) )]->classes[] = 'last';

    // Return the menu objects.
    return $objects;
}

// Custom posts navigation
function ck_get_the_posts_navigation( $args = array() ) {
    $navigation = '';
 
    // Don't print empty markup if there's only one page.
    if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
        $args = wp_parse_args( $args, array(
            'prev_text'          => __( '&larr; Older Posts' ),
            'next_text'          => __( 'Newer Posts &rarr;' ),
            'screen_reader_text' => __( 'Posts navigation' ),
        ) );
 
        $next_link = get_previous_posts_link( $args['next_text'] );
        $prev_link = get_next_posts_link( $args['prev_text'] );
 
        if ( $prev_link ) {
            $navigation .= '<div class="nav-previous">' . $prev_link . '</div>';
        }
 
        if ( $next_link ) {
            $navigation .= '<div class="nav-next">' . $next_link . '</div>';
        }
 
        $navigation = _navigation_markup( $navigation, 'posts-navigation', $args['screen_reader_text'] );
    }
 
    return $navigation;
}