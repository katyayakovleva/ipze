<?php
/**
 * IPZE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package IPZE
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
function ipze_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on IPZE, use a find and replace
		* to change 'ipze' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ipze', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Primary', 'ipze' ),
			'footer-menu' => esc_html__( 'Footer', 'ipze' ),
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
			'ipze_custom_background_args',
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
add_action( 'after_setup_theme', 'ipze_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ipze_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ipze_content_width', 640 );
}
add_action( 'after_setup_theme', 'ipze_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ipze_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ipze' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ipze' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ipze_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ipze_scripts() {
	wp_enqueue_style( 'ipze-style', get_stylesheet_uri(), array(), rand(111,9999));


	wp_enqueue_style('header_css', get_template_directory_uri(). '/assets/css/header.css', array(), rand(111,9999));
	wp_enqueue_style('footer_css', get_template_directory_uri(). '/assets/css/footer.css', array(), rand(111,9999));
	wp_enqueue_style('main_css', get_template_directory_uri(). '/assets/css/main.css', array(), rand(111,9999));
	wp_enqueue_style('page_css', get_template_directory_uri(). '/assets/css/page.css', array(), rand(111,9999));
	wp_enqueue_style('main_page_css', get_template_directory_uri(). '/assets/css/main_page.css', array(), rand(111,9999));
    wp_enqueue_style('font_awesome_css', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css', array(), rand(111,9999));
	wp_enqueue_style('fonts', get_template_directory_uri(). '/assets/css/fonts.css', array(), rand(111,9999));


    wp_enqueue_script( 'ipze-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), rand(111,9999), true );
	wp_enqueue_script( 'ipze-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), rand(111,9999), true );
	wp_enqueue_script( 'ipze-header-js', get_template_directory_uri() . '/assets/js/header.js', array(), rand(111,9999), true );
	wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), rand(111,9999), true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ipze_scripts' );

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

/**
 * Generate breadcrumbs for showing a navigation page path
 */
// function get_breadcrumb() {
//     echo '<a href="'.home_url().'" rel="nofollow">Головна </a>';
//     if (is_category() || is_single()) {
//         echo ' &nbsp;&nbsp;>&nbsp;&nbsp;  ';
//         the_category(' &bull; ');
//             if (is_single()) {
//                 echo " &nbsp;&nbsp;>&nbsp;&nbsp;  ";
//                 the_title();
//             }
	
//     } 
// 	elseif (is_page()) {

		
// 		$page = get_queried_object();
// 		$parent_id = wp_get_post_parent_id($page);
// 		$parents = array();
		
// 		while($parent_id){
// 			$parents[] = $parent_id;
// 			$page = get_post($parent_id);
// 			$parent_id =  wp_get_post_parent_id($page);
// 		}

// 		$parents = array_reverse($parents);
		
// 		foreach($parents as $parent){
// 			echo " &nbsp;&nbsp;>&nbsp;&nbsp; ";
// 			echo '<a href="'.get_permalink($parent).'" rel="nofollow">';
// 			echo get_the_title($parent);
// 			echo '</a>';
// 		}	
// 		echo " &nbsp;&nbsp;>&nbsp;&nbsp;  ";
//     	echo the_title();
		
//     } 
	
// 	// elseif (is_search()) {
//     //     echo " > Search Results for... ";
//     //     echo '"<em>';
//     //     echo the_search_query();
//     //     echo '</em>"';
//     // }
// }
 /**
 * Generate breadcrumbs for showing a navigation page path
 */
function get_breadcrumb() {
    
    if (is_single()) {
		
		if(in_category("news")){
			// Get the ID of a given category
			$category_id = get_cat_ID( 'news' );
 
			// Get the URL of this category
			$category_link = get_category_link( $category_id );
			echo '<a href="'.esc_url( $category_link ).'" rel="nofollow">Новини</a>';
		}
		elseif(get_post_type()=='teacher'){
			echo '<a href="'.get_post_type_archive_link('teacher').'" rel="nofollow">Викладачі</a>';
		}
		elseif(in_category("science_events")){
			// Get the ID of a given category
			$category_id = get_cat_ID( 'science_events' );
 
			// Get the URL of this category
			$category_link = get_category_link( $category_id );
			echo '<a href="'.esc_url( $category_link ).'" rel="nofollow">Наукові заходи</a>';
		}else{
			echo '<a href="'.home_url().'" rel="nofollow">Головна</a>';
		}
    } 
	elseif (is_page()) {

		
		$page = get_queried_object();
		$parent_id = wp_get_post_parent_id($page);

		if($parent_id){
			
			echo '<a href="'.get_permalink($parent_id).'" rel="nofollow">';
			echo get_the_title($parent_id);
			echo '</a>';
		}else{
			echo '<a href="'.home_url().'" rel="nofollow">Головна</a>';
		}
		
		
		
    } 
	
	// elseif (is_search()) {
    //     echo " > Search Results for... ";
    //     echo '"<em>';
    //     echo the_search_query();
    //     echo '</em>"';
    // }
}
function ipze_teacher_post_type() {
	$labels = array(
	  'name'               => _x( 'Teachers', 'post type general name' ),
	  'singular_name'      => _x( 'Teacher', 'post type singular name' ),
	  'add_new'            => _x( 'Add New', 'teacher' ),
	//   'add_new_item'       => __( 'Add New Teacher' ),
	//   'edit_item'          => __( 'Edit' ),
	//   'new_item'           => __( 'New Product' ),
	//   'all_items'          => __( 'All Products' ),
	//   'view_item'          => __( 'View Product' ),
	//   'search_items'       => __( 'Search Products' ),
	//   'not_found'          => __( 'No products found' ),
	//   'not_found_in_trash' => __( 'No products found in the Trash' ), 
	  
	  'menu_name'          => 'Teachers'
	);
	$args = array(
		'labels'        => $labels,
		'public'        => true,
		'menu_position' => 5,
		'rewrite'       => array( 'slug' => 'teachers' ),
		'capability_type'=> 'post',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
		'hierarchical'  => false,
		'show_in_rest'  => true,

		'template' =>array(
			array( 'core/image', array(
				'align' => 'left'
			) ),
			array( 'core/group', array(), array(
				array( 'core/group', array(), array(
					array( 'core/paragraph', array(
						'placeholder' => 'ФІО та посада викладача'
					) ),
				) ),
				array( 'core/group', array(), array(
					array( 'core/paragraph', array(
						'placeholder' => 'Коротка інформація про викладача '
					) ),
				) ),
			) ),
			
			array( 'core/group', array(), array(
				array( 'core/group', array(), array(
					array( 'core/paragraph', array(
						'content' => 'Сторінка викладача'
					) ),
				) ),
				array( 'core/group', array(), array(
					array( 'core/paragraph', array(
						'content' => 'Розклад викладача'
		
					) ),
				) ),
			) ),
			array( 'core/group', array(), array(
				array( 'core/group', array(), array(
					array( 'core/paragraph', array(
						'content' => 'Основні публікації:'
					) ),
				) ),
				array( 'core/group', array(), array(
					array( 'core/list', array(
						"ordered"=>true
					) ),
				) ),
			) ),
			
		)
	);
	register_post_type( 'teacher', $args ); 
  }
  add_action( 'init', 'ipze_teacher_post_type' );

function remove_category( $string, $type )  {          
	if ( $type != 'single' && $type == 'category' && ( strpos( $string, 'category' ) !== false ) ) {
		$url_without_category = str_replace( "/category/", "/", $string );              
		return trailingslashit( $url_without_category );         
	}      
	return $string;  
}     
add_filter( 'user_trailingslashit', 'remove_category', 100, 2);

