<?php
/*
 * Used for Parkour-festivaali website to enqueue styles
 * as per Wordpress's child theme documentation
 * 
 * Base is Twenty Twenty theme by Wordpress.org
 * Licensed as GPL 2.0
 * 
 */

/* Filters and actions */
add_action( 'wp_enqueue_scripts', 'parkour_festivaali_enqueue_styles' );
add_action( 'widgets_init', 'parkour_festivaali_widgets_init');
add_action( 'init', 'parkour_festivaali_menus_init' );
add_filter('comments_open', 'disable_comments');

/* Functions */
function parkour_festivaali_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'parent-style' ),
		wp_get_theme()->get('Version')
	);
}
function parkour_festivaali_widgets_init() {
    register_sidebar( array(
        'name'          => 'Hero Widget Area',
        'id'            => 'hero-widget-area',
        'before_widget' => '<div class="hero-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="hero-title">',
        'after_title'   => '</h2>',
    ));
}
function parkour_festivaali_menus_init() {
    register_nav_menus( array(
        'info-page-sidebar-menu' => 'Content Page Sidebar Menu',
    ));
}
function disable_comments() {
    // Does what it says it does.
    return false;
}
