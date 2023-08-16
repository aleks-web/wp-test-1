<?php

// include custom Scripts
function custom_scripts() {
    wp_deregister_script('jquery');
    wp_deregister_script('main');
    wp_deregister_script('fancybox');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), null, array('in_footer' => false));
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, array('in_footer' => true));
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array('jquery'), null, array('in_footer' => true));
}
add_action('wp_enqueue_scripts', 'custom_scripts');


// include custom Style
function custom_style() {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.css');
}

add_action('wp_enqueue_scripts', 'custom_style', 10);