<?php

// include custom Scripts
function custom_scripts() {
    wp_deregister_script('jquery');
    wp_deregister_script('main');
    wp_deregister_script('fancybox');
    wp_deregister_script('swiper');
    wp_deregister_script('inputmask');
    wp_deregister_script('jquery-cookie');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), null, array('in_footer' => false));
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, array('in_footer' => false));
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array('jquery'), null, array('in_footer' => true));
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), null, array('in_footer' => false));
    wp_enqueue_script('inputmask', get_template_directory_uri() . '/assets/js/inputmask.min.js', array('jquery'), null, array('in_footer' => false));
    wp_enqueue_script('jquery-cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.min.js', array('jquery'), null, array('in_footer' => false));
}
add_action('wp_enqueue_scripts', 'custom_scripts');


// include custom Style
function custom_style() {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css');
}

add_action('wp_enqueue_scripts', 'custom_style', 10);