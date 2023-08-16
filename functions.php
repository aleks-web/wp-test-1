<?php

// Скрипты и стили
require_once(get_template_directory() . '/inc/scripts.php');

add_action('after_setup_theme', function() {
    register_nav_menus([
        'main_menu' => __( 'Главное меню', 'crea' ),
        'foot_menu' => __( 'Меню в подвале', 'crea' ), 
    ]);
});