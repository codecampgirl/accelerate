<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate_Marketing
 * @since Accelerate Marketing 1.1
 */

 
 // add custom post type function for case-studies, our-services //
 function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
    
    register_post_type( 'our_services',
        array(
            'labels' => array(
                'name' => __( 'Our Services' ),
                'singular_name' => __( 'Our Service' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array( 'slug' => 'services' ),
        )
    );
    
    register_post_type( 'about_services_intro',
        array(
            'labels' => array(
                'name' => __( 'About Services Intro' ),
                'singular_name' => __( 'about_service_intro' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array( 'slug' => 'about_services_intro' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

// add twitter sidebar to homegape //
function accelerate_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );


// Monika add mobile stylesheet to child theme //
// wp_register_style( $handle, $src, $deps, $ver, $media );
// load css into the website's front-end //
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  // wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
  
  wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css', array(), '1.0', 'all');
 
  // wp_enqueue_style( 'mobile', get_template_directory_uri() . 'mobile.css', array(), '1.0', 'all');
 
  // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
 
  //  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //   wp_enqueue_script( 'comment-reply' );
  //  }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



?>