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
function cv_theme_setup() {
	register_sidebar( array(
		'id'            => 'blog-sidebar',
		'name'          => 'CV',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div class="site_sidebar_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widgettitle">',
		'after_title'   => '</p>'
	) );
}
function cv2_theme_setup() {
	register_sidebar( array(
		'id'            => 'blog-sidebar-2',
		'name'          => 'CV2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div class="site_sidebar_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widgettitle">',
		'after_title'   => '</p>'
	) );
}
function cv3_theme_setup() {
	register_sidebar( array(
		'id'            => 'blog-sidebar-3',
		'name'          => 'CV3',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div class="site_sidebar2_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widgettitle">',
		'after_title'   => '</p>'
	) );
}
add_action( 'widgets_init', 'cv_theme_setup' );
add_action('widgets_init', 'cv2_theme_setup');
add_action('widgets_init', 'cv3_theme_setup');
add_action('init', 'ca_theme_menu_sidebar');
