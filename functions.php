<?php 

function desilicious_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());
    wp_enqueue_style('main-slider', "https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css", '1.0');

    wp_enqueue_script("slider-script", "https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js", [], "1.0", true );
    wp_enqueue_script("main-js", get_template_directory_uri() . '/script/slider.js', [], microtime(), true );
}

add_action('wp_enqueue_scripts', 'desilicious_assets');

function desilicious_theme_support() {

    add_theme_support( 'post-thumbnails');
    add_theme_support( 'custom-logo');
    add_theme_support( 'menus');
    add_theme_support( 'title-tag');

    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_1_menu', 'Footer 1 Menu');
    register_nav_menu('footer_2_menu', 'Footer 2 Menu');

} 

add_action('after_setup_theme', 'desilicious_theme_support');


function desilicious_custom_post() {
    $rice_label = array(
        'name' => __('Rice', 'textdomain'),
        'singular_name' => __('Rice', 'textdomain'),
        'add_new' => __('Add Rice', 'textdomain'),
        'edit_item' => __('Edit Rice', 'textdomain'),
        'add_new_item' => __('Add New Rice', 'textdomain'),
        'all_items' => __('Rice', 'textdomain'),

    );
  $rice_args = array(
        'labels' => $rice_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
        register_post_type('rice', $rice_args);

        
    $chicken_label = array(
        'name' => __('Chicken', 'textdomain'),
        'singular_name' => __('Chicken', 'textdomain'),
        'add_new' => __('Add Chicken', 'textdomain'),
        'edit_item' => __('Edit Chicken', 'textdomain'),
        'add_new_item' => __('Add New Chicken', 'textdomain'),
        'all_items' => __('Chicken', 'textdomain'),

    );
  $chicken_args = array(
        'labels' => $chicken_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    
    register_post_type('chicken', $chicken_args);




    $salad_label = array(
        'name' => __('Salad', 'textdomain'),
        'singular_name' => __('Salad', 'textdomain'),
        'add_new' => __('Add Salad', 'textdomain'),
        'edit_item' => __('Edit Salad', 'textdomain'),
        'add_new_item' => __('Add New Salad', 'textdomain'),
        'all_items' => __('Salad', 'textdomain'),

    );
  $salad_args = array(
        'labels' => $salad_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
    register_post_type('salad', $salad_args);
    




    $menu_label = array(
        'name' => __('Menus', 'textdomain'),
        'singular_name' => __('Menu', 'textdomain'),
        'add_new' => __('Add Menu', 'textdomain'),
        'edit_item' => __('Edit Menu', 'textdomain'),
        'add_new_item' => __('Add New Menu', 'textdomain'),
        'all_items' => __('Menus', 'textdomain'),

    );
  $menu_args = array(
        'labels' => $menu_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    );
    register_post_type('menus', $menu_args);



    $testimonial_label = array(
    'name' => __('Testimonials', 'textdomain'),
    'singular_name' => __('Testimonial', 'textdomain'),
    'add_new' => __('Add Testimonial', 'textdomain'),
    'edit_item' => __('Edit Testimonial', 'textdomain'),
    'add_new_item' => __('Add New Testimonial', 'textdomain'),
    'all_items' => __('Testimonials', 'textdomain'),
    );
  
    $testimonial_args = array(
        'labels' => $testimonial_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields')
    );
    register_post_type('testimonials', $testimonial_args);



    $chef_label = array(
    'name' => __('Chefs', 'textdomain'),
    'singular_name' => __('Chef', 'textdomain'),
    'add_new' => __('Add Chef', 'textdomain'),
    'edit_item' => __('Edit Chef', 'textdomain'),
    'add_new_item' => __('Add New Chef', 'textdomain'),
    'all_items' => __('Chefs', 'textdomain'),
    );
  
    $chef_args = array(
        'labels' => $chef_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    );
    register_post_type('chefs', $chef_args);
}

add_action ('init', 'desilicious_custom_post');