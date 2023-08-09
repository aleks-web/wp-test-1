<?php

// Подключаем файл с ajax обработчиком
// require_once(get_template_directory() . '/inc/ajax.php');


// include custom jQuery
function shapeSpace_include_custom_jquery() {
    wp_deregister_script('jquery');
    wp_deregister_script('mask');
    wp_deregister_script('main');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), null, array('in_footer' => false));
    wp_enqueue_script('mask', get_template_directory_uri() . '/assets/js/jquery.maskedinput.js', array('jquery'), null, array('in_footer' => false));
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, array('in_footer' => true));
}

add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');