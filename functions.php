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
add_action( 'customize_controls_enqueue_scripts', 'twentytwenty_child_customize_controls_enqueue_scripts', 20 );
add_action( 'customize_preview_init', 'twentytwenty_child_customize_preview_init', 20 );
add_action( 'customize_register', 'remove_useless_controls', 20 );
add_filter( 'comments_open', 'disable_comments' );
remove_theme_support( 'custom-background' );

/* Functions */
function parkour_festivaali_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'parent-style' ),
		wp_get_theme()->get('Version')
	);
}
function remove_useless_controls() {
    global $wp_customize;
    // TODO: Check these if we want to re-enable some modified customization
    $wp_customize->remove_section( 'options' );
    $wp_customize->remove_section( 'cover_template_options' );
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'background_image' );
}
function add_required_color_theme_controls() {
    // TODO
    return;
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
function twentytwenty_child_customize_controls_enqueue_scripts() {
    return;
}
function twentytwenty_child_customize_preview_init() {
    return;
}
