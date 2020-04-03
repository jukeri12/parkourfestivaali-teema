<?php
/*
 * Used for Parkour-festivaali website to enqueue styles
 * as per Wordpress's child theme documentation
 * 
 * Base is Twenty Twenty theme by Wordpress.org
 * Licensed as GPL 2.0
 * 
 */
add_action( 'wp_enqueue_scripts', 'parkour_festivaali_enqueue_styles' );
add_action( 'widgets_init', 'hero_widgets_init');
function parkour_festivaali_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'parent-style' ),
		wp_get_theme()->get('Version')
	);
}
function hero_widgets_init() {
    register_sidebar( array(
        'name'          => 'Hero Widget Area',
        'id'            => 'hero-widget-area',
        'before_widget' => '<div class="hero-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="hero-title">',
        'after_title'   => '</h2>',
     ));
}