<?php

function load_stylesheets(){
    //Register a CSS stylesheet.
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    //Enqueue CSS stylesheet.
    wp_enqueue_style('stylesheet');
    
    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
} 
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add Theme Support. Registers theme support for a given feature.
// https://developer.wordpress.org/reference/functions/add_theme_support/
add_theme_support('menus');
add_theme_support('post-thumbnails');

// woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Register menus
register_nav_menus(
    array (
        'top-menu' => 'Top Menu',
        'act-menu' => 'Act Menu',
        'cat-menu' => 'Category Menu'
    )
    );

// /**
//  * Register BootStrap Custom Navigation Walker
// */
// function register_navwalker(){
// 	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );

// add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
// /**
//  * Use namespaced data attribute for Bootstrap's dropdown toggles.
//  *
//  * @param array    $atts HTML attributes applied to the item's `<a>` element.
//  * @param WP_Post  $item The current menu item.
//  * @param stdClass $args An object of wp_nav_menu() arguments.
//  * @return array
//  */
// function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    //     if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        //         if ( array_key_exists( 'data-toggle', $atts ) ) {
            //             unset( $atts['data-toggle'] );
            //             $atts['data-bs-toggle'] = 'dropdown';
            //         }
            //     }
            //     return $atts;
            // }
            
/**
    * Register Custom Navigation Walker File
 */


require get_template_directory() . '/include/walker.php';


// Image Size
add_image_size('post_image', 1100 , 750 , true);
add_image_size('post_thumb', 800 , 600 , true);



// Widgets
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        )
    );

register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'class' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
            )
        );
register_sidebar(
        array(
            'name' => 'Hero Sidebar',
            'id' => 'hero-sidebar',
            'class' => ' heroSidebar',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
            )
        );

                    // Filters

// ReadMore filter
function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more" href="%1$s">%2$s </a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );