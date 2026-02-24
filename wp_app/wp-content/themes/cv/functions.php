<?php

function ca_add_thumbnails() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ca_add_thumbnails');

function ca_theme_menu_sidebar(){
    register_nav_menus([
        'main' => 'Menu principal'
    ]);
}

add_action('init', 'ca_theme_menu_sidebar');