<?php
function load_css()
{ 
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', 'jquery', false, 'all');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'load_js');

// Add style for Admin Menu Post type and icons, theme settings
function custom_admin_style() {
    wp_enqueue_style('my-admin-style', get_stylesheet_directory_uri() . '/css/admin-style.css');
}
add_action('admin_enqueue_scripts', 'custom_admin_style');

// Adding Theme Support
function asws_init() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list','comment-form', 'search-form')
    );
    add_post_type_support( 'page', 'excerpt' );

    // Register menus
    register_nav_menus(
        array(
            'top-menu' => 'Top Menu',
            'footer-menu' => 'Footer Menu',
            'social-menu' => 'Social Menu'
        )
    );
}
add_action('after_setup_theme', 'asws_init');

// Widget Locations
function asws_init_widgets($id){

    register_sidebar(array(
        'name' => 'Enquiry Form',
        'id' => 'enquiry-form',
        'before_title' => '<h4 class="enquiry-title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'asws_init_widgets');

// Custom Post Types
function post_type_paintings(){
    $args = array(
        'labels' => array(
            'name' => 'Paintings',
            'singular_name' => 'Painting',
        ),
        'hierarchical' => true,
        'public' => true,
        'menu_icon' => 'dashicons-art',
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'paintings'),
    );
    register_post_type('paintings', $args);
}
add_action('init', 'post_type_paintings');

// Custom Taxonomies
function create_medium_and_dimension_taxonomy() {
    $labels = array(
        'name'              => _x( 'Mediums and Dimensions', 'taxonomy general name' ),
        'singular_name'     => _x( 'Medium and Dimension', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Mediums and Dimensions', 'textdomain' ),
        'all_items'         => __( 'All Mediums and Dimensions', 'textdomain' ),
        'parent_item'       => __( 'Parent Medium and Dimension', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Medium and Dimension:', 'textdomain' ),
        'edit_item'         => __( 'Edit Medium and Dimension', 'textdomain' ),
        'update_item'       => __( 'Update Medium and Dimension', 'textdomain' ),
        'add_new_item'      => __( 'Add New Medium and Dimension', 'textdomain' ),
        'new_item_name'     => __( 'New Medium Medium and Dimension', 'textdomain' ),
        'menu_name'         => __( 'Medium and Dimension', 'textdomain' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'mediums-and-dimensions' ),
    );
    register_taxonomy( 'mediums-and-dimensions', array( 'paintings' ), $args );
    // unset( $args );
    // unset( $labels );
}
add_action( 'init', 'create_medium_and_dimension_taxonomy', 0 );

// Customizer File
require get_template_directory() . '/includes/customizer.php';