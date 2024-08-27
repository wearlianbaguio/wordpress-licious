<?php 

function desilicious_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());
}

add_action('wp_enqueue_scripts', 'desilicious_assets');


add_theme_support( 'post-thumbnails');




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
}

add_action ('init', 'desilicious_custom_post');